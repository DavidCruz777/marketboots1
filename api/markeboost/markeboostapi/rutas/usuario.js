const express = require('express')
const routes = express.Router()

routes.get('/usuario', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_usuario', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})
routes.get('/usuario/:COD_USUARIO',(req, res)=>{
    const { COD_USUARIO} = req.params;
    const consulta = `SELECT * FROM TBL_USUARIO WHERE COD_USUARIO= ?`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_USUARIO], (err, rows)=>{
                if(err) return res.send(err)

                res.send(rows)
            })
        })
    }) 
//INSERTAR USUARIO
routes.post('/INS_USUARIO',(req, res)=>{
    const {NOM_USUARIO , COR_USUARIO, CONTRA_USUARIO} = req.body;
    const consulta = `call INS_USUARIO('${NOM_USUARIO}','${COR_USUARIO}','${CONTRA_USUARIO}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Usuario Ingresado Correctamente')
                else
                console.log(err)
            })
        })
    })
    //EDITAR USUARIO
routes.put('/usuario/:COD_USUARIO',(req, res)=>{
    const {COD_USUARIO} = req.params;
    const {NOM_USUARIO, COR_USUARIO, CONTRA_USUARIO} = req.body;
    const consulta = `call UPD_USUARIO(?,'${NOM_USUARIO}','${COR_USUARIO}','${CONTRA_USUARIO}')`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_USUARIO], (err, rows)=>{
                if(!err)
                res.send('Usuario Actualizado Correctamente')
                else
                console.log(err)
            })
        })
    })
module.exports = routes