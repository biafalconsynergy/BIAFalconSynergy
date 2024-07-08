<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>

<body>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include 'Sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- DataTables Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <?php
                        echo '<h6 class="m-0 font-weight-bold text-primary">'.$tableName.'</h6>';
                        ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!--Table-->
                            <?php
                                echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>';
                                                for ($i=0; $i < count($tableTitles); $i++) {
                                                    echo '<th scope="col">'.$tableTitles[$i].'</th>';
                                                }
                                                echo '<th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                    
                                    //Shows the result in the table previously created
                                    while ($row = $result->fetch_assoc()) {
                                        //  echo '<td>'.$row['$tableColumnNames[$i]'].'</td>
                                          echo '<tr>';
                                          for ($i=0; $i < count($tableColumnNames); $i++){
                                              echo '<td>'.$row[$tableColumnNames[$i]].'</td>';
                                          }
                                          echo' <td><a href="#">Edit</a></td>
                                                </tr>';
                                      }
                                      echo '</tbody>
                                          </table>';

                                                //deletes the information stored in $result
                                                $result->free();
                                                
                                                //Close the connection
                                                $conn->close();
                                                ?>
                            <!--End of Table-->
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Konnexio 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

</body>
</html>
