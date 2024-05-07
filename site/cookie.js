//submitting form
function submit(name) {
  localStorage.setItem("name", name);
  console.log(localStorage.getItem("name"));
}

//setting cookies
function setCookie(name, code, docker) {
  let Nvalue = name;
  let Cvalue = code;
  let Dvalue = docker;
  sessionStorage.setItem = "name=" + Nvalue + ";";
  sessionStorage.setItem = "code=" + Cvalue + ";";
  sessionStorage.setItem = "docker=" + Dvalue + ";";
  location.href = "/game/index.html?" + Cvalue + ";";
}

//wrong code
function fail(){
  location.href = "index.php";
  alertBoxJS = document.getElementById('alertBox');
  alertBoxJS.style.display = 'flex';
}