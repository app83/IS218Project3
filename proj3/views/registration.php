<?php include('abstract-views/header.php'); ?>

<body>

<h2>Registration Form</h2>

<form action="../index.php" method="POST">
    <input type="hidden" name="action" value ="register_form">
    <input type="hidden" name="userId" value ="userId">

    First Name: <input type=text name="fname" id="fname" ><br><br>
    Last Name: <input type=text name="lname" id="lname" ><br><br>
    Birthday: <input type=date name="birthday" id="birthday" ><br><br>
    Email: <input type=email name="email" id="email" ><br><br>
    Password: <input type=password name="password" id="password" ><br><br>
    <input type=submit value="Register">

</form>
Existing User? <a href="login.php">Login Here</a>
</body>

<?php include('abstract-views/footer.php'); ?>