<?php

namespace App\Http\Controllers;

use App\Http\Services\Contracts\UserServiceInterface;
use App\Imports\UsersImport;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    /**
     * @var UserServiceInterface
     */
    private  $service;

    /**
     * UsersController constructor.
     * @param UserServiceInterface $userService
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->service = $userService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function import(Request $request)
    {
        $this->validateFileRequest($request);

        try {
            $this->service->importUsers($request->file);
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();

            foreach ($failures as $failure) {
                $failure->row(); // row that went wrong
                $failure->attribute(); // either heading key (if using heading row concern) or column index
                $failure->errors(); // Actual error messages from Laravel validator
                $failure->values(); // The values of the row that has failed.
            }
        }
        return redirect('/')->with('success', 'All good!');
    }

    /**
     * @desc validate uploaded file
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validateFileRequest(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'file' => 'required|mimes:xslx,csvr',
            ]
        );
        return $validator;

    }
}
