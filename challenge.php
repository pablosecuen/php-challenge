1) Please, fully explain this function: document iterations, conditionals, and the function objective as a whole


<?php
function processOrder($p, $o, $ext) {
    $items = []; // Array to store what seems to be products
    $sp = false; // Boolean indicator to check if product $p is present
    $cd = false; // Boolean to check if the product has already been deleted

    $ext_p = []; // Array to organize extensions by seems to be the price id

    // for each loop to organize extensions into the $ext_p array
    foreach ($ext as $i => $e) {
        $ext_p[$e['price']['id']] = $e['qty'];
    }

    // for each loop to process each product in the order $o
    foreach ($o['items']['data'] as $i => $item) {
        // Declare and create an object for every product in the order (in this case, we are assigning only an id key/value)
        $product = ['id' => $item['id']]; //this line of code had a sintax mistake in the original file where ":" was throwing error and was expecting => to associate a value to the key "id"

        // conditional to check if the product has extensions in $ext_p
        if (isset($ext_p[$item['price']['id']])) {
            $qty = $ext_p[$item['price']['id']];

            // checking if quantity is less than 1 and setting deleted boolean to true in order to prepare for filtering
            if ($qty < 1) {
                $product['deleted'] = true;
            } else {
                // if the quantity is equal to 1, add the quantity to the product
                $product['qty'] = $qty;
            }

            // Additional conditional to check if the product is deleted or the quantity is less than 1
            // This line of code seems redundant and could be simplified
            if ($product['deleted'] || $qty < 1) {
                // If the product has no extensions and doesn't match $p, mark it as deleted and set $cd to true
                $cd = true;
            }

            // Filter or remove the processed extension from the $ext_p array
            unset($ext_p[$item['price']['id']]);
        } elseif ($item['price']['id'] == $p['id']) {
            // If the product has no extensions and its price id matches $p, set $sp to true
            $sp = true;
        } else {
            $product['deleted'] = true;
            $cd = true;
        }

        $items[] = $product;
    }

    // Conditional to check if the product $p is in the order and add it if it's not
    if (!$sp) {
        $items[] = ['id' => $p['id'], 'qty' => 1];
    }

    // Loop over the remaining extensions and add them to the $items array
    foreach ($ext_p as $i => $details) {
        // Checking if the quantity is less than 1 to continue to the next extension if so
        if ($details['qty'] < 1) {
            continue;
        }

        // Add the extension to the $items array
        $items[] = ['id' => $details['price'], 'qty' => $details['qty']];
    }

    // Return the $items array containing the processed information of products and extensions
    return $items;
}

?>

2) Write a class "LetterCounter" and implement a static method "CountLettersAsString" which receives a string parameter and returns a string that shows how many times each letter shows up in the string by using an asterisk (*).
Example: "Interview" -> "i:**,n:*,t:*,e:**,r:*,v:*,w:*"

3) Write a method that triggers a request to http://date.jsontest.com/, parses the json response and prints out the current date in a readable format as follows: Monday 14th of August, 2023 - 06:47 PM

4) Write a method that triggers a request to http://echo.jsontest.com/john/yes/tomas/no/belen/yes/peter/no/julie/no/gabriela/no/messi/no, parse the json response.
Using that data print two columns of data. The left column should contain the names of the persons that responses 'no',
and the right column should contain the names that responded 'yes'