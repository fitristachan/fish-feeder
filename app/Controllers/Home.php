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
        $latestStatusId = $this->feederModel->getLatestStatusId();
        $tingkatKekeruhan = $this->feederModel->getTingkatKekeruhan();
        $log = $this->feederModel->getTop5Records();

        $data = [
            'title' => 'Dashboard',
            'feeder' => $feeder,
            'latestStatusId' => $latestStatusId,
            'tingkatKekeruhan' => $tingkatKekeruhan,
            'log' => $log
        ];

        return view('dashboard', $data);
    }
}
