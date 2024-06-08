const express = require('express')
const mysql = require('mysql')
const myconn = require('express-myconnection')


const app = express()

app.set('port', process.env.PORT || 3000)
const dbOptions = {
    host: process.env.DB_HOST || "localhost",
    port: process.env.DB_PORT || "3306",
    user: process.env.DB_USER || "root",
    password: process.env.DB_PASSWORD || "",
    database: process.env.DB_NAME || "marketboost"
}

// Middlewares
app.use(myconn(mysql,dbOptions,'single'))
app.use(express.json())
// Rutas
app.use(require('./rutas/bitacora'))
app.use(require('./rutas/persona'))
app.use(require('./rutas/alerta'))
app.use(require('./rutas/campana'))
app.use(require('./rutas/manager'))
 app.use(require('./rutas/presupuesto'))
 app.use(require('./rutas/detallepresupuesto'))
app.use(require('./rutas/reportegenerado'))
app.use(require('./rutas/recursos'))
app.use(require('./rutas/reporte'))
app.use(require('./rutas/telefono'))
app.use(require('./rutas/cliente'))
app.use(require('./rutas/usuario'))
 // Server running
app.listen(app.get('port'), () =>{
    console.log('Server running on port',app.get('port'))
})
///