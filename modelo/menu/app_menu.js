const formulario = document.querySelector('#ingreso');

EventListeners();

function EventListeners(){
    formulario.addEventListener('submit',leerform);
}

function leerform(e){
    e.preventDefault();

    const nom = document.querySelector('#Nombre').value,
    plat= document.querySelector('#tipo_platillo').value,
    pre= document.querySelector('#precio').value,
    acc=document.querySelector('#Accion').value;
   
    if(nom===''||plat===''||pre===''){
        alert('Debe llenar todos los campos');
    }else{
        const llenarDatos = new FormData();
        llenarDatos.append('Nombre',nom);
        llenarDatos.append('tipo_platillo',plat);
        llenarDatos.append('precio',pre);
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
    xhr.open('POST','../../controlador/menu/ingresoMenu.php',true);
    xhr.onload=function(){
        if(this.status==200){
           console.log(xhr.responseText);
            const respuesta = xhr.responseText;
        }
    }
    xhr.send(llenarDatos);
}


