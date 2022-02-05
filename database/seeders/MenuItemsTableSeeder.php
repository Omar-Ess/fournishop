<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Tableau de bord',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2021-12-15 21:28:32',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Médias',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2022-02-05 16:23:19',
                'route' => 'voyager.media.index',
                'parameters' => 'null',
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Utilisateurs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#000000',
                'parent_id' => 17,
                'order' => 2,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2021-12-15 21:28:49',
                'route' => 'voyager.users.index',
                'parameters' => 'null',
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Rôles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => '#000000',
                'parent_id' => 17,
                'order' => 1,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2021-12-15 21:24:33',
                'route' => 'voyager.roles.index',
                'parameters' => 'null',
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Outils Développeur',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2022-02-05 16:23:19',
                'route' => NULL,
                'parameters' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Générateur de menus',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => '#000000',
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2021-12-15 21:27:40',
                'route' => 'voyager.menus.index',
                'parameters' => 'null',
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Base de données',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => '#000000',
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2021-12-15 21:27:57',
                'route' => 'voyager.database.index',
                'parameters' => 'null',
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2021-12-15 21:08:24',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2021-12-15 21:08:24',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Réglages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2021-12-15 20:47:30',
                'updated_at' => '2022-02-05 16:23:19',
                'route' => 'voyager.settings.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Catégories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 2,
                'created_at' => '2021-12-15 20:49:47',
                'updated_at' => '2021-12-15 21:23:40',
                'route' => 'voyager.categories.index',
                'parameters' => 'null',
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Groupes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 1,
                'created_at' => '2021-12-15 20:51:02',
                'updated_at' => '2021-12-15 21:30:32',
                'route' => 'voyager.category-groups.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Produits',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 3,
                'created_at' => '2021-12-15 20:57:26',
                'updated_at' => '2022-01-08 15:20:24',
                'route' => 'voyager.products.index',
                'parameters' => 'null',
            ),
            13 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Attributs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-params',
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 1,
                'created_at' => '2021-12-15 21:02:09',
                'updated_at' => '2022-01-08 15:20:20',
                'route' => 'voyager.attributes.index',
                'parameters' => 'null',
            ),
            14 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Gestion catégories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2021-12-15 21:11:35',
                'updated_at' => '2021-12-21 21:28:07',
                'route' => NULL,
                'parameters' => '',
            ),
            15 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Gestion utilisateurs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2021-12-15 21:12:36',
                'updated_at' => '2021-12-15 21:22:43',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Gestion produits',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2021-12-15 21:13:59',
                'updated_at' => '2021-12-21 21:28:07',
                'route' => NULL,
                'parameters' => '',
            ),
            17 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Coupons',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-pie-graph',
                'color' => '#000000',
                'parent_id' => 20,
                'order' => 1,
                'created_at' => '2021-12-21 21:26:23',
                'updated_at' => '2022-01-14 17:16:09',
                'route' => 'voyager.coupons.index',
                'parameters' => 'null',
            ),
            18 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Gestion commandes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bag',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2021-12-21 21:29:10',
                'updated_at' => '2021-12-21 21:29:29',
                'route' => NULL,
                'parameters' => '',
            ),
            19 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Avis',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-star-two',
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 2,
                'created_at' => '2022-01-08 15:19:27',
                'updated_at' => '2022-01-08 15:21:39',
                'route' => 'voyager.reviews.index',
                'parameters' => 'null',
            ),
            20 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Commandes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bag',
                'color' => '#000000',
                'parent_id' => 20,
                'order' => 2,
                'created_at' => '2022-01-14 14:32:37',
                'updated_at' => '2022-01-14 14:35:12',
                'route' => 'voyager.orders.index',
                'parameters' => 'null',
            ),
            21 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Articles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 24,
                'order' => 1,
                'created_at' => '2022-02-05 16:21:22',
                'updated_at' => '2022-02-05 16:23:19',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'menu_id' => 1,
                'title' => 'Gestion blog',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2022-02-05 16:23:04',
                'updated_at' => '2022-02-05 16:23:29',
                'route' => NULL,
                'parameters' => '',
            ),
        ));
        
        
    }
}