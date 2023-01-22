<?php require('Database/databaseA.php');  ?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'header&footer/head.php' ?>
<body class='bg1'>
   <div class="container mt-4">
    <div class="container">
        <div class="container bgg1 rd">
            <div class="bg-dark d-flex flex-column align-items-center py-5">
                <div>
                    <H1 class="text-white text-center">INSKRIPTIONA</H1>
                    <p class="text-center text-white">Eto tsindrina ra toa ka efa manana Kaonty enao <a href="conexion.php">eto.</a></p>
                </div>
                <div class="text-danger">
                     <?php if(isset($error)){ echo "<p>".$error."</p>";} ?>
                </div>
                <form class="text-white-50 col-11 d-flex" method="post">
                    <div class="col-6 fm">
                        <div class="form-group col-6">
                        <label for="surnom">Solon'Ananarana</label>
                        <input type="text"
                            class="form-control  border-top-0 border-start-0 border-end-0" name="surnom" id="surnom" placeholder="">
                        </div>
                        <br>
                        <div class="form-group col-7 offset-1">
                        <label for="nom">Anarana</label>
                        <input type="text"
                            class="form-control  border-top-0 border-start-0 border-end-0" name="nom" id="nom" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <br>
                        <div class="form-group col-8 offset-2">
                        <label for="prenom">Fanampin'Anarana</label>
                        <input type="text"
                            class="form-control  border-top-0 border-start-0 border-end-0" name="prenom" id="prenom" aria-describedby="helpId" placeholder="">
                        </div>
                        <br>
                        <div class="form-group col-9 offset-3">
                        <label for="mdp">Soratra Miafina</label>
                        <input type="password" class="form-control border-top-0 border-start-0 border-end-0" aria-describedby="helpId1" name="mdp" id="mdp" placeholder="">
                        <small id="helpId1" class="form-text text-muted"></small>
                        </div>
                        <br>
                        <div class="form-check col-10 offset-4">
                            <input id="my-input" class="form-check-input" type="checkbox" name="" value="true">
                            <label for="my-input" class="form-check-label">Vonona ve ianao anaraka ny fitsipi-pifehezana misahana ato amin'ito pejy weba ito ve enao e?</label>
                        </div>
                    </div>
                    <div class="col-6 btn d-flex align-items-center justify-content-center"> 
                         <button type="submit" name="btn" class="btn btn-primary h-50 w-50">ALEFAO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>
</body>
<script src="/JS/JS.js"></script>
</html>