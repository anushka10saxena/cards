// Dropdown on hover
$('.dropdown-menu a.dropdown-toggle').on('mouseover', function (e) {
    if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
        $('.dropdown-submenu .show').removeClass("show");
    });


    return false;
});

// Add to favorites
function addToFav(productId) {
    $.ajax({
        url: "addToFavourites.php",
        type: "POST",
        data: {
            productId: productId
        },
        cache: false,
        success: function (dataResult) {
            alert(dataResult);
        }
    });
};