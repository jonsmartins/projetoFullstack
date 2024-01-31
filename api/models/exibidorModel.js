const db = require("../database/config");

class ExibidorModel {
    async buscarFilmes() {
        try {
            var res = await db('filmes')
                .join('links', 'filmes.id', '=', 'links.id_filme')
                .select('filmes.*', 'links.*')

            return res;
        } catch (err) {
            console.log(err);
        }
    }
    async buscaID(filme) {
        try {
            var resultado = await db.select('*').where({ id: filme.id }).table('filmes');
            return resultado;
        } catch (error) {
            console.log(error)
        }
    }
    async criarFilme(filme) {
        try {
            await db('filmes').insert({
                nome: filme.nome,
                mensagem: filme.mensagem,
                estreia: filme.estreia,
                classificacao: filme.classificacao,
                duracao: filme.duracao,
                cartaz: filme.cartaz,
                trailer: filme.trailer,
                codigoscope: filme.codigoscope,
                codigoflat: filme.codigoflat,
                codigoscope3d: filme.codigoscope3d,
                codigoflat3d: filme.codigoflat3d,
                cor: filme.cor,
                oculto: filme.oculto
            })
            var data = await db.select('id').from('filmes').where('nome', filme.nome);
            var idfilme = data[0].id;
            await db('links').insert({
                id_filme: idfilme,
                link_cartaz: filme.linkcartaz,
                link_fotos: filme.linkfotos,
                link_redesociais: filme.linkredesociais,
                link_hotsite: filme.linkhotsite,
                link_spot: filme.linkspot,
                link_trailerflat: filme.baixartrailerflat,
                link_trailerscope: filme.baixartrailerscope
            })
            return new Response({ status: 201 })
        } catch (error) {
            console.log(error)
        }
    }
    async editarFilme(filme) {
        try {
            await db('filmes').update({
                mensagem: filme.mensagem,
                estreia: filme.estreia,
                classificacao: filme.classificacao,
                duracao: filme.duracao,
                cartaz: filme.cartaz,
                trailer: filme.trailer,
                codigoscope: filme.codigoscope,
                codigoflat: filme.codigoflat,
                codigoscope3d: filme.codigoscope3d,
                codigoflat3d: filme.codigoflat3d,
                cor: filme.cor,
                oculto: filme.oculto
            }).where('id', filme.id)
            await db('links').update({
                link_cartaz: filme.linkcartaz,
                link_fotos: filme.linkfotos,
                link_redesociais: filme.linkredesociais,
                link_hotsite: filme.linkhotsite,
                link_spot: filme.linkspot,
                link_trailerflat: filme.baixartrailerflat,
                link_trailerscope: filme.baixartrailerscope
            }).where('id_filme', filme.id)
            return new Response({ status: 200 })
        } catch (error) {
            console.log(error)
        }
    }
    async deletarFilme(filme) {
        try {
            await db('filmes').where({
                id: filme.id,
                nome: filme.nome
            }).del();
            return new Response({ status: 200 })
        } catch (error) {
            console.log(error)
        }
    }
}

module.exports = new ExibidorModel;
