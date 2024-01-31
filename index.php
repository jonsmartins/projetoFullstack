<!DOCTYPE html>
<html lang="en">

<?php
// Incluímos o arquivo de restrição
// require_once("restrito.php"); 
// O arquivo "restrito.php" provavelmente contém lógica de restrição de acesso.

// echo "Página restrita. Apenas usuários autorizados podem acessar.";

// Fim do arquivo
?>

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exibidor - DT - Filmes</title>

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
  </style>
</head>
<body>
  <main>
    <header>
      <img alt="DOWNTOWN Filmes" height="auto" src="http://exibidor.dtfilmes.com.br/img/logo_dt.png" width="256" />
      <h1>Prezado(a) exibidor(a),</h1>
      <h2>Seja bem-vindo a nossa página de materiais!</h2>
      <h3>Abaixo, informações e links dos nossos próximos lançamentos:</h3>
    </header>
    <div id="movies-list" class="movies-list">
      <!-- Aqui começa a lista de Filmes -->
      <?php include 'filmes.php'; ?>
      <!-- Aqui termina a lista de Filmes -->
    </div>
    <!--Rodapé-->
    <!-- Incluindo o footer -->
    <?php include 'footer.php'; ?>
    <!--Fim do rodapé-->
  </main>
</body>

</html>