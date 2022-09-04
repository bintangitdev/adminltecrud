<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;
    protected $table = 'pengalamen';
    protected $primaryKey = 'id';

    /**
* fillable
*
* @var array
*/
protected $fillable = [
    'NamaTempatKerja', 'LamaKerja', 'Profesi', 'Deskripsi'
];
}
