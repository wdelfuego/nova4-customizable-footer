window.addEventListener('load', function(event) {

  var nova = document.getElementById('nova');
  var ps = nova.getElementsByTagName("p");
  var footer = null;
  
  for(var i = 0; i < ps.length; i++)
  {
    if(ps[i].innerHTML.includes("Laravel LLC · by Taylor Otwell and David Hemphill"))
    {
      footer = ps[i].parentNode;
      break;
    }
  }

  if(footer == null)
  {
    console.log("wdelfuego/nova4-customizable-footer: couldn't select footer div, please create an issue at https://github.com/wdelfuego/nova4-customizable-footer/issues")
  }
  else
  {
    footer.innerHTML = '';
    Nova.request().get(Nova.config('base')+'/wdelfuego/nova4-customizable-footer/footer-content').then(response => {
        footer.innerHTML = response.data;
    })
  }
});