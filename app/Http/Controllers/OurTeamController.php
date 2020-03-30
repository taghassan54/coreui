<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOurTeamRequest;
use App\Http\Requests\UpdateOurTeamRequest;
use App\Repositories\OurTeamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OurTeamController extends AppBaseController
{
    /** @var  OurTeamRepository */
    private $ourTeamRepository;

    public function __construct(OurTeamRepository $ourTeamRepo)
    {
        $this->ourTeamRepository = $ourTeamRepo;
        $this->middleware('can:Gallery content');
    }

    /**
     * Display a listing of the OurTeam.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ourTeams = $this->ourTeamRepository->paginate(5);

        return view('our_teams.index')
            ->with('ourTeams', $ourTeams);
    }

    /**
     * Show the form for creating a new OurTeam.
     *
     * @return Response
     */
    public function create()
    {
        return view('our_teams.create');
    }

    /**
     * Store a newly created OurTeam in storage.
     *
     * @param CreateOurTeamRequest $request
     *
     * @return Response
     */
    public function store(CreateOurTeamRequest $request)
    {
        $input = $request->all();

        $ourTeam = $this->ourTeamRepository->create($input);
        if($request->hasFile('file'))
        $ourTeam
           ->addMedia($request->file)
           ->toMediaCollection();
        Flash::success('Our Team saved successfully.');

        return redirect(route('ourTeams.index'));
    }

    /**
     * Display the specified OurTeam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ourTeam = $this->ourTeamRepository->find($id);

        if (empty($ourTeam)) {
            Flash::error('Our Team not found');

            return redirect(route('ourTeams.index'));
        }

        return view('our_teams.show')->with('ourTeam', $ourTeam);
    }

    /**
     * Show the form for editing the specified OurTeam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ourTeam = $this->ourTeamRepository->find($id);

        if (empty($ourTeam)) {
            Flash::error('Our Team not found');

            return redirect(route('ourTeams.index'));
        }

        return view('our_teams.edit')->with('ourTeam', $ourTeam);
    }

    /**
     * Update the specified OurTeam in storage.
     *
     * @param int $id
     * @param UpdateOurTeamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOurTeamRequest $request)
    {
        $ourTeam = $this->ourTeamRepository->find($id);

        if (empty($ourTeam)) {
            Flash::error('Our Team not found');

            return redirect(route('ourTeams.index'));
        }
        if($request->hasFile('file')){
            foreach ($ourTeam->getMedia() as $media) {
                $media->delete();

            }
            $ourTeam
            ->addMedia($request->file)
            ->toMediaCollection();
        }
        $ourTeam = $this->ourTeamRepository->update($request->all(), $id);

        Flash::success('Our Team updated successfully.');

        return redirect(route('ourTeams.index'));
    }

    /**
     * Remove the specified OurTeam from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ourTeam = $this->ourTeamRepository->find($id);

        if (empty($ourTeam)) {
            Flash::error('Our Team not found');

            return redirect(route('ourTeams.index'));
        }

        $this->ourTeamRepository->delete($id);

        Flash::success('Our Team deleted successfully.');

        return redirect(route('ourTeams.index'));
    }
}
