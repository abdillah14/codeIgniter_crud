<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $table      = 'students';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nom',
        'email',
        'password',
        'address'
        ];
}