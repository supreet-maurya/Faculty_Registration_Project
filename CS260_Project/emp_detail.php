



<html>
<head>
	<title>Employment Details</title>
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
<div class="container-fluid" style="background-color: #f7ffff; margin-bottom: 10px;">
	<div class="container">
        <div class="row" style="margin-bottom:10px; ">
        	<div class="col-md-8 col-md-offset-2">

        		<!--  <img src="https://ofa.iiti.ac.in/facrec_che_2023_july_02/images/IITIndorelogo.png" alt="logo1" class="img-responsive" style="padding-top: 5px; height: 120px; float: left;"> -->

        		<h3 style="text-align:center;color:#414002!important;font-weight: bold;font-size: 2.3em; margin-top: 3px; font-family: 'Noto Sans', sans-serif;">भारतीय प्रौद्योगिकी संस्थान इंदौर</h3>
    			<h3 style="text-align:center;color: #414002!important;font-weight: bold;font-family: 'Oswald', sans-serif!important;font-size: 2.2em; margin-top: 0px;">Indian Institute of Technology Indore</h3>
    			

        	</div>
        	

    	   
        </div>
		    <!-- <h3 style="text-align:center; color: #414002; font-weight: bold;  font-family: 'Fjalla One', sans-serif!important; font-size: 2em;">Application for Academic Appointment</h3> -->
    </div>
   </div> 
			<h3 style="color: #e10425; margin-bottom: 20px; font-weight: bold; text-align: center;font-family: 'Noto Serif', serif;" class="blink_me">Application for Faculty Position</h3>


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
<script type="text/javascript">
    $(function () {
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true
        });
    });
</script>

<script type="text/javascript">
var tr="";
var counter_exp=1;
var counter_t_exp=1;
var counter_r_exp=1;
var counter_ind_exp=1;


  $(document).ready(function(){
    
    $("#add_more_exp").click(function(){
        create_tr();
        create_serial('exp');
        create_input('position[]', 'Position','position'+counter_exp, 'exp',counter_exp, 'exp');
        create_input('employer[]', 'Organization/Institution', 'employer'+counter_exp,'exp',counter_exp, 'exp');
        create_input('doj[]', 'DD/MM/YYYY', 'doj'+counter_exp,'exp',counter_exp, 'exp');
        create_input('dol[]', 'DD/MM/YYYY', 'dol'+counter_exp,'exp',counter_exp, 'exp');
        create_input('exp_duration[]', 'Duration','exp_duration'+counter_exp, 'exp',counter_exp,'exp', true);
        counter_exp++;
        return false;
    });

    $("#add_more_t_exp").click(function(){
        create_tr();
        create_serial('t_exp');
        create_input('te_position[]', 'Position','te_position'+counter_t_exp, 't_exp',counter_t_exp, 't_exp');
        create_input('te_employer[]', 'Employer', 'te_employer'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_course[]', 'Courses', 'te_course'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_ug_pg[]', 'UG/PG', 'te_ug_pg'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_no_stu[]', 'No. of Students', 'te_no_stu'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_doj[]', 'DD/MM/YYYY', 'te_doj'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_dol[]', 'DD/MM/YYYY', 'te_dol'+counter_t_exp,'t_exp',counter_t_exp, 't_exp');
        create_input('te_duration[]', 'Duration', 'te_duration'+counter_t_exp,'t_exp',counter_t_exp, 't_exp', true);
        counter_t_exp++;
        return false;
    });

    
    $("#add_more_r_exp").click(function(){
        create_tr();
        create_serial('r_exp');
        create_input('r_exp_position[]', 'Position','r_exp_position'+counter_r_exp, 'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_institute[]', 'Institute', 'r_exp_institute'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_supervisor[]', 'Supervisor', 'r_exp_supervisor'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_doj[]', 'DD/MM/YYYY', 'r_exp_doj'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_dol[]', 'DD/MM/YYYY', 'r_exp_dol'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp');
        create_input('r_exp_duration[]', 'Duration', 'r_exp_duration'+counter_r_exp,'r_exp',counter_r_exp, 'r_exp', true);
        counter_r_exp++;
        return false;
    });



$("#add_more_ind_exp").click(function(){
    create_tr();
    create_serial('ind_exp');
    create_input('org[]', 'Organization','org'+counter_ind_exp, 'ind_exp',counter_ind_exp, 'ind_exp');
    create_input('work[]', 'Work Profile', 'work'+counter_ind_exp,'ind_exp',counter_ind_exp, 'ind_exp');
    create_input('ind_doj[]', 'DD/MM/YYYY', 'ind_doj'+counter_ind_exp,'ind_exp',counter_ind_exp, 'ind_exp');
    create_input('ind_dol[]', 'DD/MM/YYYY', 'ind_dol'+counter_ind_exp,'ind_exp',counter_ind_exp, 'ind_exp');
    create_input('period[]', 'Duration', 'period'+counter_ind_exp,'ind_exp',counter_ind_exp, 'ind_exp',true);
    counter_ind_exp++;
    return false;
  });

  

});

  function create_select()
  {
    
  }
  function create_tr()
  {
    tr=document.createElement("tr");
  }
  function create_serial(tbody_id)
  {
    //console.log(tbody_id);
    var td=document.createElement("td");
    // var x=0;
     var x = document.getElementById(tbody_id).rows.length;
    // if(document.getElementById(tbody_id).rows)
    // {
    // }
    td.innerHTML=x;
    tr.appendChild(td);
  }
   function for_date_picker(obj)
  {
    obj.setAttribute("data-provide", "datepicker");
    obj.className += " datepicker";
    return obj;

  }
  
  function create_input(t_name, place_value, id, tbody_id, counter, remove_name, btn=false, select=false, datepicker_set=false)
  {
    //console.log(counter);
    if(select==false)
    {

      var input=document.createElement("input");
      input.setAttribute("type", "text");
      input.setAttribute("name", t_name);
      input.setAttribute("id", id);
      input.setAttribute("placeholder", place_value);
      input.setAttribute("class", "form-control input-md");
      input.setAttribute("required", "");
      var td=document.createElement("td");
      td.appendChild(input);
    }
    if(select==true)
    {

      var sel=document.createElement("select");
      sel.setAttribute("name", t_name);
      sel.setAttribute("id", id);
      sel.setAttribute("class", "form-control input-md");
      sel.innerHTML+="<option>Select</option>";
      sel.innerHTML+="<option value='Principal Investigator'>Principal Investigator</option>";
      sel.innerHTML+="<option value='Co-investigator'>Co-investigator</option>";
      // sel.innerHTML+="<option value='in_preparation'>In-Preparation</option>";
      var td=document.createElement("td");
      td.appendChild(sel);
    }
    if(datepicker_set==true)
    {
      input=for_date_picker(input);
    }
    if(btn==true)
    {
      // alert();
      var but=document.createElement("button");
      but.setAttribute("class", "close");
      but.setAttribute("onclick", "remove_row('"+remove_name+"','"+counter+"', '"+tbody_id+"')");
      but.innerHTML="x";
      td.appendChild(but);
    }
    tr.setAttribute("id", "row"+counter);
    tr.appendChild(td);
    document.getElementById(tbody_id).appendChild(tr);
     $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true
                });
    
  }
  function remove_row(remove_name, n, tbody_id)
  {
    var tab=document.getElementById(remove_name);
    var tr=document.getElementById("row"+n);
    tab.removeChild(tr);
    var x = document.getElementById(tbody_id).rows.length;
    for(var i=0; i<=x; i++)
    {
      $("#"+tbody_id).find("tr:eq("+i+") td:first").text(i);
      
    }
    
  }
</script>
<!-- all bootstrap buttons classes -->
<!-- 
  class="btn btn-sm, btn-lg, "
  color - btn-success, btn-primary, btn-default, btn-danger, btn-info, btn-warning
-->



<a href='https://ofa.iiti.ac.in/facrec_che_2023_july_02/layout'></a>

<div class="container">




    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 well">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
              <input type="hidden" name="ci_csrf_token" value="" />
            <fieldset>
             
                 <legend>
                  <div class="row">
                    <div class="col-md-10">
                        <h4>Welcome : <font color="#025198"><strong>Ma&nbsp;Agarwal</strong></font></h4>
                    </div>
                    <div class="col-md-2">
                      <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/facultypanel/logout" class="btn btn-sm btn-success  pull-right">Logout</a>
                    </div>
                  </div>
                
                
        </legend>

<h4 style="text-align:center; font-weight: bold; color: #6739bb;">3. Employment Details</h4>


            <!-- Form Name -->

<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(A) Present Employment</div>
        <div class="panel-body">
          
          <span class="col-md-2 control-label" for="pres_emp_position">Position</span>  
          <div class="col-md-4">
          <input id="pres_emp_position" value="2252 Athena Walks" name="pres_emp_position" type="text" placeholder="Position" class="form-control input-md" autofocus="" required="">
          </div>

          <span class="col-md-2 control-label" for="pres_emp_employer">Organization/Institution</span>  
          <div class="col-md-4">
          <input id="pres_emp_employer" value="138 Ben Stravenue" name="pres_emp_employer" type="text" placeholder="Organization/Institution" class="form-control input-md" autofocus="">
          </div> 
          
          <span class="col-md-2 control-label" for="pres_status">Status</span>  
          <div class="col-md-4">
          <select id="pres_status" name="pres_status" class="form-control input-md" required="">
              <option value="">Select</option>
              <option  selected='selected' value="Central Govt.">Central Govt.</option>
              <option   value="State Government">State Government</option>
              <option   value="Private">Private</option>
              <option   value="Quasi Govt.">Quasi Govt.</option>
              <option   value="Other">Other</option>
          </select>
          </div>

          <span class="col-md-2 control-label" for="pres_emp_doj">Date of Joining</span>  
          <div class="col-md-4">
          <input id="pres_emp_doj" name="pres_emp_doj" type="text" placeholder="Date of Joining" value="1858 Lang Meadow" class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="pres_emp_dol">Date of Leaving <br />(Mention Continue if working)</span>  
          <div class="col-md-4">
          <input id="pres_emp_dol" value="797 Herman Glens" name="pres_emp_dol" type="text" placeholder="Date of Leaving" class="form-control input-md" required="">
          </div>
          
          <span class="col-md-2 control-label" for="pres_emp_duration">Duration (in years & months)</span>  
          <div class="col-md-4">
          <input id="pres_emp_duration" name="pres_emp_duration" type="text" placeholder="Duration" value="8668 Welch Views" class="form-control input-md" required="">
          </div>


         

  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-success">
      <div class="panel-heading">(B) Employment History (After PhD, Starting with Latest)  </strong></font>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-sm btn-danger" id="add_more_exp">Add Details</button></div>
      <div class="panel-body">
        
           <table class="table table-bordered">
              <tbody id="exp">
              
                <tr height="30px">
                <th class="col-md-1"> S. No.</th>
                <th class="col-md-3"> Position </th>
                <th class="col-md-4"> Organization/Institution </th>
                <th class="col-md-1"> Date of Joining</th>
                <th class="col-md-1"> Date of Leaving </th>
                <th class="col-md-2"> Duration (in years & months)</th>
              </tr>
            
                              <tr height="60px">

                    <td class="col-md-1"> 
                      1                    </td>
                  <td class="col-md-2">  
                      <input id="position1" value="Sapiente asperiores voluptatum repudiandae minima quos eum itaque impedit." name="position[]" type="text" placeholder="Position" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                      <input id="employer" value="Accusantium labore eligendi." name="employer[]" type="text" placeholder="Employer" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input id="doj" name="doj[]" value="Ratione error expedita tempora quia." type="text" placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input id="dol" name="dol[]" value="Nobis qui harum." type="text" placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input  name="exp_duration[]" value="2024-09-06 07:11:00" type="text" placeholder="Duration" class="form-control input-md" required=""> 
                  </td>
                 
                </tr>
                                <tr height="60px">

                    <td class="col-md-1"> 
                      2                    </td>
                  <td class="col-md-2">  
                      <input id="position2" value="Magnam esse non doloribus." name="position[]" type="text" placeholder="Position" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                      <input id="employer" value="Totam aliquam deserunt." name="employer[]" type="text" placeholder="Employer" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input id="doj" name="doj[]" value="Repellat odit beatae enim facere voluptatem sequi dolores iste." type="text" placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input id="dol" name="dol[]" value="Culpa eaque libero sint rem eius ut ducimus." type="text" placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input  name="exp_duration[]" value="2023-06-08 10:12:23" type="text" placeholder="Duration" class="form-control input-md" required=""> 
                  </td>
                 
                </tr>
                               </tbody>
              </table>

                            <h4 style="color:red;">
              <div>

                <textarea style="height:50px; font-weight: bold; color: red;" class="form-control input-md" name="teach_exp_declaration" readonly="" required="">Experience : Minimum 10 years’ experience of which at least 4 years should be at the level of Associate Professor in IITs, IISc Bangalore, IIMs, NITIE Mumbai and IISERs.</textarea>
                <input type="radio" name="teach_exp" checked='checked' value="Yes" required="">Yes</input>
                
                <input type="radio" name="teach_exp"  value="No" required="">No</input>
              </div>
              </h4>
              
              
                        </div>
        </div>
      </div>
    </div>

<!-- Teaching Experience  -->
          
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-success">
    <div class="panel-heading">(C) Teaching Experience (After PhD)&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_t_exp">Add Details</button></div>
      <div class="panel-body">
        <table class="table table-bordered">
            <tbody id="t_exp">
            
            <tr height="30px">
              <th class="col-md-1"> S. No.</th>
              <th class="col-md-2"> Position</th>
              <th class="col-md-1"> Employer </th>
              <th class="col-md-1"> Course Taught </th>
              <th class="col-md-1"> UG/PG </th>
              <th class="col-md-1"> No. of Students </th>
              <th class="col-md-1"> Date of Joining the Institute</th>
              <th class="col-md-1"> Date of Leaving the Institute</th>
              <th class="col-md-1"> Duration (in years & months) </th>
              
            </tr>


                        
            <tr height="60px">
             
              <td class="col-md-1"> 
                1                </td>
              <td class="col-md-2"> 
                  <input id="te_position1" name="te_position[]" type="text" value="Minus quis repudiandae inventore enim quos quos. Fuga veritatis voluptatum quibusdam ea. Quia dignissimos aperiam dicta rem reprehenderit expedita totam.Veritatis odio excepturi soluta nisi iure reprehenderit. Mollitia repellendus delectus explicabo est s"  placeholder="Position" class="form-control input-md" required=""> 
                </td>
              <td class="col-md-2"> 
                <input id="te_employer1" name="te_employer[]" type="text" value="Modi esse minus dolorum recusandae. Harum unde error impedit delectus optio. Est veritatis quae rem.Asperiores quod consectetur quisquam nesciunt. Nemo aliquid voluptas. Qui repellat molestiae tempore ad quam quidem magni unde.Minima corrupti facilis hic "  placeholder="Employer" class="form-control input-md" required=""> 
              </td>

              <td class="col-md-2"> 
                <input id="te_course1" name="te_course[]" type="text" value="China"  placeholder="Course Taught" class="form-control input-md" required=""> 
              </td>
             
             <td class="col-md-2"> 
               <input id="te_ug_pg1" name="te_ug_pg[]" type="text" value="Consectetur ad maiores quia ratione nulla nesciunt. Explicabo iure ut blanditiis. Facere necessitatibus commodi aperiam aliquid numquam iste.Odio reprehenderit rerum ipsum debitis temporibus officia nemo sunt officia. Hic nihil laborum autem exercitatione"  placeholder="UG/PG" class="form-control input-md" required=""> 
             </td>

             <td class="col-md-2"> 
               <input id="te_no_stu1" name="te_no_stu[]" type="text" value="158"  placeholder="No. of Students" class="form-control input-md" required=""> 
             </td>

              <td class="col-md-1"> 
                <input id="te_doj1" name="te_doj[]" type="text" value="Est animi repellat esse odit odio consequuntur. Totam maxime laboriosam est at. Rerum id ad magnam dicta.Iure sed dicta praesentium. Illum accusamus esse placeat rem. Accusamus expedita vitae error optio magni similique saepe.At nihil asperiores culpa ali" placeholder="Joining" class="form-control input-md" required=""> 
              </td>
              <td class="col-md-1"> 
                <input id="te_dol1" name="te_dol[]" type="text" value="Cum nemo molestiae mollitia sed quam blanditiis delectus. Culpa dignissimos ullam qui consectetur. Magni eaque porro adipisci.Id earum tenetur eos eum tempore iusto. Excepturi ab voluptas consectetur saepe deserunt natus quaerat id. Accusantium ipsam volu" placeholder="Leaving" class="form-control input-md" required=""> 
              </td>
              <td class="col-md-1"> 
                <input id="te_duration1" name="te_duration[]" type="text" value="Itaque tempore quis numquam aspernatur exercitationem labore. Sint veniam earum esse veritatis quia ab ratione nihil nisi. Adipisci alias necessitatibus architecto ducimus debitis enim perspiciatis.Sed aut mollitia quidem. Delectus repudiandae numquam lab"  placeholder="Duration" class="form-control input-md" required=""> 
              </td>
             
            </tr>
                        
            <tr height="60px">
             
              <td class="col-md-1"> 
                2                </td>
              <td class="col-md-2"> 
                  <input id="te_position2" name="te_position[]" type="text" value="Officia excepturi recusandae eaque magni labore sit facilis. Quidem ratione nobis doloribus soluta occaecati doloremque ex. Assumenda facilis repudiandae sit aperiam ipsam eligendi pariatur.Corrupti ad delectus omnis natus doloremque recusandae in vel ull"  placeholder="Position" class="form-control input-md" required=""> 
                </td>
              <td class="col-md-2"> 
                <input id="te_employer2" name="te_employer[]" type="text" value="Iste nobis impedit est. Nemo placeat reiciendis optio accusantium illum reiciendis sed eaque corporis. Non laboriosam quaerat.Minima excepturi architecto debitis deleniti. Possimus debitis odit. Nostrum accusamus consectetur voluptas accusantium molestias"  placeholder="Employer" class="form-control input-md" required=""> 
              </td>

              <td class="col-md-2"> 
                <input id="te_course2" name="te_course[]" type="text" value="Bouvet Island"  placeholder="Course Taught" class="form-control input-md" required=""> 
              </td>
             
             <td class="col-md-2"> 
               <input id="te_ug_pg2" name="te_ug_pg[]" type="text" value="Voluptas culpa beatae. Tempora molestiae occaecati velit occaecati praesentium quo. Natus a corporis nihil esse dicta maxime animi vero.Accusamus error veritatis harum quod facere. Tempore expedita architecto officia. Aliquam rerum aliquid.Temporibus expl"  placeholder="UG/PG" class="form-control input-md" required=""> 
             </td>

             <td class="col-md-2"> 
               <input id="te_no_stu2" name="te_no_stu[]" type="text" value="493"  placeholder="No. of Students" class="form-control input-md" required=""> 
             </td>

              <td class="col-md-1"> 
                <input id="te_doj2" name="te_doj[]" type="text" value="Error impedit necessitatibus mollitia. Omnis doloremque fuga vel recusandae fugit adipisci voluptatibus. Minus dignissimos totam fugit et ex ut.Animi sapiente labore architecto molestiae. Necessitatibus libero soluta rerum beatae voluptate quos quod quod." placeholder="Joining" class="form-control input-md" required=""> 
              </td>
              <td class="col-md-1"> 
                <input id="te_dol2" name="te_dol[]" type="text" value="Quia a quos accusantium officiis accusamus culpa reiciendis. Suscipit quo nesciunt asperiores culpa assumenda sapiente nisi impedit. Laudantium voluptate vitae reiciendis eveniet nemo facere similique exercitationem.Impedit maxime temporibus commodi qui a" placeholder="Leaving" class="form-control input-md" required=""> 
              </td>
              <td class="col-md-1"> 
                <input id="te_duration2" name="te_duration[]" type="text" value="Laboriosam possimus vel amet earum ex at delectus delectus minima. Ad facilis cum labore officiis earum veritatis debitis. Architecto iste vero sed cupiditate maiores.Cum dicta sed architecto deleniti deserunt nesciunt quidem est molestias. Veritatis anim"  placeholder="Duration" class="form-control input-md" required=""> 
              </td>
             
            </tr>
                        
            <tr height="60px">
             
              <td class="col-md-1"> 
                3                </td>
              <td class="col-md-2"> 
                  <input id="te_position3" name="te_position[]" type="text" value="Quisquam sequi sint adipisci quod nobis praesentium expedita ducimus. Fugit eligendi molestias temporibus nostrum aliquam dolores eligendi. Assumenda dignissimos alias magnam suscipit nemo.Magni porro dolorem doloremque similique maiores doloremque evenie"  placeholder="Position" class="form-control input-md" required=""> 
                </td>
              <td class="col-md-2"> 
                <input id="te_employer3" name="te_employer[]" type="text" value="Maxime enim soluta possimus cupiditate officia possimus veniam. Dolores distinctio consequuntur ullam culpa nihil quibusdam eveniet modi. Quibusdam id voluptates voluptatibus illum ullam nemo magni.Delectus quos quis quos dolores. Voluptates voluptatem na"  placeholder="Employer" class="form-control input-md" required=""> 
              </td>

              <td class="col-md-2"> 
                <input id="te_course3" name="te_course[]" type="text" value="Bangladesh"  placeholder="Course Taught" class="form-control input-md" required=""> 
              </td>
             
             <td class="col-md-2"> 
               <input id="te_ug_pg3" name="te_ug_pg[]" type="text" value="Cumque odit inventore amet quia minima pariatur laboriosam debitis. Temporibus fuga alias aperiam labore id accusamus. Deserunt neque impedit.Rem quis nisi quo dolore laborum. Vel aliquid exercitationem nihil quibusdam ut quod. A nesciunt nesciunt exercit"  placeholder="UG/PG" class="form-control input-md" required=""> 
             </td>

             <td class="col-md-2"> 
               <input id="te_no_stu3" name="te_no_stu[]" type="text" value="219"  placeholder="No. of Students" class="form-control input-md" required=""> 
             </td>

              <td class="col-md-1"> 
                <input id="te_doj3" name="te_doj[]" type="text" value="Fuga repellendus error fugit possimus consequatur laudantium ipsa. Doloribus dolore deserunt velit adipisci tempora. Commodi odit autem sed voluptates maiores.Dolor odit accusantium quod adipisci ullam iste quos fuga. Voluptatum minima laborum similique p" placeholder="Joining" class="form-control input-md" required=""> 
              </td>
              <td class="col-md-1"> 
                <input id="te_dol3" name="te_dol[]" type="text" value="Minima quo laborum aliquam debitis fugiat omnis. Eveniet dolores eos sequi quidem maiores accusamus animi velit asperiores. Voluptatem harum repudiandae nisi fugiat tempora aut.Voluptatem at a. Unde ab vero. Soluta hic neque quod numquam suscipit sequi de" placeholder="Leaving" class="form-control input-md" required=""> 
              </td>
              <td class="col-md-1"> 
                <input id="te_duration3" name="te_duration[]" type="text" value="Porro deserunt minus repudiandae cum reiciendis quis unde temporibus. Et soluta ex quae molestias assumenda. Consequuntur quae minima.Culpa consequatur veniam. Possimus vero voluptates ipsam cumque natus inventore nostrum dolores. Reprehenderit mollitia q"  placeholder="Duration" class="form-control input-md" required=""> 
              </td>
             
            </tr>
            
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>

  <!-- c) Research Experience: (including Postdoctoral) input-->
                 
<div class="row">
<div class="col-md-12">
  <div class="panel panel-success">
  <div class="panel-heading">(D) Research Experience (Post PhD, including Post Doctoral)&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_r_exp">Add Details</button></div>
    <div class="panel-body">
      <table class="table table-bordered">
          <tbody id="r_exp">
          
          <tr height="30px">
            <th class="col-md-1"> S. No.</th>
            <th class="col-md-1"> Position </th>
            <th class="col-md-2"> Institute</th>
            <th class="col-md-2"> Supervisor</th>
            <!-- <th class="col-md-2"> Topic </th> -->
            <th class="col-md-1"> Date of Joining</th>
            <th class="col-md-1"> Date of Leaving</th>
            <th class="col-md-1"> Duration (in years & months) </th>
            
          </tr>


                    
          <tr height="60px">
           
            <td class="col-md-1"> 
              1              </td>
            <td class="col-md-2"> 
                <input id="r_exp_position1" name="r_exp_position[]" type="text" value="Consequuntur repellat exercitationem aliquam quidem temporibus optio fuga placeat."  placeholder="Position" class="form-control input-md" required=""> 
              </td>
            <td class="col-md-2"> 
              <input id="r_exp_institute1" name="r_exp_institute[]" type="text" value="Missouri"  placeholder="Institute" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-2"> 
              <input id="r_exp_supervisor1" name="r_exp_supervisor[]" type="text" value="Ipsa assumenda dignissimos."  placeholder="Supervisor" class="form-control input-md" required=""> 
            </td>
           <!--  <td class="col-md-2"> 
              <input id="r_exp_topic1" name="r_exp_topic[]" type="text" value=""  placeholder="Topic" class="form-control input-md" required=""> 
            </td> -->
            <td class="col-md-1"> 
              <input id="r_exp_doj1" name="r_exp_doj[]" type="text" value="Consequatur porro alias enim nemo veritatis magni magnam."  placeholder="Joining" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-1"> 
              <input id="r_exp_dol1" name="r_exp_dol[]" type="text" value="Voluptates voluptatum aliquid vitae maxime eos aliquid." placeholder="Leaving" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-1"> 
              <input id="r_exp_duration1" name="r_exp_duration[]" type="text" value="2023-04-28 13:55:14"  placeholder="Duration" class="form-control input-md" required=""> 
            </td>
           
          </tr>
                    
          <tr height="60px">
           
            <td class="col-md-1"> 
              2              </td>
            <td class="col-md-2"> 
                <input id="r_exp_position2" name="r_exp_position[]" type="text" value="Quidem consequatur id eius id pariatur mollitia deleniti fugit at."  placeholder="Position" class="form-control input-md" required=""> 
              </td>
            <td class="col-md-2"> 
              <input id="r_exp_institute2" name="r_exp_institute[]" type="text" value="New York"  placeholder="Institute" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-2"> 
              <input id="r_exp_supervisor2" name="r_exp_supervisor[]" type="text" value="Quisquam repellendus quaerat minima rem dolorem excepturi inventore."  placeholder="Supervisor" class="form-control input-md" required=""> 
            </td>
           <!--  <td class="col-md-2"> 
              <input id="r_exp_topic2" name="r_exp_topic[]" type="text" value=""  placeholder="Topic" class="form-control input-md" required=""> 
            </td> -->
            <td class="col-md-1"> 
              <input id="r_exp_doj2" name="r_exp_doj[]" type="text" value="Iste quis nihil neque explicabo molestias harum inventore nisi."  placeholder="Joining" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-1"> 
              <input id="r_exp_dol2" name="r_exp_dol[]" type="text" value="Voluptatem asperiores quasi praesentium rem illum recusandae temporibus ut." placeholder="Leaving" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-1"> 
              <input id="r_exp_duration2" name="r_exp_duration[]" type="text" value="2024-07-13 13:08:17"  placeholder="Duration" class="form-control input-md" required=""> 
            </td>
           
          </tr>
                    
          <tr height="60px">
           
            <td class="col-md-1"> 
              3              </td>
            <td class="col-md-2"> 
                <input id="r_exp_position3" name="r_exp_position[]" type="text" value="Perferendis quibusdam itaque voluptas vel possimus quos sint tenetur."  placeholder="Position" class="form-control input-md" required=""> 
              </td>
            <td class="col-md-2"> 
              <input id="r_exp_institute3" name="r_exp_institute[]" type="text" value="Michigan"  placeholder="Institute" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-2"> 
              <input id="r_exp_supervisor3" name="r_exp_supervisor[]" type="text" value="Iure at optio sit sint facilis ratione."  placeholder="Supervisor" class="form-control input-md" required=""> 
            </td>
           <!--  <td class="col-md-2"> 
              <input id="r_exp_topic3" name="r_exp_topic[]" type="text" value=""  placeholder="Topic" class="form-control input-md" required=""> 
            </td> -->
            <td class="col-md-1"> 
              <input id="r_exp_doj3" name="r_exp_doj[]" type="text" value="Officiis vitae ipsum eaque dolorum dolorum sequi rem aliquid aut."  placeholder="Joining" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-1"> 
              <input id="r_exp_dol3" name="r_exp_dol[]" type="text" value="Nulla consectetur saepe deleniti excepturi assumenda dolorum dolores sequi." placeholder="Leaving" class="form-control input-md" required=""> 
            </td>
            <td class="col-md-1"> 
              <input id="r_exp_duration3" name="r_exp_duration[]" type="text" value="2023-09-22 05:57:09"  placeholder="Duration" class="form-control input-md" required=""> 
            </td>
           
          </tr>
          
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>


<!-- g)  Industrial Experience Interaction -->
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(E) Industrial Experience &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_ind_exp">Add Details</button></div>
        <div class="panel-body">

            <table class="table table-bordered">
                <tbody id="ind_exp">
                
                <tr height="30px">
                  <th class="col-md-1"> S. No.</th>
                  <th class="col-md-2"> Organization </th>
                  <th class="col-md-3"> Work Profile</th>
                  <th class="col-md-2"> Date of Joining</th>
                  <th class="col-md-2"> Date of Leaving</th>
                  <th class="col-md-2"> Duration (in years & months)</th>
                </tr>


                                
                <tr height="60px">
                 
                  <td class="col-md-1"> 
                    1                    </td>
                  <td class="col-md-2"> 
                      <input id="org1" name="org[]" type="text" value="Esse porro voluptas totam odit quia."  placeholder="Organization" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input id="work1" name="work[]" type="text" value="doloribus sed voluptatibus"  placeholder="Nature of Work" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_doj1" name="ind_doj[]" type="text" value="Sit similique corrupti beatae voluptatem ratione." placeholder="Joining" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_dol1" name="ind_dol[]" type="text" value="Facilis itaque veniam quae perferendis eum ipsum error in." placeholder="Leaving" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input id="period1" name="period[]" type="text" value="Sint alias voluptatum esse pariatur cumque repellat unde quaerat."  placeholder="Period" class="form-control input-md" required=""> 
                  </td>
                 
                </tr>
                                
                <tr height="60px">
                 
                  <td class="col-md-1"> 
                    2                    </td>
                  <td class="col-md-2"> 
                      <input id="org2" name="org[]" type="text" value="Nisi adipisci itaque aperiam dolore nostrum temporibus."  placeholder="Organization" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input id="work2" name="work[]" type="text" value="minus velit temporibus"  placeholder="Nature of Work" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_doj2" name="ind_doj[]" type="text" value="Quae alias saepe." placeholder="Joining" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_dol2" name="ind_dol[]" type="text" value="Sit cupiditate perspiciatis." placeholder="Leaving" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input id="period2" name="period[]" type="text" value="Ad aliquid ullam quidem nostrum perferendis est voluptatem."  placeholder="Period" class="form-control input-md" required=""> 
                  </td>
                 
                </tr>
                                
                <tr height="60px">
                 
                  <td class="col-md-1"> 
                    3                    </td>
                  <td class="col-md-2"> 
                      <input id="org3" name="org[]" type="text" value="Culpa minus libero neque."  placeholder="Organization" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input id="work3" name="work[]" type="text" value="nostrum autem vel"  placeholder="Nature of Work" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_doj3" name="ind_doj[]" type="text" value="Esse aut ipsam porro." placeholder="Joining" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_dol3" name="ind_dol[]" type="text" value="Sequi maiores accusantium." placeholder="Leaving" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input id="period3" name="period[]" type="text" value="Nulla molestiae aliquid perferendis alias sed."  placeholder="Period" class="form-control input-md" required=""> 
                  </td>
                 
                </tr>
                                
                <tr height="60px">
                 
                  <td class="col-md-1"> 
                    4                    </td>
                  <td class="col-md-2"> 
                      <input id="org4" name="org[]" type="text" value="Fugit cum rem quisquam deserunt ullam eum accusamus labore."  placeholder="Organization" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input id="work4" name="work[]" type="text" value="iure molestias porro"  placeholder="Nature of Work" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_doj4" name="ind_doj[]" type="text" value="Molestiae nostrum repudiandae saepe consequuntur." placeholder="Joining" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_dol4" name="ind_dol[]" type="text" value="Nam provident unde repellat ab corrupti velit provident." placeholder="Leaving" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input id="period4" name="period[]" type="text" value="Soluta reiciendis expedita."  placeholder="Period" class="form-control input-md" required=""> 
                  </td>
                 
                </tr>
                                
                <tr height="60px">
                 
                  <td class="col-md-1"> 
                    5                    </td>
                  <td class="col-md-2"> 
                      <input id="org5" name="org[]" type="text" value="Commodi labore id deserunt sit ad cumque."  placeholder="Organization" class="form-control input-md" required=""> 
                    </td>
                  <td class="col-md-2"> 
                    <input id="work5" name="work[]" type="text" value="est praesentium alias"  placeholder="Nature of Work" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_doj5" name="ind_doj[]" type="text" value="Blanditiis possimus magnam nisi reiciendis voluptatibus alias facere." placeholder="Joining" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="ind_dol5" name="ind_dol[]" type="text" value="Eligendi nisi temporibus ducimus animi officia fugit." placeholder="Leaving" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-2"> 
                    <input id="period5" name="period[]" type="text" value="Nostrum voluptates earum aperiam nemo."  placeholder="Period" class="form-control input-md" required=""> 
                  </td>
                 
                </tr>
                              </tbody>
            </table>
          </div>
      </div>
    </div>
</div>


<h4 style="text-align:center; font-weight: bold; color: #6739bb;">4. Area(s) of Specialization and Current Area(s) of Research</h4>
 <div class="row">
  <div class="col-md-6">
    <div class="panel panel-success">
      <!-- <div class="panel-heading">9. Area(s) of Specialization *</div> -->
      <div class="panel-body">
        <strong>Areas of specialization</strong>
        <textarea style="height:150px" placeholder="Areas of specialization" class="form-control input-md" name="area_spl" maxlength="500" required="">Nobis ea corrupti perferendis magni.</textarea>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="panel panel-success">
      <!-- <div class="panel-heading">10. Current Area(s) of Research *</div> -->
      <div class="panel-body">
        <strong>Current Area of research</strong>
        <textarea style="height:150px" placeholder="Current Area of research" class="form-control input-md" name="area_rese" maxlength="500" required="">6818 Mohammed Haven</textarea>
      </div>
    </div>
  </div>
 </div>

<div class="form-group">
  
  <div class="col-md-1">
    <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/acde" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-fast-backward"></i></a>
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