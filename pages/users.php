<?php
include '../include/header2.php';
include '../include/navbar2.php';
include 'connect.php';
?>

       
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Users</h1>
                    </div>
                    
                    <div>
                        <table border="1" style="width: 90%">
                        <tr>
                                <th># id</th>
                                <th>Full Name</th>
                                <th>Email Adress</th>
                                <th>usertype</th>
                                <th>Contact</th>
                                <th>Password</th>

                                <th colspan="2">Modify Buttons</th>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM users";
                            $result = $conn-> query($sql);

                            if($result-> num_rows > 0){
                            
                                while ($row = $result-> fetch_assoc()){
                                    echo "<tr><td>". $row["id"] ."</td><td>". $row['fullname'] ."</td><td>". $row['email'] ."</td><td>". $row['usertype'] ."</td><td>". $row['contact'] ."</td></td>"."</td><td>". $row['lpassword'] ."</td>".
                                    "<td>",
                                    "<form action='update.php' method='post'>
                                     <input name='id' value='",$row["id"],"' hidden>
                                     <button type='submit' name='update' value='update'>Edit</button>
                                    </form>",
                                "</td>",
                                "<td>",
                                    "<form action='' method='post'>
                                     <input name='id' value='",$row["id"],"' hidden>
                                     <button type='submit' name='delete' value='delete'>Delete</button>
                                    </form>",
                                "</td>",
                                "</tr>";


                                }
                                echo "</table>";
                            }
                            else{
                                echo "0 result";
                            }
                            ?>
                        </table>
                    </div>

                </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
<?php
    include '../include/script2.php';
    
?>

<script>

function myfunction(){
    const m = document.getElementById('demo');
    m.remove();
}

</script>

</body>

</html>