   // background colours
   function setbackground() {
    // variables
    var index = Math.floor(Math.random() * 4);
    var body = document.getElementById("body");
    var box = document.getElementById("form");
    var links = document.getElementById("links");
    var SVG = document.getElementById("svg");

    //standard and if statements
    var ColorBg = "B296C3"; // plains (index = 0)
    var ColorBox = "866897";
    var svgSrc = "SVG/FlowerL.svg";

    if (index == 1) { // desert
      ColorBg = "CDAA4F";
      ColorBox = "AA8634";
      svgSrc = "SVG/Pyramids.svg";
    }
    if (index == 2) { // jungle
      ColorBg = "96B286";
      ColorBox = "496C37";
      svgSrc = "SVG/LeafL.svg";
      SVG.style.margin= "0px";
    }
    if (index == 3) {// mountains
      ColorBg = "93B7BE";
      ColorBox = "5D87AE";
      svgSrc = "SVG/Mountains.svg";
      SVG.style.maxWidth = "none";
    }

    body.style.backgroundColor = "#" + ColorBg;
    box.style.backgroundColor = "#" + ColorBox;
    links.style.backgroundColor = "#" + ColorBox;
    SVG.src = svgSrc;
  }