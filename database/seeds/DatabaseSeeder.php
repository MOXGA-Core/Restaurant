<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //$this->call(UserTableSeeder::class);
        //$this->call(ContactTableSeeder::class);
        //$this->call(CourseTableSeeder::class);
        //$this->call(MaterialTableSeeder::class);
        //$this->call(TypeTableSeeder::class);
        $this->call(ProductTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
