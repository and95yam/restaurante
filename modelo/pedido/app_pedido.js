const formulario = document.querySelector('#ingreso_pedido');

EventListeners();

function EventListeners(){
    formulario.addEventListener('submit',leerform);
}

function leerform(e){
    e.preventDefault();

    mes = document.querySelector('#Mesa').value,
    ord= document.querySelector('#Orden').value,
    ob= document.querySelector('#observaiones').value,
    acc=document.querySelector('#Accion').value;
   
    if(mes===''||ord===''){
        alert('Debe llenar todos los campos');
    }else{
        const llenarDatos = new FormData();
        llenarDatos.append('Mesa',mes);
        llenarDatos.append('Orden',ord);
        llenarDatos.append('observaciones',ob);
        llenarDatos.append('Accion',acc);

        console.log(...llenarDatos);

        if(acc==='crear'){
            insertarDB(llenarDatos);
            alert('Los Datos han sido ingresados'); 

        
            
        }else{
            alert('los Datos no se han ingresado');
        }
    }
}


function insertarDB(llenarDatos){
    const xhr = new XMLHttpRequest();
    xhr.open('POST','../../controlador/pedido/ingresoOrden.php',true);
    xhr.onload=function(){
        if(this.status==200){
           console.log(xhr.responseText);
            const respuesta = xhr.responseText;
        }
    }
    xhr.send(llenarDatos);
}
