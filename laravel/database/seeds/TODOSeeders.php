<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Item;
use App\User;

class TODOSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		//User::create(['name'=>'Admin','email'=>'admin@admin.com','password'=>bcrypt('admin')]);
		//treba staviti u odvojene fajlove user i items i onda ih u DatabaseSeed pozvati
		// $this->call('UserTableSeeder');
		Item::create (['title'=>'Example2243','description'=>'Example description343','status'=>true,'user_id'=>2]);
	
	}

}
