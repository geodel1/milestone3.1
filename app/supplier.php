<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Supplier extends Model
{
    public function item(){
    	return $this->belongsToMany('App\Item','item_supplier','supplier_id','item_id');
    }

    public function add_item(Item $item){
    	return $this->item()->attach($item);
    }

}
