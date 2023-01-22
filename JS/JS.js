/* Page Inscription = olona vaovao */
const check = document.body.querySelector("#my-input");
const btn = document.body.querySelector(".btn");
const btn1 = document.body.querySelector("button");
const fm = document.body.querySelector('.fm');
const label = document.body.querySelector('.form-check-label');
const nom = document.body.querySelector('#nom');
const help = document.body.querySelector('#helpId');
const mdp = document.body.querySelector("#mdp");
const help1 = document.body.querySelector('#helpId1');



nom.addEventListener('input', function(){
    help.innerHTML = 'Tadidio tsara le anarana fa io no miantoka ny fidiranao ato'
});
mdp.addEventListener('input', function(){
    help1.innerHTML = 'Tadidio tsara io soratra miafina io fa io ko no miantoka ny fidiranao ato'
});


btn1.classList.add('dn')
btn.classList.remove('col-6')
fm.classList.add('col-11')
    if(check.checked){
        btn1.classList.toggle('dn')
        btn.classList.add('col-6')
        fm.classList.remove('col-11')
        fm.classList.add('col-6')
    }
    check.addEventListener('click', function(e){
        console.log(e) 
        if(check.checked){
            btn1.classList.toggle("dn")
            btn.classList.add('col-6')
            fm.classList.remove('col-11')
            fm.classList.add('col-6')
            label.innerHTML= "Ok be nju amin zao."
        }
        else{
    
            btn1.classList.add('dn')
            btn.classList.remove('col-6')
            fm.classList.add('col-11')
            label.innerHTML= "tsindrio ty de mipoitra njay iny aveo."
        }
    })


/* Page connection = connexion */


