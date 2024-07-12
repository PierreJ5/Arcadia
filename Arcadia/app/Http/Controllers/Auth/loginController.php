<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::select('SELECT * FROM users WHERE email = ?', [$email]);
        $userRole = DB::select('SELECT * FROM possede WHERE id_utilisateur = ?' [$idUser])


    }
}
