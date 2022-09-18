<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    public static function slugGenerator($title){
        $slug = Str::slug($title, '-');
        $prodotto_esistente = Product::where('slug',$slug)->first();
        $slug_base = $slug;
        $c = 1;
        while($prodotto_esistente){
            $slug = $slug_base.'-'.$c1;
            $prodotto_presente = Product::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }
}
