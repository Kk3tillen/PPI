$("button").click(function(){
    let idArtigo = $(this).attr("name");
    //console.log(idArtigo);
    $(idArtigo).toggle();
})

$("#fade").click(function(){
    $(this).next().fadeToggle(3000);
})
$("#slide").click(function(){
    $(this).next().slideToggle(400);
})
$("h5:last").click(function(){
    $(this).parent().parent().toggleClass("bg-dark");
})