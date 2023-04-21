<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <section class="vh-100" style="background-color: #ff6219;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="New folder/l_56631_1.jpg" class="img-fluid" style="border-radius: 1rem 1rem 1rem 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                      <div>
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h2 fw-bold mb-0">Košarkarski klub Ivančna Gorica</span>
                        </div>     
                        <form action="login.php" method="post">
                          <?php if (isset($_GET['error'])) { ?>
                          <p class="error"><?php echo $_GET['error']; ?></p>
                          <?php } ?>
                          <input type="text" name="uname" required placeholder="Uporabniško ime"><br>
                          <br>
                          <input type="password" name="password" required placeholder="Geslo"><br>
                          <br> 
                          <button type="submit">Prijavi</button><br>
                        </form>
                        <br>
                        <button><a href="registracija.php">Registriraj se tukaj</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>