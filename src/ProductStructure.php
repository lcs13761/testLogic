<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $newArrayProduct = array();
        foreach (self::products as $value) {
            $newValue = explode('-', $value);
            if (!isset($newArrayProduct[$newValue[0]][$newValue[1]])) $newArrayProduct[$newValue[0]][$newValue[1]] = 0;
            $newArrayProduct[$newValue[0]][$newValue[1]] += 1;
        }
        return $newArrayProduct;
    }
}
