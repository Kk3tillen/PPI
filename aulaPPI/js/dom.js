// console.log(document.getElementById("portugues"));
// console.log(document.querySelector("#portugues"));

// console.log(document.getElementsByTagName("button"));
// console.log(document.querySelector("button"));

document.querySelector("#ingles").innerHTML = "English";
console.log(document);

let botao = document.createElement("button");
botao.innerHTML = "Japones";
botao.setAttribute("id", "japones");
botao.onclick = function(){
    alert("ola mundo em japones");
}
document.body.appendChild(botao);

