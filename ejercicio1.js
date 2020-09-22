//Crear funcion count
function count(){
    //validad que exista la variable e_countfunction
    if(typeof window.e_countfunction!='undefined'){
        window.e_countfunction++;
    }
    //en caso de que no exista crearla.
    else{
        window.e_countfunction=0;
    }
    return  window.e_countfunction;
}
//Otra forma de resolverse 
function count2(){
    //validad que esta definidad la variable 'contador' en local storage 
    if(localStorage.getItem('contador')!=null){
        let contador=localStorage.getItem('contador');
        contador++;
        localStorage.setItem('contador',contador);
    }
    //en caso de que no exista crearla.
    else{
        localStorage.setItem('contador',0);
    }
    
    return  localStorage.getItem('contador');
}
//imprimir n veces lo que retorne la función
localStorage.clear();
for (let index = 0; index < 4; index++) {
    console.log(count());
    console.log(count2());
}
