<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
class ContactController extends Controller
{
    public function addcontact(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required|min:2',
            'lname' => 'required|min:2',
            'email' => 'required|email|unique:posts|max:255',
            'message' => 'required'
        ]);

        $con = new ContactModel();
        $con->fname = $request->fname;
        $con->lname = $request->lname;
        $con->email = $request->email;
        $con->message = $request->message;

        $con->save();
        return response()->json($con);
    }
}
