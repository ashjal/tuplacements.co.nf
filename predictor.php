<!DOCTYPE html>
<!--
    Free Responsive Template by templatemo
    http://www.templatemo.com
-->
<html>
  <head>
    <title>Predictor</title>
    <meta name="keywords" content="smoothy, responsive bootstrap, one page, green, white, free html5 template, templatemo" />
	<meta name="description" content="Smoothy is free HTML5 one-page template for multi-purpose that is based on responsive bootstrap framework." />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
   	<link rel="stylesheet" href="css/templatemo_misc.css">
   	<style type="text/css">
   	label
   	{font-size: 16px;}
    img.pics:hover
{
  -webkit-transform: scale(1.2,1.2);
    -moz-transform:scale(1.2,1.2);
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;
}
input[type='text']
{
-webkit-border-radius: 5px; 
    -moz-border-radius: 5px; 
    border-radius: 5px; 
    border: 1px solid #848484; 
    outline:0; 
    height:30px; 
    width: 375px;
    padding:2px;
     }
     label
     {
      cursor:pointer;
     }
     #he
     {
      font-weight:bold;
      font-size: 30px;
      padding:20px;
     }
	 #he2
	 {
	    font-size : 20px ;
		padding : 20px;
	}
   	</style>
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<!--/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Companies', '% of students placed'],
          ['Dream Companies [ Microsoft , De Shaw ,Informatica ,Hikari Tsushin , Freescale ...] ',     22],
          ['Dream Companies(mid range packages) [Samsung , WindShuttle  , MAQ , ThoughtWorks ...]',     41 ],
          ['Non -  Technical Dream Companies [Deloitte , RBS , Amdocs ...]',  17],
          ['Non - Dream Companies [Tcs ,  Infosys , Exl ,  Accenture  ...] ', 52],
        ]);

        var options = {
          title: 'Placement trends ',
		  
          is3D: true,
		  slices: {
            0: { color: '#72b842' },
            1: { color: '#AC58FA' },
			2: { color: '#FF0000' },
			3 : { color: '#2E2EFE'}
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

  </head>
  <body>
    <header>
    <!-- start menu -->
        <div id="templatemo_home">
    	<div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div id="top-menu" >
            <nav class="mainMenu">
            
              <a href="./index.html"><h1>Thapar Placements</h1></a>
              </nav>
            </div>
          </div>
          <div class="col-sm-9 col-md-9 templatemo_col9" >
          	<div id="top-menu">
            <nav class="mainMenu">
             
              <ul class="nav">
                <li><a class="menu" href="./index.html">Home</a></li>
                <li><a class="menu" href="./index.html">About</a></li>
                <li><a class="menu" href="./index.html">Team</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <!-- end menu -->
            
  </header>
  	<div class="templatemo_lightgrey_about" id="templatemo_about">
	<div class="container">
      <table align="center" width="100%">
                        <tr>
                        <td class="xx" align="center "height="250" bgcolor="#2c3e50" width="250"><a  href="./mockpapers.php">MockPapers</a></td>
                        <td class="xx" align="center "height="250" bgcolor="#2c3e50" width="250"><a href="./quiz.php">Quiz</a></td>
                        <td class="xx" align="center "height="250" bgcolor="#2c3e50" width="250"><a  href="./placement.php">Placement Predictor</a></td>
                        <td class="xx" align="center "height="250" bgcolor="#2c3e50" width="250"><a href="./question.php?page=1">Interview Questions</a></td>
                        </tr>
                </table> 
     </div>
    </div>


<div style="margin:20px;padding:30px;">
<?php
    if(isset($_POST['cgpa'])&&isset($_POST['projects'])&&isset($_POST['internships'])&&isset($_POST['societies'])&&isset($_POST['nontechnical'])&&isset($_POST['contests']))
	 {
       $cgpa = $_POST['cgpa'] ;
	   $projects  =  $_POST['projects'] ; 
	   $internships  =  $_POST['internships'] ; 
       $societies  =   $_POST['societies'] ;
       $nontechnical = $_POST['nontechnical'] ;
	   $contests  = $_POST['contests'] ;
	   $java  =  isset($_POST['java'])? 1:0 ;
       $php   =  isset($_POST['php']) ? 1:0 ;
       $python   =  isset($_POST['python']) ? 2:0 ;
       $ruby   =  isset($_POST['ruby']) ? 2:0 ;
       $jsp   =  isset($_POST['jsp']) ? 1:0 ;
       $ajax   =  isset($_POST['ajax']) ? 1:0 ;
       $hacking   =  isset($_POST['hacking']) ? 2:0 ;
       $node   =  isset($_POST['node']) ? 2:0 ;
       $ccna   =  isset($_POST['ccna']) ? 1:0 ;
       $machine   =  isset($_POST['machine']) ? 2:0 ; 
	   $dotnet   =  isset($_POST['dotnet']) ? 1:0 ;
	   $nosql   =  isset($_POST['nosql']) ? 2:0 ;
	   $android   =  isset($_POST['android']) ? 1:0 ;
	   $research   =  isset($_Post['research']) ?3:0;
	   $company = "A";
	   $langsum =  $java  +  $php + $python +  $ruby  +  $jsp +  $ajax  +  $hacking  +  $node +  $ccna +  $machine +  $dotnet +  $nosql +  $android + $research ;
	   if($cgpa<=8.04)
	   {
	     if($cgpa<6)
		 {
		   $company  =  "D" ;
											   echo "<div id='he'>Presently  your skills and resume  suggest you might be placed in a<br> NON  DREAM  company (package of about 4 - 6 Lacs P.A.)</div>" ;
                                                 echo "<div id = 'he2'>To be able to perform better in your placement what you need to look out of the following from here on </div><ul>" ;
												 echo  "<b><li> To target a non -technical  dream company from here on you need to increase your participation in non technical societies and events .<br> Also try improve your CGPA</li><br>";
												 echo  "<b><li> To target a mid range dream company you have to  improve your CGPA .<br> Also you could focus more on projects as an alternative  to join a mid range dream company </li><br>"  ;
  												 echo  "<b><li> To target a dream company you have to look out for  an internship and improve your CGPA  .<br> You also need to  start participating in coding competitions to improve your coding skills </li></ul>" ;
									     
		 }
		 else
		 {
	    if($internships<=0)
		{
	           if($projects<=2)
		       {
		                
						       if($societies<=0)
							   {
							        if($cgpa<=7.51)
									{
									     if($nontechnical<=3)
										 {
										         $company  =  "D";
												 echo "<div id='he'>Presently  your skills and resume  suggest you might be placed in a<br> NON  DREAM  company (package of about 4 - 6 Lacs P.A.)</div>" ;
                                                 echo "<div id = 'he2'>To be able to perform better in your placement what you need to look out of the following from here on </div><ul>" ;
												 echo  "<b><li> To target a non -technical  dream company from here on you need to increase your participation in non technical societies and events as well. <br> Also try improve your CGPA</li><br>";
												 echo  "<b><li> To target a mid range dream company you have to work in some technical societies first and also improve your CGPA .<br> Also you could focus more on projects as an alternative to join a mid range dream company </li><br>";  
  												 echo  "<b><li> To target a dream company you have to look out for  an internship and improve your CGPA  .<br> You also need to  start participating in coding competitions to improve your coding skills</li> </ul>" ;
										 } 										 
	                                     else 
                                         {
                                              $company  =  "C";
											     echo "<div id='he'>Presently  your skills and resume  suggest you might be placed in a<br> non technical DREAM   company (package of about  6  - 8 Lacs P.A.)</div>" ;
                                                 echo "<div id = 'he2'>To be able to perform better in your placement what you need to look out of the following from here on </div><ul>" ;
												 echo  "<b><li> To target a mid range dream company you have to work in some technical societies first and also improve your CGPA .<br> Also you could focus more on projects as an alternative  to join a mid range dream company </li><br>";  
  												 echo  "<b><li> To target a dream company you have to look out for  an internship and improve your CGPA  .<br> You also need to  start participating in coding competitions to improve your coding skills</li> </ul>" ;


											  
									     }
								    }
									else 
									{
									      $company  =  "C" ;
										    echo "<div id='he'>Presently  your skills and resume  suggest you might be placed in a<br>   non technical  DREAM company( package of about  6  - 8 Lacs P.A.)</div>" ;
                                            echo "<div id = 'he2'>To be able to perform better in your placement what you need to look out of the following from here on </div><ul>" ;
										     echo  "<b><li> To target a mid range dream company you have to work in some technical societies first and also improve your CGPA .<br> Also you could focus more on projects as an alternative to move on to join a mid range dream company </li><br>" ;  
  										     echo  "<b><li> To target a dream company you have to look out for  an internship and improve your CGPA  .<br> You also need to  start participating in coding competitions to improve your coding skills</li> </ul>" ;

										  
								    }
							    }
								else
								{
								         if($cgpa<=7.06)
										 {
										       $company  =  "D" ;
											   echo "<div id='he'>Presently  your skills and resume  suggest you might be placed in a<br> NON  DREAM  company (package of about 4 - 6 Lacs P.A.)</div>" ;
                                                 echo "<div id = 'he2'>To be able to perform better in your placement what you need to look out of the following from here on </div><ul>" ;
												 echo  "<b><li> To target a non -technical  dream company from here on you need to increase your participation in non technical societies and events as well.<br> Also try improve your CGPA</li><br>";
												 echo  "<b><li> To target a mid range dream company you have to  improve your CGPA .<br> Also you could focus more on projects as an alternative  to join a mid range dream company </li><br>"  ;
  												 echo  "<b><li> To target a dream company you have to look out for  an internship and improve your CGPA  .<br> You also need to  start participating in coding competitions to improve your coding skills </li></ul>" ;
									     }
										 else
										 {
										       if($cgpa>7.51)
											   {
											        $company  =  "B" ;
													 echo "<div id='he'>Presently  your skills and resume  suggest you might be placed in a<br>  mid range DREAM  company (package of about  6  -  8 Lacs P.A.)</div>" ;
                                                 echo "<div id = 'he2'>To be able to perform better in your placement what you need to look out of the following from here on </div><ul>" ;
												 echo  "<b><li> To target a dream company you have to look out for  an internship and improve your CGPA  .<br> You also need to  start participating in coding competitions to improve your coding skills</li> <br></ul>" ;
									    
													
													
											   }
											   else 
											   {

 											   $company  =  "D" ;
											   echo "<div id='he'>Presently  your skills and resume  suggest you might be placed in a<br> NON  DREAM  company (package of about 4 - 6 Lacs P.A.)</div>" ;
                                                 echo "<div id = 'he2'>To be able to perform better in your placement what you need to look out of the following from here on </div><ul>" ;
												 echo  "<b><li> To target a non -technical  dream company from here on you need to increase your participation in non technical societies and events as well .<br> Also  try improve your CGPA</li><br>";
												 echo  "<b><li> To target a mid range dream company you have to  improve your CGPA .<br> Also you could focus more on projects as an alternative  to join a mid range dream company </li><br>"  ;
  												 echo  "<b><li> To target a dream company you have to look out for  an internship and improve your CGPA  .<br> You also need to  start participating in coding competitions to improve your coding skills</li></ul> " ;
									    
										        	   
											   
											   
											   
											   
											   }
										 }
								}
				}
				else
                {
                        if($nontechnical<=0)
                        {
						$company  =  "D" ;
                                                 echo "<div id='he'>Presently  your skills and resume  suggest you might be placed in a<br> NON  DREAM  company ( package of about 4 - 6 Lacs P.A.)</div>" ;
                                                 echo "<div id = 'he2'>To be able to perform better in your placement what you need to look out of the following from here on </div><ul>" ;
												 echo  "<b><li> To target a non -technical  dream company from here on you need to increase your participation in non technical societies and events as well <br>. Also try improve your CGPA</li><br>";
												 echo  "<b><li> To target a mid range dream company you have to  improve your CGPA .<br> Also you could focus more on projects as an alternative  to join a mid range dream company </li><br>"  ;
  												 echo  "<b><li> To target a dream company you have to look out for  an internship and improve your CGPA  .<br> You also need to  start participating in coding competitions to improve your coding skills</li><br></ul> " ;
									    						
						}
						else 
						{
						$company  =  "B" ;
						 echo "<div id='he'>Presently  your skills and resume  suggest you might be placed in a<br> mid range  DREAM  company (package of about  6  - 8  Lacs P.A.)</div>" ;
                                                 echo "<div id = 'he2'>To be able to perform better in your placement what you need to look out of the following from here on </div><ul>" ;
												 
  												 echo  "<b><li> To target a dream company you have to look out on working on more projects </li></ul>  ";
									    
						
					%0