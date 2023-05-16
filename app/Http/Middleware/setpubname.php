<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class setpubname
{

    public function handle(Request $request, Closure $next): Response
    {
        $getlang="";
        $lang = $request->route('pub');

        if (!$lang) {
            $request->route()->setParameter('pub', '');
        }

        if ($request->filled('pub')) {
            $getlang = $request->input('pub');
        }
        $getlang == ""?$request->route()->setParameter('pub', ''):
            $request->route()->setParameter('pub', $getlang);



            return $next($request);



    }
}
