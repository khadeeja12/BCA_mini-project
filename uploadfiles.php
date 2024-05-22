<?php
Include("connection.php");
?>
<html>

    <head>
        <title>Add batch</title>
        <style>*
        {
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;
            color:grey;
        }
	body{
        background: url('images/13.jpg');
		  background-size:cover;
		  background-repeat:no-repeat;
                  opacity:0.9;
}
fieldset {
  display: block;
  margin-left: 500px;
  margin-right: 510px;
  border-radius: 10px;
  background-color:black;
  margin-bottom:10px;
  height:100%;
  
}
input {
  width: 80%;
  padding: 6px 55px;
  margin: 10px 0px;
  box-sizing:border-box;
  background-color:white;
  
}
      
        </style>
    
    </head>
    <body>
        
    <div>
    
        
        <form class=" " action="uploadfiles.php" method="post" name="uploadfiles" >
            
            <fieldset style="height:230;margin-top:150" >
                <h1 align="center" style="font-size: 30px;">ADD NOTES</h1>
            <input type="file" name="pdf" value="" style="margin-left:45px;"><br><br>
            <input type="Submit" name="submit" value="upload" size="200" style="color: rgb(0, 0, 0);background: #eeeaec;border-radius: 10px;margin-left:45px;"></a></fieldset></form></div>
    </div>
    </body>
</html>
        <?php

        if (isset($_POST['submit'])) {
            if (isset($_FILES['pdf_file']['name']))
            {
        $pdf=$_FILES['pdf']['name'];
           $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store= "/pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="insert into pdffile(pdf) values('$pdf')";
          $query=mysqli_query($con,$sql);


            }
        }



         ?>

    
</html>

