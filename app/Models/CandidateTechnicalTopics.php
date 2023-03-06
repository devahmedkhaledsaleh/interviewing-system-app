<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateTechnicalTopics extends Model
{
    use HasFactory;

    protected $fillable = [
        'note','score','candidate_id','technical_topics_id'
    ];

    public function candidate() {
        return $this->belongsTo("App\Models\Candidate","candidate_id");
    }

    public function technicalTopic() {
        return $this->belongsTo("App\Models\TechnicalTopics","technical_topics_id");
    }
}
