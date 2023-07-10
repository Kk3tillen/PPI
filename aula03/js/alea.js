let nome = document.getElementById("nome");
nome.innerHTML = "INFO-4V"; 
let result = document.getElementById("resultado");
let num = document.getElementById("aleatorio");
let numeroInformado = document.getElementById("num");

numeroInformado.addEventListener("input", function(){
    num.innerHTML = Math.floor(Math.random() * 10); 
    if(numeroInformado.value == num.innerHTML){
        result.innerHTML = "números iguais"
    } 
    else if(numeroInformado.value < num.innerHTML){
        result.innerHTML = "número informado é menor que o aleatório";  
    } else {
        result.innerHTML = "número informado é maior que o aleatório";
    }
})

