<?php

namespace App;

use App\User; // nho add cai nay vao

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
     /*Nam: khong them cai nay vao khong duoc*/
    protected $casts = [
        'user_id' => 'int',
    ];
    
    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
