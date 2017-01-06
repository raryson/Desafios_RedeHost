var botaoCurriculo = document.querySelector("#buttonCurriculo");
    botaoSignos = document.querySelector("#buttonSignos");
    botaoLogin = document.querySelector("#buttonLogin");
    botaoToDoIst = document.querySelector("#buttonTodoIst");
    botaoPablipsum = document.querySelector("#buttonPablipsum");

    botaoCurriculo.addEventListener('click',function(){
        window.open("Currículo",'_blank')
    })

    botaoToDoIst.addEventListener('click',function (){
        window.open("https://todolistrarysonvai.herokuapp.com",'_blank')
    })

    botaoLogin.addEventListener('click',function(){
        window.open("Login", "_blank");
    })

    botaoSignos.addEventListener('click', function(){
        window.open("Signos", "_blank");
    })

    botaoPablipsum.addEventListener('click',function(){
        window.open("http://www.pablipsum.com","_blank");
    })

    $(document).ready(function(){
        $('button').tooltip();
    })