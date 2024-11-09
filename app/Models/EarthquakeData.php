<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EarthquakeData extends Model
{
    use HasFactory;
    protected $table = 'earthquake_data';
    protected $fillable = ['location', 'depth', 'magnitude', 'warnings', 'victims', 'date'];
}
