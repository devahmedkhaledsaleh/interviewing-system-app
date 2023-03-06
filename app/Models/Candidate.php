<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'cv',
        'img',
        'proposed_position',
        'state',
        'comment',
        'recruiter',
        'team_id',
        'current_employer',
        'linkedin_profile',
    ];

    public function candidateTags() {
        return $this->hasMany("App\Models\CandidateTag","candidate_id");
    }

    public function candidateTechnicalTopics() {
        return $this->hasMany("App\Models\CandidateTechnicalTopics","candidate_id");
    }
}
