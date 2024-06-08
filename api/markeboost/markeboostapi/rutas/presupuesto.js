const express = require('express')
const routes = express.Router()

routes.get('/presupuesto', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_presupuesto', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})
routes.get('/presupuesto/:COD_PRESUPUESTO',(req, res)=>{
    const { COD_PRESUPUESTO} = req.params;
    const consulta = `SELECT * FROM tbl_presupuesto WHERE COD_PRESUPUESTO = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_PRESUPUESTO], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 

//INSERTAR PRESUPUESTO
routes.post('/INS_PRESUPUESTO',(req, res)=>{
    const {COD_RECURSO,APLICADO, NOM_PRESUPUESTO, VAL_INICIAL, FEC_INICIAL, FEC_FINAL,DES_PRESUPUESTO,COD_MANAGER, COD_DET_PRESUPUESTO} = req.body;
    const consulta = `call INS_PRESUPUESTO('${COD_RECURSO}','${APLICADO}','${NOM_PRESUPUESTO}','${VAL_INICIAL}','${FEC_INICIAL}','${FEC_FINAL}','${DES_PRESUPUESTO}','${COD_MANAGER}','${COD_DET_PRESUPUESTO}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Presupuesto Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })

  //ACTUALIZAR PRESUPUESTO
  routes.put('/presupuesto/:COD_PRESUPUESTO',(req, res)=>{
    const { COD_PRESUPUESTO} = req.params;
    const {  COD_RECURSO, APLICADO, NOM_PRESUPUESTO, VAL_INICIAL, FEC_INICIAL, FEC_FINAL, DES_PRESUPUESTO, COD_MANAGER, COD_DET_PRESUPUESTO} = req.body;
    const consulta = `call UPD_PRESUPUESTO(?,'${COD_RECURSO}','${APLICADO}','${NOM_PRESUPUESTO}','${VAL_INICIAL}','${FEC_INICIAL}','${FEC_FINAL}','${DES_PRESUPUESTO}','${COD_MANAGER}','${COD_DET_PRESUPUESTO}')`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_PRESUPUESTO], (err, rows)=>{
                if(!err)
                res.send('Presupuesto Actualizado Correctamente')
                else
                console.log(err)
            })
        })
    })
   //ELIMINAR PRESUPUESTO
        routes.delete('/presupuesto/delete/:COD_PRESUPUESTO',(req, res)=>{
            const { COD_PRESUPUESTO} = req.params;
            const consulta = `call ELI_PRESUPUESTO(?)`;
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_PRESUPUESTO], (err, rows)=>{
                        if(!err)
                        res.send('Presupuesto Eliminado Correctamente')
                        else
                        console.log(err)
                    })
                })
            }) 

module.exports = routes
