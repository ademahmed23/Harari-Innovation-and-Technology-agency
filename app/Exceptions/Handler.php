<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {

        });
    }
    // public function render($request, Throwable $e)
    // {
    //     if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
    //        return response()->view('frontend.errors.404',[],404);
    //     }

    //     if ($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
    //         // Display custom 404 page for NotFoundHttpException
    //         return response()->view('frontend.errors.500', [], 500);
    //     }

    //     if ($e instanceof \Illuminate\Auth\AuthenticationException) {
    //         // Display custom page for AuthenticationException (if needed)
    //         return response()->view('frontend.errors.505', [], 505);
    //     }

    //     if ($e instanceof \Illuminate\Validation\ValidationException) {
    //         // Display custom page for ValidationException (if needed)
    //         return response()->view('errors.422', [], 422);
    //     }

    //     return parent::render($request, $e);
    // }
}
