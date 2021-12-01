<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;
    private $traveller_urls=array("users/companion","users/my-preferences","users/guestinvite");
    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
       /* if(isset($request->user()->group_id) && ($request->user()->group_id==3 || $request->user()->group_id==4) ){

            return redirect('customer/profile');
         }
        */
         
        // echo "hello";exit;
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('user/login');
            }
        }
        
        if(in_array(request()->path(), $this->traveller_urls) && \Session::get('gid') != 3){
            return redirect('dashboard');
        }
        
        return $next($request);
    }
}
