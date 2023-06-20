<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckAuthController extends Controller
{

    public function __invoke(Request $request) {
        return $request->user();
    }
}
