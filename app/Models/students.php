<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primarykey = 'idstudents';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = ['nis','fullname','gender','address','emailaddress','phone'];
}
