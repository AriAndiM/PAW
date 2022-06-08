<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomer 2</title>
</head>
<body>
<h2>PHP Form Validation Example</h2>
    <p style="color: red;">* required field</p>
    <form action="#" method="POST">
        Name: <input type="text" name="name"><span style="color: red;"> *</span> <br><br>
        E-mail: <input type="text" name="email"> <span style="color: red;"> *</span> <br><br>
        Website: <input type="text" name="website"> <br><br>
        Comment: <textarea name="" id="" cols="35" rows="5" name="comment"></textarea><br><br>
        Gender: <input type="radio" name="gender" id="female">Female
                <input type="radio" name="gender" id="male">Male
                <input type="radio" name="gender" id="other">Other
        <span style="color: red;"> *</span> <br><br>
        <button type="submit">Submit</button>
        <h2>Your Input :</h2>
    </form>
</body>
</html>