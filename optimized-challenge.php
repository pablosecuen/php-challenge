<?php
function processOrder($p, $o, $ext) {
    $items = []; // Array to store final products
    $sp = false; // Boolean indicator to check if product $p is present
    $cd = false; // Boolean to check if the product has already been deleted
    $ext_p = []; // Array to organize extensions by price id

   // for each loop to organize extensions into the $ext_p array
    foreach ($ext as $e) {
        $ext_p[$e['price']['id']] = $e['qty'];
    }

  // for each loop to process each product in the order $o
    foreach ($o['items']['data'] as $item) {
        $product = ['id' => $item['id']]; // Create an object for every product with id key

        if (isset($ext_p[$item['price']['id']])) {
            $qty = $ext_p[$item['price']['id']];

            // Set deleted boolean and quantity based on conditions and a ternary operator to make more readable code
            $product['deleted'] = $qty < 1;
            $product['qty'] = $qty >= 1 ? $qty : null;

            // Check if the product is deleted or quantity is less than 1
            $cd = $product['deleted'] || $qty < 1;

            // Remove the processed extension from the $ext_p array
            unset($ext_p[$item['price']['id']]);
        } elseif ($item['price']['id'] == $p['id']) {
            $sp = true;
        } else {
            // If the product doesn't match $p, mark it as deleted and set $cd to true
            $product['deleted'] = true;
            $cd = true;
        }

        // Add the product to the $items array
        $items[] = $product;
    }

    // Check if the product $p is in the order and add it if it's not
    if (!$sp) {
        $items[] = ['id' => $p['id'], 'qty' => 1];
    }

    // Loop over the remaining extensions and add them to the $items array
    foreach ($ext_p as $details) {
        // Check if the quantity is greater than or equal to 1 to add to $items array
        if ($details['qty'] >= 1) {
            $items[] = ['id' => $details['price'], 'qty' => $details['qty']];
        }
    }

    // Return the $items array containing the processed information of products and extensions
    return $items;
}
?>