<?php namespace App\Models;

use CodeIgniter\Model;

class Employee extends Model 
{
    protected $table = 'if_employee';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'name',
        'birth',
        'hometown',
        'phonenumber',
        'position',
        'department',
        'identification_card',
        'issued_on',
        'placed_on',
    ];
}
?>