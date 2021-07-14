<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    private $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        return $this->user = $user;
    }

    public function findAll() {
        return User::all();
        /* $results = app('db')->select("SELECT * FROM users");
        return $results; */
    }

    public function findById($id) {
        return $this->user->find($id);
    }
}
