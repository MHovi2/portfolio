<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //Home Page DB Seeder
        DB::table('homes')->insert([
            'title' => 'HI THERE !',
            'name' => 'MEHEDI HASAN',
            'description' => 'Im a Tunisian based web designer & front‑end developer focused on crafting clean & user‑friendly experiences, I am passionate about building excellent software that improves the lives of those around me.',
            'image' => 'image',

        ]);

        //About Info Page DB Seeder
        DB::table('about_infos')->insert([
            'first_name' => 'Mehedi',
            'last_name' => 'Hasan',
            'age' => '21',
            'address' => ' Nepaltoli,Gabtoli,Bogura.',
            'phone' => '1758278604',
            'email' => 'mehedi174629@gmail.com',
            'nationality' => 'Bangladeshi',
            'skype' => 'mehedi@skype',
            'language' => 'html,css,java,laravel.',
            'freelance' => 'Availabel',
        ]);


        //Skill Page DB Seeder
        DB::table('skills')->insert([
            'html' => '96',
            'css' => '98',
            'js' => '39',
            'php' => ' 80',
            'laravel' => '75',
            'jquery1' => '36',
            'wp' => '85',
            'bstrap' => '92',
        ]);

        //Contact Details Page DB Seeder
        DB::table('contact_details')->insert([
            'title' => 'DONT BE SHY !',
            'description' => 'Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.',
            'email' => 'mehedihasan174629@gmail.com',
            'phone' => '01758278604',
        ]);

        //Social Link Page DB Seeder
        DB::table('social_links')->insert([
            'link1' => 'https://www.facebook.com/MH0vishek/',
            'link2' => 'https://twitter.com/MehediH92640417',
            'link3' => 'https://github.com/MHovi2',
            'link4' => 'https://dribbble.com/MHovi',
        ]);
    }
}
