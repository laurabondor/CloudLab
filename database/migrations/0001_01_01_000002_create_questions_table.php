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
        Schema::create('questions', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('text');
        });

        $json = '{
            "questions": [
                {
                    "id": 1,
                    "text": "Îmi fac griji."
                 },
                 {
                    "id": 2,
                    "text": "Îmi fac prieteni ușor."
                 },
                 {
                    "id": 3,
                    "text": "Am o imaginație bogată"
                 },
                 {
                    "id": 4,
                    "text": "Am încredere în ceilalți."
                 },
                 {
                    "id": 5,
                    "text": "Îmi termin cu succes sarcinile."
                 },
                 {
                    "id": 6,
                    "text": "Mă enervez ușor."
                 },
                 {
                    "id": 7,
                    "text": "Iubesc petrecerile cu mulți participanți."
                 },
                 {
                    "id": 8,
                    "text": "Cred în importanța artei."
                 },
                 {
                    "id": 9,
                    "text": "Profit de ceilalți pentru binele meu."
                 },
                 {
                    "id": 10,
                    "text": "Îmi place să fac ordine."
                 },
                 {
                    "id": 11,
                    "text": "Adesea mă simt trist/ă."
                 },
                 {
                    "id": 12,
                    "text": "Preia controlul."
                 },
                 {
                    "id": 13,
                    "text": "Să-mi trăiesc intens emoțiile."
                 },
                 {
                    "id": 14,
                    "text": "Iubește să-i ajuți pe alții."
                 },
                 {
                    "id": 15,
                    "text": "Să-mi țin promisiunile."
                 },
                 {
                    "id": 16,
                    "text": "Este dificil să te apropii de alții."
                 },
                 {
                    "id": 17,
                    "text": "Sunt mereu ocupat."
                 },
                 {
                    "id": 18,
                    "text": "Preferă varietatea în locul rutinei."
                 },
                 {
                    "id": 19,
                    "text": "Iubesc o luptă bună."
                 },
                 {
                    "id": 20,
                    "text": "Muncește din greu."
                 },
                 {
                    "id": 21,
                    "text": "Du-te pe binges."
                 },
                 {
                    "id": 22,
                    "text": "Iubire entuziasm."
                 },
                 {
                    "id": 23,
                    "text": "Îmi place să citesc materiale provocatoare."
                 },
                 {
                    "id": 24,
                    "text": "Cred că sunt mai bun decât alții."
                 },
                 {
                    "id": 25,
                    "text": "Sunt întotdeauna pregătit."
                 },
                 {
                    "id": 26,
                    "text": "Se panichează ușor."
                 },
                 {
                    "id": 27,
                    "text": "Radiază bucurie."
                 },
                 {
                    "id": 28,
                    "text": "Are tendința de a vota pentru candidații politici liberali."
                 },
                 {
                    "id": 29,
                    "text": "Simpatizați cu cei fără adăpost."
                 },
                 {
                    "id": 30,
                    "text": "Sari în lucruri fără să te gândești."
                 },
                 {
                    "id": 31,
                    "text": "Temeți-vă de ce e mai rău."
                 },
                 {
                    "id": 32,
                    "text": "Se simte confortabil în preajma oamenilor."
                 },
                 {
                    "id": 33,
                    "text": "Bucurați-vă de zboruri sălbatice de fantezie."
                 },
                 {
                    "id": 34,
                    "text": "Credeți că ceilalți au intenții bune."
                 },
                 {
                    "id": 35,
                    "text": "Excel în ceea ce fac."
                 },
                 {
                    "id": 36,
                    "text": "Se irită ușor."
                 },
                 {
                    "id": 37,
                    "text": "Vorbește cu o mulțime de oameni diferiți la petreceri."
                 },
                 {
                    "id": 38,
                    "text": "Vedeți frumusețea în lucruri pe care alții nu le-ar putea observa."
                 },
                 {
                    "id": 39,
                    "text": "Trișează pentru a avansa."
                 },
                 {
                    "id": 40,
                    "text": "Uită adesea să pună lucrurile la locul lor."
                 },
                 {
                    "id": 41,
                    "text": "Nu-mi place de mine."
                 },
                 {
                    "id": 42,
                    "text": "Încearcă să-i conduci pe alții."
                 },
                 {
                    "id": 43,
                    "text": "Simte emoțiile celorlalți."
                 },
                 {
                    "id": 44,
                    "text": "Sunt preocupat de ceilalți."
                 },
                 {
                    "id": 45,
                    "text": "Spune adevărul."
                 },
                 {
                    "id": 46,
                    "text": "Mi-e teamă să atrag atenția asupra mea."
                 },
                 {
                    "id": 47,
                    "text": "Sunt mereu în mișcare."
                 },
                 {
                    "id": 48,
                    "text": "Prefer să rămân cu lucrurile pe care le știu."
                 },
                 {
                    "id": 49,
                    "text": "Țipă la oameni."
                 },
                 {
                    "id": 50,
                    "text": "Să fac mai mult decât se așteaptă de la mine."
                 },
                 {
                    "id": 51,
                    "text": "Rareori se suprasolicită."
                 },
                 {
                    "id": 52,
                    "text": "Căutați aventura."
                 },
                 {
                    "id": 53,
                    "text": "Evitați discuțiile filozofice."
                 },
                 {
                    "id": 54,
                    "text": "Am o părere bună despre mine."
                 },
                 {
                    "id": 55,
                    "text": "Îmi îndeplinesc planurile."
                 },
                 {
                    "id": 56,
                    "text": "Sunt copleșit/ă ușor de ce se întâmplă în jurul meu."
                 },
                 {
                    "id": 57,
                    "text": "Mă distrez foarte mult."
                 },
                 {
                    "id": 58,
                    "text": "Cred că nu există nimic absolut corect sau absolut incorect."
                 },
                 {
                    "id": 59,
                    "text": "Am simpatie pentru cei care se află în situații mai rele decât mine."
                 },
                 {
                    "id": 60,
                    "text": "Iau decizii pripite."
                 },
                 {
                    "id": 61,
                    "text": "Mi-e frică de multe lucruri."
                 },
                 {
                    "id": 62,
                    "text": "Evit contactul cu ceilalți."
                 },
                 {
                    "id": 63,
                    "text": "Îmi place să visez cu ochii deschiși."
                 },
                 {
                    "id": 64,
                    "text": "Am încredere în ceea ce spun oamenii."
                 },
                 {
                    "id": 65,
                    "text": "Îmi gestionez sarcinile fără problemă."
                 },
                 {
                    "id": 66,
                    "text": "Îmi pierd cumpătul."
                 },
                 {
                    "id": 67,
                    "text": "Prefer să fiu singur."
                 },
                 {
                    "id": 68,
                    "text": "Nu-mi place poezia."
                 },
                 {
                    "id": 69,
                    "text": "Profită de alții."
                 },
                 {
                    "id": 70,
                    "text": "Lasă o mizerie în camera mea."
                 },
                 {
                    "id": 71,
                    "text": "Sunt adesea deprimat."
                 },
                 {
                    "id": 72,
                    "text": "Preia controlul asupra lucrurilor."
                 },
                 {
                    "id": 73,
                    "text": "Rareori observi reacțiile mele emoționale."
                 },
                 {
                    "id": 74,
                    "text": "Sunt indiferent la sentimentele celorlalți."
                 },
                 {
                    "id": 75,
                    "text": "Încalcă regulile."
                 },
                 {
                    "id": 76,
                    "text": "Mă simt bine doar cu prietenii."
                 },
                 {
                    "id": 77,
                    "text": "Fac multe în timpul meu liber."
                 },
                 {
                    "id": 78,
                    "text": "Nu-mi plac modificările."
                 },
                 {
                    "id": 79,
                    "text": "Insultă oamenii."
                 },
                 {
                    "id": 80,
                    "text": "Muncește doar atât cât să te descurci."
                 },
                 {
                    "id": 81,
                    "text": "Rezistă cu ușurință tentațiilor."
                 },
                 {
                    "id": 82,
                    "text": "Bucură-te de nesăbuință."
                 },
                 {
                    "id": 83,
                    "text": "Au dificultăți în înțelegerea ideilor abstracte."
                 },
                 {
                    "id": 84,
                    "text": "Am o părere bună despre mine."
                 },
                 {
                    "id": 85,
                    "text": "Îmi pierd timpul."
                 },
                 {
                    "id": 86,
                    "text": "Simt că sunt incapabil să fac față lucrurilor."
                 },
                 {
                    "id": 87,
                    "text": "Iubește viața."
                 },
                 {
                    "id": 88,
                    "text": "Are tendința de a vota pentru candidații politici conservatori."
                 },
                 {
                    "id": 89,
                    "text": "Nu mă interesează problemele altora."
                 },
                 {
                    "id": 90,
                    "text": "Să te grăbești în lucruri."
                 },
                 {
                    "id": 91,
                    "text": "Se stresează ușor."
                 },
                 {
                    "id": 92,
                    "text": "Ține-i pe ceilalți la distanță."
                 },
                 {
                    "id": 93,
                    "text": "Îți place să te pierzi în gânduri."
                 },
                 {
                    "id": 94,
                    "text": "Nu aveți încredere în oameni."
                 },
                 {
                    "id": 95,
                    "text": "Știu cum să fac lucrurile să meargă."
                 },
                 {
                    "id": 96,
                    "text": "Nu sunt ușor de enervat."
                 },
                 {
                    "id": 97,
                    "text": "Evitați aglomerația."
                 },
                 {
                    "id": 98,
                    "text": "Nu vă place să mergeți la muzee de artă."
                 },
                 {
                    "id": 99,
                    "text": "Obstrucționează planurile altora."
                 },
                 {
                    "id": 100,
                    "text": "Lasă-mi lucrurile prin preajmă."
                 },
                 {
                    "id": 101,
                    "text": "Mă simt bine cu mine însumi."
                 },
                 {
                    "id": 102,
                    "text": "Așteptați ca alții să vă arate calea."
                 },
                 {
                    "id": 103,
                    "text": "Nu-i înțeleg pe cei care se emoționează."
                 },
                 {
                    "id": 104,
                    "text": "Nu-ți face timp pentru alții."
                 },
                 {
                    "id": 105,
                    "text": "Nu-mi respect promisiunile."
                 },
                 {
                    "id": 106,
                    "text": "Nu sunt deranjat de situații sociale dificile."
                 },
                 {
                    "id": 107,
                    "text": "Îmi place să o iau ușor."
                 },
                 {
                    "id": 108,
                    "text": "Sunt atașat de căile convenționale."
                 },
                 {
                    "id": 109,
                    "text": "Să te răzbuni pe alții."
                 },
                 {
                    "id": 110,
                    "text": "Nu depun prea mult timp și efort în munca mea."
                 },
                 {
                    "id": 111,
                    "text": "Sunt capabil să-mi controlez poftele."
                 },
                 {
                    "id": 112,
                    "text": "Acționează sălbatic și nebun."
                 },
                 {
                    "id": 113,
                    "text": "Nu sunt interesat de discuții teoretice."
                 },
                 {
                    "id": 114,
                    "text": "Mă laud."
                 },
                 {
                    "id": 115,
                    "text": "Îmi este dificil să încep activități."
                 },
                 {
                    "id": 116,
                    "text": "Rămân calm/ă sub presiune."
                 },
                 {
                    "id": 117,
                    "text": "Privesc partea bună a vieții."
                 },
                 {
                    "id": 118,
                    "text": "Cred că trebuie să fim duri cu pedepsele penale."
                 },
                 {
                    "id": 119,
                    "text": "Încerc să nu mă gândesc la cei nevoiași."
                 },
                 {
                    "id": 120,
                    "text": "Acționez fără să gândesc."
                 }   
            ]
         }';
 
         $data = json_decode($json, true);
 
         foreach ($data['questions'] as $question) {
            DB::table('questions')->insert([
                 'id' => $question['id'],
                 'text' => $question['text'],
             ]);
         }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
