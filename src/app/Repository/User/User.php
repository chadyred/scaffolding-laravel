<?php

namespace App\Repositories;

use App\Repository\User\UserInterface;
use App\User as EntityUser;
use Illuminate\Support\Facades\DB;

class User implements UserInterface
{
    protected $user;

    /**
     * User constructor.
     * @param EntityUser $user
     */
    public function __construct(EntityUser $user)
    {
        $this->user = $user;
    }

    private function save(EntityUser $user, array $inputs)
    {
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];
        $user->admin = isset($inputs['admin']);

        $user->save();
    }

    /**
     * @param $n
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|mixed
     */
    public function getPaginate($n)
    {
        return Db::table('user')->paginate($n);
    }

    public function store(Array $inputs)
    {
        $user = new $this->user;
        $user->password = bcrypt($inputs['password']);

        $this->save(
            $user,
            $inputs
        );

        return $user;
    }

    public function getById($id)
    {
        return Db::table('user')->find($id);
    }

    public function update($id, Array $inputs)
    {
        $this->save($this->getById($id), $inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}
