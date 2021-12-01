<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // campos que queremos asignar masivamente
    protected $fillable = ['title',  'Description'];

    // Campos que no queremos
    /* protected $guarded = ['title',  'Description']; */
    use HasFactory;
}
