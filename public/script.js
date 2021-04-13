/* MAP */
function initMap() {
    var options = {
        center: {lat: 43.22966604339031, lng: 76.93905099811525},
        zoom: 13.5
    }

    var map = new google.maps.Map(document.getElementById("map"), options);

    var marker1 = new google.maps.Marker({
        position: {lat: 43.21840490778179, lng: 76.9280395539319},
        map: map,
        title: "Esentai Mall"
    });
    var marker2 = new google.maps.Marker({
        position: {lat: 43.23436809657327, lng: 76.93576244253063},
        map: map,
        title: "Forum Almaty"
    });
    var marker3 = new google.maps.Marker({
        position: {lat: 43.233557429678534, lng: 76.9569054288084},
        map: map,
        title: "Dostyk Plaza"
    });



    var info1 = new google.maps.InfoWindow({
        content: '<h3>Esentai Mall</h3><p>Shopping center<br>Open from 10:00 to 22:00<br>+7 727 330 8877</p>'
    });
    marker1.addListener("click", function() {
        info1.open(map, marker1);
    });

    var info2 = new google.maps.InfoWindow({
        content: '<h3>Forum Almaty</h3><p>Shopping center<br>Open from 08:00 to 23:00</p>'
    });
    marker2.addListener("click", function() {
        info2.open(map, marker2);
    });

    var info3 = new google.maps.InfoWindow({
        content: '<h3>Dostyk Plaza</h3><p>Shopping center<br>Open from 10:00 to 22:00<br>+7 727 222 1387</p>'
    });
    marker3.addListener("click", function() {
        info3.open(map, marker3);
    });
        
}

/* LOGIN */
function popup(){
    var btn = document.getElementById("login").innerHTML;
    if(btn == "Log In"){
    document.querySelector(".popup").style.display = "flex";
    $(".popup").animate({opacity: "1"}, "slow");
    document.body.style.overflow = "hidden";
    }
    else{
        logout();
    }
}

function close_uuser(){
  $(".uuser").animate({opacity: "0"}, "slow");
  document.querySelector(".uuser").style.display = "none";
  document.body.style.overflow = "scroll";
  document.getElementById("username").value = "";
  document.getElementById("pass").value = "";
}


function createAccount(){
    var btn = document.getElementById("linkCreateAccount").innerHTML;
    if(btn == "Don't have an account? Create account"){
    document.querySelector(".createAccount").style.display = "flex";
    $(".createAccount").animate({opacity: "1"}, "slow");
    document.body.style.overflow = "hidden";
    }
}
function uuser(){
    var btn = document.getElementById("link_uuser").innerHTML;
    if((btn == "Log In") || (btn == "Continue")){
    document.querySelector(".uuser").style.display = "flex";
    $(".uuser").animate({opacity: "1"}, "slow");
    document.body.style.overflow = "hidden";
    }
}


function closeCA(){
  $(".createAccount").animate({opacity: "0"}, "slow");
  document.querySelector(".createAccount").style.display = "none";
  document.body.style.overflow = "scroll";
  document.getElementById("username2").value = "";
  document.getElementById("email").value = "";
  document.getElementById("pass1").value = "";
  document.getElementById("pass2").value = "";
  
}