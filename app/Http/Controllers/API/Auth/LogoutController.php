<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke(Request $request){

        try {
            $user = request()->user(); //or Auth::user()

            $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

            return response()->json([
                'status' => true,
                'message' => 'User Logout Successfully'
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }



    }
}
