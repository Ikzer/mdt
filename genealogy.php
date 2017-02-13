<?php
include('header.php');
$chronicles = array(
			array("name" => "Conquistadores", "chapters" => 14, "scenes" => 79, "players" => 6, "sessions" => 5),
			array("name" => "Noches de Constantinopla", "chapters" => 5, "scenes" => 25, "players" => 6, "sessions" => 1),
	);
$data = array("chapters" => 0, "scenes" => 0, "players" => 0, "sessions" => 0);
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Genealogía</h1>
		</div>
		<div class="col-sm-12">
			
		<div id="sample">
  <div id="myDiagramDiv" style="background-color: #696969; border: solid 1px black; height: 750px"></div>
  <div>
    <div id="myInspector">

    </div>
  </div>
  <p>
    This editable organizational chart sample color-codes the Nodes according to the tree level in the hierarchy.
  </p>
  <p>
    Double click on a node in order to add a person or the diagram background to add a new boss. Double clicking the diagram uses the <a>ClickCreatingTool</a>
    with a custom <a>ClickCreatingTool.insertPart</a> to assign an ID.
  </p>
  <p>
    Drag a node onto another in order to change relationships.
    You can also draw a link from a node's background to other nodes that have no "boss". Links can also be relinked to change relationships.
    Right-click or tap-hold a Node to bring up a context menu which allows you to:
    <ul>
      <li>Vacate Position - remove the information specfic to the current person in that role</li>
      <li>Remove Role - removes the role entirely and reparents any children</li>
      <li>Remove Department - removes the role and the whole subtree</li>
    </ul>
    Deleting a Node or Link will orphan the child Nodes and generate a new tree. A custom SelectionDeleting <a>DiagramEvent</a> listener will clear out the boss info
    when the parent becomes undefined.
  </p>
  <p>
    Select a node to edit/update node data values. This sample uses the <a href="../extensions/dataInspector.html">Data Inspector</a> extension to display and modify Part data.
  </p>
  <p>
    To learn how to build an org chart from scratch with GoJS, see the <a href="../learn/index.html">Getting Started tutorial</a>.
  </p>
  <div>
    <div>
      <button id="SaveButton" onclick="save()">Save</button>
      <button onclick="load()">Load</button>
      Diagram Model saved in JSON format:
    </div>
    <textarea id="mySavedModel" style="width:100%;height:250px">
{ "class": "go.TreeModel",
  "nodeDataArray": [
{"key":"1", "name":"Cain", "title":"1ª Gen", "embraced": "c. 11000BC"},
{"key":"2", "name":"Enoch", "title":"2ª Gen", "embraced": "c. 10000BC","parent":"1"},
{"key":"3", "name":"Irad", "title":"2ª Gen", "parent":"1"},
{"key":"4", "name":"Zillah", "title":"2ª Gen", "parent":"1"},
{"key":"5", "name":"The Crone", "title":"2ª Gen", "parent":"1"},
{"key":"6", "name":"The Lovers", "title":"2ª Gen", "parent":"1"},
{"key":"7", "name":"King and Queen of Enoch", "title":"2ª Gen", "parent":"1"},
{"key":"8", "name":"Arikel", "title":"3ª Gen", "embraced": "c. 8000BC","parent":"2"},
{"key":"9", "name":"Malkav", "title":"3ª Gen", "parent":"2"},
{"key":"10", "name":"Saulot", "title":"3ª Gen", "embraced":"c8000BC", "parent":"2"},
{"key":"11", "name":"Ashur", "title":"3ª Gen", "parent":"2"},
{"key":"12", "name":"Brujah", "title":"3ª Gen", "parent":"3"},
{"key":"13", "name":"Tzimisce", "title":"3ª Gen", "parent":"3"},
{"key":"14", "name":"Ventrue", "title":"3ª Gen", "parent":"3"},
{"key":"15", "name":"Cappadocius", "title":"3ª Gen", "parent":"3"},
{"key":"16", "name":"Lasombra", "title":"3ª Gen", "parent":"3"},
{"key":"17", "name":"Absimiliard", "title":"3ª Gen", "parent":"4"},
{"key":"18", "name":"Set", "title":"3ª Gen", "parent":"4"},
{"key":"19", "name":"Haqim", "title":"3ª Gen", "parent":"4"},
{"key":"20", "name":"Ravnos", "title":"3ª Gen", "parent":"3"},
{"key":"21", "name":"Minos", "title":"4ª Gen", "parent":"8"},
{"key":"22", "name":"Tammuz", "title":"4ª Gen", "parent":"8"},
{"key":"23", "name":"Amarantha", "title":"4ª Gen", "parent":"8"},
{"key":"24", "name":"Beshter/Michael", "title":"4ª Gen", "parent":"8", "embraced": "2149BC"},
{"key":"53", "name":"Petronius the Arbiter", "title":"5ª Gen","embraced": "65", "parent":"24"},
{"key":"54", "name":"Anthemios of Thralles", "title":"5ª Gen", "embraced": "537", "parent":"24"},
{"key":"55", "name":"Pakourianis the Dove", "title":"5ª Gen", "parent":"24"},
{"key":"56", "name":"Paul Bethalos", "title":"5ª Gen", "parent":"24"},
{"key":"57", "name":"Vashtai", "title":"5ª Gen", "embraced":"526", "parent":"24"},
{"key":"58", "name":"Nashidil", "title":"6ª Gen", "parent":"24"},
{"key":"59", "name":"Salianna", "title":"5ª Gen", "parent":"24"},
{"key":"25", "name":"Iontus", "title":"4ª Gen", "parent":"8"},
{"key":"60", "name":"Ishaq ibn Ibrahim", "title":"5ª Gen", "parent":"25"},
{"key":"26", "name":"Minotaur", "title":"4ª Gen", "parent":"8"},
{"key":"27", "name":"Helena", "title":"5ª Gen", "parent":"21"},
{"key":"28", "name":"Melinda Galbraith", "title":"6ª Gen", "parent":"27"},
{"key":"33", "name":"Rosa Martinez", "title":"7ª Gen", "parent":"28"},
{"key":"29", "name":"Philippe Vollgirre", "title":"6ª Gen", "parent":"27"},
{"key":"34", "name":"Madame Guil", "title":"7ª Gen", "parent":"29"},
{"key":"35", "name":"Countess d'Adhemar (1789)", "title":"8ª Gen", "parent":"34"},
{"key":"36", "name":"Michael Unther (1802)", "title":"8ª Gen", "parent":"34"},
{"key":"30", "name":"Francois Villon", "title":"6ª Gen", "parent":"27"},
{"key":"37", "name":"Violetta (1259)", "title":"7ª Gen", "parent":"30"},
{"key":"38", "name":"Calabris (1595)", "title":"7ª Gen", "parent":"30"},
{"key":"40", "name":"Rati (1725)", "title":"8ª Gen", "parent":"38"},
{"key":"39", "name":"François Dumas", "title":"7ª Gen", "parent":"30"},
{"key":"31", "name":"Maria", "title":"6ª Gen", "parent":"27"},
{"key":"41", "name":"Annabelle Triabell", "title":"7ª Gen", "parent":"31"},
{"key":"42", "name":"Elsa Linden (1791)", "title":"8ª Gen", "parent":"41"},
{"key":"43", "name":"Modius (1806)", "title":"8ª Gen", "parent":"41"},
{"key":"49", "name":"Alicia (1938)", "title":"9ª Gen", "parent":"43"},
{"key":"44", "name":"Tarmonay (1929)", "title":"8ª Gen", "parent":"41"},
{"key":"50", "name":"McPhee", "title":"9ª Gen", "parent":"44"},
{"key":"45", "name":"Sharon Payne (1929)", "title":"8ª Gen", "parent":"41"},
{"key":"51", "name":"Michael Payne (1929)", "title":"9ª Gen", "parent":"45"},
{"key":"46", "name":"Sophia Ayes (1981)", "title":"8ª Gen", "parent":"41"},
{"key":"52", "name":"Teri (1993)", "title":"8ª Gen", "parent":"46"},
{"key":"47", "name":"Bret Stryker (1983)", "title":"8ª Gen", "parent":"41"},
{"key":"48", "name":"Deacon", "title":"8ª Gen", "parent":"41"},
{"key":"32", "name":"Eletria", "title":"6ª Gen", "parent":"27"},
{"key":"61", "name":"Brahina", "title":"4ª Gen", "parent":"9"},
{"key":"62", "name":"Lamdiel", "title":"4ª Gen", "parent":"9"},
{"key":"68", "name":"Addemar", "title":"5ª Gen", "parent":"62"},
{"key":"69", "name":"Trimeggian", "title":"6ª Gen", "parent":"68"},
{"key":"70", "name":"Dr. Douglas Netchurch", "title":"7ª Gen", "embraced": "1915", "parent":"69"},
{"key":"71", "name":"Dr. Nancy Reage", "title":"8ª Gen","embraced": "2000", "parent":"70"},
{"key":"63", "name":"Lerterimas", "title":"4ª Gen", "parent":"9"},
{"key":"64", "name":"Nissiku", "title":"4ª Gen", "parent":"9"},
{"key":"65", "name":"Panehesy", "title":"4ª Gen", "parent":"9"},
{"key":"66", "name":"The Eater", "title":"4ª Gen", "parent":"9"},
{"key":"67", "name":"The Plague-Bride", "title":"4ª Gen", "parent":"9"},
{"key":"72", "name":"Rayzeel", "title":"4ª Gen", "parent":"10"},
{"key":"73", "name":"Samiel", "title":"4ª Gen", "parent":"10"},
{"key":"74", "name":"Hrorsh", "title":"4ª Gen", "parent":"10"},
{"key":"75", "name":"Yakov", "title":"4ª Gen", "parent":"10"},
{"key":"76", "name":"Zao-Zei", "title":"4ª Gen", "parent":"10"},
{"key":"77", "name":"Zao-Xue", "title":"4ª Gen", "parent":"10"},
{"key":"78", "name":"Nahum ben Enosh", "title":"4ª Gen", "parent":"10"},
{"key":"79", "name":"Mokur", "title":"4ª Gen", "parent":"10"},
{"key":"80", "name":"Akhraziel", "title":"4ª Gen", "parent":"10"},
{"key":"81", "name":"Nergal", "title":"4ª Gen", "parent":"10"},
{"key":"82", "name":"Moloch", "title":"4ª Gen", "parent":"10"},
{"key":"83", "name":"The Unnamed", "title":"4ª Gen", "parent":"10"},
{"key":"84", "name":"Seker", "title":"4ª Gen", "parent":"10"}
 ]
}
    </textarea>
  </div>
</div>
		  </div>
</div>
</div>
<?php
include('footer.php');