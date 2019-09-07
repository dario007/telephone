<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;
 
class SpeedTraining extends Model
 
{
    protected $table = 'speedtraining';
    
    protected $fillable = [
    'speed1',
    'speed2',
    'speed3',
    'speedPoints',
    ];
    
        public function speedtraining() {
        return $this->belongsto('App/Models/Player');
    }
    
}
 
?>