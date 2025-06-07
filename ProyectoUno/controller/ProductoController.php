<?php

namespace app\controllers\Product;


class ProductoController{
    public function queryAllProducts(){ 
        $producto = new ProductoController(); 
        $data = $producto->all(); 
        return $data; 
    }
}