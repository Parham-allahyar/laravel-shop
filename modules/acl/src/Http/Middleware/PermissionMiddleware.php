<?php

namespace Acl\Http\Middleware;

use Closure;
use Acl\Database\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class PermissionMiddleware
{
    public function handle($request, Closure $next)
    {
        // dd("f");

      

        return $next($request);
    }
}
