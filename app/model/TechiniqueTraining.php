<?php
 
namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;
 
class TechiniqueTraining extends Model
 
{
    protected $table = 'techniquetraining';
    
    protected $fillable = [
    'technique1',
    'technique2',
    'technique3',
    'techniquePoints',
    ];
    
        public function speedtraining() {
        return $this->belongsto('App/Models/Player');
    }
    
}
 
?>