 function get_realisation_margin_quatrieme_ecran(windowWidth) {
            espaceRestant = windowWidth - 223;
            demiEspaceRestant = espaceRestant/2;
            return demiEspaceRestant;
        }
        
        function get_realisation_margin_troisieme_ecran(windowWidth) {
            espaceRestant = windowWidth - 223*2;
            tierEspaceRestant = espaceRestant/3;
            return tierEspaceRestant;
        }
        
        function set_padding_pour_realisation() {
                                    
            padLeft = $('#articles_avec-realisations').css('padding-left');
            padRight = $('#articles_avec-realisations').css('padding-right');
            padLeftInt = parseInt(padLeft, 10);
            padRightInt = parseInt(padRight, 10);
            
            // Attention on doit insérer un +17 surement a cause de l'utilisation de box-sizing!!       
            if ($(document).width()+17 < 561) {
            
                margin = get_realisation_margin_quatrieme_ecran($(window).width());
                margin = margin - padLeftInt;
                marginStr = margin + "px";
                //alert(marginStr);
                $('.grid_3_realisations').css({
                    "margin-left" : marginStr,
                    "margin-right" :marginStr
                });
                                
            }
            else if ($(document).width()+17 < 830) {
                margin = get_realisation_margin_troisieme_ecran($(window).width());
                margin = margin - (padLeftInt*2)/3;
                marginStr = margin + "px";
                $('.grid_3_realisations').css({
                    "margin-left" : marginStr,
                    "margin-right" :"0px"
                });
            }
            else if ($(document).width()+17 < 1051) {
                $('.ecran2Realisation').css({
                    "margin-left" : '0px',
                    "margin-right" : '49.5px'
                });
                $('.ecran2RealisationUnique').css({
                    "margin-left" : '0px',
                    "margin-right" : '0px'
                });
            }
            else  {
                //alert('aaa');
                $('.grid_3_realisations').css({
                    "margin-left" : '17px',
                    "margin-right" : '17px'
                });
                $('.realisation1').css({
                    "margin-left" : '0px'
                });
                $('.realisation4').css({
                    "margin-right" : '0px'
                });
            }
        }
        
        $( window ).resize(function() {
            set_padding_pour_realisation();            
        });
        
        window.onload=function(){set_padding_pour_realisation();};