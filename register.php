<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/register.css">
  </head>
  <body>
    <section class="container-fluid">
      <!-- register form -->

      <form action="./includes/register-formhandler.php" class="register-form d-flex flex-column justify-content-center" method="post">
          <img class="img-fluid logo mx-auto" src="assets/images/shopiverse .png" alt="logo">
            <div class="form-group mt-2">
              <label for="username" class="fs-4"> Names</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Enter Full Names">
            </div>

            <div class="form-group mt-2">
              <label for="phone" class="fs-4"> Phone Number</label>
              <div class="d-flex">
                    <select name="countryCode" id="countryCode" class="rounded">
                        <option value="256">Uganda (+256)</option>
                        <option value="245">Kenya (+245)</option>
                        <option value="243">Rwanda (+243)</option>
                    </select>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="eg. 7564.....">
              </div>
            </div>

            <div class="form-group mt-2">
              <label for="email" class="fs-4"> Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address">
            </div>

            <div class="form-group mt-2">
              <label for="password" class="fs-4"> Password</label>
              <div class="pwd-icon d-flex">
                <input type="password" name="pwd" id="pwd" class="form-control"></input>
                <i class="fas fa-eye text-primary d-flex  align-items-center" id="togglePassword" style="cursor: pointer;"></i>
              </div>
            </div>
            
            <div class="user mt-2 d-flex gap-3 fs-5">
              <p class="fw-light">Already Have An Account?</p>
              <a href="login.php" class="text-decoration-none fw-bold">Login</a>
            </div>

            <button class="btn btn-primary btn-lg w-100 mt-2" name="submitbtn">Submit</button>
      </form>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>