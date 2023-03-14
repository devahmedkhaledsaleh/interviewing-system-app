<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag_id','candidate_id'
    ];

    public function candidate() {
        return $this->belongsTo("App\Models\Candidate","candidate_id");
    }

    public function tag() {
        return $this->belongsTo("App\Models\Tag","tag_id");
    }


    // Add Function To Add Tag First In Table Tags if it isn't Exist And Return Id To Save It In Table Candidate Tag
}
