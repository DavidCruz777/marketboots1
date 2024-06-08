const express = require('express')
const routes = express.Router()

routes.get('/telefono', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_telefono', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})
//INSERTAR Telefono
routes.post('/INS_TELEFONO',(req, res)=>{
    const {TIP_TELEFONO, DES_TELEFONO, FEC_REGISTRO, NUM_TELEFONO} = req.body;
    const consulta = `call INS_ALERTA('${TIP_TELEFONO}','${DES_TELEFONO}','${FEC_REGISTRO}','${NUM_TELEFONO}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Telefono Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })
//EDITAR TELEFONO
routes.put('/telefono/edit/:COD_TELEFONO',(req, res)=>{
    const {COD_TELEFONO} = req.params;
    const {TIP_TELEFONO, DES_TELEFONO, FEC_REGISTRO, NUM_TELEFONO} = req.body;
    const consulta = `call UPD_TELEFONO(?,${TIP_TELEFONO}','${DES_TELEFONO}','${FEC_REGISTRO}','${NUM_TELEFONO}')`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_TELEFONO], (err, rows)=>{
                if(!err)
                res.send('Telefono Actualizado Correctamente')
                else
                console.log(err)
            })
        })
    })
    //ELIMINAR TELEFONO
routes.delete('/telefono/delete/:COD_ALERTA',(req, res)=>{
    const { COD_TELEFONO} = req.params;
    const consulta = `call ELI_TELEFONO(?)`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_TELEFONO], (err, rows)=>{
                if(!err)
                res.send('Telefono Eliminado Correctamente')
                else
                console.log(err)
            })
        })
    }) 
module.exports = routes