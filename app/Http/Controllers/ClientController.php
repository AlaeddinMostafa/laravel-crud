<?php

namespace App\Http\Controllers;


use App\Models\Admin\Blog;
use App\Models\Admin\Slider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ClientController extends Controller
{

    /**
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $sliders = Slider::query()->orderBy('id','desc')->where('status','=',1)->get();
        $blogs = Blog::query()->orderBy('id','desc')->where('status','=',1)->get();
        $blogLastPosts = Blog::query()->orderBy('id','desc')->where('status','=',1)->latest('created_at')->get();
        return view('index',compact('sliders','blogs','blogLastPosts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}
