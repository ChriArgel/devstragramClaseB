import Dropzone from "dropzone";
 
Dropzone.autoDiscover = false;
 
 const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage : 'Sube tu Imagen',
    acceptedFiles: ".jpeg, .jpg, .png, .gif",
    addRemoveLinks : true,
    dictRemoveFile : 'Borrar Archivos',
    maxFiles : 1,
    uploadMultiple : false,
 
    init:function(){
        if(document.querySelector('[name="imagen"]').value.trim() != '/'){
            const imagenPublicada = {}
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector('[name="imagen"]').value;
 
            this.options.addedfile.call(this, imagenPublicada);
            this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`);
 
            imagenPublicada.previewElement.classList.add("dz-sucess", "dz-complete");
 
         }
    }
 
 });