<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'image',
        'kind',
        'weight',
        'age',
        'breed',
        'location',
        'description',
        'active',
        'status',
    ];

     //Relationships
    //pet hasOne adoptions
    public function adoptions(){
        return $this->hasOne(Adoption::class);
    }

    //scope names
    public function scopenames($pets, $q){
        if(trim($q)){
            $pets->where('name', 'LIKE', "%$q%")
                    ->orWhere('kind', 'LIKE', "%$q%"); 
        }
    }

public function scopekinds($pets,$q){
        if(trim($q)){
            $pets->where('name', 'LIKE', "%$q%")
                ->where('status',0)
                ->orWhere('kind','LIKE', "%$q%")
                ->where('status',0);
        }
    }
}

