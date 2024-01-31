var ExibidorModel = require("../models/exibidorModel")
var Validador = require("../services/validador")

class ExibidorController {

    async buscarFilmes(req, res) {
        try {
            var resultado = await ExibidorModel.buscarFilmes()
            res.status(200).json(resultado);
        } catch (error) {
            console.log(error)
        }
    }
    async criarFilme(req, res) {
        if (Validador.validarFilme(req.body)) {
            res.status(404).send('O nome do filme não poderá ser vazio!')
        } else {
            var resultado = await ExibidorModel.criarFilme(req.body);
            if (resultado) res.status(201).send('Criado com sucesso!')
            else res.status(404).send('Erro ao criar')
        }
    }
    async editarFilme(req, res) {
        var resultado = await ExibidorModel.editarFilme(req.body);
        if (resultado) res.status(200).send('Atualizado com sucesso!')
        else res.status(404).send('Erro ao atualizar')
    }
    async deletarFilme(req, res) {
        if (Validador.validarFilme(req.body)) {
            res.status(404).send('Selecione algum filme !')
        } else {
            var resultado = await ExibidorModel.deletarFilme(req.body);
            if (resultado) res.status(200).send('Excluido com sucesso!')
            else res.status(404).send('Erro ao deletar')
        }
    }
}

module.exports = new ExibidorController;
