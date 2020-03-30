<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFrequentlyAskedQuestionRequest;
use App\Http\Requests\UpdateFrequentlyAskedQuestionRequest;
use App\Repositories\FrequentlyAskedQuestionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FrequentlyAskedQuestionController extends AppBaseController
{
    /** @var  FrequentlyAskedQuestionRepository */
    private $frequentlyAskedQuestionRepository;

    public function __construct(FrequentlyAskedQuestionRepository $frequentlyAskedQuestionRepo)
    {

        $this->middleware('can:Frequently Asked Questions content');
        $this->frequentlyAskedQuestionRepository = $frequentlyAskedQuestionRepo;
    }

    /**
     * Display a listing of the FrequentlyAskedQuestion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $frequentlyAskedQuestions = $this->frequentlyAskedQuestionRepository->paginate(15);

        return view('frequently_asked_questions.index')
            ->with('frequentlyAskedQuestions', $frequentlyAskedQuestions);
    }

    /**
     * Show the form for creating a new FrequentlyAskedQuestion.
     *
     * @return Response
     */
    public function create()
    {
        return view('frequently_asked_questions.create');
    }

    /**
     * Store a newly created FrequentlyAskedQuestion in storage.
     *
     * @param CreateFrequentlyAskedQuestionRequest $request
     *
     * @return Response
     */
    public function store(CreateFrequentlyAskedQuestionRequest $request)
    {
        $input = $request->all();

        $frequentlyAskedQuestion = $this->frequentlyAskedQuestionRepository->create($input);

        Flash::success('Frequently Asked Question saved successfully.');

        return redirect(route('frequentlyAskedQuestions.index'));
    }

    /**
     * Display the specified FrequentlyAskedQuestion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $frequentlyAskedQuestion = $this->frequentlyAskedQuestionRepository->find($id);

        if (empty($frequentlyAskedQuestion)) {
            Flash::error('Frequently Asked Question not found');

            return redirect(route('frequentlyAskedQuestions.index'));
        }

        return view('frequently_asked_questions.show')->with('frequentlyAskedQuestion', $frequentlyAskedQuestion);
    }

    /**
     * Show the form for editing the specified FrequentlyAskedQuestion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $frequentlyAskedQuestion = $this->frequentlyAskedQuestionRepository->find($id);

        if (empty($frequentlyAskedQuestion)) {
            Flash::error('Frequently Asked Question not found');

            return redirect(route('frequentlyAskedQuestions.index'));
        }

        return view('frequently_asked_questions.edit')->with('frequentlyAskedQuestion', $frequentlyAskedQuestion);
    }

    /**
     * Update the specified FrequentlyAskedQuestion in storage.
     *
     * @param int $id
     * @param UpdateFrequentlyAskedQuestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFrequentlyAskedQuestionRequest $request)
    {
        $frequentlyAskedQuestion = $this->frequentlyAskedQuestionRepository->find($id);

        if (empty($frequentlyAskedQuestion)) {
            Flash::error('Frequently Asked Question not found');

            return redirect(route('frequentlyAskedQuestions.index'));
        }

        $frequentlyAskedQuestion = $this->frequentlyAskedQuestionRepository->update($request->all(), $id);

        Flash::success('Frequently Asked Question updated successfully.');

        return redirect(route('frequentlyAskedQuestions.index'));
    }

    /**
     * Remove the specified FrequentlyAskedQuestion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $frequentlyAskedQuestion = $this->frequentlyAskedQuestionRepository->find($id);

        if (empty($frequentlyAskedQuestion)) {
            Flash::error('Frequently Asked Question not found');

            return redirect(route('frequentlyAskedQuestions.index'));
        }

        $this->frequentlyAskedQuestionRepository->delete($id);

        Flash::success('Frequently Asked Question deleted successfully.');

        return redirect(route('frequentlyAskedQuestions.index'));
    }
}
