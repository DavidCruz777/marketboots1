const express = require('express')
const routes = express.Router()

routes.get('/persona', (req, res) =>{
    req.getConnection((err, conn) =>{
        if(err) return res.send(err)

        conn.query('SELECT *FROM tbl_persona', (err, rows)=>{
            if(err) return res.send(err)

            res.send(rows)
        })
    })
})

//INSERTAR PERSONA
routes.post('/INS_PERSONA',(req, res)=>{
    const {NOM_PERSONA, DNI_PERSONA, DIR_PERSONA, COR_PERSONA, COD_TELEFONO} = req.body;
    const consulta = `call INS_ALERTA('${NOM_PERSONA}','${DNI_PERSONA}','${DIR_PERSONA}','${COR_PERSONA}','${COD_TELEFONO}')`;
    
    req.getConnection((err, conn)=>{
            conn.query(consulta, (err, rows)=>{
                if(!err)
                res.send('Persona Ingresada Correctamente')
                else
                console.log(err)
            })
        })
    })
//EDITAR PERSONA
routes.put('/persona/edit/:COD_PERSONA',(req, res)=>{
    const {COD_PERSONA} = req.params;
    const {NOM_PERSONA, DNI_PERSONA, DIR_PERSONA, COR_PERSONA, COD_TELEFONO} = req.body;
    const consulta = `call UPD(?,${NOM_PERSONA}','${DNI_PERSONA}','${DIR_PERSONA}','${COR_PERSONA}','${COD_TELEFONO}')`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_PERSONA], (err, rows)=>{
                if(!err)
                res.send('Persona Actualizada Correctamente')
                else
                console.log(err)
            })
        })
    })
    //ELIMINAR PERSONA
routes.delete('/persona/delete/:COD_PERSONA',(req, res)=>{
    const { COD_PERSONA} = req.params;
    const consulta = `call ELI_PERSONA(?)`;
    req.getConnection((err, conn)=>{
            conn.query(consulta, [COD_PERSONA], (err, rows)=>{
                if(!err)
                res.send('Persona Eliminada Correctamente')
                else
                console.log(err)
            })
        })
    }) 

module.exports = routes