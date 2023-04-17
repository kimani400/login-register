<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>contact us</title>
</head>
<body>
<ul class="nav-list">
			<div class="logo"><img src=""></div>
			<li><a href="index.php">Home</a></li>
			<li><a href="products.php">Products</a></li>
			<li><a href="aboutus.php">AboutUs</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
 
<h1>Contact us for quick delivery</h1>
<form id="contact_form" name="contact_form" method="post">
    <div class="mb-5 row">
        <div class="col">
            <label>First Name</label>
            <input type="text" required maxlength="50" class="form-control" id="first_name" name="first_name">
        </div>
        <div class="col">
            <label>Last Name</label>
            <input type="text" required maxlength="50" class="form-control" id="last_name" name="last_name">
        </div>
    </div>
    <div class="mb-5 row">
        <div class="col">
            <label for="email_addr">Email address</label>
            <input type="email" required maxlength="50" class="form-control" id="email_addr" name="email"
                placeholder="name@example.com">
        </div>
        <div class="col">
            <label for="phone_input">Phone</label>
            <input type="tel" required maxlength="50" class="form-control" id="phone_input" name="Phone"
                placeholder="Phone">
        </div>
    </div>
    <div class="mb-5">
        <label for="message">Message us about the furniture in need</label>
        <textarea class="form-control" id="message" name="message" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary px-4 btn-lg">Post</button>
    <p>Send us message also through:</p>
    <div class="contacts">
        <h1 class="header">Reach us through:</h1>
        <img src="email.png" alt="show image">
        <div class="email"><a href="mailto:feadinancekimani@gmail.com">Email me here</a></div>
         <img src="whatsapp.png" alt="show image">
        <div class="whatsap"><a href="https://wa.me/+256774653303" target="_blank">Whatsapp Me</a></div>
         <img src="youtube.png" alt="show image">
       <div class="youtube"><a href="https://www.youtube.com/me.Feadinance Kimani">Follow On Youtube</a></div>
         <img src="facebook.png" alt="show image">
         <div class="facebook"><a href="https://www.facebook.com Feadinance Kimani dh kimani">On Facebook</a></div>
    </div>

</form>
      
 




</body>