<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container pt-4 py-2 text-center">

    <h2 class="">Register</h2>
  </div>
  <div class="container w-50 pt-4 shadow p-3 mb-5 bg-body-tertiary rounded">
    <form>
    <div class="mb-3">
        <label for="inputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" id="inputUsername" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="inputEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="inputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword">
      </div>
      <div class="mb-3">
        <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="inputConfirmPassword">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <div class="container pt-4">
      <p>Already have on account? <a href="./login.php" class="text-decoration-none mx-2">Login now!</a></p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>