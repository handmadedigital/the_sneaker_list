<?php

namespace HMD\Repositories;

use HMD\Order;
use Illuminate\Support\Facades\Auth;

class OrderRepository
{
    protected $model;

    function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function persist($order)
    {
        $this->model->order_number = rand(100000,999999);
        $this->model->user_id = Auth::user()->id;
        $this->model->brand = $order->brand;
        $this->model->model = $order->model;
        $this->model->size = $order->size;
        $this->model->link = $order->link;

        $this->model->save();
    }
}