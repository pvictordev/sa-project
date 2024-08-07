<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FreelancerSkill extends Pivot
{
    use HasFactory;
    protected $table = 'freelancers_skills';

    protected $fillable = [
        'freelancer_id',
        'skill_id',
    ];
    public $timestamps = false;

    // public function freelancer()
    // {
    //     return $this->belongsTo(Freelancer::class, 'freelancer_id');
    // }

    // public function skill()
    // {
    //     return $this->belongsTo(Skill::class, 'skill_id');
    // }
}
