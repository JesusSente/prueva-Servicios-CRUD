<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoServicioRequest;
use App\Http\Requests\UpdateTipoServicioRequest;
use App\Repositories\TipoServicioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TipoServicioController extends AppBaseController
{
    /** @var TipoServicioRepository $tipoServicioRepository*/
    private $tipoServicioRepository;

    public function __construct(TipoServicioRepository $tipoServicioRepo)
    {
        $this->tipoServicioRepository = $tipoServicioRepo;
    }

    /**
     * Display a listing of the TipoServicio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoServicios = $this->tipoServicioRepository->all();

        return view('tipo_servicios.index')
            ->with('tipoServicios', $tipoServicios);
    }

    /**
     * Show the form for creating a new TipoServicio.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_servicios.create');
    }

    /**
     * Store a newly created TipoServicio in storage.
     *
     * @param CreateTipoServicioRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoServicioRequest $request)
    {
        $input = $request->all();

        $tipoServicio = $this->tipoServicioRepository->create($input);

        Flash::success('Tipo Servicio saved successfully.');

        return redirect(route('tipoServicios.index'));
    }

    /**
     * Display the specified TipoServicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoServicio = $this->tipoServicioRepository->find($id);

        if (empty($tipoServicio)) {
            Flash::error('Tipo Servicio not found');

            return redirect(route('tipoServicios.index'));
        }

        return view('tipo_servicios.show')->with('tipoServicio', $tipoServicio);
    }

    /**
     * Show the form for editing the specified TipoServicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoServicio = $this->tipoServicioRepository->find($id);

        if (empty($tipoServicio)) {
            Flash::error('Tipo Servicio not found');

            return redirect(route('tipoServicios.index'));
        }

        return view('tipo_servicios.edit')->with('tipoServicio', $tipoServicio);
    }

    /**
     * Update the specified TipoServicio in storage.
     *
     * @param int $id
     * @param UpdateTipoServicioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoServicioRequest $request)
    {
        $tipoServicio = $this->tipoServicioRepository->find($id);

        if (empty($tipoServicio)) {
            Flash::error('Tipo Servicio not found');

            return redirect(route('tipoServicios.index'));
        }

        $tipoServicio = $this->tipoServicioRepository->update($request->all(), $id);

        Flash::success('Tipo Servicio updated successfully.');

        return redirect(route('tipoServicios.index'));
    }

    /**
     * Remove the specified TipoServicio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoServicio = $this->tipoServicioRepository->find($id);

        if (empty($tipoServicio)) {
            Flash::error('Tipo Servicio not found');

            return redirect(route('tipoServicios.index'));
        }

        $this->tipoServicioRepository->delete($id);

        Flash::success('Tipo Servicio deleted successfully.');

        return redirect(route('tipoServicios.index'));
    }
}
