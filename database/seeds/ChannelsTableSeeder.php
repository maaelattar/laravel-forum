<?php

use App\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Laravel 5.8',
            'slug' => Str::slug('Laravel 5.8'),
        ]);
        Channel::create([
            'name' => 'Vue JS 3',
            'slug' => Str::slug('Vue JS 3'),
        ]);
        Channel::create([
            'name' => 'Angular 7',
            'slug' => Str::slug('Angular 7'),
        ]);
        Channel::create([
            'name' => 'Node JS',
            'slug' => Str::slug('Node JS'),
        ]);
    }
}
