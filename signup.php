<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="stylesheet" href="css\signin.css">
</head>
<body>
    <form action="connect.php" method="POST" style="border:1px solid #ccc">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
            
          <label for="First name"><b>First Name</b></label>
          <input type="text" placeholder="Enter your lirst name" name="FirstName" required>

          <label for="Last name"><b>Last Name </b></label>
          <input type="text" placeholder="Enter your last name" name="LastName" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="Repassword" required>

          <label for="phn number"><b>Phone Number</b></label>
          <input type="number" placeholder="phone number" name="number" required>
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
      
          <div class="clearfix">
            <button onclick="history.back()" type="button" class="cancelbtn">Cancel</button>
            <input type="submit" name="save" class="signupbtn">
          </div>
        </div>
      </form>
</body>
</html>