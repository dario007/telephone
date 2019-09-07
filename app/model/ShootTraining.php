<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;

class ShootTraining extends Model
 
{
    protected $table = 'shoottraining';
    
    protected $fillable = [
    'shoot1',
    'shoot2',
    'shoot3',
    'shootPoints',
    ];
    
        public function shoottraining() {
        return $this->belongsto('App/Models/Player');
    }
    
}
 
?>