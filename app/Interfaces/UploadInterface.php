<?php


namespace App\Interfaces;


use Illuminate\Http\Request;

interface UploadInterface
{
    /*Json File*/
    public function uploadJson(Request $request);

    /*Other file type*/
    public function uploadCSV();
}
