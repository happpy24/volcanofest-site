function setCookie() {    
    let Nvalue = document.getElementById("name").value;
    let Cvalue = document.getElementById("code").value;
    document.cookie = "name=" + Nvalue + ";";
    document.cookie = "code=" + Cvalue + ";";
    location.href = "UPG?" + document.getElementById("code").value;
  }