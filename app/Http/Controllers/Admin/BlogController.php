<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Admin\Blog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{

    /**
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $blogs = Blog::query()->orderBy('id','desc')->paginate(10);
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBlogRequest $request
     * @return RedirectResponse
     */
    public function store(StoreBlogRequest $request): RedirectResponse
    {
        $blogImage = 'blog' . '-' . time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('gallery/blog/', $blogImage);

        $blog = new Blog([
            'title' => $request->get('title'),
            'status' => $request->get('status'),
            'editor' => $request->get('editor'),
            'image' => $blogImage,
        ]);
        $blog->save();
        $successBlog = 'The new image is added to the blog correctly';
        return redirect()->route('blog.index')->with('success', $successBlog);
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return Application|Factory|View
     */
    public function show(Blog $blog): View|Factory|Application
    {
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Application|Factory|View
     */
    public function edit(Blog $blog): View|Factory|Application
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBlogRequest $request
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function update(UpdateBlogRequest $request, Blog $blog): RedirectResponse
    {

        if ($request->image === null) {
            $blog->title = $request->title;
            $blog->status = $request->status;
            $blog->editor = $request->editor;
            $blog->image = $blog->image;
        } else {
            if (\file_exists('gallery/blog' . $blog->image)) {
                \unlink('gallery/blog' . $blog->image);
            }

            $imageName = 'blog' . '-' . time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move('gallery/blog/', $imageName);

            $blog->title = $request->title;
            $blog->status = $request->status;
            $blog->editor = $request->editor;
            $blog->image = $imageName;
        }
        $blog->save();
        $successBlog = 'Blog post editing was done correctly';
        return redirect()->route('blog.index')->with('successBlog', $successBlog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        $blog->delete();
        $successBlog = 'The desired post was deleted correctly';
        return redirect()->route('blog.index')->with('successBlog', $successBlog);
    }
}
