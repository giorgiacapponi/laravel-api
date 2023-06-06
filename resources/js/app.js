import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const elimina=document.getElementsByClassName('delete');
for (let i = 0; i < elimina.length; i++){
elimina[i].addEventListener('click',()=>{
siNo(elimina[i]);
})



function siNo(btn) {
    const response = confirm("Sei sicuro di voler eliminare questo elemento?");
    if (response == true) {
      btn.form.submit();
    } else {
      
    }
  }
}