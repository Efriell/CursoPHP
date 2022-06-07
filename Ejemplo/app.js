let btnEnviar = document.getElementById('btnEnviar');

btnEnviar.addEventListener("click",(e)=>{
    /* alert("Hola") */
    e.preventDefault()
    let data = new FormData(document.getElementById('frmCliente'))
    /* console.log(...data) */
    fetch("http://localhost:8080/CursoPHP-master/ejemplo/destino.php",{
        method: "post",
        body: data     
    })
    .then((response)=>response.json())
    .then((data)=>{
        console.log("Exito!!",data)
    })
    .catch((error)=>{
        console.log(error)
    })
})