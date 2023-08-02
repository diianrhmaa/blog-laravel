<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dian Rahmawati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quasi, similique eius tempore molestias voluptas ex earum veniam, esse distinctio adipisci vel magnam nam. Cum ullam nemo corporis dolorem culpa! Provident ullam quas reprehenderit voluptatibus accusantium consectetur sapiente libero enim doloribus autem eum facere repellat, quae magnam minus neque porro totam ab. Quam consectetur quibusdam corporis fugit, dignissimos pariatur reprehenderit neque illo non consequatur inventore nostrum quo eveniet repellendus, modi, libero distinctio reiciendis. Consequatur aspernatur perferendis facilis, provident enim harum?"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Risty Farentina",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat quos expedita nam hic voluptatibus rem rerum recusandae saepe alias. Blanditiis cupiditate odit eius omnis officia voluptate, perspiciatis earum inventore consectetur qui excepturi. Atque ea placeat magni eos, blanditiis, illum porro recusandae ipsam odio delectus necessitatibus molestiae odit natus. Modi dicta consequatur veritatis iure veniam consequuntur. Veniam totam aliquam itaque suscipit harum consequuntur, fuga, nulla asperiores at numquam assumenda natus. Quidem, nulla! Suscipit quo commodi vitae officiis dicta ratione, laboriosam ea ipsam, tenetur adipisci numquam molestias eius quas blanditiis dolores aut? Accusamus natus et eius explicabo vitae aspernatur enim, reiciendis ducimus."
        ],

    ];

    public static function all()
        {
            return collect(self::$blog_posts);
        }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
