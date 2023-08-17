<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employement_status extends Model
{
    protected $table = 'employement_statuses';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
