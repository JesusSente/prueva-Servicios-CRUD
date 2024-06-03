<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInformeServicioRequest;
use App\Http\Requests\UpdateInformeServicioRequest;
use App\Repositories\InformeServicioRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\InformeServicio;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Flash;
use Response;


class InformeServicioController extends AppBaseController
{
    /** @var InformeServicioRepository $informeServicioRepository*/
    private $informeServicioRepository;

    public function __construct(InformeServicioRepository $informeServicioRepo)
    {
        $this->informeServicioRepository = $informeServicioRepo;
    }

    /**
     * Display a listing of the InformeServicio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $informeServicios = $this->informeServicioRepository->all();

        return view('informe_servicios.index')
            ->with('informeServicios', $informeServicios);
    }

    /**
     * Show the form for creating a new InformeServicio.
     *
     * @return Response
     */
    public function create()
    {
        $servicios = Servicio::pluck('cliente_id', 'servicio_id');

        return view('informe_servicios.create', compact('servicios'));
    }

    /**
     * Store a newly created InformeServicio in storage.
     *
     * @param CreateInformeServicioRequest $request
     *
     * @return Response
     */
    public function store(CreateInformeServicioRequest $request)
    {
        $input = $request->all();

        $informeServicio = $this->informeServicioRepository->create($input);

        Flash::success('Informe Servicio saved successfully.');

        return redirect(route('informeServicios.index'));
    }

    /**
     * Display the specified InformeServicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $informeServicio = $this->informeServicioRepository->find($id);

        if (empty($informeServicio)) {
            Flash::error('Informe Servicio not found');

            return redirect(route('informeServicios.index'));
        }

        return view('informe_servicios.show')->with('informeServicio', $informeServicio);
    }

    /**
     * Show the form for editing the specified InformeServicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $informeServicio = InformeServicio::findOrFail($id);
        $servicios = Servicio::pluck('cliente_id', 'servicio_id');

        return view('informe_servicios.edit', compact('informeServicio', 'servicios'));
    }

    /**
     * Update the specified InformeServicio in storage.
     *
     * @param int $id
     * @param UpdateInformeServicioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInformeServicioRequest $request)
    {
        $informeServicio = $this->informeServicioRepository->find($id);

        if (empty($informeServicio)) {
            Flash::error('Informe Servicio not found');

            return redirect(route('informeServicios.index'));
        }

        $informeServicio = $this->informeServicioRepository->update($request->all(), $id);

        Flash::success('Informe Servicio updated successfully.');

        return redirect(route('informeServicios.index'));
    }

    /**
     * Remove the specified InformeServicio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $informeServicio = $this->informeServicioRepository->find($id);

        if (empty($informeServicio)) {
            Flash::error('Informe Servicio not found');

            return redirect(route('informeServicios.index'));
        }

        $this->informeServicioRepository->delete($id);

        Flash::success('Informe Servicio deleted successfully.');

        return redirect(route('informeServicios.index'));
    }
}
