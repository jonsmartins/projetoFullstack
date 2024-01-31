<script>
    const url = 'http://localhost:5000/';

    function addZ(n) {
        return n < 10 ? '0' + n : '' + n; //funcao para acrescentar um 0 quando o dia ou mes for menor que 10. Exemplo: 05/03/2024
    }

    function timePassed(time) {//funcao para separar horas e minutos. Ou minutos e segundos
        let [t1, t2] = time.split(":");
        t1 = t1 / 12 > 1 ? t1 - 12 : t1;
        var time = {
            t1,
            t2
        }
        return time;
    }
    async function getFilmes() {
        var filmes = await fetch(url).then(response => response.json());
        filmes.reverse();
        filmes.map((filme) => {
            if (filme.oculto == 'N') {
                //criando variaveis para cada item
                var nome = filme.nome;
                var mensagem = filme.mensagem;
                var classificacao = filme.classificacao;
                var duracao = filme.duracao;
                var cartaz = filme.cartaz;
                var trailer = filme.trailer;
                var codigoscope = filme.codigoscope;
                var codigoflat = filme.codigoflat;
                var codigoscope3d = filme.codigoscope3d;
                var codigoflat3d = filme.codigoflat3d;
                var linkcartaz = filme.link_cartaz;
                var linkfotos = filme.link_fotos;
                var linkredesocial = filme.link_redesociais;
                var linkhotsite = filme.link_hotsite;
                var linkspot = filme.link_spot;
                var trailerflat = filme.link_trailerflat;
                var trailerscope = filme.link_trailerscope;
                //tratamento da data
                var dataCompleta = new Date(filme.estreia.replace(/-/g, '\/').replace(/T.+/, ''));
                var dia = addZ(dataCompleta.getDate());
                var mes = addZ(dataCompleta.getMonth() + 1);
                var ano = dataCompleta.getFullYear();
                var estreia = dia + '/' + mes + '/' + ano;
                //variavel de cartaz 'Em Breve'
                var cartazEmBreve = 'https://exibidor.dtfilmes.com.br/img/em_breve.jpg';
                //criando todos os elementos da página
                var fulldiv = document.createElement('div');
                var divmoviecontent = document.createElement('div');
                var divmovtecinf = document.createElement('div');
                var movcartaz = document.createElement('div');
                var movimg = document.createElement('img');
                var movinf = document.createElement('div');
                var movh2 = document.createElement('h2');
                var movh3 = document.createElement('h3');
                var p1 = document.createElement('p');
                var p2 = document.createElement('p');
                var p3 = document.createElement('p');
                var span1 = document.createElement('span');
                var span2 = document.createElement('span');
                var span3 = document.createElement('span');
                var divlinks = document.createElement('div');
                var linka1 = document.createElement('a');
                var linka2 = document.createElement('a');
                var linka3 = document.createElement('a');
                var linka4 = document.createElement('a');
                var linka5 = document.createElement('a');
                var divbox = document.createElement('div');
                var iframe = document.createElement('iframe');
                var infoCPL = document.createElement('h3');
                var nomeclatura = document.createElement('div');
                var p4 = document.createElement('p');
                var p5 = document.createElement('p');
                var divlinks2 = document.createElement('div');
                var linka6 = document.createElement('a');
                var linka7 = document.createElement('a');
                //adicionando as classes para os elementos
                divmoviecontent.className = "movie-content";
                movcartaz.className = "movie-cartaz";
                movinf.className = "movie-info";
                divlinks.className = "links";
                linka1.className = "btn-link";
                linka2.className = "btn-link";
                linka3.className = "btn-link";
                linka4.className = "btn-link";
                linka5.className = "btn-link";
                divmovtecinf.className = "movie-tecnical-info";
                divbox.className = "box";
                nomeclatura.className = "nomeclatura";
                divlinks2.className = "links";
                linka6.className = "btn-link";
                linka7.className = "btn-link";
                //atribuindo valores
                movh2.innerHTML = nome;
                movh3.innerHTML = mensagem;
                movh3.style.cssText = "max-width: 300px; word-wrap: break-word;"
                p1.innerHTML = "Estréia: ";
                p2.innerHTML = "Classificação indicativa do trailer: ";
                p3.innerHTML = "Duração: ";
                span1.innerHTML = estreia;
                span1.style.cssText = "font-size:18px; font-weight: bold;"
                span2.innerHTML = classificacao;
                var {
                    t1,
                    t2
                } = timePassed(duracao);
                span3.innerHTML = t1 + " minutos e " + t2 + " segundos";
                linka1.innerHTML = "Baixar o cartaz";
                linka2.innerHTML = "Baixar fotos";
                linka3.innerHTML = "Posts Rede Social";
                linka4.innerHTML = "Hotsite " + nome;
                linka5.innerHTML = "Spot";
                linka1.href = linkcartaz;
                linka2.href = linkfotos;
                linka3.href = linkredesocial;
                linka4.href = linkhotsite;
                linka5.href = linkspot;
                linka1.title = "Baixar formatos de cartaz digital";
                linka2.title = "Fotos";
                linka3.title = "Baixar materiais para redes sociais";
                linka4.title = "Hotsite";
                linka5.title = "Spot";
                linka1.alt = "Formatos de cartaz";
                linka2.alt = "Fotos";
                linka3.alt = "Materiais para redes sociais";
                linka4.alt = "Hotsite";
                linka5.alt = "Spot";
                linka1.target = "_blank";
                linka2.target = "_blank";
                linka3.target = "_blank";
                linka4.target = "_blank";
                linka5.target = "_blank";
                iframe.src = trailer;
                iframe.title = "YouTube video player";
                iframe.frameborder = "0";
                iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
                iframe.allowFullscreen;
                infoCPL.innerHTML = "É importante que informem aos seus gerentes de projeção, a CPL do trailer que segue abaixo:";
                p4.innerHTML = codigoflat;
                p5.innerHTML = codigoscope;
                linka6.innerHTML = "BAIXAR TRAILER FLAT";
                linka6.target = "_blank";
                linka6.href = trailerflat;
                linka7.innerHTML = "BAIXAR TRAILER SCOPE";
                linka7.target = "_blank";
                linka7.href = trailerscope;
                //verificando se existe link de cartaz, caso nao, será usado o 'Em Breve'
                movimg.src = cartaz == null ? cartazEmBreve : 'https://exibidor.dtfilmes.com.br/img/' + cartaz;
                movimg.alt = nome;
                //adicionando a hereditariedade dos elementos
                movcartaz.appendChild(movimg); //adicionando elemento de imagem de cartaz
                p1.appendChild(span1); //adicionando span de estreia
                p2.appendChild(span2); //adicionando span de classificacao indicativa
                p3.appendChild(span3); //adicionando span de duracao
                divmoviecontent.appendChild(movcartaz); //adicionando div de imagem
                movinf.appendChild(movh2); //adicionando h2 de titulo
                movinf.appendChild(movh3); //adicionando mensagem
                movinf.appendChild(p1); //adicionando paragrafo de estreia
                movinf.appendChild(p2); //adicionando paragrafo de classificacao indicativa
                movinf.appendChild(p3); //adicionando paragrafo de duracao
                //tratando links vazios
                if (linkcartaz != null) {
                    divlinks.appendChild(linka1); //adicionando link a div de links
                }
                if (linkfotos != null) {
                    divlinks.appendChild(linka2); //adicionando link a div de links
                }
                if (linkredesocial != null) {
                    divlinks.appendChild(linka3); //adicionando link a div de links
                }
                if (linkhotsite != null) {
                    divlinks.appendChild(linka4); //adicionando link a div de links
                }
                if (linkspot != null) {
                    divlinks.appendChild(linka5); //adicionando link a div de links
                }
                movinf.appendChild(divlinks); //adicionando div de links a div de info
                divmoviecontent.appendChild(movinf);
                if (trailer != null) {
                    divbox.appendChild(iframe)
                    divmovtecinf.appendChild(divbox);
                };
                if ((codigoflat && codigoscope) != null) {
                    divmovtecinf.appendChild(infoCPL);;
                }
                nomeclatura.appendChild(p4);
                nomeclatura.appendChild(p5);
                divmovtecinf.appendChild(nomeclatura);
                if ((trailerflat && trailerscope) != '') {
                    divlinks2.appendChild(linka6);
                    divlinks2.appendChild(linka7);
                    divmovtecinf.appendChild(divlinks2);
                }
                fulldiv.appendChild(divmoviecontent);
                fulldiv.appendChild(divmovtecinf);
                fulldiv.style.background = filme.cor;
                divmovtecinf.style.background = filme.cor;
                document.getElementsByClassName('movie')[0].appendChild(fulldiv);
            }
        })
    }
    getFilmes();
</script>

<div class="movie">    
</div>