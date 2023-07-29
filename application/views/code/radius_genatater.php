<style>
.wrb{
	width:500px;
	height:500px;
	background:#f20c86;
	transition:.3s;
	}
.btn{
	padding:8px 20px;
	height:35px;
	width:100px;
	float:right;
	}
.input{
	margin:0 !important;
	width:calc(100% - 115px) !important;
	float:left;
	}
.try p{
	color:#06828c;
	}
.wrp{
	color:#f20c86;
	}
.px{
	color:#00008b;
	}
@media (max-width:1140px) {
.wrb{
	width:100%;
	}
}
@media (max-width:960px) {
.wrb{
	width:100%;
	height:400px;
	}
}
@media (max-width:530px) {
.btn{
	padding:8px 20px;
	height:35px;
	float:none;
	width:auto;
	margin-top:10px;
	}
.input{
	width:100% !important;
	float:none;
	}
}
</style>

<div class="percent-wrapper mt-20">
<div class="expend">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    	<input type="number" class="wc-input input" maxlength="360" placeholder="Plase Enter Radius Number. Maximum Length 360px">
        <button class="btn btn-blue text-bold">Genatater</button>
        <div class="clear"></div>
        <p>Copy This Radius Code and use Your Project.</p>
        <section class="try"><code>
        <p>-webkit-border-radius: <span class="wrp"> </span><span class="px">px;</span></p>
        <p>-moz-border-radius: <span class="wrp"> </span><span class="px">px;</span></p>
        <p>-ms-border-radius: <span class="wrp"> </span><span class="px">px;</span></p>
        <p>-o-border-radius: <span class="wrp"> </span><span class="px">px;</span></p>
        <p>border-radius: <span class="wrp"> </span><span class="px">px;</span></p></code>
        </section>
        <p class="text-italic"><strong>Note:</strong> Full Rounded / Circle Shape in 360px . Otherwise Box is Not Full Rounded / Circle.</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div class="wrb"></div></div>
	</div>
    
    
</div>



</body>
</html>
