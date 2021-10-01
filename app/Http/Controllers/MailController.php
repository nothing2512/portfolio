<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MailController extends Controller
{
    function store(Request $request): RedirectResponse
    {
        Mail::query()->create($request->all());
        return redirect()->back();
    }
}
