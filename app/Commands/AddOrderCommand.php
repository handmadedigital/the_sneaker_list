<?php

namespace HMD\Commands;

class AddOrderCommand
{
    public $brand;
    public $model;
    public $size;
    public $link;

    function __construct($brand, $model, $size, $link)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->size = $size;
        $this->link = $link;
    }
}
