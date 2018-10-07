<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;

class UserController extends Controller
{
    public function users(Request $request)
    {
        /* $user = fractal(User::all(), new UserTransformer())->toArray(); */
        $user = fractal()
            ->collection(User::get())
            ->transformWith(new UserTransformer())
            ->toArray();

        return response()->json($user);
    }

    public function profile(User $user)
    {
        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->includePosts()
            ->toArray();
    }
}
