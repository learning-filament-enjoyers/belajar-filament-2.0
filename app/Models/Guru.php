<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'guru';

    protected $fillable = [
        'mapel_id',
        'nama',
        'handphone',
        'alamat',
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
