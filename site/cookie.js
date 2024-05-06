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
  location.href = "/game/index.html?" + Cvalue + ";";
}

function fail(){
  location.href = "/unitypartygame.nl/";
  document.getElementById('alertBox').style.display = 'flex';
}