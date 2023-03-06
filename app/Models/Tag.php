<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function tagCandidates() {
        return $this->hasMany("App\Models\CandidateTag","tag_id");
    }

   
}
