<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

//		 $this->call('RoleTableSeeder');

        if(App::environment() === 'production') {
            exit('Operation Aborted. Environment in Production Mode');
        }

        DB::table('users')->truncate();
        DB::table('role')->truncate();

        User::create([
            'id'            => 1,
            'name'          => 'root',
            'email'         => 'root@gmail.com',
            'password'      => Hash::make('password'),
            'role_id'       => 1,
        ]);

        User::create([
            'id'            => 2,
            'name'          => 'Suhairi Abdul Hamid',
            'email'         => 'suhairi81@gmail.com',
            'password'      => Hash::make('suhairi'),
            'role_id'       => 2,
        ]);

        User::create([
            'id'            => 3,
            'name'          => 'Manager',
            'email'         => 'manager@gmail.com',
            'password'      => Hash::make('password'),
            'role_id'       => 3,
        ]);

        User::create([
            'id'            => 4,
            'name'          => 'Comapany Manager',
            'email'         => 'cmanager@gmail.com',
            'password'      => Hash::make('password'),
            'role_id'       => 4,
        ]);

        User::create([
            'id'            => 5,
            'name'          => 'User',
            'email'         => 'user@gmail.com',
            'password'      => Hash::make('password'),
            'role_id'       => 5,
        ]);

        Role::create([
            'id'            => 1,
            'name'          => 'Root',
            'description'   => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.'
        ]);

        Role::create([
            'id'            => 2,
            'name'          => 'Administrator',
            'description'   => 'Full access to create, edit, and update companies, and orders.'
        ]);

        Role::create([
            'id'            => 3,
            'name'          => 'Manager',
            'description'   => 'Ability to create new companies and orders, or edit and update any existing ones.'
        ]);

        Role::create([
            'id'            => 4,
            'name'          => 'Company Manager',
            'description'   => 'Able to manage the company that the user belongs to, including adding sites, creating new users and assigning licences.'
        ]);

        Role::create([
            'id'            => 5,
            'name'          => 'User',
            'description'   => 'A standard user that can have a licence assigned to them. No administrative features.'
        ]);
	}



}
