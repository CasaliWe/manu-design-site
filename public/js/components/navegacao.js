// abrir menu mobile
var controleMenuMobile = false 
function abrirMenuMobile(){
    if(controleMenuMobile){
        // fechar
        controleMenuMobile = false
        document.getElementById("nav-mobile").style.cssText = `height:0% !important; transition: 350ms;`
    }else{
        // abrir
        controleMenuMobile = true
        document.getElementById("nav-mobile").style.cssText = `height: 100% !important; transition: 350ms;`
    }
}