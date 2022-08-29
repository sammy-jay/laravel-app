<?php 

namespace App\Models;

class Listing {
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, magnam sapiente neque, adipisci cumque velit quam, voluptatibus odio nisi beatae est nemo culpa quas architecto saepe perferendis quaerat ullam iste.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, magnam sapiente neque, adipisci cumque velit quam, voluptatibus odio nisi beatae est nemo culpa quas architecto saepe perferendis quaerat ullam iste.'
            ],
        ];        
    }

    public static function find($id){
            $listings = self::all();

            foreach ($listings as $listing){
                if ($listing['id'] == (int)$id){
                    return $listing;
                }
            }
        }
}