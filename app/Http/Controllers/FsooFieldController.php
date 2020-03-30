<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFsooFieldRequest;
use App\Http\Requests\UpdateFsooFieldRequest;
use App\Repositories\FsooFieldRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FsooFieldController extends AppBaseController
{
    /** @var  FsooFieldRepository */
    private $fsooFieldRepository;

    public function __construct(FsooFieldRepository $fsooFieldRepo)
    {
        $this->fsooFieldRepository = $fsooFieldRepo;
    }

    /**
     * Display a listing of the FsooField.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fsooFields = $this->fsooFieldRepository->paginate(15);

        return view('fsoo_fields.index')
            ->with('fsooFields', $fsooFields);
    }

    /**
     * Show the form for creating a new FsooField.
     *
     * @return Response
     */
    public function create()
    {
        return view('fsoo_fields.create');
    }

    /**
     * Store a newly created FsooField in storage.
     *
     * @param CreateFsooFieldRequest $request
     *
     * @return Response
     */
    public function store(CreateFsooFieldRequest $request)
    {
        $input = $request->all();

        $fsooField = $this->fsooFieldRepository->create($input);

        Flash::success('Fsoo Field saved successfully.');

        return redirect(route('fsooFields.index'));
    }

    /**
     * Display the specified FsooField.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fsooField = $this->fsooFieldRepository->find($id);

        if (empty($fsooField)) {
            Flash::error('Fsoo Field not found');

            return redirect(route('fsooFields.index'));
        }

        return view('fsoo_fields.show')->with('fsooField', $fsooField);
    }

    /**
     * Show the form for editing the specified FsooField.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fsooField = $this->fsooFieldRepository->find($id);

        if (empty($fsooField)) {
            Flash::error('Fsoo Field not found');

            return redirect(route('fsooFields.index'));
        }

        return view('fsoo_fields.edit')->with('fsooField', $fsooField);
    }

    /**
     * Update the specified FsooField in storage.
     *
     * @param int $id
     * @param UpdateFsooFieldRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFsooFieldRequest $request)
    {
        $fsooField = $this->fsooFieldRepository->find($id);

        if (empty($fsooField)) {
            Flash::error('Fsoo Field not found');

            return redirect(route('fsooFields.index'));
        }

        $fsooField = $this->fsooFieldRepository->update($request->all(), $id);

        Flash::success('Fsoo Field updated successfully.');

        return redirect(route('fsooFields.index'));
    }

    /**
     * Remove the specified FsooField from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fsooField = $this->fsooFieldRepository->find($id);

        if (empty($fsooField)) {
            Flash::error('Fsoo Field not found');

            return redirect(route('fsooFields.index'));
        }

        $this->fsooFieldRepository->delete($id);

        Flash::success('Fsoo Field deleted successfully.');

        return redirect(route('fsooFields.index'));
    }
}
