<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Văn Học';
        $category->save();
        $category = new Category();
        $category->name = 'Kỹ Năng Sống';
        $category->save();
        $category = new Category();
        $category->name = 'Kinh Tế';
        $category->save();
        $category = new Category();
        $category->name = 'Lịch Sử';
        $category->save();
    }
}
