<?php

namespace HMD\Commands;

class AddOrderCommand
{
    public $brand;
    public $model;
    public $size;

    function __construct($brand, $model, $size)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->size = $size;
    }
}
