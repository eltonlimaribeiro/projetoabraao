function verificaCookies(functions) {
  // função para verificar e salvar a preferência do usuário quanto aos cookies

  const secaoCookies = document.querySelector('#secao-cookies');
  const btnAceito = document.querySelector('.btn-aceito');

  // Verifica se existe o item no localStorage, caso o usuário já tenha feito a opção quanto aos cookies
  const localStorage = window.localStorage.getItem('cookies-pref');
  // Se localStorage já existir e for um valor válido,
  // a função salvar, com o parâmetro localStorage (que será true ou false), é chamada e o popup não será exibido.
  // Se localStorage não possuir um valor válido, então o popup será exibido.

  if(localStorage)
    salvar(localStorage)
  else
    secaoCookies.style.display = 'grid';
  ;

  // Seleciona os botões
  btnAceito.addEventListener('click', handlebtnAceito);
  
  // Caso o usuário clique em btnAceito
  function handlebtnAceito(){
    salvar(btnAceito.getAttribute('data-function'))
  }

  // Salva a preferência do usuário
  function salvar(pref){
    if(pref == 'true') {
      secaoCookies.style.display = 'none';
    }
    window.localStorage.setItem('cookies-pref', pref)
  }

};

verificaCookies();