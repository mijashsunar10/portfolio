<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{
    /**
      * Handle the contact form submission.
      *
      * @param \Illuminate\Http\Request $request
      * @return \Illuminate\Http\JsonResponse
      */
      public function send(Request $request)
      {
          // Validate the form data
          $validatedData = $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|email|max:255',
              'subject' => 'nullable|string|max:255',
              'message' => 'required|string',
          ]);
          // Send the email
          Mail::to('sunaranamol@gmail.com')->send(new ContactFormMail($validatedData));
          return response()->json(['message' => 'Your message has been sent successfully!'], 200);
      }
}
