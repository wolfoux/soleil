    function getInternetExplorerVersion()
        {
          var rv = -1;
          if (navigator.appName == 'Microsoft Internet Explorer')
          {
            var ua = navigator.userAgent;
            var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
              rv = parseFloat( RegExp.$1 );
          }
          else if (navigator.appName == 'Netscape')
          {
            var ua = navigator.userAgent;
            var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
              rv = parseFloat( RegExp.$1 );
          }
          return rv;
        }
                      
        var nVer = navigator.appVersion;
        var nAgt = navigator.userAgent;
        var browserName  = navigator.appName;
        var fullVersion  = ''+parseFloat(navigator.appVersion); 
        var majorVersion = parseInt(navigator.appVersion,10);
        var nameOffset,verOffset,ix;

        // In Opera, the true version is after "Opera" or after "Version"
        if ((verOffset=nAgt.indexOf("Opera"))!=-1) {
            
        }
        // In MSIE, the true version is after "MSIE" in userAgent
        else if (getInternetExplorerVersion()>-1) {
             document.write('<link rel="stylesheet" type="text/css" href="./style-ie.css" />');
            
        }
        // In Chrome, the true version is after "Chrome" 
        else if ((verOffset=nAgt.indexOf("Chrome"))!=-1) {
            
        }
        // In Safari, the true version is after "Safari" or after "Version" 
        else if ((verOffset=nAgt.indexOf("Safari"))!=-1) {
             document.write('<link rel="stylesheet" type="text/css" href="./style-safari.css" />');
        }
        // In Firefox, the true version is after "Firefox" 
        else if ((verOffset=nAgt.indexOf("Firefox"))!=-1) {
            
        }