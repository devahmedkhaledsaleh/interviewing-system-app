<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalTopics extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'team_id'
    ];

    public function team() {
        return $this->belongsTo("App\Models\Team","team_id");
    }

    public function technicalTopicscandidates() {
        return $this->hasMany("App\Models\CandidateTechnicalTopics","technical_topics_id");
    }

    public function questions() {
        return $this->hasMany("App\Models\Question","technical_topics_id");
    }

}
