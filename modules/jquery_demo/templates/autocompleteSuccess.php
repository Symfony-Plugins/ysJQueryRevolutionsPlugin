<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>

<script type="text/javascript">
  // LOCAL DATA / 4 EXAMPLES
var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var emails = [
	{ name: "Peter Pan", to: "peter@pan.de" },
	{ name: "Molly", to: "molly@yahoo.com" },
	{ name: "Forneria Marconi", to: "live@japan.jp" },
	{ name: "Master <em>Sync</em>", to: "205bw@samsung.com" },
	{ name: "Dr. <strong>Tech</strong> de Log", to: "g15@logitech.com" },
	{ name: "Don Corleone", to: "don@vegas.com" },
	{ name: "Mc Chick", to: "info@donalds.org" },
	{ name: "Donnie Darko", to: "dd@timeshift.info" },
	{ name: "Quake The Net", to: "webmaster@quakenet.org" },
	{ name: "Dr. Write", to: "write@writable.com" }
];
var cities = [
	"Aberdeen", "Ada", "Adamsville", "Addyston", "Adelphi", "Adena", "Adrian", "Akron",
	"Avon Lake", "Bainbridge", "Bakersville", "Baltic", "Baltimore", "Bannock",
	"Barberton", "Barlow", "Barnesville", "Bartlett", "Barton", "Bascom", "Batavia",
	"Bath", "Bay Village", "Beach City", "Beachwood", "Beallsville", "Beaver",
	"Caldwell", "Caledonia", "Cambridge", "Camden", "Cameron", "Camp Dennison",
	"Campbell", "Canal Fulton", "Canal Winchester", "Canfield", "Canton", "Carbon Hill",
	"Dayton", "De Graff", "Decatur", "Deerfield", "Deersville", "Defiance",
	"Delaware", "Dellroy", "Delphos", "Delta", "Dennison", "Derby", "Derwent",
	"East Liberty", "East Liverpool", "East Palestine", "East Rochester",
	"East Sparta", "East Springfield", "Eastlake", "Eaton", "Edgerton", "Edison",
	"Edon", "Eldorado", "Elgin", "Elkton", "Ellsworth", "Elmore", "Elyria",
	"Empire", "Englewood", "Enon", "Etna", "Euclid", "Evansport", "Fairborn",
	"Fairfield", "Fairpoint", "Fairview", "Farmdale", "Farmer", "Farmersville",
	"Fayette", "Fayetteville", "Feesburg", "Felicity", "Findlay", "Flat Rock",
	"Galena", "Galion", "Gallipolis", "Galloway", "Gambier", "Garrettsville",
	"Gates Mills", "Geneva", "Genoa", "Georgetown", "Germantown", "Gettysburg",
	"Hamden", "Hamersville", "Hamilton", "Hamler", "Hammondsville",
	"Hannibal", "Hanoverton", "Harbor View", "Harlem Springs", "Harpster",
	"Irondale", "Ironton", "Irwin", "Isle Saint George", "Jackson", "Jackson Center",
	"Jacksontown", "Jacksonville", "Jacobsburg", "Jamestown", "Jasper",
	"Jefferson", "Jeffersonville", "Jenera", "Jeromesville", "Jerry City",
	"Kansas", "Keene", "Kelleys Island", "Kensington", "Kent", "Kenton",
	"Kerr", "Kettlersville", "Kidron", "Kilbourne", "Killbuck", "Kimbolton",
	"Lafayette", "Lafferty", "Lagrange", "Laings", "Lake Milton", "Lakemore",
	"Lakeside Marblehead", "Lakeview", "Lakeville", "Lakewood", "Lancaster",
	"Magnolia", "Maineville", "Malaga", "Malinta", "Malta", "Malvern",
	"Manchester", "Mansfield", "Mantua", "Maple Heights", "Maplewood",
	"Nashville", "Navarre", "Neapolis", "Neffs", "Negley",
	"Nelsonville", "Nevada", "Neville", "New Albany", "New Athens",
	"Oberlin", "Oceola", "Ohio City", "Okeana", "Okolona", "Old Fort",
	"Old Washington", "Olmsted Falls", "Ontario", "Orangeville",
	"Paris", "Parkman", "Pataskala", "Patriot", "Paulding", "Payne",
	"Pedro", "Peebles", "Pemberton", "Pemberville", "Peninsula",
	"Quaker City", "Quincy", "Racine", "Radnor", "Randolph", "Rarden",
	"Ravenna", "Rawson", "Ray", "Rayland", "Raymond", "Reedsville",
	"Reesville", "Reno", "Republic", "Reynoldsburg", "Richfield",
	"Saint Louisville", "Saint Marys", "Saint Paris", "Salem", "Salesville",
	"Salineville", "Sandusky", "Sandyville", "Sarahsville", "Sardinia",
	"Terrace Park", "The Plains", "Thompson", "Thornville", "Thurman",
	"Thurston", "Tiffin", "Tiltonsville", "Tipp City", "Tippecanoe", "Tiro",
	"Uhrichsville", "Union City", "Union Furnace", "Unionport", "Uniontown",
	"Unionville", "Unionville Center", "Uniopolis", "Upper Sandusky", "Urbana",
	"Vaughnsville", "Venedocia", "Vermilion", "Verona", "Versailles",
	"Vickery", "Vienna", "Vincent", "Vinton", "Wadsworth", "Wakefield",
	"Wakeman", "Walbridge", "Waldo", "Walhonding", "Walnut Creek", "Wapakoneta",
	"Warnock", "Warren", "Warsaw", "Washington Court House",
	"Woodstock", "Woodville", "Wooster", "Wren", "Xenia", "Yellow Springs",
	"Yorkshire", "Yorkville", "Youngstown", "Zaleski", "Zanesfield", "Zanesville",
	"Zoar"
];

function changeToCities(){
  <?php echo jquery_autocomplete_set_options('#suggest1', array('data' => 'cities')) ?>
  $('#suggest1').prev().text("Test 1 (Local Data [Cities]):");
}
function changeToMonths(){
  <?php echo jquery_autocomplete_set_options('#suggest1', array('data' => 'months')) ?>
  $('#suggest1').prev().text("Test 1 (Local Data [Months]):");
}


</script>

<div id="content">
		<p>
    <label>Test 1 (Local Data [Months]):</label>
    <input type="text" id="suggest1" />

    <?php echo jquery_autocomplete_support_to(
         '#suggest1',
         array(
           'data' => 'months')) ?>

    <?php jquery_ajax_event('#suggest15', 'success', like_function("alert('a')"))?>

    <input type="button" value="Change data" id="btnSetOptions" />
    <?php echo jquery_execute(jquery_toggle_event('#btnSetOptions',array(like_function('changeToCities()'), like_function('changeToMonths()'))))?>
    <br>
    <br>
    Test 2 (Local Data [Months] Multiple):
    <input type="text" id="suggest2" />

    <?php echo jquery_autocomplete_support_to(
         '#suggest2',
         array(
           'multiple' => true,
        	 'highlight' => false,
           //'multipleSeparator' => ' | ', // Default ', '
           'data' => 'months')) ?>
    <br>
    <br>
    Test 3 (Local Data [emails]):
    <input type="text" id="suggest3" />
    <?php echo jquery_autocomplete_support_to(
         '#suggest3',
         array(
           'data' => 'emails',
           'formatItem'   => like_function('return row.name.replace(new RegExp("(" + term + ")", "gi"), "<strong>$1</strong>") + "<br><span style=\'font-size: 80%;\'>Email: &lt;" + row.to + "&gt;</span>"', 'row, i, max, term'),
           'formatResult' => like_function('return row.to', 'row'))) ?>
    <br>
    <br>
    Test 4 (Remote Data):
    <input type="text" id="suggest4" />
    <?php echo jquery_autocomplete_support_to(
         '#suggest4',
         array(
           'url' => url_for('jquery_demo/autocompleteData'),
           'extraParams' => array(
             'dataTypeParam' => 'items'),
           'formatItem' => like_function('return row[0] + " (<strong>id: " + row[1] + "</strong>)"', 'row'),
           'formatResult' => like_function('return row[0].replace(/(<.+?>)/gi, "")', 'row')))  ?>
    <br>
    <br>
    Test 5 (Remote Data [images from bassistance.de]):
    <input type="text" id="suggest5" />
    <?php echo jquery_autocomplete_support_to(
         '#suggest5',
         array(
           'focus' => true,
           'url' => url_for('jquery_demo/autocompleteImageData'),
           'width' => 500,
           'max' => 4,
           'highlight' => false,
           'scroll' => true,
           'scrollHeight' => 300,
           'formatItem'   => like_function("return '<img width=\"92\" height=\"65\" src=\"http://jquery.bassistance.de/autocomplete/demo/images/' + value + '\" /> ' + value.split('.')[0];", 'data, i, n, value'),
           'formatResult' => like_function('return value.split(".")[0];', 'data, value'))) ?>
    <br>
    <br>
    <?php echo jquery_autocomplete_input_tag(
               array(
                 'id'  => 'suggest6',
                 'label' => 'Test 1 (Local Data [Tags]): | jquery_autocomplete_input_tag()',
                 'data' => '["c++", "java", "php", "coldfusion", "javascript", "asp", "ruby", "python", "c", "scala", "groovy", "haskell", "pearl"]',
                 'width' => 500,
                 'max' => 4,
                 'highlight' => false,
                 'scroll' => true,
                 'scrollHeight' => 300)) ?>

    <input type="button" value="Unautocomplete" id="btnUnAutocomplete" />
    <?php echo add_jquery_support('#btnUnAutocomplete', 'click', like_function(jquery_unautocomplete('#suggest6')))?>
  <br>
  <br>
  <br>
  <?php
    echo link_to('jQuery Autocomplete documentation', 'http://docs.jquery.com/Plugins/Autocomplete')
  ?>
</div>