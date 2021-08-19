<?php

namespace Code;

class Cart
{
    private array $products;

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProduct()
    {
        return $this->products;
    }

    public function getTotalProducts()
    {
        return count($this->products);
    }

    public function getTotalPrice()
    {
        $total = 0;
        foreach ($this->products as $p) {
            $total += $p->getPrice();
        }

        return $total;
    }
}
