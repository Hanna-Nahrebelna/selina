jQuery(document).ready((function(n){let e=2;const o=n("#ajax-posts"),t=n("#load-more-friends");var a=window.innerWidth||document.documentElement.clientWidth;t.on("click",(function(){n.ajax({url:my_ajax.ajaxurl,nonce:my_ajax.nonce,type:"POST",data:{action:"load_more_posts",page:e,width:a},success:function(n){o.append(n.html),e++},error:function(n,e,o){console.error("Request failed: "+o)}})}))}));