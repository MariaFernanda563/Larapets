<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'pet_id',
    ];


    //Relationships:
    //adoption belongTo user
    public function user(){
        return $this->belongsTo(User::class);
    }
    //adoptions brlongTo pet
    public function pet(){
        return $this->belongsTo(Pet::class);
    }

    public function scopenames($query, $q){
        $q = trim((string) $q);
        if ($q !== '') {
            $query->whereHas('user', function($sub) use ($q) {
                $sub->where('fullname', 'LIKE', "%{$q}%");
            })->orWhereHas('pet', function($sub) use ($q) {
                $sub->where('name', 'LIKE', "%{$q}%");
            });
        }
        return $query;
    }
}

