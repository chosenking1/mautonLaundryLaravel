<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Requests\bookingRequest\ServicesObject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'full_name' => ['required', 'max:255'],
            'email' => 'required |email| max:255',
            'phone_number' => 'required|max:13',
            'password' =>  'required|confirmed',

        ]);
        User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);
        auth()->attempt($request->only('email','password'));

        return redirect()->route('service');
//       dd($request->email);
    }
}
