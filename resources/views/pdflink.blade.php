<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<title></title>

</head>
<body>
<div>
    <div class="container mt-5" style="display:block;margin:0 auto;">
    	 <form class="col-md-6 offset-md-3" size="10" action="{{ route('attachmail/send') }}" method="POST" enctype="multipartform.data">
	
		 @csrf
		
		 <input type="email" name="femail" style="width:600px"  placeholder="enter email" class="form-control"  autofocus required/>
		<br><br>
		 
		 	 <div class="mb-2">
		 <button type="submit" style="width:600px" class=" btn btn-success btn-lg btn-block">Result Through Email</button>
		 </div><br><br>
	
		</form>
   
	
	
	
	
	
    	 <form class="col-md-6 offset-md-3" action="{{ route('attachmail/download') }}" method="GET" enctype="multipartform.data" >
	@csrf
		
		  <div class="mb-2">
		 <button type="submit" class="btn fa fa-download btn-success btn-lg btn-block">Check and Download</button>
		 </div>
		
	
		</form>
    </div>









	 
	
</body>
</html>
