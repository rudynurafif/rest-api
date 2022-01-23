// Stringify (object -> JSON)
// let mahasiswa = {
//   nama : "Rudy Nurafif",
//   nim : "C42150083",
//   email : "rudynurafif@gmail.com"
// }
// console.log(JSON.stringify(mahasiswa));

// parse (JSON -> object)
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
//   if(xhr.readyState == 4 && xhr.status == 200) {
//     let mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//   }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();

// jQuery (JSON -> object)
$.getJSON('coba.json', function(data) {
  console.log(data);
});