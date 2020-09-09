# Laravel 7 :
## step 1 :
Installation and configuration : 

=> laragon + composer + nodejs + php
=> install laravel via composer 
=> require dependencies
=> explain the arborsence 

## step 2: 

Routes Vues & Layouts

## Migration

C:\laragon\www\Rest (develop) λ php artisan migrate Migration table created successfully. Migrating: 2014_10_12_000000_create_users_table Migrated:  2014_10_12_000000_create_users_table (0.05 seconds) Migrating: 2014_10_12_100000_create_password_resets_table Migrated:  2014_10_12_100000_create_password_resets_table (0.02 seconds) Migrating: 2019_08_19_000000_create_failed_jobs_table Migrated:  2019_08_19_000000_create_failed_jobs_table (0.03 seconds)  C:\laragon\www\Rest (develop) λ php artisan migrate:rollback Rolling back: 2019_08_19_000000_create_failed_jobs_table Rolled back:  2019_08_19_000000_create_failed_jobs_table (0.01 seconds) Rolling back: 2014_10_12_100000_create_password_resets_table Rolled back:  2014_10_12_100000_create_password_resets_table (0.01 seconds) Rolling back: 2014_10_12_000000_create_users_table Rolled back:  2014_10_12_000000_create_users_table (0.01 seconds)  C:\laragon\www\Rest (develop) λ php artisan migrate Migrating: 2014_10_12_000000_create_users_table Migrated:  2014_10_12_000000_create_users_table (0.03 seconds) Migrating: 2014_10_12_100000_create_password_resets_table Migrated:  2014_10_12_100000_create_password_resets_table (0.02 seconds) Migrating: 2019_08_19_000000_create_failed_jobs_table Migrated:  2019_08_19_000000_create_failed_jobs_table (0.02 seconds)  C:\laragon\www\Rest (develop) λ php artisan make:migration posts_table Created Migration: 2020_09_08_225846_posts_table  C:\laragon\www\Rest (develop) λ php artisan make:migration create_posts_table Created Migration: 2020_09_08_230136_create_posts_table


# Tinker and eloquent model 

php artisan tinker
Psy Shell v0.10.4 (PHP 7.2.19 — cli) by Justin Hileman      
>>> $post = new Post;                                       
[!] Aliasing 'Post' to 'App\Post' for this Tinker session.  
=> App\Post {#3156}                                         
>>> $post->title = "learn laravel";                         
=> "learn laravel"                                          
>>> $post->slug = "laravel learning"                        
=> "laravel learning"                                       
>>> $post->content= "the most powerfull framework"          
=> "the most powerfull framework"                           
>>> $post->active = true                                    
=> true                                                     
>>> $post->save();                                          
=> true                                                     
>>>      



>>> $post->title ="learn angular";
=> "learn angular"
>>> $post->content="angular is the most js good framework";
=> "angular is the most js good framework"
>>> $post->slug= "Angular";
=> "Angular"
>>> $post->active=false;
=> false
>>> $post->save();
=> true
>>> App\Post::all();
=> Illuminate\Database\Eloquent\Collection {#4090
     all: [
       App\Post {#4091
         id: 1,
         title: "learn laravel",
         content: "the most powerfull framework",
         created_at: "2020-09-08 23:30:56",
         updated_at: "2020-09-08 23:30:56",
         slug: "laravel learning",
         active: 1,
       },
       App\Post {#4092
         id: 2,
         title: "learn angular",
         content: "angular is the most js good framework",
         created_at: "2020-09-08 23:34:34",
         updated_at: "2020-09-08 23:34:34",
         slug: "Angular",
         active: 0,
       },
     ],
   }


   >>> App\Post::cursor();
=> Illuminate\Support\LazyCollection {#4088
     +source: Closure() {#3156 …4},
   }
>>> $pots = App\Post::all();
=> Illuminate\Database\Eloquent\Collection {#4098
     all: [
       App\Post {#4102
         id: 1,
         title: "learn laravel",
         content: "the most powerfull framework",
         created_at: "2020-09-08 23:30:56",
         updated_at: "2020-09-08 23:30:56",
         slug: "laravel learning",
         active: 1,
       },
       App\Post {#4103
         id: 2,
         title: "learn angular",
         content: "angular is the most js good framework",
         created_at: "2020-09-08 23:34:34",
         updated_at: "2020-09-08 23:34:34",
         slug: "Angular",
         active: 0,
       },
     ],
   }
>>> foreach($posts as $post){echo "{$post->title} \n"; }
PHP Notice:  Undefined variable: posts in Psy Shell code on line 1
PHP Warning:  Invalid argument supplied for foreach() in Psy Shell code on line 1
>>> foreach($pots as $post){echo "{$post->title} \n"; }
learn laravel
learn angular
>>> $pots = App\Post::cursor();
=> Illuminate\Support\LazyCollection {#4101
     +source: Closure() {#4094 …4},
   }
>>> foreach($pots as $post){echo "{$post->title} \n"; }
learn laravel
learn angular
>>> App\Post::find(1)
=> App\Post {#4105
     id: 1,
     title: "learn laravel",
     content: "the most powerfull framework",
     created_at: "2020-09-08 23:30:56",
     updated_at: "2020-09-08 23:30:56",
     slug: "laravel learning",
     active: 1,
   }
>>> 


## application : 

les applications sont en forme de module 
chaque module s'occupe d'une architecture

Modelisation du Crud and retrieve one object

chaque route sert a executer une methode dans un controller

lister les differentes routes : 
=> php artisan route:list
Generer un controlleur avec les methodes Crud + retrieve object 
=> php artisan make:controller PostController --resource