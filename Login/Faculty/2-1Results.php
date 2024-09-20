<html>
<head>
<title> S.R.K IT DEPT</title>
 <style>
body{
    margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(pexels2.jpg) no-repeat;
background-size: cover;
  
}
 table,th,td{
   border: 2px solid black;
   width : 650px;
 background-color: white;
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
		<form  method = "POST">	   
	<br><input type="text" name="Htno" placeholder="Enter Number"/>
            <input type="submit" name="search" value="submit">
       </form>
						
				<div class="table-responsive">
					<table class="table-bordered table-striped">
                                               <tr>
                                              <th>Htno</th>
                                              <th>Subcode </th>
	           			      <th>Subname </th>
				 	      <th>Grade </th>
					      <th>Credits</th><br>
						
		<?php
 
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection, 'javapoint');
  
					if(isset($_POST['search'])){
					 $Htno =$_POST['Htno'];
					$query = "SELECT * FROM `2-1results` WHERE Htno = '$Htno' ";
                                        
					$query_run = mysqli_query($connection,$query);
					
				
				while($row = mysqli_fetch_array($query_run)){
					                          
						?>
							<tr>
							  <td> <?php echo $row['Htno']; ?> </td>
							  <td> <?php echo $row['Subcode']; ?> </td>
							  <td> <?php echo $row['Subname']; ?> </td>
							  <td> <?php echo $row['Grade']; ?> </td>
							  <td> <?php echo $row['Credits']; ?> </td>
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


 

