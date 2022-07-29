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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Puspakirana',
            'email' => 'puspakiranastavira@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum pertama',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro nostrum minus perferendis molestias deserunt, doloribus vero voluptatum eligendi fugit quasi voluptatibus debitis iure voluptate, id dolore non earum dolorem quod enim repellat, numquam quisquam temporibus quibusdam quo. Libero mollitia dolorum ducimus porro ratione enim veniam, accusantium nesciunt tempore maiores possimus totam amet tempora nostrum. Dolore id perferendis consequuntur cupiditate nesciunt itaque facere similique suscipit libero asperiores voluptatibus, nemo dolores nisi vero eum aspernatur voluptates cum blanditiis culpa fuga illo unde quae corporis deleniti?</p><p>Eligendi dolorum corporis tempora iste nihil! Deleniti aut quisquam quis saepe dolores, itaque laborum ab vero excepturi optio necessitatibus doloremque voluptatum asperiores accusantium modi, ipsa error maxime. Dolores alias architecto provident itaque rem aut vero tempora quae perferendis molestiae perspiciatis id, natus eos fugiat aspernatur inventore vel possimus sunt at. Earum pariatur ut totam temporibus optio architecto fuga!</p><p>Provident, fuga ex? Necessitatibus, ratione ullam vitae, esse, sed id minima quia asperiores nam neque quisquam expedita. Necessitatibus est delectus repellat, dolore inventore ad doloribus, cumque expedita obcaecati sed incidunt aspernatur provident ea quia amet dolorem corrupti ipsam rem enim quas voluptate rerum consequuntur dolor. Nostrum quibusdam, voluptas praesentium doloremque similique, sint facere quae, pariatur dolorem tempora corporis tempore?</p>'
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum kedua',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro nostrum minus perferendis molestias deserunt, doloribus vero voluptatum eligendi fugit quasi voluptatibus debitis iure voluptate, id dolore non earum dolorem quod enim repellat, numquam quisquam temporibus quibusdam quo. Libero mollitia dolorum ducimus porro ratione enim veniam, accusantium nesciunt tempore maiores possimus totam amet tempora nostrum. Dolore id perferendis consequuntur cupiditate nesciunt itaque facere similique suscipit libero asperiores voluptatibus, nemo dolores nisi vero eum aspernatur voluptates cum blanditiis culpa fuga illo unde quae corporis deleniti?</p><p>Eligendi dolorum corporis tempora iste nihil! Deleniti aut quisquam quis saepe dolores, itaque laborum ab vero excepturi optio necessitatibus doloremque voluptatum asperiores accusantium modi, ipsa error maxime. Dolores alias architecto provident itaque rem aut vero tempora quae perferendis molestiae perspiciatis id, natus eos fugiat aspernatur inventore vel possimus sunt at. Earum pariatur ut totam temporibus optio architecto fuga!</p><p>Provident, fuga ex? Necessitatibus, ratione ullam vitae, esse, sed id minima quia asperiores nam neque quisquam expedita. Necessitatibus est delectus repellat, dolore inventore ad doloribus, cumque expedita obcaecati sed incidunt aspernatur provident ea quia amet dolorem corrupti ipsam rem enim quas voluptate rerum consequuntur dolor. Nostrum quibusdam, voluptas praesentium doloremque similique, sint facere quae, pariatur dolorem tempora corporis tempore?</p>'
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum ketiga',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro nostrum minus perferendis molestias deserunt, doloribus vero voluptatum eligendi fugit quasi voluptatibus debitis iure voluptate, id dolore non earum dolorem quod enim repellat, numquam quisquam temporibus quibusdam quo. Libero mollitia dolorum ducimus porro ratione enim veniam, accusantium nesciunt tempore maiores possimus totam amet tempora nostrum. Dolore id perferendis consequuntur cupiditate nesciunt itaque facere similique suscipit libero asperiores voluptatibus, nemo dolores nisi vero eum aspernatur voluptates cum blanditiis culpa fuga illo unde quae corporis deleniti?</p><p>Eligendi dolorum corporis tempora iste nihil! Deleniti aut quisquam quis saepe dolores, itaque laborum ab vero excepturi optio necessitatibus doloremque voluptatum asperiores accusantium modi, ipsa error maxime. Dolores alias architecto provident itaque rem aut vero tempora quae perferendis molestiae perspiciatis id, natus eos fugiat aspernatur inventore vel possimus sunt at. Earum pariatur ut totam temporibus optio architecto fuga!</p><p>Provident, fuga ex? Necessitatibus, ratione ullam vitae, esse, sed id minima quia asperiores nam neque quisquam expedita. Necessitatibus est delectus repellat, dolore inventore ad doloribus, cumque expedita obcaecati sed incidunt aspernatur provident ea quia amet dolorem corrupti ipsam rem enim quas voluptate rerum consequuntur dolor. Nostrum quibusdam, voluptas praesentium doloremque similique, sint facere quae, pariatur dolorem tempora corporis tempore?</p>'
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum keempat',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro nostrum minus perferendis molestias deserunt, doloribus vero voluptatum eligendi fugit quasi voluptatibus debitis iure voluptate, id dolore non earum dolorem quod enim repellat, numquam quisquam temporibus quibusdam quo. Libero mollitia dolorum ducimus porro ratione enim veniam, accusantium nesciunt tempore maiores possimus totam amet tempora nostrum. Dolore id perferendis consequuntur cupiditate nesciunt itaque facere similique suscipit libero asperiores voluptatibus, nemo dolores nisi vero eum aspernatur voluptates cum blanditiis culpa fuga illo unde quae corporis deleniti?</p><p>Eligendi dolorum corporis tempora iste nihil! Deleniti aut quisquam quis saepe dolores, itaque laborum ab vero excepturi optio necessitatibus doloremque voluptatum asperiores accusantium modi, ipsa error maxime. Dolores alias architecto provident itaque rem aut vero tempora quae perferendis molestiae perspiciatis id, natus eos fugiat aspernatur inventore vel possimus sunt at. Earum pariatur ut totam temporibus optio architecto fuga!</p><p>Provident, fuga ex? Necessitatibus, ratione ullam vitae, esse, sed id minima quia asperiores nam neque quisquam expedita. Necessitatibus est delectus repellat, dolore inventore ad doloribus, cumque expedita obcaecati sed incidunt aspernatur provident ea quia amet dolorem corrupti ipsam rem enim quas voluptate rerum consequuntur dolor. Nostrum quibusdam, voluptas praesentium doloremque similique, sint facere quae, pariatur dolorem tempora corporis tempore?</p>'
        ]);
    }
}
