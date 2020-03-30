<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMembershipRequest;
use App\Http\Requests\UpdateMembershipRequest;
use App\Repositories\MembershipRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Nationality;
use App\Models\AgeRanges;
use App\Models\Countriy;
use App\Models\Specialization;
use App\Models\University;
use App\Models\FsooField;
use App\Models\JoinAs;
use App\Models\Service;
use App\Models\SpareTime;
use App\Models\ContactInfo;
use App\Models\Experienc;
use Flash;
use Response;

class MembershipController extends AppBaseController
{
    /** @var  MembershipRepository */
    private $membershipRepository;

    public function __construct(MembershipRepository $membershipRepo)
    {
        $this->membershipRepository = $membershipRepo;
        $nationalities = Nationality::all();
        $ageRanges = AgeRanges::all();
        $countries = Countriy::all();
        $specializations = Specialization::all();
        $University = University::all();
        $FsooField = FsooField::all();
        $JoinAs = JoinAs::all();
        $services = Service::all();
        $sparetime = SpareTime::all();
        view()->share([
            'nationalities' => $nationalities,
            'ageRanges' => $ageRanges,
            'countries' => $countries,
            'specializations' => $specializations,
            'university' => $University,
            'FsooField' => $FsooField,
            'JoinAs' => $JoinAs,
            'services' => $services,
            'sparetime' => $sparetime,
        ]);
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
        $memberships = $this->membershipRepository->paginate(15);

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
     * Show the form for creating a new Membership.
     *
     * @return Response
     */
    public function individual_form()
    {
        return view('forms.individual_form');
    }
    /**
     * Show the form for creating a new Membership.
     *
     * @return Response
     */
    public function corporate_form()
    {
        return view('forms.corporate_form');
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

        if(isset($request->Facebook))
        ContactInfo::create(
         [
            'type'=>'Facebook',
            'value'=>$input['Facebook'],
            'member_id'=>$membership->id
         ]
        );
        if(isset($request->Twitter))
        ContactInfo::create(
            [
               'type'=>'Twitter',
               'value'=>$input['Twitter'],
               'member_id'=>$membership->id
            ]
           );

           $input['member_id']=$membership->id;
           try {
            Experienc::create($input);
           } catch (\Throwable $th) {
               //throw $th;
           }


        Flash::success('Membership saved successfully.');

        return back();
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
     * @return Response
     * @throws \Exception
     *
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
