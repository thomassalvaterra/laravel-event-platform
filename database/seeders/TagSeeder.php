<?php

namespace Database\Seeders;

use App\Models\tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'type' => 'Soccer Match'

            ],
            [
                'type' => 'Concert'
            ],
        ];

        foreach ($tags as $tag) {

            $new_tag = new Tag();
            $new_tag->type = $tag['type'];

            $new_tag->save();
        }
    }
}
