<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => bcrypt($request->name . $request->password),
        ]);

/*         $response = fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->toArray();

        return response()->json($response, 201);
 */
        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->addMeta([
                'token' => $user->api_token,
            ])
            ->respond(201);
    }

    public function profile(Request $request)
    {
        $user = Auth::guard('api')->user();

        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->includePosts()
            ->addMeta([
                'token' => $user->api_token,
            ])
            ->toArray();
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->username)->first();

        if($user->exists() && Hash::check($request->password, $user->password))
        {
            return fractal()
                ->item($user)
                ->transformWith(new UserTransformer)
                ->addMeta(['token' => $user->api_token,])
                ->toArray();
        }

        return abort(403, 'Unauthorized');
    }
}