<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model

{
    protected $table = 'customer';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'phone',
        'redirect',
        'right',
        'firm'
    ];


}

?>