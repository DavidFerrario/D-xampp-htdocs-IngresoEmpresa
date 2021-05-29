let numero1, numero2, resultado;

console.log(numero1);

function suma(){
    numero1=parseInt(document.getElementById('numero1').value);
    numero2=parseInt(document.getElementById('numero2').value);
    resultado=numero1+numero2

    alert("las suma de los numero es " + resultado);

    if(resultado % 2== 0){

        alert("el numero es par");
        
    }else{

        alert("el numero es impar");

    }
    document.location.reload();
}




