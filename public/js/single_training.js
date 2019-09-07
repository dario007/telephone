jQuery(document).ready(function( $ ) {
    

    $( '#explanation').click(function() {
        $( '.popup_master_text' ).toggle( "slow");
    });


    $( '#popup_button_text').click(function() {
        $( '.popup_master_text' ).css({'display':'none'});
        $( '.popup_master_video' ).css({'display':'none'});
    });
    
    
    $( '#popup_button_video').click(function() {
        $( '.popup_master_video' ).css({'display':'none'});
    });
    
    
    $( '#youtube_video').click(function() {
        $( '.popup_master_video' ).toggle( "slow");
    });

});
