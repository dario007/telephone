<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;
 
class FatiqueTraining extends Model
 
{
    protected $table = 'fatiquetraining';
    
    protected $primaryKey = 'fatiqueTrainingId';
    
    public $timestamps = false;
    
    protected $fillable = [
    'fatique1',
    'fatique2',
    'fatique3',
    'fatiquePoints',
    ];
    
        public function player() {
        return $this->belongsto('App\Models\Player','playerId');
    }
    
}
 
?>