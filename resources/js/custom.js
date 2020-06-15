$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".btn-submit.esnbc-form-create").click(function(e){
    var batches_info = $("input#batches_info").val();
    var ajax_url = $(this).attr('ajax_validation_url');
    var this_el = $(this);
    var alert_el = this_el.closest("form").find(".alert-danger");
    alert_el.addClass('d-none');
    if(batches_info.length > 0)
    {
        $.ajax({
            type:'GET',
            url:ajax_url,
            data:{batches_info:batches_info},
            success:function(data){
               if(data.error_msg.length > 0) 
               {
                    $("input#batches_info").focus();
                    alert_el.html(data.error_msg);
                    alert_el.removeClass('d-none');
                    alert_el.show();
               }
               else {
                    // $(this).closest("form").submit();
               }
           }
        });
    }
});

$(document).ready(function(){
    var esnbc_get_batches_info_lst_val = $('.esnbc-get-batches-info-lst-url').val();
    $('.select2.batches_info_lst').select2({
        ajax: {
            url: esnbc_get_batches_info_lst_val,
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term
                };
            },
            cache: true
        },
        placeholder: 'Search for Bactches Info',
        minimumInputLength: 2
    });

    $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd'
    });
    // $(function() {
    //     $('#production_date').datepicker({
    //         format: 'yyyy-mm-dd'
    //     });
    // });
    // $(function() {
    //     $('#best_before_date').datepicker({
    //         // format: 'yyyy-mm-dd'
    //     });
    // });
});