<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\URL;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Validator, Input, Redirect ;
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
         
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {

                $currentdomain = \Config::get('app.currentdomain');
                $onelogindomain = \Config::get('app.onelogindomain');
                if($currentdomain != 'emporium-collection'){
                    return Redirect::to($onelogindomain.'/check-one-login?referer='.request()->getSchemeAndHttpHost());
                }
                // return redirect()->guest('user/login');
            }
        }
        
        if(in_array(request()->path(), $this->traveller_urls) && \Session::get('gid') != 3){
            print 'here';exit;
            return redirect('dashboard');
        }
        
        return $next($request);
    }
}
