<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTecnicoRequest;
use App\Http\Requests\UpdateTecnicoRequest;
use App\Repositories\TecnicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TecnicoController extends AppBaseController
{
    /** @var TecnicoRepository $tecnicoRepository*/
    private $tecnicoRepository;

    public function __construct(TecnicoRepository $tecnicoRepo)
    {
        $this->tecnicoRepository = $tecnicoRepo;
    }

    /**
     * Display a listing of the Tecnico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tecnicos = $this->tecnicoRepository->all();

        return view('tecnicos.index')
            ->with('tecnicos', $tecnicos);
    }

    /**
     * Show the form for creating a new Tecnico.
     *
     * @return Response
     */
    public function create()
    {
        return view('tecnicos.create');
    }

    /**
     * Store a newly created Tecnico in storage.
     *
     * @param CreateTecnicoRequest $request
     *
     * @return Response
     */
    public function store(CreateTecnicoRequest $request)
    {
        $input = $request->all();

        $tecnico = $this->tecnicoRepository->create($input);

        Flash::success('Tecnico saved successfully.');

        return redirect(route('tecnicos.index'));
    }

    /**
     * Display the specified Tecnico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tecnico = $this->tecnicoRepository->find($id);

        if (empty($tecnico)) {
            Flash::error('Tecnico not found');

            return redirect(route('tecnicos.index'));
        }

        return view('tecnicos.show')->with('tecnico', $tecnico);
    }

    /**
     * Show the form for editing the specified Tecnico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tecnico = $this->tecnicoRepository->find($id);

        if (empty($tecnico)) {
            Flash::error('Tecnico not found');

            return redirect(route('tecnicos.index'));
        }

        return view('tecnicos.edit')->with('tecnico', $tecnico);
    }

    /**
     * Update the specified Tecnico in storage.
     *
     * @param int $id
     * @param UpdateTecnicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTecnicoRequest $request)
    {
        $tecnico = $this->tecnicoRepository->find($id);

        if (empty($tecnico)) {
            Flash::error('Tecnico not found');

            return redirect(route('tecnicos.index'));
        }

        $tecnico = $this->tecnicoRepository->update($request->all(), $id);

        Flash::success('Tecnico updated successfully.');

        return redirect(route('tecnicos.index'));
    }

    /**
     * Remove the specified Tecnico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tecnico = $this->tecnicoRepository->find($id);

        if (empty($tecnico)) {
            Flash::error('Tecnico not found');

            return redirect(route('tecnicos.index'));
        }

        $this->tecnicoRepository->delete($id);

        Flash::success('Tecnico deleted successfully.');

        return redirect(route('tecnicos.index'));
    }
}
