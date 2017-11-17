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
        $this->call(AdminUserTableSeeder::class);
        $this->call(EcleseTableSeeder::class);
        $this->call(EntradasTableSeeder::class);
        $this->call(IgrejasTableSeeder::class);
        $this->call(MinisterialsTableSeeder::class);
        $this->call(NacionalidadesTableSeeder::class);
        $this->call(NaturalidadesTableSeeder::class);
        $this->call(ParentescosTableSeeder::class);
        $this->call(PessoasTableSeeder::class);
        $this->call(ProfissaosTableSeeder::class);
        $this->call(SaidasTableSeeder::class);
        $this->call(UfsTableSeeder::class);


/*
Running Seeders

Once you have written your seeder classes, you may use the db:seed Artisan command to seed your database. By default, the db:seed command runs the DatabaseSeeder class, which may be used to call other seed classes. However, you may use the --class option to specify a specific seeder class to run individually:

php artisan db:seed

php artisan db:seed --class=UsersTableSeeder

You may also seed your database using the migrate:refresh command, which will also rollback and re-run all of your migrations. This command is useful for completely re-building your database:

php artisan migrate:refresh --seed
*/
    }
}
