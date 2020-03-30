<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSpareTimeRequest;
use App\Http\Requests\UpdateSpareTimeRequest;
use App\Repositories\SpareTimeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SpareTimeController extends AppBaseController
{
    /** @var  SpareTimeRepository */
    private $spareTimeRepository;

    public function __construct(SpareTimeRepository $spareTimeRepo)
    {
        $this->spareTimeRepository = $spareTimeRepo;
    }

    /**
     * Display a listing of the SpareTime.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $spareTimes = $this->spareTimeRepository->paginate(15);

        return view('spare_times.index')
            ->with('spareTimes', $spareTimes);
    }

    /**
     * Show the form for creating a new SpareTime.
     *
     * @return Response
     */
    public function create()
    {
        return view('spare_times.create');
    }

    /**
     * Store a newly created SpareTime in storage.
     *
     * @param CreateSpareTimeRequest $request
     *
     * @return Response
     */
    public function store(CreateSpareTimeRequest $request)
    {
        $input = $request->all();

        $spareTime = $this->spareTimeRepository->create($input);

        Flash::success('Spare Time saved successfully.');

        return redirect(route('spareTimes.index'));
    }

    /**
     * Display the specified SpareTime.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $spareTime = $this->spareTimeRepository->find($id);

        if (empty($spareTime)) {
            Flash::error('Spare Time not found');

            return redirect(route('spareTimes.index'));
        }

        return view('spare_times.show')->with('spareTime', $spareTime);
    }

    /**
     * Show the form for editing the specified SpareTime.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $spareTime = $this->spareTimeRepository->find($id);

        if (empty($spareTime)) {
            Flash::error('Spare Time not found');

            return redirect(route('spareTimes.index'));
        }

        return view('spare_times.edit')->with('spareTime', $spareTime);
    }

    /**
     * Update the specified SpareTime in storage.
     *
     * @param int $id
     * @param UpdateSpareTimeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSpareTimeRequest $request)
    {
        $spareTime = $this->spareTimeRepository->find($id);

        if (empty($spareTime)) {
            Flash::error('Spare Time not found');

            return redirect(route('spareTimes.index'));
        }

        $spareTime = $this->spareTimeRepository->update($request->all(), $id);

        Flash::success('Spare Time updated successfully.');

        return redirect(route('spareTimes.index'));
    }

    /**
     * Remove the specified SpareTime from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $spareTime = $this->spareTimeRepository->find($id);

        if (empty($spareTime)) {
            Flash::error('Spare Time not found');

            return redirect(route('spareTimes.index'));
        }

        $this->spareTimeRepository->delete($id);

        Flash::success('Spare Time deleted successfully.');

        return redirect(route('spareTimes.index'));
    }
}
