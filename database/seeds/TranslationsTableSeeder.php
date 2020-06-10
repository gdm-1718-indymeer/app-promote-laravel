<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 5,
                'id' => 1,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Post',
            ),
            1 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 6,
                'id' => 2,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Página',
            ),
            2 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 1,
                'id' => 3,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Utilizador',
            ),
            3 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 4,
                'id' => 4,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Categoria',
            ),
            4 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 2,
                'id' => 5,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Menu',
            ),
            5 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 3,
                'id' => 6,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Função',
            ),
            6 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 5,
                'id' => 7,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Posts',
            ),
            7 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 6,
                'id' => 8,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Páginas',
            ),
            8 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 1,
                'id' => 9,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Utilizadores',
            ),
            9 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 4,
                'id' => 10,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Categorias',
            ),
            10 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 2,
                'id' => 11,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Menus',
            ),
            11 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 3,
                'id' => 12,
                'locale' => 'pt',
                'table_name' => 'data_types',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Funções',
            ),
            12 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 1,
                'id' => 13,
                'locale' => 'pt',
                'table_name' => 'categories',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'categoria-1',
            ),
            13 => 
            array (
                'column_name' => 'name',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 1,
                'id' => 14,
                'locale' => 'pt',
                'table_name' => 'categories',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Categoria 1',
            ),
            14 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 2,
                'id' => 15,
                'locale' => 'pt',
                'table_name' => 'categories',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'categoria-2',
            ),
            15 => 
            array (
                'column_name' => 'name',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 2,
                'id' => 16,
                'locale' => 'pt',
                'table_name' => 'categories',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Categoria 2',
            ),
            16 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 1,
                'id' => 17,
                'locale' => 'pt',
                'table_name' => 'pages',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Olá Mundo',
            ),
            17 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 1,
                'id' => 18,
                'locale' => 'pt',
                'table_name' => 'pages',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'ola-mundo',
            ),
            18 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 1,
                'id' => 19,
                'locale' => 'pt',
                'table_name' => 'pages',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
            ),
            19 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 1,
                'id' => 20,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Painel de Controle',
            ),
            20 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 2,
                'id' => 21,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Media',
            ),
            21 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 13,
                'id' => 22,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Publicações',
            ),
            22 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 3,
                'id' => 23,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Utilizadores',
            ),
            23 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 12,
                'id' => 24,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Categorias',
            ),
            24 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 14,
                'id' => 25,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Páginas',
            ),
            25 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 4,
                'id' => 26,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Funções',
            ),
            26 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 5,
                'id' => 27,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Ferramentas',
            ),
            27 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 6,
                'id' => 28,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Menus',
            ),
            28 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 7,
                'id' => 29,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Base de dados',
            ),
            29 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-28 14:59:53',
                'foreign_key' => 10,
                'id' => 30,
                'locale' => 'pt',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-28 14:59:53',
                'value' => 'Configurações',
            ),
            30 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-05-31 16:59:43',
                'foreign_key' => 19,
                'id' => 31,
                'locale' => 'nl',
                'table_name' => 'menu_items',
                'updated_at' => '2020-05-31 16:59:43',
                'value' => 'Mailchimp',
            ),
            31 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 16:20:10',
                'foreign_key' => 21,
                'id' => 32,
                'locale' => 'nl',
                'table_name' => 'menu_items',
                'updated_at' => '2020-06-07 16:20:10',
                'value' => 'Donates',
            ),
            32 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 44,
                'id' => 33,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'ID',
            ),
            33 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 45,
                'id' => 34,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Author',
            ),
            34 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 46,
                'id' => 35,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Title',
            ),
            35 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 47,
                'id' => 36,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Excerpt',
            ),
            36 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 48,
                'id' => 37,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Body',
            ),
            37 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 55,
                'id' => 38,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Page Image',
            ),
            38 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 49,
                'id' => 39,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Slug',
            ),
            39 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 50,
                'id' => 40,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Meta Description',
            ),
            40 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 51,
                'id' => 41,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Meta Keywords',
            ),
            41 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 52,
                'id' => 42,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Status',
            ),
            42 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 53,
                'id' => 43,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Created At',
            ),
            43 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 54,
                'id' => 44,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Updated At',
            ),
            44 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 6,
                'id' => 45,
                'locale' => 'nl',
                'table_name' => 'data_types',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Page',
            ),
            45 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2020-06-07 16:23:49',
                'foreign_key' => 6,
                'id' => 46,
                'locale' => 'nl',
                'table_name' => 'data_types',
                'updated_at' => '2020-06-07 16:23:49',
                'value' => 'Pages',
            ),
            46 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 16:30:12',
                'foreign_key' => 2,
                'id' => 47,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 16:30:12',
                'value' => 'Home',
            ),
            47 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 16:30:12',
                'foreign_key' => 2,
                'id' => 48,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 16:30:12',
                'value' => '<!-- start banner Area -->
<section class="home-banner-area">
<div class="container">
<div class="row fullscreen d-flex align-items-center justify-content-between">
<div class="home-banner-content col-lg-6 col-md-6">
<h1>App That <br />Suits You Better</h1>
<p>inappropriate behavior is often laughed off as &ldquo;boys will be boys,&rdquo; women face higher conduct standards.</p>
<div class="download-button d-flex flex-row justify-content-start">
<div class="buttons flex-row d-flex">
<div class="desc">
<p>Available<br />on App Store</p>
</div>
</div>
<div class="buttons dark flex-row d-flex">
<div class="desc">
<p>Available<br />on Play Store</p>
</div>
</div>
</div>
</div>
<div class="banner-img col-lg-4 col-md-6"><img class="img-fluid" src="/storage/img/banner-img.png" alt="" /></div>
</div>
</div>
</section>
<!-- End banner Area -->
<p>&nbsp;</p>
<!-- Start fact Area -->
<section class="fact-area">
<div class="container">
<div class="fact-box">
<div class="row align-items-center">
<div class="col single-fact">
<h2>100K+</h2>
<p>Total Downloads</p>
</div>
<div class="col single-fact">
<h2>10K+</h2>
<p>Positive Reviews</p>
</div>
<div class="col single-fact">
<h2>50K+</h2>
<p>Daily Visitors</p>
</div>
<div class="col single-fact">
<h2>0.02%</h2>
<p>Uninstallation Rate</p>
</div>
<div class="col single-fact">
<h2>15K+</h2>
<p>Pro User</p>
</div>
</div>
</div>
</div>
</section>
<!-- End fact Area -->',
            ),
            48 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 16:30:12',
                'foreign_key' => 2,
                'id' => 49,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 16:30:12',
                'value' => 'home',
            ),
            49 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 16:36:01',
                'foreign_key' => 4,
                'id' => 50,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => 'Donaties',
            ),
            50 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 16:36:01',
                'foreign_key' => 4,
                'id' => 51,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 16:36:01',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            51 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 16:36:01',
                'foreign_key' => 4,
                'id' => 52,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 16:36:01',
                'value' => 'donates',
            ),
            52 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:41:02',
                'foreign_key' => 65,
                'id' => 53,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:41:02',
                'value' => 'Body Section',
            ),
            53 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 16:41:02',
                'foreign_key' => 66,
                'id' => 54,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 16:41:02',
                'value' => 'Body Extra',
            ),
            54 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 16:41:15',
                'foreign_key' => 3,
                'id' => 55,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => 'Blogpagina',
            ),
            55 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 16:41:15',
                'foreign_key' => 3,
                'id' => 56,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 16:41:15',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            56 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 16:41:15',
                'foreign_key' => 3,
                'id' => 57,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 16:41:15',
                'value' => 'blog',
            ),
            57 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 17:23:14',
                'foreign_key' => 67,
                'id' => 58,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 17:23:14',
                'value' => 'Number of items to show on page',
            ),
            58 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 18:38:43',
                'foreign_key' => 5,
                'id' => 59,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:53:43',
                'value' => 'Contacteer ons',
            ),
            59 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 18:38:43',
                'foreign_key' => 5,
                'id' => 60,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:53:43',
                'value' => 'Kontakt',
            ),
            60 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 18:38:43',
                'foreign_key' => 5,
                'id' => 61,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:38:43',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            61 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 18:38:43',
                'foreign_key' => 5,
                'id' => 62,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:38:43',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            62 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 18:38:43',
                'foreign_key' => 5,
                'id' => 63,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:38:43',
                'value' => 'contact',
            ),
            63 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 18:38:43',
                'foreign_key' => 5,
                'id' => 64,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:38:43',
                'value' => 'contact',
            ),
            64 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 44,
                'id' => 65,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'ID',
            ),
            65 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 45,
                'id' => 66,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Author',
            ),
            66 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 46,
                'id' => 67,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Title',
            ),
            67 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 47,
                'id' => 68,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Excerpt',
            ),
            68 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 48,
                'id' => 69,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Body',
            ),
            69 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 55,
                'id' => 70,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Page Image',
            ),
            70 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 49,
                'id' => 71,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Slug',
            ),
            71 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 50,
                'id' => 72,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Meta Description',
            ),
            72 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 51,
                'id' => 73,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Meta Keywords',
            ),
            73 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 52,
                'id' => 74,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Status',
            ),
            74 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 53,
                'id' => 75,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Created At',
            ),
            75 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 54,
                'id' => 76,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Updated At',
            ),
            76 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 65,
                'id' => 77,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Body Section',
            ),
            77 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 66,
                'id' => 78,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Body Extra',
            ),
            78 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 67,
                'id' => 79,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Number of items to show on page',
            ),
            79 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 68,
                'id' => 80,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Body Header',
            ),
            80 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 68,
                'id' => 81,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Body Header',
            ),
            81 => 
            array (
                'column_name' => 'display_name_singular',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 6,
                'id' => 82,
                'locale' => 'de',
                'table_name' => 'data_types',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Page',
            ),
            82 => 
            array (
                'column_name' => 'display_name_plural',
                'created_at' => '2020-06-07 18:51:40',
                'foreign_key' => 6,
                'id' => 83,
                'locale' => 'de',
                'table_name' => 'data_types',
                'updated_at' => '2020-06-07 18:51:40',
                'value' => 'Pages',
            ),
            83 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 18:53:43',
                'foreign_key' => 5,
                'id' => 84,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:53:43',
                'value' => 'We zijn hier om te helpen en elke vraag die je zou kunnen hebben te beantwoorden. We kijken ernaar uit om van u te horen 🙂',
            ),
            84 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 18:53:43',
                'foreign_key' => 5,
                'id' => 85,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:53:43',
                'value' => 'Wir sind hier, um Ihnen zu helfen und alle Fragen zu beantworten, die Sie haben könnten. Wir freuen uns darauf, von Ihnen zu hören 🙂',
            ),
            85 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 18:53:43',
                'foreign_key' => 5,
                'id' => 86,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:53:43',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            86 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 18:53:43',
                'foreign_key' => 5,
                'id' => 87,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:53:43',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            87 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 18:53:43',
                'foreign_key' => 5,
                'id' => 88,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:53:43',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            88 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 18:53:43',
                'foreign_key' => 5,
                'id' => 89,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 18:53:43',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            89 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 19:42:48',
                'foreign_key' => 4,
                'id' => 90,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => 'Spenden',
            ),
            90 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 19:42:48',
                'foreign_key' => 4,
                'id' => 91,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => 'Welkom in de hall of fame met mensen die ons hebben gedoneerd en gesteund.',
            ),
            91 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 19:42:48',
                'foreign_key' => 4,
                'id' => 92,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => 'Willkommen in der Hall of Fame mit Menschen, die uns gespendet und unterstützt haben.',
            ),
            92 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 19:42:48',
                'foreign_key' => 4,
                'id' => 93,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            93 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 19:42:48',
                'foreign_key' => 4,
                'id' => 94,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            94 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 19:42:48',
                'foreign_key' => 4,
                'id' => 95,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            95 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 19:42:48',
                'foreign_key' => 4,
                'id' => 96,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            96 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 19:42:48',
                'foreign_key' => 4,
                'id' => 97,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            97 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 19:42:48',
                'foreign_key' => 4,
                'id' => 98,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 19:42:48',
                'value' => 'donates',
            ),
            98 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 20:13:40',
                'foreign_key' => 3,
                'id' => 99,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => 'Blog-Seite',
            ),
            99 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 20:13:40',
                'foreign_key' => 3,
                'id' => 100,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => 'Blijf op de hoogte van het laatste nieuws!',
            ),
            100 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 20:13:40',
                'foreign_key' => 3,
                'id' => 101,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => 'Bleiben Sie mit den neuesten Nachrichten auf dem Laufenden!',
            ),
            101 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 20:13:40',
                'foreign_key' => 3,
                'id' => 102,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            102 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 20:13:40',
                'foreign_key' => 3,
                'id' => 103,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            103 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 20:13:40',
                'foreign_key' => 3,
                'id' => 104,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            104 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 20:13:40',
                'foreign_key' => 3,
                'id' => 105,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            105 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 20:13:40',
                'foreign_key' => 3,
                'id' => 106,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            106 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 20:13:40',
                'foreign_key' => 3,
                'id' => 107,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 20:13:40',
                'value' => 'blog',
            ),
            107 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 21:08:28',
                'foreign_key' => 2,
                'id' => 108,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 21:08:28',
                'value' => 'Home',
            ),
            108 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 21:08:28',
                'foreign_key' => 2,
                'id' => 109,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 21:08:28',
                'value' => 'home text',
            ),
            109 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 21:08:28',
                'foreign_key' => 2,
                'id' => 110,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 21:08:28',
                'value' => 'home text',
            ),
            110 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 21:08:28',
                'foreign_key' => 2,
                'id' => 111,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:25',
                'value' => '<div class="row fullscreen d-flex align-items-center justify-content-between">
<div class="home-banner-content col-lg-6 col-md-6">&nbsp;</div>
</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            111 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 21:08:28',
                'foreign_key' => 2,
                'id' => 112,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 22:50:57',
                'value' => '<h2>WAAROM JE ER VAN HOUDT</h2>
<p>Shazam zal elk liedje in enkele seconden identificeren. Ontdek, artiesten, teksten, video\'s & afspeellijsten, allemaal gratis. Meer dan 1 miljard installaties en tellingen. <br>
"Shazam is een app die aanvoelt als magie" - Techradar.com (http://techradar.com/) <br>
"Shazam is een geschenk... een spelwisselaar" - Pharrell Williams, GQ interview .</p><br>
<b> Ben jij ook verliefd? Voel je vrij om te doneren met de onderstaande knop</b>

',
            ),
            112 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 21:08:28',
                'foreign_key' => 2,
                'id' => 113,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 22:57:50',
                'value' => '<h2>WHY YOU\'LL LOVE IT</h2>
<p>Shazam identifiziert jedes Lied in Sekundenschnelle. Entdecken Sie, Künstler, Texte, Videos & Playlisten, alles kostenlos. Über 1 Milliarde Installationen, Tendenz steigend. <br>Shazam
"Shazam ist eine Anwendung, die sich wie Magie anfühlt" - Techradar.com (http://techradar.com/) <br>
"Shazam ist ein Geschenk... ein Wendepunkt" - Pharrell Williams, GQ-Interview .</p><br>
<b> Sind Sie auch verliebt? Zögern Sie nicht, mit der Schaltfläche unten zu spenden</b>

',
            ),
            113 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 21:08:28',
                'foreign_key' => 2,
                'id' => 114,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-09 18:11:18',
                'value' => '<!-- Start about Area -->
<section class="about-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 home-about-left">
<img class="img-fluid" src="/storage/img/desktop_mac.png" alt="">
</div>
<div class="offset-lg-1 col-lg-5 home-about-right">
<h1>
Shazam voor macOS
</h1>
<p>
Leer je Mac een paar nieuwe trucjes. <br>
Ontdek, koop en deel uw favoriete muziek en TV direct op uw computer, met een gepersonaliseerde afspeellijst die u onderweg maakt.
</p>
</div>
<div class="col-lg-6 home-about-right home-about-right2">
<h1>
Shazam Lite voor Android
</h1>
<p>
Onze slankste app ooit! <br>

U kunt nu alle muziek die u wilt identificeren met onze minder dan 1MB te downloaden app. U kunt ook Shazam-muziek offline afspelen, uw meest recente resultaten opslaan en de resultaten met uw vrienden delen - en dat alles ongeacht de dekking van het netwerk. 					</p>
<div class="download-button d-flex flex-row justify-content-start">
<div class="buttons flex-row d-flex">
<i class="fa fa-apple" aria-hidden="true"></i>
<div class="desc">
<a href="https://apps.apple.com/be/app/shazam/id897118787?mt=12">
<p>
<span>Verkrijgbaar</span> <br>
in de App Store
</p>
</a>
</div>
</div>
<div class="buttons dark flex-row d-flex">
<i class="fa fa-android" aria-hidden="true"></i>
<div class="desc">
<a href="https://play.google.com/store/apps/details?id=com.shazam.android&hl=en">
<p>
<span>Verkrijgbaar</span> <br>
in de Play Store
</p>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-5 home-about-left">
<img class="img-fluid" src="/storage/img/lite_android.png"  style="width:350px;margin-left: 20%;" alt="">
</div>
</div>
</div>
</section>
<!-- End about Area -->',
            ),
            114 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 21:08:28',
                'foreign_key' => 2,
                'id' => 115,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-09 18:11:55',
                'value' => '<!-- Start about Area -->
<section class="about-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 home-about-left">
<img class="img-fluid" src="/storage/img/desktop_mac.png" alt="">
</div>
<div class="offset-lg-1 col-lg-5 home-about-right">
<h1>
Shazam für MacOS
</h1>
<p>
Bringen Sie Ihrem Mac ein paar neue Tricks bei. <br>
Entdecken, kaufen und teilen Sie Ihre Lieblingsmusik und Ihr Lieblingsfernsehen direkt auf Ihrem Computer mit einer personalisierten Wiedergabeliste, die Sie nach Belieben erstellen können.
</p>
</div>
<div class="col-lg-6 home-about-right home-about-right2">
<h1>
Shazam Lite für Android
</h1>
<p>
Unsere schlankste App aller Zeiten! <br>

Mit unserer App zum Herunterladen von weniger als 1 MB können Sie jetzt alle Musikstücke identifizieren, die Sie herunterladen möchten. Sie können Shazam-Musik auch offline herunterladen, Ihre neuesten Ergebnisse speichern und die Ergebnisse mit Ihren Freunden teilen - und das alles unabhängig von der Netzabdeckung.		</p>
<div class="download-button d-flex flex-row justify-content-start">
<div class="buttons flex-row d-flex">
<i class="fa fa-apple" aria-hidden="true"></i>
<div class="desc">
<a href="https://apps.apple.com/be/app/shazam/id897118787?mt=12">
<p>
<span>Verfügbar</span> <br>
im App Store
</p>
</a>
</div>
</div>
<div class="buttons dark flex-row d-flex">
<i class="fa fa-android" aria-hidden="true"></i>
<div class="desc">
<a href="https://play.google.com/store/apps/details?id=com.shazam.android&hl=en">
<p>
<span>Verfügbar</span> <br>
im Play Store
</p>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-5 home-about-left">
<img class="img-fluid" src="/storage/img/lite_android.png"  style="width:350px;margin-left: 20%;" alt="">
</div>
</div>
</div>
</section>
<!-- End about Area -->',
            ),
            115 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 21:08:28',
                'foreign_key' => 2,
                'id' => 116,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 21:08:28',
                'value' => 'home',
            ),
            116 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 22:03:45',
                'foreign_key' => 4,
                'id' => 117,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:03:45',
                'value' => 'Donations',
            ),
            117 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 22:03:45',
                'foreign_key' => 4,
                'id' => 118,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:03:45',
                'value' => 'Welcome to the hall of fame with people that have been donating and supporting us.',
            ),
            118 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 22:03:45',
                'foreign_key' => 4,
                'id' => 119,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:03:45',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            119 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 22:03:45',
                'foreign_key' => 4,
                'id' => 120,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:03:45',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            120 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 22:03:45',
                'foreign_key' => 4,
                'id' => 121,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:03:45',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            121 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 22:03:45',
                'foreign_key' => 4,
                'id' => 122,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:03:45',
                'value' => 'donates',
            ),
            122 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 22:04:23',
                'foreign_key' => 5,
                'id' => 123,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:04:23',
                'value' => 'Contact Us',
            ),
            123 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 22:04:23',
                'foreign_key' => 5,
                'id' => 124,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:04:23',
                'value' => 'We’re here to help and answer any question you might have. We look forward to hearing from you 🙂',
            ),
            124 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 22:04:23',
                'foreign_key' => 5,
                'id' => 125,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:04:23',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            125 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 22:04:23',
                'foreign_key' => 5,
                'id' => 126,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:04:23',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            126 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 22:04:23',
                'foreign_key' => 5,
                'id' => 127,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:04:23',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            127 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 22:04:23',
                'foreign_key' => 5,
                'id' => 128,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:04:23',
                'value' => 'contact',
            ),
            128 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 22:05:07',
                'foreign_key' => 3,
                'id' => 129,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:07',
                'value' => 'Blog page',
            ),
            129 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 22:05:07',
                'foreign_key' => 3,
                'id' => 130,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:07',
                'value' => 'Stay up to date with the latest news!',
            ),
            130 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 22:05:07',
                'foreign_key' => 3,
                'id' => 131,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:07',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            131 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 22:05:07',
                'foreign_key' => 3,
                'id' => 132,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:07',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            132 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 22:05:07',
                'foreign_key' => 3,
                'id' => 133,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:07',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            133 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 22:05:07',
                'foreign_key' => 3,
                'id' => 134,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:07',
                'value' => 'blog',
            ),
            134 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-07 22:05:25',
                'foreign_key' => 2,
                'id' => 135,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:25',
                'value' => 'Home',
            ),
            135 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-07 22:05:25',
                'foreign_key' => 2,
                'id' => 136,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:25',
                'value' => 'home text',
            ),
            136 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-07 22:05:25',
                'foreign_key' => 2,
                'id' => 137,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:25',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            137 => 
            array (
                'column_name' => 'body_section',
                'created_at' => '2020-06-07 22:05:25',
                'foreign_key' => 2,
                'id' => 138,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:25',
                'value' => '<h2>Unique Features</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
            ),
            138 => 
            array (
                'column_name' => 'body_extra',
                'created_at' => '2020-06-07 22:05:25',
                'foreign_key' => 2,
                'id' => 139,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:25',
                'value' => '<!-- Start about Area -->
<section class="about-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 home-about-left">
<img class="img-fluid" src="/storage/img/iphone.png" alt="">
</div>
<div class="offset-lg-1 col-lg-5 home-about-right">
<h1>
We Believe that <br>
Interior beautifies the <br>
Total Architecture
</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua.Ut
enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
</p>
<a class="primary-btn text-uppercase" href="#">Get Details</a>
</div>
<div class="col-lg-6 home-about-right home-about-right2">
<h1>
We Believe that <br>
Interior beautifies the <br>
Total Architecture
</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua.Ut
enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
</p>
<div class="download-button d-flex flex-row justify-content-start">
<div class="buttons flex-row d-flex">
<i class="fa fa-apple" aria-hidden="true"></i>
<div class="desc">
<a href="#">
<p>
<span>Available</span> <br>
on App Store
</p>
</a>
</div>
</div>
<div class="buttons dark flex-row d-flex">
<i class="fa fa-android" aria-hidden="true"></i>
<div class="desc">
<a href="#">
<p>
<span>Available</span> <br>
on Play Store
</p>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-5 home-about-left">
<img class="img-fluid" src="/storage/img/iphone.png" alt="">
</div>
</div>
</div>
</section>
<!-- End about Area -->',
            ),
            139 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-07 22:05:25',
                'foreign_key' => 2,
                'id' => 140,
                'locale' => 'en',
                'table_name' => 'pages',
                'updated_at' => '2020-06-07 22:05:25',
                'value' => 'home',
            ),
            140 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-08 15:45:02',
                'foreign_key' => 7,
                'id' => 141,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:45:02',
                'value' => 'About',
            ),
            141 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-08 15:45:03',
                'foreign_key' => 7,
                'id' => 142,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:45:03',
                'value' => 'About',
            ),
            142 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-08 15:45:03',
                'foreign_key' => 7,
                'id' => 143,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:45:03',
                'value' => 'about page',
            ),
            143 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-08 15:45:03',
                'foreign_key' => 7,
                'id' => 144,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:45:03',
                'value' => 'about page',
            ),
            144 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-08 15:45:03',
                'foreign_key' => 7,
                'id' => 145,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-09 21:13:55',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">
<section class="about-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 home-about-left"><img class="img-fluid" src="/storage/pages/June2020/nathan-dumlao-qnH_Sh0W86E-unsplash.jpg" alt="" width="1800" height="2700" /></div>
<div class="offset-lg-1 col-lg-5 home-about-right">
<h1>Onze missie is om mensen te helpen de wereld om hen heen te herkennen en met hen in contact te komen.</h1>
<p>Shazam is een mobiele app die muziek en TV om je heen herkent. Het is de beste manier om de muziek en TV waar je van houdt te ontdekken, te verkennen en te delen. Shazam verbindt meer dan 1 miljard mensen. Het kostte ons 10 jaar om 1 miljard tags te bereiken, 10 maanden om 2 miljard te bereiken, 3 maanden om van 10 naar 12 miljard te gaan... Het is een geweldige app, nu verkrijgbaar in de Apple en Android winkels. En we zijn altijd op zoek naar nieuwe en innovatieve manieren om onze gebruikers te plezieren.</p>
</div>
</div>
</div>
</section>
<p>&nbsp;</p>
<section class="feature-area section-gap-top">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-lg-6">
<div class="section-title text-center">
<h2>HOE WERKT SHAZAM?</h2>
<p><span style="caret-color: #242424; color: #242424; font-family: Roboto, Arial, sans-serif; text-align: center;">Dit is een vraag die ons vaak wordt gesteld. Hier is een korte samenvatting van de drie belangrijkste stappen vanaf het moment dat je Shazam tot aan de magie.</span></p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h3>Tik op de shazam-knop</h3>
<p>Laten we zeggen dat je in een winkel bent en dat je de muziek die je hoort leuk vindt. Start de app en tik op de Shazam-knop.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h3>Digital fingerprint</h3>
<p>Er wordt een digitale vingerafdruk van de audio gemaakt en binnen enkele seconden wordt deze vergeleken met de database van Shazam met miljoenen tracks en tv-programma\'s.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h3>Geniet</h3>
<p>Je krijgt dan de naam van de track en de artiest en informatie zoals songtekst, video, artiestenbiografie, concertkaarten en aanbevolen tracks.</p>
</div>
</div>
</div>
</div>
</section>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
</div>',
            ),
            145 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-08 15:45:03',
                'foreign_key' => 7,
                'id' => 146,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-09 21:13:03',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">
<section class="about-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 home-about-left"><img class="img-fluid" src="/storage/pages/June2020/nathan-dumlao-qnH_Sh0W86E-unsplash.jpg" alt="" width="1800" height="2700" /></div>
<div class="offset-lg-1 col-lg-5 home-about-right">
<h1>Unsere Mission ist es, den Menschen zu helfen, die Welt um sie herum zu erkennen und sich mit ihr auseinanderzusetzen.</h1>
<p>Shazam ist eine mobile App, die Musik und Fernsehen um Sie herum erkennt. Es ist die beste M&ouml;glichkeit, die Musik und das Fernsehen, die Sie lieben, zu entdecken, zu erforschen und zu teilen. Shazam verbindet mehr als 1 Milliarde Menschen. Wir haben 10 Jahre gebraucht, um 1 Milliarde Tags zu erreichen, 10 Monate, um 2 Milliarden zu erreichen, 3 Monate, um von 10 auf 12 Milliarden zu kommen... Es ist eine erstaunliche App, die jetzt in den Apple- und Android-Stores erh&auml;ltlich ist. Und wir sind immer auf der Suche nach neuen und innovativen Wegen, um unsere Benutzer zu begeistern.</p>
</div>
</div>
</div>
</section>
<p>&nbsp;</p>
<section class="feature-area section-gap-top">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-lg-6">
<div class="section-title text-center">
<h2>WIE FUNKTIONIERT SHAZAM?</h2>
<p><span style="caret-color: #242424; color: #242424; font-family: Roboto, Arial, sans-serif; text-align: center;">Dies ist eine Frage, die uns oft gestellt wird. Hier ist eine kurze Zusammenfassung der drei Hauptschritte von dem Moment, in dem Sie Shazam sind, bis die Magie geschieht.</span></p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h3>Tippen Sie auf die Schaltfl&auml;che "Shazam".</h3>
<p>Nehmen wir an, Sie sind in einem Gesch&auml;ft und Ihnen gef&auml;llt die Musik, die Sie h&ouml;ren. Starten Sie die App und tippen Sie auf die Schaltfl&auml;che Shazam.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h3>Digitaler Fingerabdruck</h3>
<p>Es wird ein digitaler Fingerabdruck des Audios erstellt und innerhalb von Sekunden mit der Datenbank von Shazam mit Millionen von Titeln und Fernsehsendungen abgeglichen.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h3>Viel Spa&szlig; auf</h3>
<p>Sie erhalten dann den Namen des Titels und des K&uuml;nstlers sowie Informationen wie Text, Video, K&uuml;nstlerbiografie, Konzertkarten und empfohlene Titel.</p>
</div>
</div>
</div>
</div>
</section>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
</div>',
            ),
            146 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-08 15:45:03',
                'foreign_key' => 7,
                'id' => 147,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:45:03',
                'value' => 'about',
            ),
            147 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-08 15:45:03',
                'foreign_key' => 7,
                'id' => 148,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:45:03',
                'value' => 'about',
            ),
            148 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-08 15:53:11',
                'foreign_key' => 6,
                'id' => 149,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:53:11',
                'value' => 'Privacy Policy',
            ),
            149 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-08 15:53:11',
                'foreign_key' => 6,
                'id' => 150,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:53:11',
                'value' => 'Privacy Policy',
            ),
            150 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-08 15:53:11',
                'foreign_key' => 6,
                'id' => 151,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-09 18:26:54',
                'value' => '<div class="page-body">
<h2 class="mb-4" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-weight: 500; line-height: 1.2; font-size: 40px; font-family: \'Playfair Display\', serif; color: #080e1b; letter-spacing: -1px; caret-color: #080e1b; text-align: justify;">Privacybeleid</h2>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam respecteert de privacy van alle klanten en gebruikers van onze websites. Wij dragen er zorg voor dat de persoonlijke informatie, die je ons verschaft vertrouwelijk wordt behandeld.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Deze privacyverklaring is uitsluitend van toepassing op de diensten van Vintage Expert. Je dient je ervan bewust te zijn dat&nbsp;Shazam&nbsp;niet verantwoordelijk is voor het privacybeleid van andere sites, die via een link op onze website bereikbaar zijn. Wij raden je aan om bij het, via onze website, benaderen van websites van derden, telkens de privacy statements en disclaimers van die andere websites te raadplegen. Je kunt zien dat je niet meer op onze website bent als de URL in de adresbalk is gewijzigd.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam kan persoonsgegevens verwerken, doordat je gebruik maakt van haar diensten, en/of omdat je deze zelf bij het invullen van een contactformulier op deze website verstrekt.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">De volgende persoonsgegevens worden bij het gebruik van het contactformulier verwerkt:&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Je mailadres: optioneel je naam, adres en woonplaats met eveneens optioneel je telefoonnummer.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">WAAROM ZIJN DEZE GEGEVENS NODIG?&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam verwerkt je persoonsgegevens om je schriftelijk (per e-mail) te kunnen benaderen in het kader van het uitvoeren van een met jou gesloten overeenkomst van opdracht of om bijvoorbeeld telefonisch contact met je op te kunnen nemen als je daar om verzoekt.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">HOE LANG WORDEN GEGEVENS BEWAARD?&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam bewaart je persoonsgegevens niet langer dan strikt nodig is om de doelen te realiseren, waarvoor je gegevens worden verzameld. Je gegevens worden niet langer dan drie maanden bewaard indien er geen overeenkomst met je tot stand komt of een bestaande overeenkomst wordt be&euml;indigd.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">WORDEN JE GEGEVENS GEDEELD?&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam verstrekt je persoonsgegevens niet aan derden zonder je toestemming, tenzij wij daartoe verplicht zijn op basis van de wet of een rechterlijke uitspraak.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">IN KAART BRENGEN WEBSITEBEZOEK&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam gebruikt Google Analytics om bij te houden hoe bezoekers deze website gebruiken. Google heeft geen toestemming de verkregen Analytics informatie te gebruiken voor andere Google diensten en de IP-adressen worden geanonimiseerd.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">GEGEVENS INZIEN, AANPASSEN OF VERWIJDEREN&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Je hebt te allen tijde het recht om je persoonsgegevens in te zien, te corrigeren of te verwijderen. Je kunt een verzoek tot inzage, correctie of verwijdering sturen naar info@Shazam.be.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Wij zullen zo snel mogelijk, maar zeker binnen vier weken, op je verzoek reageren.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">BEVEILIGING&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam neemt de bescherming van je gegevens zeer serieus en neemt passende maatregelen om misbruik, verlies, onbevoegde toegang, ongewenste openbaarmaking en ongeoorloofde wijziging tegen te gaan. Als je de indruk hebt dat je gegevens niet goed beveiligd zijn of er aanwijzingen zijn van misbruik, of indien je meer informatie wenst over de beveiliging van door ons verzamelde persoonsgegevens, neem dan contact op met de Autoriteit Persoonsgegevens.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">COOKIES&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Cookies zijn eenvoudige, kleine tekstbestanden die worden opgeslagen op de harde schijf of in het geheugen van je computer. Cookies kunnen uw computer of de bestanden die op je computer staan niet beschadigen.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Cookies hebben twee functies. Enerzijds helpen ze om het navigeren in een website te vergemakkelijken door het onthouden van bijvoorbeeld inlognamen, wachtwoorden en (taal- ) voorkeuren. Anderzijds zijn er cookies die op basis van de websites die je bezoekt een inschatting maken van je interesses. Deze cookies bevatten geen persoonsgegevens, ze onthouden alleen je voorkeuren en interesses, op basis van je surfgedrag.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam kan cookies plaatsen voor de volgende doeleinden:&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&ndash; voor het opslaan van je voorkeuren;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&ndash; om het gebruik van deze website te analyseren;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&ndash; om deze website te optimaliseren;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&ndash; om meer op jou gerichte informatie op deze website te plaatsen;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&ndash; om informatie te verzamelen over de bezoekers van deze website;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">De cookies die je voorkeuren onthouden en het navigeren door&nbsp;Shazam&nbsp;vergemakkelijken kun je uitzetten via je browserinstellingen. Indien je deze cookies uitzet, kun je niet of moeilijker van alle mogelijkheden van de website gebruik maken.&nbsp;</p>
</div>',
            ),
            151 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-08 15:53:11',
                'foreign_key' => 6,
                'id' => 152,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-09 18:27:28',
                'value' => '<div class="page-body">
<h2 class="mb-4" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-weight: 500; line-height: 1.2; font-size: 40px; font-family: \'Playfair Display\', serif; color: #080e1b; letter-spacing: -1px; caret-color: #080e1b; text-align: justify;">Datenschutzerkl&auml;rung</h2>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam respektiert die Privatsph&auml;re aller Kunden und Nutzer unserer Websites. Wir stellen sicher, dass die von Ihnen angegebenen pers&ouml;nlichen Daten vertraulich behandelt werden.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Diese Datenschutzerkl&auml;rung gilt ausschlie&szlig;lich f&uuml;r die Dienstleistungen von Vintage Expert. Sie sollten sich dar&uuml;ber im Klaren sein, dass Shazam nicht f&uuml;r die Datenschutzpraktiken anderer Websites verantwortlich ist, die &uuml;ber einen Link auf unserer Website aufgerufen werden k&ouml;nnen. Wir raten Ihnen, stets die Datenschutzerkl&auml;rungen und Haftungsausschl&uuml;sse dieser anderen Websites zu konsultieren, wenn Sie sich &uuml;ber unsere Website an Websites Dritter wenden. Sie k&ouml;nnen sehen, dass Sie sich nicht mehr auf unserer Website befinden, wenn sich die URL in der Adressleiste ge&auml;ndert hat.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam kann personenbezogene Daten verarbeiten, indem es seine Dienstleistungen nutzt und/oder weil Sie diese beim Ausf&uuml;llen eines Kontaktformulars auf dieser Website selbst zur Verf&uuml;gung stellen.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Bei der Benutzung des Kontaktformulars werden die folgenden pers&ouml;nlichen Daten verarbeitet:&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Ihre E-Mail-Adresse: optional Ihr Name, Ihre Adresse und Ihr Wohnort und optional Ihre Telefonnummer.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">WARUM SIND DIESE ANGABEN NOTWENDIG?&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam verarbeitet Ihre personenbezogenen Daten, um Sie im Rahmen der Ausf&uuml;hrung eines mit Ihnen geschlossenen Auftragsvertrags schriftlich (per E-Mail) kontaktieren zu k&ouml;nnen oder um Sie beispielsweise telefonisch zu kontaktieren, wenn Sie dies w&uuml;nschen.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">WIE LANGE WERDEN DIE DATEN GESPEICHERT?&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam speichert Ihre pers&ouml;nlichen Daten nicht l&auml;nger, als es zur Erreichung der Ziele, f&uuml;r die Ihre Daten gesammelt werden, unbedingt erforderlich ist. Ihre Daten werden nicht l&auml;nger als drei Monate gespeichert, wenn keine Vereinbarung mit Ihnen getroffen wird oder wenn eine bestehende Vereinbarung beendet wird.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">WERDEN IHRE DATEN WEITERGEGEBEN?&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam wird Ihre pers&ouml;nlichen Daten nicht ohne Ihre Zustimmung an Dritte weitergeben, es sei denn, wir sind gesetzlich oder durch Gerichtsbeschluss dazu verpflichtet.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">KARTIERUNG DER WEBSITE-BESUCHE&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam verwendet Google Analytics, um zu verfolgen, wie Besucher diese Website nutzen. Google ist nicht berechtigt, die erhaltenen Analytics-Informationen f&uuml;r andere Google-Dienste zu verwenden, und die IP-Adressen werden anonymisiert.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">DATEN EINSEHEN, &Auml;NDERN ODER L&Ouml;SCHEN&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Sie haben jederzeit das Recht, auf Ihre pers&ouml;nlichen Daten zuzugreifen, sie zu korrigieren oder zu l&ouml;schen. Sie k&ouml;nnen einen Antrag auf Einsichtnahme, Korrektur oder L&ouml;schung an info@Shazam.be senden.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Wir werden Ihre Anfrage so schnell wie m&ouml;glich, mindestens aber innerhalb von vier Wochen beantworten.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">SICHERHEIT&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam nimmt den Schutz Ihrer Daten sehr ernst und ergreift geeignete Ma&szlig;nahmen, um Missbrauch, Verlust, unbefugten Zugriff, unerw&uuml;nschte Offenlegung und unbefugte &Auml;nderungen zu verhindern. Wenn Sie den Eindruck haben, dass Ihre Daten nicht ordnungsgem&auml;&szlig; gesichert sind oder es Anzeichen f&uuml;r einen Missbrauch gibt, oder wenn Sie weitere Informationen &uuml;ber die Sicherheit der von uns gesammelten pers&ouml;nlichen Daten w&uuml;nschen, wenden Sie sich bitte an die Beh&ouml;rde f&uuml;r pers&ouml;nliche Daten.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">K&Uuml;CHE&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Cookies sind einfache, kleine Textdateien, die auf der Festplatte oder im Speicher Ihres Computers gespeichert werden. Cookies k&ouml;nnen Ihren Computer oder die Dateien auf Ihrem Computer nicht besch&auml;digen.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Cookies haben zwei Funktionen. Einerseits helfen sie, die Navigation auf einer Website zu erleichtern, indem sie sich z.B. Login-Namen, Passw&ouml;rter und (Sprach-)Pr&auml;ferenzen merken. Auf der anderen Seite gibt es Cookies, die Ihre Interessen auf der Grundlage der von Ihnen besuchten Websites bewerten. Diese Cookies enthalten keine pers&ouml;nlichen Daten, sie merken sich nur Ihre Vorlieben und Interessen, basierend auf Ihrem Surfverhalten.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Shazam kann Cookies f&uuml;r die folgenden Zwecke platzieren:&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- Um Ihre Pr&auml;ferenzen zu speichern;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- um die Nutzung dieser Website zu analysieren;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- um diese Website zu optimieren;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- um gezieltere Informationen auf dieser Website zu platzieren;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">- um Informationen &uuml;ber die Besucher dieser Website zu sammeln;&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">Die Cookies, die Ihre Pr&auml;ferenzen speichern und die Navigation in Shazam erleichtern, k&ouml;nnen in Ihren Browsereinstellungen ausgeschaltet werden. Wenn Sie diese Cookies deaktivieren, k&ouml;nnen Sie nicht alle Funktionen der Website nutzen oder sie einfacher verwenden.&nbsp;</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 18px; caret-color: #080e1b; color: #080e1b; font-family: Roboto, \'Helvetica Neue\', \'Source Sans Pro\', sans-serif; text-align: justify;">&nbsp;</p>
</div>',
            ),
            152 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-08 15:53:11',
                'foreign_key' => 6,
                'id' => 153,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:53:11',
                'value' => 'privacy-policy',
            ),
            153 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-08 15:53:11',
                'foreign_key' => 6,
                'id' => 154,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-08 15:53:11',
                'value' => 'privacy-policy',
            ),
            154 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-08 15:58:00',
                'foreign_key' => 69,
                'id' => 155,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-08 15:58:00',
                'value' => 'Header Big',
            ),
            155 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-08 15:58:00',
                'foreign_key' => 69,
                'id' => 156,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-08 15:58:00',
                'value' => 'Header Big',
            ),
            156 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-08 15:58:00',
                'foreign_key' => 70,
                'id' => 157,
                'locale' => 'nl',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-08 15:58:00',
                'value' => 'Header Small',
            ),
            157 => 
            array (
                'column_name' => 'display_name',
                'created_at' => '2020-06-08 15:58:00',
                'foreign_key' => 70,
                'id' => 158,
                'locale' => 'de',
                'table_name' => 'data_rows',
                'updated_at' => '2020-06-08 15:58:00',
                'value' => 'Header Small',
            ),
            158 => 
            array (
                'column_name' => 'body_header',
                'created_at' => '2020-06-08 22:30:36',
                'foreign_key' => 2,
                'id' => 159,
                'locale' => 'nl',
                'table_name' => 'pages',
                'updated_at' => '2020-06-09 18:11:18',
                'value' => '<div class="row fullscreen d-flex align-items-center justify-content-between">
<div class="home-banner-content col-lg-6 col-md-6">
<h1>
Noem een willekeurig nummer<br> in enkele seconden
</h1>
<p>Shazam zal alle muziek die om je heen speelt identificeren.</p>
<div class="download-button d-flex flex-row justify-content-start">
<div class="buttons flex-row d-flex">
<i class="fa fa-apple" aria-hidden="true"></i>
<div class="desc">
<a href="https://apps.apple.com/be/app/shazam/id897118787?mt=12" target="blank">
<p>
<span>Beschikbaar</span> <br>
op de App Store
</p>
</a>
</div>
</div>
<div class="buttons dark flex-row d-flex">
<i class="fa fa-android" aria-hidden="true"></i>
<div class="desc">
<a href="https://play.google.com/store/apps/details?id=com.shazam.android&hl=en" target="blank">
<p>
<span>Beschikbaar</span> <br>
op de Play Store
</p>
</a>
</div>
</div>
</div>
</div>
<div class="banner-img col-lg-6 col-md-6">
<img class="img-fluid" src="/storage/img/devices.png" alt="">
</div>
</div>

<!-- Start fact Area -->
<section class="fact-area">
<div class="container">
<div class="fact-box">
<div class="row align-items-center">
<div class="col single-fact">
<h2>100K+</h2>
<p>Totaal aantal downloads</p>
</div>
<div class="col single-fact">
<h2>10K+</h2>
<p>Positieve Reviews</p>
</div>
<div class="col single-fact">
<h2>50K+</h2>
<p>Dagelijkse bezoekers</p>
</div>
<div class="col single-fact">
<h2>0.02%</h2>
<p>Verwijderingspercentage</p>
</div>
<div class="col single-fact">
<h2>15K+</h2>
<p>Pro-gebruiker</p>
</div>
</div>
</div>
</div>
</section>
<!-- End fact Area -->',
            ),
            159 => 
            array (
                'column_name' => 'body_header',
                'created_at' => '2020-06-08 22:30:36',
                'foreign_key' => 2,
                'id' => 160,
                'locale' => 'de',
                'table_name' => 'pages',
                'updated_at' => '2020-06-09 18:11:55',
                'value' => '<div class="row fullscreen d-flex align-items-center justify-content-between">
<div class="home-banner-content col-lg-6 col-md-6">
<h1>
Nennen Sie ein beliebiges Lied<br> in Sekunden

</h1>
<p>Shazam wird jede Musik identifizieren, die um Sie herum spielt.</p>
<div class="download-button d-flex flex-row justify-content-start">
<div class="buttons flex-row d-flex">
<i class="fa fa-apple" aria-hidden="true"></i>
<div class="desc">
<a href="https://apps.apple.com/be/app/shazam/id897118787?mt=12" target="blank">
<p>
<span>Verfügbar</span> <br>
im App Store
</p>
</a>
</div>
</div>
<div class="buttons dark flex-row d-flex">
<i class="fa fa-android" aria-hidden="true"></i>
<div class="desc">
<a href="https://play.google.com/store/apps/details?id=com.shazam.android&hl=en" target="blank">
<p>
<span>Verfügbar</span> <br>
im Play Store
</p>
</a>
</div>
</div>
</div>
</div>
<div class="banner-img col-lg-6 col-md-6">
<img class="img-fluid" src="/storage/img/devices.png" alt="">
</div>
</div>

<!-- Start fact Area -->
<section class="fact-area">
<div class="container">
<div class="fact-box">
<div class="row align-items-center">
<div class="col single-fact">
<h2>100K+</h2>
<p>Downloads insgesamt</p>
</div>
<div class="col single-fact">
<h2>10K+</h2>
<p>Positive Rezensionen</p>
</div>
<div class="col single-fact">
<h2>50K+</h2>
<p>Tägliche Besucher</p>
</div>
<div class="col single-fact">
<h2>0.02%</h2>
<p>Deinstallationsrate</p>
</div>
<div class="col single-fact">
<h2>15K+</h2>
<p>Profi-Benutzer</p>
</div>
</div>
</div>
</div>
</section>
<!-- End fact Area -->',
            ),
            160 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 173,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'Ut nisi vero qui.',
            ),
            161 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 174,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'Ut nisi vero qui.',
            ),
            162 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 175,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'Expedita exercitationem et veniam quo. Est excepturi maiores placeat voluptate accusantium ipsa tenetur. Deserunt eos cum amet sed placeat.',
            ),
            163 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 176,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'Expedita exercitationem et veniam quo. Est excepturi maiores placeat voluptate accusantium ipsa tenetur. Deserunt eos cum amet sed placeat.',
            ),
            164 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 177,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'Et soluta voluptates voluptatibus et optio est. Neque est consequuntur qui dignissimos qui. Occaecati in amet voluptas. Et voluptas et fuga eius.',
            ),
            165 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 178,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'Et soluta voluptates voluptatibus et optio est. Neque est consequuntur qui dignissimos qui. Occaecati in amet voluptas. Et voluptas et fuga eius.',
            ),
            166 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 179,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'fugit-et-maiores-fugiat-ratione-illo-a',
            ),
            167 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 180,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'fugit-et-maiores-fugiat-ratione-illo-a',
            ),
            168 => 
            array (
                'column_name' => 'meta_description',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 181,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'Mollitia et quis reiciendis alias dolorem. Repellendus hic non illum. Aut molestiae qui vel voluptatum rem consectetur reprehenderit reprehenderit. Dolore voluptatibus qui itaque ab.',
            ),
            169 => 
            array (
                'column_name' => 'meta_description',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 182,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'Mollitia et quis reiciendis alias dolorem. Repellendus hic non illum. Aut molestiae qui vel voluptatum rem consectetur reprehenderit reprehenderit. Dolore voluptatibus qui itaque ab.',
            ),
            170 => 
            array (
                'column_name' => 'meta_keywords',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 183,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'natus',
            ),
            171 => 
            array (
                'column_name' => 'meta_keywords',
                'created_at' => '2020-06-09 19:49:54',
                'foreign_key' => 7,
                'id' => 184,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-09 19:49:54',
                'value' => 'natus',
            ),
            172 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 185,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'Quam quos voluptate.',
            ),
            173 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 186,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'Quam quos voluptate.',
            ),
            174 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 187,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'Eius qui nobis laborum quia vel. Est dignissimos dolor et assumenda consectetur. Ipsum et provident a et tempora saepe soluta.',
            ),
            175 => 
            array (
                'column_name' => 'excerpt',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 188,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'Eius qui nobis laborum quia vel. Est dignissimos dolor et assumenda consectetur. Ipsum et provident a et tempora saepe soluta.',
            ),
            176 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 189,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'Consequatur quisquam distinctio ducimus consequatur sit et. Eveniet ullam numquam repudiandae iste qui. Dolores asperiores et error aut.',
            ),
            177 => 
            array (
                'column_name' => 'body',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 190,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'Consequatur quisquam distinctio ducimus consequatur sit et. Eveniet ullam numquam repudiandae iste qui. Dolores asperiores et error aut.',
            ),
            178 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 191,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'officia-est-assumenda-doloribus-magni',
            ),
            179 => 
            array (
                'column_name' => 'slug',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 192,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'officia-est-assumenda-doloribus-magni',
            ),
            180 => 
            array (
                'column_name' => 'meta_description',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 193,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'Illo iure ut sit aut ea incidunt. Accusamus labore quo ducimus blanditiis occaecati. Quisquam doloribus suscipit sequi expedita expedita.',
            ),
            181 => 
            array (
                'column_name' => 'meta_description',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 194,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'Illo iure ut sit aut ea incidunt. Accusamus labore quo ducimus blanditiis occaecati. Quisquam doloribus suscipit sequi expedita expedita.',
            ),
            182 => 
            array (
                'column_name' => 'meta_keywords',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 195,
                'locale' => 'nl',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'tempore',
            ),
            183 => 
            array (
                'column_name' => 'meta_keywords',
                'created_at' => '2020-06-10 00:37:38',
                'foreign_key' => 23,
                'id' => 196,
                'locale' => 'de',
                'table_name' => 'posts',
                'updated_at' => '2020-06-10 00:37:38',
                'value' => 'tempore',
            ),
            184 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 01:21:55',
                'foreign_key' => 17,
                'id' => 197,
                'locale' => 'nl',
                'table_name' => 'menu_items',
                'updated_at' => '2020-06-10 11:22:23',
                'value' => 'Home',
            ),
            185 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 01:21:55',
                'foreign_key' => 17,
                'id' => 198,
                'locale' => 'de',
                'table_name' => 'menu_items',
                'updated_at' => '2020-06-10 11:22:23',
                'value' => 'Startseite',
            ),
            186 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 11:22:57',
                'foreign_key' => 23,
                'id' => 199,
                'locale' => 'nl',
                'table_name' => 'menu_items',
                'updated_at' => '2020-06-10 11:22:57',
                'value' => 'Donaties',
            ),
            187 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 11:22:57',
                'foreign_key' => 23,
                'id' => 200,
                'locale' => 'de',
                'table_name' => 'menu_items',
                'updated_at' => '2020-06-10 11:22:57',
                'value' => 'Spenden',
            ),
            188 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 11:23:51',
                'foreign_key' => 16,
                'id' => 201,
                'locale' => 'nl',
                'table_name' => 'menu_items',
                'updated_at' => '2020-06-10 11:23:51',
                'value' => 'Over ons',
            ),
            189 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 11:23:51',
                'foreign_key' => 16,
                'id' => 202,
                'locale' => 'de',
                'table_name' => 'menu_items',
                'updated_at' => '2020-06-10 11:23:51',
                'value' => 'Über uns',
            ),
            190 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 11:24:10',
                'foreign_key' => 18,
                'id' => 203,
                'locale' => 'nl',
                'table_name' => 'menu_items',
                'updated_at' => '2020-06-10 11:24:10',
                'value' => 'Contact',
            ),
            191 => 
            array (
                'column_name' => 'title',
                'created_at' => '2020-06-10 11:24:10',
                'foreign_key' => 18,
                'id' => 204,
                'locale' => 'de',
                'table_name' => 'menu_items',
                'updated_at' => '2020-06-10 11:24:10',
                'value' => 'Kontakt',
            ),
        ));
        
        
    }
}