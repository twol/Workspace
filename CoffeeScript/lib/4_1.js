// Generated by CoffeeScript 1.3.3
(function() {
  var Bird, birdA, birdB;

  Bird = (function() {

    function Bird() {}

    Bird.prototype.nickname = "ある鳥";

    return Bird;

  })();

  birdA = new Bird;

  birdB = new Bird;

  birdA.nickname = "太郎";

  birdB.nickname = "二郎";

  console.log(birdA.location);

  console.log(birdA.nickname);

  console.log(birdB.nickname);

  Bird.prototype.location = "木の上";

  console.log(birdA.location);

}).call(this);
