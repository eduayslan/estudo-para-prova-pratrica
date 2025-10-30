<?php

namespace App\Livewire\Usuario;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UsuarioCreate extends Component
{
    public $name;
    public $email; 
    public $password;

    protected $rules = [
            'name' => 'required|min:3',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6', 
    ];

    protected $messages = [
        'name.required' => 'O nome é obrigatório.',
        'name.min' => 'Minimo 3 Caracteres',
        'email.required' => 'O campo email é obrigatório',
        'email.unique' => 'Email já Cadastrado',
        'password.required' => 'Senha obrigatória',
        'password.min' =>  'Minimo 6 Caracteres',
    ];

    public function save()
    {
        $this->validate();

        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Usuario::create([
            'name' => $this->nome,
        ]);

        session()->flash('message', 'Usuario criado com sucesso.');
        $this->reset(['name','email', 'password']);
        
        return redirect()->route('usuario.index');
    }


    public function render()
    {
        return view('livewire.usuario.usuario-create');
    }
}
