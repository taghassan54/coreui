<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMembershipRequest;
use App\Http\Requests\UpdateMembershipRequest;
use App\Repositories\MembershipRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MembershipController extends AppBaseController
{
    /** @var  MembershipRepository */
    private $membershipRepository;

    public function __construct(MembershipRepository $membershipRepo)
    {
        $this->membershipRepository = $membershipRepo;
    }

    /**
     * Display a listing of the Membership.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $memberships = $this->membershipRepository->paginate(5);

        return view('memberships.index')
            ->with('memberships', $memberships);
    }

    /**
     * Show the form for creating a new Membership.
     *
     * @return Response
     */
    public function create()
    {
        return view('memberships.create');
    }

    /**
     * Store a newly created Membership in storage.
     *
     * @param CreateMembershipRequest $request
     *
     * @return Response
     */
    public function store(CreateMembershipRequest $request)
    {
        $input = $request->all();

        $membership = $this->membershipRepository->create($input);

        Flash::success('Membership saved successfully.');

        return redirect(route('memberships.index'));
    }

    /**
     * Display the specified Membership.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $membership = $this->membershipRepository->find($id);

        if (empty($membership)) {
            Flash::error('Membership not found');

            return redirect(route('memberships.index'));
        }

        return view('memberships.show')->with('membership', $membership);
    }

    /**
     * Show the form for editing the specified Membership.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $membership = $this->membershipRepository->find($id);

        if (empty($membership)) {
            Flash::error('Membership not found');

            return redirect(route('memberships.index'));
        }

        return view('memberships.edit')->with('membership', $membership);
    }

    /**
     * Update the specified Membership in storage.
     *
     * @param int $id
     * @param UpdateMembershipRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMembershipRequest $request)
    {
        $membership = $this->membershipRepository->find($id);

        if (empty($membership)) {
            Flash::error('Membership not found');

            return redirect(route('memberships.index'));
        }

        $membership = $this->membershipRepository->update($request->all(), $id);

        Flash::success('Membership updated successfully.');

        return redirect(route('memberships.index'));
    }

    /**
     * Remove the specified Membership from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $membership = $this->membershipRepository->find($id);

        if (empty($membership)) {
            Flash::error('Membership not found');

            return redirect(route('memberships.index'));
        }

        $this->membershipRepository->delete($id);

        Flash::success('Membership deleted successfully.');

        return redirect(route('memberships.index'));
    }
}
