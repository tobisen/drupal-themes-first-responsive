        (function ($) {
        $(document).ready(function() {
                var header = $( "header" ).height();
                var content = $( "main" ).height();
                var footer = $( "footer" ).height();
                var aside = $( "aside" ).height();
                var section = $( "section" ).height();
                var page = $( "#page" ).height();
		var width = $("#page" ).width();
		var height = $("#header-fluid" ).width();
//                var section = page - header - footer;

		if (width > 500 ) {
			if (section > aside) {
		                $( "aside" ).height( section );
			} else {
		                $( "section" ).height( aside );
			}
		}

		header = header + 30;

		$( ".faded" ).width( width );
		$( ".faded" ).height( header );
        });
        }(jQuery));
