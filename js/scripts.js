
search.addEventListener( "click", (e) => {
  // e.preventDefault();
  fetch("resultats.php", {
    method: "POST",
    body: new FormData( formReq )
  })
  .then( response => response.text() )
  .then( response => console.log( response ))
  .catch( error  => console.log( error) )
})

