<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

         
        $nwk=User::factory()->create(['name'=>'naingwinko','username'=>'naingwinko']);
        $wmz=User::factory()->create(['name'=>'wyinemayzin','username'=>'wyinemayzin']);
        
        
    $c1=  Category::factory()->create(['name'=>'2023model','slug'=>'2023model']);
    $c2=  Category::factory()->create(['name'=>'2024model','slug'=>'2024model']);
      
    Blog::factory(2)->create(['category_id'=>$c1->id,'user_id'=>$nwk->id]);
    Blog::factory(2)->create(['category_id'=>$c2->id,'user_id'=>$wmz->id]);
       
    }
}
