<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        // Memastikan username dan password tidak null
        if (!empty($credentials['email']) && !empty($credentials['password'])) {
            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            }
        }
    
        return redirect('/');
    }
    
}
