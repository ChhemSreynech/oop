<?php
    include "header.php";
?>

<div class="container">
<h2 class="text text-center text-primary mt-4">PHP OOP</h2>
<hr>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="input">Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name only!!!" required>
                    </div>

                    <div class="form-group">
                        <label for="input">Gender:</label><br>
                        <select name="Gender" id="" class="form-control">
                            <option value="">Female</option>
                            <option value="">Male</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="input">Province:</label>
                        <input type="text" class="form-control" name="Province" placeholder="Enter Province only!!!" required>
                    </div>

                    <div class="form-group">
                        <label for="input">Email:</label>
                        <input type="text" class="form-control" name="Email" placeholder="Enter Email only!!!" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="btn" class="btn-primary btn-sm float-right">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-4">
        <?php
        include "getvalue.php";
        ?>
                <p>Name</p>
                <p>Gender</p>
                <p>Province</p>
                <p>Email</p>
    </div>
    </div>
</div>