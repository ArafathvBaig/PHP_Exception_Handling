<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Classes to Compute Custom Exception Handling Problem
 */
class CustomExceptionHandling extends Exception
{
    /**
     * Function to get an Error Message
     * Returns the error message in the catch block
     * getMessage get the name from the try block
     */
    public function errorMessage()
    {
        $errorMessage = 'Error at line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': ' . $this->getMessage() . ' is not a valid User Name';
        return $errorMessage;
    }
}

$name = readline('Enter Your Name: ');

try {
    if ($name != "Arafath Baig") {
        throw new CustomExceptionHandling($name);
    } else {
        echo "Welcome to the User:: " . $name;
    }
} catch (CustomExceptionHandling $e) {
    echo $e->errorMessage();
}
