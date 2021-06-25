<?php
use Illuminate\Database\Seeder;
use Hall\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission
    ;
class CreateAdminUserSeeder extends Seeder{
    /*** Run the database seeds.** @return void*/
    public function run(){
        $user = User::create([
            'name' => 'Rahul Shukla',
            'nom' => 'Rahul Shukla',
            'prenom' => 'Rahul Shukla',
            'salarie' => 1,
            'salaire' => 0,
            'poste' => 'PCA',
            'cni' => '2466555656',
            'date_embauche' => '2021-04-05 00:00:00',
            'duree_contrat' => 365000,
            'date_naissance' => '2021-04-05 00:00:00',
            'telephone' => '698666057',
            'email' => 'admin@rscoder.com',
            'api_token' => '12345admin@rscoder.com',
            'password' => bcrypt('123456')]);
        $role = Role::create([
            'name' => 'Admin'
        ]);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
