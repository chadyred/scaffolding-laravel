<?php

declare(strict_types=1);

namespace App\Repository\User;

use App\User as EntityUser;

interface UserInterface
{
    /**
     * @param EntityUser $user
     * @param array $inputs
     * @return mixed
     */
    function save(EntityUser $user, array $inputs);

    /**
     * @param $n
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|mixed
     */
    public function getPaginate($n);

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);

}
