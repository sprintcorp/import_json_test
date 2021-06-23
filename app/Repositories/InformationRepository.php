<?php


namespace App\Repositories;


use App\Interfaces\UploadInterface;
use App\Models\Information;
use App\Services\DateDiff;
use Illuminate\Http\Request;
use \JsonMachine\JsonMachine;

class InformationRepository implements UploadInterface
{
    public $i = 0;

    public function uploadJson(Request $request)
    {
        $check_date_diff = new DateDiff();
        $json_data = JsonMachine::fromFile($request->file('file'));
        $objs = iterator_to_array($json_data);

        $data = [];

        for ($this->i; $this->i < count($objs);$this->i++) {
            $diffInYears = $check_date_diff->Difference($objs[$this->i]['date_of_birth']);
            if($diffInYears > 17 ||  $diffInYears < 66) {
                $data[] = [
                    'name' => $objs[$this->i]['name'],
                    'address' => $objs[$this->i]['address'],
                    'checked' => $objs[$this->i]['checked'],
                    'description' => $objs[$this->i]['description'],
                    'interest' => $objs[$this->i]['interest'] != '' ? $objs[$this->i]['interest'] : 'NULL',
                    'date_of_birth' => $objs[$this->i]['date_of_birth'] != '' ? $objs[$this->i]['date_of_birth'] : 'NULL',
                    'email' => $objs[$this->i]['email'],
                    'credit_card' => json_encode($objs[$this->i]['credit_card']),
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString(),
                ];
            }
        }

        $chunk_data = array_chunk($data,1000);
        try {
            foreach ($chunk_data as $datum) {
                Information::insert($datum);
            }
            return response()->json('Data successfully inserted');
        }catch (\Exception $exception){
            return response()->json($exception->getMessage());
        }

    }

    public function uploadCSV()
    {

    }
}
