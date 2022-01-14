<script>
    var isOpenCountryMenu = false;
    function changeCountryMenu(){
        if(isOpenCountryMenu===false){
            $( "#changeLanguageMenu" ).removeClass( "d-none" );
            isOpenCountryMenu = true;
        }
        else if(isOpenCountryMenu===true){
            $( "#changeLanguageMenu" ).addClass( "d-none" );
            isOpenCountryMenu = false;
        }
    }
    $( "#update-preferences" ).click(function() {
          if ($( ".close-overlay" ).parent('#changeLanguageMenu')) {
            isOpenCountryMenu = false;
        }
        $( ".overlay" ).addClass( "d-none" );  
    });
    $( ".close-overlay" ).click(function() {
        if ($( ".close-overlay" ).parent('#changeLanguageMenu')) {
            isOpenCountryMenu = false;
        }
        $( ".overlay" ).addClass( "d-none" );
    });
    $( "#main-search-input" ).click(function() {
        $(this).css('z-index', 3000);
        $('body').addClass('shadow');

    });
    if($( ".short-text-read-more" ).children('p').hasClass( "short-text-3" )){
        $( ".short-text-read-more" ).children(".read-more").removeClass("d-none");
    }
    //work here down
    $( ".read-more" ).click(function() {
        var $shortTextParent = $(this).parent( ".short-text-read-more" );
        $($shortTextParent).children( "p" ).removeClass( "short-text-3" );
        
        $(this).addClass("d-none");
        var $parent = $(this).parent('.short-text-read-more');
        $( $parent ).children(".read-less").removeClass("d-none");
    });
    
    $( ".read-less" ).click(function() {
        var $shortTextParent = $(this).parent( ".short-text-read-more" );
        $($shortTextParent).children( "p" ).addClass( "short-text-3" );
        
        $(this).addClass("d-none");
        var $parent = $(this).parent('.short-text-read-more');
        $( $parent ).children(".read-more").removeClass("d-none");
    });
    </script>