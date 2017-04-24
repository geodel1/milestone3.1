<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function supplier(){
    	return $this->hasMany('items_suppliers', 'item_id', 'suppliers_id');
    }

  
    
}
