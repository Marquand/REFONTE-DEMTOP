	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script>
         $(function(){
            $( ".popup-light" ).click( function(){
				
                var obj = $(this),
                    popupClass = obj.data( "popupClass" ),
					popupTop = obj.data( "popupTop" ),
					popupLeft = obj.data( "popupLeft" ),
                    popupWidth = obj.data( "popupWidth" ),
                    objPopup =  $( '.' + popupClass );
				
                objPopup
                    .css( "top", popupTop )
					.css( "left", popupLeft )
                    .css( "width", popupWidth )
                    .prepend( '<img src="img/close_pop.png" class="popup-btn-close" title="Close Window" alt="Close" />' )
                    .fadeIn();

                $( "<div/>", {
                    "class" : "voile-noir",
                    "css" : {
                        "filter" : "alpha(opacity=80)"
                    }
                }).appendTo( "body" ).fadeIn();
				
                return false;
            });
 
			//$( "body" ).on( "click", ".popup-btn-close, .voile-noir", function(){
 
			$( "body" ).on( "click", ".popup-btn-close", function(){
			   $( ".voile-noir , [class^='popup-block']" ).fadeOut( function(){
			        $( ".popup-btn-close, .voile-noir" ).remove();
			   });
 
			   return false;
			});
        });
		
		$(function(){
            $( ".popup-pro" ).click( function(){
                var obj = $(this),
                    popupClass = obj.data( "popupClass" ),
					popupTop = obj.data( "popupTop" ),
					popupLeft = obj.data( "popupLeft" ),
                    popupWidth = obj.data( "popupWidth" ),
                    objPopup =  $( '.' + popupClass );
 
                objPopup
					.css( "top", popupTop )
					.css( "left", popupLeft )
                    .css( "width", popupWidth )
                    .prepend( '<img src="img/close_pop.png" class="popup-btn-close" title="Close Window" alt="Close" />' )
                    .fadeIn();
 
                $( "<div/>", {
                    "class" : "voile-noir",
                    "css" : {
                        "filter" : "alpha(opacity=80)"
                    }
                }).appendTo( "body" ).fadeIn();
 
                return false;
            });
 
			//$( "body" ).on( "click", ".popup-btn-close, .voile-noir", function(){
 
			$( "body" ).on( "click", ".popup-btn-close", function(){
			   $( ".voile-noir , [class^='popup-block']" ).fadeOut( function(){
			        $( ".popup-btn-close, .voile-noir" ).remove();
			   });
 
			   return false;
			});
        });
		window.onload=function(){
			var bouton = document.getElementById('btnMenu');
			var nav = document.getElementById('MenuDroite');
			
			bouton.onclick = function(e){
				if(nav.style.display=="block"){
					nav.style.display="none";
				}else{
					nav.style.display="block";
									
				}
			};
			
		};
		$(document).ready(function() {
			$('.span2').mouseover(function() {
				$('.span2').each(function() {
						$(this).css('background-color', '#D8D8D8 ');
						$(this).css('color', 'black');
				});
			 
			}).mouseout(function() {
				$('.prestation td').css('background-color', 'white');
				$('th').css('background-color', '#202020');
				$('th').css('color', 'white');
			});
		});
		$(document).ready(function() {
			$('.span3').mouseover(function() {
				$('.span3').each(function() {
						$(this).css('background-color', '#D8D8D8 ');
						$(this).css('color', 'black');
				});
			 
			}).mouseout(function() {
				$('.prestation td').css('background-color', 'white');
				$('th').css('background-color', '#202020');
				$('th').css('color', 'white');
			});
		});
		$(document).ready(function() {
			$('.span4').mouseover(function() {
				$('.span4').each(function() {
						$(this).css('background-color', '#D8D8D8 ');
						$(this).css('color', 'black');
				});
			 
			}).mouseout(function() {
				$('.prestation td').css('background-color', 'white');
				$('th').css('background-color', '#202020');
				$('th').css('color', 'white');
			});
		});
		$(document).ready(function() {
			$('.span5').mouseover(function() {
				$('.span5').each(function() {
						$(this).css('background-color', '#D8D8D8 ');
						$(this).css('color', 'black');
				});
			 
			}).mouseout(function() {
				$('.prestation td').css('background-color', 'white');
				$('th').css('background-color', '#202020');
				$('th').css('color', 'white');
			});
		});
		$(document).ready(function() {
			$('.span6').mouseover(function() {
				$('.span6').each(function() {
						$(this).css('background-color', '#D8D8D8 ');
						$(this).css('color', 'black');
				});
			 
			}).mouseout(function() {
				$('.prestation td').css('background-color', 'white');
				$('th').css('background-color', '#202020');
				$('th').css('color', 'white');
			});
		});
			function aideFinancieres()
			{
				document.getElementById('aideFinancieres').style.display="block";
				document.getElementById('aideParcielle').style.display="none";
				document.getElementById('debarras').style.display="none";
			}
			function aideParcielle()
			{
				document.getElementById('aideFinancieres').style.display="none";
				document.getElementById('aideParcielle').style.display="block";
				document.getElementById('debarras').style.display="none";
			}
			function debarras()
			{
				document.getElementById('aideFinancieres').style.display="none";
				document.getElementById('aideParcielle').style.display="none";
				document.getElementById('debarras').style.display="block";
			}
		
    </script>