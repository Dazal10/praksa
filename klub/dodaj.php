<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
</head>
<body style="background-color: #ff6219;">
    <section>
        <div class="container-fluid py-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #ffffff; border-radius: 1rem;">
                <div class="col">
                    <p class="navbar-brand"  style="padding-left: 20px; padding-top: 20px;">
                        <img src="New folder/l_56631_1.jpg" width="50" height="50" class="d-inline-block">
                        Košarkarski klub Ivančna Gorica
                    </p>
                </div>
                <div class="col">
                    <div class="dropdown" style="float: right; padding-right: 100px;">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #ffffff; color: #000000;">
                        Več
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="home.php">Seznam igralcev</a></li>
                          <li><a class="dropdown-item" href="dodaj.html">Dodaj igralca</a></li>
                          <li><a class="dropdown-item" href="logout.php">Odjava</a></li>
                        </ul>
                      </div>
                </div>
              </nav>
        </div>
    </section>
    <section>
        <div class="container py-5" style="background-color: #ffffff; border-radius: 1rem;">
            <form action="insert.php" method="post">
                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Izpolni</h5>

                <div class="form-outline mb-4">
                  <input type="number" min="0" class="form-control form-control-lg" name="stevilka_dresa" placeholder="Številka dresa"/>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" name="ime" placeholder="Ime"/>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" name="priimek" placeholder="Priimek"/>
                </div>

                <div class="form-outline mb-4">
                    <input type="date" class="form-control form-control-lg" name="datum_rojstva"/>
                </div>

                <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="sumbit">Dodaj</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>