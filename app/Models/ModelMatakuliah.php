<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMatakuliah extends Model
{
    protected $table = 'tb_matakuliah';
    protected $primaryKey = 'id_matakuliah';

    protected $returnType = 'object';

    protected $allowedFields = ['matakuliah', 'hari', 'jam', 'ruang', 'semester'];

    // Jika diperlukan, tambahkan method lain seperti fetch, update, delete, dll.
}
