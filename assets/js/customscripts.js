//Prevent form resubmission on refresh
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

//Hide the top page button
window.onscroll = () => {
    if (scrollY >= 200) {
        document.querySelector(".button-top").style.display = "block";
    } else {
        document.querySelector(".button-top").style.display = "none";
    }
};