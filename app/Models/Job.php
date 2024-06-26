<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function languages() {
        return $this->belongsToMany(ProgrammingLanguage::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
