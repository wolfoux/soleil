/**
 * jquery.calendario.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2012, Codrops
 * http://www.codrops.com
 */

;( function( $, window, undefined ) {
	
	'use strict';

	$.Calendario = function( options, element ) {
		
		this.$el = $( element );
		this._init( options );
		
	};

	// the options
	$.Calendario.defaults = {

		weeks : [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
		weekabbrs : [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
		months : [ 'Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],
		monthabbrs : [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Au', 'Sep', 'Oct', 'Nov', 'Dec' ],
		// choose between values in options.weeks or options.weekabbrs
		displayWeekAbbr : false,
		// choose between values in options.months or options.monthabbrs
		displayMonthAbbr : false,
		// left most day in the calendar
		// 0 - Sunday, 1 - Monday, ... , 6 - Saturday
		startIn : 1,
		onDayClick : function( $el, $content, dateProperties ) { return false; }
	};

	$.Calendario.prototype = {

		_init : function( options ) {
			
			// options
			this.options = $.extend( true, {}, $.Calendario.defaults, options );

                        this.connect = this.options.connect;
			this.today = new Date();
			this.month = ( isNaN( this.options.month ) || this.options.month == null) ? this.today.getMonth() : this.options.month - 1;
			this.year = ( isNaN( this.options.year ) || this.options.year == null) ? this.today.getFullYear() : this.options.year;
			this.caldata = this.options.caldata || {};
			this._generateTemplate();
			this._initEvents();
                       
                        
                        //alert("connect init : " + this.connect);

		},
		_initEvents : function() {

			var self = this;

			this.$el.on( 'click.calendario', 'div.fc-row > div', function() {

				var $cell = $( this ),
					idx = $cell.index(),
					$content = $cell.children( 'div' ),
					dateProp = {
						day : $cell.children( 'span.fc-date' ).text(),
						month : self.month + 1,
						monthname : self.options.displayMonthAbbr ? self.options.monthabbrs[ self.month ] : self.options.months[ self.month ],
						year : self.year,
						weekday : idx + self.options.startIn,
						weekdayname : self.options.weeks[ idx + self.options.startIn ]
					};

				if( dateProp.day ) {
					self.options.onDayClick( $cell, $content, dateProp );
				}

			} );

		},
		// Calendar logic based on http://jszen.blogspot.pt/2007/03/how-to-build-simple-calendar-with.html
		_generateTemplate : function( callback ) {

			var head = this._getHead(),
				body = this._getBody(),
				rowClass;
                                
			switch( this.rowTotal ) {
				case 4 : rowClass = 'fc-four-rows'; break;
				case 5 : rowClass = 'fc-five-rows'; break;
				case 6 : rowClass = 'fc-six-rows'; break;
			}
                        
			this.$cal = $( '<div class="fc-calendar ' + rowClass + '">' ).append( head, body );

			this.$el.find( 'div.fc-calendar' ).remove().end().append( this.$cal );

			if( callback ) { callback.call(); }

		},
		_getHead : function() {

			var html = '<div class="fc-head">';
		
			for ( var i = 0; i <= 6; i++ ) {

				var pos = i + this.options.startIn,
					j = pos > 6 ? pos - 6 - 1 : pos;

				html += '<div>';
				html += this.options.displayWeekAbbr ? this.options.weekabbrs[ j ] : this.options.weeks[ j ];
				html += '</div>';

			}

			html += '</div>';

			return html;

		},
		_getBody : function() {
                        
                        for(var n=0; n<this.caldata.length; n++) {
                                    //alert('nb' + n)                            
                            this.caldata[n].dateFV = 'null'; 

                        }
                        //var connect = {{ conect }};
                        
			var d = new Date( this.year, this.month + 1, 0 ),
				// number of days in the month
				monthLength = d.getDate(),
				firstDay = new Date( this.year, this.month, 1 );

			// day of the week
			this.startingDay = firstDay.getDay();

			var html = '<div class="fc-body"><div class="fc-row">',
				// fill in the days
				day = 1;
                                
                         
                         
			// this loop is for weeks (rows)
			for ( var i = 0; i < 7; i++ ) {
                            //alert("pass " + i)
				// this loop is for weekdays (cells)
				for ( var j = 0; j <= 6; j++ ) {
                                        
					var pos = this.startingDay - this.options.startIn,
						p = pos < 0 ? 6 + pos + 1 : pos,
						inner = '',
						today = this.month === this.today.getMonth() && this.year === this.today.getFullYear() && day === this.today.getDate(),
						content = '';
                                        
                                                var innerContent = '';
					
					if ( day <= monthLength && ( i > 0 || j >= p ) ) {

						inner += '<span class="fc-date">' + day + '</span><span class="fc-weekday">' + this.options.weekabbrs[ j + this.options.startIn > 6 ? j + this.options.startIn - 6 - 1 : j + this.options.startIn ] + '</span>';

						// this day is:
						
                                                var strdate2 = (this.month + 1 < 10 ? '0' + ( this.month + 1 ) : this.month + 1 ) + '-' + ( day < 10 ? '0' + day : day ) + '-' + this.year;
                                                
                                                
                                                
                                                var dayData='';
                                                var slug_ev = '';

                                                for(var n=0; n<this.caldata.length; n++) {
                                                    
                                                        var diffJour = '';
                                                        //alert(n);
                                                        var dayData='';
                                                        
                                                                var obj = this.caldata[n];
                                                                
                                                                //obj.dateFV = 'null';
         
                                                                var dateEv = obj['dateDeb']['date']; 

                                                                var thedate;
                                                                var mysplit=dateEv.split(' ');
                                                                thedate=mysplit[0].split('-');
                                                                
                                                                var aaaa = dateEv.substr(0,4);
                                                                var mm = dateEv.substr(5,2);
                                                                var dd = dateEv.substr(8,2);
                                                                
                                                                var dateFin = obj['dateFin']['date'];
                                                                      
                                                                      var thedateFin;
                                                                        var mysplitF=dateFin.split(' ');
                                                                        thedateFin=mysplitF[0].split('-');

                                                                        var aaaaF = dateFin.substr(0,4);
                                                                        var mmF = dateFin.substr(5,2);
                                                                        var ddF = dateFin.substr(8,2);

                                                                        var dateFin = mmF+'-'+ddF +'-'+aaaaF;
                                                                        
                                                                        
                                                                
                                                                var dateEv = mm+'-'+dd +'-'+aaaa;
                                                                                                                                
                                                                  if(strdate2 == dateEv){ 
                                                                      
                                                                      dayData =  obj['nomFr'];
                                                                      slug_ev = obj['slug'];

                                                                        if(dateEv !== dateFin){

                                                                            var n_debut = new Date(parseInt(aaaa), (parseInt(mm)-1), parseInt(dd));
                                                                            //En fait on passe l'année, le mois - 1, le jour à la fonction Date() sinon ça ne marche pas!
                                                                            var n_fin = new Date(parseInt(aaaaF), (parseInt(mmF)-1), parseInt(ddF));
                                                                            
                                                                            var difference = n_fin - n_debut; //En millisecondes
                                                                            var diff_jour = (difference / (86400000)); //1000*60*60*24 - jour en millisecondes 
                                                                            
                                                                            diff_jour = Math.round(diff_jour);
                                                                            diffJour = ' (' + (diff_jour+1) + 'jour)';
                                                                            //alert('diff jour : ' +  Math.round(diff_jour));
                                                                            
                                                                            var date_fin = new Date(parseInt(aaaaF), (parseInt(mmF)-1), parseInt(ddF));
                                                                            
                                                                            
                                                                            //date de fin de l'évenement.
                                                                                var n_debut2 = new Date(parseInt(aaaa), (parseInt(mm)-1), parseInt(dd));
                                                                                
                                                                                //alert(parseInt(aaaa)+ ' - ' + (parseInt(mm)-1)+ ' - ' + parseInt(dd));
                                                                                n_debut2.setDate(n_debut2.getDate() + diff_jour);
                                                                            
                                                                                var moisPdiff = '' + (n_debut2.getMonth() + 1);
                                                                                var jourPdiff = '' + n_debut2.getDate();
                                                                                var annPdiff = n_debut2.getFullYear();
                                                                                    
                                                                                if (moisPdiff.length < 2) moisPdiff = '0' + moisPdiff;
                                                                                if (jourPdiff.length < 2) jourPdiff = '0' + jourPdiff;
                                                                                
                                                                                var dateFV = annPdiff + '-'+ moisPdiff + '-' + jourPdiff;
                                                                                //alert(dateFV);
                                                                                
                                                                                //alert(dateFV);
                                                                            for(var dj=1 ; dj<=diff_jour ; dj++){
                                                                                
                                                                                //Debut plus 1 pour la date du jour d apres.
                                                                                n_debut.setDate(n_debut.getDate() + 1);
                                                                                
                                                                                var mois = '' + (n_debut.getMonth() + 1);
                                                                                var jour = '' + n_debut.getDate();
                                                                                var ann = n_debut.getFullYear();
                                                                                    
                                                                                if (mois.length < 2) mois = '0' + mois;
                                                                                if (jour.length < 2) jour = '0' + jour;
                                                                                
                                                                                //alert(ann + '-'+ mois + '-' + jour);
                                                                                
                                                                                var datePlus = ann + '-'+ mois + '-' + jour;
                                                                   
                                                                                //alert(datePlus);
                                                                                
                                                                                this.caldata.push({
                                                                                    "id":obj['id'],
                                                                                    "nomFr":obj['nomFr'] + ' (' + diff_jour + 'jour)',
                                                                                    "slug":obj['slug'],   
                                                                                    "dateDeb":{"date":datePlus,"timezone_type":3,"timezone":"UTC"},
                                                                                    "dateFin":{"date":datePlus,"timezone_type":3,"timezone":"UTC"}, 
                                                                                    'nbMax': obj['nbMax'],
                                                                                    'nbInsc':obj['nbInsc'],
                                                                                    'dateFV': {"date":dateFV,"timezone_type":3,"timezone":"UTC"},
                                                                                });
                                                                                
                                                                                
                                                                                //Moin 1 a la date de fin pour repasser dans l'objet. ùais decompter celui ajouter.
                                                                                date_fin.setDate(date_fin.getDate() - 1); //a m j
                                                                                
                                                                                var moisM = '' + (date_fin.getMonth() + 1);
                                                                                var jourM = '' + date_fin.getDate();
                                                                                var annM = date_fin.getFullYear();
                                                                                    
                                                                                if (moisM.length < 2) moisM = '0' + moisM;
                                                                                if (jourM.length < 2) jourM = '0' + jourM;
                                                                                
                                                                                //alert(ann + '-'+ mois + '-' + jour);
                                                                                
                                                                                var dateMoin = annM + '-'+ moisM + '-' + jourM;
                                                                                
                                                                                //alert(dateMoin);

                                                                                obj['dateFin']['date'] = dateMoin;
                                                                                obj['dateFV'] = {"date":dateFV,"timezone_type":3,"timezone":"UTC"};
                                                                            }
                                                                                
                                                                      }
                                                                      
                                                                        if( dayData ) {
                                                                            content = dayData;
                                                                        }

                                                                        if( content !== '' ) {                                                            
                                                                               
                                                                               var dateDeb22 = obj['dateDeb']['date'];
                                                                               
                                                                                var thedateDeb22;
                                                                                  var mysplitF22=dateDeb22.split(' ');
                                                                                  thedateDeb22=mysplitF22[0].split('-');

                                                                                  var aaaaD22 = dateDeb22.substr(0,4);
                                                                                  var mmD22 = dateDeb22.substr(5,2);
                                                                                  var ddD22 = dateDeb22.substr(8,2);
                                                                                  
                                                                                  var dateDebCompare = new Date(aaaaD22,mmD22-1,ddD22);
                                                                                  
                                                                                  dateDebCompare = dateDebCompare.getTime();
                                                                                    
                                                                                  var dateDeb22 = ddD22 + '-' + mmD22 + '-' + aaaaD22;
                                                                                  
                                                                                //Routing.generate('soleil_formation_voir_admin', { slug: obj['fslug'] });
                                                                                innerContent += '<tr>';
                                                                                
                                                                                if(this.connect){
                                                                                    innerContent += '<td><a href="' + Routing.generate('soleil_formation_voir_admin', { slug: obj['fslug'] }) + '">' + obj['titreFr'] +  '</a></td>';
                                                                                }
                                                                                else{
                                                                                    innerContent += '<td>' + obj['titreFr'] +'</a></td>';                                                                            
                                                                                }
                                                                                
                                                                                if(this.connect){
                                                                                    innerContent += '<td><a href="/agenda/admin/agenda/'+ slug_ev +'/evenement/voir">' + content + diffJour +'</a></td>';
                                                                                }
                                                                                else{
                                                                                   innerContent += '<td><a href="' + Routing.generate('soleil_agenda_evenement_site', { slug_ev: slug_ev }) + '">' + content + diffJour + '</a></td>';
                                                                                }
                                                                                
                                                                                if(this.connect){
                                                                                    innerContent += '<td>' + obj['nbInsc'] + '/' +  obj['nbMax'] + '</td>';
                                                                                }
                                                                                else{
                                                                                    var inscription;
                                                                                    
                                                                                    var dateJourCompare = new Date(); 
                                                                                    dateJourCompare = dateJourCompare.getTime()
                                                                                    
                                                                                    if(dateJourCompare >= dateDebCompare){inscription = 'close'}
                                                                                    
                                                                                    else if(obj['nbMax'] == obj['nbInsc']){ inscription = 'complet'; }
                                                                                    
                                                                                    else{ inscription = 'ouvert'; }
                                                                                    
                                                                                    innerContent += '<td>' + inscription + '</td>';
                                                                                }
                                                                                
                                                                                if(obj['dateFV'] !== 'null'){
                                                                                    var dateFin22 = obj['dateFV']['date'];
                                                                                    //var dateFin22 = obj['dateFin']['date'];
                                                                                }
                                                                                else{
                                                                                    var dateFin22 = obj['dateFin']['date'];
                                                                                }
                                                                                
                                                                                var thedateFin22;
                                                                                  var mysplitF22=dateFin22.split(' ');
                                                                                  thedateFin22=mysplitF22[0].split('-');

                                                                                  var aaaaF22 = dateFin22.substr(0,4);
                                                                                  var mmF22 = dateFin22.substr(5,2);
                                                                                  var ddF22 = dateFin22.substr(8,2);
                                                                                  
                                                                                  //if (mmF22.length < 2) mmF22 = '0' + mmF22;
                                                                                  //if (ddF22.length < 2) ddF22 = '0' + ddF22;
                                                                                  
                                                                                  //alert(dateFin22 + ' / ' +thedateFin22);
                                                                                  
                                                                                  var dateFin22 = ddF22+'-'+ mmF22 +'-'+aaaaF22;
                                                                                  
                                                                                  //alert(dateFin22);
                                                                                  
                                                                                innerContent += '<td>' + dateDeb22 + '</td>';
                                                                                innerContent += '<td>' + dateFin22 + '</td>';
                                                                                
                                                                                //alert("connect mod/sup : " + this.connect);
                                                                                
                                                                                    if(this.connect){ 
                                                                                        //innerContent += '<td><a href="agenda/' + Routing.generate('soleil_agenda_evenement_modifier', { slug_ev: slug_ev }) + '"> mod </a></td> ';
                                                                                        //innerContent += '<td><a href="agenda/' + Routing.generate('soleil_agenda_evenement_supprimer', { slug_ev: slug_ev }) + '"> sup </a></td>';
                                                                                        innerContent += '<td><a href="/agenda/admin/agenda/' + slug_ev + '/evenement/modifier"> mod </a></td> ';
                                                                                        innerContent += '<td><a href="/agenda/admin/agenda/'+ slug_ev +'/evenement/supprimer"> sup </a></td>';
                                                                                    
                                                                                    }
                                                                                innerContent += '<tr/>';
                                                                                
                                                                                
                                                                        }
                                                                    
                                                                   }
               
                                                }
                                                                       
						if(innerContent !== ''){
                                                   inner += '<div class="evCache"><div class="table-responsive"><table class="table table-hover table-striped "><thead>'; 
                                                   
                                                          inner += '<th>Formation</th><th>Evènement</th><th>Inscription</th><th>Date debut</th><th>Date Fin</th>';
                                                          
                                                          if(this.connect){
                                                            inner += '<th>Modifier</th><th>Supprimer</th>';
                                                          }
                                                          
                                                          inner +=  '</thead>' + '<tbody>' + innerContent + '</tbody>' + '</table>' + '</div>' ;
                                                           
                                                           
                                                    inner += '</div>';
                                                }

						++day;

					}
					else {
						today = false;
					}

					var cellClasses = today ? 'fc-today ' : '';
                                        
                                        
					if( content !== '' ) {
						cellClasses += 'fc-content';
      
					}
                                        
					html += cellClasses !== '' ? '<div class="' + cellClasses + '">' : '<div>';
					html += inner;
					html += '</div>';

				}

				// stop making rows if we've run out of days
                                
				if (day > monthLength) {
					this.rowTotal = i + 1;
					break;
				} 
				else {
					html += '</div><div class="fc-row">';
				}

			}
			html += '</div></div>';

			return html;

		},
		// based on http://stackoverflow.com/a/8390325/989439
		_isValidDate : function( date ) {

			date = date.replace(/-/gi,'');
			var month = parseInt( date.substring( 0, 2 ), 10 ),
				day = parseInt( date.substring( 2, 4 ), 10 ),
				year = parseInt( date.substring( 4, 8 ), 10 );

			if( ( month < 1 ) || ( month > 12 ) ) {
				return false;
			}
			else if( ( day < 1 ) || ( day > 31 ) )  {
				return false;
			}
			else if( ( ( month == 4 ) || ( month == 6 ) || ( month == 9 ) || ( month == 11 ) ) && ( day > 30 ) )  {
				return false;
			}
			else if( ( month == 2 ) && ( ( ( year % 400 ) == 0) || ( ( year % 4 ) == 0 ) ) && ( ( year % 100 ) != 0 ) && ( day > 29 ) )  {
				return false;
			}
			else if( ( month == 2 ) && ( ( year % 100 ) == 0 ) && ( day > 29 ) )  {
				return false;
			}

			return {
				day : day,
				month : month,
				year : year
			};

		},
		_move : function( period, dir, callback ) {

			if( dir === 'previous' ) {
				
				if( period === 'month' ) {
					this.year = this.month > 0 ? this.year : --this.year;
					this.month = this.month > 0 ? --this.month : 11;
				}
				else if( period === 'year' ) {
					this.year = --this.year;
				}

			}
			else if( dir === 'next' ) {

				if( period === 'month' ) {
					this.year = this.month < 11 ? this.year : ++this.year;
					this.month = this.month < 11 ? ++this.month : 0;
				}
				else if( period === 'year' ) {
					this.year = ++this.year;
				}

			}

			this._generateTemplate( callback );

		},
		/************************* 
		******PUBLIC METHODS *****
		**************************/
		getYear : function() {
			return this.year;
		},
		getMonth : function() {
			return this.month + 1;
		},
		getMonthName : function() {
			return this.options.displayMonthAbbr ? this.options.monthabbrs[ this.month ] : this.options.months[ this.month ];
		},
		// gets the cell's content div associated to a day of the current displayed month
		// day : 1 - [28||29||30||31]
		getCell : function( day ) {

			var row = Math.floor( ( day + this.startingDay - this.options.startIn ) / 7 ),
				pos = day + this.startingDay - this.options.startIn - ( row * 7 ) - 1;

			return this.$cal.find( 'div.fc-body' ).children( 'div.fc-row' ).eq( row ).children( 'div' ).eq( pos ).children( 'div' );

		},
		setData : function( caldata ) {

			caldata = caldata || {};
			$.extend( this.caldata, caldata );
			this._generateTemplate();

		},
		// goes to today's month/year
		gotoNow : function( callback ) {

			this.month = this.today.getMonth();
			this.year = this.today.getFullYear();
			this._generateTemplate( callback );

		},
		// goes to month/year
		goto : function( month, year, callback ) {

			this.month = month;
			this.year = year;
			this._generateTemplate( callback );

		},
		gotoPreviousMonth : function( callback ) {
			this._move( 'month', 'previous', callback );
		},
		gotoPreviousYear : function( callback ) {
			this._move( 'year', 'previous', callback );
		},
		gotoNextMonth : function( callback ) {
			this._move( 'month', 'next', callback );
		},
		gotoNextYear : function( callback ) {
			this._move( 'year', 'next', callback );
		}

	};
	
	var logError = function( message ) {

		if ( window.console ) {

			window.console.error( message );
		
		}

	};
	
	$.fn.calendario = function( options ) {

		var instance = $.data( this, 'calendario' );
		
		if ( typeof options === 'string' ) {
			
			var args = Array.prototype.slice.call( arguments, 1 );
			
			this.each(function() {
			
				if ( !instance ) {

					logError( "cannot call methods on calendario prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				
				}
				
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {

					logError( "no such method '" + options + "' for calendario instance" );
					return;
				
				}
				
				instance[ options ].apply( instance, args );
			
			});
		
		} 
		else {
		
			this.each(function() {
				
				if ( instance ) {

					instance._init();
				
				}
				else {

					instance = $.data( this, 'calendario', new $.Calendario( options, this ) );
				
				}

			});
		
		}
		
		return instance;
		
	};
        
        
	
} )( jQuery, window );
