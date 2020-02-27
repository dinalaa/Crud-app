<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5"> 
                <h1 class='text-center'>php crud</h1>
                <hr>
            </div>
        </div>
        <div class="row">
           <div class="col-md-5 mx-auto">
               <?php 
                    include 'connection.php';
                    $model = new model();
                    $insert = $model -> insert();
                    echo $insert;
                ?>
               <form action="" method="post">
                   <div class="form-group">
                      <label for="">name</label> 
                      <input type="text" name="name">
                   </div>
                   <div class="form-group">
                      <label for="">Email</label> 
                      <input type="email" name="email">
                   </div>
                   <div class="form-group">
                      <label for="">Mobile no.</label> 
                      <input type="text" name="mobile">
                   </div>
                   <div class="form-group">
                      <label for="">Address</label> 
                      <textarea name="address" id="" cols="30" rows="3" class="form-check"></textarea>
                   </div>
                   <div class="form-group">
                      <button type="sodium" name="submit" class="btn btn-primary">submit</button>
                   </div>
               </form>
           </div> 
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>