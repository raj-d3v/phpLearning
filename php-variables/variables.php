<?php 

    // ------------------------- Print in PHP ------------------------- 

    echo "Hello world <br>";
    echo "Its really good <br><br>";

    // ---------------------------- END ----------------------------


    // -------------------------  Variables in PHP ------------------------- 
    
    //string
    $name = "Raj <br>";
    
    //integer 
    $age = 24;

    //float
    $gpa = 2.5; 
    $price = 4.99;
    
    //boolean
    $employeed = true; // 1 is displayed for true
    $online = false; // nothing is displayed for false
    $forSale = true;

    echo $name; 

    // Directly writing echo "xyz" means a string literal
    echo "Hello {$name}"; 

    echo "Age: {$age}<br>";

    echo "GPA: {$gpa}<br>";

   
    echo "Price of Pizza: \${$gpa}<br>"; // float example with escape sequnce because we are using dollar.  

    echo "Employeed:{$employeed}<br>";
    echo "Online status:{$online}<br>";


    // Example of combining two variables 
    $food = "Pizza";
    $price = 7.8;
    $quantity = 3;
    $total = null;

    echo"You have ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo"Your total is \${$total} <br><br>";

    // ---------------------------- END -----------------------------

?>

  


