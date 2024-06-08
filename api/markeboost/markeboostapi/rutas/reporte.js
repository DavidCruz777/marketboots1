const express = require('express')
const routes = express.Router()

routes.get('/reporte', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_reporte', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

//SELECT

routes.get('/reporte/:COD_REPORTE',(req, res)=>{
    const { COD_REPORTE} = req.params;
    const consulta = `SELECT * FROM tbl_reporte WHERE COD_REPORTE = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_REPORTE], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 

    //INSERTAR
    routes.post('/INS_REPORTE',(req, res)=>{
        const {COD_DET_PRESUPUESTO, NOM_REPORTE, TIP_REPORTE, FEC_REPORTE, COD_REP_GENERADO} = req.body;
        const consulta = `call INS_REPORTE('${COD_DET_PRESUPUESTO}','${NOM_REPORTE}','${TIP_REPORTE}','${FEC_REPORTE}','${COD_REP_GENERADO}')`;
        
        req.getConnection((err, conn)=>{
                conn.query(consulta, (err, rows)=>{
                    if(!err)
                    res.send('Repprte Ingresado Correctamente')
                    else
                    console.log(err)
                })
            })
        })
    
        //ACTUALIZAR REPORTES
    routes.put('/reporte/:COD_REPORTE',(req, res)=>{
        const { COD_REPORTE} = req.params;
        const {COD_DET_PRESUPUESTO, NOM_REPORTE, TIP_REPORTE, FEC_REPORTE, COD_REP_GENERADO} = req.body;
        const consulta = `call UPD_REPORTE(?,'${COD_DET_PRESUPUESTO}','${NOM_REPORTE}','${TIP_REPORTE}','${FEC_REPORTE}','${COD_REP_GENERADO}')`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_REPORTE], (err, rows)=>{
                    if(!err)
                    res.send('Reporte Actualizado Correctamente')
                    else
                    console.log(err)
                })
            })
        })

        //ELIMINAR REPORTES
        routes.delete('/reportes/delete/:COD_REPORTE',(req, res)=>{
            const { COD_REPORTE} = req.params;
            const consulta = `call ELI_REPORTE(?)`;
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_REPORTE], (err, rows)=>{
                        if(!err)
                        res.send('Reporte Eliminado Correctamente')
                        else
                        console.log(err)
                    })
                })
            }) 

module.exports = routes