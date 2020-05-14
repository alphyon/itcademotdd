<?php


namespace App\Http\Controllers;


use App\User;

class RepositoryUser
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function all()
    {
        return $this->model->all();
    }

}
