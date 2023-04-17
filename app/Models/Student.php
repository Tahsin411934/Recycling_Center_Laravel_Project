<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = '_request_to_collect';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'House_Number', 'Area_Name', 'Road_No', 'City', 'Postal_Code', 'mobile'];
}
