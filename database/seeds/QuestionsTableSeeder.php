<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        Question::truncate();

        Question::create([
            'question_set_id' => '1',
            'question' => 'Explains clearly the learning objectives of the lesson. (Ipinaliliwanag ng malinaw ang layunin sa pag aaral ng paksa.)',
            'order' => '1',
            'question_type_id' => 1,
            'required' => 1,

        ]);
        Question::create([
            'question_set_id' => '1',
            'question' => 'Presents ideas and concepts in a clear and organized manner. (Inilalahad ang mga ideya o konsepto nang malinaw at sa maayos na pamamaraan.)',
            'order' => '2',
            'question_type_id' => 1,
            'required' => 1,
        ]);
        Question::create([
            'question_set_id' => '1',
            'question' => 'Relates subject matter/lesson to other subjects and its practical applications. (Iniuugnay ang paksang aralin sa ibang paksa at ang madadali nitong pagsasagawa.)',
            'order' => '3',
            'question_type_id' => 1,
            'required' => 1,
        ]);
        Question::create([
            'question_set_id' => '1',
            'question' => 'Encourages questions from students; stimulates interests, thinking and discussion in class. (Humikayat na magtanong at ang mag-arral; umiingganyo sa kawilihan, pag-iisip at diskusyon sa klase)',
            'order' => '4',
            'question_type_id' => 1,
            'required' => 1,
        ]);
        Question::create([
            'question_set_id' => '1',
            'question' => 'Is well-prepared for class; shows mastery of the subject matter. (Laging handa sa pagtuturo; nagpapakita ng kaalaman at kasanayan sa paksang aralin.)',
            'order' => '5',
            'question_type_id' => 1,
            'required' => 1,
        ]);
        Question::create([
            'question_set_id' => '1',
            'question' => 'What were your expectations for the course (subject) that have not been met?',
            'order' => '6',
            'question_type_id' => 2,
            'required' => 0,
        ]);

    }
}
