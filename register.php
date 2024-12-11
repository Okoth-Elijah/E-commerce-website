<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/register.css">
  </head>
  <body>
    <section class="container-fluid">
      <!-- register form -->

      <form action="" class="register-form d-flex flex-column justify-content-center" method="post">
          <img class="img-fluid logo mx-auto" src="assets/images/shopiverse .png" alt="logo">
            <div class="form-group mt-2">
              <label for="names" class="fs-4"> Names</label>
              <input type="text" name="names" id="names" class="form-control" placeholder="Enter Full Names">
            </div>

            <div class="form-group mt-2">
              <label for="phone" class="fs-4"> Phone Number</label>
              <div class="d-flex">
                <select name="countrycodes" id="countryCodes" class="rounded" >
                  <option value="Uganda">+256</option>
                  <option value="Kenya">+245</option>
                  <option value="Rwanda">+243</option>
                </select>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="eg. 7564....." maxlength="10">
              </div>
            </div>

            <div class="form-group mt-2">
              <label for="email" class="fs-4"> Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address">
            </div>

            <div class="form-group mt-2">
              <label for="password" class="fs-4"> Password</label>
              <input type="password" name="pwd" id="pwd" class="form-control">
            </div>
            <div class="form-group mt-2">
              <label for="ConfirmPwd" class="fs-4"> Confirm Password</label>
              <input type="password" name="ConfirmPwd" id="ConfirmPwd" class="form-control">
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