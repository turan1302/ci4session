<?php 

namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table         = 'admin';
    protected $allowedFields = [
        'id', 'email', 'password'
    ];
    protected $returnType    = 'object';
    protected $primaryKey = "id";
}