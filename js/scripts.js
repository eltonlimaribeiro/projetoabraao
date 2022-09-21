const btnMobile = document.getElementById('btn-mobile');

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

function toggleMenu(e){
  if(e.type === 'touchstart') e.preventDefault();
  const nav = document.getElementById('menu');

  nav.classList.toggle('active');

  const active = nav.classList.contains('active')
  e.currentTarget.setAtributte('aria-expanded', active);
  if(active){
    e.currentTarget.setAtributte('aria-label', 'Fechar Menu');
  } else {
    e.currentTarget.setAtributte('aria-label', 'Abrir Menu');
  }
}

fetch('/intercessores.json')
.then(r => r.json())
.then(json => {
  const qtdeIntercessores = document.querySelector('.qtde-intercessores');
  qtdeIntercessores.innerText = json.intercessores;
})


exibeCitacao();
function exibeCitacao(){
  fetch('/citacoes.json')
  .then(r => r.json())
  .then(json => {
    // Math.random(): Gera um numero aleatório
    // Math.random() * json.length: temos um número aleatório até a quantidade máxima de json
    // Math.floor: arredonda para baixo
    const itemSelecionado = Math.floor(Math.random() * json.length);

    const citacao = document.querySelector('.citacao');
    const autor = document.querySelector('.autor');
    citacao.innerText = json[itemSelecionado]['citacao'];
    autor.innerText = json[itemSelecionado]['autor'];
  })
}

exibeMotivo();
function exibeMotivo(){
  fetch('/motivos-de-oracao.json')
  .then(r => r.json())
  .then(json => {
    // Math.random(): Gera um numero aleatório
    // Math.random() * json.length: temos um número aleatório até a quantidade máxima de json
    // Math.floor: arredonda para baixo
    const itemSelecionado = Math.floor(Math.random() * json.length);
    const motivo = document.querySelector('.motivo-de-oracao');
    motivo.innerText = json[itemSelecionado]['motivo'];
  })
}
