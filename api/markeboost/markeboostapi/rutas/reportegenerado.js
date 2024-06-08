const express = require('express')
const routes = express.Router()

routes.get('/reportegenerado', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_reporte_generado', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})
//EDITAR DETALLE PRESUSPUESTO
routes.put('/reportegenerado/edit/:COD_REP_GENERADO',(req, res)=>{
    const {COD_REP_GENERADO} = req.params;
     const {NOM_REP_GENERADO} = req.body;
     const consulta = `call UPD_REPORTE_GENERADO('${NOM_REP_GENERADO}')`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_REP_GENERADO], (err, rows)=>{
                if(!err)
                res.send('Reporte Generado Actualizada Correctamente')
                else
                console.log(err)
            })
        })
    })
    //ELIMINAR DETALLE PRESUPUESTO
routes.delete('/reportegenerado/delete/:COD_REP_GENERADO',(req, res)=>{
    const { COD_REP_GENERADO} = req.params;
    const consulta = `call ELI_REPORTE_GENERADO/(?)`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_REP_GENERADO], (err, rows)=>{
                if(!err)
                res.send('Reporte Generado Eliminada Correctamente')
                else
                console.log(err)
            })
        })
    }) 
module.exports = routes