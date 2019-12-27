<?php

use Illuminate\Database\Seeder;
use App\Sede;

class CreateSedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sedes')->delete();

        $sedes = [
            [ 'id' => 1, 'countries_id' => 1, 'name' => 'Ciudad de México', 'calendar'=>'https://calendar.google.com/calendar/embed?src=q2560ba8ta9n9rg65bf1vfim18%40group.calendar.google.com&amp;ctz=America%2FMexico_City', 'code' => 'CDMX' , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 2, 'countries_id' => 2, 'name' => 'Los Angeles',      'calendar'=>'https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=4mc4rrngbnk8jb29ss5bp3e1qk%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=America%2FLos_Angeles', 'code' => 'LA' , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 3, 'countries_id' => 2, 'name' => 'Phoenix',          'calendar'=>'https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=piedra.laura14%40gmail.com&amp;color=%2342104A&amp;ctz=America%2FDawson_Creek', 'code' => 'PHX' , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 4, 'countries_id' => 2, 'name' => 'San Diego',        'calendar'=>'https://calendar.google.com/calendar/embed?src=9i3dgpobb3s68fc85fib031hes%40group.calendar.google.com&amp;ctz=America%2FMexico_City', 'code' => 'SAN' , 'created_at' => date('Y-m-d H:i:s'),],
        ];

        Sede::insert($sedes);
    }
}

