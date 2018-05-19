<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\userq;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next)
    {
      //$usernm = $request->username;
      //dd($usernm);

      $user = userq::where('KodeUser', $request->username)->first();
      //dd($user->TIPE);
        if ($user->TIPE == 3)
        {
          return ('/siswa');
        }
        return $next($request);
    }
}
