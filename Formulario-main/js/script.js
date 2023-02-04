$("#clique").click(function(){
    $(this).css("color", "red");
})

$("#neon-button").on("click",function (e){
    let nome = $("#nome");
    nome.css("border", "1px solid black");
    $("p.erro-nome").hide()
    if (nome.vall() =="") {
        e.preventdefault();
        nome.css("border", "1px solid red");
        $("p").show()
    }

})

$("#sumir").on("click", function (e) {
    $("p").hide()
})