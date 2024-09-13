/* -------- Cookie banner -------- */

add_action('wp_footer', 'cookie_bar_info');
function cookie_bar_info() { ?>
  
<script>cookieLaw={dId:"cookie-law-div",bId:"cookie-law-button",iId:"cookie-law-item",show:function(e){if(localStorage.getItem(cookieLaw.iId))return!1;var o=document.createElement("div"),i=document.createElement("p"),t=document.createElement("button");i.innerHTML=e.msg,t.id=cookieLaw.bId,t.innerHTML=e.ok,o.id=cookieLaw.dId,o.appendChild(t),o.appendChild(i),document.body.insertBefore(o,document.body.lastChild),t.addEventListener("click",cookieLaw.hide,!1)},hide:function(){document.getElementById(cookieLaw.dId).outerHTML="",localStorage.setItem(cookieLaw.iId,"1")}},cookieLaw.show({msg:"Nous utilisons des cookies pour vous offrir la meilleure expérience possible. En continuant à visiter notre site web, vous acceptez l'utilisation de cookies telle que décrite dans notre <a href='/politique-de-confidentialite'>politique de confidentialité</a>.",ok:"OK"});</script>
  
<?php
}
