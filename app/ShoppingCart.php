<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model {

    protected $table = 'shopping_carts';

    // Mass assignment
    protected $fillable = ['status', 'user_id', 'direccion_id', 'total', 'receta_path'];

    public function generateCustomID()
    {
        return md5("$this-id $this->update_at");
    }

    public function updateCustomIDAndStatus()
    {
        $this->status = "approve";
        $this->customid = $this->generateCustomID();
        $this->save();
    }

    public function order()
    {
        return $this->hasOne("App\Order")->first();
    }

     public function direccion()
    {
        return $this->hasOne("App\Direccion");
    }

    public function approve()
    {
        $this->updateCustomIDAndStatus();
    }

    public function inShoppingCarts()
    {
        return $this->hasMany('App\InShoppingCart', 'shopping_cart_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'in_shopping_carts')->withPivot('qty');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productsSize()
    {
        return $this->products()->count();
    }
   

    public function total()
    {
        //return $this->products()->sum("pricing");
        $products = $this->products()->get();

        $total = 0;

        foreach ($products as $product) {
            $precio = $product->pricing;
            if(is_object($product->cat) && $product->cat->slug == 'Promociones'){
                $precio = $product->promotion_pricing;
            }
            $total = $total + ($product->pivot->qty * $precio);
        }


        return number_format($total, 2);
    }
    //
    //
    //totalUSD(){
    //$this->Total() * 18
    //}
    //
    //
    //


    public static function findOrCreateBySessionID($shopping_cart_id)
    {
        $shopping = ShoppingCart::findBySession($shopping_cart_id);

        if ($shopping) {
            return $shopping;
        }

        return ShoppingCart::createWithoutSession();
        /*if ($shopping_cart_id)
            // Buscar el carrito de compras con este ID
            return
        else
            // Crear un carrito de compras
            return ShoppingCart::createWithoutSession();*/
    }

    public static function findBySession($shopping_cart_id)
    {
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession()
    {

        return ShoppingCart::create([
            "status"      => "incompleted",
            'receta_path' => ''
        ]);
    }
}
