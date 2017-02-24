/*
 * jQuery File Upload Plugin JS Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/* global $, window */

$(function () {
    'use strict';
    var dCount = 0;
    var dtailInterval = setInterval(deleteDetail, 400);
    function deleteDetail() {
        if (is_detail) {
            $('.is_detail').remove();
        }
        dCount++;
        if (dCount > 50) {
            clearInterval(dtailInterval);

        }

    }
    function intervalFn(element,hiddenInput) {
        var previews = $(element).find('table.table .preview');
        var links = previews.find('a');
        var values = '';

        if (links.length>0) {
            links.each(function (index, element1) {
                values += $(element1).attr('href')  + ';';
            });

            hiddenInput.val(values);
        }


        console.log(hiddenInput.val());



    }
    $('.huo15-fileupload').each(function (index, element) {
        // Initialize the jQuery File Upload widget:

        var hiddenInput = $('#' + $(element).find('.full_name').val() + '_h');
        setInterval(function(){
            intervalFn(element,hiddenInput);
        },2000);
        $(element).fileupload({
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            filesContainer: $(element).find('table.table'),
            url: 'addData?upload=1&moduleId=' + huo15ModuleId + '&fileId=' + $(element).find('.form_full_name').val(),
            uploadTemplateId: 'template-upload-' + $(element).find('.full_name').val(),
            downloadTemplateId: 'template-download-' + $(element).find('.full_name').val(),

        });
        // Enable iframe cross-domain access via redirect option:
        $(element).fileupload(
            'option',
            'redirect',
            window.location.href.replace(
                /\/[^\/]*$/,
                '/cors/result.html?%s'
            )
        );

        if (window.location.hostname === 'blueimp.github.io') {

        } else {
            $(element).fileupload('option', {
                // Enable image resizing, except for Android and Opera,
                // which actually support image resizing, but fail to
                // send Blob objects via XHR requests:
                disableImageResize: /Android(?!.*Chrome)|Opera/
                    .test(window.navigator.userAgent),
                maxFileSize: 999000,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
            });
            // Load existing files:
            $(element).addClass('fileupload-processing');
            $.ajax({
                // Uncomment the following to send cross-domain cookies:
                //xhrFields: {withCredentials: true},
                //url: $('#fileupload').fileupload('option', 'url'),
                url: $(element).fileupload('option', 'url') + '&clientId=' + GetQueryString('clientId'),
                dataType: 'json',
                context: $(element)[0]
            }).always(function () {
                $(this).removeClass('fileupload-processing');
            }).done(function (result) {
                $(this).fileupload('option', 'done')
                    .call(this, $.Event('done'), {result: result});
            });

        }



    });



    $(document).on('click','.preview', function (e) {
        e.preventDefault();
        var event = e;
        var target = event.target || event.srcElement,
            link = target.src,
            options = {index: link, event: event},
            links = $(this).find('a');
        blueimp.Gallery(links, options);

    });


});

function GetQueryString(name)
{
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null)return  unescape(r[2]); return null;
}