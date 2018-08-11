<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERRUNDS</title>
    
    <script src="script.js" type="text/javascript" charset="utf-8" async defer></script>  
</head>

<body>

        <form name="contactform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
        include 'shop_leads.php'?>"

            

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder=" Your email..." required>
            
            <label for="birth">Birth Year</label>
            
            <select id="year" >
            <!-- Using Script to polulate years -->
            </select>

            <br/>
            
            <label for="subject">Zip Code</label>
            <input type="text" id="zip" name="zipcode" placeholder="Zip Code">
            
            <div id="formsubmit">
                <input type="submit" value="Submit">
            </div>
        </form>
    