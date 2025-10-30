<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'informe seu email',
        'email.email' => 'formato de Email inválido',
        
        'password.required' => 'senha obrigatória',
        'password.min' => 'Mínimo 6 caracteres'
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            session()->regenerate();

            return redirect()->route('dashboard');
        }

        session()->flash('error', 'Email ou senha incorretos');
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
