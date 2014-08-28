
          $(document).ready(function(){

            $(".column").hover(function(){

               $(this).find(".overdefult").stop().css({display:"block"}).animate({opacity: 0.8}, 500 )

            },function(){

                $(this).find(".overdefult").stop().css({display:"none"}).animate({opacity: 0.8}, 500 )

            })


            $(".overdefult").click(function(){

              var id = $(this).attr("id");


              $.ajax({
                  type:"POST",
                  url:"http://127.0.0.1/wordpress/wp-content/themes/sphera/project-detail.php",
                  data:{id:id},
                 

                  success:function(data){
                    
                       $(".resposta").html(data);

                  },error:function(){

                    alert("errado")
                  }

              })

          })

        })    