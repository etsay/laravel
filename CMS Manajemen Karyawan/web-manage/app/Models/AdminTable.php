<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminTable extends Model
{
    protected $table = 'admin_tables';
    protected $fillable = ['username', 'password'];
    
}
