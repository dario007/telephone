<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PhoneCommands extends Model

{
    protected $table = 'phone_commands';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'text'
    ];


}

?>