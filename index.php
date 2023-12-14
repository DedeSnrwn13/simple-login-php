<?php
    $pageTitle = "Login Form - Dede Sunarwan";
    include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="text-center">
                <span>Nama: <b>Dede Sunarwan</b></span>
                <br>
                <span>NPM: <b>21552011318</b></span>
                <br>
                <span>Kelas: <b>TIF RM 221MC</b></span>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="fw-bold">Formulir Login</h5>
                </div>
                <div class="card-body">
                    <form action="process-login.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Input nama">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Input email">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php
    include 'footer.php';
?>