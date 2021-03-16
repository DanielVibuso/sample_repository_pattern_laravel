<?php

namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Models\User;

 class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    protected $model = User::class;

    public function allWithPhones()
    {
        return $this->model->where('id', '>', '0')->with('phones')->get();
    }
}

?>