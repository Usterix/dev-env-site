<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Menu;

class MenuSystem
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('mainMenu', function ($menu) {
            $menu->add('Dashboard')->prepend('<i class="fa fa-dashboard fa-3x"></i>');
            $menu->add('Sites', 'sites')->prepend('<i class="fa fa-sitemap fa-3x"></i>');
            $menu->add('Server', 'server')->prepend('<i class="fa fa-server fa-3x"></i>');
            $menu->add('Logins', 'logins')->prepend('<i class="fa fa-key fa-3x"></i>');
        });

        return $next($request);
    }
}
