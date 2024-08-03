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

    public function postLog()
{
    $tanggal_waktu = $this->request->getGet('tanggal_waktu');
    $tingkat_kekeruhan = $this->request->getGet('tingkat_kekeruhan');
    $status_id = $this->request->getGet('status_id');

    $data = [
        'tanggal_waktu' => $tanggal_waktu,
        'tingkat_kekeruhan' => (float) $tingkat_kekeruhan,
        'status_id' => (int) $status_id
    ];

    if ($this->feederModel->insert($data) === false) {
        $response = [
            'success' => false,
            'message' => 'Insert Failed',
            'errors' => $this->feederModel->errors()
        ];
    } else {
        $response = [
            'success' => true,
            'message' => 'Data Inserted Successfully',
            'data' => $data
        ];
    }
    return $this->response->setJSON($response);
}

}
