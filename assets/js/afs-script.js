

// write js starter code here
jQuery(document).ready(function($) {
    // write your code here
    $("#afs-form").submit(function(e) {
        e.preventDefault();
        var afs_form = $(this).serialize();
        $.ajax({
            url: afs_ajax.ajax_url,
            type: 'post',
            data: {
                action: 'afs_form_submit',
                afs_form: afs_form
            },
            success: function(data) {
                $("#afs-form")[0].reset();
                $("#afs-form").append('<div class="afs-success">Form Submitted Successfully</div>');
                setTimeout(function() {
                    $(".afs-success").fadeOut();
                }, 3000);
            }
        });
    });

});