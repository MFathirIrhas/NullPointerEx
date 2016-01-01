<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use App\Http\Requests\ContactFormRequest;
// use App\Events\ContactFormValid;

class ContactController extends Controller
{
    //
    public function getIndex()
    {
        return view('contact.index');
    }
    
    // public function postIndex(ContactFormRequest $request)
    // {
        
    //     event(new ContactFormValid($request));
    //     return \Redirect::route('contact')
    //       ->with('message', 'Thanks for contacting us!');
    //  }
}
