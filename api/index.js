var ExibidorController = require("./controller/exibidorController")
const express = require("express");
const app = express();
const cors = require("cors");
app.use(cors());
app.use(express.json());

app.get("/", ExibidorController.buscarFilmes)
app.post("/criarfilme", ExibidorController.criarFilme)
app.post("/editarfilme", ExibidorController.editarFilme)
app.delete("/deletarfilme", ExibidorController.deletarFilme)

app.listen('5000', () => console.log("API acabou de reiniciar e está pronta para uso..."));