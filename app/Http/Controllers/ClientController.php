<?php

namespace App\Http\Controllers;


use App\Models\Admin\About;
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

    /**
     * @return Factory|View|Application
     */
    public function about(): Factory|View|Application
    {
        $abouts = About::query()->orderBy('id','desc')->where('id','=',1)->get();
        return view('about',compact('abouts'));
    }

    /**
     * @return Factory|View|Application
     */
    public function contact(): Factory|View|Application
    {
        return view('contact');
    }

}
