    <a href="http://jquery.com/">jQuery</a>
    <script src="jquery.js"></script>
    <script>

        $( document ).ready(function() {
                    var $server;
                    $server = 'http://localhost:4343/xampp/registro/www/';
    
                     $('#inclusao').on('click', function(){
                        $nome = $('#nome').val();
                        $sobrenome = $('#sobrenome').val(); 
                         
                        $.ajax({
                            type: "get",
                            url: $server+"/conecta.php",
                            data: "nome="+$nome+"&sobrenome="+$sobrenome+"&acao=inclusao",
                            success: function(data) {
                            intel.xdk.notification.alert('Usuário Cadastrado!','Aviso!','OK');
                                Lista();
                            }
                        });
                    });
                    
                  
                   function Lista(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/conecta.php",
                               data: "acao=listarusuario",
                               success: function(data) {
                                    $('#listarusuario').html(data);
                                }
                           });
                    }

                 Lista();

            });
</script>
