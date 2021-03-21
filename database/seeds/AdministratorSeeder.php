<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "rgrahardi";
        $administrator->name = "Site rgrahardi";
        $administrator->email = "rgrahardi@larashop.test";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("123123123");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Kampar, Riau";
        $administrator->phone = "081234567890";

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");

    }
}
