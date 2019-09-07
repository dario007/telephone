<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;

class LeadershipTraining extends Model
 
{
    protected $table = 'leadershiptraining';
    
    protected $fillable = [
    'leaderhip1',
    'leaderhip2',
    'leaderhip3',
    'leadershipPoints',
    ];
    
        public function leadershiptraining() {
        return $this->belongsto('App/Models/Player');
    }
    
}
 
?>