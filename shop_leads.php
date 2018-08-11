<?php
// define variables and set to empty values

// $fname = $lname = $email = $year = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $fname = check_input($_POST["firstname"]);
//   $lname = check_input($_POST["lastname"]);
//   $mailfrom = check_input($_POST["email"]);
//   $year = check_input($_POST["year"]);

// }

// function check_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;

// $mailTo = "jennifer@myerrunds.com";

// $headers = "New Shopper Signed Up: " .$mailfrom;
// $txt = "You have received an e-mail from ".$fname.".\n\n".;

// mail($mailTo, $fname, $lname, $mailfrom,$year)
// header("Location: index.html?mailsend")
// }
Hi <?php echo htmlspecialchars($_POST['name']); ?>.

?>
