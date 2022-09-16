<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(Request $request)
    {
        return view('contacts.index');
    }
    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'email' => 'required|email',
            'postcode' => 'required',
            'address' => 'required',
            'opinion' => 'required|max:120',
        ];
        $this->validate($request, $validate_rule);
        return view('index');
    }

    public function confirm()
    {
        return view('contacts.confirm');
    }

    public function process()
    {
        
    }


    public function complete()
    {
        return view('contacts.complete');
    }
}