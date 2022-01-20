<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
// use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Config;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
        ModelNotFoundException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        $debug_mode = Config::get('app.debug');
        if ($e instanceof FatalErrorException  && !$debug_mode) {
            $e = new HttpException(500, "Server error"); 
            return response()->view('errors.503', [], 500);                                  
        }     

        if ($e instanceof ModelNotFoundException && !$debug_mode) {
            $e = new NotFoundHttpException($e->getMessage(), $e);
        }

        if($e instanceof \PDOException && !$debug_mode){
            return response()->view('errors.404', [], 500);
        }

        return parent::render($request, $e);
    }
}
