<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $permissionKey
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $permissionKey)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login'); // Redirect to login if user is not authenticated
        }

        $filteredPermissions = \App\Helpers\PermissionHelper::getFilteredPermissions($user->id);

        if (isset($filteredPermissions[$permissionKey]) && !empty($filteredPermissions[$permissionKey])) {
            return $next($request); // Allow access if user has the necessary permissions
        }

        return redirect()->route('unauthorized'); // Redirect to unauthorized page if permission is denied
    }
}
