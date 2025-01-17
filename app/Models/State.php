<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = "states";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'alias',
        'capital_id'
    ];

    /**
     * Get the region for the state.
     */
    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    /**
     * Get capital
     */
    public function capital()
    {
        return $this->belongsTo(Capital::class);
    }
}
