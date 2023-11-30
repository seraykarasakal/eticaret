<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ContentFormRequest;


class AjaxController extends Controller
{
    public function contactsave(ContentFormRequest $request)
    {
        
        $data = $request->all();
        $data['ip'] = request()->ip();

        $contact = Contact::create($data);

        return back()->withSuccess(['message', 'Message sent!']);
    }
}
