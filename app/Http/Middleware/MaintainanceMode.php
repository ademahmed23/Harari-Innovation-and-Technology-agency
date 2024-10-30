<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\MaintainanceText;
class MaintainanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $maintainance = MaintainanceText::first();
        if($maintainance->status == 1){
            return response()->view('frontend.maintainace_mode');
        }
        return $next($request);
    }
}

