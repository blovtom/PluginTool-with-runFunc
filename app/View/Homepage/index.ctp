<!doctype html>
<html>
<head>
	<title>HTML Editor - Full Version</title>
</head>
<body>
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
                
              <h2 >Welcome</h2>
              <h3> WordPress Plugin Tool</h3>
              <P>This tool is a product of Bola Lewis made in collaboration with Dr. Mark Hill's of East Carolina University, to fulfill the requirements of SENG 6290. In this project we analyze and address the issues that can arise from combining WordPress plugins on a WordPress site </P>
              <p><?php echo $this->Html->link(__('Enter'),array('controller'=>'plugintools','action'=>'index'), array('class' => 'btn btn-lg btn-primary','role'=> 'button'))?></p>
             
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Description:</h1>
              <p>WordPress Plugin tool makes it easy for the site administrator to upload a list of plugins and check the compatibility of each plugin before running them on the site.
        This tool checks for common coding issues in each plugin and checks the version information to display what version of WordPress is needed to run the site smoothly with selected Plugins.</p>
              <p><a><?php echo $this->Html->link(__('Learn More'),array('controller'=>'users','action'=>'profile'), array('class' => 'btn btn-lg btn-primary','role'=> 'button'))?></a>        
                </p>
            </div>
          </div>
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
</body>

</html>










