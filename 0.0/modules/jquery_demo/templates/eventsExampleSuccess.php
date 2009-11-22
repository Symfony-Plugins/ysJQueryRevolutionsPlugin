<?php use_helper('ysJQueryRevolutions')?>
<hr>
<h3>Click - example</h3>

<input type="button" value="Click me" id="btnClick">

<?php
echo add_jquery_support(
      '#btnClick',
      'click',
      like_function("alert('Succes')"));?>

<br>
<hr>
<h3>Change - example</h3>

<select id="cboList">
  <option>1.- Option</option>
  <option>2.- Option</option>
  <option>3.- Option</option>
  <option>4.- Option</option>
</select>

<?php
echo add_jquery_support(
      '#cboList',
      'change',
      like_function("alert('you chose: ' +" . jquery_get('this','val'). ');'));?>

<br>
<br>
<hr>
<h3>Get and Set attributes - example</h3>
<input type="text" id="txtTo">
<input type="text" id="txtFrom">
<?php
  echo add_jquery_support(
        '#txtTo',
        'keyup',
        like_function(jquery_set('#txtFrom','val', jquery_get('#txtTo','val'))));?>
<br>
<hr>
<h3>Set attributes (array) - example</h3>
<input type="button" value="Set Attributes" id="btnAddAttr">
<img id="imgToSet" alt="" src=""/>
<?php
  echo add_jquery_support(
        '#btnAddAttr',
        'click',
        like_function(
          jquery_set(
            '#imgToSet',
            'attr',
            array(
              'src' => "http://static.jquery.com/files/rocker/images/logo_jquery_215x53.gif",
              'title' => "jQuery (Connect to internet to see the image)",
              'style' => 'background-color:black',
              'alt' => "jQuery Logo"))));?>
<br>
<hr>

<h3>DoubleClick- example</h3>

<input type="button" value="DoubleClick me" id="btnDblClick">

<?php
  echo add_jquery_support(
        '#btnDblClick',
        'dblclick',
        like_function("alert('Succes')")
  );?>

<br>
<hr>
<h3>Mouseover - Mouseout example</h3>

<?php
  echo add_jquery_support(
        '#divEventExample',
        array('mouseover' => like_function("alert('Mouseover Success')"),
              'mouseout'  => like_function("alert('Mouseout Success')")));?>

<div id="divEventExample" style="background-color:red;  width:50px; height:50px;">
  <br>
</div>

<br>
<hr>
<h3>Live & Die - example</h3>

<input type="button" value="Live" id="btnLive">
<input type="button" value="Die" id="btnDie">

<?php
  echo add_jquery_support(
        '#btnDie',
        'click',
        like_function(jquery_die_event('p'))); ?>

<?php
  echo add_jquery_support(
        '#btnLive',
        'click',
        like_function(
          jquery_live_event(
            'p',
            'click',
            like_function('$(this).after("<p>Another paragraph!</p>")')))); ?>

<?php
  echo add_jquery_support(
        'p',
        'click',
        like_function(
          jquery_live_event(
            'p',
            'click',
            like_function('$(this).after("<p>Another paragraph!</p>")')))); ?>


<div id="divContainer">
  <p>Click me!</p>
</div>
<br>
<hr>
<h3>Toggle & Hover - example</h3>
<ul>
<li style="list-style-type: disc; color: red;">Go to the store</li>
<li style="list-style-type: disc; color: red;">Pick up dinner</li>
<li style="list-style-type: disc; color: red;">Debug crash</li>
</ul>

<?php
  echo
      add_jquery_support(
      'document',
      'ready' ,
      like_function(
        jquery_toggle_event(
          'li',
          array(
            like_function('$(this).css({"list-style-type":"disc", "color":"blue"});'),
            like_function('$(this).css({"list-style-type":"disc", "color":"red"});'),
            like_function('$(this).css({"list-style-type":"", "color":"yellow"});'),
        )))); ?>

<?php
echo add_jquery_support(
      'document',
      'ready' ,
      like_function(
        jquery_hover_event(
          'li',
          array(
            like_function('$(this).append($("<span> ******** </span>"));'),
            like_function('$(this).find("span:last").remove();'))))); ?>

<br>

<hr>
<h3>Bind & Unbind - example</h3>

<input type="button" value="Bind" id="btnBind">
<input type="button" value="UnBind" id="btnUnBind">

<div id="bindExample">Click me</div>

<?php
echo add_jquery_support(
      '#btnBind',
      'click' ,
      like_function(
        jquery_bind_event(
        '#bindExample',
        'click',
        array('foo' => 'bar'),
        like_function('alert(event.data.foo)','event')))); ?>


<?php
echo add_jquery_support(
      '#btnUnBind',
      'click' ,
      like_function(
        jquery_unbind_event(
          '#bindExample'
       ))); ?>
<br>

<hr>
<h3>One event - example</h3>

<input type="button" value="One event" id="btnOneClick">

<?php
echo add_jquery_support(
      'document',
      'ready' ,
      like_function(
        jquery_one_event(
          '#btnOneClick',
          'click',
          like_function('alert( "Only " + $(this).val() );')
      ))); ?>
<br>

<hr>
<h3>Trigger - example</h3>

<input type="button" value="Trigger Submit Form" id="btnTriggerClick">

<?php
echo add_jquery_support(
        '#btnTriggerClick',
        'click' ,
        like_function(
          jquery_trigger_event(
            '#myForm',
            'submit'))); ?>

<hr>

<h3>Basic Ajax Form - Example</h3>
<form id="myForm" action="#">
  <label>Name: </label><input value="Rich" name="txtName" id="txtName" />
  <label>Lastname: </label><input value="Symfony" name="txtLastname" id="txtLastname" />
  <label>Gender: </label>
  <select id="cboGender" name="cboGender">
    <option value="M">M</option>
    <option value="F">F</option>
  </select>
  <br>
  Magazine:
  Sport <input type="checkbox" name="chkMagazine[]" value="0">
  Development <input type="checkbox" name="chkMagazine[]" value="1">
  Food <input type="checkbox" name="chkMagazine[]" value="2">
  <br>
  Do you like this Symfony Plugin
  No <input type="radio" value="0" name="optBool"   />
  Yes <input type="radio" value="1" name="optBool"   />
  <input type="submit" value="Ok"  />
  <input type="reset" value="Reset"  />
</form>
<?php
echo jquery_ajax_form(
      '#myForm',
      array(
        'url' => url_for('jquery_demo/sayhello'),
        'success' =>  like_function("$('#divResults').html(data)" , 'data'),
        'data' => "'anotherParam=helloworld'",
        'type' => 'POST'))?>
<div id="divResults"></div>




