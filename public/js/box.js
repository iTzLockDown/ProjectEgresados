let moveToRight = function () {
    let lista = document.getElementById('presentados');
    let itemValue = lista.options[lista.selectedIndex].text;
    let listaFaltantes = document.getElementById('faltantes');
    let item = document.createElement('option');
    listaFaltantes.options.add(item);
    item.text = itemValue;
    item.value = itemValue;
    item.setAttribute('onclick', 'moveToLeft()');

    lista.options.remove(lista.selectedIndex);
    let faltantesTexto = document.getElementById('rfaltante');
    let texto = '';
    for (let i=0; i<listaFaltantes.length; i++){
        if(listaFaltantes.length == (i+1))
            texto += listaFaltantes.options[i].text + '.';
        else
            texto += listaFaltantes.options[i].text + ', ';
    }
    faltantesTexto.innerHTML = texto;
    faltantesTexto.value = texto;
}

let moveToLeft = function () {
    let lista = document.getElementById('faltantes');
    let itemValue = lista.options[lista.selectedIndex].text;
    let listaPresentados = document.getElementById('presentados');
    let item = document.createElement('option');
    listaPresentados.options.add(item);
    item.text = itemValue;
    item.value = itemValue;
    item.setAttribute('onclick', 'moveToRight()');

    lista.options.remove(lista.selectedIndex);

    let faltantesTexto = document.getElementById('rfaltante');
    let texto = '';
    for (let i=0; i<lista.length; i++){
        if(lista.length == (i+1))
            texto += lista.options[i].text + '.';
        else
            texto += lista.options[i].text + ', ';
    }
    faltantesTexto.innerHTML = texto;
    faltantesTexto.value = texto;


}

function itemLoad( ) {

    var dni = document.getElementById("dni").value;
    console.log("hola " +dni);

}