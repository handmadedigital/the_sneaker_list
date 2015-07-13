<?php

namespace HMD\Repositories;

use HMD\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    protected $model;

    function __construct(User $model)
    {
        $this->model = $model;
    }

    public function persist($user)
    {
        $this->model->first_name = $user->first_name;
        $this->model->last_name = $user->last_name;
        $this->model->email = $user->email;
        $this->model->password = Hash::make($user->password);
        $this->model->address = $user->address;
        $this->model->city = $user->city;
        $this->model->state = $user->state;
        $this->model->zip_code = $user->zip_code;
        $this->model->country = $user->country;

        $this->model->save();
    }
}