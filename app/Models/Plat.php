<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    protected $table = 'plat';
    protected $primarykey = 'id';
    
    /**
     * cette photo permet de récuperer le plat 
     *
     * @return PhotoPlat
     */
    public function photo()

    {
        return $this->hasOne(PhotoPlat::class);
    }
}
