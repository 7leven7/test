<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
    <link rel="stylesheet" href="app/assets/css/style.css">
    <link href="app/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Citrus System</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="app/assets/js/bootstrap.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="fixed-top">
    <header class="topbar">
        <div class="container">
            <div class="row">
                <!-- social icon-->
                <div class="col-sm-12">
                    <ul class="social-network">
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
        <div class="container">
            <a class="navbar-brand" rel="nofollow" target="_blank" style="text-transform: uppercase;">Citrus Systems</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class='container-fluid'>
    <div class='row'>
		<?php foreach ($citruses as $citrus) { ?>
            <div class="col-xs-12 col-md-4">
                <div class="card shadow-sm border-light mb-4">
                    <a href="#" class="position-relative">
                        <img src="<?php echo $citrus['path'] ?>" class="card-img-top" alt="image"> </a>
                    <div class="card-body">
                        <h3 class="font-weight-normal text-center"><?php echo $citrus['title'] ?></h3>
                        <div class="post-meta"><span class="small lh-120"><i
                                        class="fas fa-map-marker-alt mr-2"></i><?php echo $citrus['desc'] ?></span>
                        </div>
                    </div>
                </div>

            </div>
		<? } ?>
    </div>
</div>

<div class="col-md-6 col-md-offset-6 text-center comments-section">
    <form class="clearfix" action="comment" method="post" id="comment_form">
        <h4>Post a comment:</h4>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                   placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="comment_form">Comment</label>
            <textarea name="comment_text" id="comment" class="form-control" cols="30" rows="3" placeholder="Some text..."></textarea>
        </div>
        <button class="btn btn-success btn-sm pull-right" id="submit_comment">Submit comment</button>
    </form>
    <hr>

    <?php if (count($comments) > 0){ ?>
        <h4>All comments:</h4>
   <?php } ?>

   <?php foreach ($comments as $comment){ ?>
            <div class="card-body">
                <br/>
                <h3><?php echo @ $comment['name']?></h3>
                <h6><?php echo $comment['email']?></h6>
                <hr />
                <h5><?php echo $comment['comment']?></h5>
                <hr />
            </div>
    <?php } ?>
</div>
</body>
</html>