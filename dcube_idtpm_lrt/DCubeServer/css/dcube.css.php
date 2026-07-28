<?php
ob_start ("ob_gzhandler");
header("Content-type: text/css");
header("Cache-Control: must-revalidate");
$offset = 60 * 60  * 12;
$ExpStr = "Expires: " .
  gmdate("D, d M Y H:i:s",
	 time() + $offset) . " GMT";
header($ExpStr);
?>

/**
 * @file dcube.css
 * @brief Cascade Style Sheet for DCube
 * @author Krzysztof Daniel Ciba (Krzysztof.Ciba@NOSPAMgmail.com)
 * @date 11/04/2007
 */
body {font-family: Arial,Halvetica,sans-serif; background-color: #ffffff; font-size: 12pt;}
div {text-align: center;}
#loading {width: 193px; height: 70px;  position: absolute; left: 50%; top: 50%; margin-top: -50px; margin-left: -100px; background-color: #ff6600; border: 5px solid #ffff00; z-index: 1000;}
#load {width: 173px; height: 10px; background-image: url(data:image/gif;base64,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); position: relative; top: 10px; left: 10px;}
div.wrapper {text-align: left; margin: 0px auto; padding: 0px; border: 0; width: 99%;}
div.lheader {margin: 0 0 12px 0; background-color: #cccccc; float: left; font-size: 10pt;}
div.header {margin: 0 0 12px 0; background-color: #cccccc; text-align: right; font-size: 10pt;}
div.mid_panel {padding: 5px 5px; margin: 18px 0 0 0; background-color: #cccccc; width: auto; text-align: left; overflow: auto;}
div.legend { margin: 18px 0 0 0; background-color: transparent; }
legend {background-color: #a0a0a0; border: 1px dotted #000000;}
fieldset {background-color: transparent; font-weight: bold; border: 1px dotted #000000; text-align: center;}
fieldset.fc {text-align: left;}
div.content {margin: 18px 0 0 0; text-align: left; width: 100%;}
div.footer {clear: both; margin: 18px 0 0 0; text-align: right; background-color: #cccccc;}
div.tp {border: 1px dotted #000000; margin: auto auto; padding: 5px 5px;}
div.his {width: 100%; height: 28px; background-color: #ffffff; cursor: pointer; margin: 1px 0px;}
div.his0 {text-align: left; vertical-align: middle; width: 32%; min-width: 15em; height: 28px; float: left; clear: left; overflow: auto; cursor: pointer; position: relative; top: 4px;}
div.his:hover , div.dir:hover {border: 1px #000000 solid;}
div.his1 {width: 16%; float: left; vertical-align: middle; text-align: center; margin-left: 2px; margin-right: 2px; }
div.ok {width: 97%; margin: 2px 1px; border: 2px dotted #00ff00;}
div.warn {width: 97%;  background-color: #ffd700;  margin: 2px 1px; border: 2px solid #ffd700;}
div.fail {width: 97%;  background-color: #ff4500;  margin: 2px 1px; border: 2px solid #ff4500;}
div.absent {width: 97%;  background-color: #cccccc;  margin: 2px 1px; border: 2px solid #cccccc;}
div.hc { margin: auto auto; width: 99%;  background-color: #cccccc; padding: 5px 5px; border: 1px dotted #000000;}
div.dir {text-align: left; width: 100%; height: 28px; vertical-align: middle; font-weight: bold; background-color: #fff8dc; cursor: pointer; margin: 1px 0px;}
div.dir0 {text-align: left; min-width: 15em; width: 32%;  float: left; clear: left; overflow: auto; cursor: pointer; position: relative; top: 4px;}
div.dir1 {width: 16%; float: left; margin-left: 2px; margin-right: 2px;}
div.dirc {clear: left; width: 100%;}
div.tdir {text-align: left; width: 100%; height: 27px; font-weight: bold; background-color: #cccccc;}
div.tdir0 {min-width: 15em; width: 32%; float: left; overflow: auto;}
div.tdir1 {width: 16%; float: left;  margin-left: 2px; margin-right: 2px; }
div.ch {width: 30%; height: 550px; float: left; position: relative; left: 0px; top: 0px; text-align: left; padding: 10px 10px;}
div.si {margin-left: auto; margin-right: auto; border: 2px solid #cccccc; width: 55%; text-align: left;}
table.pval_table {cursor: pointer; border: dotted 1px; width: 100%; background-color: transparent; text-align: left; empty-cells: hide;}
table.st {width: 100%; border-width: 0px; empty-cells: hide; border-collapse: collapse; position: relative; top: 2px;}
table.center {margin-left: auto; margin-right: auto; border-collapse: collapse;}
td.bc {background-color: #6699cc; text-align: center;}
td.bl {background-color: #6699cc; text-align: left;}
td.yc {background-color: #ffcc00; text-align: center;}
td.yl {background-color: #ffcc00; text-align: left;}
div.pval_legend {position: fixed; bottom: 0em; left: 0em;  padding: 1px; background-color: transparent; width: 100%; display: none; }
a {color: #000099; font-weight: bold; }
a:visited {color: #990000; font-weight: bold;}
td {background-color: #ffffff; width: 14%; text-align: left; cursor: pointer;}
th {font-weight: bold; text-align: center; background-color: #cccccc; width: 14%;}
td.sum {cursor: pointer;}
td.warn {font-weight: bold; background-color: #ffd700; text-align: center;}
td.fail {font-weight: bold; background-color: #ff4500; text-align: center;}
td.ok {font-weight: bold; background-color: #ffffff; border: 2px dotted #00ff00; text-align: center;}
td.eok {margin: 2px 1px; background-color: #ffffff; border: 2px dotted #99ff99; text-align: center;}
td.ewarn {background-color: #ffff99;  text-align: center; }
td.efail {background-color: #ffab99;  text-align: center; }
td.basic {font-family: serif; background-color: #cccccc; font-weight: bold; text-align: center;}
td.absent {font-weight: bold; background-color: #cccccc; text-align: center;}
td.missing {font-weight: bold;	background-color: #00ff00; border: 3px dotted #ff0000; text-align: center;}
td.dir {font-weight: bold; background-color: #fff8dc; text-align: left;}
td.plot {font-weight: bold; background-color: #ffffff; border: 2px dotted #0000ff; text-align: center;}
img { vertical-align: middle; }
img.plot { border: 1px dotted #000000; }
.tabpane {cursor: default; margin: 0px 0px; height: 24px; float: left;}

.tabpane .tp_left {position: relative; top: 0px; left: 0px; background: url(data:image/gif;base64,R0lGODlhBgAZAKUAAAAAAHt7e3t7fHx7fHt8e4ODg4SEhIqLi4uLiouLi5KSkpKSk5OSkpKTkpqamqKhoqKioqmpqqqpqqmqqamqqrGxsbKxsbGysbm5uLm5ucHAwcDBwMDBwcHBwMjIyMjIycnIyMjJyM/P0NDQ0NfX19jX2NjY19jY2N/f39/f4ODf39/g4ODg4Ofn5+jn5+7v7+/v7u/v7wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEKAD8ALAAAAAAGABkAAAZqwJ9QCBj+ALEhMnmMOYnO5PI5jVWtsRfMCXC1vi3AipVCqQCkk6lUAozeohHAAwp9QgBOR6PZADIYGYIAFhUXhgARFBIUEwAQEA+QAA6VlQAMCg0LCwAICQgHCAAGBaYFAAMBBAIBAK+wQQA7) no-repeat; width: 6px; height: 24px; float: left;}
.tabpane .tp_right {position: relative; top: 0px; right: 0px; background: url(data:image/gif;base64,R0lGODlhBgAZAKUAAAAAAHt7e3t7fHx7fHt8e4ODg4SEhIqLi4uLiouLi5KSkpKSk5OSkpKTkpqamqKhoqKioqmpqqqpqqmqqamqqrGxsbKxsbGysbm5uLm5ucHAwcDBwMDBwcHBwMjIyMjIycnIyMjJyM/P0NDQ0NfX19jX2NjY19jY2N/f39/f4ODf39/g4ODg4Ofn5+jn5+7v7+/v7u/v7wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEKAD8ALAAAAAAGABkAAAZoQMBvOIwJiTEjMnlMKn9OZVQYNSZhL2Nr23IBVKgUawUolUwnEmAkGrkBoU8I5AFsNJoOB5DpYzIAFxWCFgATFBIUEQAQEA+NAA6SkgALCw0KDAAIBwgJCAAFogUGAAECBAEDAKytAEEAOw==) no-repeat; width: 6px; height: 24px; float:left; }
.tabpane .tp_title {background: url(data:image/gif;base64,R0lGODlhFAAZAOefAAABAHh6d3t5fX55eHZ7fnl7eHx6fnd8fnp8eX17f4WAf4CCf4OBhYaBgH6DhoGDgISChoKEgYOFgo2Ih4WKjYiKh4uJjY6JiIaLjomLiIyKjoqMiY+Rjo2RlJKQlJWQjpCSj46SlZaRj5GTkJSSlpeSkJaYlZeZlpqYnJWanJial56ZmKKfo6Sfnpyho5+hnqOgpKWgn52ipKCin6GjoKaopaSprK2npqeppqqorKWqra6op6iqp6upra2vrLOurKuwsq6wrbGvs7Svrayxs7Wwr7CyrrGzr7m2u7O4u7a4tbS5vL23tre5trq4vLi6t72/vMC+wsO+vLvAwsG/w8S/vb7BvbzBw8DCvsjFysLHysvFxMXHxMPIy8zGxcbIxcnHy8TJzM3HxsfJxtDN0dLNzMrP0c3Py9POzcvQ0s7QzM/RztTW09XX1NjW2tLY2tvW1NbY1dnX29/c4eLc29ze29rf4uPd3N3f3Nvg4+Te3d7g3efk6eHm6erk4+Tm4+jl6uLn6uvl5OXn5Ozm5ebo5e3r7/Hs6u/s8evu6unu8PDt8urv8vPt7O3v6+7w7fP18vb0+PD2+Pn08vr18/T38/b49Pr8+ff9//v9+v/8+v78//j+//z/+/7//P///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ywAAAAAFAAZAAAI/gABCBxIsGBBTwgTKlzIsKHDhxAjSpwIkZOnTZ4sasq0MRPCjplCVhpJsmQlSJEgSRo5qdIkRzAfwXSEaKbNRI4U5RRUqGdPQIWABvJJtKedPXjw7NljB8+dpHeaJoWKp43Vq1bdYNXahg0cq2nUiA2rhqzYs2jVjBkDBkwXt1/AfOny5YsXuXXrWtnLty+UvVOsSOm75MmSJogTK0aCpIkSx0iMCCFipLKRIEMuBzFCJIjnzzxCix6N4wYPHDZu4MiBA4cMGjNm0IARu/aMF7FdsJjRogUKFSpQnFCRIoWK4SlOKF+uHIRz5yGegxAxHUQIDiKic8iAIYP37+AtLEyoQD4D+QcRHjxwsF59A/Xw1S94wAABggL2DRi4fwD/gAL94VfAAAYVWGBAADs=) repeat-x; float: left; height: 24px; padding: 4px 5px; }

.tabpane.sel_tp .tp_left {position: relative; top: 0px; left: 0px; background: url(data:image/gif;base64,R0lGODlhBgAZAKUtAAAAABAQEBAQEREQEBcYGBgYGB8fHygoKC8vLzAwLzc2NzY3Nzc3Njc3Nzk5OT4+Pz8+Pj8+Pz4/Pj8/P0ZGRkZGR05NTk1OTk5OTlZVVVZVVlVWVVZWVV1dXV1eXWVlZW1sbWxtbW1tbG1tbXR0dHR0dXV0dHt7e3x8fIOCg4KDgoODgoODg////////////////////////////////////////////////////////////////////////////yH5BAEKAD8ALAAAAAAGABkAAAZjwJ9QCBj+AEUiUrkEIZHOJ8AgrT4DA0EgACAUvoWpYUw9mM0AhDqBADQWCoYCAHlIJBEApULpAy4YFoEAHBkbGRoAHR0eiwAfkJAAISMgIiIAJSQlJiUAJyihKAAqLCkrLFZBADs=) no-repeat; width: 6px; height: 24px; float:left;}
.tabpane.sel_tp .tp_right {position: relative; top: 0px; right: 0px; background: url(data:image/gif;base64,R0lGODlhBgAZAKUtAAAAABAQEBAQEREQEBcYGBgYGB8fHygoKC8vLzAwLzc2NzY3Nzc3Njc3Nzk5OT4+Pz8+Pj8+Pz4/Pj8/P0ZGRkZGR05NTk1OTk5OTlZVVVZVVlVWVVZWVV1dXV1eXWVlZW1sbWxtbW1tbG1tbXR0dHR0dXV0dHt7e3x8fIOCg4KDgoODgoODg////////////////////////////////////////////////////////////////////////////yH5BAEKAD8ALAAAAAAGABkAAAZjQMBvOAQIicbjL3lkgpZOJsAgBQQCgkEAUOgWCFODmHoolwGIBGINUDAUiwYgIpE8IACKvkIBWDB/FwAaGRsZHAAdHR6KAB+PjwAiIiAjIQAlJiUkJQAonygnACwrKSwqVQBBADs=) no-repeat; width: 6px; height: 24px; float:left;}
.tabpane.sel_tp .tp_title {background: url(data:image/gif;base64,R0lGODlhFAAZAMZWAAEAAwcBAAEDAAADBQQCBQsIDAYLDQ8JBwkLBwwKDREPEhIQFBYRDxQRFRATDhkXGhQaGx0YFRcaFSEfIiIgIxwiIyUgHSQpKycpJSooKyspLDEvMzQvLTg2OTY4NDk3OjM5Ojw3NEE+QkQ/PTxBQ0JAQ0dFSEhGSUtGQ0lHSkZJRE9NUVNOTEtQUk5QTFFPUldVWFVXU1hWWVJYWVtWU15cX19dYGJdW1xfW2BeYWNeXFtgYV1gXGdlaGplY2VnY2hmaWlucHFtam9tcHBucXZ0d3l0cXR2cnd1eHJ3eH17fn58f4F8eXl+f3x+en99gIWDhoiDgYOFgYaEh4GGh//+/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ywAAAAAFAAZAAAH/oAAgoOEhYaHiImKi4yNjo8AAQACkQADBJcEgpkEnQWfoKEFCQgJB58GBQYLrAqsCw6vsg0LDLUQD7m5Eg+8EbrAuRYTFBQTExYUFcUVycXMFBnS09IY1NYZGhfSHBve3Rvg3uPkGx0dHh4h6h8eHyEfHyDu8fEi9/j5JfcjIiT5KEygOEGwoEEVKk6kUKhihQsWKyKueNFi4osVLF5o3Aijo8ePMmbAkEFjhowYMmTcqGHDRg0cLWPayNFSBw8bO3b86NHjB5AePnz0+OkDiNGjRocoVSpk6ZAgT4cIIRKkKZEiRopo3cr1SBIkYIuAXaJkyRImZ802McvW7JMlFk6gQJkiV4qUuVHoUpmSl+4UKpAIBQIAOw==) repeat-x; float: left; height: 24px; padding: 4px 5px; color: #ffffff;}

.contentPane {clear: left; width: 99%; border: 1px solid black; margin: 0px 0px; padding: 5px 5px;}
.sumTable {margin-left: auto; margin-right: auto; text-align: center; border: 1px solid #000000; width: 55%;}
.sumTable td {text-align: center;}
.gal span {position: relative; top: 4px;}
.gbar {width: 100%; height: 24px; background-color: #cccccc; text-align: center;}
#gtop {position: relative; top: 0px; left: 0px;}
#gbottom {position: relative; bottom: 0px; left: 0px; clear: both;}
.gnav {height: 24px; width: 75px; cursor: pointer;}
div.gnav:hover {background-color: #6d6d6d; text-decoration: underline;}
.gc {width: 100%; clear: both; text-align: center; padding: 5px 5px;}
#gsbt, #gsbb {position: absolute; left: 0px; top: 0px;}
#gspt, #gspb {position: absolute; left: 75px; top: 0px;}
#gsnt, #gsnb {position: absolute; right: 75px; top: 0px;}
#gset, #gseb {position: absolute; right: 0px; top: 0px;}
#gjt, #gjb {position: absolute; top: 0px; left: 150px; width: 230px;}
#gjt select , #gjb select, .setup select {width: 160px; height: 22px; text-align: center; background-color: #cccccc; border: 1px solid #6d6d6d;}
.gp {width: 596px; height: 596px; margin: 1px 1px;  border: 1px dotted #000000; display: none; float: left;}
.gs {text-align: left; text-indent: 20px; width: 100%; height: 24px; position: relative; top: 0px; left: 0px; background-color: #cccccc;}
.gi {width: 596px; height: 572px;}
.setup { font-weight: normal; text-align: left; text-indent: 20px; width: 100%; height: 24px; position: relative; top: 0px; left: 0px; background-color: #cccccc;  }
.bold { font-weight: bold; font-family: Courier; }

/* ICONS */

.icon_profile {
	display: inline-block;
	width: 16px;
	height: 16px;
	vertical-align: middle;
	background: url(data:image/gif;base64,R0lGODlhEAAQAKEAAAAAAP8AAP///////yH5BAEKAAIALAAAAAAQABAAAAIxhI6pphnJ2nkoOhEAFRbRzV3Z84XepDzRiDmaBV5GKamttLB4de/H7OMFK4Ci8YgsAAA7 );
}

.icon_h1 {
	display: inline-block;
	width: 16px;
	height: 16px;
	vertical-align: middle;
	background: url(data:image/gif;base64,R0lGODlhEAAQAKEAAAAAAAAA/////////yH5BAEKAAIALAAAAAAQABAAAAIthI6ppo3sGoxpgrlqoDbgpzFYx3jVE5iphaTregqAS5tHWbuQkdfiBQwKKZECADs=);
}

.icon_h2 {
	display: inline-block;
	width: 16px;
	height: 16px;
	vertical-align: middle;
	background: url(data:image/gif;base64,R0lGODlhEAAQAMIAAAAAAAD//wAA/4CAgP///////////////yH5BAEKAAQALAAAAAAQABAAAAM8SAqs/g+EAKAlQNB2lxAS1WFfJnYZWHJQ6k5VW85nNKug5d6xjbs6XskxGDAyu5yiaDwihxCmEzliNnsJADs=);
}


.icon_graph {
	display: inline-block;
	width: 16px;
	height: 16px;
	vertical-align: middle;
	background: url(data:image/gif;base64,R0lGODlhEAAQAKEAAAAAAAAi/////////yH+FUNyZWF0ZWQgd2l0aCBUaGUgR0lNUAAh+QQBCgACACwAAAAAEAAQAAACMoSOqaaNFlyD8kQBQq6XiptogfZZoYmVInJ1p5WBjNkuTZ3Mnwg+t6RDTSoTgPGITBYAADs=);
}

.icon_tdirectory_c {
	display: inline-block;
	width: 16px;
	height: 16px;
	vertical-align: middle;
	background: url(data:image/gif;base64,R0lGODlhEAAQAMIAAICAgMDAwP//AP///wAAAP///////////yH5BAEKAAcALAAAAAAQABAAAAM6eLrcDBC6F0QNYB5wrY2RAgxkaZIAsQ1e16Wr237qOMvwKLs5u3u936V3m+VASJDqQGg6n0+NdNpIAAA7);
}

.icon_tdirectory_o {
	display: inline-block;
	width: 16px;
	height: 16px;
	vertical-align: middle;
	background: url(data:image/gif;base64,R0lGODlhEAAQAMIAAICAgP///8DAwP//AAAAAP///////////yH5BAEKAAcALAAAAAAQABAAAANCeLrcDBC6F2oF84AgRhdBFCmbZ4JWSGjc6QoAIc7iEG9pHsNy+7myGOtHvK1KxJNsxXqZYkwajcA8UK9YbGbLbSQAADs=);
}

.icon_green {
	display: inline-block;
	width: 24px;
	height: 24px;
	vertical-align: middle;
	background: url(data:image/gif;base64,R0lGODlhGAAYAKUgAADXOQHXOgLXOwPXOwPYPATYPAXYPQbYPQbYPgfYPwjYPwnYQArZQQzZQw7ZRA/ZRRHaRhPaSBTaSBXaSRfbSxnbTRvbThzbTx7cUCDcUiHcUiPcVCPdVCTdVS/eXj/hav///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////yH5BAEKACAALAAAAAAYABgAAAZ0QJBwSCwaj8ikcjm8MJMcAOB5lEinVKLjis2CGlynF8KNHDXJCvdhjAICRwzXceQa5dfEkWEnZrgFSANcHkMWXAJJC1wUQhRcA0oRXAAfj1eBSh2UlAZPnFcIVKAAoqOcCl4ElAxeQgFXra5CEwcbs7i5SEEAOw==);
}

.icon_yellow {
	display: inline-block;
	width: 24px;
	height: 24px;
	vertical-align: middle;
	background: url(data:image/gif;base64,R0lGODlhGAAYAMZLAOmTFeqTHO6PLeqXIuedE+mdG+qbJeakFuiiHeijHOSoDuelFuWoEOamGuOrDeaoGuenHuenH+ilKOWqGOSsEeqlKOqlKeioJeepI+OvEueqIuOvE+WtGuSuGOqnMOKyD+2kP+KzDu2kQemrKu2lQOitJ+K2EuK2E+G3Ee6nRuyqPOyrOOG5D+K4FO+nTu6qReC7EeK6FOG8D+G8EOG9FOC/D+G+EuG/EuDBDuDBE9/CEvCtVuDCEt/DEODCE9/DEd/DEt/DE+DDEt/EEODDE9/EEd/EEt/EE+DEEuDEE9/FEv///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////yH5BAEKAH8ALAAAAAAYABgAAAeogH+Cg4SFhoeIiYp/LhcMDg4KECSLhA01P0VGm0U4FJV/DzpGSqWlm0MhiyA5pEZCNDE8rj0QihObRkElgio5p6qJJ0RIRieELa4siy8rIwODOze5H6CFJklKRkAS1oIpKEebSR3efyIw4kZEHOZ/KLk+GO4eQdpGGu5/Ebk2+n8CLFSoYOCfQUIBEiRAUOBfhlwy/m04NUOiNiUV9QFYsOAAgYMgvQUCADs=);
}

.icon_red {
	display: inline-block;
	width: 24px;
	height: 24px;
	vertical-align: middle;
	background: url(data:image/gif;base64,R0lGODlhGAAYAIQUAP8AAP8EBP8FBf8KCv8LC/8PD/8QEP8VFf8WFv8ZGf8eHv8gIP8hIf8kJP8nJ/8qKv8rK/8sLP8tLf8wMP///////////////////////////////////////////////yH5BAEKAB8ALAAAAAAYABgAAAVV4CeOZGmeaKqKTeEWyXoiQA0MsknbeE7utZ5PBAQQhqOFDXBAiiJLhlO0lEw/yyvWps1eA9yroRbQfh4Ps/ozEbgFiilkGXPObXXkvZZHvgoOa4IqIQA7);
}

