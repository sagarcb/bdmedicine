$('#f-videos').hover(function () {
    $('#f-videos hr').toggleClass("hr-hover",1000);
});
$('#f-news').hover(function () {
    $('#f-news hr').toggleClass("hr-hover",1000);
});
$('#f-healthDays').hover(function () {
    $('#f-healthDays hr').toggleClass("hr-hover",1000);
});


$('#videomodal').on('hide.bs.modal', () => {
    var video = $("#f-video-link").attr("src");
    $("#f-video-link").attr("src","");
    $("#f-video-link").attr("src",video);
    alert("clicked");
});

