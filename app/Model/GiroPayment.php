<?php

namespace App\Model;

class GiroPayment extends Payment
{
    public function payment(){
        return $this->morphOne('App\Model\Payment', 'payment_detail');
    }
}
