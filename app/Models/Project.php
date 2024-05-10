<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id'

    ];
    public function user(){
        return $this->BelongsTo(User::class,'user_id');
    }
    

}
