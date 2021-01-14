// drop down menu
$('.dropdown-toggle').dropdown()

//toast control
$('.toast').toast('show')

// sidebar start
$(".sidebar-open").click(function () {
    $(".sidebar").addClass("active");
});
$(".sidebar-close").click(function () {
    $(".sidebar").removeClass("active");
})
// sidebar end

// btn maxmimize and minimize
$(".btn-maximize").click(function () {
    let current = $(this).closest(".card");
    if(current.hasClass("card-full-screen")){
        current.removeClass("card-full-screen");
        $(this).html(`<i class="fas fa-expand-alt fa-fw"></i>`);

    }else{
        current.addClass("card-full-screen");
        $(this).html(`<i class="fas fa-compress-alt fa-fw"></i>`);

    }
});

function menuActive(className){
    $(`.${className}`).addClass("active");
}
// let currentUrl = location.href;
// let currentUrlArr = currentUrl.split("?");
//
// $(".menu-item").each(function (index) {
//     let selected = $(this).attr("href");
//     if(selected == currentUrlArr[0]){
//         $(this).addClass("active");
//
//         // left menu auto scroll
//         let screenHeight = $(window).height();
//         let active = $(".menu .active").offset().top;
//         if(active > screenHeight*0.8 ){
//             $(".aside-menu").animate({
//                 scrollTop:active
//             },1000)
//         }
//     }
// })
