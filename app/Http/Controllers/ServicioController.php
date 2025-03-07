<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServicioRequest;
use App\Http\Requests\UpdateServicioRequest;
use App\Repositories\ServicioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Tecnico;
use App\Models\TipoServicio;
use App\Models\Estado;
use App\Models\Equipo;
use App\Models\Cliente;
use App\Models\Servicio;

class ServicioController extends AppBaseController
{
    /** @var ServicioRepository $servicioRepository*/
    private $servicioRepository;

    public function __construct(ServicioRepository $servicioRepo)
    {
        $this->servicioRepository = $servicioRepo;
    }

    /**
     * Display a listing of the Servicio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $servicios = $this->servicioRepository->all();

        return view('servicios.index')
            ->with('servicios', $servicios);
    }

    /**
     * Show the form for creating a new Servicio.
     *
     * @return Response
     */
    public function create()
    {
        $tecnicos = Tecnico::pluck('primer_nombre', 'tecnico_id');
        $tipoServicios = TipoServicio::pluck('descripcion', 'tiposervicio_id'); 
        $estados = Estado::pluck('descripcion', 'estado_id');
        $equipos = Equipo::pluck('tipoequipo_id', 'equipo_id');
        $clientes = Cliente::pluck('primer_nombre', 'id');

        return view('servicios.create', compact('tecnicos', 'tipoServicios', 'estados', 'equipos', 'clientes'));
    }

    /**
     * Store a newly created Servicio in storage.
     *
     * @param CreateServicioRequest $request
     *
     * @return Response
     */
    public function store(CreateServicioRequest $request)
    {
        $input = $request->all();

        $servicio = $this->servicioRepository->create($input);

        Flash::success('Servicio saved successfully.');

        return redirect(route('servicios.index'));
    }

    /**
     * Display the specified Servicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicios.index'));
        }

        return view('servicios.show')->with('servicio', $servicio);
    }

    /**
     * Show the form for editing the specified Servicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);
        $tecnicos = Tecnico::pluck('primer_nombre', 'tecnico_id'); 
        $tipoServicios = TipoServicio::pluck('descripcion', 'tiposervicio_id');
        $estados = Estado::pluck('descripcion', 'estado_id');
        $equipos = Equipo::pluck('tipoequipo_id', 'equipo_id');
        $clientes = Cliente::pluck('primer_nombre', 'id');

        return view('servicios.edit', compact('servicio', 'tecnicos', 'tipoServicios', 'estados', 'equipos', 'clientes'));
    }

    /**
     * Update the specified Servicio in storage.
     *
     * @param int $id
     * @param UpdateServicioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicioRequest $request)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicios.index'));
        }

        $servicio = $this->servicioRepository->update($request->all(), $id);

        Flash::success('Servicio updated successfully.');

        return redirect(route('servicios.index'));
    }

    /**
     * Remove the specified Servicio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicios.index'));
        }

        $this->servicioRepository->delete($id);

        Flash::success('Servicio deleted successfully.');

        return redirect(route('servicios.index'));
    }
}
