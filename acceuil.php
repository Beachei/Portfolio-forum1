<?php 
 require 'Database/allcm.php';
 require 'Database/securité.php';

?>

<!DOCTYPE html>
<html lang="fr">
<?php require 'header&footer/head.php' ?>
<body class="bg2 bgg2 text-center">
     <div class="container mt-5 pt-2 pb-2">
        <div class="container">
            <div class="container">
                <div class='d-flex container'>
                    <div class="col-6">
                         <img class="float-start" style="box-shadow: 0px 0px 10px white;border-radius: 60%;" width="20%" heigth="40%" src="/img/ICON/controller.png" alt="">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <form action="/database/logout.php" class="col-12 h-100" methode="POST">
                        <div class="col-11 h-100">
                             <button type="submit"  class=" h-100 w-25 bg3 me-2 border-0 float-end rdd">IALA</button>    
                        </div> 
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
     </div>
     <br><br>
     <div class="container">
        <div class="container">
            <div class="container bgg1 rd">
                <div class="bg-white bg-opacity-50 py-3">
                    <div class="h-75 col-12 d-flex justify-content-center rd ">
                        <div class="col-11 h-100 bg-white bg-opacity-50 rd">
                            <div class="container pt-3">
                                <div class="bg-dark text-white rd py-2">
                                    <div>
                                      <h6 class="fw-bolder">Joseph :</h6>
                                    </div>
                                    <div class="container">
                                        <div class="bg-white bg-opacity-50 rd rd0">
                                            ZA zany nona b
                                        </div>
                                    </div>
                                </div>
                                <?php
                                  while($c = $makac->fetch()){
                                    ?>
                                     <div class="bg-dark text-white rd py-2 mt-2">
                                    <div>
                                      <h6 class="fw-bolder"><?=  $c['nom']; ?></h6>
                                    </div>
                                    <div class="container">
                                        <div class="bg-white bg-opacity-50 rd rd0">
                                        <?=  $c['commentaire']; ?>
                                        </div>
                                    </div>
                                </div>
                                    <?php
                                  }

                                ?>
                                <div class="bg-dark text-white rd py-2 mt-2">
                                    <div>
                                      <h6 class="fw-bolder">Rakoto :</h6>
                                    </div>
                                    <div class="container">
                                        <div class="bg-white bg-opacity-50 rd rd0">
                                            ZA zany nona b
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=" bg-dark w-75 py-2 rd container"> 
                        <form method="post" action="./Database/commentaire.php">
                          <div class="form-group text-white">
                                <label for="my-textarea">
                                    <h5 class="fw-border"> 
                                        <?php if(isset( $_SESSION['nom'])){
                                            echo  $_SESSION['nom'];
                                        } ?> :
                                     </h5>
                                </label>
                                 <div class="form-group">
                                    <label for="my-textarea"></label>
                                    <textarea id="my-textarea" class="form-control" name="texte" rows="3"></textarea>
                                 </div>
                            </div>
                            <button type="submit" name="btn" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
   
</body>
</html>