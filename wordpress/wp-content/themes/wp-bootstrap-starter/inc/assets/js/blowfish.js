// BlowFish Theme JavaScript

$(document).ready(function() {

  var bubbles = {
    init: function (options) {
      this.id = options.id;
      this.wrapper = $(options.wrapper);
      this.bubbles = [];
      this.idx = 0;

      this.types = options.types || {
        type1: 3,
        type2: 2,
        type3: 1,
      };

      this.setBubbles();
    },

    setBubbles: function () {
      this.wrapper.prepend('<div id="'+this.id+'" class="circles">');

      for (t in this.types) {
        for(var i = 0; i < this.types[t]; i++) {
          this.idx++;
          this.setBubble(this.idx, t);
        }
      }
    },

    setBubble: function (i, t) {
      var wrapper = $('#'+this.id);
      var id = this.id+'-'+(i+1);
      var _this = this;

      wrapper.append('<div id="'+id+'" class="circle '+t+'"></div>');
      // var el = $('#'+id);
      // TweenMax.to(el, 0, {
      //   delay: 0,
      //   opacity: 0,
      //   ease: Power2.easeInOut,
      // });

      // setInterval(function(){
      //   console.log(el);
      //   // if($('#'+id).length > 0){
      //     // $('#'+id).hide(500);
      //   // }
      //   _this.placeBubble(id);
      //   TweenMax.to(el, 1, {
      //     delay: 0,
      //     opacity: .1,
      //     ease: Power2.easeInOut,
      //   });
      // }, 1000);
      _this.placeBubble(id);
    },

    placeBubble: function (id) {
      var el = $('#'+id);
      var rd = this._getRandomCoords(el);
      var pos = {};
      var sides = ['left', 'right'];
      var side = sides[Math.floor(Math.random()*sides.length)];

      pos['top'] = rd.ry+'%';
      pos[side] = rd.rx+'%';

      el.css(pos);

      this.animateBubble(el);
    },

    animateBubble: function (el) {
      var rd = Math.floor(Math.random() * (85 - 15 + 1)) + 15;
      var t = Math.floor(Math.random() * (3 - 2 + 1)) + 2;

      TweenMax.to(el, t, {
        delay: Math.random() * 1,
        y: "-="+rd+"px",
        yoyo: true,
        repeat: -1,
        // opacity: 0,
        ease: Power2.easeInOut,
        force3D: true
      });
    },

    _getRandomCoords: function (el) {
      var rx = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
      var ry = Math.floor(Math.random() * (100 - 1 + 1)) + 1;

      if(el.hasClass('type3')) {
        rx = Math.floor(Math.random() * (10 - 5 + 1)) + 5;
        ry = Math.floor(Math.random() * (80 - 10 + 1)) + 10;
      }

      if(el.hasClass('type2')) {
        rx = Math.floor(Math.random() * (15 - 10 + 1)) + 10;
        ry = Math.floor(Math.random() * (80 - 10 + 1)) + 10;
      }

      if(el.hasClass('typeq')) {
        rx = Math.floor(Math.random() * (20 - 15 + 1)) + 15;
        ry = Math.floor(Math.random() * (80 - 10 + 1)) + 10;
      }
      return {
        rx: rx,
        ry: ry,
      }
    },
  }

  bubbles.init({
    id: 'bubbles',
    wrapper: 'header',
    types: {
      type1: 6,
      type2: 4,
      type3: 2,
    }
  });

  TweenMax.to($('#pet'), 3, {
    delay: Math.random(),
    y: "-=10px",
    yoyo: true,
    rotation: 5,
    repeat: -1,
    ease: Power2.easeInOut,
    force3D: true
  });
});
