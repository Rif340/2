<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;
    
    public $timestaps=false;
    protected $table ="masyarakat";

    protected $fillable =["nik","nama","username","password","telepon"];
}
