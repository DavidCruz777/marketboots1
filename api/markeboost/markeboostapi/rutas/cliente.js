const express = require('express')
const routes = express.Router()

routes.get('/cliente', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT* FROM tbl_cliente', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})
routes.get('/cliente/:COD_CLIENTE',(req, res)=>{
    const { COD_CLIENTE} = req.params;
    const consulta = `SELECT * FROM tbl_cliente WHERE COD_CLIENTE = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_CLIENTE], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 
routes.post('/INS_CLIENTE',(req, res)=>{
    const {DNI_CLIENTE, RTN_CLIENTE, NOM_CLIENTE, DIR_CLIENTE, TIPO_PAGO, FEC_INGRESO_CLIENTE} = req.body;
    const consulta = `call INS_CLIENTE('${DNI_CLIENTE}','${RTN_CLIENTE}','${NOM_CLIENTE}','${DIR_CLIENTE}','${TIPO_PAGO}','${FEC_INGRESO_CLIENTE}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Cliente Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })


    //ACTUALIZAR CLIENTES
    routes.put('/cliente/:COD_CLIENTE',(req, res)=>{
        const { COD_CLIENTE} = req.params;
        const { DNI_CLIENTE, RTN_CLIENTE, NOM_CLIENTE, DIR_CLIENTE, TIPO_PAGO, FEC_INGRESO_CLIENTE} = req.body;
        const consulta = `call UPD_CLIENTE(?,'${DNI_CLIENTE}','${RTN_CLIENTE}','${NOM_CLIENTE}','${DIR_CLIENTE}','${TIPO_PAGO}','${FEC_INGRESO_CLIENTE}')`;
        req.getConnection((err, conn)=>{
                conn.query(consulta, [COD_CLIENTE], (err, rows)=>{
                    if(!err)
                    res.send('Cliente Actualizado Correctamente')
                    else
                    console.log(err)
                })
            })
        })

   //ELIMINAR CLIENTES
        routes.delete('/cliente/delete/:COD_CLIENTE',(req, res)=>{
            const { COD_CLIENTE} = req.params;
            const consulta = `call ELI_CLIENTE(?)`;
            req.getConnection((err, conn)=>{
                    conn.query(consulta, [COD_CLIENTE], (err, rows)=>{
                        if(!err)
                        res.send('Cliente Eliminado Correctamente')
                        else
                        console.log(err)
                    })
                })
            }) 

module.exports = routes
