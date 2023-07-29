<div class="percent-wrapper">
	<!--Text Align-->
    <h2>Offset Fix</h2>
    <p>Copy This Box Code And Use Your Project.</p>
    <section class="box-medium codebox">	
<pre><code class="html"><div class="offset-fix">Offset Fixbar. Menu Bar and Any Component Fix to top Dynamic (JS Component).</div>

<script>
var wcoffsetfix = $('.offset-fix').offset().top;
$(window).scroll(function(){
  var offsetfix = $('.offset-fix');
  scroll = $(window).scrollTop();
  if (scroll >= wcoffsetfix) {
    offsetfix.addClass('offset-fixed');
  }
  else {
    offsetfix.removeClass('offset-fixed');
  }
});
</script>
</code></pre>
    </section>

    <p class="text-bold">Text Align Output</p>
    	<div class="box-large success-bg offset-fix text-white">Offset Fixbar. Menu Bar and Any Component Fix to top Dynamic (JS Component).</div>
        <p style="height:800px;"></p>
        
    <!--End Text Align-->
    
<script>
	var wcoffsetfix = $('.offset-fix').offset().top;
	$(window).scroll(function(){
	var offsetfix = $('.offset-fix');
	scroll = $(window).scrollTop();
	if (scroll >= wcoffsetfix) {
		offsetfix.addClass('offset-fixed');
	}
	else {
		offsetfix.removeClass('offset-fixed');
	}
});
</script>
        
</div>
</body>
</html>
