<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $traits = [
                'EXTRAVERSION', 'Friendliness', 'Gregariousness', 'Assertiveness', 'ActivityLevel', 
                'ExcitementSeeking', 'Cheerfulness', 'AGREEABLENESS', 'Trust', 'Morality', 
                'Altruism', 'Cooperation', 'Modesty', 'Sympathy', 'CONSCIENTIOUSNESS', 'SelfEfficacy', 
                'Orderliness', 'Dutifulness', 'AchievementStriving', 'SelfDiscipline', 'Cautiousness', 
                'NEUROTICISM', 'Anxiety', 'Anger', 'Depression', 'SelfConsciousness', 'Immoderation', 
                'Vulnerability', 'OPENNESS', 'Imagination', 'ArtisticInterests', 'Emotionality', 
                'Adventurousness', 'Intellect', 'Liberalism'
            ];

            foreach ($traits as $trait) {
                $table->integer($trait);
            }

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('results', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('results');
    }
};