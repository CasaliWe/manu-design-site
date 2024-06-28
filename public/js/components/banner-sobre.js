var texto = ' DESIGN CRIATIVO'
texto.split('').map((letra, index) => {
  setTimeout(() => {
    document.getElementById("texto-pag-sobre").textContent += letra
  }, 120 * index);
})