window.onload = function () {
  // 顶部按钮
  navButtonAction();

  // 播放器
  if(document.querySelector("#player")){
    var src = document.querySelector("#player").dataset.url;
    var options = {
        fluid: false,
        // autoplay: 'muted',
        preload: 'none',
        controls: true
    };
    var player = videojs('player', options, function onPlayerReady() {
        console.log('Your player is ready!');
    });
    player.src({
        src: src,
        // type: 'application/x-mpegURL'
        type: 'video/webm'
    });
    // player.load();
    // player.play();
  }

  
  // 幻灯
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
    },
  });

  // 回到顶部
  var btn = document.querySelector(".to-top");
  var clientHeight = document.documentElement.clientHeight;
  var timer = null;
  var istop = true;

  window.onscroll = function () {
    var dtop = document.documentElement.scrollTop;
    if (dtop >= (clientHeight * 0.1)) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
    if (!istop) {
      clearInterval(timer);
    }
    istop = false;
  }

  btn.onclick = function () {
    timer = setInterval(function () {
      var dtop = document.documentElement.scrollTop;
      var speed = Math.floor(-dtop / 10);
      document.documentElement.scrollTop = dtop + speed;
      istop = true;
      if (dtop == 0) {
        clearInterval(timer);
      }
    }, 15)
  }
}



function navButtonAction(){
  var button = document.querySelector(".menu-button");
  button.addEventListener("click", function(){
    var toggle = this.dataset.toggle=='true' ? 'false' : 'true';
    this.dataset.toggle = toggle; 
    this.querySelectorAll(".iconfont").forEach(function(item){
      item.style.display = "none";
    });
    if(this.dataset.toggle=='true'){
      this.querySelector(".iconfont:first-child").style.display="block";
      document.querySelector('nav').style.display = "block";
    }else{
      this.querySelector(".iconfont:last-child").style.display="block";
      document.querySelector('nav').style.display = "none";
    }
  });
}