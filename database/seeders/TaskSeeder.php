<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'name'=>'Examen medio dia'
        ]);
        Task::create([
            'name'=>'Hacer almuerzo en la tarde'
        ]);
        Task::create([
            'name'=>'Hacer mi tarea en la noche'
        ]);
    }
}
