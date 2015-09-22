
<h1 align='center'>Contacts</h1>
 <?php
    if(isset($result_msg)){
        echo " <table width='800px' border='1px solid black'> <tr  bgcolor='#fb9c65'> <th>Contact ID</th> <th>Name</th> <th>Email</th> <th>Phone</th></tr> ";
        foreach($result_msg as $contact){
             echo " <tr> <td>$contact[id]</td> <td>$contact[name]</td> <td>$contact[email]</td> <td>$contact[phone]</td> </tr> ";
        }
        echo "</table>";
    }else {
        echo "There is no any cotacts yet";
    }
 
 
 
 ?>

