<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProgrammAndServiceRequest;
use App\Http\Requests\UpdateProgrammAndServiceRequest;
use App\Repositories\ProgrammAndServiceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProgrammAndServiceController extends AppBaseController
{
    /** @var  ProgrammAndServiceRepository */
    private $programmAndServiceRepository;

    public function __construct(ProgrammAndServiceRepository $programmAndServiceRepo)
    {

        $this->middleware('can:Programs And Services content');
        $this->programmAndServiceRepository = $programmAndServiceRepo;
    }

    /**
     * Display a listing of the ProgrammAndService.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $programmAndServices = $this->programmAndServiceRepository->paginate(15);

        return view('programm_and_services.index')
            ->with('programmAndServices', $programmAndServices);
    }

    /**
     * Show the form for creating a new ProgrammAndService.
     *
     * @return Response
     */
    public function create()
    {
        return view('programm_and_services.create');
    }

    /**
     * Store a newly created ProgrammAndService in storage.
     *
     * @param CreateProgrammAndServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateProgrammAndServiceRequest $request)
    {
        $input = $request->all();

        $programmAndService = $this->programmAndServiceRepository->create($input);
        if($request->hasFile('file'))
        $programmAndService
           ->addMedia($request->file)
           ->toMediaCollection();

        Flash::success('Programm And Service saved successfully.');

        return redirect(route('programmAndServices.index'));
    }

    /**
     * Display the specified ProgrammAndService.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $programmAndService = $this->programmAndServiceRepository->find($id);

        if (empty($programmAndService)) {
            Flash::error('Programm And Service not found');

            return redirect(route('programmAndServices.index'));
        }

        return view('programm_and_services.show')->with('programmAndService', $programmAndService);
    }

    /**
     * Show the form for editing the specified ProgrammAndService.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programmAndService = $this->programmAndServiceRepository->find($id);

        if (empty($programmAndService)) {
            Flash::error('Programm And Service not found');

            return redirect(route('programmAndServices.index'));
        }

        return view('programm_and_services.edit')->with('programmAndService', $programmAndService);
    }

    /**
     * Update the specified ProgrammAndService in storage.
     *
     * @param int $id
     * @param UpdateProgrammAndServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgrammAndServiceRequest $request)
    {
        $programmAndService = $this->programmAndServiceRepository->find($id);

        if (empty($programmAndService)) {
            Flash::error('Programm And Service not found');

            return redirect(route('programmAndServices.index'));
        }

        if($request->hasFile('file')){
            foreach ($programmAndService->getMedia() as $media) {
                $media->delete();

            }
            $programmAndService
            ->addMedia($request->file)
            ->toMediaCollection();
        }

        $programmAndService = $this->programmAndServiceRepository->update($request->all(), $id);

        Flash::success('Programm And Service updated successfully.');

        return redirect(route('programmAndServices.index'));
    }

    /**
     * Remove the specified ProgrammAndService from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programmAndService = $this->programmAndServiceRepository->find($id);

        if (empty($programmAndService)) {
            Flash::error('Programm And Service not found');

            return redirect(route('programmAndServices.index'));
        }

        $this->programmAndServiceRepository->delete($id);

        Flash::success('Programm And Service deleted successfully.');

        return redirect(route('programmAndServices.index'));
    }
}
