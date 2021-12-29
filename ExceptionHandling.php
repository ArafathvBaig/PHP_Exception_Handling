<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Classes to Compute Exception Handling Problem
 */
class ExceptionHandling
{
    /**
     * Function for exception handling 
     * using try catch blocks and printing 
     * the respective answer or error message
     */
    function exceptionHandling()
    {
        $divident = readline("Enter Divident: ");
        $divisior = readline("Enter Divisior: ");
        try {
            if ($divisior == 0) {
                throw new Exception('Please Enter valid Divisor' . "\n");
            } else {
                echo  "Answer: " . $divident / $divisior . "\n";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            echo "It will always run \n";
        }
    }
}

$exceptionHandlingObj = new ExceptionHandling();
$exceptionHandlingObj->exceptionHandling();
