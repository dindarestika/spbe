<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    protected $table = 'domain';
    protected $fillable =['nama_domain', 'bobot_domain'];

    public function aspek()
    {
        return $this->hasMany(Aspek::class);
    }
    public function indikator()
    {
        return $this->hasManyThrough(Indikator::class, Aspek::class);
    }
    
}
