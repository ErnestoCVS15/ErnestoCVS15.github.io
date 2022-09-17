const cargar = (idDiv, idHtml) => {
    $.ajax({
        method: "POST",
        url: idHtml
    }).done( (html) => {
        $(`#${idDiv}`).html(html);
    }).always(function( msg ) {
        $(`#${idDiv}`).html(msg);
    });
};


function guardar (nameTable, nameForm){
    data = 'nameTable='+nameTable+"&"+$("#"+nameForm).serialize(); 
    $.ajax({
    method: "POST",
    url: "guardar.php",
    data: data
    })
    .done(function( msg ) {
      if(msg == 1524){
        alert("Los datos se guardaron correctamente");
      } else {
        alert(msg);
      }
    });
  }
