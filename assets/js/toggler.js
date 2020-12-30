const checkbox = document.getElementById('checkbox');
const box = document.getElementById('body');
const titulo = document.getElementById('title');
const hr = document.getElementById('linea');




checkbox.addEventListener('click', () => {
 box.classList.toggle('red-background');
 titulo.classList.toggle('titulo');
 hr.classList.toggle('linea_hr');
 document.querySelector('link').classList.toggle('rlink');
 document.getElementById('cajas').classList.toggle('cajas_change');
 

});
