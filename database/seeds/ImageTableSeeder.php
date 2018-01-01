<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/kittens.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/shark.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/dog.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),],
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/apple.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/orange.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/peach.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/mango.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/cognac.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/chain.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        DB::table('images')->insert($images);
    }
}
