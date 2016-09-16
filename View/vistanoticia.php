<?php
  function modeloNoticia($titulo, $imagen, $fecha, $categoria, $cuerpo,$valoracion){
    echo "<div class='estructuraNoticia'>
        <div class='noticiaIzquierda'>
          <img src='".$imagen."' alt='imagen no disponible' class='imgNoticia'/>
          
        </div>

        <div class='noticiaDerecha'>
          <h3 class='categoriaNoticia'>".$categoria."</h3>
          <h2 class='tituloNoticia'>".$titulo."</h2>
          <p class='fechaNoticia'>".$fecha."</p>
          <p class='cuerpoNoticia'>".$cuerpo."</p>
          <div class='valoracion'>";
          for($i=0;$i<5;$i++){
            if($i<$valoracion){
              echo"<span class='starSelected' >★</a>";
            }else{
              echo"<span class='starSelected' >☆</a>";
            }
          }
    echo "</div>
        </div>
    </div>";
  }

  modeloNoticia("imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.","http://qnimate.com/wp-content/uploads/2014/03/images2.jpg","15/09/2016","app pokemon","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.

In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.

Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, ",3);
 ?>
