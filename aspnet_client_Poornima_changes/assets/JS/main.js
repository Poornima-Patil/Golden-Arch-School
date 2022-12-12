// $(document).ready(function () {
//   $(".nav-toggler").each(function (_, navToggler) {
//     var target = $(navToggler).data("target");
//     $(navToggler).on("click", function () {
//       $(target).animate({
//         height: "toggle",
//       });
//     });
//   });
// });

$(".button").click(function() {
    if ($("#navigation").hasClass("hidden")) {
        $("#navigation").removeClass("hidden");
    } else {
        $("#navigation").addClass("hidden");
    }
});

$(".programmes-menu").hover(function() {
    $('.programmes-sub-menu').slideToggle();
});

$(".gallery-menu").hover(function() {
    $('.gallery-sub-menu').slideToggle();
});


$(".aboutus-menu").hover(function() {
    $('.aboutus-sub-menu').slideToggle();
});

$(document).ready(function() {
    $("#demo").slippry();
});



$(document).ready(function() {
    $("#lg-slides").slippry({
        useCSS: true,
        transition: "horizontal",
        pause: 10000
    });
});

const items = document.querySelectorAll(".accordion a");

function toggleAccordion() {
    this.classList.toggle("active");
    this.nextElementSibling.classList.toggle("active");
}

items.forEach((item) => item.addEventListener("click", toggleAccordion));

$(document).ready(function() {
    $("#OM-slides").owlCarousel({
        margin: 40,
        nav: true,
        autoWidth: true
            /*responsive: {
              100: {
                items: 1,
              },
              600: {
                items: 1,
              },
              900: {
                items: 2,
              },
              1450: {
                items: 3,
              },
            },*/
    });
});

$(document).ready(function() {
    $(".team-slides").owlCarousel({
        margin: 30,
        nav: true,
        autoWidth: true,
        loop: true
            /*responsive: {
              100: {
                items: 1,
              },
              600: {
                items: 2,
              },
              1000: {
                items: 4,
              },
            },*/
    });
});

// Modal view of certificate

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = "./assets/Img/certificates.jpg";
};

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
};