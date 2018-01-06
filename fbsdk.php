<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '270535600061970',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
//  };
  
  
  FB.getLoginStatus(function(response){
	  if(response.status === 'connected'){
		  document.getElementById('show').innerHTML = "YUP... ";
	  }
	  else if(response.status === 'not_authorized')
	  {
		  document.getElementById('show').innerHTML = "We are not logged in";
	  } else
	  {
		  document.getElementById('show').innerHTML = "We are not logged into Facebook";
	  }
	  
  });
};
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   
function login(){
      FB.login(function(response){
	  if(response.status === 'connected'){
		  document.getElementById('show').innerHTML = "YUP... ";
	  }
	  else if(response.status === 'not_authorized')
	  {
		  document.getElementById('show').innerHTML = "We are not logged in";
	  } else
	  {
		  document.getElementById('show').innerHTML = "We are not logged into Facebook";
	  }
	  
  });
}
</script>
<div id="show"></div>
<button onclick="login()" id="logi">LOGIN</button>
</body>
</html>