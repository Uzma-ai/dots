<?php

namespace Database\Seeders;

use App\Models\LightApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LightAppsSeeder extends Seeder
{
    public function run(): void
    {
        Lightapp::create([
            'id' => 1,
            'group' => 1,
            'name' => 'Docx',
            'link' => 'https://essentiels.in/example/editor?mode=edit&fileName=new.docx&userid=uid-1&lang=en&directUrl=false',
            'description' => NULL,
            'icon' => 'docx.svg',
            'open_type' => 1,
            'width' => 700,
            'height' => 700,
            'sort_order' => 0,
            'status' => 1,
            'add_app' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Lightapp::create([
            'id' => 2,
            'group' => 1,
            'name' => 'PPT',
            'link' => 'https://essentiels.in/example/editor?mode=edit&fileName=new.pptx&userid=uid-1&lang=en&directUrl=false',
            'description' => NULL,
            'icon' => 'ppt.svg',
            'open_type' => 1,
            'width' => 700,
            'height' => 700,
            'sort_order' => 0,
            'status' => 1,
            'add_app' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Lightapp::create([
            'id' => 3,
            'group' => 1,
            'name' => 'EXCEL',
            'link' => 'https://essentiels.in/example/editor?mode=edit&fileName=new.xlsx&userid=uid-1&lang=en&directUrl=false',
            'description' => NULL,
            'icon' => 'excel.svg',
            'open_type' => 1,
            'width' => 700,
            'height' => 700,
            'sort_order' => 0,
            'status' => 1,
            'add_app' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Lightapp::create([
            'id' => 4,
            'group' => 1,
            'name' => 'Dots Chat',
            'link' => 'https://zulip.sizaf.com/',
            'description' => NULL,
            'icon' => 'chat.svg',
            'open_type' => 1,
            'width' => 700,
            'height' => 700,
            'sort_order' => 0,
            'status' => 1,
            'add_app' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Lightapp::create([
            'id' => 5,
            'group' => 1,
            'name' => 'Dots Erp',
            'link' => 'https://erp.sizaf.com/login#login',
            'description' => NULL,
            'icon' => 'erp.svg',
            'open_type' => 1,
            'width' => 700,
            'height' => 700,
            'sort_order' => 0,
            'status' => 1,
            'add_app' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Lightapp::create([
            'id' => 6,
            'group' => 1,
            'name' => 'Dots Mail',
            'link' => 'https://snappymail.sizaf.com/',
            'description' => NULL,
            'icon' => 'mail.svg',
            'open_type' => 1,
            'width' => 700,
            'height' => 700,
            'sort_order' => 0,
            'status' => 1,
            'add_app' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Lightapp::create([
            'id' => 7,
            'group' => 1,
            'name' => 'Dots Social',
            'link' => 'https://social.sizaf.com/html/user/login',
            'description' => NULL,
            'icon' => 'social.svg',
            'open_type' => 1,
            'width' => 700,
            'height' => 700,
            'sort_order' => 0,
            'status' => 1,
            'add_app' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
