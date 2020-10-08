<?php


namespace App\Http\Services;


use App\Http\Services\Contracts\UserServiceInterface;
use App\Jobs\SendEmail;

class UserService implements  UserServiceInterface
{
    private  $repository;

    public function __construct(UserServiceInterface $userRepository)
    {
        $this->repository= $userRepository;
    }

    public function importUsers($file){

        dd('here');
       $details =  $this->repository->importUsers($file);
       $this->sendEmailAfterImporting($details);

    }

    public function sendEmailAfterImporting($details)
    {
        SendEmail::dispatch(env('Admin_Email'),$details);
    }
}
