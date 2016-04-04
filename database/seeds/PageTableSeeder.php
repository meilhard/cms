<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Page::class, 20)->create()->each(function ($u) {
            $u->content()->saveMany(factory(App\Content::class, 10)->make());
            $u->children()->saveMany(factory(App\Page::class, 5)->create()->each(function ($i) {
                $i->content()->saveMany(factory(App\Content::class, 10)->make());
                $i->children()->saveMany(factory(App\Page::class, 5)->create()->each(function ($x) {
                    $x->content()->saveMany(factory(App\Content::class, 10)->create());
                    $x->children()->saveMany(factory(App\Page::class, 2)->create()->each(function ($z) {
                        $z->content()->saveMany(factory(App\Content::class, 5)->create());
                    }));
                }));
            }));
        });
    }
}
