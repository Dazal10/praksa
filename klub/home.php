<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <link rel="stylesheet" href="css.css">
</head>
<body style="background-color: #ff6219;">
    <section>
        <div class="container-fluid py-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #ffffff; border-radius: 1rem;">
                <div class="col">
                    <p class="navbar-brand"  style="padding-left: 20px; padding-top: 20px;">
                        <img src="New folder/l_56631_1.jpg" width="50" height="50" class="d-inline-block">
                        Košarkarksi klub Ivančna Gorica
                    </p>
                </div>
                <div class="col">
                    <div class="dropdown" style="float: right; padding-right: 100px;">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #ffffff; color: #000000;">
                        Več
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="home.php">Seznam igralcev</a></li>
                          <li><a class="dropdown-item" href="dodaj.php">Dodaj igralca</a></li>
                          <li><a class="dropdown-item" href="logout.php">Odjava</a></li>
                        </ul>
                      </div>
                </div>
              </nav>
        </div>
    </section>
    <section>
        <div class="container py-5" style="background-color: #ffffff; border-radius: 1rem;">
            <table class="tabela">
                <tr>
                    <th>Št. dresa</th>
                    <th>Ime</th>
                    <th>Priimek</th>
                    <th>Datum rojstva</th>
                </tr>
                <?php
                    $db = new mysqli('localhost', 'root', '', 'klub');
                    $sql = "SELECT * FROM igralci";
        
                    $igralci = $db->query($sql);
        
                    while($i = $igralci->fetch_assoc())
                    {
                        echo "
                        <tr>
                            <td> $i[stevilka_dresa] </td>
                            <td> $i[ime] </td>
                            <td> $i[priimek]  </td>
                            <td> $i[datum_rojstva]  </td>
                        </tr>
                        ";
                    }
        
                    $igralci->free();
                    $db->close();
                ?>
            </table>
        </div>
        <br>
        <div class="container py-5" style="background-color: #ffffff; border-radius: 1rem;">
            <form action="delete.php" method="post">
                <label>Izbriši igralca:</label>
                <input type="number" min="0" class="form-control form-control-lg" name="stevilka_dresa" placeholder="Številka dresa"/><br>
                <button class="btn btn-dark btn-lg btn-block" type="sumbit">Izbriši</button>
            </form>
        </div>
    </section>
</body>
</html>