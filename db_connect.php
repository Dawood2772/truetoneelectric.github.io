<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<script src="https://kit.fontawesome.com/b291381002.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="footer.css">

</head>
<body>
	
<?php
    if(isset($_POST['name'])){
		// Set connection variables
		$server = "localhost";
		$username = "root";
		$password = "";}
	$con = mysqli_connect($server, $username, $password);
	if(!$con){
		die("Connecction failed due to ".mysqli_connect_error());
	}
	$name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
	$sql = "INSERT INTO `dd`.`test` (`name`, `email`, `phone`,  `message`) VALUES ('$name','$email', '$phone', '$message' );";
	if($con->query($sql) == true){
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Success! </strong> We have Recieved your concern! We will get back to you soon!!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">×</span>
		</button>
	  </div>';
	}
		$con->close();
?>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-3">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Contact Form</h1>
        <p class="col-lg-10 fs-4">Fill the form with your query in the messages and our team will help you as soon as possible!
			Avoid spamming Messages...We'll Get back to you soon.
		</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
			<form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="db_connect.php" >
				<div class="form-floating mb-3">
					<input name="name" type="text" class="form-control" id="floatingPassword" placeholder="Enter Your Name" required>
					<label for="name">Name</label>
				</div>
				<div class="form-floating mb-3">

					<input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
					<label for="email">Email address</label>
				</div>
				<div class="form-floating mb-3">
					<input name="phone" type="Phone" class="form-control" id="floatingPassword" placeholder="Enter Your Phone NO" required>
					<label for="phone">Phone</label>
				</div>
				<div class="form-floating">
					<textarea name="message"class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
					<label for="message">Your Message</label>
				</div>
				<div class="sub" style="margin-top: 10px;"></div>
				<button class="w-100 btn btn-lg btn-primary p-10" name="submit"type="submit">Submit</button>
		</div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>


