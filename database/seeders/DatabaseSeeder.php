<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Services;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        $this->call([
//            UserSeeder::class
//        ]);
//        User::factory(3)->create();

        $this->call([
            CitiesSeeder::class
        ]);



        //*******************************   category     *************************************************

        Category::truncate();
        $wedding=Category::create([
            'name'=>'زفاف',
        ]);
        $graduate=Category::create([
            'name'=>'تخرج',
        ]);
        $meeting=Category::create([
            'name'=>'مؤتمرات',
        ]);

        //*******************************   sub category     *************************************************


        SubCategory::truncate();
        $camera=SubCategory::create([
            'category_id' =>$wedding->id,
            'name'=>'كاميرا',
        ]);
        SubCategory::create([
            'category_id' =>$wedding->id,
            'name'=>'فيديو',
        ]);
        SubCategory::create([
            'category_id' =>$wedding->id,
            'name'=>'اعمالنا فى الزفاف ',
        ]);

        //*******************************   services     *************************************************
         Services::create([
            'subcategory_id' =>$camera->id,
            'name'=>'اسم الخدمه  ',
            'description'=>' وصف الخدمه ',
            'price'=>400,

        ]);
        Services::create([
            'subcategory_id' =>$camera->id,
            'name'=>'اسم الخدمه  ',
            'description'=>' وصف الخدمه ',
            'price'=>1000,

        ]);    Services::create([
        'subcategory_id' =>$camera->id,
        'name'=>'اسم الخدمه  ',
        'description'=>' وصف الخدمه ',
        'price'=>400,
    ]);

    }
}
