        
        function get_best_div_height(windowWidth) {
            if (windowWidth < 875) {
                return 110;
            }
            else if (windowWidth < 925) {
                return 115;
            }
            else if (windowWidth < 990) {
                return 120;
            }
            else if (windowWidth < 1051) {
                return 129;
            }
            else if (windowWidth < 1165) {
                return 75;
            }
            else if (windowWidth < 1275) {
                return 85;
            }
            else if (windowWidth < 1400) {
                return 95;
            }
            else if (windowWidth < 1425) {
                return 110;
            }
            else if (windowWidth < 1430) {
                return 113;
            }
        }
        
        function resize_ajustement_pour_li() {
            divHeight = get_best_div_height($(window).width()+17);
            divHeightStr = divHeight + "px";
            
            ulHeight = $('#menuSecondaire ul').css('height');
            ulHeightInt = parseInt(ulHeight, 10);

            divHeightBis = divHeight - ulHeightInt;
            divHeightBisStr = divHeightBis + "px";
                        
            if ($(document).width() >= 830) {
                $('#menuSecondaire').css({
                    top: divHeightStr
                });
                
                $('#menuSecondaireBis ul').css({
                    top: divHeightBisStr
                });
            }
        }
        
        $( window ).resize(function() {
            resize_ajustement_pour_li();            
        });
        
        window.onload=function(){resize_ajustement_pour_li();};