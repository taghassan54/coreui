<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgeRangesRequest;
use App\Http\Requests\UpdateAgeRangesRequest;
use App\Repositories\AgeRangesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AgeRangesController extends AppBaseController
{
    /** @var  AgeRangesRepository */
    private $ageRangesRepository;

    public function __construct(AgeRangesRepository $ageRangesRepo)
    {
        $this->ageRangesRepository = $ageRangesRepo;
    }

    /**
     * Display a listing of the AgeRanges.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ageRanges = $this->ageRangesRepository->paginate(5);

        return view('age_ranges.index')
            ->with('ageRanges', $ageRanges);
    }

    /**
     * Show the form for creating a new AgeRanges.
     *
     * @return Response
     */
    public function create()
    {
        return view('age_ranges.create');
    }

    /**
     * Store a newly created AgeRanges in storage.
     *
     * @param CreateAgeRangesRequest $request
     *
     * @return Response
     */
    public function store(CreateAgeRangesRequest $request)
    {
        $input = $request->all();

        $ageRanges = $this->ageRangesRepository->create($input);

        Flash::success('Age Ranges saved successfully.');

        return redirect(route('ageRanges.index'));
    }

    /**
     * Display the specified AgeRanges.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ageRanges = $this->ageRangesRepository->find($id);

        if (empty($ageRanges)) {
            Flash::error('Age Ranges not found');

            return redirect(route('ageRanges.index'));
        }

        return view('age_ranges.show')->with('ageRanges', $ageRanges);
    }

    /**
     * Show the form for editing the specified AgeRanges.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ageRanges = $this->ageRangesRepository->find($id);

        if (empty($ageRanges)) {
            Flash::error('Age Ranges not found');

            return redirect(route('ageRanges.index'));
        }

        return view('age_ranges.edit')->with('ageRanges', $ageRanges);
    }

    /**
     * Update the specified AgeRanges in storage.
     *
     * @param int $id
     * @param UpdateAgeRangesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgeRangesRequest $request)
    {
        $ageRanges = $this->ageRangesRepository->find($id);

        if (empty($ageRanges)) {
            Flash::error('Age Ranges not found');

            return redirect(route('ageRanges.index'));
        }

        $ageRanges = $this->ageRangesRepository->update($request->all(), $id);

        Flash::success('Age Ranges updated successfully.');

        return redirect(route('ageRanges.index'));
    }

    /**
     * Remove the specified AgeRanges from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ageRanges = $this->ageRangesRepository->find($id);

        if (empty($ageRanges)) {
            Flash::error('Age Ranges not found');

            return redirect(route('ageRanges.index'));
        }

        $this->ageRangesRepository->delete($id);

        Flash::success('Age Ranges deleted successfully.');

        return redirect(route('ageRanges.index'));
    }
}
