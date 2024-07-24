<?php

namespace App\Models;

use CodeIgniter\Model;

class FeederModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'log';
    protected $primaryKey       = 'log_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['log_id', 'status_id', 'tanggal_waktu', 'tingkat_kekeruhan'];

    // // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllLog()
    {
        return $this->select('log_id, tanggal_waktu, tingkat_kekeruhan, status.status')
                    ->join('status', 'log.status_id = status.status_id')
                    ->asObject()
                    ->findAll();
    }
}