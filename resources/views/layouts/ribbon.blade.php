<style media="screen">
.ribbon-overlay {
  background: #ffffffed;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0px;
  z-index: 1054;
  transition: 3s;
}
.ribbon-overlay.fadeRibbon {
  opacity: 0;
}
.ribbon-left {
  position: fixed;
  top: 0px;
  left: 0px;
  margin-top: 300px;
  background: linear-gradient(to right, #b80000, #dd1818);
  width: 50%;
  height: 200px;
  clip-path: polygon(0 0, 100% 10%, 100% 90%, 0 100%);
}
.ribbon-left.fadeRibbon {
  animation-name: ribbonAnimationLeft;
  animation-duration: 2s;
  animation-fill-mode: forwards;
}
.ribbon-right {
  position: fixed;
  top: 0px;
  right: 0px;
  margin-top: 300px;
  background: linear-gradient(to left, #b80000, #dd1818);
  width: 50%;
  height: 200px;
  clip-path: polygon(0 10%, 100% 0, 100% 100%, 0 90%);
}
.ribbon-right.fadeRibbon {
  animation-name: ribbonAnimationRight;
  animation-duration: 2s;
  animation-fill-mode: forwards;
}
.ribbon-bow {
  cursor: pointer;
  position: fixed;
  top: 0px;
  left: calc(50% - 260px);
  margin-top: 170px;
  height: 520px;
}
.ribbon-bow.fadeBow {
  animation-name: bowAnimation;
  animation-duration: 1s;
  animation-fill-mode: forwards;
}
@keyframes bowAnimation {
  from { margin-top: 170px; opacity: 1; }
  to { margin-top: 270px; opacity: 0; }
}
@keyframes ribbonAnimationLeft {
  from { opacity: 1; }
  to { left: -100%; opacity: 0; }
}
@keyframes ribbonAnimationRight {
  from { opacity: 1; }
  to { right: -100%; opacity: 0; }
}
</style>
<div class="ribbon-overlay">
  <div class="ribbon-left">
  </div>
  <div class="ribbon-right">
  </div>
  <img class="ribbon-bow" src="/images/ribbon.svg" onClick="handleRibbonClick()"/>
</div>
@section('post')
  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <script type="text/javascript">
  // Pusher.logToConsole = true;
  var pusher = new Pusher('effe58ccddb034fc3fb1', {
    cluster: 'ap2',
    forceTLS: true
  });

  var channel = pusher.subscribe('ribbon-channel');
  channel.bind('open-ribbon', function(data) {
    $('.ribbon-bow').addClass('fadeBow');
    $('.ribbon-left').addClass('fadeRibbon');
    $('.ribbon-right').addClass('fadeRibbon');
    $('.ribbon-overlay').addClass('fadeRibbon');
    setTimeout(function () {
      $('.ribbon-overlay').css('display', 'none');
    }, 2000);
  });

  function handleRibbonClick() {
    let data = {
      token: "{{request()->get('apiToken')}}"
    }
    axios.post('/human-value-education-cell/trigger', data);
  }
  </script>
@endsection
