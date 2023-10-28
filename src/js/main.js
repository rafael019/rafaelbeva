AOS.init();

const topo = document.querySelector(".topo"); // Seleciona o a class topo

const topoFixo = topo.offsetTop; // mostra a posição original do cabeçalho em relação ao topo da página

const handleScroll = () => {
  if (window.pageYOffset > topoFixo) {
    topo.classList.add("topo-fixo");
  } else {
    topo.classList.remove("topo-fixo");
  }
};

// Adicione um ouvinte de evento para verificar a rolagem da página
window.addEventListener("scroll", handleScroll);

// Adiciona a class ativo no link clicado

// Selecione todos os links do menu
const linksDoMenu = document.querySelectorAll(".menu a");

// Função para verificar a seção ativa
const verificarSecaoAtiva = () => {
  // Percorra todas as seções
  document.querySelectorAll("section").forEach((secao) => {
    const secaoId = secao.getAttribute("id");
    const secaoLink = document.querySelector(`.menu a[href="#${secaoId}"]`);
    const secaoTopo = secao.getBoundingClientRect().top;

    if (secaoTopo <= 150 && secaoTopo >= -150) {
      // Remova a classe 'ativo' de todos os links do menu
      linksDoMenu.forEach((link) => {
        link.classList.remove("ativo");
      });

      // Adicione a classe 'ativo' ao link correspondente à seção visível
      if (secaoLink) {
        secaoLink.classList.add("ativo");
      }
    }
  });
};

// Adicione um ouvinte de evento de rolagem para chamar a função verificarSecaoAtiva
window.addEventListener("scroll", verificarSecaoAtiva);

// Chame a função inicialmente para definir o estado inicial
verificarSecaoAtiva();

// Selecione todos os links internos (âncoras) que apontam para as seções da página
const linksInternos = document.querySelectorAll('a[href^="#"]');

// Adicione um ouvinte de evento de clique a cada link interno
linksInternos.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();

    // Obtenha o ID da âncora do link
    const targetId = link.getAttribute("href").substring(1);

    // Encontre o elemento de destino com base no ID da âncora
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      // Role suavemente até o elemento de destino
      targetElement.scrollIntoView({
        behavior: "smooth",
      });
    }
  });
});

// Iniciando Swiper slider
var swiper = new Swiper(".projetos-lista", {
  slidesPerView: 1,
  spaceBetween: 40,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
  },
});

// Menu Mobile
const menuMobile = document.getElementById("menu-mobile");
function menuAtivo() {
  const menu = document.querySelector("nav");
  menu.classList.toggle("ativo");
}
menuMobile.addEventListener("click", menuAtivo);

// Links do menu
const linksMenu = document.querySelectorAll(".menu li a"); // Seleciona os links do menu
for (const linkMenu of linksMenu) {
  linkMenu.addEventListener("click", function () {
    document.querySelector("nav").classList.remove("ativo");
  });
}
