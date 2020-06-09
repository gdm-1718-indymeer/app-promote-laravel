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
                'id' => 1,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Post',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Página',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Utilizador',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categoria',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Menu',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Função',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Posts',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'categoria-1',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Categoria 1',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'categoria-2',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Categoria 2',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Olá Mundo',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'ola-mundo',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Painel de Controle',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Media',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 13,
                'locale' => 'pt',
                'value' => 'Publicações',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            24 => 
            array (
                'id' => 25,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 14,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            25 => 
            array (
                'id' => 26,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            26 => 
            array (
                'id' => 27,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Ferramentas',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            27 => 
            array (
                'id' => 28,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            28 => 
            array (
                'id' => 29,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'pt',
                'value' => 'Base de dados',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            29 => 
            array (
                'id' => 30,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'pt',
                'value' => 'Configurações',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            30 => 
            array (
                'id' => 31,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 19,
                'locale' => 'nl',
                'value' => 'Mailchimp',
                'created_at' => '2020-05-31 16:59:43',
                'updated_at' => '2020-05-31 16:59:43',
            ),
            31 => 
            array (
                'id' => 32,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 21,
                'locale' => 'nl',
                'value' => 'Donates',
                'created_at' => '2020-06-07 16:20:10',
                'updated_at' => '2020-06-07 16:20:10',
            ),
            32 => 
            array (
                'id' => 33,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 44,
                'locale' => 'nl',
                'value' => 'ID',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            33 => 
            array (
                'id' => 34,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 45,
                'locale' => 'nl',
                'value' => 'Author',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            34 => 
            array (
                'id' => 35,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 46,
                'locale' => 'nl',
                'value' => 'Title',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            35 => 
            array (
                'id' => 36,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 47,
                'locale' => 'nl',
                'value' => 'Excerpt',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            36 => 
            array (
                'id' => 37,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 48,
                'locale' => 'nl',
                'value' => 'Body',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            37 => 
            array (
                'id' => 38,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 55,
                'locale' => 'nl',
                'value' => 'Page Image',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            38 => 
            array (
                'id' => 39,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 49,
                'locale' => 'nl',
                'value' => 'Slug',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            39 => 
            array (
                'id' => 40,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 50,
                'locale' => 'nl',
                'value' => 'Meta Description',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            40 => 
            array (
                'id' => 41,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 51,
                'locale' => 'nl',
                'value' => 'Meta Keywords',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            41 => 
            array (
                'id' => 42,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 52,
                'locale' => 'nl',
                'value' => 'Status',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            42 => 
            array (
                'id' => 43,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 53,
                'locale' => 'nl',
                'value' => 'Created At',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            43 => 
            array (
                'id' => 44,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 54,
                'locale' => 'nl',
                'value' => 'Updated At',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            44 => 
            array (
                'id' => 45,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 6,
                'locale' => 'nl',
                'value' => 'Page',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            45 => 
            array (
                'id' => 46,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 6,
                'locale' => 'nl',
                'value' => 'Pages',
                'created_at' => '2020-06-07 16:23:49',
                'updated_at' => '2020-06-07 16:23:49',
            ),
            46 => 
            array (
                'id' => 47,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'nl',
                'value' => 'Home',
                'created_at' => '2020-06-07 16:30:12',
                'updated_at' => '2020-06-07 16:30:12',
            ),
            47 => 
            array (
                'id' => 48,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 2,
                'locale' => 'nl',
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
                'created_at' => '2020-06-07 16:30:12',
                'updated_at' => '2020-06-07 16:30:12',
            ),
            48 => 
            array (
                'id' => 49,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'nl',
                'value' => 'home',
                'created_at' => '2020-06-07 16:30:12',
                'updated_at' => '2020-06-07 16:30:12',
            ),
            49 => 
            array (
                'id' => 50,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'nl',
                'value' => 'Donaties',
                'created_at' => '2020-06-07 16:36:01',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            50 => 
            array (
                'id' => 51,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 4,
                'locale' => 'nl',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 16:36:01',
                'updated_at' => '2020-06-07 16:36:01',
            ),
            51 => 
            array (
                'id' => 52,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'nl',
                'value' => 'donates',
                'created_at' => '2020-06-07 16:36:01',
                'updated_at' => '2020-06-07 16:36:01',
            ),
            52 => 
            array (
                'id' => 53,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 65,
                'locale' => 'nl',
                'value' => 'Body Section',
                'created_at' => '2020-06-07 16:41:02',
                'updated_at' => '2020-06-07 16:41:02',
            ),
            53 => 
            array (
                'id' => 54,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 66,
                'locale' => 'nl',
                'value' => 'Body Extra',
                'created_at' => '2020-06-07 16:41:02',
                'updated_at' => '2020-06-07 16:41:02',
            ),
            54 => 
            array (
                'id' => 55,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'nl',
                'value' => 'Blogpagina',
                'created_at' => '2020-06-07 16:41:15',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            55 => 
            array (
                'id' => 56,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 3,
                'locale' => 'nl',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 16:41:15',
                'updated_at' => '2020-06-07 16:41:15',
            ),
            56 => 
            array (
                'id' => 57,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'nl',
                'value' => 'blog',
                'created_at' => '2020-06-07 16:41:15',
                'updated_at' => '2020-06-07 16:41:15',
            ),
            57 => 
            array (
                'id' => 58,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 67,
                'locale' => 'nl',
                'value' => 'Number of items to show on page',
                'created_at' => '2020-06-07 17:23:14',
                'updated_at' => '2020-06-07 17:23:14',
            ),
            58 => 
            array (
                'id' => 59,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'nl',
                'value' => 'Contacteer ons',
                'created_at' => '2020-06-07 18:38:43',
                'updated_at' => '2020-06-07 18:53:43',
            ),
            59 => 
            array (
                'id' => 60,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'de',
                'value' => 'Kontakt',
                'created_at' => '2020-06-07 18:38:43',
                'updated_at' => '2020-06-07 18:53:43',
            ),
            60 => 
            array (
                'id' => 61,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 5,
                'locale' => 'nl',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 18:38:43',
                'updated_at' => '2020-06-07 18:38:43',
            ),
            61 => 
            array (
                'id' => 62,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 5,
                'locale' => 'de',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 18:38:43',
                'updated_at' => '2020-06-07 18:38:43',
            ),
            62 => 
            array (
                'id' => 63,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'nl',
                'value' => 'contact',
                'created_at' => '2020-06-07 18:38:43',
                'updated_at' => '2020-06-07 18:38:43',
            ),
            63 => 
            array (
                'id' => 64,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'de',
                'value' => 'contact',
                'created_at' => '2020-06-07 18:38:43',
                'updated_at' => '2020-06-07 18:38:43',
            ),
            64 => 
            array (
                'id' => 65,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 44,
                'locale' => 'de',
                'value' => 'ID',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            65 => 
            array (
                'id' => 66,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 45,
                'locale' => 'de',
                'value' => 'Author',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            66 => 
            array (
                'id' => 67,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 46,
                'locale' => 'de',
                'value' => 'Title',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            67 => 
            array (
                'id' => 68,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 47,
                'locale' => 'de',
                'value' => 'Excerpt',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            68 => 
            array (
                'id' => 69,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 48,
                'locale' => 'de',
                'value' => 'Body',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            69 => 
            array (
                'id' => 70,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 55,
                'locale' => 'de',
                'value' => 'Page Image',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            70 => 
            array (
                'id' => 71,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 49,
                'locale' => 'de',
                'value' => 'Slug',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            71 => 
            array (
                'id' => 72,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 50,
                'locale' => 'de',
                'value' => 'Meta Description',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            72 => 
            array (
                'id' => 73,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 51,
                'locale' => 'de',
                'value' => 'Meta Keywords',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            73 => 
            array (
                'id' => 74,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 52,
                'locale' => 'de',
                'value' => 'Status',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            74 => 
            array (
                'id' => 75,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 53,
                'locale' => 'de',
                'value' => 'Created At',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            75 => 
            array (
                'id' => 76,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 54,
                'locale' => 'de',
                'value' => 'Updated At',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            76 => 
            array (
                'id' => 77,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 65,
                'locale' => 'de',
                'value' => 'Body Section',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            77 => 
            array (
                'id' => 78,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 66,
                'locale' => 'de',
                'value' => 'Body Extra',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            78 => 
            array (
                'id' => 79,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 67,
                'locale' => 'de',
                'value' => 'Number of items to show on page',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            79 => 
            array (
                'id' => 80,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 68,
                'locale' => 'nl',
                'value' => 'Body Header',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            80 => 
            array (
                'id' => 81,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 68,
                'locale' => 'de',
                'value' => 'Body Header',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            81 => 
            array (
                'id' => 82,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 6,
                'locale' => 'de',
                'value' => 'Page',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            82 => 
            array (
                'id' => 83,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 6,
                'locale' => 'de',
                'value' => 'Pages',
                'created_at' => '2020-06-07 18:51:40',
                'updated_at' => '2020-06-07 18:51:40',
            ),
            83 => 
            array (
                'id' => 84,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 5,
                'locale' => 'nl',
                'value' => 'We zijn hier om te helpen en elke vraag die je zou kunnen hebben te beantwoorden. We kijken ernaar uit om van u te horen 🙂',
                'created_at' => '2020-06-07 18:53:43',
                'updated_at' => '2020-06-07 18:53:43',
            ),
            84 => 
            array (
                'id' => 85,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 5,
                'locale' => 'de',
                'value' => 'Wir sind hier, um Ihnen zu helfen und alle Fragen zu beantworten, die Sie haben könnten. Wir freuen uns darauf, von Ihnen zu hören 🙂',
                'created_at' => '2020-06-07 18:53:43',
                'updated_at' => '2020-06-07 18:53:43',
            ),
            85 => 
            array (
                'id' => 86,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 5,
                'locale' => 'nl',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 18:53:43',
                'updated_at' => '2020-06-07 18:53:43',
            ),
            86 => 
            array (
                'id' => 87,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 5,
                'locale' => 'de',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 18:53:43',
                'updated_at' => '2020-06-07 18:53:43',
            ),
            87 => 
            array (
                'id' => 88,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 5,
                'locale' => 'nl',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 18:53:43',
                'updated_at' => '2020-06-07 18:53:43',
            ),
            88 => 
            array (
                'id' => 89,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 5,
                'locale' => 'de',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 18:53:43',
                'updated_at' => '2020-06-07 18:53:43',
            ),
            89 => 
            array (
                'id' => 90,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'de',
                'value' => 'Spenden',
                'created_at' => '2020-06-07 19:42:48',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            90 => 
            array (
                'id' => 91,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 4,
                'locale' => 'nl',
                'value' => 'Welkom in de hall of fame met mensen die ons hebben gedoneerd en gesteund.',
                'created_at' => '2020-06-07 19:42:48',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            91 => 
            array (
                'id' => 92,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 4,
                'locale' => 'de',
                'value' => 'Willkommen in der Hall of Fame mit Menschen, die uns gespendet und unterstützt haben.',
                'created_at' => '2020-06-07 19:42:48',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            92 => 
            array (
                'id' => 93,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 4,
                'locale' => 'de',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 19:42:48',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            93 => 
            array (
                'id' => 94,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 4,
                'locale' => 'nl',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 19:42:48',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            94 => 
            array (
                'id' => 95,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 4,
                'locale' => 'de',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 19:42:48',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            95 => 
            array (
                'id' => 96,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 4,
                'locale' => 'nl',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 19:42:48',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            96 => 
            array (
                'id' => 97,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 4,
                'locale' => 'de',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 19:42:48',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            97 => 
            array (
                'id' => 98,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'de',
                'value' => 'donates',
                'created_at' => '2020-06-07 19:42:48',
                'updated_at' => '2020-06-07 19:42:48',
            ),
            98 => 
            array (
                'id' => 99,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'de',
                'value' => 'Blog-Seite',
                'created_at' => '2020-06-07 20:13:40',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            99 => 
            array (
                'id' => 100,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 3,
                'locale' => 'nl',
                'value' => 'Blijf op de hoogte van het laatste nieuws!',
                'created_at' => '2020-06-07 20:13:40',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            100 => 
            array (
                'id' => 101,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 3,
                'locale' => 'de',
                'value' => 'Bleiben Sie mit den neuesten Nachrichten auf dem Laufenden!',
                'created_at' => '2020-06-07 20:13:40',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            101 => 
            array (
                'id' => 102,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 3,
                'locale' => 'de',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 20:13:40',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            102 => 
            array (
                'id' => 103,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 3,
                'locale' => 'nl',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 20:13:40',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            103 => 
            array (
                'id' => 104,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 3,
                'locale' => 'de',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 20:13:40',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            104 => 
            array (
                'id' => 105,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 3,
                'locale' => 'nl',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 20:13:40',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            105 => 
            array (
                'id' => 106,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 3,
                'locale' => 'de',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 20:13:40',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            106 => 
            array (
                'id' => 107,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'de',
                'value' => 'blog',
                'created_at' => '2020-06-07 20:13:40',
                'updated_at' => '2020-06-07 20:13:40',
            ),
            107 => 
            array (
                'id' => 108,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'de',
                'value' => 'Home',
                'created_at' => '2020-06-07 21:08:28',
                'updated_at' => '2020-06-07 21:08:28',
            ),
            108 => 
            array (
                'id' => 109,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 2,
                'locale' => 'nl',
                'value' => 'home text',
                'created_at' => '2020-06-07 21:08:28',
                'updated_at' => '2020-06-07 21:08:28',
            ),
            109 => 
            array (
                'id' => 110,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 2,
                'locale' => 'de',
                'value' => 'home text',
                'created_at' => '2020-06-07 21:08:28',
                'updated_at' => '2020-06-07 21:08:28',
            ),
            110 => 
            array (
                'id' => 111,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 2,
                'locale' => 'de',
                'value' => '<div class="row fullscreen d-flex align-items-center justify-content-between">
<div class="home-banner-content col-lg-6 col-md-6">&nbsp;</div>
</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 21:08:28',
                'updated_at' => '2020-06-07 22:05:25',
            ),
            111 => 
            array (
                'id' => 112,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 2,
                'locale' => 'nl',
                'value' => '<h2>WAAROM JE ER VAN HOUDT</h2>
<p>Shazam zal elk liedje in enkele seconden identificeren. Ontdek, artiesten, teksten, video\'s & afspeellijsten, allemaal gratis. Meer dan 1 miljard installaties en tellingen. <br>
"Shazam is een app die aanvoelt als magie" - Techradar.com (http://techradar.com/) <br>
"Shazam is een geschenk... een spelwisselaar" - Pharrell Williams, GQ interview .</p><br>
<b> Ben jij ook verliefd? Voel je vrij om te doneren met de onderstaande knop</b>

',
                'created_at' => '2020-06-07 21:08:28',
                'updated_at' => '2020-06-08 22:50:57',
            ),
            112 => 
            array (
                'id' => 113,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 2,
                'locale' => 'de',
                'value' => '<h2>WHY YOU\'LL LOVE IT</h2>
<p>Shazam identifiziert jedes Lied in Sekundenschnelle. Entdecken Sie, Künstler, Texte, Videos & Playlisten, alles kostenlos. Über 1 Milliarde Installationen, Tendenz steigend. <br>Shazam
"Shazam ist eine Anwendung, die sich wie Magie anfühlt" - Techradar.com (http://techradar.com/) <br>
"Shazam ist ein Geschenk... ein Wendepunkt" - Pharrell Williams, GQ-Interview .</p><br>
<b> Sind Sie auch verliebt? Zögern Sie nicht, mit der Schaltfläche unten zu spenden</b>

',
                'created_at' => '2020-06-07 21:08:28',
                'updated_at' => '2020-06-08 22:57:50',
            ),
            113 => 
            array (
                'id' => 114,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 2,
                'locale' => 'nl',
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
                'created_at' => '2020-06-07 21:08:28',
                'updated_at' => '2020-06-09 18:11:18',
            ),
            114 => 
            array (
                'id' => 115,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 2,
                'locale' => 'de',
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
                'created_at' => '2020-06-07 21:08:28',
                'updated_at' => '2020-06-09 18:11:55',
            ),
            115 => 
            array (
                'id' => 116,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'de',
                'value' => 'home',
                'created_at' => '2020-06-07 21:08:28',
                'updated_at' => '2020-06-07 21:08:28',
            ),
            116 => 
            array (
                'id' => 117,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Donations',
                'created_at' => '2020-06-07 22:03:45',
                'updated_at' => '2020-06-07 22:03:45',
            ),
            117 => 
            array (
                'id' => 118,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Welcome to the hall of fame with people that have been donating and supporting us.',
                'created_at' => '2020-06-07 22:03:45',
                'updated_at' => '2020-06-07 22:03:45',
            ),
            118 => 
            array (
                'id' => 119,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 4,
                'locale' => 'en',
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
                'created_at' => '2020-06-07 22:03:45',
                'updated_at' => '2020-06-07 22:03:45',
            ),
            119 => 
            array (
                'id' => 120,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 4,
                'locale' => 'en',
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
                'created_at' => '2020-06-07 22:03:45',
                'updated_at' => '2020-06-07 22:03:45',
            ),
            120 => 
            array (
                'id' => 121,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 4,
                'locale' => 'en',
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
                'created_at' => '2020-06-07 22:03:45',
                'updated_at' => '2020-06-07 22:03:45',
            ),
            121 => 
            array (
                'id' => 122,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'donates',
                'created_at' => '2020-06-07 22:03:45',
                'updated_at' => '2020-06-07 22:03:45',
            ),
            122 => 
            array (
                'id' => 123,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Contact Us',
                'created_at' => '2020-06-07 22:04:23',
                'updated_at' => '2020-06-07 22:04:23',
            ),
            123 => 
            array (
                'id' => 124,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'We’re here to help and answer any question you might have. We look forward to hearing from you 🙂',
                'created_at' => '2020-06-07 22:04:23',
                'updated_at' => '2020-06-07 22:04:23',
            ),
            124 => 
            array (
                'id' => 125,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 22:04:23',
                'updated_at' => '2020-06-07 22:04:23',
            ),
            125 => 
            array (
                'id' => 126,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 22:04:23',
                'updated_at' => '2020-06-07 22:04:23',
            ),
            126 => 
            array (
                'id' => 127,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 22:04:23',
                'updated_at' => '2020-06-07 22:04:23',
            ),
            127 => 
            array (
                'id' => 128,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'contact',
                'created_at' => '2020-06-07 22:04:23',
                'updated_at' => '2020-06-07 22:04:23',
            ),
            128 => 
            array (
                'id' => 129,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Blog page',
                'created_at' => '2020-06-07 22:05:07',
                'updated_at' => '2020-06-07 22:05:07',
            ),
            129 => 
            array (
                'id' => 130,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Stay up to date with the latest news!',
                'created_at' => '2020-06-07 22:05:07',
                'updated_at' => '2020-06-07 22:05:07',
            ),
            130 => 
            array (
                'id' => 131,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 3,
                'locale' => 'en',
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
                'created_at' => '2020-06-07 22:05:07',
                'updated_at' => '2020-06-07 22:05:07',
            ),
            131 => 
            array (
                'id' => 132,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 3,
                'locale' => 'en',
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
                'created_at' => '2020-06-07 22:05:07',
                'updated_at' => '2020-06-07 22:05:07',
            ),
            132 => 
            array (
                'id' => 133,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 3,
                'locale' => 'en',
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
                'created_at' => '2020-06-07 22:05:07',
                'updated_at' => '2020-06-07 22:05:07',
            ),
            133 => 
            array (
                'id' => 134,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'blog',
                'created_at' => '2020-06-07 22:05:07',
                'updated_at' => '2020-06-07 22:05:07',
            ),
            134 => 
            array (
                'id' => 135,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'Home',
                'created_at' => '2020-06-07 22:05:25',
                'updated_at' => '2020-06-07 22:05:25',
            ),
            135 => 
            array (
                'id' => 136,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'home text',
                'created_at' => '2020-06-07 22:05:25',
                'updated_at' => '2020-06-07 22:05:25',
            ),
            136 => 
            array (
                'id' => 137,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<p>&nbsp;</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 22:05:25',
                'updated_at' => '2020-06-07 22:05:25',
            ),
            137 => 
            array (
                'id' => 138,
                'table_name' => 'pages',
                'column_name' => 'body_section',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => '<h2>Unique Features</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>
<div id="ConnectiveDocSignExtentionInstalled" data-extension-version="1.0.4">&nbsp;</div>',
                'created_at' => '2020-06-07 22:05:25',
                'updated_at' => '2020-06-07 22:05:25',
            ),
            138 => 
            array (
                'id' => 139,
                'table_name' => 'pages',
                'column_name' => 'body_extra',
                'foreign_key' => 2,
                'locale' => 'en',
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
                'created_at' => '2020-06-07 22:05:25',
                'updated_at' => '2020-06-07 22:05:25',
            ),
            139 => 
            array (
                'id' => 140,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'home',
                'created_at' => '2020-06-07 22:05:25',
                'updated_at' => '2020-06-07 22:05:25',
            ),
            140 => 
            array (
                'id' => 141,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'nl',
                'value' => 'About',
                'created_at' => '2020-06-08 15:45:02',
                'updated_at' => '2020-06-08 15:45:02',
            ),
            141 => 
            array (
                'id' => 142,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'de',
                'value' => 'About',
                'created_at' => '2020-06-08 15:45:03',
                'updated_at' => '2020-06-08 15:45:03',
            ),
            142 => 
            array (
                'id' => 143,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 7,
                'locale' => 'nl',
                'value' => 'about page',
                'created_at' => '2020-06-08 15:45:03',
                'updated_at' => '2020-06-08 15:45:03',
            ),
            143 => 
            array (
                'id' => 144,
                'table_name' => 'pages',
                'column_name' => 'excerpt',
                'foreign_key' => 7,
                'locale' => 'de',
                'value' => 'about page',
                'created_at' => '2020-06-08 15:45:03',
                'updated_at' => '2020-06-08 15:45:03',
            ),
            144 => 
            array (
                'id' => 145,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 7,
                'locale' => 'nl',
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
                'created_at' => '2020-06-08 15:45:03',
                'updated_at' => '2020-06-09 21:13:55',
            ),
            145 => 
            array (
                'id' => 146,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 7,
                'locale' => 'de',
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
                'created_at' => '2020-06-08 15:45:03',
                'updated_at' => '2020-06-09 21:13:03',
            ),
            146 => 
            array (
                'id' => 147,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'nl',
                'value' => 'about',
                'created_at' => '2020-06-08 15:45:03',
                'updated_at' => '2020-06-08 15:45:03',
            ),
            147 => 
            array (
                'id' => 148,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'de',
                'value' => 'about',
                'created_at' => '2020-06-08 15:45:03',
                'updated_at' => '2020-06-08 15:45:03',
            ),
            148 => 
            array (
                'id' => 149,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'nl',
                'value' => 'Privacy Policy',
                'created_at' => '2020-06-08 15:53:11',
                'updated_at' => '2020-06-08 15:53:11',
            ),
            149 => 
            array (
                'id' => 150,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'de',
                'value' => 'Privacy Policy',
                'created_at' => '2020-06-08 15:53:11',
                'updated_at' => '2020-06-08 15:53:11',
            ),
            150 => 
            array (
                'id' => 151,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 6,
                'locale' => 'nl',
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
                'created_at' => '2020-06-08 15:53:11',
                'updated_at' => '2020-06-09 18:26:54',
            ),
            151 => 
            array (
                'id' => 152,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 6,
                'locale' => 'de',
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
                'created_at' => '2020-06-08 15:53:11',
                'updated_at' => '2020-06-09 18:27:28',
            ),
            152 => 
            array (
                'id' => 153,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'nl',
                'value' => 'privacy-policy',
                'created_at' => '2020-06-08 15:53:11',
                'updated_at' => '2020-06-08 15:53:11',
            ),
            153 => 
            array (
                'id' => 154,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 6,
                'locale' => 'de',
                'value' => 'privacy-policy',
                'created_at' => '2020-06-08 15:53:11',
                'updated_at' => '2020-06-08 15:53:11',
            ),
            154 => 
            array (
                'id' => 155,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 69,
                'locale' => 'nl',
                'value' => 'Header Big',
                'created_at' => '2020-06-08 15:58:00',
                'updated_at' => '2020-06-08 15:58:00',
            ),
            155 => 
            array (
                'id' => 156,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 69,
                'locale' => 'de',
                'value' => 'Header Big',
                'created_at' => '2020-06-08 15:58:00',
                'updated_at' => '2020-06-08 15:58:00',
            ),
            156 => 
            array (
                'id' => 157,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 70,
                'locale' => 'nl',
                'value' => 'Header Small',
                'created_at' => '2020-06-08 15:58:00',
                'updated_at' => '2020-06-08 15:58:00',
            ),
            157 => 
            array (
                'id' => 158,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 70,
                'locale' => 'de',
                'value' => 'Header Small',
                'created_at' => '2020-06-08 15:58:00',
                'updated_at' => '2020-06-08 15:58:00',
            ),
            158 => 
            array (
                'id' => 159,
                'table_name' => 'pages',
                'column_name' => 'body_header',
                'foreign_key' => 2,
                'locale' => 'nl',
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
                'created_at' => '2020-06-08 22:30:36',
                'updated_at' => '2020-06-09 18:11:18',
            ),
            159 => 
            array (
                'id' => 160,
                'table_name' => 'pages',
                'column_name' => 'body_header',
                'foreign_key' => 2,
                'locale' => 'de',
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
                'created_at' => '2020-06-08 22:30:36',
                'updated_at' => '2020-06-09 18:11:55',
            ),
            160 => 
            array (
                'id' => 173,
                'table_name' => 'posts',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'nl',
                'value' => 'Ut nisi vero qui.',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            161 => 
            array (
                'id' => 174,
                'table_name' => 'posts',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'de',
                'value' => 'Ut nisi vero qui.',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            162 => 
            array (
                'id' => 175,
                'table_name' => 'posts',
                'column_name' => 'excerpt',
                'foreign_key' => 7,
                'locale' => 'nl',
                'value' => 'Expedita exercitationem et veniam quo. Est excepturi maiores placeat voluptate accusantium ipsa tenetur. Deserunt eos cum amet sed placeat.',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            163 => 
            array (
                'id' => 176,
                'table_name' => 'posts',
                'column_name' => 'excerpt',
                'foreign_key' => 7,
                'locale' => 'de',
                'value' => 'Expedita exercitationem et veniam quo. Est excepturi maiores placeat voluptate accusantium ipsa tenetur. Deserunt eos cum amet sed placeat.',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            164 => 
            array (
                'id' => 177,
                'table_name' => 'posts',
                'column_name' => 'body',
                'foreign_key' => 7,
                'locale' => 'nl',
                'value' => 'Et soluta voluptates voluptatibus et optio est. Neque est consequuntur qui dignissimos qui. Occaecati in amet voluptas. Et voluptas et fuga eius.',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            165 => 
            array (
                'id' => 178,
                'table_name' => 'posts',
                'column_name' => 'body',
                'foreign_key' => 7,
                'locale' => 'de',
                'value' => 'Et soluta voluptates voluptatibus et optio est. Neque est consequuntur qui dignissimos qui. Occaecati in amet voluptas. Et voluptas et fuga eius.',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            166 => 
            array (
                'id' => 179,
                'table_name' => 'posts',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'nl',
                'value' => 'fugit-et-maiores-fugiat-ratione-illo-a',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            167 => 
            array (
                'id' => 180,
                'table_name' => 'posts',
                'column_name' => 'slug',
                'foreign_key' => 7,
                'locale' => 'de',
                'value' => 'fugit-et-maiores-fugiat-ratione-illo-a',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            168 => 
            array (
                'id' => 181,
                'table_name' => 'posts',
                'column_name' => 'meta_description',
                'foreign_key' => 7,
                'locale' => 'nl',
                'value' => 'Mollitia et quis reiciendis alias dolorem. Repellendus hic non illum. Aut molestiae qui vel voluptatum rem consectetur reprehenderit reprehenderit. Dolore voluptatibus qui itaque ab.',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            169 => 
            array (
                'id' => 182,
                'table_name' => 'posts',
                'column_name' => 'meta_description',
                'foreign_key' => 7,
                'locale' => 'de',
                'value' => 'Mollitia et quis reiciendis alias dolorem. Repellendus hic non illum. Aut molestiae qui vel voluptatum rem consectetur reprehenderit reprehenderit. Dolore voluptatibus qui itaque ab.',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            170 => 
            array (
                'id' => 183,
                'table_name' => 'posts',
                'column_name' => 'meta_keywords',
                'foreign_key' => 7,
                'locale' => 'nl',
                'value' => 'natus',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
            171 => 
            array (
                'id' => 184,
                'table_name' => 'posts',
                'column_name' => 'meta_keywords',
                'foreign_key' => 7,
                'locale' => 'de',
                'value' => 'natus',
                'created_at' => '2020-06-09 19:49:54',
                'updated_at' => '2020-06-09 19:49:54',
            ),
        ));
        
        
    }
}