<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();
    User::create([
      'name' => 'admin',
      'email' => 'admin@email.com',
      'password' => Hash::make('secret')
    ]);
    Link::create([
      'target' => 'https://www.google.com/',
      'namespace' => 'google',
      'hash' => 'google'
    ]);
  }
}
