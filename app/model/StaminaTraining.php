<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;

class StaminaTraining extends Model
 
{
    protected $table = 'staminatraining';
    
    protected $fillable = [
    'stamina1',
    'stamina2',
    'stamina3',
    'staminaPoints',
    ];
    
        public function staminatraining() {
        return $this->belongsto('App/Models/Player');
    }
    
}
 
?>