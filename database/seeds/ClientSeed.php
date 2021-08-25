<?php

use Illuminate\Database\Seeder;

class ClientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = \Hall\Client::create([
            'nom' => 'Rahul Shukla',
            'prenom' => 'Rahul Shukla',
            'cni' => '2466555656',
            'telephone' => '698666057',
            'adresse' => 'admin@rscoder2.com',
            'profession' => 'client']);

    }
}
