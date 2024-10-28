<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Obtiene todos los usuarios de la tabla
        $users = User::all(); // SELECT * FROM users

        // Pasa los usuarios a la vista
        return view('admin-actions/users/select-users', ['users' => $users]);
    }
}
