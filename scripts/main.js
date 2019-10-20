
if (
  "IntersectionObserver" in window &&
  "IntersectionObserverEntry" in window &&
  "intersectionRatio" in window.IntersectionObserverEntry.prototype
) {
let observer = new IntersectionObserver(entries => {
  if (entries[0].boundingClientRect.y < 0) {
    document.getElementById("logo").classList.add("logoToCorner");
    document.getElementById("logo").classList.add("logo-filter");
  } else {
    document.getElementById("logo").classList.remove("logoToCorner");
    document.getElementById("logo").classList.remove("logo-filter");
  }
});
observer.observe(document.querySelector("#top-of-site-pixel-anchor"));
}
