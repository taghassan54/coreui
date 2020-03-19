<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCountriyRequest;
use App\Http\Requests\UpdateCountriyRequest;
use App\Repositories\CountriyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CountriyController extends AppBaseController
{
    /** @var  CountriyRepository */
    private $countriyRepository;

    public function __construct(CountriyRepository $countriyRepo)
    {
        $this->countriyRepository = $countriyRepo;
    }

    /**
     * Display a listing of the Countriy.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $countriys = $this->countriyRepository->paginate(5);

        return view('countriys.index')
            ->with('countriys', $countriys);
    }

    /**
     * Show the form for creating a new Countriy.
     *
     * @return Response
     */
    public function create()
    {
        return view('countriys.create');
    }

    /**
     * Store a newly created Countriy in storage.
     *
     * @param CreateCountriyRequest $request
     *
     * @return Response
     */
    public function store(CreateCountriyRequest $request)
    {
        $input = $request->all();

        $countriy = $this->countriyRepository->create($input);

        Flash::success('Countriy saved successfully.');

        return redirect(route('countriys.index'));
    }

    /**
     * Display the specified Countriy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $countriy = $this->countriyRepository->find($id);

        if (empty($countriy)) {
            Flash::error('Countriy not found');

            return redirect(route('countriys.index'));
        }

        return view('countriys.show')->with('countriy', $countriy);
    }

    /**
     * Show the form for editing the specified Countriy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $countriy = $this->countriyRepository->find($id);

        if (empty($countriy)) {
            Flash::error('Countriy not found');

            return redirect(route('countriys.index'));
        }

        return view('countriys.edit')->with('countriy', $countriy);
    }

    /**
     * Update the specified Countriy in storage.
     *
     * @param int $id
     * @param UpdateCountriyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCountriyRequest $request)
    {
        $countriy = $this->countriyRepository->find($id);

        if (empty($countriy)) {
            Flash::error('Countriy not found');

            return redirect(route('countriys.index'));
        }

        $countriy = $this->countriyRepository->update($request->all(), $id);

        Flash::success('Countriy updated successfully.');

        return redirect(route('countriys.index'));
    }

    /**
     * Remove the specified Countriy from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $countriy = $this->countriyRepository->find($id);

        if (empty($countriy)) {
            Flash::error('Countriy not found');

            return redirect(route('countriys.index'));
        }

        $this->countriyRepository->delete($id);

        Flash::success('Countriy deleted successfully.');

        return redirect(route('countriys.index'));
    }
}
