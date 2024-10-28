<?php
    // database connection
    include('database.php');

?>



<html>

    <head>
        <title>Let's Chat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>


    <body>

        <div class="container" align="center">

            <div class="headder">
                <h1>Chat-App</h1>
                <p>Version-01</p>
            </div>


            <!-- Message display area -->
            <div class="body">

            </div>


            <!-- user input display area -->
            <div class="user_input">

                <form action="" method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">New message : </label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Message">
                        </div>

                        <div class="col-sm-3">
                            <input type="submit" value="Send" class="btn btn-success">
                        </div>
                    </div>
                </form>

            </div>

            <div class="container_1">
                <form class="needs-validation" novalidate action="students.php" method="POST">
                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <input type="text" name="stname" placeholder="Name:" class="form-control"/></div>

                    <div class="col-md-3 mb-3">
                        <input type="number" name="stnic" placeholder="NIC Number" class="form-control"/></div>

                    <div class="col-md-5 mb-3">
                        <textarea class="form-control" rows="1" name="address" placeholder="Address"></textarea></div>

                </div>
                        
                <div class="form-row">

                    <div class="col-md-2 mb-3">
                        <input type="number" name="batch" placeholder="A/L Year:" class="form-control"/></div>           

                    <div class="col-md-3 mb-3">
                        <input type="number" name="phone" placeholder="Mobile Number" class="form-control"/></div>

                    <div class="col-md-3 mb-3">
                        <input type="submit" name="add" value="Add" class="btn btn-primary"/></div>

                </div> 
                
            </form>
            </div>


        </div>
    </body>
</html>