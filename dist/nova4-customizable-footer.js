window.addEventListener('load', function(event) {
  let footer = document.querySelector("[dusk='flights-index-component']").nextElementSibling;
  footer.innerHTML = '';
  
  Nova.request().get('/nova-vendor/wdelfuego/nova4-customizable-footer/footer-content').then(response => {
      footer.innerHTML = response.data;
  })
});