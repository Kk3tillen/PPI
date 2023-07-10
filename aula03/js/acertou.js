let result = document.getElementById("resultado");
let num = document.getElementById("aleatorio");
let numeroInformado = document.getElementById("num");

numeroInformado.addEventListener("input", function(){
    let i;
    for(i = 0; numeroInformado.value != num.innerHTML; ++i){
        num.innerHTML = Math.floor(Math.random() * 10);

    }
    result.innerHTML = "Acertou depois de " + i + " tentativas";
})