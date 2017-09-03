function show () {
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone|Opera Mini|IEMobile|Mobi|Mobile/i.test(navigator.userAgent)) {
    alert("Your e-mail was sent.");
  } else {
    document.getElementById("msg").classList.remove("hidden");
  }
}
