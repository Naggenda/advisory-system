<?php

include '../include/header2.php';
include '../include/navbar2.php';

?>


<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Notify Farmers</h1>
    <form method="POST" action="">
        <div class="form-group">
            <label for="">Pest/Disease Name</label>
            <input type="text" name="pestname" placeholder="pest/disease name" required class="form-control" />
        </div>
        <div class="form-group">
            <h5>Description</h5>
            <textarea type="text" name="pestname" placeholder="pest/disease name" rows="4" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <h5>Control Measures</h5>
            <textarea type="text" name="pestname" placeholder="pest/disease name" rows="5" required class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Notify</button>
    </form>


</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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