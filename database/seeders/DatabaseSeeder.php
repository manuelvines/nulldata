<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        $jobs = array(
            'Frontend',
            'Backend',
            'Tester',
            'DB',
            'Tech lead'
        ); 

        $skills = array(
            'HTML',
            'CSS',
            'Flexbox',
            'CSS grid',
            'Tailwind',
            'JavaScript Vanilla',
            'React',
            'Angular',
            'Vue',
            'Livewire',
            'UML',
            'PHP',
            'Java',
            'SpringBoot',
        ); 

        foreach($jobs as $job){
            \App\Models\Job::factory()->create([
                'name' => $job
            ]);
        }

        foreach($skills as $skill){
            \App\Models\Skill::factory()->create([
                'name' => $skill
            ]);
        }


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
