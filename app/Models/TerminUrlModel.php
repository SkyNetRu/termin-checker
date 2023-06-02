<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerminUrlModel extends Model
{
    use HasFactory;

    protected $table = 'termin_url';
    protected $guarded = ['id'];

    public $timestamps = false;
}
