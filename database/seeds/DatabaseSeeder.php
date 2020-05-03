<?php

use App\User;
use App\Penerbit;
use App\KategoriBuku;
use App\Buku;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('PenerbitSeeder');
        $this->call('KategoriBukuSeeder');
        $this->call('BukuSeeder');
    }
}
