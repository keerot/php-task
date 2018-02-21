<?php

/**
 * Shop
 *
 * @author Filip Holmberg <filip@mobiilimarkkinointirouta.fi>
 */
class Shop
{
    /**
     * @var ProductContract[] Array of purchased products.
     */
    private $products = [];

    /**
     * Purchase product.
     *
     * @param ProductContract $Product
     */
    public function purchase(ProductContract $Product)
    {
        array_push($this->products, $Product);
    }

    /**
     * Get purchased products.
     *
     * @return ProductContract[]
     */
    public function getProducts()
    {
        return $this->products;
    }
}