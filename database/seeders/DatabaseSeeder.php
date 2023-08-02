<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dian Rahmawati',
            'username' => 'diianrhma',
            'email' => 'diianrhma@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(3)->create();
        Post::factory(20)->create();

        Category::create([
            'name'=> 'Programming',
            'slug'=> 'programming'    
        ]);

        Category::create([
            'name'=> 'Web Design',
            'slug'=> 'web-design'    
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'    
        ]);
    }
}


// User::create([
        //     'name' => 'Dian Rahmawati',
        //     'email' => 'diianrhma06@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil iste sunt aperiam accusamus, labore eveniet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, earum impedit optio temporibus veniam atque quos iure iste sint iusto sunt, excepturi voluptate aliquam ut quaerat et doloremque quam nisi neque dolores quidem consequuntur. Quis praesentium magni dolorem recusandae molestias reprehenderit, odit mollitia architecto necessitatibus eos nam asperiores iste doloremque nihil ipsam exercitationem assumenda! Nam est rerum consequuntur earum officiis, perspiciatis ipsa molestias vero magnam, quidem remVoluptas>Atque corrupti consequuntur repellat vitae illo, expedita rerum laudantium officiis architecto, est consectetur tempora error quam nisi quidem ex earum alias ullam aliquid esse? Mollitia eius voluptates dolor voluptatibus aliquam eum, pariatur iure quasi alias quaerat aut. Excepturi dolore nam expedita cupiditate, laboriosam sit numquam magni nesciunt non dolor odio quasi distinctio eaque recusandae, perspiciatis, ipsam hic corrupti provident tempora nulla amet culpa! Voluptas excepturi a similique aperiam neque cupiditate consequuntur cumque officiis, non sit ullam sunt quas unde cum reprehenderit eveniet impedit, eligendi libero incidunt voluptates nisi. Aspernatur quod molestiae, culpa possimus alias repellendus? Ipsum explicabo quasi similique!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil iste sunt aperiam accusamus, labore eveniet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, earum impedit optio temporibus veniam atque quos iure iste sint iusto sunt, excepturi voluptate aliquam ut quaerat et doloremque quam nisi neque dolores quidem consequuntur. Quis praesentium magni dolorem recusandae molestias reprehenderit, odit mollitia architecto necessitatibus eos nam asperiores iste doloremque nihil ipsam exercitationem assumenda! Nam est rerum consequuntur earum officiis, perspiciatis ipsa molestias vero magnam, quidem rem.Atque corrupti consequuntur repellat vitae illo, expedita rerum laudantium officiis architecto, est consectetur tempora error quam nisi quidem ex earum alias ullam aliquid esse? Mollitia eius voluptates dolor voluptatibus aliquam eum, pariatur iure quasi alias quaerat aut. Excepturi dolore nam expedita cupiditate, laboriosam sit numquam magni nesciunt non dolor odio quasi distinctio eaque recusandae, perspiciatis, ipsam hic corrupti provident tempora nulla amet culpa! Voluptas excepturi a similique aperiam neque cupiditate consequuntur cumque officiis, non sit ullam sunt quas unde cum reprehenderit eveniet impedit, eligendi libero incidunt voluptates nisi. Aspernatur quod molestiae, culpa possimus alias repellendus? Ipsum explicabo quasi similique!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 3,
        //     'slug' => 'judul-ke-Tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil iste sunt aperiam accusamus, labore eveniet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, earum impedit optio temporibus veniam atque quos iure iste sint iusto sunt, excepturi voluptate aliquam ut quaerat et doloremque quam nisi neque dolores quidem consequuntur. Quis praesentium magni dolorem recusandae molestias reprehenderit, odit mollitia architecto necessitatibus eos nam asperiores iste doloremque nihil ipsam exercitationem assumenda! Nam est rerum consequuntur earum officiis, perspiciatis ipsa molestias vero magnam, quidem rem.Atque corrupti consequuntur repellat vitae illo, expedita rerum laudantium officiis architecto, est consectetur tempora error quam nisi quidem ex earum alias ullam aliquid esse? Mollitia eius voluptates dolor voluptatibus aliquam eum, pariatur iure quasi alias quaerat aut. Excepturi dolore nam expedita cupiditate, laboriosam sit numquam magni nesciunt non dolor odio quasi distinctio eaque recusandae, perspiciatis, ipsam hic corrupti provident tempora nulla amet culpa! Voluptas excepturi a similique aperiam neque cupiditate consequuntur cumque officiis, non sit ullam sunt quas unde cum reprehenderit eveniet impedit, eligendi libero incidunt voluptates nisi. Aspernatur quod molestiae, culpa possimus alias repellendus? Ipsum explicabo quasi similique!',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
