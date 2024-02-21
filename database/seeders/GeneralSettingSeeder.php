<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'company_name' => 'Jinjarsoft',
            'email' => 'info@jinjarsoft.com',
            'alter_email' => 'info@jinjarsoft.com',
            'phone' => '+01793578199',
            'alter_phone' => '+01793578199',
            'address' => '193, Motijheel Dhaka, Bangladesh',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'meta_title' => 'Lorem ipsum dolor, sit amet consectetur',
            'meta_description' => 'Lorem ipsum dolor, sit amet consectetur',
            'meta_keywords' => 'Lorem ipsum dolor, sit amet consectetur',
            'copyright_text' => 'Copyright © 2023. Designed & Developed by',
            'location_image' => '<i class="pe-7s-map-marker"></i>',
            'phone_image' => '<i class="ti-mobile"></i>',
            'email_image' => '<i class="ti-email"></i>',
            'watch_image' => '<i class="ti-time"></i>',
            'open_day' => 'Mon-Fri',
            'open_day_time' => '10:00 am - 7.00 pm ',
            'close_day' => 'Saturday & Sunday',
            'about_description' => 'Jinjarsoft is an offshore website development firm. We provide Website maintenance, Android App and Website development services for Personal, Small and Medium companies in a very affordable price. Blog, CMS, Custom CMS, blog theme, CMS theme, Website content manipulation, organization, Ecommerce solution, online payment gateway integration, shopping cart, product catalog, Educational websites, Community based website, forum, chatting solution, animated websites newsletter management etc. we do them all! Our main focus is to help the small business or individual entrepreneur who wants to start online business or wants to ensure online presence. We also help you to organize your website contents, layout effectively. If you wants to start your online business, or you wants to redesign your website or you want to modify your existing website or if you want us to maintain your website… we will do it with out full pride. We promise that we wont let you down! We have qualified programmers, graphics designers to keep you in track. Just let us know your desire… your budget and your contents.. that’s all.. we will handle the rest.',
            'footer_description' => 'Jinjarsoft always treats the client`s satisfaction as its core mission and tries to repeat these satisfactory results to them each and every service.'





        ]);
    }
}
