
$(document).ready(function() {
    var query = location.search.slice(1);
    var partes = query.split('&');
    var data = {};
    partes.forEach(function (parte) {
        var chaveValor = parte.split('=');
        var chave = chaveValor[0];
        var valor = chaveValor[1];
        data[chave] = valor;
    });
    if(data.id){
      axios.get('/api/pessoas/'+data.id).then((dados) => {
        dados = dados.data;
        document.querySelector('#nome').value = dados.nome;
        document.querySelector('#email').value = dados.email;
        document.querySelector('[title-form]').innerHTML = `Edite seu amigo :)`;
        inputId = document.createElement('input')
        inputId.setAttribute('type', 'hidden');
        inputId.setAttribute('id', 'id_pessoa');
        inputId.setAttribute('value', dados.id);
        document.getElementById("form-pessoa").appendChild(inputId);
      })
    }
})

$("#form-pessoa").submit(function(e) {
  e.preventDefault();
  var nome = document.querySelector('#nome').value;
  var email = document.querySelector('#email').value;
  var id = document.querySelector('#id_pessoa');
  var dados = { 'nome': nome, 'email':email }
  if(id) dados.id = id.value;
  axios.post('/api/pessoas', dados).then((dados) => {
    let status = document.querySelector('[status-cadastro]');
    status.innerHTML = ``;
    var alert = document.createElement('div');
    alert.setAttribute('class', 'alert alert-success');
    alert.innerHTML = `Beleza, amigo cadastrado com sucesso!`
    status.append(alert);
    window.location = '/';
  }).catch((e) => {
    var erro = e.response.data;
    let status = document.querySelector('[status-cadastro]');
    status.innerHTML = ``;
    var alert = document.createElement('div');
    alert.setAttribute('class', 'alert alert-danger');
    alert.innerHTML = `${erro.error}`;
    status.append(alert);
  })
});
