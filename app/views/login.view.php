<!DOCTYPE html>
<html>
<?php include 'scripts.php';?>
<body>
<div class="container">
    <h2>Log In</h2>
    <form class="form-horizontal" method="POST" id="form-login">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
        </div>
    </form>
    <div class="col-sm-offset-2 col-sm-10">
        <button id="submit-button" class="btn btn-default">Submit</button>
    </div>
</div>

</body>


</html>