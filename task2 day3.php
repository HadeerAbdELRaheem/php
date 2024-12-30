<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #form {
            max-width: 400px;
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            height:80vh;
            
        }
    
        #form label {
            
            margin-bottom: 5px;
            font-weight: bold;
        }
    
        #form input[type="text"],
        #form input[type="email"],
        #form input[type="number"],
        #form textarea,
        #form select {
            width: 50%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    
        #form input[type="radio"],
        #form input[type="checkbox"] {
            margin-right: 5px;
        }
    
        #form input[type="submit"] {
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        #form input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error{
            color:red;
        }
    </style>
</head>
<body>
<?php
$nameErr = $emailErr = $genderErr = $agreeErr = "";
$name = $email = $gender = $group = $classdetails=$select ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = $_POST["name"];
      
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }
    
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = $_POST["email"];
      }

      if(empty($_POST["agree"])){
        $agreeErr="Agree is required";
      } 

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = $_POST["gender"];
      }
      if(!empty($_POST["Courses"])){
        $select=$_POST  ["Courses"];    
    }
    if(!empty($_POST["group"])){
        $group=$_POST["group"];    
    }
    if(!empty($_POST["details"])){
        $classdetails=$_POST["details"];    
    }
    }

?>
<form id="form"action="<?php $_PHP_SELF ?>" method="POST">
        <label >Name</label>
        <input type="text" name="name" value="<?= $name; ?> "> <span class="error">* <?php echo $nameErr;?></span> <br>
        <label >E-mail</label>
        <input type="email" name="email"value="<?= $email; ?> "> <span class="error">* <?php echo $emailErr;?></span><br>
        <label >Group#</label>
        <input type="text" name="group" value="<?= $group; ?> "><br>
        <label >Class details</label>
        <textarea name="details" rows="5" cols="40" ><?=($classdetails); ?> ></textarea><br>
        
        <label >Gender</label>
        <input type="radio" name="gender"value="female" <?= $gender == "female" ? "checked" : ""; ?>> Female
        <input type="radio" name="gender" value="male"  <?= $gender == "male" ? "checked" : ""; ?>>Male <span class="error">* <?php echo $genderErr;?></span><br>
        <label >Select Courses</label>
        <select name="Courses[]" multiple>
            <option value="html" <?= in_array("html", (array)$select) ? "selected" : ""; ?>>HTML</option>
            <option value="javascript" <?= in_array("javascript", (array)$select) ? "selected" : ""; ?>>JavaScript</option>
            <option value="php" <?= in_array("php", (array)$select) ? "selected" : ""; ?>>PHP</option>
            <option value="mysql" <?= in_array("mysql", (array)$select) ? "selected" : ""; ?>>MySQL</option>
        </select><br>
        <label >Agree</label>
        <input type="checkbox"  name="agree" value="agree"><span class="error">* <?php echo $agreeErr;?></span><br>
        <input type="submit" value="Submit">
    </form>

    <?php
echo "<h2>Your Input:</h2>";
echo "Name:".$name ."<br>";
echo "E-mail:".$email."<br>";
echo "Group:".$group ."<br>";
echo "Class details:".$classdetails."<br>";
echo "Gender:" .$gender."<br>";

echo "Select Courses:". implode(", ", $select) . "<br>";
?>

</body>
</html>