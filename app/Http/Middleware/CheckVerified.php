<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class CheckVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = User::where('email','=',$request->email)->first();

        if (empty($user)) {
                       $error_message = 'Wrong email. Please try again.';
                   } elseif (!$user->is_verified) {
                       $error_message = 'Please verify your email first!';
                   }
               if (!empty($error_message)) {
                   session()->flash('error_message', $error_message);

                   return redirect(route('login'));
       }

        return $next($request);
    }
}
