<?php
include '../include/header2.php';
include '../include/navbar2.php';
include 'connect.php';
?>

        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">New User</h1>

                    <form action="" method="POST">


                    

                        <!-- full name -->
                        <div class="form-group">
                          <label for="">Full Name</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="full name" aria-describedby="">
                        </div>

                        <!-- email address -->
                        <div class="form-group">
                          <label for="">Email Adress</label>
                          <input type="email" name="email" id="email" class="form-control" placeholder="email Adress" aria-describedby="">
                        </div>

                        <!-- user_type -->
                        <div class="form-group">
                          <label for="">User type</label>
                          <input type="text" name="user_type"  class="form-control" placeholder="email Adress" aria-describedby="">
                        </div>

                        <!-- contact area -->
                        <div class="form-group">
                          <label for="">Contact</label>
                          <input type="number" name="number" id="number" class="form-control" placeholder="tel number" aria-describedby="">
                        </div>

                        <!-- password area -->
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="default password" aria-describedby="">
                        </div>

                        

                        <!-- submit button -->
                          <button type="submit" class="btn btn-primary" name="submit">Add</button>
                    </form>

                    <?php
                    include 'datastore.php';
                    ?>
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

</body>

</html>