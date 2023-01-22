<?php require 'Database/login.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php require 'header&footer/head.php' ?>
<body class="bg1">
<div class="container">
        <div class="container d-flex justify-content-center mt-5">
            <div class="bgg1 p-2 w-50 rd">
                <div class="rd bg-white py-5">
                    <div>
                        <div>
                            <h3 class="text-center text-dark">Konektiao</h3>
                            <p class="text-center">Eto tsindrina ra toa ka tsy mbola manana Kaonty enao <a href="olona_vaovao.php">eto.</a></p>
                        </div>
    
                        <div>
                            <form method="post" class="d-flex flex-column align-items-center text-dark">
                                <div class="form-group float-left col-10 d-flex flex-column">
                                  <label for="nom">Anarana</label>
                                  <input type="text" class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="">
                                  <small id="helpId" class="form-text text-muted">Amarino tsara le anarana so anenenana</small>
                                </div>
                                <div class="form-group col-10">
                                  <label for="pass">Kaody</label>
                                  <input type="password" class="form-control" name="mdpc" id="pass" aria-describedby="helpId" placeholder="">
                                  <small id="helpId" class="form-text text-muted">Amarino tsara ny kodinao mba tsy iverimberenanao</small>
                                </div>
                                <div class="form-check my-3">
                                    <input id="my-input1" class="form-check-input" type="checkbox" name="check" value="true">
                                    <label for="my-input1" class="form-check-label text-dark">Vonona ny hanaja ny fitsipy pifehezana va ianao?</label>
                                </div>
                                <?php if(isset($php_errormsg)){
                                  echo  "<p>".$php_errormsg."</p>";
                                } ?>
                                <div class="bgg1 bt1 mt-4 p-1 rd btn3">
                                    <button class="border-0 px-3 py-2 rd" name="btnc" id="s" type="submit" style="color: black;">KONEKTIAO</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
       const btnc = document.body.querySelector('.btn3')
       const check1 = document.body.querySelector('#my-input1')
btnc.classList.add('dn')
check1.addEventListener("click",function(){
    btnc.classList.toggle('dn')
    console.log("lolo")
})

/*  if(check1.checked){
btnc.classList.add('db')
}
else{
    btnc.classList.toggle('db')
} */
</script>
</html>