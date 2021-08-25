<?php

use Illuminate\Database\Seeder;

class AssignRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::where('id',1)->get();
        $role=Role::where('id',1)->get();
        $user->assignRole([$role->id]);
    }
}
