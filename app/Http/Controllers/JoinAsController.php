<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJoinAsRequest;
use App\Http\Requests\UpdateJoinAsRequest;
use App\Repositories\JoinAsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JoinAsController extends AppBaseController
{
    /** @var  JoinAsRepository */
    private $joinAsRepository;

    public function __construct(JoinAsRepository $joinAsRepo)
    {
        $this->joinAsRepository = $joinAsRepo;
    }

    /**
     * Display a listing of the JoinAs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $joinAs = $this->joinAsRepository->paginate(5);

        return view('join_as.index')
            ->with('joinAs', $joinAs);
    }

    /**
     * Show the form for creating a new JoinAs.
     *
     * @return Response
     */
    public function create()
    {
        return view('join_as.create');
    }

    /**
     * Store a newly created JoinAs in storage.
     *
     * @param CreateJoinAsRequest $request
     *
     * @return Response
     */
    public function store(CreateJoinAsRequest $request)
    {
        $input = $request->all();

        $joinAs = $this->joinAsRepository->create($input);

        Flash::success('Join As saved successfully.');

        return redirect(route('joinAs.index'));
    }

    /**
     * Display the specified JoinAs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $joinAs = $this->joinAsRepository->find($id);

        if (empty($joinAs)) {
            Flash::error('Join As not found');

            return redirect(route('joinAs.index'));
        }

        return view('join_as.show')->with('joinAs', $joinAs);
    }

    /**
     * Show the form for editing the specified JoinAs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $joinAs = $this->joinAsRepository->find($id);

        if (empty($joinAs)) {
            Flash::error('Join As not found');

            return redirect(route('joinAs.index'));
        }

        return view('join_as.edit')->with('joinAs', $joinAs);
    }

    /**
     * Update the specified JoinAs in storage.
     *
     * @param int $id
     * @param UpdateJoinAsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJoinAsRequest $request)
    {
        $joinAs = $this->joinAsRepository->find($id);

        if (empty($joinAs)) {
            Flash::error('Join As not found');

            return redirect(route('joinAs.index'));
        }

        $joinAs = $this->joinAsRepository->update($request->all(), $id);

        Flash::success('Join As updated successfully.');

        return redirect(route('joinAs.index'));
    }

    /**
     * Remove the specified JoinAs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $joinAs = $this->joinAsRepository->find($id);

        if (empty($joinAs)) {
            Flash::error('Join As not found');

            return redirect(route('joinAs.index'));
        }

        $this->joinAsRepository->delete($id);

        Flash::success('Join As deleted successfully.');

        return redirect(route('joinAs.index'));
    }
}
