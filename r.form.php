<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Delivery request form</title>
</head>
<body>
    <h1>Please! fill the form for delivery request</h1>

    <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $gender = $_POST["gender"];
           $telephonenumber = $_POST["telephone_number"];
           $country = $_POST["country"];
           $item = $_POST["item"];
           $currency = $_POST["currency"];
           $amount = $_POST["amount"];
           $venue = $_POST["venue"];
        
    
           $errors = array();
           if (empty($fullName) OR empty($email) OR empty($gender) OR empty($telephonenumber) OR empty($country) OR empty($item) OR empty($currency) OR empty($amount) OR empty($venue)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
        
        
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO items_requested (fullname, email, gender, telephone, country, item, currency, amount, venue) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sssssssss",$fullName, $email, $gender, $telephone, $country, $item, $currency, $amount, $venue);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>Information submitted successfully wait for the delivery thanks!</div>";
            }else{
                die("Something went wrong");
            }
           }
        }
        ?>
         <form action="r.form.php" method="post">
            <div class="FORM-GROUP"><h1>REQUEST FORM</h1></div>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="gender" placeholder="Gender:">
            </div>
            <div class="form-group">
                <input type="telephone" class="form-control" name="telephone_number" placeholder="Telephone Number:">
            </div>

            <div class="form-group">
                <input type="text" class="country" name="country" placeholder="Country:">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="item" placeholder="item:">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="currency" placeholder="Currency:">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="amount" placeholder="amount:">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="venue" placeholder="venue:">
            </div>

            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            </div>
        </form>
</body>
</html>