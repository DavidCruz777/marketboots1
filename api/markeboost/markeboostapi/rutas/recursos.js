const express = require('express')
const routes = express.Router()

routes.get('/recursos', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_recursos', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})
routes.get('/recursos/:COD_RECURSO',(req, res)=>{
    const { COD_RECURSO} = req.params;
    const consulta = `SELECT * FROM tbl_recursos WHERE COD_RECURSO = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_RECURSO], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 

//INSERTAR RECURSO
routes.post('/INS_RECURSO',(req, res)=>{
    const {NOM_RECURSO, TIP_RECURSO, DESC_RECURSO} = req.body;
    const consulta = `call INS_RECURSO('${NOM_RECURSO}','${TIP_RECURSO}','${DESC_RECURSO}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Recurso Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })
//EDITAR RECURSO
routes.put('/recursos/:COD_RECURSO',(req, res)=>{
    const {COD_RECURSO} = req.params;
    const {NOM_RECURSO, TIP_RECURSO, DESC_RECURSO} = req.body;
    const consulta = `call UPD_RECURSO(?,'${NOM_RECURSO}','${TIP_RECURSO}','${DESC_RECURSO}')`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_RECURSO], (err, rows)=>{
                if(!err)
                res.send('Recurso Actualizado Correctamente')
                else
                console.log(err)
            })
        })
    })
    //ELIMINAR RECURSO
routes.delete('/recursos/delete/:COD_RECURSO',(req, res)=>{
    const { COD_RECURSO} = req.params;
    const consulta = `call ELI_RECURSO(?)`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_RECURSO], (err, rows)=>{
                if(!err)
                res.send('Recurso Eliminado Correctamente')
                else
                console.log(err)
            })
        })
    }) 

module.exports = routes