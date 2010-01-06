<?php use_helper('ysJQueryRevolutions')?>


<br><br>
<h3>jquery.load - example</h3>
<br>
<input type="button" value="Load" id="btnLoad" />
<?php echo jquery_load(
            '#spnLoadResult',
            array(
                'listener' => array(
                    'selector' => '#btnLoad',
                    'event'    => 'click'),
                'url' => url_for('jquery_demo/gethtml'),
                'callback' => like_function('alert("Data Loaded!")'),
                'data'    => array ('cboIdLenguage' => '3'))) ?>
Frameworks: <span id="spnLoadResult"></span>

<hr>
<br>

<h3>jquery.get request-  example</h3>
<input type="button" value="Request [GET]" id="btnGet" />
<?php echo  jquery_ajax_get_request(
                array(
                    'listener' => array(
                        'selector' => '#btnGet',
                        'event'    => 'click'),
                    'url' => url_for('jquery_demo/getjson'),
                    'callback' => like_function('alert("GET: Data SUCCESS: " + data);', 'data'),
                    //'type' => 'json',
                    'data'    => array ('cboIdLenguage' => '1'))) ?>
<hr>
<br>
<h3>jquery.post request - example</h3>
<input type="button" value="Request [POST]" id="btnPost" />

<?php echo jquery_ajax_post_request(
            array(
                'listener' => array(
                    'selector' => '#btnPost',
                    'event'    => 'click'),
                'url' => url_for('jquery_demo/getjson'),
                'callback' => like_function('alert("POST: Data SUCCESS: " + data);', 'data'),
                //'type' => 'json',
                'data'    => array ('cboIdLenguage' => '2'))) ?>
<hr>
<br>
<h3>Get json - example</h3>
<input type="button" value="Get JSON" id="btnGetJson" />
<?php  echo  jquery_get_json(
              array(
                'listener' => array(
                  'selector' => '#btnGetJson',
                  'event'    => 'click'),
                'url' => url_for('jquery_demo/getjson'),
                'callback' => like_function('alert(data.frameworks)', 'data'),
                'data'    => array ('cboIdLenguage' => '2')))  ?>
<hr>






