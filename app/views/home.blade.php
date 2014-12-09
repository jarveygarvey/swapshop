@extends('layout.main')



@section('content')


    

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link type="text/css" href="/_beta/css/fontface.css?v=20141007" rel="stylesheet" media="screen" />
    <link type="text/css" href="/_beta/css/mobile-portrait.css?v=20141007" rel="stylesheet" media="screen" />
    <link type="text/css" href="/_beta/css/mobile-landscape.css?v=20141007" rel="stylesheet" media="screen and (min-width: 480px)" />
    <link type="text/css" href="/_beta/css/tablet.css?v=20141007" rel="stylesheet" media="screen and (min-width: 700px)" />     
    <link type="text/css" href="/_beta/css/desktop.css?v=20141008" rel="stylesheet" media="screen and (min-width: 960px)" /> 
    <link type="text/css" href="/_beta/css/all-site-global.css?v=20141007" rel="stylesheet" media="screen" /> 
    <link type="text/css" href="/_beta/css/new_snow.css?v=5" rel="stylesheet" media="screen" />  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--></head>

<body>



    <nav>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="float:left; width:100%;">
                <ul class="nav navbar-nav navbar-right" color="white">
                    <li >
                        <a href="{{URL::route('home')}}"> + Add item</a>
                    </li>
                    <li>
                        <a href="{{URL::route('home')}}">Start swapping</a>
                    </li>
                    <li>
                        <a href="{{URL::route('home')}}">Go to my Profile</a>
                       <!--  <a href="contact.html"><u>Sign In</u> / <u>Log Out</u></a> -->
                    </li>
                    <li>
                        <a href="{{URL::route('home')}}">Dresses</a>
                    </li>
                    <li>
                        <a href="{{URL::route('home')}}">Tops</a>
                    </li>
                    <li>
                        <a href="{{URL::route('home')}}">Pants</a>
                    </li>
                    <li>
                        <a href="{{URL::route('home')}}">Shoes</a>
                    </li>
                    
                    <li>
                        <a href="{{URL::route('home')}}">Bags & Accessories</a>
                    </li>
                    <li>
                        <a href="{{URL::route('home')}}">  Kids </a>
                    </li>
                    <li>
                        <a href="{{URL::route('home')}}">  Mens 
                            <!-- <ul class="sub-menu">
                                <li id="menu-item-673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-673"><a href="http://www.paulgarveyagencies.ie/azor-footwear-smart/">Smart</a></li>
                                <li id="menu-item-671" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-671"><a href="http://www.paulgarveyagencies.ie/azor-footwear-boots/">Boots</a></li>
                                <li id="menu-item-672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-672"><a href="http://www.paulgarveyagencies.ie/azor-footwear-casual/">Casual</a></li>
                                <li id="menu-item-670" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-670"><a href="http://www.paulgarveyagencies.ie/azor-footwear-boys/">Boys</a></li>
                            </ul> -->
                        </a>
                    </li>
                </ul>
            </div>
    </nav>
<br><br><br>
    <!-- Main Content -->
    <div class="container">
        
      <h2 class="post-title">
                        Recently Added Jackets in your Size
      </h2>
                    <h3 class="post-subtitle">
                        Size Range: 8 - 12 
                    </h3>
                                   
      <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/zara1A.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €70<br>user1 <br>★★★☆☆<br></p>
                  <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/zara2.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €50<br>user2 <br>★★★★★<br></p>
                  <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/zara3.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €90<br>user3 <br>★★★★☆<br></p>
                  <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/zara5.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €80<br>user4 <br>★★★★★<br></p>
      <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/zara6.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €70<br>user5 <br>★★★☆☆<br></p>
</div>
                <hr>
                <div class="container">
                    <a href="post.html">
                        <h2 class="post-title">
                            Recently Added Dresses in your size...
                        </h2>
                        <h3 class="post-subtitle">
                            Size Range: 8 - 12 
                        </h3>
                        
                        <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/dress1.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €20<br>userX <br>★★★★★<br></p>
                        <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/dress2.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €60<br>userY <br>★★★☆☆<br></p>
                        <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/dress3.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €30<br>userZ <br>☆☆☆☆☆<br></p>
                        <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/dress4.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €50<br>userQ <br>★★★★★<br></p>       
                        <p style="float: left; width: 200px; margin-left: 5px; margin-bottom: 5px; text-align: center: font-size: 8pt;"><img src="img/dress5.jpg" id="Image7"alt="Lipsy red dress" style="width: 100%;">Value: €40<br>userW <br>★★★★★<br></p>  
                </div>  

@stop