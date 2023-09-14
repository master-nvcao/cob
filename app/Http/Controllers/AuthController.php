<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Agent;
use App\Models\Admin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;


class AuthController extends Controller
{
    
    public function loginpage(){
        if (Auth::guard('agent')->check()) {
            return redirect()->route('agent.dashboard');
        }

        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('auth.login');
    }

    public function login(Request $request){

        //dd($request);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        
        if (Auth::guard('agent')->attempt($credentials, $request->filled('remember'))) {
            
            return redirect()->intended(route('agent.dashboard'));
        } 
        
        elseif (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            
            return redirect()->intended(route('admin.dashboard'));
        } 

        
        return back()->withInput($request->only('email', 'remember'))->with('error', 'Invalid credentials');

    }

    public function signuppage(){

        if (Auth::guard('agent')->check()) {
            return redirect()->route('agent.dashboard');
        }

        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.signup');
    }
    
    public function signup(Request $request){

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
            'phone' => 'required|string|max:255',
            'affiliateId' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png', 
        ]);

        $agentWithEmail = Agent::where('email', $request->email)->first();
        $adminWithEmail = Admin::where('email', $request->email)->first();

        if ($agentWithEmail || $adminWithEmail) {
            return redirect()->route('login')->with('error', 'Email already exists in our records.');
        }

        $profilePictureName = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $profilePictureName = Uuid::uuid4()->toString() . '.' . $profilePicture->getClientOriginalExtension();
            Storage::disk('public')->put("uploads/profile_pictures/$profilePictureName", file_get_contents($profilePicture));
        }

        if($profilePictureName == null){
            $profilePictureName = 'default.png';
        }
        
        Agent::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'affiliateId' => $request->affiliateId,
            'profile_picture' => $profilePictureName,
        ]);

        
        Auth::guard('agent')->attempt($request->only('email', 'password'));

        return redirect()->route('agent.dashboard');

    }

    public function logout(Request $request)
    {
        
        if (Auth::guard('agent')->check()) {
            Auth::guard('agent')->logout();
        }

        
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }

        
        return redirect()->route('login');
    }

    public function forgotpasswordpage(){
        return view('auth.forgotpassword');
    }

    public function forgotPassword(Request $request)
{
    $request->validate(['email' => 'required|email']);

    
    $agent = Agent::where('email', $request->email)->first();
    
    
    $admin = Admin::where('email', $request->email)->first();

    if($agent || $admin) {
        
        $newPassword = Str::random(10);

        
        if($agent) {
            $agent->password = Hash::make($newPassword);
            $agent->save();
        } else {
            $admin->password = Hash::make($newPassword);
            $admin->save();
        }

        
        Mail::raw("Your new password is: $newPassword", function($message) use ($request) {
            $message->to($request->email)
                    ->subject('Your New Password');
        });

        return redirect()->route('login')->with('success', 'A new password has been sent to your email address.');
    } else {
        return back()->withErrors(['error' => 'The email address is not registered.']);
    }
}

}
