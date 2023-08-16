<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Client Profile | Copo Digital</title>
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
                        $query=mysqli_query($conn,"select * from tblclients where id='$userid'");
                        while($result=mysqli_fetch_array($query))
                        {?>
                    <h2 class="mt-4"><?php echo $result['company_name'];?>'s Profile</h2>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="view-clients.php">view-clients</a></li>
                        <li class="breadcrumb-item active">profile</li>
                    </ol>
                    <div class="card mb-4">

                        <div class="card-body">
                            <a class="btn btn-sm bg-primary text-light mb-2"
                                href="edit-client.php?uid=<?php echo $result['id'];?>">Edit</a>
                            <a class="btn btn-sm bg-danger text-light mb-2" href="view-clients.php"
                                name="back">Back</a>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Company Name</th>
                                    <td><?php echo $result['company_name'];?></td>
                                </tr>
                                <tr>
                                    <th>Company Number</th>
                                    <td><?php echo $result['c_mobile'];?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td colspan="3"><?php echo $result['c_email'];?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td colspan="3"><?php echo $result['status'];?></td>
                                </tr>

                                <tr>
                                    <th>Reg. Date</th>
                                    <td colspan="3"><?php echo $result['created_at'];?></td>
                                </tr>
                                <tr>
                                    <th>Company Logo</th>
                                    <td colspan="3">
                                        <img src="../../images/clients/<?php echo $result['company_image']; ?>"
                                            style="height: 120px; width: auto;" alt="Image">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
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