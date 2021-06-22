function RandomiseImgSize() {
  imgs = document.querySelectorAll("img");
  imgs.forEach(function (img) {
    rnd = Math.floor(Math.random() * 100);
    if (rnd < 30) {
      img.classList.toggle("col-2");
      rnd = Math.floor(Math.random() * 100);
      if (rnd < 13) {
        img.classList.toggle("col-2");
        img.classList.toggle("col-3");
      }
    }
    rnd = Math.floor(Math.random() * 100);
    if (rnd < 20) {
      img.classList.toggle("row-2");
    }
  });
}
function InsertPictures() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pictures").innerHTML = this.responseText;
      RandomiseImgSize();
    }
  };
  xmlhttp.open("POST", "./includes/getImgs.php", true);
  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  let checks = document.querySelectorAll('input[type="checkbox"]');
  let categorys = [];
  checks.forEach((check) => {
    if (check.checked) {
      categorys.push(check.value);
    }
  });
  let data = "categorys=" + categorys;
  if (categorys.length > 0) {
    xmlhttp.send(data);
  } else {
    xmlhttp.send();
  }
}
const btns = document.querySelectorAll("label");
btns.forEach(function (btn) {
  btn.addEventListener("click", () => {
    setTimeout(() => {
      InsertPictures();
    }, 0);
  });
});
InsertPictures();
