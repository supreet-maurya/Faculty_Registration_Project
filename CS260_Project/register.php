<?php
session_start();
$insert = false;
$emailexists = false;
$message = ""; // Variable to hold feedback message
if (isset($_POST['firstname'])) {
    
    // Check if the CAPTCHA text entered by the user matches the one stored in the session
    if ($_POST['captcha'] != $_SESSION['captcha'] ) {
        // CAPTCHA verification failed
        $message = "CAPTCHA verification failed!";
    } else {
        // CAPTCHA verification successful, continue with form processing

        // Database connection parameters
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "faculty";

        // Create connection
        $conn = mysqli_connect($server, $username, $password , $database );

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve form data
        $first_name = $_POST["firstname"];
        $last_name = $_POST["lastname"];
        $email = $_POST["email"];
        $category = $_POST["cast"];
        $password = $_POST["password"];
        $re_password = $_POST["re_password"];

        // Check if the email is already registered
        $query = "SELECT * FROM `faculty`.`registration` WHERE EMAIL = '$email'";
        $result = $conn->query($query);

        echo $q = $result->num_rows ;

        if ($result->num_rows > 0) {
            // Email already exists, return error message
            $emailexists = true;
            $message = "This email is already registered!";
        } else {

            //  if( $password == $re_password ) {
            // Continue with registration if email is not already registered

            // Insert data into the database
            $sql = "INSERT INTO `faculty`.`registration` (`FIRSTNAME`, `LASTNAME`, `EMAIL`, `CATEGORY`, `PASSWORD`, `APP_DATE`) VALUES ('$first_name', '$last_name', '$email', '$category', '$password', current_timestamp());";

            if ($conn->query($sql) == true) {
                // Registration successful, return success message
                $insert = true;
                $message = "Successfully registered!";
            } else {
                $message = "Error: " . $sql . "<br>" . $conn->error;
            }

            // }
            // else {
            //     echo "Password and Confirm Password should be same";
            // }

        }

        // Close connection
        $conn->close();
    }
}
// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty Login</title>
    <link rel="icon" href="IIT-Patna-logo.ico" type="image/x-icon" />
    <!-- Include CSS files for styling -->
    <link rel="stylesheet" type="text/css" href="stylesheet1.css" />
    <link rel="stylesheet" type="text/css" href="stylesheet2.css" />
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Hind&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&amp;display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&amp;display=swap" rel="stylesheet" />

    <style type="text/css">
        /* Additional CSS styles */
        body {
            background-color: lightgray;
            padding-top: 0px !important;
        }

        /* Control the image size */
        .col-md-6 img {
            max-width: 75%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>

</head>

<body>
    <!-- Header section -->
    <div class="container-fluid" style="background-color: #f7ffff; margin-bottom: 10px">
        <div class="container">
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Institute name and logo -->
                    <h3 style="
                text-align: center;
                color: #414002 !important;
                font-weight: bold;
                font-size: 2.3em;
                margin-top: 3px;
                font-family: 'Noto Sans', sans-serif;
              ">
                        भारतीय प्रौद्योगिकी संस्थान पटना
                    </h3>
                    <h3 style="
                text-align: center;
                color: #414002 !important;
                font-weight: bold;
                font-family: 'Oswald', sans-serif !important;
                font-size: 2.2em;
                margin-top: 0px;
              ">
                        Indian Institute of Technology Patna
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Application form section -->
    <h3 style="
        color: rgb(225, 4, 37);
        margin-bottom: 20px;
        font-weight: bold;
        text-align: center;
        font-family: 'Noto Serif', serif;
      ">
        Application for Faculty Position
    </h3>

    <style type="text/css">
        /* Additional CSS styles */
        .form-control {
            margin-bottom: 10px;
        }

        .back-imgs {
            background-size: cover;
        }
    </style>

    <!-- Form container -->
    <div class="container" style="border-radius: 10px; margin-top: 20px">
        <div class="row" style="
          border-width: 2px;
          border-style: solid;
          border-radius: 10px;
          box-shadow: 0px 1px 30px 1px #284d7a;
          height: 500px;
          background-color: #f7ffff;
        ">
            <!-- Logo section -->
            <div class="col-md-6 col-sm-6 col-xs-6">
                <img src="logo-iitp.png" style="
              display: block;
              border-radius: 100%;
              margin: 7.5% auto;
            " />
            </div>

            <!-- Form section -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h3 style="text-align: center; padding: 10px;">
                    <strong><u>CREATE YOUR PROFILE</u></strong>
                </h3>
                <br />
                <!-- Registration form -->
                <form action="register.php" method="post" class="form" role="form" name="registrationForm" onsubmit="return validateForm()">
                    <!-- First name and last name fields -->
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input class="form-control" value="" name="firstname" placeholder="First name" type="text" required="" autofocus="" />
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input class="form-control" name="lastname" value="" required="" placeholder="Last name" type="text" />
                        </div>
                    </div>
                    <!-- Email and category fields -->
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input class="form-control" name="email" placeholder="Your email" value="" required="" type="email" />
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <select id="cast" name="cast" class="form-control input-md" required="">
                                <option value="">Select Category</option>
                                <option value="UR">UR</option>
                                <option value="OBC">OBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                                <option value="PWD">PWD</option>
                                <option value="EWS">EWS</option>
                            </select>
                        </div>
                    </div>
                    <!-- Password and retype password fields -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <input class="form-control" name="password" placeholder="New password" required="" type="password" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <input class="form-control" name="re_password" placeholder="Retype - new password" required="" type="password" />
                        </div>
                    </div>
                    <!-- CAPTCHA verification -->
                    <div class="row">
                        
                        <div class="col-xs-6 ">
                  
                  <img src="captcha_image.php" alt="CAPTCHA security code">
                <!-- <input class="form-control" name="firstname" placeholder="First Name" type="text" require autofocus /> -->
                
                            </div>
                            <div class="col-xs-6 col-md-6">
                <input class="form-control" name="captcha" placeholder="Insert image text" required="" type="text">
           </div>
                    </div>

                    <!-- Note section -->
                    <div class="col-xs-12 col-md-12">
                        <h5>
                            <strong>
                                <font color="red">Note:</font>
                                <br />
                                <br />
                                <font color="#124f93">
                                    Applicant applying for more than one position/
                                    department should use
                                    <strong>
                                        <font color="red">different email id</font>
                                    </strong>
                                    for each application.
                                </font>
                            </strong>
                            <br />
                            <br />
                            <br />
                        </h5>
                        <!-- Submit button -->
                        <button class="btn btn-sm btn-primary" type="submit" name="submit" value="Submit">
                            Register
                        </button>

                        <!-- Login link -->
                        <strong class="pull-right" style="color: green">If registered
                            <a href="login.html" class="btn btn-sm btn-success">
                                Login Here</a></strong>
                    </div>
                    <!-- Feedback section -->
                    <style>
                        .feed-back {
                            display: block;
                            font-size: 20px;
                            font-weight: bold;
                            margin: 60px auto;
                            text-align: center;
                            width: 100%;
                            height: 40%;
                            padding: 0px;
                        }

                        .error-message {
                            color: red;
                        }

                        .success-message {
                            color: green;
                        }
                    </style>
                    <div class="feed-back col-xs-12 col-md-12">
                        <?php
                        // Display feedback messages based on registration status
                        if ($emailexists) {
                            echo "<p class='error-message'>$message</p>";
                        } else if ($insert) {
                            echo "<p class='success-message'>$message</p>";
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br />
    <div class="container">
        <!-- Footer section -->
        <div class="col-md-8 col-md-offset-2" style="
          text-align: center !important;
          font-weight: bold;
          color: black !important;
        "></div>
    </div>

    <div id="footer"></div>

    <!-- Include stylesheet -->
    <link rel="stylesheet" href="stylesheet4.css" id="videoNoteFrameStyle" />
    <!-- Include JavaScript -->
    <script src="register.js"></script>
</body>

</html>