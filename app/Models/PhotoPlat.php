<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoPlat extends Model
{
    use HasFactory;
    protected $table = 'photo_plat';
    protected $primarykey = 'id';


    /**
     * cette fonction permet de récuperer le plat 
     *
     * @return plat
     */
    public function plat()
    {
        return $this->belongsTo(Plat::class);
    }
}
