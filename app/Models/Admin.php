<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
    use HasFactory;
    // use HasApiTokens;
    protected $table = 'admin';
    protected $fillable = [
        'AdminID', 'FirstName', 'LastName', 'Email', 'Password',
        'PhoneNumber1', 'PhoneNumber2'
    ];
    protected $primaryKey = 'AdminID';
    protected $keyType = 'string';
}
