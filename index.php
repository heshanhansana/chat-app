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

        </div>
    </body>
</html>