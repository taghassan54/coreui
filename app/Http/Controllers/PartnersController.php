<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePartnersRequest;
use App\Http\Requests\UpdatePartnersRequest;
use App\Repositories\PartnersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PartnersController extends AppBaseController
{
    /** @var  PartnersRepository */
    private $partnersRepository;

    public function __construct(PartnersRepository $partnersRepo)
    {
        $this->partnersRepository = $partnersRepo;
        $this->middleware('can:Our Partners content');
    }

    /**
     * Display a listing of the Partners.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $partners = $this->partnersRepository->paginate(15);

        return view('partners.index')
            ->with('partners', $partners);
    }

    /**
     * Show the form for creating a new Partners.
     *
     * @return Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created Partners in storage.
     *
     * @param CreatePartnersRequest $request
     *
     * @return Response
     */
    public function store(CreatePartnersRequest $request)
    {
        $input = $request->all();

        $partners = $this->partnersRepository->create($input);
        if($request->hasFile('file'))
        $partners
           ->addMedia($request->file)
           ->toMediaCollection();
        Flash::success('Partners saved successfully.');

        return redirect(route('partners.index'));
    }

    /**
     * Display the specified Partners.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $partners = $this->partnersRepository->find($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        return view('partners.show')->with('partners', $partners);
    }

    /**
     * Show the form for editing the specified Partners.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $partners = $this->partnersRepository->find($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        return view('partners.edit')->with('partners', $partners);
    }

    /**
     * Update the specified Partners in storage.
     *
     * @param int $id
     * @param UpdatePartnersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePartnersRequest $request)
    {
        $partners = $this->partnersRepository->find($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }
        if($request->hasFile('file')){
            foreach ($partners->getMedia() as $media) {
                $media->delete();

            }
            $partners
            ->addMedia($request->file)
            ->toMediaCollection();
        }
        $partners = $this->partnersRepository->update($request->all(), $id);

        Flash::success('Partners updated successfully.');

        return redirect(route('partners.index'));
    }

    /**
     * Remove the specified Partners from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $partners = $this->partnersRepository->find($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        $this->partnersRepository->delete($id);

        Flash::success('Partners deleted successfully.');

        return redirect(route('partners.index'));
    }
}
