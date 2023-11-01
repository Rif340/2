<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class petugas extends Authenticatable
{
    use HasFactory;    

    protected $fillable =[
        "id",
        "nama_petugas",
        "username",
        "password",
        "telp",
        "level"
    ];
    protected $table ="petugas";
}
