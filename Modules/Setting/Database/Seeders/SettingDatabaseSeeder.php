<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Ruema Kasir',
            'company_email' => 'hi@ruema.xyz',
            'company_phone' => '085261846588',
            'notification_email' => 'info@ruema.xyz',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'RuemaKasir © 2023',
            // 'footer_text' => 'RuemaKasir © 2023 || Developed by <strong><a target="_blank" href="https://fahimanzam.me">Fahim Anzam</a></strong>',
            'company_address' => 'Aceh, Indonesia'
        ]);
    }
}
