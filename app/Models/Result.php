<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    
    protected $table = 'results';

    protected $fillable = [
        'user_id',
        'EXTRAVERSION', 'Friendliness', 'Gregariousness', 'Assertiveness', 'ActivityLevel',
        'ExcitementSeeking', 'Cheerfulness', 'AGREEABLENESS', 'Trust', 'Morality',
        'Altruism', 'Cooperation', 'Modesty', 'Sympathy', 'CONSCIENTIOUSNESS', 'SelfEfficacy',
        'Orderliness', 'Dutifulness', 'AchievementStriving', 'SelfDiscipline', 'Cautiousness',
        'NEUROTICISM', 'Anxiety', 'Anger', 'Depression', 'SelfConsciousness', 'Immoderation',
        'Vulnerability', 'OPENNESS', 'Imagination', 'ArtisticInterests', 'Emotionality',
        'Adventurousness', 'Intellect', 'Liberalism'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}