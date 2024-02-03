<?php

namespace Satriabimantara\BelajarPhpMvc\Controller;

class ProductController
{
    public function categories(string $productName, string $categories)
    {
        echo "PRODUCT: $productName || CATEGORY: $categories";
    }
}
