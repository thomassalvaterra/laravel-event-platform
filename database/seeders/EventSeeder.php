<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $events = [
            [
                'name' => 'Atletico Madrid vs F.C. Internazionale Milano',
                'date' => '27-02-2024',
                'available_tickets' => false,
                'description' => 'Le due squadre si affrontano in un big match al Wanda Metropolitano alle ore 21.00',
                'image' => 'https://www.viavaiticket.com/cdn/shop/files/Immagine.png?v=1704883100',
                'tag_id' => 1

            ],
            [
                'name' => 'The Weeknd',
                'date' => '10-11-2025',
                'available_tickets' => true,
                'description' => 'Uno degli artisti di fama internazionale più ascoltati al mondo si presenterà a San Siro con un grande ritorno in Italia',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/The_Weeknd_Portrait_by_Brian_Ziff.jpg/1200px-The_Weeknd_Portrait_by_Brian_Ziff.jpg',
                'tag_id' => 2

            ],
        ];
        foreach ($events as $event) {

            $new_event = new Event();
            $new_event->name = $event['name'];
            $new_event->date = $event['date'];
            $new_event->available_tickets =  $event['available_tickets'];
            $new_event->description =  $event['description'];
            $new_event->image =  $event['image'];
            $new_event->tag_id =  $event['tag_id'];

            $new_event->save();
        }
    }
}
