<?php

namespace App\Http\Livewire\Backend\Users;

use App\Models\User as ModelsUser;
use CisConfig\Facades\Config;
use Illuminate\Foundation\Auth\User;
use Livewire\Component;

class Table extends Component
{

    public $searchString = null;
    public $user_auth_method;
    protected $queryString = ['searchString'];

    public function mount() {
        $this->user_auth_method = Config::get('user_auth_method');
    }

    public function render()
    {

        if(!$this->searchString) {
            $users = ModelsUser::paginate(25);
        }
        else {
            $users = ModelsUser::where('lastname','like','%'.$this->searchString.'%')->orWhere('firstname','like','%'.$this->searchString.'%')->orWhere('email','like','%'.$this->searchString.'%')->get();
        }

        foreach($users as $user) {
            if($user->inWelcomeMode()) {
                $user->welcomeMode = true;
            }
        }

        return view('livewire.backend.users.table',[
            'users' => $users,
        ]);
    }
}
