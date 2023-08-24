<?php

namespace App\Repositorties;

interface RepositoryInterface
{
    public function baseQuery($relations=[]);
    public function getById($id);
    public function store($varibles);
    public function update($id , $varibles);
    public function delete($varibles);
}
