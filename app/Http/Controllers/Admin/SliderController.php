<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Admin\Slider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $sliders = Slider::query()->orderBy('id', 'desc')->paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSliderRequest $request
     * @return RedirectResponse
     */
    public function store(StoreSliderRequest $request): RedirectResponse
    {

        $sliderImage = 'slider' . '-' . time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('gallery/slider/', $sliderImage);

        $slider = new Slider([
            'title' => $request->get('title'),
            'status' => $request->get('status'),
            'image' => $sliderImage,
        ]);
        $slider->save();
        $successSlider = 'The new image is added to the slider correctly';
        return redirect()->route('slider.index')->with('success', $successSlider);
    }

    /**
     * Display the specified resource.
     *
     * @param Slider $slider
     * @return Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Slider $slider
     * @return Application|Factory|View
     */
    public function edit(Slider $slider): View|Factory|Application
    {
        return view('admin/slider/edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateClientRequest $request
     * @param Slider $slider
     * @return RedirectResponse
     */
    public function update(UpdateClientRequest $request, Slider $slider): RedirectResponse
    {


        if ($request->image === null) {
            $slider->title = $request->title;
            $slider->status = $request->status;
        } else {
            if (\file_exists('image/product' . $slider->image)) {
                \unlink('image/product' . $slider->image);
            }

            $imageName = 'gallery' . '-' . time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move('gallery/slider/', $imageName);
            $slider->title = $request->title;
            $slider->status = $request->status;
            $slider->image = $imageName;
        }
        $slider->save();
        $successSlider = 'Slider image editing was done correctly';
        return redirect()->route('slider.index')->with('successSlider', $successSlider);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Slider $slider
     * @return RedirectResponse
     */
    public function destroy(Slider $slider): RedirectResponse
    {
        $slider->delete();
        $successSlider = 'The slider image was removed correctly';
        return redirect()->route('slider.index')->with('successSlider', $successSlider);
    }
}
