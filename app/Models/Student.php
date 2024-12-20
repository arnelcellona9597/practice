<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    protected $fillable = ['user_id', 'name', 'address', 'year_level'];

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }
}
