<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;

class signUPController extends Controller
{
    public function getData(Request $request)
    {   
        $user = new User;
        $validate_email = $request->validate([
            'email' => ['required',Rule::unique('users')->ignore($user->id)]
        ]);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->back()->with('success', 'User Registers Successfully');
    }
}
