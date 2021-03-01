<?php

use App\Model\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  name	
     *  email	
     *  url	
     *  description	
     *  keyword	
     *  address	
     *  google_maps	
     *  phone	
     *  phone_mobile	
     *  whatsapp	
     *  logotipo	
     *  icon	
     *  slug	
     *  created_at	
     *  updated_at 
     *
     * @return void
     */
    public function run()
    {

        Setting::create([
            'name' => 'KlsDesigner',	
            'email' => 'klsdesigner@hotmail.com',
            'url' => 'http://www.klsdesigner.com.br',	
            'description' => 'Desenvolvimento de sites e sistemas online',
            'keyword' => '',
            'address' => 'Rua X-2020',
            'google_maps' => '',
            'phone'	=> '624052-1878',
            'phone_mobile' => '62981484116',	
            'whatsapp' => 'S',
            'logotipo' => '',
            'icon' => '',
            'slug' => 'klsdesigner',
        ]);
    }
}
