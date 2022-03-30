<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job = new Job();
        $job->name = 'Raambelettering';
        $job->save();

        $job = new Job();
        $job->name = 'Autobelettering';
        $job->save();

        $job = new Job();
        $job->name = 'Spandoek';
        $job->save();

        $job = new Job();
        $job->name = 'Kledingbedrukking / Caps';
        $job->save();

        $job = new Job();
        $job->name = 'Interieurwrap';
        $job->save();

        $job = new Job();
        $job->name = 'Vloerstickers';
        $job->save();

        $job = new Job();
        $job->name = 'Stickers';
        $job->save();

        $job = new Job();
        $job->name = 'Lichtbak';
        $job->save();

        $job = new Job();
        $job->name = 'Graveren op Hout / Acrylaat / Glazen';
        $job->save();
    }
}
