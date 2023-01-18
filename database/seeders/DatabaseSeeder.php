<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $client_data = [
            [
                'client_name' => 'NEC',
                'client_address' => 'Jakarta',
            ],
            [
                'client_name' => 'TAM',
                'client_address' => 'Jakarta',
            ],
            [
                'client_name' => 'TUA',
                'client_address' => 'Bandung',
            ],
        ];

        $project_data = [
            [
                'project_name' => 'WMS',
                'client_id' => 1,
                'project_start' => '2022-07-28',
                'project_end' => '2022-08-28',
                'project_status' => 'OPEN',
            ],
            [
                'project_name' => 'FILMS',
                'client_id' => 2,
                'project_start' => '2022-06-01',
                'project_end' => '2022-08-31',
                'project_status' => 'DOING',
            ],
            [
                'project_name' => 'DOC',
                'client_id' => 2,
                'project_start' => '2022-01-01',
                'project_end' => '2022-04-30',
                'project_status' => 'DONE',
            ],
            [
                'project_name' => 'POS',
                'client_id' => 3,
                'project_start' => '2022-05-01',
                'project_end' => '2022-08-31',
                'project_status' => 'DOING',
            ],
        ];

        Client::insert($client_data);
        Project::insert($project_data);
    }
}
