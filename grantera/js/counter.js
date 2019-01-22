var numAnim = new CountUp("counter1", 0, 10);
var numAnim2 = new CountUp("counter2", 0, 90.01,2);
var numAnim3 = new CountUp("counter3", 0, 50,0);
var numAnim4 = new CountUp("counter4", 0, 150,0);
var numAnim5 = new CountUp("counter5", 0, 49,0);
var numAnim6 = new CountUp("counter6", 0, 80,0);
var numAnim7 = new CountUp("counter7", 0, 177,0);
var numAnim8 = new CountUp("counter8", 0, 80,0);
var numAnim9 = new CountUp("counter9", 0, 150,0);
var numAnim10 = new CountUp("counter10", 0, 49,0);
var numAnim11 = new CountUp("counter11", 0, 177,0);
var numAnim12 = new CountUp("counter12", 0, 500,0);

if (!numAnim.error) {
// numAnim.start();
} else {
console.error(numAnim.error);
}

var waypoint = new Waypoint({
element: document.getElementById('countersection'),
handler: function() {
    console.log('działa');
    numAnim.start();
    numAnim2.start();
    numAnim3.start();
    numAnim4.start();
    numAnim5.start();
    numAnim6.start();
    numAnim7.start();
    numAnim8.start();
    numAnim9.start();
    numAnim10.start();
    numAnim11.start();
    numAnim12.start();

},
offset:200
})

// let counters = document.getElementsByClassName('counter');
