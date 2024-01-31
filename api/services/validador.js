class Validador{

    validarFilme(filme){
        if(filme.nome == '') return true
    }

}

module.exports = new Validador;
