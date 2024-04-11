<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
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
                 "text": "Am o imaginație bogată."
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
                 "text": "Îmi place să fiu responsabil/ă."
              },
              {
                 "id": 13,
                 "text": "Consider că sunt foarte emoțional/ă."
              },
              {
                 "id": 14,
                 "text": "Iubesc să îi ajut pe ceilalți."
              },
              {
                 "id": 15,
                 "text": "Îmi țin promisiunile."
              },
              {
                 "id": 16,
                 "text": "Îmi este greu să interacționez cu ceilalți."
              },
              {
                 "id": 17,
                 "text": "Sunt mereu ocupat/ă."
              },
              {
                 "id": 18,
                 "text": "Prefer varietatea în locul rutinei."
              },
              {
                 "id": 19,
                 "text": "Îmi place să mă lupt."
              },
              {
                 "id": 20,
                 "text": "Muncesc din greu."
              },
              {
                 "id": 21,
                 "text": "Fac excese."
              },
              {
                 "id": 22,
                 "text": "Iubesc entuziasmul."
              },
              {
                 "id": 23,
                 "text": "Îmi place să citesc materiale cu grad ridicat de dificultate."
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
                 "text": "Mă panicheaz ușor."
              },
              {
                 "id": 27,
                 "text": "Sunt o persoană foarte fericită."
              },
              {
                 "id": 28,
                 "text": "Tind să votez pentru candidați politici liberali."
              },
              {
                 "id": 29,
                 "text": "Simpatizez cu oamenii fără adăpost."
              },
              {
                 "id": 30,
                 "text": "Fac lucruri fără a mă gândi înainte."
              },
              {
                 "id": 31,
                 "text": "Mă tem că se poate întâmpla cel mai rău."
              },
              {
                 "id": 32,
                 "text": "Mă simt confortabil în preajma oamenilor."
              },
              {
                 "id": 33,
                 "text": "Îmi plac fanteziile."
              },
              {
                 "id": 34,
                 "text": "Consider că oamenii au intenții bune."
              },
              {
                 "id": 35,
                 "text": "Excelez în ceea ce fac."
              },
              {
                 "id": 36,
                 "text": "Mă enervez ușor."
              },
              {
                 "id": 37,
                 "text": "Îmi place să interacționez cu multe persoane la petreceri."
              },
              {
                 "id": 38,
                 "text": "Văd frumosul în lucruri pe care alții ar putea să nu le observe."
              },
              {
                 "id": 39,
                 "text": "Trișez pentru beneficiul personal."
              },
              {
                 "id": 40,
                 "text": "Deseori uit să pun lucrurile înapoi la locul lor."
              },
              {
                 "id": 41,
                 "text": "Nu-mi place de mine."
              },
              {
                 "id": 42,
                 "text": "Încerc să îi conduc pe ceilalți."
              },
              {
                 "id": 43,
                 "text": "Am simțul empatiei."
              },
              {
                 "id": 44,
                 "text": "Îmi pasă de ceilalți."
              },
              {
                 "id": 45,
                 "text": "Spun adevărul."
              },
              {
                 "id": 46,
                 "text": "Mi-e teamă să atrag atenția asupra mea."
              },
              {
                 "id": 47,
                 "text": "Sunt mereu pe fugă."
              },
              {
                 "id": 48,
                 "text": "Prefer să fac ce știu deja."
              },
              {
                 "id": 49,
                 "text": "Țip la oameni."
              },
              {
                 "id": 50,
                 "text": "Fac mai mult decât se așteaptă oamenii de la mine."
              },
              {
                 "id": 51,
                 "text": "Nu sunt foarte indulgent/ă."
              },
              {
                 "id": 52,
                 "text": "Sunt o persoană adventuroasă."
              },
              {
                 "id": 53,
                 "text": "Evit discuțiile filozofice."
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
                 "text": "Profit de ceilalți."
              },
              {
                 "id": 70,
                 "text": "Camera mea este dezordonată."
              },
              {
                 "id": 71,
                 "text": "Deseori sunt nefericit/ă."
              },
              {
                 "id": 72,
                 "text": "Preiau controlul asupra lucrurilor."
              },
              {
                 "id": 73,
                 "text": "Rareori îmi observ reacțiile iraționale."
              },
              {
                 "id": 74,
                 "text": "Sunt indiferent/ă față de sentimentele altora."
              },
              {
                 "id": 75,
                 "text": "Încalc regulile."
              },
              {
                 "id": 76,
                 "text": "Mă simt confortabil/ă doar în preajma prietenilor."
              },
              {
                 "id": 77,
                 "text": "Fac multe lucruri în timpul liber."
              },
              {
                 "id": 78,
                 "text": "Nu-mi plac schimbările."
              },
              {
                 "id": 79,
                 "text": "Insult oamenii."
              },
              {
                 "id": 80,
                 "text": "Muncesc doar cât trebuie."
              },
              {
                 "id": 81,
                 "text": "Rezist cu ușurință tentațiilor."
              },
              {
                 "id": 82,
                 "text": "Îmi place să fiu nesăbuit/ă."
              },
              {
                 "id": 83,
                 "text": "Am dificultăți în înțelegerea ideilor abstracte."
              },
              {
                 "id": 84,
                 "text": "Am o părere foarte bună despre mine."
              },
              {
                 "id": 85,
                 "text": "Pierd timpul."
              },
              {
                 "id": 86,
                 "text": "Simt că sunt incapabil/ă să fac față lucrurilor."
              },
              {
                 "id": 87,
                 "text": "Iubesc viața."
              },
              {
                 "id": 88,
                 "text": "Tind să votez pentru candidați politici conservatori."
              },
              {
                 "id": 89,
                 "text": "Nu mă interesează problemele altora."
              },
              {
                 "id": 90,
                 "text": "Mă grăbesc în a face lucruri."
              },
              {
                 "id": 91,
                 "text": "Mă stresez ușor."
              },
              {
                 "id": 92,
                 "text": "Păstrez o anumită distanță față de oameni."
              },
              {
                 "id": 93,
                 "text": "Îmi place să mă pierd în gânduri."
              },
              {
                 "id": 94,
                 "text": "Nu am încredere în oameni."
              },
              {
                 "id": 95,
                 "text": "Sunt descurcăreț/eață."
              },
              {
                 "id": 96,
                 "text": "Mă enervez cu greu."
              },
              {
                 "id": 97,
                 "text": "Evit aglomerația."
              },
              {
                 "id": 98,
                 "text": "Nu îmi place să vizitez muzee de artă."
              },
              {
                 "id": 99,
                 "text": "Sabotez planurile altora."
              },
              {
                 "id": 100,
                 "text": "Îmi rătăcesc lucrurile."
              },
              {
                 "id": 101,
                 "text": "Mă simt bine cu mine însumi."
              },
              {
                 "id": 102,
                 "text": "Aștept ca altcineva să preia controlul."
              },
              {
                 "id": 103,
                 "text": "Nu înțeleg persoanele care sunt emoționale."
              },
              {
                 "id": 104,
                 "text": "Nu am timp pentru ceilalți."
              },
              {
                 "id": 105,
                 "text": "Nu-mi respect promisiunile."
              },
              {
                 "id": 106,
                 "text": "Nu mă deranjează situațiile sociale dificile."
              },
              {
                 "id": 107,
                 "text": "Îmi place să o iau ușurel."
              },
              {
                 "id": 108,
                 "text": "Sunt atașat de căile convenționale."
              },
              {
                 "id": 109,
                 "text": "Mă răzbun pe oameni."
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
                 "text": "Sunt o persoană nebună."
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


    public function down()
    {
        DB::table('questions')->truncate();
    }
}
