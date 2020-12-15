
search.addEventListener( "click", (e) => {
  // e.preventDefault();
  var myInit = {
    method: 'GET',
    body: FormData()
  }
  var myReq = new Request('formReq', myInit )
  fetch("index.php", {
    URLSearchParams()
  })
  .then( response => response.text() )
  .then( response => console.log( response ))
  .catch( error  => console.log( error) )
})

