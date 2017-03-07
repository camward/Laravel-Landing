<?php

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(
            [
                [
                    'id'=>1,
                    'name'=>'home',
                    'alias'=>'home',
                    'text'=>'<h2>We create <strong>awesome</strong> web templates</h2>\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text  printer took a galley of type and scrambled it to make a type specimen.</p>\r\n',
                    'images'=>'main_device_image.png',
                    'created_at'=>'2016-01-05 17:59:57',
                    'updated_at'=>'2016-01-05 17:59:57',
                ],
                [
                    'id'=>2,
                    'name'=>'about us',
                    'alias'=>'aboutUs',
                    'text'=>'<h3>Lorem Ipsum has been the industry\'\'s standard dummy text ever..</h3>\r\n<br>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p>\r\n<br>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>',
                    'images'=>'about-img.jpg',
                    'created_at'=>'2016-01-05 18:01:40',
                    'updated_at'=>'2016-01-05 18:01:40',
                ]
            ]
        );

        DB::table('peoples')->insert(
            [
                [
                    'id'=>1,
                    'name'=>'Tom Rensed',
                    'position'=>'Chief Executive Officer',
                    'images'=>'team_pic1.jpg',
                    'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
                    'created_at'=>'2016-01-05 19:51:09',
                    'updated_at'=>'2016-01-05 19:51:09',
                ],
                [
                    'id'=>2,
                    'name'=>'Kathren Mory',
                    'position'=>'Vice President',
                    'images'=>'team_pic2.jpg',
                    'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
                    'created_at'=>'2016-01-05 19:51:09',
                    'updated_at'=>'2016-01-05 19:51:09',
                ],
                [
                    'id'=>3,
                    'name'=>'Lancer Jack',
                    'position'=>'Senior Manager',
                    'images'=>'team_pic3.jpg',
                    'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
                    'created_at'=>'2016-01-05 19:51:09',
                    'updated_at'=>'2016-01-05 19:51:09',
                ]
            ]
        );

        DB::table('portfolios')->insert(
            [
                [
                    'id'=>1,
                    'name'=>'SMS Mobile App',
                    'images'=>'portfolio_pic1.jpg',
                    'filter'=>'appleIOS',
                    'created_at'=>'2016-01-05 19:07:36',
                    'updated_at'=>'2016-01-05 19:07:36',
                ],
                [
                    'id'=>2,
                    'name'=>'Finance App',
                    'images'=>'portfolio_pic2.jpg',
                    'filter'=>'design',
                    'created_at'=>'2016-01-05 19:07:36',
                    'updated_at'=>'2016-01-05 19:07:36',
                ],
                [
                    'id'=>3,
                    'name'=>'GPS Concept',
                    'images'=>'portfolio_pic3.jpg',
                    'filter'=>'design',
                    'created_at'=>'2016-01-05 19:07:36',
                    'updated_at'=>'2016-01-05 19:07:36',
                ],
                [
                    'id'=>4,
                    'name'=>'Managment',
                    'images'=>'portfolio_pic5.jpg',
                    'filter'=>'design',
                    'created_at'=>'2016-01-05 19:07:36',
                    'updated_at'=>'2016-01-05 19:07:36',
                ],
                [
                    'id'=>5,
                    'name'=>'Shopping',
                    'images'=>'portfolio_pic4.jpg',
                    'filter'=>'android',
                    'created_at'=>'2016-01-05 19:07:36',
                    'updated_at'=>'2016-01-05 19:07:36',
                ],
                [
                    'id'=>6,
                    'name'=>'Nexus Phone',
                    'images'=>'portfolio_pic7.jpg',
                    'filter'=>'web',
                    'created_at'=>'2016-01-05 19:07:36',
                    'updated_at'=>'2016-01-05 19:07:36',
                ],
                [
                    'id'=>7,
                    'name'=>'iPhone',
                    'images'=>'portfolio_pic6.jpg',
                    'filter'=>'web',
                    'created_at'=>'2016-01-05 19:07:36',
                    'updated_at'=>'2016-01-05 19:07:36',
                ],
                [
                    'id'=>8,
                    'name'=>'Android',
                    'images'=>'portfolio_pic8.jpg',
                    'filter'=>'android',
                    'created_at'=>'2016-01-05 19:07:36',
                    'updated_at'=>'2016-01-05 19:07:36',
                ]

            ]
        );

        DB::table('services')->insert(
            [
                [
                    'id'=>1,
                    'name'=>'Android',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.',
                    'icon'=>'fa-apple',
                    'created_at'=>'2016-01-05 18:18:22',
                    'updated_at'=>'2016-01-05 18:18:22'
                ],
                [
                    'id'=>2,
                    'name'=>'Apple IOS',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.',
                    'icon'=>'fa-android',
                    'created_at'=>'2016-01-05 18:18:22',
                    'updated_at'=>'2016-01-05 18:18:22'
                ],
                [
                    'id'=>3,
                    'name'=>'Design',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.',
                    'icon'=>'fa-dropbox',
                    'created_at'=>'2016-01-05 18:18:22',
                    'updated_at'=>'2016-01-05 18:18:22'
                ],
                [
                    'id'=>4,
                    'name'=>'Concept',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.',
                    'icon'=>'fa-html5',
                    'created_at'=>'2016-01-05 18:18:22',
                    'updated_at'=>'2016-01-05 18:18:22'
                ],
                [
                    'id'=>5,
                    'name'=>'User Research',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.',
                    'icon'=>'fa-slack',
                    'created_at'=>'2016-01-05 18:18:22',
                    'updated_at'=>'2016-01-05 18:18:22'
                ],
                [
                    'id'=>6,
                    'name'=>'User Experience',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.',
                    'icon'=>'fa-users',
                    'created_at'=>'2016-01-05 18:18:22',
                    'updated_at'=>'2016-01-05 18:18:22'
                ]
            ]
        );
    }
}

