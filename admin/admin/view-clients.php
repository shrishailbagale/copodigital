<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from tblclients where id='$adminid'");
if($msg)
{
echo "<script>alert('Do you really want to delete');</script>
        <script>document.location.href='contact-details.php';</script>";
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
    <title>Clients Details - Exhicon</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />

    <!-- Export data css -->
    <?php include('../css/export-css.php');?>
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
                    <h1 class="mt-4">Clients Details</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">view-clients</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Registered Clients Details
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatablesSimple" class="border table-bordered">
                                    <thead style="background-color:#f8f9fa;">
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Category</th>
                                            <th>Company Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Reg. Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Category</th>
                                            <th>Company Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Reg. Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php $ret=mysqli_query($con,"select * from tblclients");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($ret))
                                    {?>
                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo $row['category'];?></td>
                                            <td><?php echo $row['company_name'];?></td>
                                            <td><?php echo $row['c_mobile'];?></td>
                                            <td><?php echo $row['c_email'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><?php echo date('d-m-Y', strtotime($row['created_at'])); ?></td>
                                            <td>

                                                <a class="btn btn-sm btn-primary"
                                                    href="client-profile.php?uid=<?php echo $row['id'];?>">
                                                    <i class="fas fa-edit"></i></a>
                                                <a class="btn btn-sm btn-danger"
                                                    href="view_clients.php?id=<?php echo $row['id'];?>">
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