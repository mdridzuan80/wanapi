<?php

namespace App\Http\Controllers;

use App\Transformers\PelajarTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelajarController extends Controller
{
    public function index(Request $request)
    {
        $pelajar = Auth::user()->pelajar;

        return fractal()
            ->item($pelajar)
            ->transformWith(new PelajarTransformer)
            ->toArray();
    }
}
