<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function save(Request $request) {
        $this->user->create($request->all());

        return response()->json(['data' => ['message' => 'Usuário cadastrado com sucesso']]);
    }

    public function update($id, Request $request) {
        $user = $this->user->find($id);

        $user->update($request->all());

        return response()->json(['data' => ['message' => 'Usuário atualizado com sucesso']]);
    }

    public function delete($id) {
        $user = $this->user->find($id);

        $user->delete();

        return response()->json(['data' => ['message' => 'Usuário deletado com sucesso']]);
    }
}
