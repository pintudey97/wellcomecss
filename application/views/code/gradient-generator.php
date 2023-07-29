<style>
.resault,.cu_resault{
	width:100%;
	height:400px;
	border:1px solid #ccc;
	padding:10px;
	font-family:"Lucida Console", Monaco, monospace;
	}
.martop5{
	margin-top:5px !important;
	}
select.wc-input{
	-webkit-appearance:menulist !important;
	}
input[type=range] {
  -webkit-appearance: none;
  margin: 18px 0;
  width: 50%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  animate: 0.2s;
  background: #0087cb;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-webkit-slider-thumb {
  border: 1px solid #0087cb;
  height: 20px;
  width: 20px;
  border-radius: 360px;
  background: #00A6EF;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -6px;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  animate: 0.2s;
  background: #0087cb;
  border-radius: 1.3px;
}
input[type=range]::-moz-range-thumb {
  border: 1px solid #0087cb;
  height: 20px;
  width: 20px;
  border-radius: 360px;
  background: #00A6EF;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -6px;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  border-width: 16px 0;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  background: #2a6495;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-fill-upper {
  background: #3071a9;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
}
input[type=range]:focus::-ms-fill-lower {
  background: #3071a9;
}
input[type=range]:focus::-ms-fill-upper {
  background: #367ebd;
}

.cu_color,.cu_resault{
	display:none;
	}
</style>
<div class="percent-wrapper mt-20">




<div class="expend">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    	<div class="resault">
            <p>-webkit-background:linear-gradient(<span class="gd"></span> <span class="c1"></span> <span class="c1v">0%</span>,<span class="c2"></span> <span class="c2v">100%</span>);</p>
            <p>-moz-background:linear-gradient(<span class="gd"></span> <span class="c1"></span> <span class="c1v">0%</span>,<span class="c2"></span> <span class="c2v">100%</span>);</p>
            <p>-ms-background:linear-gradient(<span class="gd"></span> <span class="c1"></span> <span class="c1v">0%</span>,<span class="c2"></span> <span class="c2v">100%</span>);</p>
            <p>-o-background:linear-gradient(<span class="gd"></span> <span class="c1"></span> <span class="c1v">0%</span>,<span class="c2"></span> <span class="c2v">100%</span>);</p>
            <p>background:linear-gradient(<span class="gd"></span> <span class="c1"></span> <span class="c1v">0%</span>,<span class="c2"></span> <span class="c2v">100%</span>);</p>
        </div>
        <div class="cu_resault">
            <p>-webkit-background:linear-gradient(<span class="cu_gd"></span> <span class="cu_c1"></span> <span class="cu_c1v">0%</span>,<span class="cu_c2"></span> <span class="cu_c2v">100%</span>);</p>
            <p>-moz-background:linear-gradient(<span class="cu_gd"></span> <span class="cu_c1"></span> <span class="cu_c1v">0%</span>,<span class="cu_c2"></span> <span class="cu_c2v">100%</span>);</p>
            <p>-ms-background:linear-gradient(<span class="cu_gd"></span> <span class="cu_c1"></span> <span class="cu_c1v">0%</span>,<span class="cu_c2"></span> <span class="cu_c2v">100%</span>);</p>
            <p>-o-background:linear-gradient(<span class="cu_gd"></span> <span class="cu_c1"></span> <span class="cu_c1v">0%</span>,<span class="cu_c2"></span> <span class="cu_c2v">100%</span>);</p>
            <p>background:linear-gradient(<span class="cu_gd"></span> <span class="cu_c1"></span> <span class="cu_c1v">0%</span>,<span class="cu_c2"></span> <span class="cu_c2v">100%</span>);</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    	<div class="gradient-generator">
        	<div class="colorpicker">
            <input type="color" class="wc-input color1" />
            <input type="color" class="wc-input color2" />
            <button class="generate">Generate</button>
            <a href="javascript:void(0);" class="tgcucolor">Switch to Custom Color</a>
            <br />
            <input type="range" class="r1" value="0%" min="0" max="100" />
            <input type="text" class="wc-input martop5 hr1" value="0%" min="0" max="100" readonly /><br />
            <input type="range" class="r2" value="100%" min="0" max="100" />
            <input type="text" class="wc-input martop5 hr2" value="100%" min="0" max="100" readonly /><br />
            <p class="text-bold">Gradient Directions</p>
            <select class="wc-input direction">
                <option value="to right,">right&nbsp;&nbsp;→</option>
                <option value="to left,">left&nbsp;&nbsp;←</option>
                <option value="to bottom," selected="selected">bottom&nbsp;&nbsp;↓</option>
                <option value="to top,">top&nbsp;&nbsp;↑</option>
                <option value="to top right,">top right&nbsp;&nbsp;↗</option>
                <option value="to top left,">top left&nbsp;&nbsp;↖</option>
                <option value="to bottom right,">bottom right&nbsp;&nbsp;↘</option>
                <option value="to bottom left,">bottom left&nbsp;&nbsp;↙</option>
            </select>
            <input type="hidden" class="h_direction"/>
            </div>
            
            <div class="cu_color">
            <input type="text" class="wc-input cu_color1" />
            <input type="text" class="wc-input cu_color2" />
            <button class="cu_generate">Generate</button>
            <a href="javascript:void(0);" class="tgcolorpi">Switch to Color Picker</a>
            <br />
            <input type="range" class="cu_r1" value="0%" min="0" max="100" />
            <input type="text" class="wc-input martop5 cu_hr1" value="0%" min="0" max="100" readonly /><br />
            <input type="range" class="cu_r2" value="100%" min="0" max="100" />
            <input type="text" class="wc-input martop5 cu_hr2" value="100%" min="0" max="100" readonly /><br />
            <p class="text-bold">Gradient Directions</p>
            <select class="wc-input cu_direction">
                <option value="to right,">right&nbsp;&nbsp;→</option>
                <option value="to left,">left&nbsp;&nbsp;←</option>
                <option value="to bottom," selected="selected">bottom&nbsp;&nbsp;↓</option>
                <option value="to top,">top&nbsp;&nbsp;↑</option>
                <option value="to top right,">top right&nbsp;&nbsp;↗</option>
                <option value="to top left,">top left&nbsp;&nbsp;↖</option>
                <option value="to bottom right,">bottom right&nbsp;&nbsp;↘</option>
                <option value="to bottom left,">bottom left&nbsp;&nbsp;↙</option>
            </select>
            <input type="hidden" class="cu_h_direction"/>
            </div>
            
        </div>
    </div>
</div>



</div>
<script>
$(document).ready(function(){
	$(".tgcucolor").click(function(){
		$(".colorpicker").hide();
		$(".resault").hide();
		$(".cu_color").show();
		$(".cu_resault").show();
	});
	$(".tgcolorpi").click(function(){
		$(".cu_color").hide();
		$(".cu_resault").hide();
		$(".colorpicker").show();
		$(".resault").show();
		
	});
   $(".generate").click(function(){
		var color1 = $(".color1").val();
		var color2 = $(".color2").val();		
		$(".resault").css("background","linear-gradient("+color1+","+color2+")");
		$(".c1").html(color1);
		$(".c2").html(color2);
		$(".r1").on('change',function(){
			var r1 = $(".r1").val();
			var r1t = r1+'%';
			$(".hr1").val(r1t);
			var r2t = $(".hr2").val();
			var h_directionval = $(".h_direction").val();
			$(".resault").css("background","linear-gradient("+h_directionval+' '+color1+' '+r1t+"," +color2+ ' '+r2t+ ")");
			$(".c1").html(color1);
			$(".c2").html(color2);
			$(".c1v").html(r1t);
			$(".c2v").html(r2t);
			$(".gd").html(h_directionval);
		});
		$(".r2").on('change',function(){
			var r2 = $(".r2").val();
			var r2t = r2+'%';
			$(".hr2").val(r2t);
			var r1t = $(".hr1").val();
			var h_directionval = $(".h_direction").val();
			$(".resault").css("background","linear-gradient("+h_directionval+' '+color1+' '+r1t+"," +color2+ ' '+r2t+ ")");
			$(".c1").html(color1);
			$(".c2").html(color2);
			$(".c1v").html(r1t);
			$(".c2v").html(r2t);
			$(".gd").html(h_directionval);
		});
		$(".direction").on('change',function(){
			var r1 = $(".r1").val();
			var r2 = $(".r2").val();
			var r1t = $(".hr1").val();
			var r2t = $(".hr2").val();
			var directionval = $(".direction").val();
			$(".h_direction").val(directionval);
			$(".resault").css("background","linear-gradient("+directionval+' '+color1+' '+r1t+"," +color2+ ' '+r2t+ ")");
			$(".c1").html(color1);
			$(".c2").html(color2);
			$(".c1v").html(r1t);
			$(".c2v").html(r2t);
			$(".gd").html(directionval);
		});
	});
	// Coustom Color Generator
	$(".cu_generate").click(function(){
		var color1 = $(".cu_color1").val();
		var color2 = $(".cu_color2").val();		
		$(".cu_resault").css("background","linear-gradient("+color1+","+color2+")");
		$(".cu_c1").html(color1);
		$(".cu_c2").html(color2);
		$(".cu_r1").on('change',function(){
			var r1 = $(".cu_r1").val();
			var r1t = r1+'%';
			$(".cu_hr1").val(r1t);			
			var r2t = $(".cu_hr2").val();
			var h_directionval = $(".cu_h_direction").val();
			$(".cu_resault").css("background","linear-gradient("+h_directionval+' '+color1+' '+r1t+"," +color2+ ' '+r2t+ ")");
			$(".cu_c1").html(color1);
			$(".cu_c2").html(color2);
			$(".cu_c1v").html(r1t);
			$(".cu_c2v").html(r2t);
			$(".cu_gd").html(h_directionval);
		});
		$(".cu_r2").on('change',function(){
			var r2 = $(".cu_r2").val();
			var r2t = r2+'%';
			$(".cu_hr2").val(r2t);
			var r1t = $(".cu_hr1").val();
			var h_directionval = $(".cu_h_direction").val();
			$(".cu_resault").css("background","linear-gradient("+h_directionval+' '+color1+' '+r1t+"," +color2+ ' '+r2t+ ")");
			$(".cu_c1").html(color1);
			$(".cu_c2").html(color2);
			$(".cu_c1v").html(r1t);
			$(".cu_c2v").html(r2t);
			$(".cu_gd").html(h_directionval);
		});
		$(".cu_direction").on('change',function(){
			var r1 = $(".cu_r1").val();
			var r2 = $(".cu_r2").val();
			var r1t = $(".cu_hr1").val();
			var r2t = $(".cu_hr2").val();
			var directionval = $(".cu_direction").val();
			$(".cu_h_direction").val(directionval);
			$(".cu_resault").css("background","linear-gradient("+directionval+' '+color1+' '+r1t+"," +color2+ ' '+r2t+ ")");
			$(".cu_c1").html(color1);
			$(".cu_c2").html(color2);
			$(".cu_c1v").html(r1t);
			$(".cu_c2v").html(r2t);
			$(".cu_gd").html(directionval);
		});
	});
});
</script>
</body>
</html>