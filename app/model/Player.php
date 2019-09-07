<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;
 
class Player extends Model
 
{
    protected $table = 'player';
    
    protected $primaryKey = 'playerId';
    
    protected $hidden = [
    'playerPassword',
    ];
    
    protected $fillable = [
    'playerId',
    'playerPrename',
    'playerSurname',
    'updated_at',
    'created_at',
    'playerEmail',
    'playerPassword',
    'playerImg',
    'playerSpecial'
    
    ];
    
    /*
    attack
    */
    
    public function dribbletraining() {
        return $this->hasMany('App\Models\DribbleTraining','fk_playerId');
    }
    
     public function shoottraining() {
        return $this->hasMany('App\Models\ShootTraining','fk_playerId');
    }
    
     public function speedtraining() {
        return $this->hasMany('App\Models\SpeedTraining','fk_playerId');
    }
    
    /*
    middlefield
    */
    
    
     public function techniquetraining() {
        return $this->hasMany('techniquetraining','fk_playerId');
    }
    
     public function fatiquetraining() {
        return $this->hasMany('fatiquetraining','fk_playerId');
    }
    
     public function passtraining() {
        return $this->hasMany('passtraining','fk_playerId');
    }
    
    /*
    defence
    */
    
     public function staminatraining() {
        return $this->hasMany('staminatraining','fk_playerId');
    }
    
     public function moraltrainig() {
        return $this->hasMany('moraltrainig','fk_playerId');
    }
     public function leadershiptraining() {
        return $this->hasMany('leadershiptraining','fk_playerId');
  
    }
    
}
 
?>