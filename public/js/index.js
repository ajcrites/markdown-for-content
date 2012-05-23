var poppy = document.getElementById('popping')
poppy.onmouseover = function (e) {
   this.animatron = 1;
   this.span = this.getElementsByTagName('span')[0];
   this.topop = this.span.innerText;
   console.log(this.span);

   this.popple = function () {
      var pop = document.createElement('span');
      pop.className = 'popper';
      var pretext = document.createTextNode(
         this.topop.slice(0, this.animatron)
      );
      var posttext = document.createTextNode(
         this.topop.slice(this.animatron)
      );
      var text = this.topop.slice(this.animatron, 1);
      pop.innerText = text;
      this.span.innerText = '';
      this.span.appendChild(pretext);
      this.span.appendChild(pop);
      this.span.appendChild(posttext);

      if (this.animatron > this.topop.length) {
         this.animatron = 0;
      }
   }

   this.popple();
}
poppy.onmouseout = function () {
   console.log('left');
}
