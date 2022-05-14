const searchBar = document.querySelector(".users .search input")
srchBtn = document.querySelector(".users .search button")

srchBtn.onclick = () => {
    searchBar.classList.toggle("show");
    searchBar.focus();
    srchBtn.classList.toggle("active");

}