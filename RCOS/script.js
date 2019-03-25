$(document).ready(function(){
  $('select').material_select();
  $('#datum').change(function(){
    let d_id = $("#datum").val(); //Just nu är det unik id, inte datum id eller film id
    let movie_id = $("#movie_id").val();
    console.log(d_id, movie_id);
    $.ajax({
      url: 'getter.php',
      method: 'post',
      data: 'datum_id=' + movie_id
    }).done(function(tider){
      console.log(tider);
      tider = JSON.parse(tider);
      $('#tider').empty();
      tider.forEach(function(tid) {
      $('#tider').append('<option value="'+ tid.time +'">'+tid.time+'</option>')
      $('select').material_select();
      });
    })

  })
});
/* function fetchData() {

  let tid = document.getElementById('tid');
  let datum = document.getElementById('datum');

  let datum_id = datum.value;

  var url = './getter.php';
  var formData = new FormData();
  formData.append('datum_id', datum_id);

  fetch(url, { method: 'POST', body: formData })
  .then(function (response) {
    return response.text();
  })
  .then(function (body) {
    console.log(body);
    //document.getElementById('tid').innerHTML = '<option value="3">06:00:00</option><option value="3">12:00:00</option><option value="3">15:00:00</option> ';
    document.getElementById('datum').innerHTML = body;
    document.getElementById('tider').innerHTML = body;
    console.log(document.getElementById('tider'));
  });

  } */

