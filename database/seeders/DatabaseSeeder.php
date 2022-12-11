<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Callus;
use App\Models\Category;
use App\Models\Cities;
use App\Models\Services;
use App\Models\SubCategory;
use App\Models\team;
use App\Models\Usage;
use App\Models\UsagePolicy;
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

//        $this->call([
//            CitiesSeeder::class
//        ]);
//        $this->call([
//            OrdersSeeder::class
//        ]);




        //*******************************   cities     *************************************************
        Cities::truncate();
        Cities::create([
            'name'=>'القاهرة ',
        ]);
        Cities::create([
            'name'=>'القليوبيه ',
        ]);
        Cities::create([
            'name'=>'الاسكندريه ',
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
        SubCategory::create([
            'category_id' =>$graduate->id,
            'name'=>'كاميرات',
        ]);
        SubCategory::create([
            'category_id' =>$graduate->id,
            'name'=>'فيديوهات',
        ]);
        SubCategory::create([
            'category_id' =>$graduate->id,
            'name'=>'اعمال فى الزفافه ',
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

   //     **************************************************   usage policy  ************************************************

        UsagePolicy::truncate();
        UsagePolicy::create([
            'text'=>'هناك حقيقه مثبته منذ زمن طويل وهى ان المحتوى المقروء لصفحه ما سيلهى القارئ عن التركيز على الشكل الخارجى للنص والخ الخ الخ',
        ]);
        Usage::truncate();
        Usage::create([
            'text'=>'هناك حقيقه مثبته منذ زمن طويل وهى ان المحتوى المقروء لصفحه ما سيلهى القارئ عن التركيز على الشكل الخارجى للنص والخ الخ الخ',
        ]);

        //     **************************************************   team  ************************************************


        team::truncate();
        team::create([
            'name'=>'ضياء',
            'job'=>'مصور',
            'rating'=>3

        ]);
        team::create([
            'name'=>'يوسف',
            'job'=>'مصور',
            'rating'=>4
        ]);

        //     **************************************************   call us  ************************************************
        Callus::truncate();
        Callus::create([
            'title'=>'مرحبا بك هذه بيانات التواصل معنا',
            'phone'=>'01224888722',
            'email'=>'egycame@gmail.com'
        ]);

    }
}
