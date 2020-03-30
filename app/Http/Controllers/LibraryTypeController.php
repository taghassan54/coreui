<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLibraryTypeRequest;
use App\Http\Requests\UpdateLibraryTypeRequest;
use App\Repositories\LibraryTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LibraryTypeController extends AppBaseController
{
    /** @var  LibraryTypeRepository */
    private $libraryTypeRepository;

    public function __construct(LibraryTypeRepository $libraryTypeRepo)
    {
        $this->libraryTypeRepository = $libraryTypeRepo;
    }

    /**
     * Display a listing of the LibraryType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $libraryTypes = $this->libraryTypeRepository->paginate(15);

        return view('library_types.index')
            ->with('libraryTypes', $libraryTypes);
    }

    /**
     * Show the form for creating a new LibraryType.
     *
     * @return Response
     */
    public function create()
    {
        return view('library_types.create');
    }

    /**
     * Store a newly created LibraryType in storage.
     *
     * @param CreateLibraryTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateLibraryTypeRequest $request)
    {
        $input = $request->all();

        $libraryType = $this->libraryTypeRepository->create($input);

        Flash::success('Library Type saved successfully.');

        return redirect(route('libraryTypes.index'));
    }

    /**
     * Display the specified LibraryType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $libraryType = $this->libraryTypeRepository->find($id);

        if (empty($libraryType)) {
            Flash::error('Library Type not found');

            return redirect(route('libraryTypes.index'));
        }

        return view('library_types.show')->with('libraryType', $libraryType);
    }

    /**
     * Show the form for editing the specified LibraryType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $libraryType = $this->libraryTypeRepository->find($id);

        if (empty($libraryType)) {
            Flash::error('Library Type not found');

            return redirect(route('libraryTypes.index'));
        }

        return view('library_types.edit')->with('libraryType', $libraryType);
    }

    /**
     * Update the specified LibraryType in storage.
     *
     * @param int $id
     * @param UpdateLibraryTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLibraryTypeRequest $request)
    {
        $libraryType = $this->libraryTypeRepository->find($id);

        if (empty($libraryType)) {
            Flash::error('Library Type not found');

            return redirect(route('libraryTypes.index'));
        }

        $libraryType = $this->libraryTypeRepository->update($request->all(), $id);

        Flash::success('Library Type updated successfully.');

        return redirect(route('libraryTypes.index'));
    }

    /**
     * Remove the specified LibraryType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $libraryType = $this->libraryTypeRepository->find($id);

        if (empty($libraryType)) {
            Flash::error('Library Type not found');

            return redirect(route('libraryTypes.index'));
        }

        $this->libraryTypeRepository->delete($id);

        Flash::success('Library Type deleted successfully.');

        return redirect(route('libraryTypes.index'));
    }
}
