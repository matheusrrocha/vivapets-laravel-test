<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
    public function all();
    public function find($id);
    public function paginate();
    public function create($data);
    public function update($data);
    public function delete();
}