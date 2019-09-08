<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\XMan;

class XMenController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showMutants()
    {
        return view('xmen');
    }

    public function createXman()
    {
        return view('register');
    }

    public function saveXman(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new XMan();

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'User has been added successfully.');
    }
}
