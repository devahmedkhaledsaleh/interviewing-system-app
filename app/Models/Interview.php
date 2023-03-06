<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $fillable = [
        'type','score','result','notes'
    ];

    public function interviewAssignees() {
        return $this->hasMany("App\Models\InterviewAssignee","interview_id");
    }
}
