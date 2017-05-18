
<?php

namespace App\Http\Middleware;

use Closure;

class PelajarPenyeliaMiddleware
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
        if ($request->user()->userRole == 'pelajar' || $request->user()->userRole == 'penyelia') {
            return $next($request);
        }

        session()->flash('message', 'You dont have permission!');

        return back();
    }
}
