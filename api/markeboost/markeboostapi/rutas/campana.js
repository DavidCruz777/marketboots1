const express = require('express')
const routes = express.Router()

routes.get('/campana', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_campana', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})
//SELECT
routes.get('/campana/:COD_CAMPANA',(req, res)=>{
    const { COD_CAMPANA} = req.params;
    const consulta = `SELECT * FROM TBL_CAMPANA WHERE COD_CAMPANA = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_CAMPANA], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 
//INSERT
    routes.post('/INS_CAMPANA',(req, res)=>{
        const {COD_RECURSO, COD_PERSONA, COD_PRESUPUESTO, NOM_CAMPANA, FEC_INICIO, FEC_FINAL, DES_CAMPANA, COD_MANAGER } = req.body;
        const consulta = `call INS_CAMPANA('${COD_RECURSO}','${COD_PERSONA}','${COD_PRESUPUESTO}','${NOM_CAMPANA}','${FEC_INICIO}','${FEC_FINAL}', '${DES_CAMPANA}', '${COD_MANAGER}' )`;
        
        req.getConnection((err, conn)=>{
                conn.query(consulta, (err, rows)=>{
                    if(!err)
                    res.send('Campana ingresada correctamente')
                    else
                    console.log(err)
                })
            })
        })

        //ACTUALIZAR CAMPANA
    routes.put('/campana/:COD_CAMPANA',(req, res)=>{
        const { COD_CAMPANA} = req.params;
        const { COD_RECURSO, COD_PERSONA, COD_PRESUPUESTO, NOM_CAMPANA, FEC_INICIO, FEC_FINAL, DES_CAMPANA, COD_MANAGER} = req.body;
        const consulta = `call UPD_CAMPANA(?,'${COD_RECURSO}','${COD_PERSONA}','${COD_PRESUPUESTO}','${NOM_CAMPANA}','${FEC_INICIO}','${FEC_FINAL}', '${DES_CAMPANA}', '${COD_MANAGER}' )`;
        
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_CAMPANA], (err, rows)=>{
                    if(!err)
                    res.send('Campana actualizada correctamente')
                    else
                    console.log(err)
                })
            })
        })

        //ELIMINAR CAMPANA
        routes.delete('/campana/delete/:COD_CAMPANA',(req, res)=>{
            const { COD_CAMPANA} = req.params;
            const consulta = `call ELI_CAMPANA(?)`;
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_CAMPANA], (err, rows)=>{
                        if(!err)
                        res.send('Campana Eliminada Correctamente')
                        else
                        console.log(err)
                    })
                })
            }) 
    
module.exports = routes