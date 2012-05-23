document.onkeyup = function (e) {
   var key = e.keyCode ? e.keyCode : e.charCode;
   if (key == 27) {
      window.location = '/';
   }
};

function forohfor() {
   var t = document.createElement('div');
   var trans = 'rotate(' + rand(359) + 'deg';

}

function forohfor() {
   var t = document.createElement('div');
   var trans = 'rotate(' + rand(359) + 'deg)';
   t.style.MozTransform = trans;
   t.style.WebkitTransform = trans;
   t.style.transform = trans;
   t.style.position = 'absolute';
   t.style.left = rand(window.innerWidth - 150) + 'px';
   t.style.top = rand(window.innerHeight - 150) + 'px';
   t.style.color = get_random_color();
   t.class = t.class + 'fof';
   document.getElementsByTagName('body')[0].appendChild(t);
   t.appendChild(document.createTextNode('404'));
}

function rand(lim) {
   return Math.round(Math.random() * lim);
}

function get_random_color() {
   var letters = '0123456789ABCDEF'.split('');
   var color = '#';
   for (var i = 0; i < 6; i++) {
      color += letters[Math.round(Math.random() * 15)];
   }
   return color;
}
setTimeout(function () {
   setInterval(forohfor, 300);
}, 2000);
