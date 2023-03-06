<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewAssignee extends Model
{
    use HasFactory;

    protected $fillable = [
        'interview_id','user_id'
    ];

    public function interview() {
        return $this->belongsTo("App\Models\Interview","interview_id");
    }

    public function user() {
        return $this->belongsTo("App\Models\User","user_id");
    }
}
