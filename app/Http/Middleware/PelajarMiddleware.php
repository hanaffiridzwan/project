<?php

namespace App\Http\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Contracts\Auth\Factory as Auth;
use Closure;

class PelajarMiddleware
{
/**
* Handle an incoming request.
*
* @param \Illuminate\Http\Request $request
* @param \Closure $next
* @return mixed
*/
public function handle($request, Closure $next)
{
if ($request->user()->userRole === 'pelajar') {
return $next($request);
}

session()->flash('message', 'You dont have permission!');

return back();
}
}