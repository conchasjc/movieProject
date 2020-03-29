<?php

namespace App;

class cart
{
    //
    public $movie=null;
    public $totalQty=0;
    public $totalPrice=0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->movie=$oldCart->movie;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
        }else{
            $this->movie=null;
        }
    }
    public function add($movie,$id){
        $storedMovie=['qty'=>0,'price'=>200,'movie'=>$movie];
        if($this->movie){
            if(array_key_exists($id,$this->movie)){
                $storedMovie=$this->movie[$id];

            }
        }
        $storedMovie['qty']++;
        $storedMovie['price']=$storedMovie['price'] * $storedMovie['qty'];
        $this->movie[$id]=$storedMovie;
        $this->totalQty++;
        $this->totalPrice+=$storedMovie['price'];
    }
}
