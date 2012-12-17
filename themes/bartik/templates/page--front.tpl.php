<?php 
	$query="
			SELECT x_display,y_display,z_display
			FROM `displayfront_bhav`
			WHERE STATUS =1
			AND start_date <= CAST(CURRENT_TIMESTAMP AS DATE )
			AND end_date >= CAST(CURRENT_TIMESTAMP AS DATE )
		";
	$result=db_query($query);
	$imgx[][0]="themes/bartik/images/AC_Intro_Logo_A.png";
	$imgy[][0]="themes/bartik/images/AC_Intro_Logo_R.png";
	$imgz[][0]="themes/bartik/images/AC_Intro_Logo_T.png";
	echo "<pre>";
	while($record = $result->fetchAssoc()) {
					$imgx[]=explode(",",$record['x_display']);
					$imgy[]=explode(",",$record['y_display']);
					$imgz[]=explode(",",$record['z_display']);
					//print_r($record);
    			}
	echo "</pre>";
	function to1d ($input_array) {
		$output_array = array();

		for ($i = 0; $i < count($input_array);$i++) {
			for ($j = 0; $j < count($input_array[$i]);$j++) {
				if($input_array[$i][$j]) $output_array[] = file_create_url($input_array[$i][$j]);
			}
		}		
		return $output_array;
	}
	
	$x=to1d($imgx);
	$y=to1d($imgy);
	$z=to1d($imgz);
	/*echo "<pre>";
	print_r($x);
	print_r($y);
	print_r($z);
	echo "</pre>";*/
	//echo getcwd();
?>
<script language="javascript">
/*var sliderOptions=
{
	sliderId: "slider",
	effect: "series1",
	effectRandom: false,
	pauseTime: 500,
	transitionTime: 200,
	slices: 1,
	boxes: 1,
	hoverPause: true,
	autoAdvance: true,
	captionOpacity: 0.3,
	captionEffect: "fade",
	thumbnailsWrapperId: "thumbs",
	m: false,
	license: "mylicense"
};*/

//var imageSlider=new mcImgSlider(sliderOptions);

/* Menucool Javascript Image Slider v2012.11.22. Copyright www.menucool.com */
//function mcImgSlider(j){var K=function(a){return document.getElementById(a)},d="length",M=function(e){var a=e.childNodes,c=[];if(a)for(var b=0,f=a[d];b<f;b++)a[b].nodeType==1&&c.push(a[b]);return c},m="className",p="getAttribute",f="opacity",P=function(a,b){return a.getElementsByTagName(b)},hb=function(a){for(var c,e,b=a[d];b;c=parseInt(Math.random()*b),e=a[--b],a[b]=a[c],a[c]=e);return a},gb=function(a,c,b){if(a.addEventListener)a.addEventListener(c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},jb=document,fb=function(c,a,b){return b?c.substring(a,b):c.substring(a)},c="style",R="display",z="visibility",g="width",v="height",O="top",J="background",t="marginLeft",F="appendChild",y="parentNode",D="nodeName",x=function(){this.d=[];this.b=null;this.c()};function Z(){var c=50,a=navigator.userAgent,b;if((b=a.indexOf("MSIE "))!=-1)c=parseInt(a.substring(b+5,a.indexOf(".",b)));if(a.indexOf("Safari")!=-1&&a.indexOf("Chrome")==-1)c=300;return c}var cb=Z()<9,E=function(a,b){if(a){a.o=b;if(cb)a[c].filter="alpha(opacity="+b*100+")";else a[c][f]=b}};x.a={f:function(a){return-Math.cos(a*Math.PI)/2+.5},g:function(a){return a},h:function(b,a){return Math.pow(b,a*2)},j:function(b,a){return 1-Math.pow(1-b,a*2)}};x.prototype={k:{c:j.transitionTime,a:function(){},b:x.a.f,d:1},c:function(){for(var b=["webkit","ms","o"],a=0;a<b[d]&&!window.requestAnimationFrame;++a){window.requestAnimationFrame=window[b[a]+"RequestAnimationFrame"];window.cancelAnimationFrame=window[b[a]+"CancelAnimationFrame"]||window[b[a]+"CancelRequestAnimationFrame"]}this.e=!!window.requestAnimationFrame},m:function(i,d,h,c){for(var b=[],j=h-d,k=h>d?1:-1,g=Math.ceil(60*c.c/1e3),a,e=1;e<=g;e++){a=d+c.b(e/g,c.d)*j;if(i!=f)a=Math.round(a);b.push(a)}b.index=0;return b},n:function(){this.b==null&&this.p()},p:function(){this.q();var a=this;this.b=this.e?window.requestAnimationFrame(function(){a.p()}):window.setInterval(function(){a.q()},15)},q:function(){var a=this.d[d];if(a){for(var c=0;c<a;c++)this.o(this.d[c]);while(a--){var b=this.d[a];if(b.d.index==b.d[d]){b.c();this.d.splice(a,1)}}}else{if(this.e&&window.cancelAnimationFrame)window.cancelAnimationFrame(this.b);else window.clearInterval(this.b);this.b=null}},o:function(a){if(a.d.index<a.d[d]){var e=a.b,b=a.d[a.d.index];if(a.b==f){if(cb){e="filter";b="alpha(opacity="+Math.round(b*100)+")"}}else b+="px";a.a[c][e]=b;a.d.index++}},r:function(e,b,d,f,a){a=this.s(this.k,a);var c=this.m(b,d,f,a);this.d.push({a:e,b:b,d:c,c:a.a});this.n()},s:function(c,b){b=b||{};var a,d={};for(a in c)d[a]=b[a]!==undefined?b[a]:c[a];return d}};var h=new x,b={a:0,e:"",d:0,c:0,b:0},a,e,s,w,L,G,N,k,n,Q,C,r,A,B,q,U,I,o,l=null,X=function(b){if(b=="series1")a.a=[6,8,15,2,5,14,13,3,7,4,14,1,13,15];else if(b=="series2")a.a=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];else a.a=b.split(/\W+/);a.a.p=j.effectRandom?-1:a.a[d]==1?0:1},S=function(){a={b:j.pauseTime,c:j.transitionTime,f:j.slices,g:j.boxes,O0:j.license||"5432",h:j.hoverPause,i:j.autoAdvance,j:j.captionOpacity,k:j.captionEffect=="none"?0:j.captionEffect=="fade"?1:2,l:j.thumbnailsWrapperId,Ob:function(){typeof beforeSlideChange!=="undefined"&&beforeSlideChange(arguments)},Oa:function(){typeof afterSlideChange!=="undefined"&&afterSlideChange(arguments)}};if(e)a.m=Math.ceil(e.offsetHeight*a.g/e.offsetWidth);X(j.effect);a.n=function(){var b;if(a.a.p==-1)b=a.a[Math.floor(Math.random()*a.a[d])];else{b=a.a[a.a.p];a.a.p++;if(a.a.p>=a.a[d])a.a.p=0}if(b<1||b>17)b=15;return b}},lb=["$1$2$3","$1$2$3","$1$24","$1$23"],u=[];function db(){var g;if(a.l)g=K(a.l);if(g)for(var h=g.childNodes,f=0;f<h[d];f++)h[f][m]=="thumb"&&u.push(h[f]);var c=u[d];if(c){while(c--){u[c].on=0;u[c].i=c;u[c].onclick=function(){l.y(this.i)};u[c].onmouseover=function(){this.on=1;this[m]="thumb thumb-on";e.onmouseover()};u[c].onmouseout=function(){this.on=0;this[m]=this.i==b.a?"thumb thumb-on":"thumb";e.onmouseout()}}Y(0)}}function Y(b){var a=u[d];if(a)while(a--)u[a][m]=a!=b&&u[a].on==0?"thumb":"thumb thumb-on"}function eb(b){var a=[],c=b[d];while(c--)a.push(String.fromCharCode(b[c]));return a.join("")}var V=function(a,e,j,c,b,d,i){setTimeout(function(){if(e&&j==e-1){var i={};i.a=function(){l.o()};for(var k in a)i[k]=a[k]}else i=a;typeof b[g]!=="undefined"&&h.r(c,"width",b[g],d[g],a);typeof b[v]!=="undefined"&&h.r(c,"height",b[v],d[v],a);h.r(c,f,b[f],d[f],i)},i)},ab=function(a){e=a;this.b=0;this.c()},kb=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/],H=function(b){var a=document.createElement("div");a[m]=b;return a};ab.prototype={c:function(){s=e.offsetWidth;w=e.offsetHeight;var i=M(e),j=i[d];if(i[j-1][m]=="navBulletsWrapper")return;var f;o=[];while(j--){f=i[j];if(f[D]=="BR")e.removeChild(f);else{f[c][R]="none";o.push(f);if(f[D]=="A"){if(f[m])f[m]="imgLink "+f[m];else f[m]="imgLink";var n=this.z(f),k=f[p]("href");if(n&&typeof McVideo!="undefined"&&k&&k.indexOf("http")!=-1){f.onclick=function(){return this[p]("autoPlayVideo")=="true"?false:l.d(this)};McVideo.register(f,this)}}if(f[D]!="IMG")P(f,"img")[0][c][R]="none"}}o.reverse();b.d=o.length;a.m=Math.ceil(w*a.g/s);if(o[b.a][D]=="IMG")b.e=o[b.a];else b.e=P(o[b.a],"img")[0];if(o[b.a][D]=="A")o[b.a][c][R]="block";e[c][J]='url("'+b.e[p]("src")+'") no-repeat';this.i();L=this.k();var g=this.v(),h=b.e[y];if(this.z(h)&&h[p]("autoPlayVideo")=="true")this.d(h);else if(a.i&&b.d>1)q=setTimeout(function(){g.y(g.n(1),0,1)},a.b+a.c);if(a.h){e.onmouseover=function(){if(b.b!=2){b.b=1;clearTimeout(q);q=null}};e.onmouseout=function(){if(b.b!=2){b.b=0;if(q==null&&!b.c&&a.i)q=setTimeout(function(){g.y(g.n(b.a+1),0,1)},a.b/2)}}}if(Z()==300)e[c]["-webkit-transform"]="translate3d(0,0,0)"},d:function(c){var a=McVideo.play(c,s,w);if(a)b.b=2;return!this.b},f:function(){I=H("navBulletsWrapper");for(var f=[],a=0;a<b.d;a++)f.push("<div rel='"+a+"'></div>");I.innerHTML=f.join("");for(var c=M(I),a=0;a<c[d];a++){if(a==b.a)c[a][m]="active";c[a].onclick=function(){l.y(parseInt(this[p]("rel")))}}e[F](I)},g:function(){var d=M(I),a=b.d;while(a--){if(a==b.a)d[a][m]="active";else d[a][m]="";if(o[a][D]=="A")o[a][c][R]=a==b.a?"block":"none"}},h:function(a,e){var c=function(b){var a=b.charCodeAt(0).toString();return a.substring(a[d]-1)},b=e.replace(kb[a-2],lb[a-2]).split("");return"b"+a+b[1]+c(b[0])+c(b[2])},i:function(){G=H("mc-caption");N=H("mc-caption");k=H("mc-caption-bg");E(k,0);k[F](N);n=H("mc-caption-bg2");n[F](G);E(n,0);n[c][z]=k[c][z]=N[c][z]="hidden";e[F](k);e[F](n);Q=[k.offsetLeft,k.offsetTop,G.offsetWidth];G[c][g]=N[c][g]=G.offsetWidth+"px";this.j()},j:function(){if(a.k==2){C=A={opacity:0,width:0,marginLeft:Math.round(Q[2]/2)};r={opacity:1,width:Q[2],marginLeft:0};B={opacity:a.j,width:Q[2],marginLeft:0}}else if(a.k==1){C=A={opacity:0};r={opacity:1};B={opacity:a.j}}},k:function(){var a=b.e[p]("alt");if(a&&a.substr(0,1)=="#"){var c=K(a.substring(1));a=c?c.innerHTML:""}this.l();return a},l:function(){var e=1;if(G.innerHTML[d]>1)if(!a.k)k[c][z]=n[c][z]="hidden";else{e=0;var b={c:a.c*.3,b:a.k==1?x.a.f:x.a.h,d:a.k==1?0:2},i=b;i.a=function(){k[c][z]=n[c][z]="hidden";l.m()};if(typeof r[t]!=="undefined"){h.r(n,"width",r[g],C[g],b);h.r(k,"width",B[g],A[g],b);h.r(n,"marginLeft",r[t],C[t],b);h.r(k,"marginLeft",B[t],A[t],b)}if(typeof r[f]!=="undefined"){h.r(n,f,r[f],C[f],b);h.r(k,f,B[f],A[f],i)}}e&&setTimeout(function(){l.m()},a.c*.3)},m:function(){N.innerHTML=G.innerHTML=L;if(L){k[c][z]=n[c][z]="visible";if(a.k){var d=a.c*a.k;if(d>1e3)d=1e3;var b={c:d,b:a.k==1?x.a.g:x.a.j,d:a.k==1?0:2};if(typeof r[t]!=="undefined"){h.r(n,"width",C[g],r[g],b);h.r(k,"width",A[g],B[g],b);h.r(n,"marginLeft",C[t],r[t],b);h.r(k,"marginLeft",A[t],B[t],b)}if(typeof r[f]!=="undefined"){h.r(n,f,C[f],r[f],b);h.r(k,f,A[f],B[f],b)}}else{E(n,1);E(k,a.j)}}},a:function(a){return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/,"$1$3$2")},o:function(){b.c=0;clearTimeout(q);q=null;e[c][J]='url("'+b.e[p]("src")+'") no-repeat';var f=this,d=b.e[y];if(this.z(d)&&d[p]("autoPlayVideo")=="true")this.d(d);else if(!b.b&&a.i)q=setTimeout(function(){f.y(f.n(b.a+1),0,1)},a.b);a.Oa.call(this,b.a,b.e)},p:function(h){b.c=1;if(o[b.a][D]=="IMG")b.e=o[b.a];else b.e=P(o[b.a],"img")[0];this.g();clearTimeout(U);L=this.k();var g=P(e,"div");i=g[d];while(i--)if(g[i][m]=="mcSlc"||g[i][m]=="mcBox"){var j=e.removeChild(g[i]);delete j}var c=h?h:a.n();a.Ob.apply(this,[b.a,b.e,L,c]);Y(b.a);var f=c<14?this.w(c):this.x();if(c<9||c==15){if(c%2)f=f.reverse()}else if(c<14)f=f[0];if(c<9)this.q(f,c);else if(c<13)this.r(f,c);else if(c==13)this.s(f);else if(c<16)this.t(f,c);else this.u(f,c)},q:function(b,e){for(var h=0,i=e<7?{height:0,opacity:-.4}:{width:0,opacity:0},k={height:w,opacity:1},a=0,j=b[d];a<j;a++){if(e<3)b[a][c].bottom="0";else if(e<5)b[a][c][O]="0";else if(e<7){b[a][c][a%2?"bottom":"top"]="0";i[f]=-.2}else{k={width:b[a].offsetWidth,opacity:1};b[a][c][g]=b[a][c][O]="0";b[a][c][v]=w+"px"}V({},j,a,b[a],i,k,h);h+=50}},r:function(d,b){d[c][g]=b<11?"0px":s+"px";d[c][v]=b<11?w+"px":"0px";E(d,1);if(b<11)d[c][O]="0";if(b==9){d[c].left="auto";d[c].right="0px"}else if(b>10)d[c][b==11?"bottom":"top"]="0";if(b<11)var e=0,f=s;else{e=0;f=w}var i={b:x.a.j,c:a.c*1.6,a:function(){l.o()}};h.r(d,b<11?"width":"height",e,f,i)},s:function(b){b[c][O]="0";b[c][g]=s+"px";b[c][v]=w+"px";var d={c:a.c*1.6,a:function(){l.o()}};h.r(b,f,0,1,d)},t:function(b){var s=a.g*a.m,p=0,n=0,j=0,h=0,f=[];f[0]=[];for(var e=0,o=b[d];e<o;e++){b[e][c][g]=b[e][c][v]="0px";f[j][h]=b[e];h++;if(h==a.g){j++;h=0;f[j]=[]}}for(var q={c:a.c/1.3},k=0,o=a.g*2;k<o;k++){for(var i=k,l=0;l<a.m;l++){if(i>=0&&i<a.g){var m=f[l][i];V(q,b[d],p,m,{width:0,height:0,opacity:0},{width:m.w,height:m.h,opacity:1},n);p++}i--}n+=100}},u:function(a,j){a=hb(a);for(var f=0,b=0,k=a[d];b<k;b++){var e=a[b];if(j==16){a[b][c][g]=a[b][c][v]="0px";var h={width:0,height:0,opacity:0},i={width:e.w,height:e.h,opacity:1}}else{h={opacity:0};i={opacity:1}}V({},a[d],b,e,h,i,f);f+=20}},v:function(){return(new Function("a","b","c","d","e","f","g","h","this.f();var l=e(g(b([110,105,97,109,111,100])));if(l==''||l.length>3||a[b([48,79])]==f((+a[b([48,79])].substring(1,2)),g(b([110,105,97,109,111,100])))){d();this.b=1;}else{a[b([97,79])]=a[b([98,79])]=function(){};var k=c[0];if (k.getAttribute(b([102,101,114,104])))var x=k.getAttribute(b([102,101,114,104]));if(x&&x.length>20)var y=h(x,17,19)=='ol';};return this;")).apply(this,[a,eb,o,db,this.a,this.h,function(a){return jb[a]},fb])},w:function(i){for(var k=[],j=i>8?s:Math.round(s/a.f),l=i>8?1:a.f,h=0;h<l;h++){var f=H("mcSlc");f[c].left=j*h+"px";f[c][g]=(h==a.f-1?s-j*h:j)+"px";f[c][v]="0px";f[c][J]='url("'+b.e[p]("src")+'") no-repeat -'+h*j+"px 0%";if(i==10)f[c][J]='url("'+b.e[p]("src")+'") no-repeat right top';else if(i==12)f[c][J]='url("'+b.e[p]("src")+'") no-repeat left bottom';f[c].zIndex=1;f[c].position="absolute";E(f,0);e[F](f);k[k[d]]=f}return k},x:function(){for(var k=[],j=Math.round(s/a.g),i=Math.round(w/a.m),h=0;h<a.m;h++)for(var f=0;f<a.g;f++){var d=H("mcBox");d[c].left=j*f+"px";d[c][O]=i*h+"px";d.w=f==a.g-1?s-j*f:j;d.h=h==a.m-1?w-i*h:i;d[c][g]=d.w+"px";d[c][v]=d.h+"px";d[c][J]='url("'+b.e[p]("src")+'") no-repeat -'+f*j+"px -"+h*i+"px";d[c].zIndex=1;d[c].position="absolute";E(d,0);e[F](d);k.push(d)}return k},y:function(d,g,f){if(b.c&&!g||d==b.a)return 0;if(b.b==2){b.b=0;var c=K("mcVideo");if(c){c.src="";var e=c[y][y].removeChild(c[y]);delete e}}clearTimeout(q);q=null;var a=b.a;b.a=this.n(d);if(f||!j.m)a=0;else a=a>b.a?"10":"9";this.p(a)},n:function(a){if(a>=b.d)a=0;else if(a<0)a=b.d-1;return a},To:function(a){this.y(this.n(b.a+a))},z:function(a){return a[m].indexOf(" video")>-1}};var T=function(){var a=K(j.sliderId);if(a&&P(a,"img")[d]&&a.offsetHeight)l=new ab(a);else setTimeout(T,900)};S();gb(window,"load",T);var ib=function(){if(e){h.d=[];clearTimeout(q);clearTimeout(U);q=U=null;var c=M(e),g=c[d];while(g--)if(c[g][D]=="DIV"){var j=c[g][y].removeChild(c[g]);delete j}var f=K("mcVideo");if(f){f.src="";var i=f[y][y].removeChild(f[y]);delete i}b={a:0,e:"",d:0,c:0,b:0}}S();T();if(!l.b)a.i=l.b},bb=0,W=function(c){if(++bb<20)if(!l||typeof tooltip=="undefined")setTimeout(function(){W(c)},300);else for(var b=M(I),a=0;a<b[d];a++)b[a].onmouseover=function(){tooltip.pop(this,c(parseInt(this[p]("rel"))))}};return{displaySlide:function(c,b,a){l.y(c,b,a)},next:function(){l.To(1)},previous:function(){l.To(-1)},getAuto:function(){return a.i},thumbnailPreview:function(a){bb=0;W(a)},switchAuto:function(){if(a.i=!a.i)l.To(1);else clearTimeout(q)},setEffect:function(a){X(a)},changeOptions:function(a){for(var b in a)j[b]=a[b];S()},reload:ib,getElement:function(){return K(j.sliderId)}}}

        var x=new Array;
	var y=new Array;
	var z=new Array;
	<?php
		for($i=0;$i<count($x); $i++)
                {
			echo "x[$i]='".$x[$i]."';\n";
		}
		for($i=0;$i<count($y); $i++)
                {
			echo "y[$i]='".$y[$i]."';\n";
		}
		for($i=0;$i<count($z); $i++)
                {
			echo "z[$i]='".$z[$i]."';\n";
		}
	?>
        for(i=0;i<x.length;i++)
            console.log(x[i]);
	for(i=0;i<y.length;i++)
            console.log(y[i]);
	for(i=0;i<z.length;i++)
            console.log(z[i]);
</script>
<style>
	/* http://www.menucool.com */

.greydout {
  -webkit-opacity: 0.25;
  -moz-opacity: 0.25;
  opacity: 0.25;
  -webkit-transition: all 3s ease;
  -moz-transition: all 3s ease;
  -ms-transition: all 3s ease;
  -o-transition: all 3s ease;
  transition: all 3s ease;
}

.greydout:hover {
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
}

#sliderFrame {position:relative;width:35%;margin: 0 auto;} /*remove the "margin:0 auto;" if you want to align the whole slider to the left side*/

#ribbon {width:111px;height:111px;position:absolute;top:-4px;left:-4px;background:url(ribbon.png) no-repeat;z-index:7;}
        
#slider {
    width:300px;height:400px;/* Make it the same size as your images */
	background:#fff url(loading.gif) no-repeat 50% 50%;
	position:relative;
	margin:0 auto;/*make the image slider center-aligned */
    box-shadow: 0px 1px 5px #999999;
}
#slider img {
	position:absolute;
	border:none;
	display:none;
}

/* the link style (if an image is wrapped in a link) */
#slider a.imgLink {
	z-index:2;
	display:none;position:absolute;
	top:0px;left:0px;border:0;padding:0;margin:0;
	width:100%;height:100%;
}

/* Caption styles */
div.mc-caption-bg, div.mc-caption-bg2 {
	position:absolute;
	width:100%;
	height:auto;
	padding:0;
	left:0px; /*if the caption needs to be aligned from right, specify by right instead of left. i.e. right:20px;*/
	bottom:0px;/*if the caption needs to be aligned from top, specify by top instead of bottom. i.e. top:150px;*/
	z-index:3;
	overflow:hidden;
	font-size: 0;
}
div.mc-caption-bg {
	background-color:black;
}
div.mc-caption {
	font: bold 14px/20px Arial;
	color:#EEE;
	z-index:4;
	padding:10px 0;/*Adding a padding-left or padding-right here will make the caption area wider than its background. Sometimes you may need to define its width again here to keep it the same width as its background area (div.mc-caption-bg).*/
	text-align:center;
}
div.mc-caption a {
	color:#FB0;
}
div.mc-caption a:hover {
	color:#DA0;
}


/* ------ built-in navigation bullets wrapper ------*/
div.navBulletsWrapper  {
	top:320px; left:280px; /* Its position is relative to the #slider */
	width:150px;
	background:none;
	padding-left:20px;
	position:relative;
	z-index:5;
	cursor:pointer;
}

/* each bullet */
div.navBulletsWrapper div 
{
    width:11px; height:11px;
    background:transparent url(bullet.png) no-repeat 0 0;
    float:left;overflow:hidden;vertical-align:middle;cursor:pointer;
    margin-right:11px;/* distance between each bullet*/
    _position:relative;/*IE6 hack*/
}

div.navBulletsWrapper div.active {background-position:0 -11px;}


/* --------- Others ------- */
#slider 
{
	transform: translate3d(0,0,0);
    -ms-transform:translate3d(0,0,0);
    -moz-transform:translate3d(0,0,0);
    -o-transform:translate3d(0,0,0);
}
.visible {
  visibility: visible;
  opacity: 1;
  transition: opacity 2s linear;
}
.hidden {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s 2s, opacity 2s linear;
}
</style>
<div id="remove_scroll" style="background-color: red;" onresize="OnResizeDocument()" onload="OnResizeDocument()">
        <div style="background-color: white;" id="cont">
                <div class="page-header">
                    <div class="bs-docs-grid">
                        
                        <div class="row-fluid">
                            <div class="span2" id="bhav1" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE1.png);background-size: contain;background-repeat: repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                            <div class="span8" id="headchange" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE5.png);background-size: contain;background-repeat: repeat">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span4 cut_tablet" id="tablet1">
                                            <img alt="260x180" class="thumbnails" src="themes/bartik/images/ArtCheckin-logo_with-TM.png">
                                        </li>
                                        <li class="span4" style="text-align: center" id="headbutton">
                                                BUTTON
                                        </li>
                                        <li class="span4 cut_tablet" id="tablet2">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="span2" id="bhav2" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE1R.png);background-size: contain;background-repeat:repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span2" id="bhav3">
                                WALL
                            </div>
                            <div class="span8" id="photoframes">
                                <div class="row-fluid">
                                    <ul class="thumbnails img3image" style="background: -moz-linear-gradient(top,  #00FFFF,  #000);">
                                        <li class="span4 cut_tablet" id="tablet3">
                                          <!--  <img alt="260x180" class="thumbnails" src="themes/bartik/images/AC_Intro_Logo_blank_frame.png">-->
					  <div>
						<img alt="260x180" class="thumbnails visible" src="themes/bartik/images/AC_Intro_Logo_A.png" name="slide1">
                                          </div>
					</li>
					<li class="span4" id="midimage">
                                                <!--<img alt="260x180" class="thumbnails" src="themes/bartik/images/AC_Intro_Logo_blank_frame.png" >-->
					    <div>
						<img alt="260x180" class="thumbnails visible" src="themes/bartik/images/AC_Intro_Logo_R.png" name="slide2" >
					    </div>
					</li>
                                        <li class="span4 cut_tablet" id="tablet4" >
                                            <!--<img alt="260x180" class="thumbnails" src="themes/bartik/images/AC_Intro_Logo_blank_frame.png">-->
					    <div>
						<img alt="260x180" class="thumbnails visible" src="themes/bartik/images/AC_Intro_Logo_T.png" name="slide3" >
					    </div>
					</li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="span2  cut_bhav" id="bhav4" style="text-align:right">
                                WALL
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span2  cut_bhav" id="bhav5" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE3.png);background-size: contain;background-position: right;background-repeat: repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                            <div class="span8" id="footchange">
                                <div class="row-fluid">
                                    <ul class="thumbnails" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE4.png);background-size: contain;background-position: left;background-repeat: repeat">
                                        <li class="span4 cut_tablet" id="tablet5">
                                            
                                        </li>
                                        <li class="span4" id="midsofa">
                                                <img alt="260x180" class="thumbnails" src="themes/bartik/images/AC_intopage_sofa.png">
                                        </li>
                                        <li class="span4 cut_tablet" id="tablet6">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="span2  cut_bhav" id="bhav6" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE3R.png);background-size: contain;background-position:left;background-repeat: repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<script>
var step1=0;
var whichimage1=0;
var step2=0;
var whichimage2=0;
var step3=0;
var whichimage3=0;
function slideit(){
	if (!document.images)
	return;
	//alert(x[step]);
	//document.getElementsByName(slide1).className="thumbnail hidden";
	document.images.slide1.src=x[step1];
	whichimage1=step1;
	if (step1<x.length-1) step1++;
	else step1=1;

	
	document.images.slide2.src=y[step2];
	whichimage2=step2;
	if (step2<y.length-1) step2++;
	else step2=1;

	
	document.images.slide3.src=z[step3];
	whichimage3=step3;
	if (step3<z.length-1) step3++;
	else step3=1;
	setTimeout("slideit()",5000);
}
slideit();
</script>
<?php if ($page['footer']): ?>
      <div id="footer" class="clearfix">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>

