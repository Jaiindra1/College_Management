<html>
<head>
<title> S.R.K IT DEPT</title>
 <style>
body{
    margin: 0;
  padding: 0;
  font-family: sans-serif;
   background: url('https://wallpaperaccess.com/full/24866.jpg') no-repeat;
background-size: cover;
  
}
 table,th,td{
   border: 2px solid black;
   width : 650px;
 background-color: transparent;
}
.btn{
width: 10;
height:5%;
font-size:22px;
padding:0px;

}
</style>
</head>
<body>
 <!-- Page Content -->
    <div class="container">
  <div class="sidebar-brand">
             <h1><span clas="lab la-accsoft"></span> Another Details</h1>
        </div>
        <div class="sidebar-menu">
            <ul>
               
                <p>
                   <a href="https://www.jntufastupdates.com/jntuk-time-tables/"><span class="las la-users"></span>
                      <h2>Exam Time Tables</h2>
                    </a>
                    </p>

                
                <p>
                   <a href="index.html">LogGout
                      
                    </a>
                    </p>
            
               
                
              </div>
          </div>
  
    	<center>
<div id="form_alerts"></div>
                    <form onsubmit = "return validation()" method = "POST"">
  Year :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <select  name="sem_id">
    <option value="Select">Select</option>
    <option value="1">1-1 Sem</option>
    <option value="2">1-2 Sem</option>
    <option value="3">2-1 Sem</option>
    <option value="4">2-2 Sem</option>
    <option value="5">3-1 Sem</option>
    <option value="6">3-2 Sem</option>
    <option value="7">4-1 Sem</option>
    <option value="8">4-2 Sem</option>
   </select><br><br><br>
 Day :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <select  name="Day">
    <option value="Select">Select</option>
    <option value="Mon">Monday   </option>
    <option value="Tue">Tuesday  </option>
    <option value="Wed">Wednesday</option>
    <option value="Thu">Thursday </option>
    <option value="Fri">Friday   </option>
    <option value="Sat">Saturday </option>

   </select><br><br><br>

<input type="submit" name="search" value="submit">
 </form>
						
				<div class="table-responsive">
					<table class="table-bordered table-striped">
                                               <tr>
                                              <th>sem</th>
                                              
	           			      <th>Subject_Name </th>
				 	     
					       <th>Time</th>
                                              <th>Day</th>
                                                        <th>Faculty_Name </th>
                                         </br>
					      
						
		<?php
 
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,'javapoint');
  
					if(isset($_POST['search'])){
					 $sem_id =$_POST['sem_id'];
                                     $Day =$_POST['Day'];
	$query="SELECT * FROM `time_table` WHERE sem_id ='$sem_id' AND Day='$Day'";
                                    
					$query_run = mysqli_query($connection,$query);
					
                                             

				while($row = mysqli_fetch_array($query_run)){
										          
						


                				
						?>
							
							<tr>
					  <td align="center"> <?php echo $row['sem']; ?> </td>
				<td align="center"> <?php echo $row['subject_Name']; ?> </td>
				 <td align="center"> <?php echo $row['Time']; ?> </td>
                                       <td align="center"> <?php echo $row['Day']; ?> </td>
					   <td align="center"> <?php echo $row['Faculty_Name']; ?> </td>
                                                    <?php 

   $connect = mysqli_connect("localhost","root","","javapoint") or die ("connection failed");



?></td>
                                                      
                                                 
                                                      </tr>

                                                      
							 
					<?php
			
			}	}
 
					?>   


 

						</table>
				</tr>
			</tbody>
			<br>
	   
                           <input type="button" onclick="window.print()" class="ci" value="Print Result"></th></tr></tbody></table></div>
			<br>

</body>
</html>

 

