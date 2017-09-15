<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    protected $products = [
        [ 'title' => 'Acél füstcső takarórózsa', 'img_path' => '/img/products/takarorozsa.jpg', 'type' => 'fustcso',  'webshop_link' => ''],
        [ 'title' => 'Acél füstcső szűkítő', 'img_path' => 'img/products/szukito.jpg', 'type' => 'fustcso',  'webshop_link' => ''],
        [ 'title' => 'Forgatható könyök', 'img_path' => 'img/products/konyok.jpg', 'type' => 'fustcso',  'webshop_link' => ''],
        [ 'title' => 'Acél füstcső 25 cm pillangószeleppel', 'img_path' => 'img/products/pillangoszelep.jpg', 'type' => 'fustcso',  'webshop_link' => ''],
        [ 'title' => 'Hődob', 'img_path' => 'img/products/hodob.jpg', 'type' => 'fustcso',  'webshop_link' => ''],
        [ 'title' => 'Acél füstcső fali hüvely', 'img_path' => 'img/products/huvely.jpg', 'type' => 'fustcso',  'webshop_link' => ''],
        [ 'title' => 'Acél füstcső 90°', 'img_path' => 'img/products/90.jpg', 'type' => 'fustcso',  'webshop_link' => ''],
        [ 'title' => 'Acél füstcső 100 cm', 'img_path' => 'img/products/100.jpg', 'type' => 'fustcso',  'webshop_link' => ''],
        [ 'title' => 'Acél füstcső 45°', 'img_path' => 'img/products/45.jpg', 'type' => 'fustcso',  'webshop_link' => ''],
        [ 'title' => 'Zártszelvény', 'img_path' => 'img/products/zartszelveny.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Hegesztett hálók', 'img_path' => 'img/products/hegesztett-halok.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Drótfonat', 'img_path' => 'img/products/drotfonat.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Szögacél', 'img_path' => 'img/products/szogacel.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Betonacélok, hengerhuzalok', 'img_path' => 'img/products/betonacel.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Szerkezeti cső', 'img_path' => 'img/products/szerkezeti-cso.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Rozsdamentes lemez', 'img_path' => 'img/products/rozsdamentes-lemez.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Hidegen hajlított U-acél', 'img_path' => 'img/products/u-acel.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Köracél', 'img_path' => 'img/products/koracel.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Melegen hengerelt U-acél', 'img_path' => 'img/products/m-u-acel.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Melegen hengerelt I-acél', 'img_path' => 'img/products/i-acel.jpg', 'type' => 'vasudvar',  'webshop_link' => ''],
        [ 'title' => 'Szerszámos kocsi', 'img_path' => 'img/products/kocsi.png', 'type' => 'szerkezet',  'webshop_link' => ''],
        [ 'title' => 'Él hajlító (befogadás 4000 mm-ig)', 'img_path' => 'img/machines/elhajlito.jpg', 'type' => 'services',  'webshop_link' => ''],
        [ 'title' => 'Lángvágó (asztal méret: 6000 x 2000 mm)', 'img_path' => 'img/machines/langvagas.jpg', 'type' => 'services',  'webshop_link' => ''],
        [ 'title' => 'Lemezolló (maximális vágási méret: 3000 mm)', 'img_path' => 'img/machines/lemezollo.jpg', 'type' => 'services',  'webshop_link' => ''],
        [ 'title' => 'Lézervágó asztal (munkaterület: 3000 x 1500 mm)', 'img_path' => 'img/machines/lezer.jpg', 'type' => 'services',  'webshop_link' => ''],
        [ 'title' => 'Porfestő<br>(szélesség:1500 mm,magasság:1800mm,hosszúság:3000mm)', 'img_path' => 'img/machines/porfesto.jpg', 'type' => 'services',  'webshop_link' => ''],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->products as $product) {
            DB::table('products')->insert([
                'title'         => $product['title'],
                'img_path'      => $product['img_path'],
                'type'          => $product['type'],
                'webshop_link'  => $product['webshop_link']
            ]);
        }
    }
}
