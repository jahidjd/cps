jQuery(document).ready(function($) {
    $('#navchoose').click(function(){
       $('#choose').show();
       $("#comments, #upload, #info").hide();
    });

    $('#navcomments').click(function(){
        $('#comments').show();
        $("#choose, #upload, #info").hide();
    });

    $('#navimages').click(function(){
        $('#upload').show();
        $("#choose, #comments, #info").hide();
    });

    $('#navinfo').click(function(){
        $('#info').show();
        $("#choose, #comments, #upload").hide();
    });

    $("#comments, #upload, #info").hide();

    $(document).on('click', 'ul li button', '.test', function() {
        $('li button').removeClass("active");
        $(this).addClass("active");
    });

    //Logout
    $('body').on('click', '.logoutBtn', function (e) {
        e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/logout",
            type: 'get',
            data: {},
            success: function (data) {
                location.href = '/login';
            }
        });
    });
});


