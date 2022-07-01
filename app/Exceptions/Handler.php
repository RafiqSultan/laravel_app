<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
<<<<<<< HEAD
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
=======
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
>>>>>>> 5afc08f5cb6782e2c20ba6ce8a1e9cba9dbd2f7e
     */
    protected $dontReport = [
        //
    ];

    /**
<<<<<<< HEAD
     * A list of the inputs that are never flashed to the session on validation exceptions.
=======
     * A list of the inputs that are never flashed for validation exceptions.
>>>>>>> 5afc08f5cb6782e2c20ba6ce8a1e9cba9dbd2f7e
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
