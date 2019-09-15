<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SoptPhone extends Model

{
    protected $table = 'sopt_phone';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'text'
    ];


}

?>