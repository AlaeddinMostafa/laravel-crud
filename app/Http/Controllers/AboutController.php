<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\Admin\About;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $abouts = About::query()->orderBy('id', 'desc')->get();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAboutRequest $request
     * @return RedirectResponse
     */
    public function store(StoreAboutRequest $request): RedirectResponse
    {

        $AboutBannerImage = 'banner' . '-' . time() . '.' . $request->banner->getClientOriginalExtension();
        $request->banner->move('gallery/about/', $AboutBannerImage);

        $AboutImage = 'image' . '-' . time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('gallery/about/', $AboutImage);

        $about = new About([
            'title' => $request->get('title'),
            'banner' => $AboutBannerImage,
            'image' => $AboutImage,
            'description' => $request->get('description'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'telegram' => $request->get('telegram'),
        ]);
        $about->save();
        $successAbout = 'The desired page was created correctly';
        return redirect()->route('about.index')->with('success', $successAbout);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param About $about
     * @return Application|Factory|View
     */
    public function edit(About $about): View|Factory|Application
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAboutRequest $request
     * @param About $about
     * @return RedirectResponse
     */
    public function update(UpdateAboutRequest $request, About $about): RedirectResponse
    {

        if ($request->image === null) {
            $about->title = $request->title;
            $about->banner = $about->banner;
            $about->image = $about->image;
            $about->description = $request->description;
            $about->phone = $request->phone;
            $about->email = $request->email;
            $about->telegram = $request->telegram;
        } else {
            if (\file_exists('gallery/about' . $about->image)) {
                \unlink('gallery/about' . $about->image);
            }

            if (\file_exists('gallery/about' . $about->banner)) {
                \unlink('gallery/about' . $about->banner);
            }

            $AboutBannerImage = 'banner' . '-' . time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move('gallery/about/', $AboutBannerImage);

            $AboutImage = 'blog' . '-' . time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move('gallery/about/', $AboutImage);

            $about->title = $request->title;
            $about->banner = $AboutBannerImage;
            $about->image = $AboutImage;
            $about->descripti = $request->descripti;
            $about->phone = $request->phone;
            $about->email = $request->email;
            $about->telegram = $request->telegram;
        }
        $about->save();
        $successBlog = 'Blog post editing was done correctly';
        return redirect()->route('about.index')->with('success', $successBlog);
    }


}
