<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Admin\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $contacts = Contact::query()->orderBy('id','desc')->get();
        return view('admin.contact.index',compact('contacts'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreContactRequest $request)
    {
        $contact = new Contact([
            'surname' => $request->get('surname'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'description' => $request->get('description'),
        ]);
        $contact->save();
        $successContact = 'Your message has been saved correctly and has been received by the management. You will be contacted as soon as possible';
        return redirect()->back()->with('successContact',$successContact);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Admin\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
