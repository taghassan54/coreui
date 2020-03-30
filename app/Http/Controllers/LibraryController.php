<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLibraryRequest;
use App\Http\Requests\UpdateLibraryRequest;
use App\Repositories\LibraryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\LibraryType;
use Flash;
use Response;

class LibraryController extends AppBaseController
{
    /** @var  LibraryRepository */
    private $libraryRepository;

    public function __construct(LibraryRepository $libraryRepo)
    {
        $this->middleware('can:Library content');
        $this->libraryRepository = $libraryRepo;
        $library_types=LibraryType::all();
        view()->share('library_types',$library_types);
    }

    /**
     * Display a listing of the Library.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $libraries = $this->libraryRepository->paginate(15);

        return view('libraries.index')
            ->with('libraries', $libraries);
    }

    /**
     * Show the form for creating a new Library.
     *
     * @return Response
     */
    public function create()
    {
        return view('libraries.create');
    }

    /**
     * Store a newly created Library in storage.
     *
     * @param CreateLibraryRequest $request
     *
     * @return Response
     */
    public function store(CreateLibraryRequest $request)
    {
        $input = $request->all();

        $library = $this->libraryRepository->create($input);
        if($request->hasFile('file'))
        $library
           ->addMedia($request->file)
           ->toMediaCollection();
        Flash::success('Library saved successfully.');

        return redirect(route('libraries.index'));
    }

    /**
     * Display the specified Library.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $library = $this->libraryRepository->find($id);

        if (empty($library)) {
            Flash::error('Library not found');

            return redirect(route('libraries.index'));
        }

        return view('libraries.show')->with('library', $library);
    }

    /**
     * Show the form for editing the specified Library.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $library = $this->libraryRepository->find($id);

        if (empty($library)) {
            Flash::error('Library not found');

            return redirect(route('libraries.index'));
        }

        return view('libraries.edit')->with('library', $library);
    }

    /**
     * Update the specified Library in storage.
     *
     * @param int $id
     * @param UpdateLibraryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLibraryRequest $request)
    {
        $library = $this->libraryRepository->find($id);

        if (empty($library)) {
            Flash::error('Library not found');

            return redirect(route('libraries.index'));
        }
        if($request->hasFile('file')){
            foreach ($library->getMedia() as $media) {
                $media->delete();

            }
            $library
            ->addMedia($request->file)
            ->toMediaCollection();
        }
        $library = $this->libraryRepository->update($request->all(), $id);

        Flash::success('Library updated successfully.');

        return redirect(route('libraries.index'));
    }

    /**
     * Remove the specified Library from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $library = $this->libraryRepository->find($id);

        if (empty($library)) {
            Flash::error('Library not found');

            return redirect(route('libraries.index'));
        }

        $this->libraryRepository->delete($id);

        Flash::success('Library deleted successfully.');

        return redirect(route('libraries.index'));
    }
}
