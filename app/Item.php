<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Supplier;

class Item extends Model
{
    public function suppliers(){
    	return $this->belongsToMany('App\Supplier','item_supplier','item_id','supplier_id');
    }
  
}
