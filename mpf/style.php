<!DOCTYPE html>
<html>
<style type="text/css">
        *{
        margin: 0;
        padding: 0;
        }
        .body{
        min-height: 100vh;
        width: 100%;
        background-image: url("img/bg.jpg");
        background-position: center;
        background-size: cover;
        background-position: relative;
        }
        nav{
        display: flex;
        padding: 2% 6%;
        justify-content: space-between;
        align-items: center;

        }
        nav img{
        width: 300px;
        }
        .navlink{
        flex: 1;
        text-align: right;
        }
        .navlink ul li{
        list-style: none;
        display: inline-block;
        padding: 8px 12px;
        position: relative;
        }
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 30%;
			background-color: white;
			}
        #button{
			padding:7px;
			border-radius: 50px;
			width: 100px;
			color: blue;
			background-color: lightblue;
			border: solid thin #aaa;
			opacity: 1;
			transistion: 0.3s;
			}
        #button:hover{

			opacity: 0.6;
			}
		#box{
            border-radius: 20px;
			background-color: grey;
			margin: 100px;
			width: 500px;
			padding: 20px;
			}

	</style>
</html>
