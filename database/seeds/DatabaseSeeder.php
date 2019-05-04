<?php

use Illuminate\Database\Seeder;
use AgendaWeb\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedUsuarios();
    
        $this->command->info('Tabla usuarios inicializada con datos!');
       
    }
    private function seedUsuarios()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->name = 'Flor';
        $user->email = 'flor@example.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
