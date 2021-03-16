<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function all()
    {
        return $this->model->all();
    }

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function resolveModel()
    {
        return  app($this->model);
    }
}

?>