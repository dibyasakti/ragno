( function( $ ){
	
	function InitializaeExternalLinks( ){
		
		// Selects external links to open on new tab.
		$( 'a.external' ).attr( 'target', 'blank' );
		
	};
  
  function ProductFinderTitleLinks( ){
    
    //Selects all titles and anchors of the list
    var titles = $(".page-product-finder .views-field-title .field-content" );
    var anchors = $(".page-product-finder .views-field-field-product-image-fid .field-content a.imagefield" ); 
    
    //If someone clicks the title
    titles.click ( function(){
      var i = parseInt ( titles.index( $( this ) ) );
      anchors.eq( i ).trigger('click');                         
    }); 
        
  };
  
  function ProductTileLightbox(){
    $('#bottomNavClose').css({'background-color': '#803713', color: '#9eacad'});
    $('#imageDataContainer').css({'background': 'none'});
  }
	
  function InitializeUserLoginOrPasswordForm( ){
	  
	  $( '#user-login-form-wrapper .form-actions, #user-pass .form-submit' ).css( { outline: 'none', width: 1, height: 1, display: 'block', overflow: 'hidden', opacity: 0 } );
	  
  }
  
  function InitializeSeriesPage( ){
	  
	  // Activation of lightframe element when clicking title.
	  $( 'div.view-series-products .tile-title' ).click( function( ){ $( this ).prev( ).trigger( 'click' ); }  )
	  
  }
  
  function InitializeStandardPage( ){
	  
	$( '.node-type-page #columns #sidebar-left #block-menu-menu-standard-page-left-nav li a' ).each( function( ){
		$( this ).after( $( '<span></span>' ).html( $( this ).attr( 'title' )  ) ) ;
	} );	  
	  
  }
  
  function InitializeStoryPage( ){
	  
	$( '.node-type-story #columns #sidebar-left #block-menu-menu-standard-page-left-nav li a' ).each( function( ){
		$( this ).after( $( '<span></span>' ).html( $( this ).attr( 'title' )  ) ) ;
	} );	  
	  
  }
  
  function InitializeFAQPage( ){
	  
		$( '.page-faq #columns #sidebar-left #block-menu-menu-standard-page-left-nav li a' ).each( function( ){
			$( this ).after( $( '<span></span>' ).html( $( this ).attr( 'title' )  ) ) ;
		} );	  
		  
	  }  
  
	function InitializePage( ){
		
		InitializaeExternalLinks( );
		ProductFinderTitleLinks( );
		InitializeUserLoginOrPasswordForm( );
		InitializeSeriesPage( );
		ProductTileLightbox();
		InitializeStandardPage( );
		InitializeStoryPage( );
		InitializeFAQPage( );
		
	};
	
	$( function( ){ InitializePage( ); } );
	
} )( jQuery );
