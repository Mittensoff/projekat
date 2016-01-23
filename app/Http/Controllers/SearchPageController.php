<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class SearchPageController extends Controller
{
    public function loadSubCategory(Request $request, $id)
    {

        if (is_null($request->input('submit_filter'))) {
            $requested = 0;
            $products = \App\Sub_category::findOrNew($id)->product()->where('in_stock', '>', '0')->get();
            $sub_category_id = $id;
            $min_price = 0;
            $max_price = $products->max('price');
            $colors = array();
            $types = array();
            $sellers = array();

            foreach ($products as $product) {
                $colors[] = $product['color'];
                $types[] = $product['type'];
                $sellers[] = $product->user['username'];
            }
            $colors = array_filter(array_unique($colors));
            $types = array_filter(array_unique($types));
            $sellers = array_filter(array_unique($sellers));
            sort($colors, SORT_NATURAL | SORT_FLAG_CASE);
            sort($types, SORT_NATURAL | SORT_FLAG_CASE);
            sort($sellers, SORT_NATURAL | SORT_FLAG_CASE);

            return view('/pages/sub_category', compact('products', 'min_price', 'max_price', 'colors',
                'types', 'sellers', 'sub_category_id', 'requested'));
        }

        if (($request->input('submit_filter')) == 'submit') {
            $requested = 1;
            $products = \App\Sub_category::findOrNew($id)->product()->where('in_stock', '>', '0')->get();
            $sub_category_id = $id;
            $colors = array();
            $types = array();
            $sellers = array();
            $min_price = $request->input('min_price');
            $max_price = $request->input('max_price');
            $products_filt = [];

            $color = $request->input('colors');
            $type = $request->input('types');
            $seller = $request->input('sellers');

            foreach ($products as $product) {

                //da bi svi uslovi ostali upisani u formi
                $colors[] = $product['color'];
                $types[] = $product['type'];
                $sellers[] = $product->user['username'];

                //provjera uslova i upisivanje proizvoda koji odgovaraju uslovima

                if ($product['price'] <= $max_price and $product['price'] >= $min_price and ($color=='0' ? (true) :
                        ($product['color'] == $color)) and ($type=='0' ? (true) : ($product['type'] == $type)) and
                    ($seller=='0' ? (true) : ($product->user['username'] == $seller))
                ) {

                    $products_filt[] = $product;
                }
            }

            //eliminisanje nul vrijednosti i ponavljanja
            $colors = array_filter(array_unique($colors));
            $types = array_filter(array_unique($types));
            $sellers = array_filter(array_unique($sellers));

            //sortiranje case_insensitive po pocetnom slovu
            sort($colors, SORT_NATURAL | SORT_FLAG_CASE);
            sort($types, SORT_NATURAL | SORT_FLAG_CASE);
            sort($sellers, SORT_NATURAL | SORT_FLAG_CASE);

            //pretvaranje niza u asocijativni niz, zbog select box <option value='xyz'>xyz</option>
            $colors=array_combine($colors,$colors);
            $types=array_combine($types,$types);
            $sellers=array_combine($sellers,$sellers);

            return view('/pages/sub_category', compact('products_filt', 'min_price', 'max_price', 'colors',
                'types', 'sellers', 'sub_category_id', 'requested'));

        }
    }


}
