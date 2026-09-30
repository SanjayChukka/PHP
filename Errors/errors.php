<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling in PHP</title>
</head>
<body>
<!-- Errors in PHP -->
<!-- Error -->

<?php

    // echo $name;
    // echo "Hello";
    // echo $name;
    // echo "Hello";

?>

<!-- E_ERROR -->

<?php

    // function test() {
    //     echo "Hello";
    // }

    // test2(); // Uncaught Error: Call to undefined function test2()

    // echo "Program finished";

?>

<!-- E_WARNING -->
 <?php
     /*
$file = fopen("abc.txt", "r"); // fopen(abc.txt): Failed to open stream: 

echo "Program continues";
*/
 ?>

<!-- E_PARSE -->
 <?php

     // echo "Hello"       // Parse error: syntax error, unexpected token "echo", expecting "," or ";"
     // echo "World";
 ?>

<!-- E_NOTICE -->
 <?php
     // Example of deprecated PHP feature
     // $number = 10;
     // $number{0} = 5;
     // Fatal error: Array and string offset access syntax with curly braces is no longer supported

     // echo $number;
 ?>
 <?php

     // User Error with exit()
     /*
     $age = 15;
     if ($age < 18) {
         exit("Age must be 18 or above");
     }
     echo "Program Does not continues";
     */
 ?>
 <?php
     // with trigger_error()

     //  $age = 15;

     //  if ($age < 18) {
     //      trigger_error("Age must be 18 or above", E_USER_WARNING);
     //  }

 ?>
 <?php
     // E_STRICT
     /*
    class Test {
    function hello() {
        echo "Hello";
    }
}
    */
 ?>
 <?php
     // E_RECOVERABLE_ERROR
     /*
     function test(int $num)
     {
         echo $num;
     }
     test("Hello");\
     */
     // Uncaught TypeError: test():
     // Argument #1 ($num) must be of type int, string given
 ?>
    <!-- E_ALL Using in error_reporting and error_logging -->
 <?php
     /*
     error_reporting(E_ALL);
     ini_set("display_errors", 1);

     function customErrorHandler($errno, $errstr, $errfile, $errline)
     {
         $message = "Error : [$errno] $errstr - $errfile : $errline";
         echo $message;
         error_log($message . PHP_EOL, 3, "error_log.txt");
     }
     set_error_handler("customErrorHandler");
     echo $User();
     */
 ?>

 <?php
     /*
     try {
         $age = 15;

         if ($age < 18) {
        throw new Exception("Age must be 18 or above");
         }

         echo "Access granted";
     } catch (Exception $e) {
         echo "Error: " . $e->getMessage();
     }
     */
 ?>
 <!-- with finally -->
 <?php
     /*
     try {
         throw new Exception("File error");
     } catch (Exception $e) {
         echo $e->getMessage();
     } finally {
         echo "<br>Cleanup completed";
     }
*/
 ?>

<!-- Custom Exception -->
<?php
    /*
    class AgeException extends Exception
    {}

    try {
    throw new AgeException("Age must be 18 or above");
    } catch (AgeException $e) {
    echo $e->getMessage();
    }
    */
?>

<!-- Multiple Custom Exceptions -->
<?php

    // class AgeException extends Exception
    // {}
    // class BalanceException extends Exception
    // {}

    // try {
    // throw new AgeException("sufficient balance");
    // throw new BalanceException("Insufficient balance");
    // } catch (AgeException $e) {
    // echo "Age error";
    // } catch (BalanceException $e) {
    // echo "Balance error";
    // }

?>
<!--  Throwable -->
<?php
    // try {
    // throw new Exception("Something went wrong");
    // } catch (Throwable $e) {
    // echo $e->getMessage();
    // }
?>

<!-- Global Exception Handler -->
<?php

    // set_exception_handler(function ($e) {
    // echo "Unhandled: " . $e->getMessage();
    // });
    // throw new Exception("Something went wrong");
?>

<!-- Converting an Error into an Exception -->
<?php

    set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
    });

    try {
    echo "test"; //$undefinedVariable;
    exit;
    } catch (Throwable $e) {
    echo "Caught: " . $e->getMessage();
    }
    echo "test2";

?>

<?php
    /*
      set_error_handler(function ($severity, $message, $file, $line) {
          throw new ErrorException($message, 0, $severity, $file, $line);
      });

      try {
          echo $undefinedVariable;
      } catch (Throwable $e) {
          echo "Caught: " . $e->getMessage();
      }
          */
?>
</body>
</html>