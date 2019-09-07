<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;
 
class PassTraining extends Model
 
{
    protected $table = 'passtraining';
    
    protected $fillable = [
    'pass1',
    'pass2',
    'pass3',
    'passPoints',
    ];
    
        public function passtraining() {
        return $this->belongsto('App/Models/Player');
    }
    
}
 
?>