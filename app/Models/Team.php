<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function users() {
        return $this->hasMany("App\Models\User","team_id");
    }

    public function technicalTopics() {
        return $this->hasMany("App\Models\TechnicalTopics","team_id");
    }
}
