<?php


namespace App\Services;


use DateTime;

class DateDiff
{
    public function Difference($date){

        if (strpos($date,'/')){
            $date = DateTime::createFromFormat('d/m/Y', $date);
            $date_of_birth = $date->format('Y-m-d');
        }else{
            $date_of_birth = $date;
        }
        $d1 = new DateTime($date_of_birth);
        $d2 = new DateTime(now()->toDateTimeString());
        $interval = $d1->diff($d2);
        return $interval->y;
    }
}
