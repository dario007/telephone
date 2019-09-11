<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PhoneCommands extends Model

{
    protected $table = 'benutzer';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'dribble1',
        'dribble2',
        'dribble3',
        'dribblePoints',
    ];


}

?>