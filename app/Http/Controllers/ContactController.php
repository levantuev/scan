<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
      return "QWE";
//      $validation = $req->validate([
//        'subject' => 'required|min:5|max:50',
//        'message' => 'required|min:15|max:500'
//      ]);
    }
}
