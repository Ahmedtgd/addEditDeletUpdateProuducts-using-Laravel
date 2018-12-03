<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function viewproduct(){ //routes/web.php ln 24 + http/controllers/productcontrolers ln 9


  return('product.view');
  }
 }
