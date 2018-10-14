<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 

integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);
	a,a:hover{
		text-decoration: none;
	}
	*{
		font-family: 'Open Sans', sans-serif;
	}
	.outer-container{
		padding:0px;
		width:100%;
		top:76px;
		position:relative;
	}
	.category-box{
		padding:0px;
		margin-top:5px;
		padding-left:50px;
		padding-right:50px;
		padding-top:100px;
		padding-bottom:100px;
		/*border:1px solid #cccccc;*/
		text-align:center;
		color:white;	
		border-radius:5px;					
	}	
	.category-box:hover{
		opacity: 0.5;
    	filter: alpha(opacity=40)				
	}
	
	.header{
		text-align:center;
		border-bottom:1px solid;
		box-shadow: 2px 2px 18px #222f3e;
		position:fixed;
		height:70px;
		background:#222f3e;
		z-index:10;
		color:white;
	}

	@media only screen and (min-width: 768px) {
	    .left-nav{
			border-right: 1px solid #cccccc;
			height:100vh;
			position:fixed;
			background-color: #3b607c;
			margin-top:-6px;
			color:white;
		}
		.categories-div{
			margin-left:230px;
		}
		.category-box{
			padding:0px;
			margin-top:5px;
			padding-left:50px;
			padding-right:50px;
			padding-top:120px;
			padding-bottom:120px;
			/*border:1px solid #cccccc;*/
			text-align:center;
			color:white;	
			border-radius:5px;					
		}	
	}
	@media only screen and (min-width: 300px) {
	    .left-nav{
			border-right: 1px solid #cccccc;
			background-color: #3b607c;
			color:white;
		}
	}
	

	#web1{
		background-image: url("https://png.pngtree.com/thumb_back/fw800/back_pic/00/14/98/695677d4bfd4ebf.jpg");
	}
	#web2{
		background-image: url("https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&h=350");
	}
	#web3{
		background-image: url("https://images.unsplash.com/photo-1498550744921-75f79806b8a7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b0f6908fa5e81286213c7211276e6b3d&w=1000&q=80");
	}
	.row{
		margin-left: 0;
  		margin-right: 0;
	}
	[class*="col-"],  /* Elements whose class attribute begins with "col-" */
	[class^="col-"] { /* Elements whose class attribute contains the substring "col-" */
	  padding-left: 7px;
	  padding-right: 5px;
	}
</style>
</head>
<body>
	<div class="container-fluid header">
		<a href="index.php"><h1 style="padding-top:10px;color:white">Ad-Mela</h1></a>
	</div>
	
	
<div class="container-fluid outer-container">

<div class="row">

<div class="col-md-2 left-nav">	
	<div style="text-align:center;padding-top:20px">				
			<h2 style="font-size:27px">E - COMMERCE<h2>
	</div>
	<hr>
	<div style="text-align:center">
			<p style="font-size:20px">Filters</p>
	</div>
	
</div>

<div class="col-md-10 categories-div">
	<div class="row">
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web1">
				<p>meagl</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web2">
				<p>reddit</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web3">
				<p>facebook</p>
			</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web1">
				<p>yahoo</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web2">
				<p>tumblr</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web3">
				<p>stumblupon</p>
			</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web1">
				<p>Website1</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web2">
				<p>Website2</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web3">
				<p>Website3</p>
			</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web1">
				<p>Website1</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web2">
				<p>Website2</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web3">
				<p>Website3</p>
			</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web1">
				<p>Website1</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web2">
				<p>Website2</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web3">
				<p>Website3</p>
			</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web1">
				<p>Website1</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web2">
				<p>Website2</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web3">
				<p>Website3</p>
			</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web1">
				<p>Website1</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web2">
				<p>Website2</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="category-box" id="web3">
				<p>Website3</p>
			</div>
			</a>
		</div>
	</div>
	
</div>
		
</div>


</div>	
</body>
</html>