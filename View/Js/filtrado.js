function mostrarSoloCategoria(nombreCategoria){
  var allCat = document.getElementByClassName("estructuraNoticia");

  for(i = 0 ; i < allCat.length; i++){
    if(allCat[i].getAttibute("class").split(" ")[1]==nombreCategoria){//obtiene de cada noticia la segunda clase asignada para comprobar si se oculta o se hace visible
      allCat[i].style.display="block";
    }else{
      allCat[i].style.display="none";
    }
  }


}
