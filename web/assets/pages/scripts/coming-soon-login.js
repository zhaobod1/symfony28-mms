var ComingSoon = function () {

    return {
        //main function to initiate the module
    init: function () {

        //background
        $.backstretch([
            "../assets/pages/media/bg/1.jpg",
            "../assets/pages/media/bg/2.jpg",
            "../assets/pages/media/bg/3.jpg",
            "../assets/pages/media/bg/4.jpg"
        ], {
            fade: 1000,
            duration: 5000
        });



    }


}
    ;

}();

jQuery(document).ready(function () {
    ComingSoon.init();
});