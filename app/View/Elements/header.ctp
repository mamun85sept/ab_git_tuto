    <header>
    	<h1 class="logo">
		<?php echo $this->Html->link($this->Html->image('surfing_logo.png', array('alt' => 'surfing_logo','title'=>'Surfing_logo','width'=>'283','height'=>'65')),'#',array('escape' => false));?>
		
		</h1>
        <div class="joinus">
        <ul>
<!--       <li><a href="#">Join us on Facebook<br><span class="keepup">and keep up to date with all the news</span></a></li>
           <li><a href="#"><img class="facebookicon" src="img/facebook_icon.png" alt="facebook_icon"/></a></li>
-->         <li><?php echo $this->Html->link('Join us on Facebook <br> and keep up to date with all the news','#',array('escape'=>false))?></li>
            <li><?php echo $this->Html->link($this->Html->image('facebook_icon.png',array('alt'=>'facebook_icon')),'#',array('escape'=>false))?></li>
        </ul>
        </div>
    </header>
