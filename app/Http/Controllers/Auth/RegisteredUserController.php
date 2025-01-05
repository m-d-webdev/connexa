<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lasttName' => 'required|string|max:255',
            'gender' => 'required|string',
            'day' => 'required|numeric',
            'year' => 'required|numeric',
            'month' => 'required|numeric',
            'phone' => 'required|numeric',
            'acceptterms' => 'required',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => 'required',
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lasttName,
            'gender' => $request->gender,
            'birthDay' => $request->day.'/'.$request->month."/".$request->year,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
