<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;
 
class DribbleTraining extends Model
 
{
    protected $table = 'dribbletraining';
    
    protected $primaryKey = 'dribbleTrainingId';
    
    public $timestamps = false;
    
    protected $fillable = [
    'dribble1',
    'dribble2',
    'dribble3',
    'dribblePoints',
    ];
    
        public function player() {
        return $this->belongsTo('App\Models\Player','playerId');
    }
    
}
 
?>