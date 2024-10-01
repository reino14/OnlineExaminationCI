$(document).ready(function () {
    ajaxcsrf();

    $('#btncek').on('click', function () {
        var token = $('#token').val();
        var idUjian = $(this).data('id');
        var key = $('#id_ujian').data('key');

        if (token === '') {
            location.href = base_url + 'ujian/?key=' + key;
        } 
    });

    var time = $('.countdown');
    if (time.length) {
        countdown(time.data('time'));
    }
});
