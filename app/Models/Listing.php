<?php
namespace App\Models;

class Listing {
    public static function all() {
        return[
            ['id' => 1, 'title' => 'Job 1', 'description' => 'This is the first job'],
            ['id' => 2, 'title' => 'Job 2', 'description' => 'This is the second job'],
            ['id' => 3, 'title' => 'Job 3', 'description' => 'This is the third job'],
            ['id' => 4, 'title' => 'Job 4', 'description' => 'This is the fourth job'],
            ['id' => 5, 'title' => 'Job 5', 'description' => 'This is the fifth job'],
        ];
    }

    public static function find($id) {
        $listings = self::all();
        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}