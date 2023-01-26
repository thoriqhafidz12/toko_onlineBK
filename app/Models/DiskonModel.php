<?php namespace App\Models;
 
use CodeIgniter\Model;
use App\Models\DiskonModel;
 
class DiskonModel extends Model
{
    protected $table = 'diskon';
 
    public function getDiskons()
    {
        return $this->findAll();
    }
 
}