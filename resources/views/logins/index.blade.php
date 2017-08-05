
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Welcome to the best church software ever!</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <!-- Custom styles for this template -->
        <link href="/css/blog.css" rel="stylesheet">
    </head>

    <body>

        <!--@include('layouts.nav')-->

        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title">Login to enjoy the fun</h1>
                <p class="lead blog-description">Hurry up and join the party</p>
            </div>
        </div>

        <div class="container">

            <div class="row">

                <form method="POST" action="/login">
                    
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        
                        <label for="username">Username:</label>
                        
                        <input type="text" class="form-control" id="username" name="username">
                        
                    </div>
                    
                    <div class="form-group">
                        
                        <label for="password">Password:</label>
                        
                        <input type="password" class="form-control" id="password" name="password">
                        
                    </div>
                    
                    <div class="form-group">
                        
                         <button type="submit" class="btn btn-default">Login</button>
                         
                    </div>
                    
                </form>

                @include('layouts.formerror')


            </div><!-- /.row -->

        </div><!-- /.container -->

    </body>
</html>
