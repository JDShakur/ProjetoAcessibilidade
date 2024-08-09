function mostrar_modal(){
    let el = document.getElementById('minha_caixa');
let minha_modal = new bootstrap.Modal(el);
minha_modal.show();
}
function mostrar_modal_2(){
    let minha_modal = new bootstrap.Modal(document.getElementById('minha_caixa_2')).show();
}