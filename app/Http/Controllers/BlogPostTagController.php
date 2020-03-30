<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogPostTagRequest;
use App\Http\Requests\UpdateBlogPostTagRequest;
use App\Repositories\BlogPostTagRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BlogPostTagController extends AppBaseController
{
    /** @var  BlogPostTagRepository */
    private $blogPostTagRepository;

    public function __construct(BlogPostTagRepository $blogPostTagRepo)
    {
        $this->blogPostTagRepository = $blogPostTagRepo;
        $this->middleware('can:FSQO Community content');
    }

    /**
     * Display a listing of the BlogPostTag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogPostTags = $this->blogPostTagRepository->paginate(15);

        return view('blog_post_tags.index')
            ->with('blogPostTags', $blogPostTags);
    }

    /**
     * Show the form for creating a new BlogPostTag.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog_post_tags.create');
    }

    /**
     * Store a newly created BlogPostTag in storage.
     *
     * @param CreateBlogPostTagRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogPostTagRequest $request)
    {
        $input = $request->all();

        $blogPostTag = $this->blogPostTagRepository->create($input);

        Flash::success('Blog Post Tag saved successfully.');

        return redirect(route('blogPostTags.index'));
    }

    /**
     * Display the specified BlogPostTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blogPostTag = $this->blogPostTagRepository->find($id);

        if (empty($blogPostTag)) {
            Flash::error('Blog Post Tag not found');

            return redirect(route('blogPostTags.index'));
        }

        return view('blog_post_tags.show')->with('blogPostTag', $blogPostTag);
    }

    /**
     * Show the form for editing the specified BlogPostTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blogPostTag = $this->blogPostTagRepository->find($id);

        if (empty($blogPostTag)) {
            Flash::error('Blog Post Tag not found');

            return redirect(route('blogPostTags.index'));
        }

        return view('blog_post_tags.edit')->with('blogPostTag', $blogPostTag);
    }

    /**
     * Update the specified BlogPostTag in storage.
     *
     * @param int $id
     * @param UpdateBlogPostTagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogPostTagRequest $request)
    {
        $blogPostTag = $this->blogPostTagRepository->find($id);

        if (empty($blogPostTag)) {
            Flash::error('Blog Post Tag not found');

            return redirect(route('blogPostTags.index'));
        }

        $blogPostTag = $this->blogPostTagRepository->update($request->all(), $id);

        Flash::success('Blog Post Tag updated successfully.');

        return redirect(route('blogPostTags.index'));
    }

    /**
     * Remove the specified BlogPostTag from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blogPostTag = $this->blogPostTagRepository->find($id);

        if (empty($blogPostTag)) {
            Flash::error('Blog Post Tag not found');

            return redirect(route('blogPostTags.index'));
        }

        $this->blogPostTagRepository->delete($id);

        Flash::success('Blog Post Tag deleted successfully.');

        return redirect(route('blogPostTags.index'));
    }
}
