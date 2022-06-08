<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomer 4</title>
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
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $nameError = "Only letters and white space allowed"; 
                }
            }
            if (empty($_POST["email"])) {
                $emailError = "Email is required";
            } else {
                $email = test($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailError = "Invalid email format"; 
                }
            }
            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test($_POST["website"]);
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteError = "Invalid URL"; 
                }
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
          return $data;
        }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p style="color: red;">* required field</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        Name: <input type="text" name="name" value="<?php echo $name ;?>"><span style="color: red;" class="error" > * <?php echo $nameError; ?></span> <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email ;?>"> <span style="color: red;" class="error"> * <?php echo $emailError ;?></span> <br><br>
        Website: <input type="text" name="website" value="<?php echo $website ;?>"><span style="color: red;" class="error"> <?php echo $websiteError ;?></span> <br><br>
        Comment: <textarea name="comment" id="" cols="35" rows="5" name="comment" ><?php echo $comment; ?></textarea><br><br>
        Gender: <input type="radio" name="gender" id="female" value="Female"<?php if(isset($gender) && $gender=="Female") echo "checked"?>>Female
                <input type="radio" name="gender" id="male" value="Male"<?php if(isset($gender) && $gender=="Male") echo "checked"?>>Male
                <input type="radio" name="gender" id="other" value="Other"<?php if(isset($gender) && $gender=="Other") echo "checked"?>>Other
        <span style="color: red;" class="error"> *<?php echo $genderError; ?></span> <br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
        echo "<h2>Your Input:</h2>";
        echo $name."<br>";
        echo $email."<br>";
        echo $website."<br>";
        echo $comment."<br>";
        echo $gender."<br>";
    ?>
</body>
</html>