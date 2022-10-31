<!DOCTYPE html>
<html>

<head>
<?php
// tax amount is 7%
define("TAX", 0.07);

// 1. Add 3 properties to the Book class: $title, $author, and $price. 
class Book {
    public $title;
    public $author;
    public $price;

    // 2. Fill-in the following constructor method, so that it assigns values to the properties $title, $author, and $price
    function __construct($title, $author, $price) {
            $this->title = $title;
            $this->author = $author;
            $this->price = $price;
    }

    // 3. Create a method called display(), which outputs a line for the current book with title, author, and price
        function display()
        {
            echo "Title: ".$this->title."<br>";
            echo "Author: ".$this->author."<br>";
            echo "Price: $".$this->price."<br><br>";
        }
}

// 4. Create a function called get_tax() that calculates the tax using the constant TAX defined above. Return the price * tax amount.
function get_tax(){
    return TAX*$price;
}


$book1 = new Book($_POST['book1title'], $_POST['book1author'], $_POST['book1price']);
echo"Book 1:<br>";
$book1->display();
cost(TAX, $_POST['book1price']);

// 5. Create a second object called book2. Use the values posted from index.php to assign values to the properties of the book object. Display it.
$book2 = new book($_POST['book2title'],$_POST['book2author'],$_POST['book2price'],);
echo"Book 2:<br>";
$book2->display();
cost(TAX, $_POST['book2price']);
// 6. Create variables for $tax, $cost_with_tax. Calculate and display a total cost before tax (both books), tax cost, and total cost with tax.
    $tax;
    $cost_with_tax;
    function cost($tax, $bookPrice,){
        echo "The total tax of for this book is: $".sprintf("%01.2f",TAX*$bookPrice).". The total before tax for this book is: $"
        .$bookPrice.". The grand total for this book with tax is: $".sprintf("%01.2f",(TAX*$bookPrice)+$bookPrice).".<br><br>";
    }
    
?>
</head>
<body>
</body>
</html>