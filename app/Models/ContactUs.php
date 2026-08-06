<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = ['nama_lengkap', 'email', 'subjek', 'pesan', 'status'];
}