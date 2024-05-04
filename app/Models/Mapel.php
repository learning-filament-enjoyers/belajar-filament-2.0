<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'mapel';

    protected $fillable = [
        'nama',
        'singkatan',
    ];

    public function guru()
    {
        return $this->hasOne(Guru::class);
    }
}
