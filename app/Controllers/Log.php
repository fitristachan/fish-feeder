<?php

namespace App\Controllers;

use App\Models\FeederModel;

class Log extends BaseController
{
    protected $feederModel;

    public function __construct(){
        $this->feederModel = new FeederModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Riwayat Fish Feeder',
            'feeder' => $this->feederModel->getAllLog()
        ];
        return view('/show', $data);
    }
}
