<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
   

    protected $table      = 'postss';
    protected $primaryKey = 'post_id';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

     protected $allowedFields = ['post_title', 'post_content'];

    // // Dates
    // protected $useTimestamps = false;
   
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    
}