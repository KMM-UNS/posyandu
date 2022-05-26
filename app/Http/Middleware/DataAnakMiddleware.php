<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\DataAnak;
use Illuminate\Http\Request;

class DataAnakMiddleware
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
        $dataanak = DataAnak::where('createable_id', auth()->user()->id)->first();
        if (!empty($dataanak)){
            return redirect(route('user.biodata.index'));
        } else {
        return $next($request);
    }
}
}
