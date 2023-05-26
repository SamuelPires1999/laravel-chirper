<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LikeController extends Controller
{
    public function like(Request $request, Chirp $chirp): RedirectResponse
    {
        $request->user()->likes()->attach($chirp->id);

        return redirect(route('chirps.index'));
    }

    public function unlike(Request $request, Post $post): RedirectResponse
    {
        $request->user()->likes()->detach($chirp->id);

        return redirect(route('chirps.index'));
    }
}
