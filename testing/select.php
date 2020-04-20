<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $output = '';  
 $sql = "SELECT * FROM address";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="10%">First Name</th>  
                     <th width="10%">Last Name</th>  
					 <th width="10%">email</th>
                     <th width="10%">mob_no</th>  
                     <th width="10%">address</th>  
                     <th width="10%">city</th>  
                     <th width="10%">state</th>  
                     <th width="10%">pin_code</th>   
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM address LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["email"].'</td>  
                     <td class="first_name" data-id1="'.$row["email"].'" contenteditable>'.$row["first_name"].'</td>  
                     <td class="last_name" data-id2="'.$row["email"].'" contenteditable>'.$row["last_name"].'</td> 
                     <td class="email" data-id3="'.$row["email"].'" contenteditable>'.$row["email"].'</td> 
                     <td class="mob_no" data-id4="'.$row["email"].'" contenteditable>'.$row["mob_no"].'</td> 
                     <td class="address" data-id5="'.$row["email"].'" contenteditable>'.$row["address"].'</td> 
                     <td class="city" data-id6="'.$row["email"].'" contenteditable>'.$row["city"].'</td> 
                     <td class="state" data-id7="'.$row["email"].'" contenteditable>'.$row["state"].'</td> 
                     <td class="pin_code" data-id8="'.$row["email"].'" contenteditable>'.$row["pin_code"].'</td> 					 
                     <td><button type="button" name="delete_btn" data-id3="'.$row["email"].'" class="btn btn-xs btn-danger btn_delete">detete</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="first_name" contenteditable></td>  
                <td id="last_name" contenteditable></td>  
				<td id="email" contenteditable></td>
                <td id="mob_no" contenteditable></td> 
                <td id="address" contenteditable></td> 
                <td id="city" contenteditable></td> 
                <td id="state" contenteditable></td> 
                <td id="pin_code" contenteditable></td> 				
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">add address</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="first_name" contenteditable></td>  
					<td id="last_name" contenteditable></td>  
					<td id="email" contenteditable></td>
                    <td id="mob_no" contenteditable></td>  
                    <td id="address" contenteditable></td>  
                    <td id="city" contenteditable></td>  
                    <td id="state" contenteditable></td>  
                    <td id="pin_code" contenteditable></td>  					
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">add address</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>