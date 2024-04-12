function search() {
  const searchBox = document.querySelector(".search-box");
  searchBox.classList.add("active");
}
function closeSearch() {
  const searchBoxActive = document.querySelector(".search-box.active");
  searchBoxActive.classList.remove("active");
}

// Click SẢN PHẨM
function megaFunction() {
  const megamenu = document.querySelector(".mega-menu");
  megamenu.classList.toggle("active");
}

// Click heart icon
function heart(hinhDuocClick) {
  hinhDuocClick.classList.toggle("active");

  if (hinhDuocClick.classList.contains("active")) {
    hinhDuocClick.src = "./icon/index-heart-red.svg";
    IncreaseWL();
  } else {
    hinhDuocClick.src = "./icon/index-heart.svg";
    DecreaseWL();
  }
}

// Click "-"
function DecreaseWL() {
  var count = parseInt(document.getElementById("wishlist").innerHTML);
  if (count > 0) {
    count--;
    document.getElementById("wishlist").innerHTML = count;
  }
}
//Click "+"
function IncreaseWL() {
  var count = parseInt(document.getElementById("wishlist").innerHTML);
  count++;
  document.getElementById("wishlist").innerHTML = count;
}
