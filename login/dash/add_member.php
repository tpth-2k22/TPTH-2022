<?php
ob_start();
?>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../index.php");
        die();
    }

    include '../config.php';
    $email = $_SESSION['SESSION_EMAIL'];
    $sql="Select * from users where email = '{$email}'";
    $query= mysqli_query($conn,$sql);
    $arr=mysqli_fetch_assoc($query);

    if(isset($_POST['submitfrom'])){
            if(!$_POST['user_name'] or !$_POST['user_email'] or !$_POST['user_organization']){
                echo "<script>alert('enter all the fields');</script>";}
                
            $name = mysqli_real_escape_string($conn, $_POST['user_name']);
            $email = mysqli_real_escape_string($conn, $_POST['user_email']);
            $organization = mysqli_real_escape_string($conn, $_POST['user_organization']);
            var_dump($name);
            var_dump($email);
            var_dump($organization);
            $query=mysqli_query($conn,"select * from members where email='$email'");
            // var_dump(mysqli_fetch_assoc($query));
            if(mysqli_num_rows($query)>0){
                echo "<script>alert('This Member already exists');</script>";
            }
            else{
                $team_name=mysqli_real_escape_string($conn,$arr['team_name']);
                var_dump($team_name);
                $sql2= "INSERT INTO members (team_name, name, email, organization) VALUES ('{$team_name}', '{$name}', '{$email}', '{$organization}')";
                $result2=mysqli_query($conn, $sql2);
                var_dump($result2);
                if($result2){
                    header("Location: https://tph2022.in/login/dash/members.php");
                    ob_end_flush();
                }
                else{
                    echo "something went wrong";
                }
            }

            
    }

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Members</title>
    <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style type="text/css">
        *, *:before, *:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  
  body {
    font-family: 'Poppins', sans-serif;
    color: #384047;
  }
  
  form {
    max-width: 300px;
    margin: 10px auto;
    padding: 10px 20px;
    background: #f4f7f8;
    border-radius: 8px;
  }
  
  h1 {
    margin: 0 0 30px 0;
    text-align: center;
  }
  
  input[type="text"],
  input[type="password"],
  input[type="date"],
  input[type="datetime"],
  input[type="email"],
  input[type="number"],
  input[type="search"],
  input[type="tel"],
  input[type="time"],
  input[type="url"],
  textarea,
  select {
    background: rgba(255,255,255,0.1);
    border: none;
    font-size: 16px;
    height: auto;
    margin: 0;
    outline: 0;
    padding: 15px;
    width: 100%;
    background-color: #e8eeef;
    color: #8a97a0;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
  }
  
  input[type="radio"],
  input[type="checkbox"] {
    margin: 0 4px 8px 0;
  }
  
  select {
    padding: 6px;
    height: 32px;
    border-radius: 2px;
  }
  
  button {
    padding: 19px 39px 18px 39px;
    color: #FFF;
    background-color: #4bc970;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    border-radius: 5px;
    width: 100%;
    border: 1px solid #3ac162;
    border-width: 1px 1px 3px;
    box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
    margin-bottom: 10px;
  }
  
  fieldset {
    margin-bottom: 30px;
    border: none;
  }
  
  legend {
    font-size: 1.4em;
    margin-bottom: 10px;
  }
  
  label {
    display: block;
    margin-bottom: 8px;
  }
  
  label.light {
    font-weight: 300;
    display: inline;
  }
  
  .number {
    background-color: #5fcf80;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 100%;
  }
  
  @media screen and (min-width: 480px) {
  
    form {
      max-width: 480px;
    }
  
  }
  
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                <h1>Add Member</h1>

                <fieldset>

                    <!-- <legend><span class="number">1</span>Add Member</legend> -->

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="user_name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="mail" name="user_email" required>

                    <label for="password">Organization</label>
                    <input type="text" id="organization" name="user_organization" required>

                </fieldset>
               
                <button type="submit" name="submitfrom">Add</button>

            </form>
        </div>
    </div>

</body>

</html>