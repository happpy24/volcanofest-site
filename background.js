   // background colours
   function setbackground() {
    // variables
    var index = Math.floor(Math.random() * 4);

    var body = document.getElementById("body");
    var box = document.getElementById("form");
    var links = document.getElementById("links");
    var SVG = document.getElementById("svg");
    var SVG2 = document.getElementById("svg2");


    //standard and if statements
    var ColorBg = "B296C3"; // plains (index = 0)
    var ColorBox = "866897";
    var svgSrc = "SVG/FlowerL.svg";
    var svg2Src = "SVG/FlowerR.svg";

    if (index == 1) { // desert
      ColorBg = "CDAA4F";
      ColorBox = "AA8634";
      svgSrc = "SVG/Pyramids.svg";
      svg2Src = "#";
    }
    if (index == 2) { // jungle
      ColorBg = "96B286";
      ColorBox = "496C37";
      svgSrc = "SVG/LeafL.svg";
      SVG.style.margin= "0px";
      svg2Src = "SVG/LeafR.svg";
      SVG2.style.margin= "0px";
    }
    if (index == 3) {// mountains
      ColorBg = "93B7BE";
      ColorBox = "5D87AE";
      svgSrc = "SVG/Mountains.svg";
      SVG.style.maxWidth = "none";
      svg2Src = "#";
    }

    body.style.backgroundColor = "#" + ColorBg;
    box.style.backgroundColor = "#" + ColorBox;
    links.style.backgroundColor = "#" + ColorBox;
    SVG.src = svgSrc;
    SVG2.src = svg2Src;
  }