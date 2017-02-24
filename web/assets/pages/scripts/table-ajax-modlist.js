/**
 * Created by apple on 16/8/22.
 */
var TableDatatablesButtons = function () {



    var initAjaxDatatables = function () {

        //init date pickers
        $('.date-picker').datepicker({
            rtl: App.isRTL(),
            autoclose: true
        });

        var grid = new Datatable();

        grid.init({

            src: $("#datatable_ajax"),
            onSuccess: function (grid, response) {
                // grid:        grid object
                // response:    json object of server side ajax response
                // execute some code after table records loaded
                console.log('返回的response:');
                console.log(response);
                huo15userlistFN();
            },
            onError: function (grid) {
                // execute some code on network or other general error
                alert('服务器端出错,请联系管理员及时处理 ');
            },
            onDataLoad: function(grid) {
                // execute some code on ajax data load
            },
            loadingMessage: '加载中...',
            dataTable: { // here you can define a typical datatable settings from http://datatables.net/usage/options

                // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/scripts/datatable.js).
                // So when dropdowns used the scrollable div should be removed.

                //"dom": "<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'<'table-group-actions pull-right'>>r>t<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'>>",

                "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

                "lengthMenu": [
                    [2,3,5,10, 20, 50, 100, 150, -1],
                    [2,3,5,10, 20, 50, 100, 150, "全部(慎用)"] // change per page values here
                ],
                "pageLength": 10, // default record count per page
                "ajax": {
                    "url": "/user/fieldAjax?moduleId=" + $('#moduleId').val(), // ajax source
                },
                "order": [
                    [1, "asc"]
                ],// set first column as a default sort by asc

                // Or you can use remote translation file
                "language": {
                    sLengthMenu: "每页 _MENU_ 记录,",
                    sInfo: " 从  _START_  到  _END_  ,总共  _TOTAL_   条记录"
                },
                buttons: [
                    { extend: 'print', className: 'btn default' },
                    { extend: 'copy', className: 'btn default' },
                    { extend: 'pdf', className: 'btn default' },
                    { extend: 'excel', className: 'btn default' },
                    { extend: 'csv', className: 'btn default' },
                    {
                        text: 'Reload',
                        className: 'btn default',
                        action: function ( e, dt, node, config ) {
                            dt.ajax.reload();
                            alert('Datatable 重载!');
                        }
                    }
                ],

            }
        });

        // handle group actionsubmit button click
        grid.getTableWrapper().on('click', '.table-group-action-submit', function (e) {
            e.preventDefault();
            alert('funck');
            cosole.log('getTableWrapper:');
            cosole.log(grid.getTableWrapper());
            var action = $(".table-group-action-input", grid.getTableWrapper());
            if (action.val() != "" && grid.getSelectedRowsCount() > 0) {
                grid.setAjaxParam("customActionType", "group_action");
                grid.setAjaxParam("customActionName", action.val());
                grid.setAjaxParam("id", grid.getSelectedRows());
                grid.getDataTable().ajax.reload();
                grid.clearAjaxParams();
            } else if (action.val() == "") {
                App.alert({
                    type: 'danger',
                    icon: 'warning',
                    message: 'Please select an action',
                    container: grid.getTableWrapper(),
                    place: 'prepend'
                });
            } else if (grid.getSelectedRowsCount() === 0) {
                App.alert({
                    type: 'danger',
                    icon: 'warning',
                    message: 'No record selected',
                    container: grid.getTableWrapper(),
                    place: 'prepend'
                });
            }
        });

        //grid.setAjaxParam("customActionType", "group_action");
        //grid.getDataTable().ajax.reload();
        //grid.clearAjaxParams();
        // handle datatable custom tools
        $('#datatable_ajax_tools > li > a.tool-action').on('click', function() {
            var action = $(this).attr('data-action');
            grid.getDataTable().button(action).trigger();
        });
    }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }


            initAjaxDatatables();
        }

    };

}();

jQuery(document).ready(function() {
    TableDatatablesButtons.init();
});

function huo15userlistFN() {
    //delete user
}