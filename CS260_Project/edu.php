<?php

session_start();

$firstname = $_SESSION['first_name'];
$lastname = $_SESSION['last_name'];
$app_no = $_SESSION['application_number'];
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
if (isset($_POST['college_phd'])) {
        $university = $_POST["college_phd"];
        $department = $_POST["stream"];
        $Name_of_PhD_Supervisor = $_POST["supervisor"];
        $Year_of_Joining = $_POST["yoj_phd"];
        $Date_of_Successful_Thesis_Defence = $_POST["dod_phd"];
        $Date_of_Award = $_POST["doa_phd"];
        $Title_of_PhD_Thesis = $_POST["phd_title"];

        
            $sql = "INSERT INTO `faculty`.`details_of_phd` (`APP_NO` , `university`, `department`, `Name_of_PhD_Supervisor`, `Year_of_Joining`, `Date_of_Successful_Thesis_Defence`, `Date_of_Award` , `Title_of_PhD_Thesis` ) VALUES ('$app_no' , '$university', '$department', '$Name_of_PhD_Supervisor', '$Year_of_Joining', '$Date_of_Successful_Thesis_Defence', '$Date_of_Award' , '$Title_of_PhD_Thesis');";

            if ($conn->query($sql) == true) {
                // Registration successful, return success message
                $insert = true;
                echo $message = "Success!";
            } else {
                $message = "Error: " . $sql . "<br>" . $conn->error;
            }
        $pg_degree = $_POST['pg_degree'];
        $pg_university = $_POST["pg_college"];
        $pg_stream = $_POST['pg_subjects'];
        $pg_yoj = $_POST['pg_yoj'];
        $pg_yoc = $_POST['pg_yog'];
        $pg_duration = $_POST['pg_duration'];
        $pg_cgpa = $_POST['pg_perce'];
        $pg_division = $_POST['pg_rank'];

        $sql =  "INSERT INTO `pg_details` (`APP_NO` , `degree` , `university` , `stream` , `Year_of_Joining` , `Year_of_Completion` , `duration` , `cgpa` , `division` )
         VALUES ('$app_no' , '$pg_degree' , '$pg_university' , '$pg_stream' , '$pg_yoj' , '$pg_yoc', '$pg_duration' , '$pg_cgpa' , '$pg_division' );";
            
        if( $conn->query($sql) == true ) { 
            echo $m = "data insesrted in pg_details";
        }
        else {
            echo $t = "error in inserting data in pg_details";
        }

        $ug_degree = $_POST['ug_degree'];
        $ug_university = $_POST["pg_college"];
        $ug_stream = $_POST['ug_subjects'];
        $ug_yoj = $_POST['ug_yoj'];
        $ug_yoc = $_POST['ug_yog'];
        $ug_duration = $_POST['ug_duration'];
        $ug_cgpa = $_POST['ug_perce'];
        $ug_division = $_POST['ug_rank'];

        $sql =  "INSERT INTO `ug_details` (`APP_NO` , `degree` , `university` , `stream` , `yoj` , `yoc` , `duration` , `percentage` , `division` )
         VALUES ('$app_no' , '$ug_degree' , '$ug_university' , '$ug_stream' , '$ug_yoj' , '$ug_yoc', '$ug_duration' , '$ug_cgpa' , '$ug_division' );";
            
        if( $conn->query($sql) == true ) { 
            echo $m = "data insesrted in ug_details";
        }
        else {
            echo $t = "error in inserting data in ug_details";
        }

        $standard = $_POST['hsc_ssc'];
        $school = $_POST['school'];
        $year_of_passing = $_POST['passing_year'];
        $percentage = $_POST['s_perce'];
        $division = $_POST['s_rank'];

        $sql = "INSERT INTO `school_details` ( `standard` , `school` , `year_of_passing` , `percentage/grade` , `division` , `APP_NO` ) VALUES (  '$standard' , '$school' , '$year_of_passing' , '$percentage' , '$division' , '$app_no' );";
                
        if( $conn->query($sql) == true ) { 
            echo $m = "<br>data insesrted in school_details";
        }
        else {
            echo $t = "error in inserting data in school_details";
        }


        $standard = $_POST['hsc_ssc1'];
        $school = $_POST['school1'];
        $year_of_passing = $_POST['passing_year1'];
        $percentage = $_POST['s_perce1'];
        $division = $_POST['s_rank1'];

        $sql = "INSERT INTO `school_details` (`standard` , `school` , `year_of_passing` , `percentage/grade` , `division` , `APP_NO` ) VALUES ( '$standard' , '$school' , '$year_of_passing' , '$percentage' , '$division' , '$app_no'  );";
                
        if( $conn->query($sql) == true ) { 
            echo $m = "<br>data insesrted in school_detail";
        }
        else {
            echo $t = "error in inserting data in school_detail";
        }

        if (isset($_POST['submit']) ) {


                for($i = 0 ; $i < 1; $i++) {
                    $degree = $_POST['add_degree'][$i];
                    $college = $_POST['add_college'][$i];
                    $subjects = $_POST['add_subjects'][$i];
                    $yoj = $_POST['add_yoj'][$i];
                    $yog = $_POST['add_yog'][$i];
                    $duration = $_POST['add_duration'][$i];
                    $perce = $_POST['add_perce'][$i];
                    $rank = $_POST['add_rank'][$i];

                    $sql = "INSERT INTO `additional_qualifications` ( `APP_NO` , `degree` , `university` , `branch` , `yoj` , `yoc` , `duration` , `percentage` , `division` ) VALUES ( '$app_no' , '$degree' , '$college' , '$subjects' , '$yoj' , '$yog' , '$duration' , '$perce' , '$rank' );";

                    if( $conn->query($sql) == true ) { 
                        echo $m = "<br>data inserted in additional_qualifications";

                        header("location: emp_detail.php");
                    }
                    else {
                        echo $t = "error in inserting data in additional_qualifications";
                    }
                
                }
    
        }   
        }
        // Close connection
        $conn->close();
?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Academic Details</title>
	<link rel="stylesheet" type="text/css" href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/css/bootstrap-datepicker.css">
	<script type="text/javascript" src="https://ofa.iiti.ac.in/facrec_che_2023_july_02/js/jquery.js"></script>
	<script type="text/javascript" src="https://ofa.iiti.ac.in/facrec_che_2023_july_02/js/bootstrap.js"></script>
	<script type="text/javascript" src="https://ofa.iiti.ac.in/facrec_che_2023_july_02/js/bootstrap-datepicker.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">


	
</head>
<style type="text/css">
	body { background-color: lightgray; padding-top:0px!important;}

</style>
<body>
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
<!-- <div class="container-fluid" style="background-color: #f7ffff; margin-bottom: 10px;">
	<div class="container">
        <div class="row" style="margin-bottom:10px; ">
        	<div class="col-md-8 col-md-offset-2">

        		<!--  <img src="https://ofa.iiti.ac.in/facrec_che_2023_july_02/images/IITIndorelogo.png" alt="logo1" class="img-responsive" style="padding-top: 5px; height: 120px; float: left;"> -->

        		<!-- <h3 style="text-align:center;color:#414002!important;font-weight: bold;font-size: 2.3em; margin-top: 3px; font-family: 'Noto Sans', sans-serif;">भारतीय प्रौद्योगिकी संस्थान इंदौर</h3>
    			<h3 style="text-align:center;color: #414002!important;font-weight: bold;font-family: 'Oswald', sans-serif!important;font-size: 2.2em; margin-top: 0px;">Indian Institute of Technology Indore</h3>
    			 -->

        	</div>
        	

    	   
        </div>
		    <!-- <h3 style="text-align:center; color: #414002; font-weight: bold;  font-family: 'Fjalla One', sans-serif!important; font-size: 2em;">Application for Academic Appointment</h3> -->
    </div> -->
   </div> 
			<h3 style="color: #e10425; margin-bottom: 20px; font-weight: bold; text-align: center;font-family: 'Noto Serif', serif;" class="blink_me">Application for Faculty Position</h3>




<div class="container">




<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 well">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="ci_csrf_token" value="" />
        <fieldset>
         
             <legend>
              <div class="row">
                <div class="col-md-10">
                    <h4>Welcome : <font color="#025198"><strong><?php echo $firstname ?>&nbsp;<?php echo $lastname?></strong></font></h4>
                </div>
                <div class="col-md-2">
                <a href="login.php" class="btn btn-sm btn-success  pull-right">Logout</a>

                  <!-- <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/facultypanel/logout" class="btn btn-sm btn-success  pull-right">Logout</a> -->
                </div>
              </div>
            
            
    </legend>

<h4 style="text-align:center; font-weight: bold; color: #6739bb;">2. Educational Qualifications</h4>
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(A) Details of PhD *</div>
        <div class="panel-body">
          
          <span class="col-md-2 control-label" for="college_phd">University/Institute</span>  
          <div class="col-md-4">
          <input id="college_phd" value="123456789" name="college_phd" type="text" placeholder="University/Institute" class="form-control input-md" autofocus="" required="">
          </div>

          <span class="col-md-2 control-label" for="stream">Department</span>  
          <div class="col-md-4">
          <input id="stream" value="314 Koby Junctions" name="stream" type="text" placeholder="Department" class="form-control input-md" autofocus="">
          </div> 
          
          <span class="col-md-2 control-label" for="duration_phd">Name of PhD Supervisor</span>  
          <div class="col-md-4">
          <input id="supervisor" name="supervisor" type="text" placeholder="Name of Ph. D. Supervisor" value="Suscipit explicabo consequatur quis alias iure officiis odit quas veritatis." class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="yoj_phd">Year of Joining</span>  
          <!-- <div class="col-md-4">
          <input id="yoj_phd"  name="yoj_phd" type="text" placeholder="Year of Joining"  class="form-control input-md" required="">
          </div> -->
          <div class="col-md-4">
            <input id="yoj_phd" name="yoj_phd" type="number" placeholder="Year of Joining" class="form-control input-md" required="" min="1900" max="9999">
        </div>

          
          <div class="row">
          <div class="col-md-12">
          <span class="col-md-2 control-label" for="dod_phd">Date of Successful Thesis Defence</span>  
          <div class="col-md-4">
          <input id="dod_phd" name="dod_phd" type="text" data-provide="datepicker"  placeholder="Date of Defence"  class="form-control input-md datepicker" required="">
          </div>

          <span class="col-md-2 control-label" for="doa_phd">Date of Award</span>  
          <div class="col-md-4">
          <input id="doa_phd" name="doa_phd" type="text" data-provide="datepicker" placeholder="Date of Award" class="form-control input-md datepicker" required="">
          </div>
          </div>
          </div>
          <br />
          <span class="col-md-2 control-label" for="phd_title">Title of PhD Thesis</span>  
          <div class="col-md-10">
          <input id="phd_title" value="Investor Implementation Fa" name="phd_title" type="text" placeholder="Title of PhD Thesis" class="form-control input-md" required="">
          </div>

      </div>
    </div>
  </div>
</div>


<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(B) Academic Details - M. Tech./ M.E./ PG Details</div>
        <div class="panel-body">
          
          <span class="col-md-2 control-label" for="pg_degree">Degree/Certificate</span>  
          <div class="col-md-4">
          <input id="pg_degree" value="2024-06-02 05:14:35" name="pg_degree" type="text" placeholder="Degree/Certificate" class="form-control input-md" autofocus="">
          </div>

          <span class="col-md-2 control-label" for="pg_college">University/Institute</span>  
          <div class="col-md-4">
          <input id="pg_college" value="Consequuntur laudantium voluptatem quibusdam blanditiis minima ut." name="pg_college" type="text" placeholder="University/Institute" class="form-control input-md" autofocus="">
          </div> 
          
          <span class="col-md-2 control-label" for="pg_subjects">Branch/Stream</span>  
          <div class="col-md-4">
          <input id="pg_subjects" name="pg_subjects" type="text" placeholder="Branch/Stream" value="Veritatis molestiae nisi veniam labore." class="form-control input-md" >
          </div>

          <span class="col-md-2 control-label" for="pg_yoj">Year of Joining</span>  
          <div class="col-md-4">
          <input id="pg_yoj" value="Vitae illum autem dicta facilis ab suscipit minus voluptatem." name="pg_yoj" type="number" placeholder="Year of Joining" class="form-control input-md" >
          </div>
          
          <div class="row">
          <div class="col-md-12">
          <span class="col-md-2 control-label" for="pg_yog">Year of Completion</span>  
          <div class="col-md-4">
          <input id="pg_yog" name="pg_yog" type="number" placeholder="Year of Completion" value="Expedita vero suscipit explicabo." class="form-control input-md" >
          </div>

          <span class="col-md-2 control-label" for="pg_duration">Duration (in years)</span>  
          <div class="col-md-4">
          <input id="pg_duration" name="pg_duration" type="number" placeholder="Duration" value="2024" class="form-control input-md" >
          </div>

          <span class="col-md-2 control-label" for="pg_perce">Percentage/ CGPA</span>  
          <div class="col-md-4">
          <input id="pg_perce" name="pg_perce" type="text" placeholder="Percentage/ CGPA" value="1802 Bogan Cape" class="form-control input-md" >
          </div>

          <span class="col-md-2 control-label" for="pg_rank">Division/Class</span>  
          <div class="col-md-4">
          <input id="pg_rank" name="pg_rank" type="text" placeholder="Division/Class" value="Vitae tenetur dicta aperiam provident sunt molestiae deleniti. Voluptates suscipit illo eum animi reprehenderit saepe. Deserunt fugiat necessitatibus." class="form-control input-md" >
          </div>

          </div>
          </div>
          <br />
          

      </div>
    </div>
  </div>
</div>





<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(C) Academic Details - B. Tech /B.E. / UG Details *</div>
        <div class="panel-body">
          
          <span class="col-md-2 control-label" for="ug_degree">Degree/Certificate</span>  
          <div class="col-md-4">
          <input id="ug_degree" value="2024-01-04 02:40:00" name="ug_degree" type="text" placeholder="Degree/Certificate" class="form-control input-md" autofocus="" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_college">University/Institute</span>  
          <div class="col-md-4">
          <input id="ug_college" value="Inventore quisquam pariatur sapiente assumenda eaque facere est est." name="ug_college" type="text" placeholder="University/Institute" class="form-control input-md" autofocus="">
          </div> 
          
          <span class="col-md-2 control-label" for="ug_subjects">Branch/Stream</span>  
          <div class="col-md-4">
          <input id="ug_subjects" name="ug_subjects" type="text" placeholder="Branch/Stream" value="Facilis optio facere maiores laboriosam." class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_yoj">Year of Joining</span>  
          <div class="col-md-4">
          <input id="ug_yoj" value="Quisquam quos voluptas nesciunt odio cupiditate ratione tenetur." name="ug_yoj" type="number" placeholder="Year of Joining" class="form-control input-md" required="">
          </div>
          
          <div class="row">
          <div class="col-md-12">
          <span class="col-md-2 control-label" for="ug_yog">Year of Completion</span>  
          <div class="col-md-4">
          <input id="ug_yog" name="ug_yog" type="number" placeholder="Year of Completion" value="Debitis nihil blanditiis iste architecto repellat." class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_duration">Duration (in years)</span>  
          <div class="col-md-4">
          <input id="ug_duration" name="ug_duration" type="number" placeholder="Duration" value="2023" class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_perce">Percentage/ CGPA</span>  
          <div class="col-md-4">
          <input id="ug_perce" name="ug_perce" type="text" placeholder="Percentage/ CGPA" value="224 Sawayn Manors" class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_rank">Division/Class</span>  
          <div class="col-md-4">
          <input id="ug_rank" name="ug_rank" type="text" placeholder="Division/Class" value="Harum et ea tempore sit." class="form-control input-md" required="">
          </div>

          

          </div>
          </div>
          <br />
          

      </div>
    </div>
  </div>
</div>


<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(D) Academic Details - School *
        
      </div>
        <div class="panel-body">
          <table class="table table-bordered">
              
              <tr height="30px">
                <th class="col-md-3"> 10th/12th/HSC/Diploma </th>
                <th class="col-md-3"> School </th>
                <th class="col-md-1"> Year of Passing</th>
                <th class="col-md-2"> Percentage/ Grade </th>
                <th class="col-md-2"> Division/Class </th>
              </tr>
              
              
              <tr height="60px">
                <td class="col-md-2">  
                    <input id="hsc_ssc1" name="hsc_ssc" type="text" value="12th/HSC/Diploma" placeholder="" class="form-control input-md" readonly="" required=""> 
                </td>

                <td class="col-md-2"> 
                    <input id="school1" name="school" type="text" value="Rem sunt quasi voluptatum voluptas voluptate culpa."  placeholder="School" class="form-control input-md" maxlength="80" required=""> 
                  </td>
                <td class="col-md-2"> 
                  <input id="passing_year1" name="passing_year" type="text" value="GgAcE"  placeholder="Passing Year" class="form-control input-md" maxlength="5" required=""> 
                </td>

              

                <td class="col-md-2"> 
                  <input id="s_perce1" name="s_perce" type="text" value="693 V"  placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                </td>

                 
                <td class="col-md-2"> 
                  <input id="s_rank1" name="s_rank" type="text" value="Ex qu"  placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                </td>



              </tr>
              
              <tr height="60px">
                <td class="col-md-2">  
                    <input id="hsc_ssc2" name="hsc_ssc1" type="text" value="10th" placeholder="" class="form-control input-md" readonly="" required=""> 
                </td>

                <td class="col-md-2"> 
                    <input id="school2" name="school1" type="text" value="Aperiam libero magnam dolores aliquam facilis facere."  placeholder="School" class="form-control input-md" maxlength="80" required=""> 
                  </td>
                <td class="col-md-2"> 
                  <input id="passing_year2" name="passing_year1" type="text" value="QfPg2"  placeholder="Passing Year" class="form-control input-md" maxlength="5" required=""> 
                </td>

              

                <td class="col-md-2"> 
                  <input id="s_perce2" name="s_perce1" type="text" value="393 H"  placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                </td>

                 
                <td class="col-md-2"> 
                  <input id="s_rank2" name="s_rank1" type="text" value="Fugia"  placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                </td>


              </tr>
                            
           
          </table>

      </div>
    </div>
  </div>
</div>
 
 
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(E) Additional Educational Qualification (If any)
        <button class="btn btn-sm btn-danger" id="add_more_acde">Add More</button>
      </div>
        <div class="panel-body">
          <table class="table table-bordered">
              <tbody id="acde">

              <style>
                /* Custom CSS to set the width of the first column */
                .custom-col-width {
                    width: 520px;
                    /* max-width: 5%; */
                }
                </style>
              
              
              <tr height="30px">
                <th class="custom-col-width" style = "width:20px"> S/No. </th>
                <th class="col-md-2"> Degree/Certificate </th>
                <th class="col-md-2"> University/Institute </th>
                <th class="col-md-2"> Branch/Stream </th>
                <th class="col-md-1"> Year of Joining</th>
                <th class="col-md-1"> Year of Completion </th>
                <th class="col-md-1"> Duration (in years)</th>
                <th class="col-md-3"> Percentage/ CGPA </th>
                <th class="col-md-3"> Division/Class</th>
              </tr>
              

            

              <tr height="60px">

                <td class="custom-col-width"  style = "width:10px%" >  
                    <input id="slno" name="slno[]" type="text" value="1" placeholder="S/No." class="form-control input-md sl" maxlength="10" required=""> 
                </td>
                <td class="col-md-2" >  
                    <input id="add_degree1" name="add_degree[]" type="text" value="" placeholder="Degree" class="form-control input-md" maxlength="10" required=""> 
                </td>

                <td class="col-md-2"> 
                    <input id="add_college1" name="add_college[]" type="text" value="Hegmann Mews"  placeholder="College" class="form-control input-md" maxlength="80" required=""> 
                  </td>

                 <td class="col-md-2"> 
                    <input id="add_subjects1" name="add_subjects[]" type="text" value="Conner"  placeholder="Subjects" class="form-control input-md" maxlength="80" required=""> 
                  </td>

                <td class="col-md-2"> 
                  <input id="add_yoj1" name="add_yoj[]" type="text" value=""  placeholder="Year of Joining" class="form-control input-md" maxlength="5" required=""> 
                </td>
                <td class="col-md-2"> 
                  <input id="add_yog1" name="add_yog[]" type="text" value=""  placeholder="Year of Graduation" class="form-control input-md" maxlength="5" required=""> 
                </td>
                <td class="col-md-2"> 
                  <input id="add_duration1" name="add_duration[]" type="text" value=""  placeholder="Duration" class="form-control input-md" maxlength="4" required=""> 
                </td>

                <td class="col-md-2"> 
                  <input id="add_perce1" name="add_perce[]" type="text" value=""  placeholder="Percentage" class="form-control input-md" maxlength="5" required="">
                </td>

                <td class="col-md-2"> 
                  <input id="add_rank1" name="add_rank[]" type="text" value=""  placeholder="Percentage" class="form-control input-md" maxlength="5" required="">
                </td>
                
              </tr>

              
            </tbody>
          </table>

      </div>
    </div>
  </div>
</div>
     <!-- Form Name -->



<div class="form-group">
  
  <div class="col-md-1">
    <a href="emp_detail.php" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-fast-backward"></i></a>
  </div>

  <div class="col-md-11">
    <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right" style="margin-left: 75%;">SAVE & NEXT</button>
    
  </div>

    
</div>
          
</fieldset>
</form>

        </div>
    </div>
</div>




<script type="text/javascript">
  function yearcalc()
  { 
    // alert('hi');
    var num1=document.getElementById("yoj").value;
    var num2=document.getElementById("yog").value;

    var duration_year=parseFloat(num2)-parseFloat(num1);
    // alert(duration_year);
    document.getElementById("result_test").value = duration_year ;
   
  }

 
</script>

<div id="footer"></div>
</body>
</html>

<script type="text/javascript">
	
	function blinker() {
	    $('.blink_me').fadeOut(500);
	    $('.blink_me').fadeIn(500);
	}

	setInterval(blinker, 1000);
</script>







<script type="text/javascript">
var tr="";
var counter_acde=2;
  $(document).ready(function(){
    $("#add_more_acde").click(function(){
    
        create_tr();
        create_input('add_serail[]', counter_acde,'add_serial'+counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_degree[]', 'Degree','add_degree'+counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_college[]', 'College', 'add_college'+counter_acde,'acde', counter_acde, 'acde');
        create_input('add_subjects[]', 'Subjects', 'add_subjects'+counter_acde,'acde', counter_acde, 'acde');
        create_input('add_yoj[]', 'Year Of Joining', 'add_yoj'+counter_acde,'acde', counter_acde, 'acde');
        create_input('add_yog[]', 'Year Of Graduation','add_yog'+counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_duration[]', 'Duration','add_duration'+counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_perce[]', 'Percentage','add_perce'+counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_rank[]', 'Rank', 'add_rank'+counter_acde,'acde', counter_acde,'acde',true);
        counter_acde++;
        return false;
    });
    
  });
  function create_tr()
  {
    tr=document.createElement("tr");
  }
  function for_date_picker(obj)
  {
    obj.setAttribute("data-provide", "datepicker");
    obj.className += " datepicker";
    return obj;

  }

  function create_input(t_name, place_value, id, tbody_id, counter, remove_name, btn=false, datepicker_set=false, length=80)
  {
    var input=document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("name", t_name);
    input.setAttribute("id", id);
    input.setAttribute("placeholder", place_value);
    input.setAttribute("class", "form-control input-md");
    input.setAttribute("required", "");
    if(datepicker_set==true)
    {
      input=for_date_picker(input);
    }
    var td=document.createElement("td");
    td.appendChild(input);
    if(btn==true)
    {
      // alert();
      var but=document.createElement("button");
      but.setAttribute("class", "close");
      but.setAttribute("onclick", "remove_row('"+remove_name+"','"+counter+"')");
      but.innerHTML="<span style='color:red; font-weight:bold;'>x</span>";
      td.appendChild(but);
    }
    tr.setAttribute("id", "row"+counter);
    tr.appendChild(td);
    document.getElementById(tbody_id).appendChild(tr);
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
  } 
  function remove_row(remove_name, n)
  {
    var tab=document.getElementById(remove_name);
    var tr=document.getElementById("row"+n);
    tab.removeChild(tr);
  }
</script>

<script type="text/javascript">
    $(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
.floating-box {
    display: inline-block;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;  
}
</style>
<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
label{
  padding: 0 !important;
}
hr{
  border-top: 1px solid #025198 !important;
}
span{
  font-size: 1.2em;
  font-family: 'Oswald', sans-serif!important;
  text-align: left!important;
  padding: 0px 10px 0px 0px!important;
  /*margin-bottom: 20px!important;*/

}
hr{
  border-top: 1px solid #025198 !important;
  border-style: dashed!important;
  border-width: 1.2px;
}

.panel-heading{
  font-size: 1.3em;
  font-family: 'Oswald', sans-serif!important;
  letter-spacing: .5px;
}
.btn-primary {
  padding: 9px;
}
</style>









//validation

<script type="text/javascript">

document.getElementById('submit').addEventListener('click', function(event) {
  var isValid = true;

  // Validate PhD details
  var college_phd = document.getElementById('college_phd').value;
  var stream = document.getElementById('stream').value;
  var supervisor = document.getElementById('supervisor').value;
  var yoj_phd = document.getElementById('yoj_phd').value;
  var dod_phd = document.getElementById('dod_phd').value;
  var doa_phd = document.getElementById('doa_phd').value;
  var phd_title = document.getElementById('phd_title').value;

  if (college_phd === '' || stream === '' || supervisor === '' || yoj_phd === '' || dod_phd === '' || doa_phd === '' || phd_title === '') {
    isValid = false;
    alert('Please fill in all required fields in the PhD section.');
  }

  // Validate M.Tech./M.E./PG details
  var pg_degree = document.getElementById('pg_degree').value;
  var pg_college = document.getElementById('pg_college').value;
  var pg_subjects = document.getElementById('pg_subjects').value;
  var pg_yoj = document.getElementById('pg_yoj').value;
  var pg_yog = document.getElementById('pg_yog').value;
  var pg_duration = document.getElementById('pg_duration').value;
  var pg_perce = document.getElementById('pg_perce').value;
  var pg_rank = document.getElementById('pg_rank').value;

  if (pg_degree === '' || pg_college === '' || pg_subjects === '' || pg_yoj === '' || pg_yog === '' || pg_duration === '' || pg_perce === '' || pg_rank === '') {
    isValid = false;
    alert('Please fill in all required fields in the M.Tech./M.E./PG section.');
  }

  // Validate B.Tech./B.E./UG details
  var ug_degree = document.getElementById('ug_degree').value;
  var ug_college = document.getElementById('ug_college').value;
  var ug_subjects = document.getElementById('ug_subjects').value;
  var ug_yoj = document.getElementById('ug_yoj').value;
  var ug_yog = document.getElementById('ug_yog').value;
  var ug_duration = document.getElementById('ug_duration').value;
  var ug_perce = document.getElementById('ug_perce').value;
  var ug_rank = document.getElementById('ug_rank').value;

  if (ug_degree === '' || ug_college === '' || ug_subjects === '' || ug_yoj === '' || ug_yog === '' || ug_duration === '' || ug_perce === '' || ug_rank === '') {
    isValid = false;
    alert('Please fill in all required fields in the B.Tech./B.E./UG section.');
  }

  // Validate School details
  var hsc_ssc1 = document.getElementById('hsc_ssc1').value;
  var school1 = document.getElementById('school1').value;
  var passing_year1 = document.getElementById('passing_year1').value;
  var s_perce1 = document.getElementById('s_perce1').value;
  var s_rank1 = document.getElementById('s_rank1').value;

  if (hsc_ssc1 === '' || school1 === '' || passing_year1 === '' || s_perce1 === '' || s_rank1 === '') {
    isValid = false;
    alert('Please fill in all required fields in the School details section.');
  }

  var hsc_ssc2 = document.getElementById('hsc_ssc2').value;
  var school2 = document.getElementById('school2').value;
  var passing_year2 = document.getElementById('passing_year2').value;
  var s_perce2 = document.getElementById('s_perce2').value;
  var s_rank2 = document.getElementById('s_rank2').value;

  if (hsc_ssc2 === '' || school2 === '' || passing_year2 === '' || s_perce2 === '' || s_rank2 === '') {
    isValid = false;
    alert('Please fill in all required fields in the School details section.');
  }

  if (!isValid) {
    event.preventDefault();
  }
});


</script>
