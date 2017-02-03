;(function ($) {


    $(document).ready(function () {

    //MachHeight
            //$('').matchHeight();


//   Footer section info btn click

        $( ".contact-btn a" ).click(function() {
            $(".popup-section").toggleClass("popup-active");
        });

        $( ".close-x a" ).click(function() {
            $(".popup-section").removeClass("popup-active");
        });

});
    $(window).on('load', function() {

    });

}(jQuery));
