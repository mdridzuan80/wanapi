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
            'nokp' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'peranan' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'nokp' => $request->nokp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => bcrypt($request->no_matrik . $request->password),
            'peranan_kod' => $request->peranan,
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
                'saveStatus' => 'pass',
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
                'saveStatus' => 'pass',
            ])
            ->toArray();
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('nokp',$request->username)->first();

        if($user && Hash::check($request->password, $user->password))
        {
            return fractal()
                ->item($user)
                ->transformWith(new UserTransformer)
                ->addMeta(['token' => $user->api_token, 'saveStatus' => 'pass'])
                ->toArray();
        }

        return abort(403, 'Unauthorized');
    }
}
