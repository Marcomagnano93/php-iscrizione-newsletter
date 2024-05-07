<?php 

$usermail = $_POST['newsletter'] ?? '';

// var_dump($usermail);
include __DIR__ . '../utilities.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>
    <main>
        <div class="container my-5">
            <div class="row">
                <div class="col">
                    <form action="" method="post">
                        <p>
                            <input type="email" name="newsletter" id="newsletter" placeholder="Scrivi qui la tua mail">
                        </p>
                        <p>
                            <button type="submit" class="btn btn-primary">Iscriviti</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <?php 
                if(emailcheck($usermail) === true){
                    $_SESSION['subrscibe'] = true;
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congratulazioni... </strong> <span>Ti sei iscritto alla nostra newsletter con successo!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } elseif($usermail === ''){  ?>

                    <div class="alert alert-primary" role="alert">
                        <p>Benvenuto! inserisci una mail valida per iscriverti alla nostra newsletter!</p>
                    </div>

            <?php } else{ ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Attenzione!!! </strong> <span>La mail inserita non è corretta.</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php } ?>
            
        </div>
    </main>
<?php include __DIR__ . '../footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>