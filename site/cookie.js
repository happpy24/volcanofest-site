//submitting form
function submit(name) {
  localStorage.setItem("name", name);
  console.log(localStorage.getItem("name"));
}

function setCookie(name, code, port) {
  let Nvalue = name;
  let Cvalue = code;
  let Pvalue = port;
  document.cookie = "name=" + Nvalue + ";";
  document.cookie = "port=" + Pvalue + ";";
  location.href = "/game/index.html?" + Cvalue;
}
