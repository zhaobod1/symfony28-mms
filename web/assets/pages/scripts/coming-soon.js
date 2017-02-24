var ComingSoon = function () {

    return {
        //main function to initiate the module
    init: function () {
        var hou15t = '';
        $('#huo15Second').text('8');
        var url = $('#huo15backurl').val();
        if (url =='') {
            var jsBack = 'javascript:window.goback(-1);';
            $('#huo15backurlA').attr('href',jsBack);
            $('#huo15backurl').attr('href',jsBack);
        }
        huo15t = setInterval(huo15callback, 1000);
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('#defaultCountdown').countdown({until: austDay});
        $('#year').text(austDay.getFullYear());

        $.backstretch([
            "../assets/pages/media/bg/1.jpg",
            "../assets/pages/media/bg/2.jpg",
            "../assets/pages/media/bg/3.jpg",
            "../assets/pages/media/bg/4.jpg"
        ], {
            fade: 1000,
            duration: 10000
        });
        function huo15callback() {
            var i = parseInt($('#huo15Second').text());
            console.log(i);

            if(i== 0) {
                clearInterval(huo15t);
                var url = $('#huo15backurl').val();
                window.location.href = url;

            }
            i--;
            $('#huo15Second').text(i);

        }


    }


}
    ;

}();

jQuery(document).ready(function () {
    ComingSoon.init();
});