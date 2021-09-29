<?php include(__DIR__.'/inc/header.php'); ?>
    <div id="content-wrapper">
      <div class="container-fluid">
          <div id="content" class="fluid">
            <div class="card">
              <div class="card-header">
                <div class="col-md-12">
                  <div class="row">
                    <h3>Lista de amigos</h3>
                    <div class="btn-group col-3">
                      <a class="btn btn-success" href="/pessoas/cadastrar" >Cadastrar</a>
                      <button class="btn btn-primary" onclick="sortear()">Sortear</button>
                    </div>
                    <div class="col-6">
                      <label for="">Busca:</label>
                      <input type="text" name="busca" id="iptBusca" placeholder="Digite o nome ou email...">
                      <button class="btn btn-primary" id="btn-busca" onclick="buscar()">Buscar</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-striped thead-dark">
                  <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Email</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody tb-pessoas-conteudo></tbody>
                  <tfoot>
                    <div paginacao class="paginacao">
                      
                    </div>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js" integrity="sha512-Mf4TMPxK1TE3jNpbt6cFIM9Rz+Ezs+mvG6SvEKq2ZYEAix8QNtbseSccunI4efVNtvfzrRmd8vVwRRBgYMtfnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.js" integrity="sha512-un2apco0rYUiZXxbURvZ7oBq4u0cGrXaIbC4C1k5nAio6WRMyYvj8xKua3NqALOuu0F83zDha7nKoFCZzx26rg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?= asset('js/app-home.js') ?>"></script>
  </body>
</html>