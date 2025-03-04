//Seccion editar ferfil################################################################
const btnEdit=document.getElementById('btn-edit');
const editPerfilContainer=document.getElementById('edit-perfil-container');
//Abrir centana edit
btnEdit.addEventListener('click', function(){
    editPerfilContainer.style.display='flex';
    //Btn cerrar ventana de edicion de perfil
    const btnEditCerrar=document.getElementById('btn-edit-cerrar');
    btnEditCerrar.addEventListener('click', function(){
        editPerfilContainer.style.display='none';
    })
})


//Seccion seguir a usuario##############################################################
const btnSeguir=document.getElementById('btn-seguir');
btnSeguir.addEventListener('click', function(){
    btnSeguir.style.background='transparent';
    btnSeguir.style.color='#fff';
    btnSeguir.style.border='1px solid grey';
})
