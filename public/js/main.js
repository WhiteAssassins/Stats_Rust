console.error('Hola que haces?')
console.error('No es nada Bueno estar aki!!!')
console.error('Te Sugiero que te vayas podrian haber graves consecuencias :)')
function bienvenido(){
    toastr["error"]("Bienvenido a Stats Rust. Recuerde Que estamos en Desarrollo")
    }
function usuario(){
    toastr["error"]("Bienvenido a la Pagina de Usuario")
    }
function changelog(){
     toastr["error"]("Bienvenido al Changelog")
     }

     $(document.body).on('click','.idioma-es',function(){
        if($.cookie('idioma') == 0 || !$.cookie('idioma')){
            $.cookie('idioma',1)

        }else{
            $.cookie('idioma',0)

        }
    })
