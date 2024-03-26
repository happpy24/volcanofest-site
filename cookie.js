function setCookie(name, code) {    
    let Nvalue = name;
    let Cvalue = code;
    document.cookie = "name=" + Nvalue + ";";
    document.cookie = "code=" + Cvalue + ";";
    location.href = "/game/index.html?" + Cvalue;
  }