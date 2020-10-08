<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Validators\Failure;
use App\Http\Requests\Importing_users_request;

class UsersImport implements ToModel , WithHeadingRow,WithValidation ,SkipsOnFailure,WithChunkReading,WithBatchInserts
{
    use Importable;
    use SkipsFailures;

    private $acceptedRows = 0;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        ++$this->acceptedRows;
        return new User([
            //
            'first_name'  => $row['first_name'],
            'second_name' => $row['second_name'],
            'family_name' => $row['family_name'],
            'uid'         => $row['uid']
        ]);




    }

    public function rules(): array
    {
        $request = new Importing_users_request();
        return $request->rules();
    }





    public function getAcceptedRowCount(): int
    {
        return $this->acceptedRows;
    }


    public function chunkSize(): int
    {
        return 1000;
    }

    public function batchSize(): int
    {
        return 1000;
    }


}
