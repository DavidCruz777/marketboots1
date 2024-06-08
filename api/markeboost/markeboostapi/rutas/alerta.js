const express = require('express')
const routes = express.Router()

routes.get('/alerta', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_alerta', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})
routes.get('/alerta/:COD_ALERTA',(req, res)=>{
    const { COD_ALERTA} = req.params;
    const consulta = `SELECT * FROM tbl_alerta WHERE COD_ALERTA = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_ALERTA], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 
//INSERTAR ALERTA
routes.post('/INS_ALERTA',(req, res)=>{
    const {COD_CAMPANA,TIP_ALERTA, SMS_ALERTA, EST_ALERTA, PRI_ALERTA} = req.body;
    const consulta = `call INS_ALERTA('${COD_CAMPANA}','${TIP_ALERTA}','${SMS_ALERTA}','${ EST_ALERTA}','${PRI_ALERTA}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Alerta Ingresada Correctamente')
                else
                console.log(err)
            })
        })
    })
//EDITAR ALERTA
routes.put('/alertas/:COD_ALERTA',(req, res)=>{
    const { COD_ALERTA} = req.params;
    const { COD_CAMPANA, TIP_ALERTA, SMS_ALERTA, EST_ALERTA, PRI_ALERTA} = req.body;
    const consulta = `call UPD_ALERTA(?,'${COD_CAMPANA}','${TIP_ALERTA}','${SMS_ALERTA}','${ EST_ALERTA}','${PRI_ALERTA}')`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_ALERTA], (err, rows)=>{
                if(!err)
                res.send('Alerta Actualizada Correctamente')
                else
                console.log(err)
            })
        })
    })
    //ELIMINAR ALERTA
routes.delete('/alerta/delete/:COD_ALERTA',(req, res)=>{
    const { COD_ALERTA} = req.params;
    const consulta = `call ELI_ALERTA(?)`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_ALERTA], (err, rows)=>{
                if(!err)
                res.send('Alerta Eliminada Correctamente')
                else
                console.log(err)
            })
        })
    }) 

module.exports = routes