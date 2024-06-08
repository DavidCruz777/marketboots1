const express = require('express')
const routes = express.Router()

routes.get('/detallepresupuesto', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_detalle_presupuesto', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

routes.get('/detallepresupuesto/:COD_DET_PRESUPUESTO',(req, res)=>{
    const { COD_DET_PRESUPUESTO} = req.params;
    const consulta = `SELECT * FROM tbl_detalle_presupuesto WHERE COD_DET_PRESUPUESTO = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_DET_PRESUPUESTO], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 
//INSERTAR DETALLE PRESUPUESTO 
routes.post('/INS_DETALLE_PRESUPUESTO',(req, res)=>{
    const {VAL_SALIDA, FEC_SALIDA, DES_SALIDA} = req.body;
    const consulta = `call INS_DETALLE_PRESUPUESTO('${VAL_SALIDA}','${FEC_SALIDA}','${DES_SALIDA}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Detalle Presupuesto Ingresada Correctamente')
                else
                console.log(err)
            })
        })
    })
//EDITAR DETALLE PRESUSPUESTO
routes.put('/detallepresupuesto/:COD_DET_PRESUPUESTO',(req, res)=>{
    const {COD_DET_PRESUPUESTO} = req.params;
    const {VAL_SALIDA, FEC_SALIDA, DES_SALIDA} = req.body;
     const consulta = `call UPD_DETALLE_PRESUPUESTO(?,'${VAL_SALIDA}','${FEC_SALIDA}','${DES_SALIDA}')`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_DET_PRESUPUESTO], (err, rows)=>{
                if(!err)
                res.send('Detalle Presupuesto Actualizada Correctamente')
                else
                console.log(err)
            })
        })
    })
    //ELIMINAR DETALLE PRESUPUESTO
routes.delete('/detallepresupuesto/delete/:COD_DET_PRESUPUESTO',(req, res)=>{
    const { COD_DET_PRESUPUESTO} = req.params;
    const consulta = `call ELI_DETALLE_PRESUPUESTO(?)`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_DET_PRESUPUESTO], (err, rows)=>{
                if(!err)
                res.send('Detalle Presupuesto Eliminada Correctamente')
                else
                console.log(err)
            })
        })
    }) 
module.exports = routes