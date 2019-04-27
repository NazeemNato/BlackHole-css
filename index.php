
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	
	body {
	background: #000;
	display: flex;
	height: 100vh;
	align-items: center;
	justify-content: center;
	filter: blur(18px);
}

a, a:before {
	display: flex;
	border-radius: 60%;
	animation: anim 5s linear infinite;
}

@keyframes anim {
	0% {transform: rotate(0deg)}
  100% {transform: rotate(-360deg)}
}

a {
	width: 50vh;
	height: 50vh;
	box-shadow: 1vh 0 3vh 3vh #f50, 
       inset -2vh 0 3vh 4vh #f80,
             -1vh -1vh 30vh 0 #f60;
}

a:before, a:after {
	content: '';
	background: #fff;
	position: relative;
  top: 6vh;
}

a:before {
  width: 2vmin;
  height: 3vmin;
  left: 20vmin;
  box-shadow: #f4eb42 0 0 2vh 2vh,
              #f4eb42 2vh 4vh 2vh 0.3vh;
}
 

</style>
    <meta charset="utf-8">

 

<title>Black Hole by Nazeem</title>
<a></a>


