

<html>
<head>
	<title>Publication Details</title>
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
                $('#dob').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true
                });
            });
</script>

<script type="text/javascript">
var tr="";
var counter_jour=1;
// var counter_confer=1;
var counter_book=1;
var counter_book_chapter=1;
var counter_patent=1;
  $(document).ready(function(){

    $("#add_more_jour").click(function(){
        create_tr();
        create_serial('jour');
        create_input('author[]', 'Author', 'author'+counter_jour,'jour', counter_jour, 'jour');
        create_input('title[]', 'Title', 'title'+counter_jour,'jour', counter_jour, 'jour');
        create_input('journal[]', 'Journal', 'journal'+counter_jour,'jour', counter_jour, 'jour');
        create_input('year[]', 'Year, Vol., Page', 'year'+counter_jour,'jour', counter_jour, 'jour');
        create_input('impact[]', 'Impact Factor','impact'+counter_jour, 'jour', counter_jour, 'jour');
        create_input('doi[]', 'DOI','doi'+counter_jour, 'jour', counter_jour, 'jour');
        create_input('status[]', 'Status', 'status'+counter_jour,'jour', counter_jour,'jour',true, true);
        counter_jour++;
        return false;
    });

    // $("#add_more_confer").click(function(){
    //     create_tr();
    //     create_serial('confer');
    //     create_input('cname[]', 'Conference','cname'+counter_confer, 'confer',counter_confer, 'confer');
    //     create_input('ctitle[]', 'Title', 'ctitle'+counter_confer,'confer',counter_confer, 'confer');
    //     create_input('cyear[]', 'Year', 'cyear'+counter_confer,'confer',counter_confer, 'confer',true);
    //     counter_confer++;
    //     return false;
    // });

    $("#add_more_book").click(function(){
        create_tr();
        create_serial('book');
        create_input('bauthor[]', 'Book','bauthor'+counter_book, 'book',counter_book, 'book');
        create_input('btitle[]', 'Title of the Book', 'btitle'+counter_book,'book',counter_book, 'book');
        create_input('byear[]', 'Year', 'byear'+counter_book,'book',counter_book, 'book');
        create_input('bisbn[]', 'ISBN', 'bisbn'+counter_book,'book',counter_book, 'book',true);
        // create_input('bstatus[]', 'Status', 'bstatus'+counter_book,'book', counter_book,'book',true, true);
        // create_input('dol[]', 'Date of Leaving', 'dol'+counter_exp,'exp',counter_exp, 'exp');
        // create_input('duration2[]', 'Duration','duration2'+counter_exp, 'exp',counter_exp,'exp', true);
        // //create_input('perce[]', 'Percentage', 'perce'+counter_exp,'exp', true);
        counter_book++;
        return false;
    });


    $("#add_more_book_chapter").click(function(){
        create_tr();
        create_serial('book_chapter');
        create_input('bc_author[]', 'Book Chapter','bc_author'+counter_book_chapter, 'book_chapter',counter_book_chapter, 'book_chapter');
        create_input('bc_title[]', 'Title', 'bc_title'+counter_book_chapter,'book_chapter',counter_book_chapter, 'book_chapter');
        create_input('bc_year[]', 'Year', 'bc_year'+counter_book_chapter,'book_chapter',counter_book_chapter, 'book_chapter');
        create_input('bc_isbn[]', 'ISBN', 'bc_isbn'+counter_book_chapter,'book_chapter',counter_book_chapter, 'book_chapter',true);
        counter_book_chapter++;
        return false;
    });


    $("#add_more_patent").click(function(){
        create_tr();
         create_serial('patent');
        create_input('pauthor[]', 'Inventor(s)','pauthor'+counter_patent, 'patent',counter_patent, 'patent');
        // create_input('p_year[]', 'Year of the patent','p_year'+counter_patent, 'patent',counter_patent, 'patent');
        create_input('ptitle[]', 'Title of Patent', 'ptitle'+counter_patent,'patent',counter_patent, 'patent');
        create_input('p_country[]', 'Country of patent','p_country'+counter_patent, 'patent',counter_patent, 'patent');
        create_input('p_number[]', 'Patent Number','p_number'+counter_patent, 'patent',counter_patent, 'patent');
        create_input('pyear_filed[]', 'DD/MM/YYYY','pyear_filed'+counter_patent, 'patent',counter_patent, 'patent');
        create_input('pyear_published[]', 'DD/MM/YYYY','pyear_published'+counter_patent, 'patent',counter_patent, 'patent');
        create_input('pyear_issued[]', 'DD/MM/YYYY','pyear_issued'+counter_patent, 'patent',counter_patent, 'patent',true);
        // create_input('pyear[]', 'Year', 'pyear'+counter_patent,'patent',counter_patent, 'patent',true);
        // create_input('pstatus[]', 'Status', 'pstatus'+counter_patent,'patent', patent,'patent',true, true);
        // create_input('dol[]', 'Date of Leaving', 'dol'+counter_exp,'exp',counter_exp, 'exp');
        // create_input('duration2[]', 'Duration','duration2'+counter_exp, 'exp',counter_exp,'exp', true);
        // //create_input('perce[]', 'Percentage', 'perce'+counter_exp,'exp', true);
        counter_patent++;
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
  function create_input(t_name, place_value, id, tbody_id, counter, remove_name, btn=false, select=false)
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
      sel.innerHTML+="<option value='published'>Published</option>";
      sel.innerHTML+="<option value='accepted'>Accepted</option>";
      // sel.innerHTML+="<option value='in_preparation'>In-Preparation</option>";
      var td=document.createElement("td");
      td.appendChild(sel);
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
    //var tbody=document.getElementById(tbody_id);
    //console.log(tbody[1].childNodes);
    // var row=tbody[0].getElementByTagName("tr");
    // var td=row[0].getElementByTagName("td");
    // td.innerHTML=i;
    // for(var i=1; i<=x; i++)
    // {
    //     var tbody=document.getElementById(tbody_id);
    //     var row=tbody[0].getElementByTagName("tr");
    //     var td=row[0].getElementByTagName("td");
    //     td.innerHTML=i;
    // }
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-8 well">
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

             

    
            <!-- Form Name -->
            
              
            <!-- Text input-->
           
            <h4 style="text-align:center; font-weight: bold; color: #6739bb;">5. Summary of Publications *</h4>
            <div class="row">
              <div class="col-md-12">
              <div class="panel panel-success">
              <div class="panel-body">

                <span class="col-md-5 control-label" for="summary_journal_inter">Number of International Journal Papers</span>  
                <div class="col-md-1">
                <input id="summary_journal_inter" value="Vol" name="summary_journal_inter" type="text" placeholder="" class="form-control input-md" required="" maxlength="3">
                </div>

                <span class="col-md-5 control-label" for="summary_journal">Number of National Journal Papers</span>  
                <div class="col-md-1">
                <input id="summary_journal" value="Nob" name="summary_journal" type="text" placeholder="" class="form-control input-md" required="" maxlength="3">
                </div>

                <span class="col-md-5 control-label" for="summary_conf_inter">Number of International Conference Papers</span>  
                <div class="col-md-1">
                <input id="summary_conf_inter" value="Duc" name="summary_conf_inter" type="text" placeholder="" class="form-control input-md" required="" maxlength="3">
                </div>

                <span class="col-md-5 control-label" for="summary_conf_national">Number of National Conference Papers</span>  
                <div class="col-md-1">
                <input id="summary_conf_national" value="Par" name="summary_conf_national" type="text" placeholder="" class="form-control input-md" required="" maxlength="3">
                </div>

                <span class="col-md-5 control-label" for="patent_publish">Number of Patent(s) [Filed, Published, Granted] </span>  
                <div class="col-md-1">
                <input id="patent_publish" value="Ame" name="patent_publish" type="text" placeholder="" class="form-control input-md" required="" maxlength="3">
                </div>

                <span class="col-md-5 control-label" for="summary_book">Number of Book(s) </span>  
                <div class="col-md-1">
                <input id="summary_book" value="Id " name="summary_book" type="text" placeholder="" class="form-control input-md" required="" maxlength="3">
                </div>

                <span class="col-md-5 control-label" for="summary_book_chapter">Number of Book Chapter(s)</span>  
                <div class="col-md-1">
                <input id="summary_book_chapter" value="Dic" name="summary_book_chapter" type="text" placeholder="" class="form-control input-md" required="" maxlength="3">
                </div>

              

              

               

                

              </div>
              </div>
              </div>
              </div>   

           
           <h4 style="text-align:center; font-weight: bold; color: #6739bb;">6. List of 10 Best Publications (Journal/Conference)</h4>

           <div class="container-fluid table-responsive">
              <div class="row">
                

               <div class="panel panel-success">
                <div class="panel-heading">List of 10 Best Publications (Journal/Conference) &nbsp;&nbsp;&nbsp;
                  <button class="btn btn-sm btn-danger" id="add_more_jour">Add Details</button>
                </div>
                <table class="table table-bordered">
                    <tbody id="jour">
                    
                    <tr height="30px">
                      <th class="col-md-1"> S. No.</th>
                      <th class="col-md-2"> Author(s) </th>
                      <th class="col-md-1"> Title</th>
                      <th class="col-md-2"> Name of Journal/Conference </th>
                      <th class="col-md-1"> Year, Vol., Page</th>
                      <th class="col-md-1"> Impact Factor </th>
                      <th class="col-md-1"> DOI</th>
                      <th class="col-md-2"> Status</th>
                    </tr>


                                        
                    <tr height="60px">
                     
                      <td class="col-md-1"> 
                        1                        </td>
                      <td class="col-md-2"> 
                          <input id="author1" name="author[]" type="text" value="Rem quas rem distinctio dicta nostrum enim maxime facere."  placeholder="Author" class="form-control input-md"> 
                        </td>
                      <td class="col-md-2"> 
                        <input id="title1" name="title[]" type="text" value="Direct Directives Specialist"  placeholder="Title" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="journal1" name="journal[]" type="text" value="Mariano Jones"  placeholder="Journal Name" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="year1" name="year[]" type="text" value="Nihil tenetur unde."  placeholder="Year of publication" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="impact1" name="impact[]" type="text" value="Accusantium sequi necessitatibus fugit itaque adipisci."  placeholder="Impact Factor" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="doi1" name="doi[]" type="text" value="Quia dicta veritatis quibusdam error tempore."  placeholder="DOI" class="form-control input-md"> 
                      </td>

                      
                      <td class="col-md-2"> 
                        
                        <select id="status" name="status[]" class="form-control input-md">
                            <option value="">Select</option>
                            <option  value="published">Published</option>
                            <option  value="accepted">Accepted</option>
                            
                        </select>

                      </td>
                    </tr>
                                        
                    <tr height="60px">
                     
                      <td class="col-md-1"> 
                        2                        </td>
                      <td class="col-md-2"> 
                          <input id="author2" name="author[]" type="text" value="Veritatis aut harum eligendi vero labore quae rerum occaecati dicta."  placeholder="Author" class="form-control input-md"> 
                        </td>
                      <td class="col-md-2"> 
                        <input id="title2" name="title[]" type="text" value="District Web Specialist"  placeholder="Title" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="journal2" name="journal[]" type="text" value="Lexi Smitham"  placeholder="Journal Name" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="year2" name="year[]" type="text" value="Nihil aut optio unde accusantium voluptate quasi."  placeholder="Year of publication" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="impact2" name="impact[]" type="text" value="Nemo laborum culpa ei us esse assumenda doloribus."  placeholder="Impact Factor" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="doi2" name="doi[]" type="text" value="Nesciunt dolore vel expedita accusamus excepturi odio saepe nisi."  placeholder="DOI" class="form-control input-md"> 
                      </td>

                      
                      <td class="col-md-2"> 
                        
                        <select id="status" name="status[]" class="form-control input-md">
                            <option value="">Select</option>
                            <option  value="published">Published</option>
                            <option  value="accepted">Accepted</option>
                            
                        </select>

                      </td>
                    </tr>
                                        
                    <tr height="60px">
                     
                      <td class="col-md-1"> 
                        3                        </td>
                      <td class="col-md-2"> 
                          <input id="author3" name="author[]" type="text" value="Accusamus laudantium optio sit ea error illo doloremque corporis quidem."  placeholder="Author" class="form-control input-md"> 
                        </td>
                      <td class="col-md-2"> 
                        <input id="title3" name="title[]" type="text" value="Customer Web Coordinator"  placeholder="Title" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="journal3" name="journal[]" type="text" value="Felton Borer"  placeholder="Journal Name" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="year3" name="year[]" type="text" value="Mollitia id culpa."  placeholder="Year of publication" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="impact3" name="impact[]" type="text" value="Quis suscipit mollitia porro molestiae fugiat."  placeholder="Impact Factor" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="doi3" name="doi[]" type="text" value="Nisi natus molestiae assumenda tenetur ipsam ad consequatur."  placeholder="DOI" class="form-control input-md"> 
                      </td>

                      
                      <td class="col-md-2"> 
                        
                        <select id="status" name="status[]" class="form-control input-md">
                            <option value="">Select</option>
                            <option  value="published">Published</option>
                            <option  value="accepted">Accepted</option>
                            
                        </select>

                      </td>
                    </tr>
                                        
                    <tr height="60px">
                     
                      <td class="col-md-1"> 
                        4                        </td>
                      <td class="col-md-2"> 
                          <input id="author4" name="author[]" type="text" value="Quae esse magni aperiam sed eum distinctio expedita quod."  placeholder="Author" class="form-control input-md"> 
                        </td>
                      <td class="col-md-2"> 
                        <input id="title4" name="title[]" type="text" value="Principal Accounts Executive"  placeholder="Title" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="journal4" name="journal[]" type="text" value="Cristian Botsford"  placeholder="Journal Name" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="year4" name="year[]" type="text" value="Ipsa illo optio exercitationem rerum sequi."  placeholder="Year of publication" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="impact4" name="impact[]" type="text" value="Molestiae similique doloremque dolores culpa ipsa iusto."  placeholder="Impact Factor" class="form-control input-md"> 
                      </td>
                      <td class="col-md-2"> 
                        <input id="doi4" name="doi[]" type="text" value="Voluptates delectus reprehenderit fugiat doloremque blanditiis corporis ut vero recusandae."  placeholder="DOI" class="form-control input-md"> 
                      </td>

                      
                      <td class="col-md-2"> 
                        
                        <select id="status" name="status[]" class="form-control input-md">
                            <option value="">Select</option>
                            <option selected='selected' value="published">Published</option>
                            <option  value="accepted">Accepted</option>
                            
                        </select>

                      </td>
                    </tr>
                                      </tbody>
                </table>

               </div>
              
            </div>

              
            </div> 
 
                <!-- Conference input-->
                
            <!--  <div class="container-fluid table-responsive">
              <div class="row">

                <div class="panel panel-success">
                 <div class="panel-heading">(B) Conference (List of 10 Best Publications)&nbsp;&nbsp;&nbsp;
                  <button class="btn btn-sm btn-danger" id="add_more_confer">Add Details</button>
                </div>
                 <table class="table table-bordered">
                     <tbody id="confer">
                     
                     <tr height="30px">
                       <th class="col-md-2"> S. No. </th>
                       <th class="col-md-3"> Name of the Conference</th>
                       <th class="col-md-5"> Title of Paper </th>
                       <th class="col-md-2"> Year </th>
                     </tr>


                                        </tbody>
                 </table>
            </div>

              
            </div> 
          </div> -->

           <!-- Patent Text -->

             <div class="container-fluid table-responsive">

              <h4 style="text-align:center; font-weight: bold; color: #6739bb;">7. List of  Patent(s), Book(s), Book Chapter(s)</h4>
             <div class="row">

           <div class="panel panel-success">
            <div class="panel-heading">(A) Patent(s)&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_patent">Add Details</button>  </div>
            <table class="table table-bordered">
                <tbody id="patent">
                
                <tr height="30px">
                  <th class="col-md-1"> S. No.</th>
                  <th class="col-md-1"> Inventor(s) </th>
                  <!-- <th class="col-md-2"> Year of Patent </th> -->
                  <th class="col-md-2"> Title of Patent </th>
                  <th class="col-md-1"> Country of Patent </th>
                  <th class="col-md-1"> Patent Number</th>
                  <th class="col-md-1"> Date of Filing</th>
                  <th class="col-md-1"> Date of Published</th>
                  <th class="col-md-1"> Status Filed/Published/Granted</th>
                  <!-- <th class="col-md-1"> Date of Filed/Published (If not granted, mention "Awaited")</th> -->
                </tr>


                                
                <tr height="60px">
                 
                  <td class="col-md-1"> 
                    1                    </td>
                  <td class="col-md-1"> 
                      <input id="pauthor1" name="pauthor[]" type="text" value="xh8GbiLoyel82lm"  placeholder="Author(s)" class="form-control input-md" required=""> 
                    </td>
                 <!--  <td class="col-md-2"> 
                    <input id="p_year1" name="p_year[]" type="text" value=""  placeholder="Year" class="form-control input-md" required=""> 
                  </td> -->
                  <td class="col-md-1"> 
                    <input id="ptitle1" name="ptitle[]" type="text" value="Future Factors Designer"  placeholder="Title" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="p_country1" name="p_country[]" type="text" value="Colombia"  placeholder="Country" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="p_number1" name="p_number[]" type="text" value="209"  placeholder="Patent Number" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="pyear_filed1" name="pyear_filed[]" type="text" value="Magnam officiis voluptates corporis natus molestias iure adipisci."  placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                   <td class="col-md-1"> 
                    <input id="pyear_published1" name="pyear_published[]" type="text" value="Aut non porro saepe sunt quo cum saepe quos qui."  placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                   <td class="col-md-1"> 
                    <input id="pyear_issued1" name="pyear_issued[]" type="text" value="Cupiditate quam magni soluta voluptate dicta odit deleniti nam voluptas."  placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
             
                </tr>
                                
                <tr height="60px">
                 
                  <td class="col-md-1"> 
                    2                    </td>
                  <td class="col-md-1"> 
                      <input id="pauthor2" name="pauthor[]" type="text" value="TEy1fK8Xw6mtj4q"  placeholder="Author(s)" class="form-control input-md" required=""> 
                    </td>
                 <!--  <td class="col-md-2"> 
                    <input id="p_year2" name="p_year[]" type="text" value=""  placeholder="Year" class="form-control input-md" required=""> 
                  </td> -->
                  <td class="col-md-1"> 
                    <input id="ptitle2" name="ptitle[]" type="text" value="Future Division Analyst"  placeholder="Title" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="p_country2" name="p_country[]" type="text" value="Iraq"  placeholder="Country" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="p_number2" name="p_number[]" type="text" value="478"  placeholder="Patent Number" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="pyear_filed2" name="pyear_filed[]" type="text" value="Amet nemo soluta."  placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                   <td class="col-md-1"> 
                    <input id="pyear_published2" name="pyear_published[]" type="text" value="Dicta id quis velit."  placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                   <td class="col-md-1"> 
                    <input id="pyear_issued2" name="pyear_issued[]" type="text" value="Consectetur facere quisquam praesentium laudantium quae."  placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
             
                </tr>
                                
                <tr height="60px">
                 
                  <td class="col-md-1"> 
                    3                    </td>
                  <td class="col-md-1"> 
                      <input id="pauthor3" name="pauthor[]" type="text" value="PKE_4SErlFy6Rph"  placeholder="Author(s)" class="form-control input-md" required=""> 
                    </td>
                 <!--  <td class="col-md-2"> 
                    <input id="p_year3" name="p_year[]" type="text" value=""  placeholder="Year" class="form-control input-md" required=""> 
                  </td> -->
                  <td class="col-md-1"> 
                    <input id="ptitle3" name="ptitle[]" type="text" value="Forward Research Supervisor"  placeholder="Title" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="p_country3" name="p_country[]" type="text" value="Faroe Islands"  placeholder="Country" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="p_number3" name="p_number[]" type="text" value="7"  placeholder="Patent Number" class="form-control input-md" required=""> 
                  </td>
                  <td class="col-md-1"> 
                    <input id="pyear_filed3" name="pyear_filed[]" type="text" value="Perspiciatis impedit maiores."  placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                   <td class="col-md-1"> 
                    <input id="pyear_published3" name="pyear_published[]" type="text" value="Minima magnam omnis harum vero exercitationem necessitatibus."  placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
                   <td class="col-md-1"> 
                    <input id="pyear_issued3" name="pyear_issued[]" type="text" value="Velit aut sunt animi ab quibusdam officiis."  placeholder="DD/MM/YYYY" class="form-control input-md" required=""> 
                  </td>
             
                </tr>
                              </tbody>
            </table>
          </div>
             
           </div>

            
           </div>

            <!-- Book Text -->

             <div class="container-fluid table-responsive">
              <div class="row">

             <div class="panel panel-success">
             <div class="panel-heading">(B) Book(s) &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_book">Add Details</button></div>

             <table class="table table-bordered">
                 <tbody id="book">
                 
                 <tr height="30px">
                   <th class="col-md-1"> S. No.</th>
                   <th class="col-md-2"> Author(s)</th>
                   <th class="col-md-2"> Title of the Book </th>
                   <th class="col-md-2"> Year of Publication </th>
                   <th class="col-md-2"> ISBN</th>
                   <!-- <th class="col-md-2"> Status</th> -->
                 </tr>


                                  
                 <tr height="60px">
                  
                   <td class="col-md-1"> 
                     1                     </td>
                   <td class="col-md-4"> 
                       <input id="bauthor1" name="bauthor[]" type="text" value="Rerum laudantium aspernatur."  placeholder="Author" class="form-control input-md" required=""> 
                     </td>
                   <td class="col-md-3"> 
                     <input id="btitle1" name="btitle[]" type="text" value="Legacy Interactions Coordinator"  placeholder="Title" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="byear1" name="byear[]" type="text" value="Eos aspernatur animi illo iusto nostrum adipisci dolorem pariatur dolorum."  placeholder="Year of" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="bisbn1" name="bisbn[]" type="text" value="Consequuntur quam animi."  placeholder="" class="form-control input-md" required=""> 
                   </td>
               
                 </tr>
                                  
                 <tr height="60px">
                  
                   <td class="col-md-1"> 
                     2                     </td>
                   <td class="col-md-4"> 
                       <input id="bauthor2" name="bauthor[]" type="text" value="Mollitia pariatur distinctio laboriosam ipsum cupiditate dolores laborum porro."  placeholder="Author" class="form-control input-md" required=""> 
                     </td>
                   <td class="col-md-3"> 
                     <input id="btitle2" name="btitle[]" type="text" value="Human Tactics Specialist"  placeholder="Title" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="byear2" name="byear[]" type="text" value="Fugiat sed debitis iusto sunt atque."  placeholder="Year of" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="bisbn2" name="bisbn[]" type="text" value="Ab repellendus laboriosam rem laudantium iure."  placeholder="" class="form-control input-md" required=""> 
                   </td>
               
                 </tr>
                                  
                 <tr height="60px">
                  
                   <td class="col-md-1"> 
                     3                     </td>
                   <td class="col-md-4"> 
                       <input id="bauthor3" name="bauthor[]" type="text" value="A cumque eligendi a."  placeholder="Author" class="form-control input-md" required=""> 
                     </td>
                   <td class="col-md-3"> 
                     <input id="btitle3" name="btitle[]" type="text" value="Forward Paradigm Director"  placeholder="Title" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="byear3" name="byear[]" type="text" value="Facilis est officiis minima animi quos sed cupiditate."  placeholder="Year of" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="bisbn3" name="bisbn[]" type="text" value="Similique qui voluptates hic eius unde temporibus quasi nam."  placeholder="" class="form-control input-md" required=""> 
                   </td>
               
                 </tr>
                                </tbody>
             </table>
            </div>
              
            
            </div>

             
            </div>


            <br />
            <br />

            <!-- Book chapter Text -->

             <div class="container-fluid table-responsive">
              <div class="row">

             <div class="panel panel-success">
             <div class="panel-heading">(C) Book Chapter(s)&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger" id="add_more_book_chapter">Add Details</button></div>

             <table class="table table-bordered">
                 <tbody id="book_chapter">
                 
                 <tr height="30px">
                   <th class="col-md-1"> S. No.</th>
                   <th class="col-md-2"> Author(s)</th>
                   <th class="col-md-2"> Title of the Book Chapter(s) </th>
                   <th class="col-md-2"> Year of Publication </th>
                   <th class="col-md-2"> ISBN</th>
                   <!-- <th class="col-md-2"> Status</th> -->
                 </tr>


                                  
                 <tr height="60px">
                  
                   <td class="col-md-1"> 
                     1                     </td>
                   <td class="col-md-4"> 
                       <input id="bc_author1" name="bc_author[]" type="text" value="Ducimus sint nisi suscipit sapiente accusantium perspiciatis ullam cumque id."  placeholder="Author" class="form-control input-md" required=""> 
                     </td>
                   <td class="col-md-3"> 
                     <input id="bc_title1" name="bc_title[]" type="text" value="Senior Markets Officer"  placeholder="Title" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="bc_year1" name="bc_year[]" type="text" value="Error maxime fugit error provident cupiditate ipsum."  placeholder="Year of" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="bc_isbn1" name="bc_isbn[]" type="text" value="Unde expedita quasi."  placeholder="" class="form-control input-md" required=""> 
                   </td>
               
                 </tr>
                                  
                 <tr height="60px">
                  
                   <td class="col-md-1"> 
                     2                     </td>
                   <td class="col-md-4"> 
                       <input id="bc_author2" name="bc_author[]" type="text" value="Eveniet repellendus debitis nisi velit laborum fugiat doloremque."  placeholder="Author" class="form-control input-md" required=""> 
                     </td>
                   <td class="col-md-3"> 
                     <input id="bc_title2" name="bc_title[]" type="text" value="National Group Planner"  placeholder="Title" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="bc_year2" name="bc_year[]" type="text" value="Illo commodi esse officiis autem eos dolore quis impedit."  placeholder="Year of" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="bc_isbn2" name="bc_isbn[]" type="text" value="Dicta est voluptates animi praesentium deleniti quo iure."  placeholder="" class="form-control input-md" required=""> 
                   </td>
               
                 </tr>
                                  
                 <tr height="60px">
                  
                   <td class="col-md-1"> 
                     3                     </td>
                   <td class="col-md-4"> 
                       <input id="bc_author3" name="bc_author[]" type="text" value="Adipisci sapiente eligendi fugiat voluptas hic delectus aperiam porro."  placeholder="Author" class="form-control input-md" required=""> 
                     </td>
                   <td class="col-md-3"> 
                     <input id="bc_title3" name="bc_title[]" type="text" value="Product Security Planner"  placeholder="Title" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="bc_year3" name="bc_year[]" type="text" value="Odio atque magnam minus ut blanditiis dolorum."  placeholder="Year of" class="form-control input-md" required=""> 
                   </td>
                   <td class="col-md-2"> 
                     <input id="bc_isbn3" name="bc_isbn[]" type="text" value="Quidem earum dicta placeat commodi rem."  placeholder="" class="form-control input-md" required=""> 
                   </td>
               
                 </tr>
                                </tbody>
             </table>
            </div>
              
            
            </div>

             
            </div>


            <br />
            <br />
            

 

            <h4 style="text-align:center; font-weight: bold; color: #6739bb;">8. Google Scholar Link *</h4>
            <div class="row">
            <div class="col-md-12">
            <div class="panel panel-success">
            <div class="panel-heading">URL</div>
            <div class="panel-body">
              <span class="col-md-2 control-label" for="google_link">Google Scholar Link </span>  
              <div class="col-md-10">
              <input id="google_link" value="yy" name="google_link" type="text" placeholder="Google Scholar Link" class="form-control input-md" required="">
              </div>

              

            </div>
            </div>
            </div>
            </div>


            <!-- Button -->
<div class="form-group">

  <div class="col-md-1">
    <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/employment_details" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-fast-backward"></i></a>
  </div>

<div class="col-md-11">
  <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right">SAVE & NEXT</button>
  
</div>

             
            </div>
           

            </fieldset>
            </form>
            
            

        </div>
    </div>
</div>

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