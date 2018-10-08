<?php

namespace App\Http\Controllers;

use App\Pelajar;
use Illuminate\Http\Request;
use App\Transformers\PelajarTransformer;

class PelajarController extends Controller
{
    public function index(Request $request, Pelajar $nokp)
    {
        return fractal()
            ->item($nokp)
            ->transformWith(new PelajarTransformer)
            ->toArray();
    }
}
