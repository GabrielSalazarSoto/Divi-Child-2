var todosBtn = document.getElementById("todos");
var sociosBtn = document.getElementById("socios");
var asociadosBtn = document.getElementById("asociados");
var directoresBtn = document.getElementById("directores");
var otrosBtn = document.getElementById("otros");

var equipo = document.getElementById("equipo");
var alfabetico = document.getElementById("alfabetico");
var loading = document.getElementById("loading");


if(sociosBtn){
    sociosBtn.addEventListener("click",function(){
        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'http://www.carey.cl/wp-json/wp/v2/cv-api/?filter[cargo]='+sociosBtn.value+'&per_page=50&order_by=title&order=asc');

        ourRequest.onload = function() {
          if (ourRequest.status >= 200 && ourRequest.status < 400) {
            var data = JSON.parse(ourRequest.responseText);
            fadeIn(equipo);
            createHTML(data);
            fadeOut(loading);
          } else {
            console.log("We connected to the server, but it returned an error.");
          }
        };
        ourRequest.onerror = function() {console.log("socios Connection error");};
        ourRequest.send();
        fadeOut(alfabetico);
        fadeOut(equipo);
        fadeIn(loading);
    });
}

if(asociadosBtn){
    asociadosBtn.addEventListener("click",function(){
        console.log("gol "+asociadosBtn.value);
        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'http://www.carey.cl/wp-json/wp/v2/cv-api/?filter[cargo]='+asociadosBtn.value+'&per_page=250&order_by=title&order=asc');

        ourRequest.onload = function() {
          if (ourRequest.status >= 200 && ourRequest.status < 400) {
            var data = JSON.parse(ourRequest.responseText);
            fadeIn(equipo);
            createHTML(data);
            fadeOut(loading);
          } else {
            console.log("We connected to the server, but it returned an error.");
          }
        };
        ourRequest.onerror = function() {console.log("socios Connection error");};
        ourRequest.send();
        fadeOut(alfabetico);
        fadeOut(equipo);
        fadeIn(loading);
    });
}

if(directoresBtn){
    directoresBtn.addEventListener("click",function(){
        console.log("gol "+directoresBtn.value);
        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'http://www.carey.cl/wp-json/wp/v2/cv-api/?filter[cargo]='+directoresBtn.value+'&per_page=50&order_by=title&order=asc');

        ourRequest.onload = function() {
          if (ourRequest.status >= 200 && ourRequest.status < 400) {
            var data = JSON.parse(ourRequest.responseText);
            fadeIn(equipo);
            createHTML(data);
            fadeOut(loading);
          } else {
            console.log("We connected to the server, but it returned an error.");
          }
        };
        ourRequest.onerror = function() {console.log("socios Connection error");};
        ourRequest.send();
        fadeOut(alfabetico);
        fadeOut(equipo);
        fadeIn(loading);
    });
}

if(otrosBtn){
    otrosBtn.addEventListener("click",function(){
        console.log("gol "+otrosBtn.value);
        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'http://www.carey.cl/wp-json/wp/v2/cv-api/?filter[cargo]='+otrosBtn.value+'&per_page=50&order_by=title&order=asc');

        ourRequest.onload = function() {
          if (ourRequest.status >= 200 && ourRequest.status < 400) {
            var data = JSON.parse(ourRequest.responseText);
            fadeIn(equipo);
            createHTML(data);
            fadeOut(loading);
          } else {
            console.log("We connected to the server, but it returned an error.");
          }
        };
        ourRequest.onerror = function() {console.log("socios Connection error");};
        ourRequest.send();
        fadeOut(alfabetico);
        fadeOut(equipo);
        fadeIn(loading);
    });
}

if(todosBtn){
    todosBtn.addEventListener("click",function(){
        fadeOut(equipo);
        fadeIn(alfabetico);
    });
}


/*
|--------------------------------------------------------------------------
| Funciones
|--------------------------------------------------------------------------
*/


function createHTML(postsData) {
  var ourHTMLString = '';
  var thumbUrl = '';

    ourHTMLString = "<ul class=listado_equipo>";
      for (i = 0; i < postsData.length; i++) {

          if(postsData[i].better_featured_image != null){
              thumbUrl = postsData[i].better_featured_image.source_url;
          }else{
              thumbUrl = 'http://www.carey.cl/wp-content/uploads/2010/01/no-image-133x166.jpg';
          }

        //console.log(thumbUrl);
        ourHTMLString += '<li><div class=click-to-top><img src='+ thumbUrl + ' width=197 height=247 class=lazy /><div><span>' + postsData[i].title.rendered +'<br>'+ postsData[i].acf.cargo_esp +'</span></div></div></li>';
        //ourHTMLString += postsData[i].content.rendered;

      }
  ourHTMLString += "</ul>";
  equipo.innerHTML = ourHTMLString;
}


// fade out

function fadeOut(el){
  el.style.opacity = 1;

  (function fade() {
    if ((el.style.opacity -= .1) < 0) {
      el.style.display = "none";
    } else {
      requestAnimationFrame(fade);
    }
  })();
}

// fade in

function fadeIn(el, display){
  el.style.opacity = 0;
  el.style.display = display || "block";

  (function fade() {
    var val = parseFloat(el.style.opacity);
    if (!((val += .1) > 1)) {
      el.style.opacity = val;
      requestAnimationFrame(fade);
    }
  })();
}


// Get radio val

function getRadioVal(form, name) {
    var val;
    // get list of radio buttons with specified name
    var radios = form.elements[name];

    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }
    }
    return val; // return value of checked radio or undefined if none checked
}
