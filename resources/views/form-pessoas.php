<?php include(__DIR__.'/inc/header.php'); ?>
    <div id="content-wrapper">
      <div class="container-fluid">
          <div id="content" class="fluid">
            <div class="card">
              <div class="card-header">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 title-form>Cadastre seu novo amigo :)</h3>
                    </div>
                    <div class="col-md-6 text-right">
                      <a class="btn btn-primary" href="/">Voltar</a>
                    </div>
                  </div>
                </div>
                
                <div status-cadastro></div>
              </div>
              <div class="card-body">
                
                <form id="form-pessoa" data-toggle="validator" role="form">
                  <div class="form-group">
                    <label for="nome" class="control-label">Nome</label>
                    <input id="nome" class="form-control" placeholder="Digite seu Nome..." type="text" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input id="email" class="form-control" placeholder="Digite seu E-mail" type="email" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
   
    <!-- Optional JavaScript -->
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.js" integrity="sha512-un2apco0rYUiZXxbURvZ7oBq4u0cGrXaIbC4C1k5nAio6WRMyYvj8xKua3NqALOuu0F83zDha7nKoFCZzx26rg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= asset('js/form-pessoa.js') ?>"></script>
  </body>


</html>