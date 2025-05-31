document.addEventListener("DOMContentLoaded", function () {
  const copyBtn = document.getElementById("copyURL");
  const tooltip = document.getElementById("copyTooltip");

  if (copyBtn && tooltip) {
    copyBtn.addEventListener("click", function (e) {
      e.preventDefault();
      const url = window.location.href.split("#")[0];
      navigator.clipboard.writeText(url).then(() => {
        tooltip.style.visibility = "visible";
        tooltip.style.opacity = "1";
        setTimeout(() => {
          tooltip.style.opacity = "0";
          tooltip.style.visibility = "hidden";
        }, 1500);
      });
    });
  }
});
