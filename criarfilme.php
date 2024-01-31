<!DOCTYPE html>
<html lang="en">

<?php
// Incluímos o arquivo de restrição
require_once("restrito.php"); 
// O arquivo "restrito.php" provavelmente contém lógica de restrição de acesso.
// echo "Página restrita. Apenas usuários autorizados podem acessar.";
// Fim do arquivo
?>

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exibidor - DT - Criação de Filmes</title>

    <link rel="stylesheet" href="https://www.downtownfilmes.com.br/static/css/6.7e674c3a.chunk.css" />
    <style>
        /* http://meyerweb.com/eric/tools/css/reset/ 
        v2.0 | 20110126
        License: none (public domain)
        */

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: "";
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body {
            background-image: url('http://exibidor.dtfilmes.com.br/img/bg.jpg');
            backdrop-filter: brightness(0.3);
            background-size: cover;
            background-attachment: fixed;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen,
                Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        code {
            font-family: source-code-pro, Menlo, Monaco, Consolas, Courier New,
                monospace;
        }

        @font-face {
            font-family: Gilroy;
            src: url(https://www.downtownfilmes.com.br/static/media/Gilroy-Bold.111aa13f.eot);
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-Bold.111aa13f.eot?#iefix) format("embedded-opentype"),
                url(https://www.downtownfilmes.com.br/static/media/Gilroy-Bold.62872c8e.woff2) format("woff2"),
                url(https://www.downtownfilmes.com.br/static/media/Gilroy-Bold.3ca17cce.woff) format("woff"),
                url(https://www.downtownfilmes.com.br/static/media/Gilroy-Bold.10b9cd1d.ttf) format("truetype"),
                url(https://www.downtownfilmes.com.br/static/media/Gilroy-Bold.45100ab6.svg#Gilroy-Bold) format("svg");
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: Gilroy;
            src: url(https://www.downtownfilmes.com.br/static/media/Gilroy-Medium.f968032c.eot);
            src: url(https://www.downtownfilmes.com.br/static/media/Gilroy-Medium.f968032c.eot?#iefix) format("embedded-opentype"),
                url(https://www.downtownfilmes.com.br/static/media/Gilroy-Medium.d00e876b.woff2) format("woff2"),
                url(https://www.downtownfilmes.com.br/static/media/Gilroy-Medium.7ab5484c.woff) format("woff"),
                url(https://www.downtownfilmes.com.br/static/media/Gilroy-Medium.ef9daf9c.ttf) format("truetype"),
                url(https://www.downtownfilmes.com.br/static/media/Gilroy-Medium.55874334.svg#Gilroy-Medium) format("svg");
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: Gilroy;
            src: url(https://www.downtownfilmes.com.br/static/media/Gilroy-Thin.1466b7c1.eot);
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-Thin.1466b7c1.eot?#iefix) format("embedded-opentype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Thin.d0028c75.woff2) format("woff2"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Thin.4be23ee9.woff) format("woff"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Thin.71000d5f.ttf) format("truetype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Thin.f662e0ed.svg#Gilroy-Thin) format("svg");
            font-weight: 100;
            font-style: normal;
        }

        @font-face {
            font-family: Gilroy;
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-Semibold.3a7f8fd8.eot);
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-Semibold.3a7f8fd8.eot?#iefix) format("embedded-opentype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Semibold.aebaa8b1.woff2) format("woff2"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Semibold.9d2a1b79.woff) format("woff"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Semibold.5805f872.ttf) format("truetype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Semibold.96561f57.svg#Gilroy-Semibold) format("svg");
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: Gilroy;
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-Regular.09ffa142.eot);
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-Regular.09ffa142.eot?#iefix) format("embedded-opentype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Regular.11c5b356.woff2) format("woff2"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Regular.2abef08d.woff) format("woff"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Regular.af5b8da1.ttf) format("truetype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Regular.765a1e6f.svg#Gilroy-Regular) format("svg");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: Gilroy;
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-Light.ee921960.eot);
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-Light.ee921960.eot?#iefix) format("embedded-opentype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Light.085f3ee3.woff2) format("woff2"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Light.679cd801.woff) format("woff"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Light.1111f8b0.ttf) format("truetype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-Light.36c5cb53.svg#Gilroy-Light) format("svg");
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: Gilroy;
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-ExtraBold.0967e954.eot);
            src: url(https://www.downtownfilmes.com.br//static/media/Gilroy-ExtraBold.0967e954.eot?#iefix) format("embedded-opentype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-ExtraBold.8c5d0a7a.woff2) format("woff2"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-ExtraBold.27807213.woff) format("woff"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-ExtraBold.4191c796.ttf) format("truetype"),
                url(https://www.downtownfilmes.com.br//static/media/Gilroy-ExtraBold.ccd7277d.svg#Gilroy-ExtraBold) format("svg");
            font-weight: 800;
            font-style: normal;
        }

        main {
            max-width: 800px;
            margin: 0 auto;
        }

        a {
            display: block;
            height: 45px;
            line-height: 45px;
            float: left;
            border: 0;
            color: black;
            padding: 0;
            text-align: center;
            font-size: 18px;
            text-decoration: none;
            /*background-color: #eaeaea;*/
            padding: 0 10px 0 10px;
        }

        a:hover {
            color: black;
            text-decoration: none;
            background-color: #ffdb25;
            border-color: #ffdb25;
        }

        a:focus {
            box-shadow: none;
        }

        header {
            background-color: black;
            color: #fff;
            padding: 40px 0 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            text-align: center;
        }

        header img {
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 800;
        }

        header h2 {
            font-size: 25px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        header h3 {
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 10px;


        }

        footer {
            background-color: black;
            color: #fff;
            padding: 40px 0 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
        }

        footer img.logo {
            margin-bottom: 20px;
        }

        footer .social {
            margin-top: 20px;
            min-width: 200px;
            max-width: 80%;
            display: flex;
            justify-content: space-around;
        }

        footer .social a {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            background: none;
        }

        .movie {
            display: flex;
            flex-direction: column;
            background-color: #333;
            color: #fff;
        }

        .movie .movie-content {
            display: flex;
        }

        .movie .movie-content .movie-cartaz {
            max-width: 50%;
            padding: 20px;
        }

        .movie .movie-content .movie-cartaz img {
            max-width: 100%;
        }

        .movie .movie-content .movie-info {
            display: flex;
            flex-direction: column;
            padding: 20px;
            justify-content: center;
        }

        .movie .movie-content .movie-info h2 {
            font-size: 26px;
            font-weight: 700;
        }

        .movie .movie-content .movie-info h3 {
            font-size: 17px;
            font-weight: 400;
            margin-top: 25px;
            margin-bottom: 30px;
            line-height: 20px;
        }

        .movie .movie-content .movie-info p {
            font-size: 14px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 10px;
            line-height: 18px;
        }

        .movie .movie-content .movie-info p .data {
            font-size: 18px;
            font-weight: bold;
        }

        .movie-tecnical-info {
            background-color: #999;
            text-align: center;
        }

        .movie-tecnical-info h3 {
            margin: 40px auto;
            font-weight: 700;
            max-width: 400px;
        }

        .movie-tecnical-info .nomeclatura {
            margin: 40px;
            font-weight: 300;
        }

        .movie-tecnical-info .nomeclatura p {
            margin-bottom: 12px;
            color: #ffed14;
            font-weight: 400;
        }

        .links {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: 20px auto;
            min-width: 200px;
        }

        .links a {
            margin-bottom: 10px;
            padding: 0px 10px 0 10px;
            background-color: #eaeaea;
            border-radius: 20px;
            border-top: 1px solid #101010;
            border-left: 1px solid #000000;
            border-right: 5px solid #1c1a19;
            border-bottom: 5px solid #000000;

        }

        .box {
            width: 100%;
            padding-top: 56.25%;
            position: relative;
        }

        .box iframe {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }



        .filme_1_cor_1 {
            background-color: #673ab7;
        }

        .filme_2_cor_1 {
            background-color: #904492;
        }

        .filme_2_cor_2 {
            background-color: #442145;
        }

        .filme_3_cor_1 {
            /* background-color: #817d7d; */
            background-color: #dc7a7b;
        }

        .filme_3_cor_2 {
            background-color: #5c8f4a;

        }

        .filme_1_cor_2 {
            background-color: #8d7851;
        }

        .filme_3_cor_3 {
            background-color: #145c80;
        }

        .filme_breve {
            background-color: #6f695f;
        }

        .filme_breve2 {
            background-color: #2d2922;
        }

        input {
            text-align: center;
            display: block;
            margin-bottom: 05px;
            margin-right: auto;
            margin-left: auto;
            padding: 10px;
            width: 320px;
            border-radius: 25px;
        }

        .movie-cadastro {
            display: flex;
            justify-content: space-around;
            margin: 8px 0;
        }

        .movie-cadastro #nome {
            width: 300px;
        }

        .movie-cadastro #mensagem {
            padding: 108px 0;
            text-align: center;
            display: block;
            margin-right: auto;
            margin-left: auto;
            padding: 10px;
            width: 320px;
            height: 200px;
            border-radius: 25px;
        }

        .movie-cadastro-info input:first-child {
            margin-top: 30px;
        }

        .dcp-link {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .dcp-link h2 {
            text-align: center;
            margin: 10px 0;
        }

        .dcp-link input {
            width: 75%;
        }

        .link {
            display: block;
        }

        .dcp {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        #scope3d {
            visibility: hidden;
            padding: 0;
            margin: 0;
        }

        #flat3d {
            visibility: hidden;
            padding: 0;
            margin: 0;
        }

        .btn {
            display: flex;
            justify-content: space-between;
        }

        .btn button {
            text-align: center;
            width: 10%;
            padding: 5px;
            border-radius: 10px;
            margin-bottom: 05px;
            border-radius: 10px;
            transition: 0.5s;
        }

        #btn-editar {
            margin-left: 24px;
            background-color: #e8980e;
            cursor: pointer;
        }

        #btn-excluir {
            margin-right: 24px;
            background-color: #e80e0e;
            cursor: pointer;
        }

        #btn-cadastrar {
            background-color: #0ee841;
            cursor: pointer;
        }

        #favcolor {
            height: 50px;
            width: 100px;
        }

        option {
            text-align: center;
        }

        #lista-editar {
            background-color: #333;
            color: #fff;
            border-color: #333;
            padding: 08px 0;
        }

        @media only screen and (max-width: 500px) {
            .movie-cadastro {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .movie-cadastro-info input:first-child {
                margin-top: 05px;
            }

            .movie-cadastro-info div:first-child {
                margin-top: 05px;
            }

            .dcp-link {
                display: block;
                width: auto;
            }

            .link input:first-child {
                margin-top: 07px;
            }

            .btn button {
                display: block;
                width: 25%;
            }
        }
    </style>
    <script defer>
        async function Editar() {
            var id = pegaId();
            var {
                nome,
                mensagem,
                estreia,
                classificacao,
                duracao,
                cartaz,
                trailer,
                codigoscope,
                codigoflat,
                codigoscope3d,
                codigoflat3d,
                linkcartaz,
                linkfotos,
                linkredesociais,
                linkhotsite,
                linkspot,
                baixartrailerflat,
                baixartrailerscope,
                cor,
                oculto
            } = pegaValores();

            //verificando campos vazios
            mensagem = campoVazio(mensagem);
            estreia = campoVazio(estreia);
            classificacao = campoVazio(classificacao);
            cartaz = campoVazio(cartaz);
            trailer = campoVazio(trailer);
            codigoscope = campoVazio(codigoscope);
            codigoflat = campoVazio(codigoflat);
            codigoscope3d = campoVazio(codigoscope3d);
            codigoflat3d = campoVazio(codigoflat3d);
            linkcartaz = campoVazio(linkcartaz);
            linkfotos = campoVazio(linkfotos);
            linkredesociais = campoVazio(linkredesociais);
            linkhotsite = campoVazio(linkhotsite);
            linkspot = campoVazio(linkspot);
            baixartrailerflat = campoVazio(baixartrailerflat);
            baixartrailerscope = campoVazio(baixartrailerscope);
            oculto = oculto.checked ? 'S' : 'N';

            var Filme = {
                id,
                nome,
                mensagem,
                estreia,
                classificacao,
                duracao,
                cartaz,
                trailer,
                codigoscope,
                codigoflat,
                codigoscope3d,
                codigoflat3d,
                linkcartaz,
                linkfotos,
                linkredesociais,
                linkhotsite,
                linkspot,
                baixartrailerflat,
                baixartrailerscope,
                cor,
                oculto
            }
            fetch('http://localhost:5000/editarfilme', {
                    method: "POST",
                    body: JSON.stringify(Filme),
                    headers: {
                        "Content-type": "application/json; charset=UTF-8"
                    }
                })
                .then(response => response.json())
                .then(json => console.log("Atualizado com sucesso!"))
                .catch(err => console.log(err));
        }

        function Cadastrar() {
            var {
                nome,
                mensagem,
                estreia,
                classificacao,
                duracao,
                cartaz,
                trailer,
                codigoscope,
                codigoflat,
                codigoscope3d,
                codigoflat3d,
                linkcartaz,
                linkfotos,
                linkredesociais,
                linkhotsite,
                linkspot,
                baixartrailerflat,
                baixartrailerscope,
                cor,
                oculto
            } = pegaValores();

            //verificando campos vazios
            mensagem = campoVazio(mensagem);
            estreia = campoVazio(estreia);
            classificacao = campoVazio(classificacao);
            cartaz = campoVazio(cartaz);
            trailer = campoVazio(trailer);
            codigoscope = campoVazio(codigoscope);
            codigoflat = campoVazio(codigoflat);
            codigoscope3d = campoVazio(codigoscope3d);
            codigoflat3d = campoVazio(codigoflat3d);
            linkcartaz = campoVazio(linkcartaz);
            linkfotos = campoVazio(linkfotos);
            linkredesociais = campoVazio(linkredesociais);
            linkhotsite = campoVazio(linkhotsite);
            linkspot = campoVazio(linkspot);
            baixartrailerflat = campoVazio(baixartrailerflat);
            baixartrailerscope = campoVazio(baixartrailerscope);
            oculto = oculto.checked ? 'S' : 'N';
            
            var Filme = {
                nome,
                mensagem,
                estreia,
                classificacao,
                duracao,
                cartaz,
                trailer,
                codigoscope,
                codigoflat,
                codigoscope3d,
                codigoflat3d,
                linkcartaz,
                linkfotos,
                linkredesociais,
                linkhotsite,
                linkspot,
                baixartrailerflat,
                baixartrailerscope,
                cor,
                oculto
            }
            fetch('http://localhost:5000/criarfilme', {
                    method: "POST",
                    body: JSON.stringify(Filme),
                    headers: {
                        "Content-type": "application/json; charset=UTF-8"
                    }
                })
                .then(response => response.json())
                .then(json => console.log('Criado com sucesso!'))
                .catch(err => console.log(err));
        }

        function Excluir() {
            var id = pegaId();
            var {
                nome
            } = pegaValores();
            var Filme = {
                id,
                nome
            }
            fetch('http://localhost:5000/deletarfilme', {
                    method: "DELETE",
                    body: JSON.stringify(Filme),
                    headers: {
                        "Content-type": "application/json; charset=UTF-8"
                    }
                })
                .then(response => response.json())
                .then(json => console.log('Excluido com sucesso!'))
                .catch(err => console.log(err));
        }

        function addZ(n) {
            return n < 10 ? '0' + n : '' + n; //funcao para quando o dia for menor que 10. Exemplo: 05/03/2024
        }

        function campoVazio(w){
            return w == '' ? null : w; // funcao para tratar campos vazios
        }

        async function filmesCadastrados() {
            var data = await fetch('http://localhost:5000/').then(response => response.json());
            data.reverse();
            data.map((filme) => {
                var opt = document.createElement('option');
                opt.value = parseInt(filme.id);
                opt.innerHTML = filme.nome;
                document.getElementById('lista-editar').appendChild(opt);
            })
        }

        async function selecionarOpcao() {
            var idOpt = document.getElementById('lista-editar').value;
            var opcoes = await fetch('http://localhost:5000/').then(response => response.json());
            //logica para pegar o objeto correto no array, pois estou utilizando o indice de array
            var selecionado = opcoes.findIndex((filme) => filme.id == idOpt);

            document.getElementById('nome').value = opcoes[selecionado].nome;
            document.getElementById('mensagem').value = opcoes[selecionado].mensagem;
            //tratando data
            var dataCompleta = new Date(opcoes[selecionado].estreia.replace(/-/g, '\/').replace(/T.+/, ''));
            var dia = addZ(dataCompleta.getDate());
            var mes = addZ(dataCompleta.getMonth() + 1);
            var ano = dataCompleta.getFullYear();

            document.getElementById('estreia').value = ano + '-' + mes + '-' + dia;
            document.getElementById('classificacao').value = opcoes[selecionado].classificacao;
            document.getElementById('duracao').value = opcoes[selecionado].duracao;
            document.getElementById('cartaz').value = opcoes[selecionado].cartaz;
            document.getElementById('trailer').value = opcoes[selecionado].trailer;
            document.getElementById('scope').value = opcoes[selecionado].codigoscope;
            document.getElementById('flat').value = opcoes[selecionado].codigoflat;
            document.getElementById('scope3d').value = opcoes[selecionado].codigoscope3d;
            document.getElementById('flat3d').value = opcoes[selecionado].codigoflat3d;
            document.getElementById('linkcartaz').value = opcoes[selecionado].link_cartaz;
            document.getElementById('linkfotos').value = opcoes[selecionado].link_fotos;
            document.getElementById('linkredesociais').value = opcoes[selecionado].link_redesociais;
            document.getElementById('linkhotsite').value = opcoes[selecionado].link_hotsite;
            document.getElementById('linkspot').value = opcoes[selecionado].link_spot;
            document.getElementById('baixartrailerflat').value = opcoes[selecionado].link_trailerflat;
            document.getElementById('baixartrailerscope').value = opcoes[selecionado].link_trailerscope;
            document.getElementById('favcolor').value = opcoes[selecionado].cor;
            if (opcoes[selecionado].oculto == 'S') {
                document.getElementById('visibilidade').checked = true
            } else {
                document.getElementById('visibilidade').checked = false;
            };
            document.getElementsByClassName('movie')[0].style.background = opcoes[selecionado].cor;
            document.getElementById('nome').setAttribute('readonly', true);
            document.getElementById('btn-cadastrar').style.visibility = "hidden";
        }

        function selecionarCor() {
            var corSelecionada = document.getElementById('favcolor').value;
            document.getElementsByClassName('movie')[0].style.background = corSelecionada;
        }

        function pegaId() {
            var selecionado = document.getElementById('lista-editar').value;
            return selecionado;
        }

        function pegaValores() {
            var nome = document.getElementById('nome').value;
            var mensagem = document.getElementById('mensagem').value;
            var estreia = document.getElementById('estreia').value;
            var classificacao = document.getElementById('classificacao').value;
            var duracao = document.getElementById('duracao').value;
            var cartaz = document.getElementById('cartaz').value;
            var trailer = document.getElementById('trailer').value;
            var codigoscope = document.getElementById('scope').value;
            var codigoflat = document.getElementById('flat').value;
            var codigoscope3d = document.getElementById('scope3d').value;
            var codigoflat3d = document.getElementById('flat3d').value;
            var linkcartaz = document.getElementById('linkcartaz').value;
            var linkfotos = document.getElementById('linkfotos').value;
            var linkredesociais = document.getElementById('linkredesociais').value;
            var linkhotsite = document.getElementById('linkhotsite').value;
            var linkspot = document.getElementById('linkspot').value;
            var baixartrailerflat = document.getElementById('baixartrailerflat').value;
            var baixartrailerscope = document.getElementById('baixartrailerscope').value;
            var cor = document.getElementById('favcolor').value;
            var oculto = document.getElementById('visibilidade');

            var Filme = {
                nome,
                mensagem,
                estreia,
                classificacao,
                duracao,
                cartaz,
                trailer,
                codigoscope,
                codigoflat,
                codigoscope3d,
                codigoflat3d,
                linkcartaz,
                linkfotos,
                linkredesociais,
                linkhotsite,
                linkspot,
                baixartrailerflat,
                baixartrailerscope,
                cor,
                oculto
            }

            return Filme;
        }

        function filme3D(){
            if (document.getElementById('filme3d').checked == true){
                document.getElementById('scope3d').style.cssText = "margin-bottom: 05px; margin-right: auto; margin-left: auto; padding: 10px; visibility: visible;"
                document.getElementById('flat3d').style.cssText = "margin-bottom: 05px; margin-right: auto; margin-left: auto; padding: 10px; visibility: visible;"
            }else{
                document.getElementById('scope3d').style.cssText = "margin: 0; padding: 0; visibility: hidden;"
                document.getElementById('flat3d').style.cssText = "margin: 0; padding: 0; visibility: hidden;"
            }
        }

        filmesCadastrados();
    </script>
</head>
<body>
    <main>
        <header>
            <img alt="DOWNTOWN Filmes" height="auto" src="http://exibidor.dtfilmes.com.br/img/logo_dt.png" width="256" />
            <h1>Cadastrar Filme</h1>
            <h2>Preencha todos os dados com atenção!</h2>
            <h3>Digite:</h3>
        </header>
        <div id="movies-list" class="movies-list">
            <div class="movie">
                <select id="lista-editar" onchange="selecionarOpcao()">
                    <option value="">Deseja editar algum filme ? clique!</option>
                </select>
                <div class="movie-cadastro">
                    <div>
                        <input id="nome" type="text" placeholder="o nome do filme" required>
                        <textarea id="mensagem" cols="30" rows="10" placeholder="a mensagem" style="margin-bottom: 0 !important;"></textarea>
                    </div>
                    <div class="movie-cadastro-info">
                        <div style="display: flex; justify-items: center;">
                            <label for="favcolor" style="display: flex; align-items: center; justify-content:center; margin-left:50px;">Cor de fundo: </label>
                            <input type="color" id="favcolor" name="favcolor" value="#333333" onchange="selecionarCor()">
                        </div>
                        <input id="estreia" type="date" placeholder="a data de estréia">
                        <input id="classificacao" type="number" placeholder="a classificação indicativa">
                        <input id="duracao" type="time" placeholder="a duração do filme">
                        <input id="cartaz" type="text" placeholder="o link da foto do cartaz">
                        <input id="trailer" type="text" placeholder="o link do video(trailer)">
                    </div>
                </div>
                <div class="dcp-link">
                    <h2>Links para download</h2>
                    <div class="link">
                        <input id="linkcartaz" type="text" placeholder="link do Cartaz">
                        <input id="linkfotos" type="text" placeholder="link das Fotos">
                        <input id="linkredesociais" type="text" placeholder="links Rede Social">
                        <input id="linkhotsite" type="text" placeholder="link hotsite">
                        <input id="linkspot" type="text" placeholder="link Spot">
                        <input id="baixartrailerflat" type="text" placeholder="link Baixar Trailer Flat">
                        <input id="baixartrailerscope" type="text" placeholder="link Baixar Trailer Scope">
                    </div>
                    <h2>Códigos de DCP</h2>
                    <div class="dcp">
                        <input id="scope" type="text" placeholder="o código DCP Scope">
                        <input id="flat" type="text" placeholder="o código DCP Flat">
                        <input id="scope3d" type="text" placeholder="o código DCP Scope3D">
                        <input id="flat3d" type="text" placeholder="o código DCP Flat3D">
                        <div style="display: flex; justify-content: center;">
                            <label for="filme3d" style="align-items: center; margin-left:50px;">Filme 3D?</label>
                            <input type="checkbox" id="filme3d" name="filme3d" style="margin: 0 !important; width:30px;" onchange="filme3D()">
                            <label for="visibilidade" style="align-items: center; margin-left:50px;"> Ocultar este filme ?</label>
                            <input type="checkbox" id="visibilidade" name="visibilidade" style="margin: 0 !important; width:30px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="btn">
                    <button id='btn-editar' onclick="Editar()">Editar</button>
                    <button id='btn-cadastrar' onclick="Cadastrar()">Cadastrar</button>
                    <button id='btn-excluir' onclick="Excluir()">Excluir</button>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </main>
</body>
</html>