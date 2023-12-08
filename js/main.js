/* SILDER------------------------------------------------*/
const imgPosition = document.querySelectorAll(".aspect-ratio-169 img ")
const imgContainer = document.querySelector(".aspect-ratio-169")
const docItem = document.querySelectorAll(".doc")
let imgNum = imgPosition.length
let index = 0
imgPosition.forEach(function (image, index) {
    image.style.left = index * 100 + "%"
    docItem[index].addEventListener("click", function () {
        slider(index)
    })
})
function imgSlide() {
    index++
    if (index >= imgNum) { index = 0 }
    imgContainer.style.left = "-" + index * 100 + "%"
    slider(index)
}
function slider(index) {
    imgContainer.style.left = "-" + index * 100 + "%"
    const docActive = document.querySelector('.active')
    docActive.classList.remove("active")
    docItem[index].classList.add("active")
}
setInterval(imgSlide, 3000)

/*CATEGORY ----------------------------------------------------------*/

const itemsliderBar = document.querySelectorAll(".category-left--li")
itemsliderBar.forEach(function (menu, index) {
    menu.addEventListener("click", function () {
        menu.classList.toggle("block")
    })
})

// ----------------------------------------------------------PRODUCT-----------//
const bigImg = document.querySelector(".product-content-left--big-img img")
const smallImg = document.querySelectorAll(".product-content-left--small-img img")
smallImg.forEach(function (imgItem, X) {
    imgItem.addEventListener("click", function () {
        bigImg.src = imgItem.src
    })
})


const gioithieu = document.querySelector(".gioithieu")
const baoquan = document.querySelector(".baoquan")
if (gioithieu) {
    gioithieu.addEventListener("click", function () {
        document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
    })
}
if (baoquan) {
    baoquan.addEventListener("click", function () {
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none"
    })
}

const butTon = document.querySelector(".product-content-right-bottom-top")
if (butTon) {
    butTon.addEventListener("click", function () {
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}