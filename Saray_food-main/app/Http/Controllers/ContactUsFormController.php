<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Mail;

use Illuminate\Http\Request;

class ContactUsFormController extends Controller
{
 


      public function index()
      {
          return view('contact');
      }
      // Store Contact Form data
      public function ContactUsForm(Request $request) {
          // Form validation
          $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'message' => 'required'
           ]);
          //  Store data in database
          Contact::create($request->all());
          // 
          return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
      }

      public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $input = $request->all();

        Contact::create($input);

  



        Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('bayan@kayanaletihad.com', 'Admin')->subject($request->get('subject'));
        });
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
