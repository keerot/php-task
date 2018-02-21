<?php

/**
 * Contract for products.
 *
 * @author Filip Holmberg <filip@mobiilimarkkinointirouta.fi>
 */
interface ProductContract
{
    /**
     * Get product price.
     *
     * @return integer Price as micron integer
     */
    public function getPrice();

    /**
     * Get product price formatted as string.
     *
     * @return string
     */
    public function getFormattedPrice();

    /**
     * Get product name.
     *
     * @return mixed
     */
    public function getName();

    /**
     * ProductC constructor.
     *
     * @param string $name Product name
     * @param float $price Price as float
     */
    public function __construct($name, $price);
}