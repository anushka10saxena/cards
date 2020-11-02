// Slider - right scroll
function rightScroll(sliderId){
    event.preventDefault();
    $('#' + sliderId).animate({ scrollLeft: "+=300x" }, "slow") 
}

// Slider - left scroll
function leftScroll(sliderId){
    event.preventDefault();
    $('#' + sliderId).animate({ scrollLeft: "-=300x" }, "slow") 
}