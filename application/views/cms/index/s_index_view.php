       <script>
         $(function(){
           // Initialize card flip
           $('.card.hover').hover(function(){
             $(this).addClass('flip');
           },function(){
             $(this).removeClass('flip');
           });
         })
      </script>