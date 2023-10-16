require 'Book.php';
require 'Customer.php';

$book = new Book(123456, "The Great Gatsby", "F. Scott Fitzgerald", 5);

$book->title = "New Title";
$book->available = 10;

$book->addCopy(5);

$customer = new Customer(1, "John", "Doe", "john.doe@example.com");

$customer->email = "johndoe@gmail.com";

echo "Book Details: " . $book . "\n";
echo "Customer Details: " . $customer . "\n";
