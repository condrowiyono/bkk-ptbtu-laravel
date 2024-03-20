<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReplyMail;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactUs = ContactUs::orderBy("created_at", "desc")->paginate(10);
        return view("contact-us.index", compact("contactUs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = ContactUs::find($id);
        return view("contact-us.show", compact("message"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function reply(Request $request)
    {
        $title = 'Terima kasih sudah menghubungi kami';
        $recipient = $request->recipient;
        $body = $request->reply;

        Mail::to($recipient)->send(new ReplyMail($title, $body));

        return redirect()->route('contact-us.index')->with('success', 'Berhasil mengirimkan balasan pesan');
    }
}
