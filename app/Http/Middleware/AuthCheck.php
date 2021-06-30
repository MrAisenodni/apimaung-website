<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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
        // if(!session()->has('sid_login') && $request->path() == '/pengaduan/create') {
        //     return redirect('/');
        // } elseif (!session()->has('sid_login') && $request->path() != '/login' && $request->path() == '/pengaduan/create') {
        //     return redirect('/login')->with('error', 'Anda belum login.');
        // } 
        
        if (!session()->get('sid_angbpd') && $request->path() == '/pengaduan/create') {
            return redirect('/');
        } elseif(!session()->has('sid_login') && $request->path() != '/login') {
            return redirect('/login')->with('error', 'Anda belum login.');
        }

        if (session()->has('sid_login')) {
            if(session()->get('sakses') == 'adm') {
                if(
                    $request->path() == '/login' || 
                    $request->path() == '/pengaduan/create'
                ) {
                    return redirect('/dashboard')->with('error', 'Anda sudah login.');
                    // return back()->with('error', 'Anda sudah login.');
                } 
                // elseif (
                //     $request->path() == '/operator/dashboard' ||
                //     $request->path() == '/operator/pengaduan' ||
                //     $request->path() == '/operator/pengaduan/create' ||
                //     $request->path() == '/operator/pengaduan/{id}/edit' ||
                //     $request->path() == '/operator/pengaduan/{id}' ||
                //     $request->path() == '/operator/kritiksaran' ||
                //     $request->path() == '/operator/kritiksaran/{id}'
                // ) {
                //     return redirect('/dashboard')->with('error', 'Anda merupakan admin.');
                // }
            } elseif (session()->get('sakses') == 'opr') {
                if($request->path() == '/login' || $request->path() == '/pengaduan/create') {
                    return redirect('/operator/dashboard')->with('error', 'Anda sudah login.');
                    // return back()->with('error', 'Anda sudah login.');
                } 
                // elseif (
                //     $request->path() != '/operator/dashboard' ||
                //     $request->path() != '/operator/pengaduan' ||
                //     $request->path() != '/operator/pengaduan/create' ||
                //     $request->path() != '/operator/pengaduan/{id}/edit' ||
                //     $request->path() != '/operator/pengaduan/{id}' ||
                //     $request->path() != '/operator/kritiksaran' ||
                //     $request->path() != '/operator/kritiksaran/{id}'
                // ) {
                //     return redirect('/operator/dashboard')->with('error', 'Anda merupakan admin.');
                // }
            } else {
                if($request->path() == '/login') {
                    return redirect('/');
                    // return back()->with('error', 'Anda sudah login.');
                }
            }
        }

        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma', 'no-cache')
                              ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
