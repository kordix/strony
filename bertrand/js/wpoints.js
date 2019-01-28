var waypoint = new Waypoint({
element: document.getElementById('news'),
handler: function() {
  document.getElementById('news').style.opacity=1;
  document.getElementById('news').style.marginTop="0px";
  console.log('działa');

},
offset:1000
})

var waypoint1 = new Waypoint({
element: document.getElementById('carouseltop'),
handler: function() {
  document.getElementById('carouseltop').style.opacity=1;
  document.getElementById('carouseltop').style.marginTop="0px";
  console.log('carouseltop');

},
offset:1000
})

var waypoint2 = new Waypoint({
element: document.getElementById('top'),
handler: function() {
  document.getElementById('top').style.opacity=1;
  document.getElementById('top').style.marginTop="0px";
  console.log('top');

},
offset:1000
})

var waypoint3 = new Waypoint({
element: document.getElementById('top2'),
handler: function() {
  document.getElementById('top2').style.opacity=1;
  document.getElementById('top2').style.marginTop="0px";
  console.log('top2');

},
offset:1000
})

var waypoint4 = new Waypoint({
element: document.getElementById('mid1'),
handler: function() {
  document.getElementById('mid1').style.opacity=1;
  document.getElementById('mid1').style.marginTop="0px";
  console.log('mid1');

},
offset:1000
})

var waypoint5 = new Waypoint({
element: document.getElementById('mid2'),
handler: function() {
  document.getElementById('mid2').style.opacity=1;
  document.getElementById('mid2').style.marginTop="0px";
  console.log('mid2');

},
offset:1000
})

var waypoint6 = new Waypoint({
element: document.getElementById('realizations'),
handler: function() {
  document.getElementById('realizations').style.opacity=1;
  document.getElementById('realizations').style.marginTop="0px";
  console.log('realizations');

},
offset:1000
})









//document.getElementById(element).classList.add("fixed-top");
            //document.getElementById(element).style.opacity=0.6;
