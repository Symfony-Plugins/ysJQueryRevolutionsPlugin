<?php use_helper('ysJQueryRevolutions')?>
<h3>Effects - example</h3>
<br>
<hr>
<h3>fadeIn-fadeOut (900 ms) - example</h3>
<br>
<input type="button" id="btnShow" value="Show" />
<input type="button" id="btnHide" value="Hide" />


<?php echo add_jquery_support('#btnHide',
                              'click' ,
                              like_function(jquery_execute_effect('#divEffect' ,
                                                           'fadeOut' ,
                                                           array('speed' => 900)))) ?>
<?php echo add_jquery_support('#btnShow',
                              'click' ,
                              like_function(jquery_execute_effect('#divEffect' ,
                                                           'fadeIn' ,
                                                           array('speed' => 900)))) ?>
<div id="divEffect" style="background-color:red;  width:50px; height:50px;">
  <br>
</div>
<br>


<hr>
<h3>Animate - example</h3>
<br>
<input type="button" id="btnAnimate" value="Animate" />



<?php echo add_jquery_support(
            '#btnAnimate',
            'click' ,
            like_function(
              jquery_execute_effect(
                '#divToAnimated',
                'animate',
                array(
                  'options' => array(
                    'width' => "70%",
                    'height' => "150px",
                    'opacity'=> 0.4,
                    'marginLeft'=> "0.6in",
                    'fontSize'=> "3em",
                    'borderWidth'=> "10px"),
                  'speed' => 'slow')))) ?>

<div id="divToAnimated" style="background-color:blue;  width:50px; height:50px; border:1px solid">
  <br>
</div>



<hr>
<h3>Toggle Effect - example</h3>
<br>
<input type="button" id="btnHideToggle" value="Toggle" />



<?php echo add_jquery_support(
            '#btnHideToggle',
            'click' ,
            like_function(
                jquery_execute_effect('#divToggleEffect', 'toggle'))) ?>

<div id="divToggleEffect" style="background-color:green;  width:50px; height:50px;">
  <br>
</div>


<hr>
<h3>Advance Effect - example</h3>
<br>
<input type="button" id="btnGo" value="Go" />
<input type="button" id="btnStop" value="Stop" />
<input type="button" id="btnBack" value="Back" />



<?php echo add_jquery_support(
            '#btnGo',
            'click' ,
            like_function(
                jquery_execute_effect(
                '.block',
                'animate',
                array(
                  'options' => array(
                    'left' => "+=100px"),
                  'speed' => 2000)))) ?>

<?php echo add_jquery_support(
            '#btnStop',
            'click' ,
            like_function(
                jquery_execute_effect('.block', 'stop'))) ?>

<?php echo add_jquery_support(
            '#btnBack',
            'click' ,
            like_function(
                jquery_execute_effect(
                  '.block',
                  'animate',
                  array(
                    'options' => array(
                      'left' => "-=100px"),
                    'speed' => 2000)))) ?>

<div class="block" style="background-color:#AABBCC;height:60px;left:0;margin:5px;position:absolute;width:60px;">
  <br>
</div>









