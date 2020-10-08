<?php


namespace App\Http\Repositories;


use App\Http\Services\Contracts\UserServiceInterface;
use App\Imports\UsersImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class UserRepository implements UserServiceInterface
{
    private $model;
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function importUsers($file)
    {
        $import = new UsersImport();
        Excel::import($import, $file);

        $details['accepted'] = $import->getAcceptedRowCount();
        $details['rejected'] = $import->failures()->count();
        return $details;
    }
}
