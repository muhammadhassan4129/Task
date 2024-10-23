window.onscroll = function() {
    var topButton = document.getElementById("back-to-top");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      topButton.style.display = "block";
    } else {
      topButton.style.display = "none";
    }
  };
  
  document.getElementById("back-to-top").addEventListener("click", function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });