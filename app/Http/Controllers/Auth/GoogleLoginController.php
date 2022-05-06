<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        
        try {
            $user = User::where('google_id', $googleUser->id)->first();
            if($user){
                $accessToken = $user->createToken('authToken')->accessToken;
            }else{
                $user = User::updateOrCreate([
                    'google_id' => $googleUser->id,
                ], [
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make('123456dummy'),
                    'google_id' => $googleUser->id,
                ]);

                $accessToken = $user->createToken('authToken')->accessToken;
            }
            
            Auth::login($user);

            return response(['token_type' => "Bearer", 'access_token' => $accessToken]);
        } catch (\Throwable $th) {
            //throw $th;
            throw $th;
            dd($th->getMessage());
        }
        
    }
}
