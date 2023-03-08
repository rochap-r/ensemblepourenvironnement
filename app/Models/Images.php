<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable=['name','path','extension','path_min'];
    public function imageable(){
        return $this->morphTo();
    }
}
