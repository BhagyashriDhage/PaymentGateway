<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box ;
    font-family: 'Montserrat', sans-serif;
}
.row{
    margin-left: 0 !important; 
    margin-right: 0!important;
}

.nav_style{
    background-color: rgb(10, 1, 1);
}

.nav_style a{
    color: white;
}

/* .navbtn{
    background-color: #58f51f00!important;
} */
/*/// main header////*/

.main_header{
    height: 450%;
    width: 100%;

}
.right h1{
    font-size: 3rem;
}
.left img{
    animation: heatbeat 5s linear infinite;
	z-index:1;
}
@keyframes heatbeat
 {
    0%
    {
        transform: scale( .75);
    }
    20%
    {
        transform: scale( 1);
    }
    0%
    {
        transform: scale( .75);
    }
    40%
    {
        transform: scale( .75);
    }
    60%
    {
        transform: scale( 1);
    }
    80%
    {
        transform: scale( .75);
    }
    100%
    {
        transform: scale( .75);
    }
}
/*/////////////////////About scrtion///////////////////*/

.img img{
    height: 650%;
    width: 100%;
transition: 1s;
moz-transition: 0.2s ease-out;
   ms-transition: 0.2s ease-out;
   o-transition: 0.2s ease-out;
}

.img img:hover{
		transform: scale(1.3);
		z-index: 2;
		
	}

.p{
    color: white;
}
.sub_saction{
    background-color:rgb(10, 1, 1) ;
}
.about_res{
    margin-left:0!important
}

/*/////////////////////footer///////////////////*/

.footer_style{
background-color: #B71DDE!important;
}


.footer_style p{
 margin-bottom: 0!important;
}
/*/////////////////////icons///////////////////*/
.container_div{
height: 10vh;
display: flex;
justify-content: center;
align-items:center;
margin: 25px;;

}
.container_div a{
height: 100px;
width:100px;
background-color: rgb(10,1,1);
border-radius:50px;
text-align:center;
margin:10px;
box-shadow:1px 4px 2px 2px #ff0000;
line-height:110px;
z-index:1;
}
a i{
    transition:all 0.3s linear;
}
a:hover i{
    transform:scale(1.4);
}
.fa-instagram{
    color:#e84393;
}
.fa-linkedin{
    color:#e84118;
}
.fa-whatsapp{
    color:rgb(20, 220, 53);
}


</style>