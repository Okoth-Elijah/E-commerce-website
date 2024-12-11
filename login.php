<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/login.css">
  </head>
  <body>
    <section class="container-fluid">
      <!-- login form -->

      <form action="" class="login-form d-flex flex-column justify-content-center" method="post">
          <img class="img-fluid logo mx-auto" src="assets/images/shopiverse .png" alt="logo">

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
              <label for="password" class="fs-4"> Password</label>
              <div class="pwd-icon">
                <input type="password" name="pwd" id="pwd" class="form-control">
              </div>
            </div>
            
            <button class="btn btn-primary btn-lg w-100 mt-3" name="submitbtn">Submit</button>
      </form>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>