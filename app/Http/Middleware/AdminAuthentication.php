<?php namespace App\Http\Middleware;

use Closure;
use Session;

class AdminAuthentication {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

        $username = Session::get('username');

        if(!$username) {
            return redirect('admin');
        }

		return $next($request);
	}

}