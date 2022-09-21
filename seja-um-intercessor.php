<?php include('head.php') ?>
<title>Seja Um Intercessor</title>

<link rel="stylesheet" href="css/seja-um-intercessor.css">
<link rel="stylesheet" href="css/seja-um-intercessor-responsivo.css">

<?php
  include('navbar.php');

  if(isset($_GET['status'])){
    $s = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_SPECIAL_CHARS);

    if($s == 'sucesso'){
      $modal = "
        <div class='alert alert-success alert-dismissible fade show mb-4' role='alert'>
          <i class='fas fa-check me-3'></i> Email enviado com sucesso!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
      ";
    } else {
      $modal = "
      <div class='alert alert-warning alert-dismissible fade show mb-4' role='alert'>
      <i class='fas fa-exclamation-triangle me-3'></i>Erro ao enviar mensagem.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>
    ";
    }
  }
?>

<section id="cadastre-se">
  <div class="container">
    <div>
      <?= $modal ?>
      <img src="/img/seja-um-intercessor/cadastre-se.svg" alt="Ícone Cadastr-se" data-aos='fade-left' data-aos-delay='200' data-aos-duration='500'>
      <h1 class="titulo-secao" data-aos='fade-left' data-aos-delay='200' data-aos-duration='500'>Cadastre-se</h1>
    </div>
    
    <div>
      <form action="/envia-mensagem.php" method="post" data-aos='fade-left' data-aos-delay='200' data-aos-duration='500'>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
          <label for="nome">Nome</label>
        </div>
        
        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" placeholder="Digite seu email">
          <label for="email">Email</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="igreja" placeholder="Digite o nome da sua igreja">
          <label for="igreja">Igreja</label>
        </div>

        <div class="d-flex justify-content-between">
          <div class="col form-floating mb-3 me-3">
            <input type="text" class="form-control" name="cidade" placeholder="Digite sua cidade">
            <label for="cidade">Cidade</label>
          </div>
          <div class="col-2 form-floating mb-3">
            <select id="uf" name="uf" class="form-select" placeholder="Digite sua cidade">
              <option value="AC">AC</option>
              <option value="AL">AL</option>
              <option value="AP">AP</option>
              <option value="AM">AM</option>
              <option value="BA">BA</option>
              <option value="CE">CE</option>
              <option value="DF">DF</option>
              <option value="ES">ES</option>
              <option value="GO">GO</option>
              <option value="MA">MA</option>
              <option value="MT">MT</option>
              <option value="MS">MS</option>
              <option value="MG">MG</option>
              <option value="PA">PA</option>
              <option value="PB">PB</option>
              <option value="PR">PR</option>
              <option value="PE">PE</option>
              <option value="PI">PI</option>
              <option value="RJ">RJ</option>
              <option value="RN">RN</option>
              <option value="RS">RS</option>
              <option value="RO">RO</option>
              <option value="RR">RR</option>
              <option value="SC">SC</option>
              <option value="SP" selected>SP</option>
              <option value="SE">SE</option>
              <option value="TO">TO</option>
            </select>
            <label for="uf">Estado</label>
          </div>
        </div>

        <button type="submit" class="btn w-200"data-aos='fade-left' data-aos-delay='300' data-aos-duration='500'>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30.001" viewBox="0 0 30 30.001">
            <path id="paper-plane-solid" d="M29.979,2.166,26.229,26.49a1.874,1.874,0,0,1-2.575,1.446L16.47,24.941l-2.98,4.47a1.163,1.163,0,0,1-1.02.6,1.218,1.218,0,0,1-1.219-1.219V23.153a1.873,1.873,0,0,1,.4-1.151l12.73-16.37L7.168,21.119,1.155,18.611a1.882,1.882,0,0,1-1.15-1.664A1.823,1.823,0,0,1,.946,15.2L27.2.254a1.873,1.873,0,0,1,2.782,1.912Z" transform="translate(-0.002 -0.007)" fill="#024fa2"/>
          </svg>

          Enviar</button>
      </form>

      <img src="/img/seja-um-intercessor/cadastre-se.webp" alt="Imagem Cadastre-se" data-aos='fade-left' data-aos-delay='300' data-aos-duration='500'>
    </div>
  </div>
</section>

<div class="container mb-4 text-center">
  <button type="button" class="btn btn-primary my-5" onClick="history.go(-1)" btn-lg btn-block><i class="fas fa-arrow-left mr-3"></i> Voltar</button>
</div>

<?php include('rodape.php') ?>