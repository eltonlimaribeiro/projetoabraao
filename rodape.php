</main>

<footer data-aos='fade' data-aos-delay='100' data-aos-duration='500'>
  <div class="container-fluid linha1">
    <div class="container">
      <img src="/img/home/pa.svg" alt="Logo Projeto Abraão">
      <h1>Projeto Abraão</h1>
    </div>
  </div>

  <div class="container-fluid linha2">
    <div class="container">
      <h2>Nossas Redes</h2>
      <div class="icones">
        <a href="www.projetoabraao.com.br" target="_blank"><img src="/img/home/facebook.svg" alt="Ícone Facebook"></a>
        <a href="www.instagram.com/projeto.abraao" target="_blank"><img src="/img/home/instagram.svg" alt="Ícone Instagram"></a>
        <a href="mailto:projetoabraao@gmail.com"><img src="/img/home/email.svg" alt="Ícone Email"></a>
      </div>
      <ul>
        <li><a href="/">Boletins</a></li>
        <li><a href="a-coreia-do-norte.php">A Coreia do Norte</a></li>
        <li><a href="o-projeto.php">O Projeto</a></li>
        <li><a href="seja-um-intercessor.php">Seja um Intercessor</a></li>
      </ul>
    </div>

  </div>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171542935-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  
  gtag('config', 'UA-171542935-1');
</script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S5ED7QJ4SD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S5ED7QJ4SD');
</script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="../../../js/zoom.js"></script>

<script>
  AOS.init();

  // Diminui a nav ao rolar a pagina
  window.onscroll = function(){
    var top = window.pageYOffset || document.documentElement.scrollTo;
    var nav = document.getElementById('menu')
    if(top > 80){
      nav.classList.add('menor');
    } else {
      nav.classList.remove('menor');
    }
  }
</script>

<script src="/js/scripts.js"></script>

</body>
</html>