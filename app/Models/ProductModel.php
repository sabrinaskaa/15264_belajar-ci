<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    // Gunakan 'object' jika ingin hasilnya dalam bentuk object

    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama', 'harga', 'jumlah', 'foto', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Jika diperlukan validasi
    protected $validationRules    = [
        'nama' => 'required|max_length[255]',
        'harga' => 'required|numeric',
        'jumlah' => 'required|integer',
        'foto' => 'permit_empty|max_length[255]',
    ];
    
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
