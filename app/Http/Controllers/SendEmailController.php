<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('auth.kirimEmail');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
        dispatch(new SendMailJob($data));
        return
            redirect()->route('kirim-email')->with(
                'status',
                'Email berhasil dikirim'
            );
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
