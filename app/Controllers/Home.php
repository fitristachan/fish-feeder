<?php

namespace App\Controllers;

use App\Models\FeederModel;
use App\Models\StatusModel;

class Home extends BaseController
{
    protected $feederModel, $statusModel;

    public function __construct(){
        $this->feederModel = new FeederModel();
        $this->statusModel = new StatusModel();
    }

    public function index(): string
    {
        $feeder = $this->feederModel->findAll();

        $data = [
            'title' => 'Dashboard',
            'feeder' => $feeder
        ];

        return view('dashboard', $data);
    }
}
