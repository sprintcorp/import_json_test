<?php

namespace App\Http\Controllers;

use App\Interfaces\UploadInterface;
use App\Models\Information;
use App\Services\DateDiff;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class InformationController extends Controller
{
    protected $uploadInterface;

    /**
     * Create a new constructor for this controller
     */
    public function __construct(UploadInterface $uploadInterface)
    {
        $this->uploadInterface = $uploadInterface;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = $this->uploadInterface->uploadJson($request);
        return $response;
    }


}
