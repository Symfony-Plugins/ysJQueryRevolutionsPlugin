<?php use_helper('ysJQueryRevolutions')?>
Frameworks: <strong><span id="divResults"></span></strong>

<br><br>
<h3>Ajax example on load</h3>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => 'document',
                'event' => 'ready'),
            'url' => url_for('jquery_demo/getjson'),
            'dataType' => 'json' ,
            'data' => "'cboIdLenguage=' + 1",
            'success' =>  like_function("$('#divResults').html(data.frameworks.toString())" , 'data')));
?>


<hr>

<br>
<h3>Ajax link - example</h3>

<a id="lnkReloadAjax" href="#">Reload Ajax</a>

<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#lnkReloadAjax',
                'event' => 'click'),
            'url' => url_for('jquery_demo/getjson'),
            'confirmation' => 'Do you want ajax submit',
            'onNoConfirmation' => 'alert("Not submitted")',
            'condition' => '$("#chkCondition").attr("checked") == true',
            'onFailureCondition' => 'alert("Check the submit option")',
            'dataType' => 'json' ,
            'success' =>  like_function("$('#divResults').html(data.frameworks.toString())" , 'data'),
            'data' => "'cboIdLenguage=' + 2"));
?>
<br>
<b>Condition for Submit:</b> <input type="checkbox" id="chkCondition" checked="false" />
<br>
<hr>
<br>
<h3>Ajax button - example</h3>

<input type="button" id="btnReloadAjax" value="Click here"/>

<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#btnReloadAjax',
                'event' => 'click'),
            'url' => url_for('jquery_demo/getjson'),
            'dataType' => 'json' ,
            'success' =>  like_function("$('#divResults').html(data.frameworks.toString())" , 'data'),
            'data' => "'cboIdLenguage=' + 1",
            'type' => 'POST'));
?>

<hr>

<br>
<h3>Periodically ajax - example (frequency 5 seg)</h3>

<?php //echo core_init_javasacript_tag() ?>
<?php /*echo jquery_periodically_ajax(array(
            'url' => url_for('jquery_demo/getjson'),
            'dataType' => 'json' ,
            'success' =>  like_function("$('#divResults').html(data.frameworks.toString())" , 'data'),
            'data' => "'cboIdLenguage=' + Math.ceil(Math.random() * 3)",
            'frequency' => 5)); */
?>
<?php //echo core_end_javasacript_tag() ?>


<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => 'document',
                'event' => 'ready'),
            'url' => url_for('jquery_demo/getjson'),
            'dataType' => 'json' ,
            'data' => "'cboIdLenguage=' + Math.ceil(Math.random() * 3)",
            'success' =>  like_function("$('#divResults').html(data.frameworks.toString())" , 'data'),
            'frequency' => 5));
?>

<hr>

<br>
<h3>Ajax Events on load</h3>
<input type="button" id="btnAjaxEvencts" value="Call ajax & Show Events"/>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#btnAjaxEvencts',
                'event' => 'click'),
            'url' => url_for('jquery_demo/getjson'),
            'dataType' => 'json' ,
            'data' => "'cboIdLenguage=' + 2",
            'type' => 'POST',
            'complete' => like_function("alert('complete')" ),
            'success' => like_function("alert(data.frameworks.toString())" , 'data'),
            'async' => 'true',
            'beforeSend' => like_function("alert('beforeSend')"),
            'error' => like_function("alert('error')")));
?>

<hr>


