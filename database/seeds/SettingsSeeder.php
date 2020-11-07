<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'blog_name'=>'Tourism ',
            'phone_number'=>'0963994880568',
            'blog_email'=>'bibijrf@gmail.com',
            'address'=>'SYRIA - Hama - Salamiyah'
        ]);
    }
}
