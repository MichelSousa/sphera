                              $(document).ready(function(){

                                      var id0 = $(".post-products span").eq(0).attr("class");

                                      $(".post-products  span").eq(0).attr("class","ativo "+ id0)

                                        $(".item-aba span").click(function(){

                                              var id = $(this).attr("class");

                                        if (!$(this).hasClass('ativo')) {

                                             $(".item-aba span").removeClass('ativo'); 
                                                }
                                                
                                              $('.'+id).addClass('ativo');

                                            
   													 })
                                        })