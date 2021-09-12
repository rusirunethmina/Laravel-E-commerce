<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
                'name'=> 'Oppo Mobile',
                'price'=> '240',
                'description'=> 'A smartphone with 4gb Ram and mutch more featuers',
                'category'=> 'Mobile',
                'gallery'=> 'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/navigation/a-series/a92-a72/A92-A72-navigation-White-v2.png'

            ],
            [
                'name'=> 'Samsung Mobile',
                'price'=> '400',
                'description'=> 'A smartphone with 8gb Ram and mutch more featuers',
                'category'=> 'Mobile',
                'gallery'=> 'https://image.shutterstock.com/image-photo/new-york-usa-november-05-260nw-749782414.jpg'

            ],
            [
                'name'=> 'Iphone Mobile',
                'price'=> '700',
                'description'=> 'A smartphone with 128gb memroy and mutch more featuers',
                'category'=> 'Mobile',
                'gallery'=> 'https://i.gadgets360cdn.com/large/iphone_11_pro_max_afp_new_1568185633865.jpg'

            ],
            [
                'name'=> 'Huwawel Mobile',
                'price'=> '450',
                'description'=> 'A smartphone with 4gb Ram and mutch more featuers',
                'category'=> 'Mobile',
                'gallery'=> 'https://www.pricepony.com.ph/blog/wp-content/uploads/2021/05/5374-clicks_fbpage-1024x536.jpg'

            ]
        ]);
    }
}
