var dia = document.getElementById('dia');

var btn = document.getElementById("botao");

var backup = document.getElementById("some");

var onumerodevisitas;

var signo;

document.getElementById("estatisticas").addEventListener('click',function(e){

window.location.href = "stats.html";

 e.preventDefault();

});










btn.addEventListener('click', function (e) {
    



    // alerta o valor do campo

    //pega dia e mes

    valorDia = dia.value;

    mes = valorDia.substring(5, 7);



    outrodia = valorDia.substring(8, 10);

    ano = valorDia.substring(0, 4);







    //faz o calculo maluco

    if (mes == 03) {

        if (outrodia >= 21) {

            signo = "<p>Aries, segundo as internets tu não vê trabalho pra ser feito, por quê já fez tudo, também é bem enérgico</p>";

            imagemsigno = '<br><img src="imagens/aries.jpg">';

            oseusigno = "<h1>Aries</h1>";

             $.get("contadores/aries.php");


        } else {

            oseusigno = "<h1>Peixes</h1>"

            imagemsigno = "<br><img src ='imagens/peixes.jpg'>";

            signo = "<p>Peixes e a tua descrição é a seguinte:\n Tente ajudar mais os outros do que tu, vai se ferrar no final, just stop bro.</p>";

             $.get("contadores/peixes.php");
        }

    } else if (mes == 04) {

        if (outrodia >= 21) {



            oseusigno = '<h1>Touro</h1>'

            imagemsigno = "<br><img src = 'imagens/touro.jpg'>"

            signo = "<p>Touro, segundo as internets tu gosta de comer, e de fazer dinheiro, é noes!.</p>";

             $.get("contadores/touro.php");
        } else {

            signo = "<p>Aries, segundo as internets tu não vê trabalho pra ser feito, por quê já fez tudo, também é bem enérgico</p>";

            imagemsigno = '<br><img src="imagens/aries.jpg">';

            oseusigno = "<h1>Aries</h1>";

             $.get("contadores/aries.php");
        }

    } else if (mes == 05) {

        if (outrodia >= 21) {

            oseusigno = "<h1>Gemeos</h1>";

            signo = "<p>Gemeos, cara, segundo as internetes tu gosta de falar e trazer luz para as pessoas, será que eletricista é a tua profissão?</p>";

            imagemsigno = '<br><img src="imagens/gemeos.jpg">';

             $.get("contadores/gemeos.php");

        } else {

            oseusigno = '<h1>Touro</h1>'

            imagemsigno = "<br><img src = 'imagens/touro.jpg'>"

            signo = "<p>Touro, segundo as internets tu gosta de comer, e de fazer dinheiro, é noes!.</p>";

             $.get("contadores/touro.php");
        }

    } else if (mes == 06) {

        if (outrodia >= 21) {

            oseusigno = '<h1>Câncer</h1>'

            imagemsigno = "<br><img src = 'imagens/cancer.jpg'>"

            signo = "<p>Câncer, nossa, emotivo +9000, é uma mistura de NX0 com Fresno.</p>";

             $.get("contadores/cancer.php");
        } else {

            signo = "<p>Gemeos, cara, segundo as internetes tu gosta de falar e trazer luz para as pessoas, será que eletricista é a tua profissão?</p>";

            oseusigno = "<h1>Gemeos</h1>";

            imagemsigno = '<br><img src="imagens/gemeos.jpg">';

             $.get("contadores/gemeos.php");
        }

    } else if (mes == 07) {

        if (outrodia >= 22) {

            oseusigno = '<h1>Leão</h1>'

            imagemsigno = "<br><img src = 'imagens/leao.jpg'>"

            signo = "<p>Leão, o top da balada, ou que pelo menos tenta transparecer isso, segundo as internetes tu gosta de se aparecer e protege a tua familia.</p>";

             $.get("contadores/leao.php");
        } else {

            oseusigno = '<h1>Câncer</h1>'

            imagemsigno = "<br><img src = 'imagens/cancer.jpg'>"

            signo = "<p>Câncer, nossa, emotivo +9000, é uma mistura de NX0 com Fresno.</p>";

             $.get("contadores/cancer.php");
        }

    } else if (mes == 08) {

        if (outrodia >= 23) {

            oseusigno = '<h1>Virgem</h1>'

            imagemsigno = "<br><img src = 'imagens/virgem.jpg'>"

            signo = "<p>Virgem, vulgo chato, segundo a internet tu é muito perfeccionista, também é bastante simples, palavras da internet.</p>";

             $.get("contadores/virgem.php");
        } else {

            oseusigno = '<h1>Leão</h1>'

            imagemsigno = "<br><img src = 'imagens/leao.jpg'>"

            signo = "<p>Leão, o top da balada, ou que pelo menos tenta transparecer isso, segundo as internetes tu gosta de se aparecer e protege a tua familia.</p>";

             $.get( "contadores/leao.php");
        }

    } else if (mes == 09) {

        if (outrodia >= 23) {

            oseusigno = '<h1>Libra</h1>'

            imagemsigno = "<br><img src = 'imagens/libra.jpg'>"

            signo = "<p>Libra, segundo a internet é pegador, socialista, se importa com o outro, é charmoso e abusa desse artificio, palavras da internet.</p>";

             $.get("contadores/libra.php");
        } else {

            oseusigno = '<h1>Virgem</h1>'

            imagemsigno = "<br><img src = 'imagens/virgem.jpg'>"

            signo = "<p>Virgem, vulgo chato, segundo a internet tu é muito perfeccionista, também é bastante simples, palavras da internet.</p>";

             $.get("contadores/virgem.php");
        }

    } else if (mes == 10) {

        if (outrodia >= 23) {

            oseusigno = '<h1>Escorpião</h1>'

            imagemsigno = "<br><img src = 'imagens/escorpiao.jpg'>"

            signo = "<p>Escorpião, intenso, profundo e gótico. O escorpião é um signo muito intenso, que tende a definir o seu próprio destino, palavras da internet.</p>";

             $.get("contadores/escorpiao.php");
        } else {

            oseusigno = '<h1>Libra</h1>'

            imagemsigno = "<br><img src = 'imagens/libra.jpg'>"

            signo = "<p>Libra, segundo a internet é pegador, socialista, se importa com o outro, é charmoso e abusa desse artificio, palavras da internet.</p>";

             $.get("contadores/libra.php");
        }

    } else if (mes == 11) {

        if (outrodia >= 22) {

            oseusigno = '<h1>Sagitário</h1>'

            imagemsigno = "<br><img src = 'imagens/sagitario.jpg'>"

            signo = "<p>Sagitário, um bom motivador, vai além da mediocridade e quase sempre ultrapassa a expectativas. Palavras da Internet //Com certeza quem fez esse site é desse signo.</p>";

             $.get("contadores/sagitario.php");
        } else {

            oseusigno = '<h1>Escorpião</h1>'

            imagemsigno = "<br><img src = 'imagens/escorpiao.jpg'>"

            signo = "<p>Escorpião, intenso, profundo e gótico. O escorpião é um signo muito intenso, que tende a definir o seu próprio destino, palavras da internet.</p>";

             $.get("contadores/escorpiao.php");
        }

    } else if (mes == 12) {

        if (outrodia >= 22) {
        
        $.get("contadores/capricornio.php");

            signo = "<p>Capricórnio, sério, chato e gótico. Geralmente fica focadão no trabalho e a primeira impressão que ele passa é de uma pessoa séria que vai te bater, mas na real é bem de boa.</p>";

            imagemsigno = '<br><img src="imagens/capricornio.jpg">';

            oseusigno = "<h1>Capricórnio</h1>";

            
        } else {

            oseusigno = '<h1>Sagitário</h1>'

            imagemsigno = "<br><img src = 'imagens/sagitario.jpg'>"

            signo = "<p>Sagitário, um bom motivador, vai além da mediocridade e quase sempre ultrapassa a expectativas. Palavras da Internet //Com certeza quem fez esse site é desse signo.</p>";

             $.get("contadores/sagitario.php");
        }

    } else if (mes == 01) {

        if (outrodia >= 21) {

            oseusigno = '<h1>Aquário</h1>'

            imagemsigno = "<br><img src = 'imagens/aquario.jpg'>"

            signo = "<p>Aquário, Felipe Smith? Jarbas?. Sim, segundo a internet e experiências pessoais, tu é bem desligado, porém criativo demais.</p>";

             $.get("contadores/aquario.php");
        } else {
        
            $.get("contadores/capricornio.php");

            signo = "<p>Capricórnio, sério, chato e gótico. Geralmente fica focadão no trabalho e a primeira impressão que ele passa é de uma pessoa séria que vai te bater, mas na real é bem de boa.</p>";

            imagemsigno = '<br><img src="imagens/capricornio.jpg">';

            oseusigno = "<h1>Capricórnio</h1>";

             
        }

    }

    else if (mes == 02) {

        if (outrodia >= 20) {

            oseusigno = '<h1>Peixes</h1>'

            imagemsigno = "<br><img src = 'imagens/Peixes.jpg'>"

            signo = "<p>Peixes e a tua descrição é a seguinte:\n Tente ajudar mais os outros do que tu, vai se ferrar no final, just stop bro.</p>";

             $.get("contadores/peixes.php");

        } else {

            oseusigno = '<h1>Aquário</h1>'

            imagemsigno = "<br><img src = 'imagens/aquario.jpg'>"

            signo = "<p>Aquário, Felipe Smith? Jarbas?. Sim, segundo a internet e experiências pessoais, tu é bem desligado, porém criativo demais.</p>";

             $.get("contadores/aquario.php");
        }

    }

    //criando os elementos

    some.parentNode.removeChild(some);

    var row = document.createElement('div');

    row.className = "row";

    var centralizadora = document.createElement('div');

    var responsiva = document.createElement('div');

    var responsiva2 = document.createElement('div');

    centralizadora.className = "centralizadora";

    var descricaosigno = document.createElement('label');

    var botaodescricao = document.createElement('button');

    var divcenter = document.createElement("div");

    var divrestart = document.createElement("div");

    var br = document.createElement("br");

    var br2 = document.createElement("br");

    var br3 = document.createElement("br");

    var imagemsigno;

    //inserindo valor nesses elementos

    console.log(imagemsigno);

    document.body.appendChild(row);

    responsiva.className = "col-md-6 col-md-offset-3  col-sm-12";

    row.appendChild(responsiva);

    responsiva.appendChild(centralizadora);

    descricaosigno.innerHTML = oseusigno + signo + imagemsigno;

    botaodescricao.innerHTML = "Nascer de novo";

    botaodescricao.setAttribute("id", "saicapeta");

    botaodescricao.className = "btn btn-default2";



    $(document).keypress(function (e) {
        if (e.which == 13) $('#saicapeta').click();
    });

  




    botaodescricao.onclick = function recomecar() {

        centralizadora.appendChild(divrestart);

        divrestart.appendChild(backup);

    }

        ;

    divrestart.id = "divrestarta";



    centralizadora.appendChild(divrestart);

    divrestart.appendChild(br);

    divrestart.appendChild(descricaosigno);

    divrestart.appendChild(br);

    divrestart.appendChild(br2);

    divrestart.appendChild(divcenter);

    divcenter.appendChild(botaodescricao);

    document.getElementById("saicapeta").onclick = function vaisata() {

        divrestart.parentNode.removeChild(divrestart);

        document.body.appendChild(backup);



    }

    console.log(valorDia);

    if (!valorDia == true) {

        descricaosigno.parentNode.removeChild(descricaosigno);

        alert("Oxi mainho, aqui é software livre de bugs! \nTente nascer de novo, por favor");

    }

    // impede o envio do form

    e.preventDefault();

});

