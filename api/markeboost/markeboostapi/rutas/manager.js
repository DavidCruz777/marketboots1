const express = require('express')
const routes = express.Router()

routes.get('/manager', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT* FROM tbl_manager', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})
routes.get('/manager/:COD_MANAGER',(req, res)=>{
    const { COD_MANAGER} = req.params;
    const consulta = `SELECT * FROM tbl_manager WHERE COD_MANAGER = ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_MANAGER], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    })
//INSERTAR MANAGER
routes.post('/INS_MANAGER',(req, res)=>{
    const {NOM_MANAGER, TEL_MANAGER, COR_MANAGER} = req.body;
    const consulta = `call INS_MANAGER('${NOM_MANAGER}','${TEL_MANAGER}','${COR_MANAGER}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Manager ingresado correctamente')
                else
                console.log(err)
            })
        })
    })
//EDITAR MANAGER
routes.put('/manager/:COD_MANAGER',(req, res)=>{
    const { COD_MANAGER} = req.params;
    const { NOM_MANAGER, TEL_MANAGER, COR_MANAGER} = req.body;
    const consulta = `call UPD_MANAGER(?,'${NOM_MANAGER}','${TEL_MANAGER}','${COR_MANAGER}')`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_MANAGER], (err, rows)=>{
                if(!err)
                res.send('Manager Actualizado Correctamente')
                else
                console.log(err)
            })
        })
    })
    //ELIMINAR MANAGER
routes.delete('/mananer/delete/:COD_MANAGER',(req, res)=>{
    const { COD_MANAGER} = req.params;
    const consulta = `call ELI_MANAGER(?)`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_MANAGER], (err, rows)=>{
                if(!err)
                res.send('Manager Eliminado Correctamente')
                else
                console.log(err)
            })
        })
    }) 
module.exports = routes