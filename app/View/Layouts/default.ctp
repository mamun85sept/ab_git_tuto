
<?php //echo $this->fetch('content'); ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Sufring</title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<?php  echo $this->Html->css(array('reset','demo','calendar','custom_2','style'))?>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--<script src="js/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/modernizr-latest.js" type="text/javascript"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<!------   Slide Java script ------>
<?php echo $this->Html->script(array('slides.min.jquery','demofunction','modernizr.custom.63321','jquery.calendario','data'))?>
	
		<script type="text/javascript">	
			$(function() {
			
				var transEndEventNames = {
						'WebkitTransition' : 'webkitTransitionEnd',
						'MozTransition' : 'transitionend',
						'OTransition' : 'oTransitionEnd',
						'msTransition' : 'MSTransitionEnd',
						'transition' : 'transitionend'
					},
					transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
					$wrapper = $( '#custom-inner' ),
					$calendar = $( '#calendar' ),
					cal = $calendar.calendario( {
						onDayClick : function( $el, $contentEl, dateProperties ) {

							if( $contentEl.length > 0 ) {
								showEvents( $contentEl, dateProperties );
							}

						},
						caldata : codropsEvents,
						displayWeekAbbr : true
					} ),
					$month = $( '#custom-month' ).html( cal.getMonthName() ),
					$year = $( '#custom-year' ).html( cal.getYear() );

				$( '#custom-next' ).on( 'click', function() {
					cal.gotoNextMonth( updateMonthYear );
				} );
				$( '#custom-prev' ).on( 'click', function() {
					cal.gotoPreviousMonth( updateMonthYear );
				} );

				function updateMonthYear() {				
					$month.html( cal.getMonthName() );
					$year.html( cal.getYear() );
				}

				// just an example..
				function showEvents( $contentEl, dateProperties ) {

					hideEvents();
					
					var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
						$close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

					$events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
					
					setTimeout( function() {
						$events.css( 'top', '0%' );
					}, 25 );

				}
				function hideEvents() {

					var $events = $( '#custom-content-reveal' );
					if( $events.length > 0 ) {
						
						$events.css( 'top', '100%' );
						Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

					}

				}
			
			});
		</script> <!------   Calander Java script END  ------>

</head>

<body>
<div id="wrapper">
<!-- start html block -->
    	<?php echo $this->element('header'); ?>
        <?php echo $this->element('menu'); ?>
        
	<section class="banner">
           <?php echo $this->element('slider'); ?>
    </section>

  <section class="content">
    
    <!-- post 1 -->
    <article class="post">
        <?php echo $this->element('welcome'); ?>
        <?php echo $this->element('about'); ?>
        <?php echo $this->element('our_events'); ?>      
    </article>
    <!-- end post 1 -->
    
    <!-- post 1 -->
    <article class="post">
    <div class="post-inner">
	<div class="latest-news">
        <h1 class="text-title"><a href="#">Latest News</a></h1>
         <?php echo $this->element('latest_inner_1'); ?>              
         <?php echo $this->element('latest_inner_2'); ?>
         <?php echo $this->element('latest_inner_3'); ?>
        
              <p class="seeallnews"><a href="#">See all news</a></p>
        </div>
        <?php echo $this->element('championship')?>
        <div class="clendar-news">
        <h1 class="text-title"><a href="#">Calendar</a></h1> 
        <div class="clendar-news-inner">   

			<?php echo $this->element('calendar')?>
        </div>
        </div>
        </div>
    </article>
    <!-- end post 1 -->

 </section>
    <footer>
       <?php echo $this->element('footer')?> 
    </footer>

<!-- end html block -->

</div>
</body>


</html>
