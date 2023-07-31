<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from contact where id='$adminid'");
if($msg)
{
echo "<script>alert('Do you really want to delete');</script>
<script>document.location.href='contact-details.php';  
      </script>";
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
    <title>Contacter Details | Copo Digital</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>

     <!-- Export data css -->
     <?php include('../css/export-css.php');?>

</head>

<body class="sb-nav-fixed">
    <?php include_once('includes/navbar.php');?>
    <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php');?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Contact</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            New Contact Details
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatablesSimple" class="border table-bordered">
                                    <thead>
                                        <tr>                                            
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Reg. Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Select</th>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Reg. Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php $ret=mysqli_query($con,"select * from contact");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($ret))
                                    {?>
                                        <tr>
                                            <!-- <td><input type="checkbox"></td> -->
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['mobile'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['message'];?></td>
                                            <td><?php echo date('d-m-Y', strtotime($row['created_at'])); ?></td>
                                            <td>

                                                <a class="btn btn-sm btn-dark" href="contact-profile.php?uid=<?php echo $row['id'];?>">
                                                <i class="fas fa-eye"></i></a>
                                                <a class="btn btn-sm btn-danger" href="contact-details.php?id=<?php echo $row['id'];?>">
                                                <i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <?php $cnt=$cnt+1; }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php include('../includes/footer.php');?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <!-- <script src="../js/datatables-simple-demo.js"></script> -->

    <!-- Export data js -->
    <?php include('../js/export-js.php');?>

</body>

</html>
<?php } ?>