<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreNewsletterRequest;
use App\Models\Admin\Newsletter;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $newsletters = Newsletter::query()->orderBy('id','desc')->paginate(10);
        return view('admin.newsletter.index',compact('newsletters'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNewsletterRequest $request
     * @return RedirectResponse
     */
    public function store(StoreNewsletterRequest $request): RedirectResponse
    {
        $newsletter = new Newsletter([
            'email' => $request->get('email')
        ]);
        $newsletter->save();
        $successNewsletter = 'You have successfully subscribed to the blog newsletter.';
        return redirect()->back()->with('success',$successNewsletter);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Newsletter $newsletter
     * @return RedirectResponse
     */
    public function destroy(Newsletter $newsletter): RedirectResponse
    {
        $newsletter->delete();
        $successNewsletter = 'The subscriber was removed from the newsletter';
        return redirect()->back()->with('success',$successNewsletter);
    }
}
