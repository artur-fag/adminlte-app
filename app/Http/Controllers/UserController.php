<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'

        ]);

        User::create($input);

        return redirect()->route('users.index')
            ->with('status', 'Usuário cadastrado com sucesso!');
    }

    public function edit(User $user)
    {
        $user->load('profile');
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'exclude_if:password,null|min:6'
        ]);

        $user->fill($input);
        $user->save();

        return  redirect()->route('users.index')
            ->with('status', 'Usuário atualizado com sucesso!');
    }
    public function updateProfile(Request $request, User $user)
    {
        $input = $request->validate([
            'type' => 'required',
            'address' => 'nullable',

        ]);
        //método que atualiza o perfil sem criar mais de um registro de alteração
        UserProfile::updateOrCreate(
            [
                'user_id' => $user->id,

            ],
            [

                'type' => $input['type'],
                'address' => $input['address'],
            ]
        );


        //$user->profile()->create($input);
        // return back()
        //     ->with('status', 'Usuário excluído com sucesso!');


        // $user->fill($input);
        // $user->save();

        return  redirect()->route('users.index')
            ->with('status', 'Perfil atualizado com sucesso!');


        // dd($request->all());
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()
            ->with('status', 'Usuário excluído com sucesso!');
    }
}
