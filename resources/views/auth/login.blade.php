<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style2.css">
    <meta charset="utf-8">
    <title>Login - Bokkusu</title>
  </head>
  <body>
    <div class="newsletter-container">
      <div class="picture"></div>
        <div class="login">
          <img class="logo" src="../image/logobokkusu.png" alt="logo"><br><br>
          <h1>Welcome to us</h1>
                <form class="form" method="POST" action="/auth/postlogin">
                  @csrf
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <!-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                <button type="submit" class="btn btn-primary">Login</button>
                </form>
          <p><br>don't have any account? please <a href="/auth/register">Sign-up</a></p>
        </div>
    </div>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
