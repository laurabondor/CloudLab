<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultsTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            'user_id' => 2,
            'EXTRAVERSION' => 20,
            'Friendliness' => 42,
            'Gregariousness' => 48,
            'Assertiveness' => 1,
            'ActivityLevel' => 66,
            'ExcitementSeeking' => 32,
            'Cheerfulness' => 12,
            'AGREEABLENESS' => 14,
            'Trust' => 7,
            'Morality' => 71,
            'Altruism' => 7,
            'Cooperation' => 35,
            'Modesty' => 32,
            'Sympathy' => 6,
            'CONSCIENTIOUSNESS' => 18,
            'SelfEfficacy' => 1,
            'Orderliness' => 50,
            'Dutifulness' => 1,
            'AchievementStriving' => 10,
            'SelfDiscipline' => 46,
            'Cautiousness' => 88,
            'NEUROTICISM' => 81,
            'Anxiety' => 70,
            'Anger' => 66,
            'Depression' => 83,
            'SelfConsciousness' => 55,
            'Immoderation' => 32,
            'Vulnerability' => 99,
            'OPENNESS' => 9,
            'Imagination' => 65,
            'ArtisticInterests' => 45,
            'Emotionality' => 8,
            'Adventurousness' => 40,
            'Intellect' => 1,
            'Liberalism' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('results')->insert($data);
    }

    public function down()
    {
        DB::table('results')->truncate();
    }
}