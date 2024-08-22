<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContextTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('context_types')->insert([
            ['id' => 1, 'name' => 'Refresh', 'icon' => null, 'function' => 'refreshButton', 'is_options' => 0, 'show_on' => 'rightclick', 'conditional' => null, 'shortcut' => null, 'display_header' => 0, 'sort_order' => 1, 'status' => 1],
            ['id' => 2, 'name' => 'Upload', 'icon' => null, 'function' => 'uploadFiles', 'is_options' => 0, 'show_on' => 'rightclick', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 3, 'name' => 'New Folder', 'icon' => null, 'function' => 'createFolderFunction', 'is_options' => 0, 'show_on' => 'rightclick', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 4, 'name' => 'New File', 'icon' => null, 'function' => 'createFileFunction', 'is_options' => 1, 'show_on' => 'rightclick', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 5, 'name' => 'Icon Size', 'icon' => null, 'function' => 'resizeFunction', 'is_options' => 1, 'show_on' => 'rightclick', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 6, 'name' => 'Open', 'icon' => null, 'function' => 'openFunction', 'is_options' => 0, 'show_on' => 'all', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 7, 'name' => 'Cut', 'icon' => null, 'function' => 'cutFunction', 'is_options' => 0, 'show_on' => 'file', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 8, 'name' => 'Copy', 'icon' => null, 'function' => 'copyFunction', 'is_options' => 0, 'show_on' => 'file', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 9, 'name' => 'Rename', 'icon' => null, 'function' => 'renameFunction', 'is_options' => 0, 'show_on' => 'file', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 10, 'name' => 'Share', 'icon' => null, 'function' => 'shareFunction', 'is_options' => 0, 'show_on' => 'file', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 11, 'name' => 'Delete', 'icon' => null, 'function' => 'deleteFunction', 'is_options' => 0, 'show_on' => 'file', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 12, 'name' => 'Sort Order', 'icon' => null, 'function' => 'sortFunction', 'is_options' => 1, 'show_on' => 'rightclick', 'conditional' => null, 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
            ['id' => 13, 'name' => 'Paste', 'icon' => null, 'function' => 'pasteFunction', 'is_options' => 0, 'show_on' => 'rightclick', 'conditional' => 'copyfilepath', 'shortcut' => null, 'display_header' => 1, 'sort_order' => 1, 'status' => 1],
        ]);
    }
}
