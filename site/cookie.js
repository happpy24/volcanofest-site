//submitting form
function submit(name) {
  localStorage.setItem("name", name);
  console.log(localStorage.getItem("name"));
}

function setCookie(name, code, docker) {
  let Nvalue = name;
  let Cvalue = code;
  let Dvalue = docker;
  sessionStorage.setItem = "name=" + Nvalue + ";";
  sessionStorage.setItem = "code=" + Cvalue + ";";
  sessionStorage.setItem = "docker=" + Dvalue + ";";
  console.log(sessionStorage.getItem("name"));
  location.href = "/game/index.html?" + Cvalue + ";";
}

function fail(){
  location.href = "index.php";
  document.getElementById('alertBox').style.display = 'flex';
  console.log(  document.getElementById('alertBox').style.display = 'flex')
}