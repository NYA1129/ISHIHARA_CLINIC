var parent = document.querySelectorAll(".first-menu");

var node = Array.prototype.slice.call(parent, 0);

node.forEach(function (element) {
    element.addEventListener(
      "mouseover",
      function () {
        element.querySelector(".sub-contents").classList.add("active");
      },
      false
    );
    element.addEventListener(
      "mouseout",
      function () {
        element.querySelector(".sub-contents").classList.remove("active");
      },
      false
    );
  });