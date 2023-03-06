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
}
