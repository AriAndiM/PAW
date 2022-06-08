<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomer 2</title>
</head>
<body>
    <?php
        // define variables and set to empty values
        $nameError = $emailError = $genderError = $websiteError = "";
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameError = "Name is required";
            } else {
                $name = test($_POST["name"]);
            }
            if (empty($_POST["email"])) {
                $emailError = "Email is required";
            } else {
                $email = test($_POST["email"]);
            }
            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test($_POST["website"]);
            }
            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test($_POST["comment"]);
            }
            if (empty($_POST["gender"])) {
                $genderError = "Gender is required";
            } else {
                $gender = test($_POST["gender"]);
            }
        }

        function test($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
        }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p style="color: red;">* required field</p>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <div>
        Name: <input type="text" name="name" value="<?php echo $name ;?>"><span style="color: red;" class="error" > * <?php echo $nameError; ?></span> <br><br>
        </div>
        <div>
        E-mail: <input type="text" name="email" value="<?php echo $email ;?>"> <span style="color: red;" class="error"> * <?php echo $emailError ;?></span> <br><br>
        </div>
        <div>
        Website: <input type="text" name="website" value="<?php echo $website ;?>"><span style="color: red;" class="error"> <?php echo $websiteError ;?></span> <br><br>
        </div>
        <div>
        Comment: <textarea name="comment" id="" cols="35" rows="5" name="comment" ></textarea><?php echo $comment; ?><br><br>
        </div>
        <div>
        Gender: <input type="radio" name="gender" id="female" >Female
                <input type="radio" name="gender" id="male" >Male
                <input type="radio" name="gender" id="other">Other
        <span style="color: red;" class="error"> *<?php echo $genderError; ?></span> <br><br>
        </div>
        <button type="submit">Submit</button>
    </form>
    <h2>Your Input :</h2>
</body>
</html>