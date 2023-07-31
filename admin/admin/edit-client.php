<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
{
    $companyName=$_POST['fname'];
    $email=$_POST['lname'];
    $contact=$_POST['contact'];
$userid=$_GET['uid'];
    $msg=mysqli_query($con,"update tblclients set company_name='$companyName',c_email='$email',c_mobile='$contact', update_date= now() where id='$userid'");

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = ''; </script>";
}
}


    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit client</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <?php include_once('includes/navbar.php');?>
    <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php');?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    <?php 
$userid=$_GET['uid'];
$query=mysqli_query($con,"select * from tblclients where id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
                    <h1 class="mt-4"><?php echo $result['company_name'];?>'s Profile</h1>
                    <div class="card mb-4">
                        <form method="post">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>First Name</th>
                                            <td><input class="form-control" id="fname" name="fname" type="text"
                                                    value="<?php echo $result['company_name'];?>" required /></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><input class="form-control" id="lname" name="lname" type="text"
                                                    value="<?php echo $result['c_email'];?>" required /></td>
                                        </tr>
                                        <tr>
                                            <th>Contact No.</th>
                                            <td colspan="3"><input class="form-control" id="contact" name="contact"
                                                    type="text" value="<?php echo $result['c_mobile'];?>"
                                                    pattern="[0-9]{10}" title="10 numeric characters only" required />
                                            </td>
                                            <!--   maxlength="10" -->
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td colspan="3"><?php echo $result['c_email'];?></td>
                                        </tr>


                                        <tr>
                                            <th>Reg. Date</th>
                                            <td colspan="3"><?php echo $result['created_at'];?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="text-align:center ;">
                                            <button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
                                            <a href="client-profile.php?uid=<?php echo $result['id'];?>" class="btn btn-danger btn-block" name="back">Back</a>
                                        </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>

                </div>
            </main>
            <?php include('../includes/footer.php');?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>
<?php } ?>