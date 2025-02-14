<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Malware',
        //     'email' => 'malware@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Spyware',
        //     'email' => 'spyware@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::create([
            'name' => 'dhyka',
            'username' => 'dhyka007',
            'email' => 'dhyka@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

         Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
         ]);

         Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iure, nobis ad debitis nesciunt eos explicabo molestias adipisci expedita magnam,',
        //     'body' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iure, nobis ad debitis nesciunt eos explicabo molestias adipisci expedita magnam, delectus pariatur nulla iste veritatis natus temporibus culpa, voluptate dignissimos asperiores eum. Ex in, nemo impedit, quas facere quia, porro iusto voluptas incidunt commodi possimus sunt omnis at. Commodi facilis eveniet itaque. Accusamus, numquam consectetur odio odit nulla corporis iusto labore impedit at, aut error maiores molestiae deserunt, laudantium ea dicta? Quaerat rerum sunt fugit officia asperiores! Praesentium quibusdam, corrupti quae dignissimos labore doloribus nisi atque rem, voluptates commodi possimus accusamus nemo. Dicta perspiciatis laboriosam nam ullam odio dolor ducimus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iure, nobis ad debitis nesciunt eos explicabo molestias adipisci expedita magnam,',
        //     'body' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iure, nobis ad debitis nesciunt eos explicabo molestias adipisci expedita magnam, delectus pariatur nulla iste veritatis natus temporibus culpa, voluptate dignissimos asperiores eum. Ex in, nemo impedit, quas facere quia, porro iusto voluptas incidunt commodi possimus sunt omnis at. Commodi facilis eveniet itaque. Accusamus, numquam consectetur odio odit nulla corporis iusto labore impedit at, aut error maiores molestiae deserunt, laudantium ea dicta? Quaerat rerum sunt fugit officia asperiores! Praesentium quibusdam, corrupti quae dignissimos labore doloribus nisi atque rem, voluptates commodi possimus accusamus nemo. Dicta perspiciatis laboriosam nam ullam odio dolor ducimus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iure, nobis ad debitis nesciunt eos explicabo molestias adipisci expedita magnam,',
        //     'body' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iure, nobis ad debitis nesciunt eos explicabo molestias adipisci expedita magnam, delectus pariatur nulla iste veritatis natus temporibus culpa, voluptate dignissimos asperiores eum. Ex in, nemo impedit, quas facere quia, porro iusto voluptas incidunt commodi possimus sunt omnis at. Commodi facilis eveniet itaque. Accusamus, numquam consectetur odio odit nulla corporis iusto labore impedit at, aut error maiores molestiae deserunt, laudantium ea dicta? Quaerat rerum sunt fugit officia asperiores! Praesentium quibusdam, corrupti quae dignissimos labore doloribus nisi atque rem, voluptates commodi possimus accusamus nemo. Dicta perspiciatis laboriosam nam ullam odio dolor ducimus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iure, nobis ad debitis nesciunt eos explicabo molestias adipisci expedita magnam,',
        //     'body' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iure, nobis ad debitis nesciunt eos explicabo molestias adipisci expedita magnam, delectus pariatur nulla iste veritatis natus temporibus culpa, voluptate dignissimos asperiores eum. Ex in, nemo impedit, quas facere quia, porro iusto voluptas incidunt commodi possimus sunt omnis at. Commodi facilis eveniet itaque. Accusamus, numquam consectetur odio odit nulla corporis iusto labore impedit at, aut error maiores molestiae deserunt, laudantium ea dicta? Quaerat rerum sunt fugit officia asperiores! Praesentium quibusdam, corrupti quae dignissimos labore doloribus nisi atque rem, voluptates commodi possimus accusamus nemo. Dicta perspiciatis laboriosam nam ullam odio dolor ducimus!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
