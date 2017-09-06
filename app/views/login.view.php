<!DOCTYPE html>
<html>
<link rel="import" href="../../public/scripts.php">
<body>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="well" style="margin-top: 10%;">
            <h3>Login to admin</h3>
            <form role="form" id="contactForm" data-toggle="validator" class="shake">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="username" class="h4">Username</label>
                        <input class="form-control" id="username" placeholder="Enter username">
                        <label for="password" class="h4">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                    </div>
                </div>
            </form>
            <button  id="form-submit" class="btn btn-success">Log din</button>
        </div>
    </div>
</div>
</body>


</html>