<?php
// Create randon integer
$int = rand(1, 1000);

function genBin($int){
    // Turns integer into binary
    $bin = decbin($int);
    // Verify if zero exists in the string
    if ( strpos($bin, '0') ) {
        // Variables
        $lenght = strlen($bin); // Count the string size
        $count  = 0; // Save the quantity of zeros
        $bigger = 0; // Saves the biggest gap

        // Search for BinaryGaps
        for ($i=0; $i < $lenght; $i++) { 
            // Prevines when there is no zeros between ones
           if ($bin[$i] == "1") {
                // Ensures that only the biggest gap will remain
                if ($bigger < $count) {
                    $bigger = $count;
                }
                $count = 0;
           } else {
               $count++;
           }
        }
    }
    // Returns the result
    return PHP_EOL . "BINARY: " . $bin . PHP_EOL . "BIGGER BINARYGAP: " . $bigger . PHP_EOL;
}

var_dump(genBin($int));