<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container">
            <center>
                <h2>Contact</h2>
            </center>
            <form action="email.php" method="POST">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-envelope"></i>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fas fa-question"></i>
                            </span>
                            <input type="text" name="affair" class="form-control" placeholder="Affair" aria-label="Affair" aria-describedby="basic-addon2" required="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">
                                <i class="fas fa-question"></i>
                            </span>
                            <input type="text" name="theme" class="form-control" placeholder="Theme" aria-label="Theme" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon4">
                                <i class="far fa-sticky-note"></i>
                            </span>
                            <textarea class="form-control" name="message" placeholder="Message" aria-label="Message" aria-describedby="basic-addon4" required=""></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <center>
                    <button type="submit" class="btn btn-dark">Send</button>
                </center>
            </form>
        </div>  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>
