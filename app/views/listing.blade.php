<!-- {{ Form::open(array('post' => 'ListingController@create', 'files' => true))}}
	{{Form::label('image', 'Image:')}}

	{{ Form::file('image')}}

	{{Form::submit('upload')}}
{{ Form::close()}} -->
@extends('layout.main')

@section('content')

	<!DOCTYPE html>
	<html lang="en">

	<body>
	    <!-- Main Content -->
	    <div class="container">
	        
	      <h2 class="post-title">
	                        Womens River Island Jacket
	      </h2>
	                    <h3 class="post-subtitle">
	                        Size: 10
	                    </h3>
	                                   
	      <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/coat1.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">
	        <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/coat2.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">
	       <fieldset>
	                 <label>Value: 120</label>
	              </fieldset>
	            <span class="ad_view_info_cell">Make an offer:</span>
	            <input type="text" class="text euro_price" value="€" id="offer" name="offer">
	            <input type="submit" class="base_action_button ask_question" value="Place offer">
	        </form>
	    </span>
	    <fieldset>
	    <span class="ad_view_info_cell">Make a Swap:&#160;&#160;</span>
	            <input type="text" class="text euro_price" value="URL:" id="offer" name="offer">
	            <input type="submit" class="base_action_button ask_question" value="Place Swap">
	        </form>
	    </span>
	</fieldset>
	<br>
	    <fieldset>
	        <table style="width:80%">
	  <tr>
	    <td>Seller:</td>
	    <td>lilman253  <span class="star_container">
	                <img class="user_star" src="http://c1.adsimg.com/i/star_ruby.png" alt="A star">
	        </span>
	        <img alt="This user is a verified user of Adverts.ie" src="http://c3.adsimg.com/i/user_silver_shield_2_sm.png" class="user_badge sms-badge-tooltip smi_ad_desc">
	    </span></td>      
	  </tr>
	  <tr>
	    <td>Location:</td>
	    <td>Dublin</td>        
	  </tr>
	  <tr>
	    <td>Entered/Renewed:</td>
	    <td>09/12/2014 1:38 pm (3 hours ago)</td>        
	  </tr>
	  <tr>
	    <td>Ad Views:</td>
	    <td>43</td>        
	  </tr>
	</table>

	</div>
	</div>
	<br>
	   <h3 class="post-subtitle">
	                        Description:
	                    </h3>
	        <fieldset>
	        Womens River Island jacket, Only worn once. Looking to swap or sell as the size isn't completely right. Will swap for similar jacket in a medium, or sell for €120. 
	         </fieldset>
	</fieldset>

	<!-- begin htmlcommentbox.com -->
	 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
	 <link rel="stylesheet" type="text/css" href="http://www.htmlcommentbox.com/static/skins/default/skin.css" />
	 <script type="text/javascript" language="javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={  };} (function(){s=document.createElement("script");s.setAttribute("type","text/javascript");s.setAttribute("src", "http://www.htmlcommentbox.com/jread?page="+escape((window.hcb_user && hcb_user.PAGE)||(""+window.location)).replace("+","%2B")+"&opts=470&num=10");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
	<!-- end htmlcommentbox.com -->

	

	</body>

	</html>

@stop


