<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact', ['p' => config('portfolio')]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        Message::create($data);

        return redirect()->route('contact')
            ->with('sent', 'Message sent. I will reply to ' . $data['email'] . '.');
    }
}
