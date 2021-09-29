$(document).ready(function () {
    lista();
});

function lista(){
    axios.get('/api/pessoas').then((dados) => {
        criarTabelaPessoas(dados.data);
    })
}

function criarTabelaPessoas(pessoas){
    let tbody = document.querySelector('[tb-pessoas-conteudo]');
    tbody.innerHTML = ``;
    pessoas.data.forEach(pessoa => {
        let tr = document.createElement('tr');
        tr.innerHTML = `
        <tr data-pessoa="${ pessoa.id }">
            <td nome-pessoa>${ pessoa.nome }</td>
            <td>${ pessoa.email }</td>
        </tr>`;

        let btnDelete = document.createElement('button');
        btnDelete.setAttribute('class', 'btn btn-danger')
        btnDelete.setAttribute('type', 'button')
        btnDelete.innerHTML = `x`;

        let tdBtn = document.createElement('td');
        btnDelete.addEventListener('click', function(e){
            var conf = confirm("Tem certeza que deseja excluir ?");
            if(conf == true){
                axios.delete('/api/pessoas/'+pessoa.id).then((dados) => {
                    lista();
                });
            }
            e.stopPropagation();
        })

        tr.addEventListener('click', function(){
            window.location = '/pessoas/editar'+'?id='+pessoa.id;
        })
        
        tdBtn.append(btnDelete)
        tr.append(tdBtn);
        tbody.append(tr);
        
    });
    this.addPaginacao(pessoas.links)
}

function addPaginacao(links){
    let paginacao = document.querySelector('[paginacao]');
    paginacao.innerHTML = ``;
    links.forEach(link => {
        let button = document.createElement('button');
        button.setAttribute('class', 'btn btn-dark');
        if(link.active)
            button.setAttribute('class', 'btn btn-primary');
        
        button.innerHTML = `${link.label}`;
        button.addEventListener('click', function(){
            axios.get(link.url).then((dados) => {
                criarTabelaPessoas(dados.data);
            });
        })
        paginacao.append(button);
    })
}


function buscar(){
    var valor = document.querySelector('#iptBusca').value;
    axios.get('api/pessoas/?nome=' + valor).then((dados) => {
        criarTabelaPessoas(dados.data);
    });
}

function sortear(){
    var valor = document.querySelector('#iptBusca').value;
    axios.get('api/sortear/' + valor).then((dados) => {
        localStorage.setItem('sorteio', JSON.stringify(dados.data));
        window.location = '/sorteio';
    });
}