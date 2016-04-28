    $('.navbar-nav a').click(function() {

        event.preventDefault();
        var pagina = $(this).attr("href");

        window.history.pushState("teste", "Title", pagina);
       
       switch(pagina){
            case '#sobre-nos': var p = $(pagina).offset().top;
            break;
            case '#produtos': var p = $(pagina).offset().top;
            break;
            case '#diferenciais': var p = $(pagina).offset().top;
            break;
            case '#home': var p = $(pagina).offset().top;
            break;
            case '#clientes': var p = $(pagina).offset().top;
            break;
            case '#galeria': var p = $(pagina).offset().top;
            break;
            case '#orcamento': var p = $(pagina).offset().top;
            break;
       }

        var total = p -  ('+150');
        $('html, body').animate({
            scrollTop: total
        }, 1800);

    });

    $('.bgParallax').each(function(){
        var $obj = $(this);
        $(window).scroll(function() {
            var yPos = -($(window).scrollTop() / $obj.data('speed')); 
            var bgpos = '50% '+ yPos + 'px';
            // $obj.css('background-position', bgpos );
            $('.bgParallax-home').css('background-position', bgpos );
        }); 
    });

    //Valida Formulário
    function enviardados()
    {
        d = document.contato;

        if(trim(d.nome.value)=="")
        {
            alert("O campo NOME deve ser preenchido!");
            d.nome.focus();
            // $('.nome').addClass('testeaparece');
            // $(".testeaparece").fadeIn(1000).delay(2500).fadeOut(1000);

            return false;
        }
        
        if(trim(d.email.value)=="")
        {
            alert("O campo E-MAIL deve ser preenchido!");
            d.email.focus();
            return false;
        }
        
        if(!email(d.email,'')) return false;

        if(trim(d.telefone.value)=="")
        {
            alert("O campo TELEFONE deve ser preenchido!");
            d.telefone.focus();
            return false;
        }

        if(trim(d.data.value)=="")
        {
            alert("O campo DATA deve ser preenchido!");
            d.data.focus();
            return false;
        }

        if(trim(d.publico.value)=="")
        {
            alert("O campo PÚBLICO ESTIMADO deve ser preenchido!");
            d.publico.focus();
            return false;
        }

        if(trim(d.onde.value)=="" || trim(d.onde.value)== "")
        {
            alert("O campo ONDE NOS ENCONTROU deve ser preenchido!");
            d.onde.focus();
            return false;
        }

        if(trim(d.tipo.value)=="" || trim(d.tipo.value)== "")
        {
            alert("O campo TIPO DO EVENTO deve ser preenchido!");
            d.tipo.focus();
            return false;
        }
        
        // if(trim(d.msg.value)=="")
        // {
        //     alert("O campo MENSAGEM deve ser preenchido!");
        //     d.msg.focus();
        //     return false;
        // }
    }

    $(document).ready(function() {
        var owl = $("#owl-demo-home");     
        owl.owlCarousel({
            items : 1, //10 items above 1000px browser width
            itemsDesktop : [1300,1], //5 items between 1000px and 901px
            itemsDesktopSmall : [1024,1], // betweem 900px and 601px
            itemsTablet: [767,1], //2 items between 600 and 0
            itemsMobile : 1, // itemsMobile disabled - inherit from itemsTablet option
            slideSpeed : 900,
            navigation : true
        });
     
        // Custom Navigation Events
        $(".next").click(function(){
            owl.trigger('owl.next');
        })
        $(".prev").click(function(){
            owl.trigger('owl.prev');
        })     
    });

    $(document).ready(function() {
        var owl = $("#owl-demo-home-mob");     
        owl.owlCarousel({
            items : 1, //10 items above 1000px browser width
            itemsDesktop : [1300,1], //5 items between 1000px and 901px
            itemsDesktopSmall : [1024,1], // betweem 900px and 601px
            itemsTablet: [767,1], //2 items between 600 and 0
            itemsMobile : 1, // itemsMobile disabled - inherit from itemsTablet option
            slideSpeed : 900,
            navigation : true
        });
     
        // Custom Navigation Events
        $(".next").click(function(){
            owl.trigger('owl.next');
        })
        $(".prev").click(function(){
            owl.trigger('owl.prev');
        })     
    });

    $(document).ready(function() {
        var owl = $("#owl-demo-index-mob");     
        owl.owlCarousel({
            items : 1, //10 items above 1000px browser width
            itemsDesktop : [1300,1], //5 items between 1000px and 901px
            itemsDesktopSmall : [1024,1], // betweem 900px and 601px
            itemsTablet: [767,1], //2 items between 600 and 0
            itemsMobile : 1, // itemsMobile disabled - inherit from itemsTablet option
            slideSpeed : 900,
            navigation : true
        });
     
        // Custom Navigation Events
        $(".next").click(function(){
            owl.trigger('owl.next');
        })
        $(".prev").click(function(){
            owl.trigger('owl.prev');
        })     
    });

    $(document).ready(function() {
        var owl = $("#owl-demo-sobre-mob");     
        owl.owlCarousel({
            items : 1, //10 items above 1000px browser width
            itemsDesktop : [1300,1], //5 items between 1000px and 901px
            itemsDesktopSmall : [1024,1], // betweem 900px and 601px
            itemsTablet: [767,1], //2 items between 600 and 0
            itemsMobile : 1, // itemsMobile disabled - inherit from itemsTablet option
            slideSpeed : 900,
            navigation : true
        });
     
        // Custom Navigation Events
        $(".next").click(function(){
            owl.trigger('owl.next');
        })
        $(".prev").click(function(){
            owl.trigger('owl.prev');
        })     
    });

    $(document).ready(function() {
        var owl = $("#owl-demo-clientes-mob");     
        owl.owlCarousel({
            items : 1, //10 items above 1000px browser width
            itemsDesktop : [1300,1], //5 items between 1000px and 901px
            itemsDesktopSmall : [1024,1], // betweem 900px and 601px
            itemsTablet: [767,1], //2 items between 600 and 0
            itemsMobile : 1, // itemsMobile disabled - inherit from itemsTablet option
            slideSpeed : 900,
            navigation : true
        });
     
        // Custom Navigation Events
        $(".next").click(function(){
            owl.trigger('owl.next');
        })
        $(".prev").click(function(){
            owl.trigger('owl.prev');
        })     
    });

    jQuery(document).ready(function(){
        jQuery(document).on('submit', '#form-orcamento', function(){
            var dados = jQuery( this ).serialize();
            var content = $('#bloco-form-orcamento');
            jQuery.ajax({
                type: "POST",
                url: "envia.php",
                //data: { name: "John", location: "Boston" },
                data: dados,
                success: function( response )
                {
                    var data = $( '<div>'+response+'</div>' ).find('#bloco-form-orcamento2').html();
                    $('#bloco-form-orcamento2').html( response ).fadeIn();
                }
            });
            return false;
        });
    });

    // Header toggle
    // $('.link-menu-top, .navbar-toggle').click(function(){
    //     $('.navbar-collapse').toggle();
    // });

    // $('.navbar-toggle').click(function(){
    //     $('.navbar-collapse').slidetoggle();
    // });

    
    $(function () {
  
      var $el = $('#myFlipper');

      $el.flipper({
        rotationType: 'left'
      });

      $('select[name=type]').on('change', function () {
        // var type = $(this).val();
        var type = $(this).val();
        $el.flipper('option', 'rotationType', type);
      });

      $('input[name="depth"]').on('change', function () {
        var num = $(this).val();
        $('#depth-amount').html(num);
        $el.flipper('option', 'depth', num);
      });

      $('input[name="speed"]').on('change', function () {
        var speed = $(this).val();
        $('#speed-amount').html(speed);
        $el.flipper('option', 'speed', speed);
      });

      $('select[name="event"]').on('change', function () {
        if ($(this).val() == 'keydown') {
          $('body').trigger('keydown-helper');
          $('select[name="keydown"]').show();
          $el.flipper('option', 'event', {
            'type': 'keydown',
            'keyCode': $('select[name="keydown"]').val() === 'space' ? 32 : 13
          });
          $('select[name="keydown"]').on('change', function () {
            $el.flipper('option', 'event', {
              'type': 'keydown',
              'keyCode': $(this).val() === 'space' ? 32 : 13
            });
            $(this).blur();
          });
        } else {
          $('select[name="keydown"]').hide();
          $el.flipper('option', 'event', $(this).val());
        }
      });

    });

    $('.link-produto-1').click(function(){
        event.preventDefault();

        var p2 = $("#produtos").offset().top;
        var total = p2 -  ('+80');

        $('html, body').animate({
            scrollTop: total,
        }, 1800);

        $( "#produto-espelho" ).animate({
            left: "-=100%",
          }, 1000, function() {});
    });

    $('.link-produto-2').click(function(){
        event.preventDefault();

        var p2 = $("#produtos").offset().top;
        var total = p2 -  ('+80');

        $('html, body').animate({
            scrollTop: total,
        }, 1800);

        $( "#produto-cabine-fotos" ).animate({
            left: "-=100%"
          }, 1000, function() {});
    });

    $('.link-produto-3').click(function(){
        event.preventDefault();

        var p2 = $("#produtos").offset().top;
        var total = p2 -  ('+80');

        $('html, body').animate({
            scrollTop: total,
        }, 1800);

        $( "#produto-cabine-depoimentos" ).animate({
            left: "-=100%"
          }, 1000, function() {});
    });

    $('.link-produto-4').click(function(){
        event.preventDefault();

        var p2 = $("#produtos").offset().top;
        var total = p2 -  ('+80');

        $('html, body').animate({
            scrollTop: total,
        }, 1800);

        $( "#produto-photogram" ).animate({
            left: "-=100%"
          }, 1000, function() {});
    });

    $('.link-produto-5').click(function(){
        event.preventDefault();
        // $( "#produto-videocrazy" ).animate({
        //     left: "-=100%"
        //   }, 1000, function() {});
    });


    $('.voltar-tela').click(function(){
        $( "#produto-espelho" ).animate({
            left: "+=100%"
          }, 1000, function() {});
    });

    $('.voltar-tela-2').click(function(){
        $( "#produto-cabine-fotos" ).animate({
            left: "+=100%"
          }, 1000, function() {});
    });

    $('.voltar-tela-3').click(function(){
        $( "#produto-cabine-depoimentos" ).animate({
            left: "+=100%"
          }, 1000, function() {});
    });

    $('.voltar-tela-4').click(function(){
        $( "#produto-photogram" ).animate({
            left: "+=100%"
          }, 1000, function() {});
    });

    $('.voltar-tela-5').click(function(){
        $( "#produto-videocrazy" ).animate({
            left: "+=100%"
          }, 1000, function() {});
    });

