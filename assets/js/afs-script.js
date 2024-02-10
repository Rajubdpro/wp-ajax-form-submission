

// write js starter code here
jQuery(document).ready(function($) {
    // write your code here
    $("#afs-form").submit(function(e) {
        e.preventDefault();
        var afs_form = $(this).serialize();
        console.log(afs_form);
        $.ajax({
            url: afs_ajax.ajax_url,
            type: 'post',
            dataType:'json',
            data: {
                action: 'afs_form_submit', ajax_data:afs_form,
            },
            success: function(data) {
                console.log(data);
                $("#afs-form")[0].reset();
                $("#afs-form").append('<div class="afs-success">Form Submitted Successfully</div>');
                setTimeout(function() {
                    $(".afs-success").fadeOut();
                }, 3000);
            }
        });
    });

});