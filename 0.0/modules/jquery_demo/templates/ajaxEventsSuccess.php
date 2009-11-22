<?php use_helper('ysJQueryRevolutions')?>
Frameworks: <strong><span id="divResults"></span></strong>
<hr>
<h3>Ajax events - example</h3>
<br>
<input type="button" id="btnReloadAjax" value="Click here"/>

<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#btnReloadAjax',
                'event' => 'click'),
            'url' => url_for('jquery_demo/getjson'),
            'dataType' => 'json' ,
            'success' =>  like_function("$('#divResults').html(data.frameworks.toString())" , 'data'),
            'data' => "'cboIdLenguage=' + Math.ceil(Math.random() * 3)",
            'type' => 'GET'));
?>

<?php
    echo jquery_ajax_event(
           '#btnReloadAjax',
           'ajaxComplete',
           like_function("alert('Complete')"));
?>
<?php
    echo jquery_ajax_event(
           '#btnReloadAjax',
           'ajaxSend',
           like_function("alert('Send')", 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#btnReloadAjax',
           'ajaxStop',
           like_function("alert('Stop')", 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#btnReloadAjax',
           'ajaxSuccess',
           like_function("alert('Success')", 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#btnReloadAjax',
           'ajaxStart',
           like_function("alert('Start')", 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#btnReloadAjax',
           'ajaxError',
           like_function("alert('Error')", 'event,request,settings'));
?>





