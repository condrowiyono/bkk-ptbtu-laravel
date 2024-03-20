<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsPublicController extends Controller
{
  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $contactUs = ContactUs::create($request->all());
    return redirect()->back()->with("success", "Pesan berhasil dikirim");
  }

}
