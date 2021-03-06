	a:link, a:visited {text-decoration: none;}
	a:focus, a:hover, a:active {text-decoration:none;}
div.line {
	height: 25px;
	padding: 0;
	margin: 0;
	background-color: #0c081f;
	z-index:99;
}
div.utility { 
		top: 10px;
		background: linear-gradient(to bottom right, #f8f8ff 0%, #263238 100%);
		margin-bottom: 5px;
		height: 190px;
		z-index: 99;
	}
	div.utility .login, .register {
		position: absolute;
		top: 0px;
		padding: 12px 14px;
		font-size: 16px;
		font-weight: bold;
		background-color: #f8f8ff;
		border-radius: 5px;
		display: block;
		min-height: 20px;
	}
	
	div.utility a {
		color: #0c081f;
	}
	div.utility p.register {
		right: 20px;
	}
	div.utility p.login {
		right: 110px;
	}
	div.nav_bar {
		top: 250px;
		width: 100%;
	}

	#nav_bar ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		background-color: #120c2f;
		
	}
	
	#nav_bar li {
		width: 25%;
		float: left;
		letter-spacing: 0.1em;
		list-style-type:none;
		background-color: #120c2f;
		border: 4px solid #120c2f;
		box-sizing: border-box;
	}
	
	
	<?php
		
		if(!empty($_SESSION['user'])){ 
      echo '#nav_bar li {
		width: 20%;
		float: left;
		letter-spacing: 0.1em;
		list-style-type:none;
		background-color: #120c2f;
		border: 4px solid #120c2f;
		box-sizing: border-box;
	}'
  }?>
  
  
	#nav_bar li a, .dropbtn {
		display: inline-block;
		padding: 14px 16px;
		font-size: 16px;
		cursor: pointer;
		text-align: middle;
		border-radius: 5px;
		font-weight: bold;
		text-transform: uppercase;
		min-width: 283px;
	}
	
	#nav_bar li a:hover, .dropdown:hover {
		color: #120c2f;
		background-color: #f8f8ff;
		width: 100%;
		font-style: underline;
	}
	#nav_bar li a {
		display: block;
		text-align: center;
		color: #f8f8ff;
		width: 100%;
		padding: 14px 16px;
		box-sizing: border-box;
	}
	
	#nav_bar li.dropdown {
		/*^^ puts dropdown content below dropdown button*/
		position: relative;
		display: inline-block;
		z-index: 99;
		
	}
	
	#nav_bar .dropdown-content {
		/*holds actual dropdown menu*/
		background-color: #120c2f;
		display: none;
		position: absolute;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		width: 100%;
		box-sizing: border-box;
		/*makes width of dropdown content as wide as the button*/
	}
	#nav_bar.dropdown-content a {
		color: #f8f8ff;
		padding: 10px;
		text-decoration: none;
		display: block;
	}
	
	#nav_bar .dropdown-content a:hover {
		background-color: #ECEFF1;
	}
	
	#nav_bar .dropdown:hover .dropdown-content {
		display: block;
	}
	