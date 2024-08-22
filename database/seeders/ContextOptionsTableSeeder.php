<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContextOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('context_options')->insert([
            ['id' => 1, 'contexttype' => 4, 'name' => 'Word', 'icon' => null, 'image' => 'docx', 'function' => 'docx', 'shortcut' => null, 'sort_order' => 1, 'status' => 1],
            ['id' => 2, 'contexttype' => 4, 'name' => 'Excel', 'icon' => null, 'image' => 'xlsx', 'function' => 'xlsx', 'shortcut' => null, 'sort_order' => 2, 'status' => 1],
            ['id' => 3, 'contexttype' => 4, 'name' => 'Powerpoint', 'icon' => null, 'image' => 'pptx', 'function' => 'pptx', 'shortcut' => null, 'sort_order' => 3, 'status' => 1],
            ['id' => 4, 'contexttype' => 4, 'name' => 'Text', 'icon' => null, 'image' => null, 'function' => 'txt', 'shortcut' => null, 'sort_order' => 4, 'status' => 1],
            ['id' => 5, 'contexttype' => 5, 'name' => 'Tiny Icon', 'icon' => '', 'image' => null, 'function' => 'tiny', 'shortcut' => null, 'sort_order' => 1, 'status' => 1],
            ['id' => 6, 'contexttype' => 5, 'name' => 'Small Icon', 'icon' => null, 'image' => null, 'function' => 'small', 'shortcut' => null, 'sort_order' => 2, 'status' => 1],
            ['id' => 7, 'contexttype' => 5, 'name' => 'Medium Icon', 'icon' => null, 'image' => null, 'function' => 'medium', 'shortcut' => null, 'sort_order' => 3, 'status' => 1],
            ['id' => 8, 'contexttype' => 5, 'name' => 'Big Icon', 'icon' => null, 'image' => null, 'function' => 'big', 'shortcut' => null, 'sort_order' => 4, 'status' => 1],
            ['id' => 9, 'contexttype' => 5, 'name' => 'Oversize Icon', 'icon' => null, 'image' => null, 'function' => 'oversize', 'shortcut' => null, 'sort_order' => 5, 'status' => 1],
            ['id' => 10, 'contexttype' => 12, 'name' => 'Name', 'icon' => null, 'image' => null, 'function' => 'name-asc', 'shortcut' => null, 'sort_order' => 2, 'status' => 1],
            ['id' => 11, 'contexttype' => 12, 'name' => 'Type', 'icon' => null, 'image' => null, 'function' => 'extension-asc', 'shortcut' => null, 'sort_order' => 3, 'status' => 1],
            ['id' => 12, 'contexttype' => 12, 'name' => 'Creation', 'icon' => null, 'image' => null, 'function' => 'created_at-asc', 'shortcut' => null, 'sort_order' => 4, 'status' => 1],
            ['id' => 13, 'contexttype' => 12, 'name' => 'Modification', 'icon' => null, 'image' => null, 'function' => 'updated_at-asc', 'shortcut' => null, 'sort_order' => 5, 'status' => 1],
        ]);
    }
}
