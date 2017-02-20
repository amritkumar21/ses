<!DOCTYPE html>
<html>
<head>
    <title>AdminLogin</title>
    <?php include 'head.php';?>
    <style type="text/css">
        #adminForm
        {
            width: 30%;
            margin:0 auto;
        }
    </style>
</head>
<body>

  <div id="adminForm">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action ="adminForm.php">
                <div class="form-group">
                     <input type="email" class="form-control" name="email" placeholder="email" required>
                </div>
                <div class="form-group">
                     <input type="password" class="form-control" name="password" placeholder="Password" required>
               </div>
               <div>
                   <button type="submit" class="btn btn-success">SUBMIT</button>
               </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>