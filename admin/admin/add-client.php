
<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    
?>

<?php 
// database Connection
include_once('../includes/config.php');

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $category = $_POST['category'];
	$filename = $_FILES['uploadfile']['name'];
    // Retrieve form data
  

        
	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],'../../images/clients/'.$filename)){
		// Image db insert sql
		$insert = "INSERT into tblclients(company_name,company_image,category,c_mobile,c_email,status) values('$name','$filename','$category','$mobile','$email',1)";
		if(mysqli_query($conn, $insert)){
		  echo "<script>alert('Data inserted successfully')</script> <script>document.location.href='add-client.php';  
          </script>";
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['uploadfile']['name'].'<br/>';
	}
	}
} 
?>

<!DOCTYPE html>
<html>

<head>
    <title>Clients Info add</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>

<style>
body {
    background-color: #f0f0f0;
}
</style>

<body>
    <?php include_once('includes/navbar.php');?>
    <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php');?>
        <div id="layoutSidenav_content">
            <div class="container my-5">
                <div class="card offset-md-3 col-md-6">
                    <div class="card-body">
                        <h4 class="text-center text-info">Add new Clients</h4>
                        <div id="content">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Company Name/Client Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="name"
                                        placeholder="Company Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Category</label>
                                    <select class="form-control" name="category" id="exampleFormControlSelect1"
                                        required>
                                        <option>--select--</option>
                                        <option value="Government">Government</option>
                                        <option value="Association">Associations Agencies</option>
                                        <option value="Organiser">Organisers Agencies</option>
                                        <option value="Corporate">Corporate</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mobile Number</label>
                                    <input type="number" class="form-control" name="mobile" id="exampleInputPassword1"
                                        required placeholder="Mobile Number..">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                        aria-describedby="emailHelp" placeholder="Enter email" required>

                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Upload Company Logo</label>
                                    <input type="file" class="form-control-file" name="uploadfile" value=""
                                        id="exampleFormControlFile1">
                                </div>


                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="submit">ADD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    

   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>

</body>

</html>
<?php } ?>