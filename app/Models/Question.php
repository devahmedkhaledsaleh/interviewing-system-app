<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'technical_topics_id'
    ];

    public function technicalTopic() {
        return $this->belongsTo("App\Models\TechnicalTopics","technical_topics_id");
    }
}
