<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;
use App\Models\Record;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'anh nq',
                'email' => 'nqa@yahoo.com',
                'type' => 'prof',
                'password' => Hash::make('nqa'),
            ]
        );
        User::create(
            [
                'name' => 'conan',
                'email' => 'conan@yahoo.com',
                'type' => 'std',
                'password' => Hash::make('nqa'),
            ]
        );
        User::create(
            [
                'name' => 'haibara',
                'email' => 'haibara@yahoo.com',
                'type' => 'std',
                'password' => Hash::make('nqa'),
            ]
        );
        User::create(
            [
                'name' => 'agasa',
                'email' => 'agasa@yahoo.com',
                'type' => 'std',
                'password' => Hash::make('nqa'),
            ]
        );
        User::create(
            [
                'name' => 'akai shuichi',
                'email' => 'akai@yahoo.com',
                'type' => 'std',
                'password' => Hash::make('nqa'),
            ]
        );


        Course::create(
            [
                'name' => 'advanced web dev',
                'intro' => 'basic technique of php laravel'
            ]
        );
        Course::create(
            [
                'name' => 'data structure and algorithm',
                'intro' => 'big O, sorting algo, binary tree, heap, and further more...'
            ]
        );
        Course::create(
            [
                'name' => 'discrete mathematic',
                'intro' => 'counting, proability, graph, automata, etc.'
            ]
        );
        Course::create(
            [
                'name' => 'abstract algebra',
                'intro' => 'modular arithmetic, group, ring, field, etc.'
            ]
        );



        Record::create([
            'user_id' => 4,
            'course_id' => 1,
        ]);
        Record::create([
            'user_id' => 4,
            'course_id' => 2,
        ]);
        Record::create([
            'user_id' => 4,
            'course_id' => 3,
        ]);
        Record::create([
            'user_id' => 2,
            'course_id' => 1,
        ]);
        Record::create([
            'user_id' => 2,
            'course_id' => 2,
        ]);
        Record::create([
            'user_id' => 2,
            'course_id' => 3,
        ]);
    }
}
