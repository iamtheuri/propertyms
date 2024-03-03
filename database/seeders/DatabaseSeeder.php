<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Apartment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Apartment::create([
            'title' => 'Hakimi Heights',
            'tags' => 'bedsitter, rental, self-contained',
            'company' => 'Peri Urban Consultants',
            'location' => 'Rongai, Kajiado',
            'email' => 'email@email.com',
            'website' => 'https://example.com/',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum iaculis nulla in semper. 
            Aliquam non porta ex. Sed blandit est tempus mauris consequat, vel pulvinar lorem aliquet. Fusce enim tortor, mollis 
            quis egestas vitae, egestas sit amet neque. Maecenas euismod euismod egestas. Pellentesque vitae justo nunc. 
            Cras ullamcorper nulla molestie, egestas risus vel, fermentum lorem. Quisque eget massa risus.'
        ]);
        Apartment::create([
            'title' => 'Kerith Springs',
            'tags' => '1 Bedroom, rental, self-contained',
            'company' => 'Kerith Consultants',
            'location' => 'Kasarani, Nairobi',
            'email' => 'email@email.com',
            'website' => 'https://example.com/',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum iaculis nulla in semper. 
            Aliquam non porta ex. Sed blandit est tempus mauris consequat, vel pulvinar lorem aliquet. Fusce enim tortor, mollis 
            quis egestas vitae, egestas sit amet neque. Maecenas euismod euismod egestas. Pellentesque vitae justo nunc. 
            Cras ullamcorper nulla molestie, egestas risus vel, fermentum lorem. Quisque eget massa risus.'
        ]);
        Apartment::create([
            'title' => 'Teekay Heights',
            'tags' => '2 Bedroom, 3 Bedroom, rental, self-contained',
            'company' => 'Teekay Tingz',
            'location' => 'Karen, Nairobi',
            'email' => 'theuridavid56@gmail.com',
            'website' => 'https://iamtheuri.vzy.io',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum iaculis nulla in semper. 
            Aliquam non porta ex. Sed blandit est tempus mauris consequat, vel pulvinar lorem aliquet. Fusce enim tortor, mollis 
            quis egestas vitae, egestas sit amet neque. Maecenas euismod euismod egestas. Pellentesque vitae justo nunc. 
            Cras ullamcorper nulla molestie, egestas risus vel, fermentum lorem. Quisque eget massa risus.'
        ]);
    }
}