<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;

class MoralTraining extends Model
 
{
    protected $table = 'moraltraining';
    
    protected $fillable = [
    'moral1',
    'moral2',
    'moral3',
    'moralPoints',
    ];
    
        public function moraltraining() {
        return $this->belongsto('App/Models/Player');
    }
    
}
 
?>