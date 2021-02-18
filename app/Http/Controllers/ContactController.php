<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return redirect('https://www.educastudio.com/contact-us');
    }

    public function create()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        $result = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        ];

        return view('comment', ['comment' => (object)$result]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
