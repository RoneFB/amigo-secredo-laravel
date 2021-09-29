
$(document).ready(function () {
    lista();
});

function lista(){
    let sorteio = JSON.parse(localStorage.getItem('sorteio'));
    let lista = document.querySelector('[list-sorteio]');
    sorteio.forEach(element => {
        let item = document.createElement('li');
        item.setAttribute('class', 'list-group-item');
        item.innerHTML = `${element[0].nome} saiu com ${element[1].nome}`;
        lista.appendChild(item)
    });
    
}