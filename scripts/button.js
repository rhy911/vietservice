function playVideo() {
  let vidcontainer = document.getElementById("video-container");
  vidcontainer.style.display = "flex";

  vidcontainer.addEventListener("click", function () {
    vidcontainer.style.display = "none";
  });
}
