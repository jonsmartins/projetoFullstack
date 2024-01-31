var knex = require('knex')({
  client:'mysql2',
  connection:{
    host: 'localhost',
    port : 3306,
    user: 'exibidordt',
    password: 'minhaSenha@!',
    database: 'exibidor',
    timezone:'UTC'
  }
})

module.exports = knex;
