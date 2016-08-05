 function story1() {
     document.getElementById('story').style.display = "block";
     document.getElementById('vission').style.display = "none";
     document.getElementById('mission').style.display = "none";
 }

 function vission1() {
     document.getElementById('story').style.display = "none";
     document.getElementById('vission').style.display = "block";
     document.getElementById('mission').style.display = "none";
 }

 function mission1() {
     document.getElementById('story').style.display = "none";
     document.getElementById('vission').style.display = "none";
     document.getElementById('mission').style.display = "block";
 }

 function team1() {
     document.getElementById('team').style.display = "block";
     document.getElementById('founders').style.display = "none";
 }

 function founder1() {
     document.getElementById('founders').style.display = "block";
     document.getElementById('team').style.display = "none";
 }

 function initialize() {
     var mapProp = {
         center: new google.maps.LatLng(12.970936, 79.163673),
         zoom: 15,
         mapTypeId: google.maps.MapTypeId.ROADMAP
     };
     var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
 }
 google.maps.event.addDomListener(window, 'load', initialize);

 $(document).ready(function () {
     $("a").on('click', function (event) {
         if (this.hash !== "") {
             event.preventDefault();
             var hash = this.hash;
             $('html, body').animate({
                 scrollTop: $(hash).offset().top
             }, 800, function () {
                 window.location.hash = hash;
             });
         }
     });
 });