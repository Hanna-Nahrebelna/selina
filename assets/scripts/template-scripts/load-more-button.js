jQuery(document).ready((function(o){let t={};const e=o("#more-friends"),n=o("#more-photographs"),a=o("#load-more-friends"),c=o("#load-more-photographs");var r=window.innerWidth||document.documentElement.clientWidth;function i(e,n){t[e]||(t[e]=2),o.ajax({url:my_ajax.ajaxurl,nonce:my_ajax.nonce,type:"POST",data:{action:"load_more_posts",page:t[e],width:r,postType:e},success:function(o){n.append(o.html),t[e]++},error:function(o,t,e){console.error("Request failed: "+e)}})}a.on("click",(function(){i(o(this).data("post-type"),e)})),c.on("click",(function(){i(o(this).data("post-type"),n)}))}));