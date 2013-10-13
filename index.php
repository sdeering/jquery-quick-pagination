<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta name="keywords" content="jQuery pagination demo" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="../script.js"></script>



<script type="text/javascript" src="http://www.jquery4u.com/demos/jquery-quick-pagination/js/jquery.quick.pagination.min.js"></script>

<link rel="stylesheet" type="text/css" href="../styles.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">

<script type="text/javascript">
$(document).ready(function() {
	$("ul.pagination1").quickPagination();
	$("ul.pagination2").quickPagination({pagerLocation:"both"});
	$("ul.pagination3").quickPagination({pagerLocation:"both",pageSize:"3"});
});
</script>

<style type="text/css">
#content { background-color:white; }
</style>



<title>jQuery Quick Pagination Demo | jQuery4u</title>
</head>
<body onload="init()"  >
<div id="page-wrap">
	<?php include("../header.php"); ?>

	<div id="content">
<h1>jQuery Quick Pagination Demo</h1>
<p>Use jQuery to convert long lists and page content into numbered pages in seconds! <strong><a href="http://www.jquery4u.com/demos/jquery-quick-pagination/js/jquery.quick.pagination.min.js">jquery.quick.pagination.js</a></strong> plugin is very lightweight, only 3kb! And I've tested in on every browser and it is very stable.</p>

    <p>
<a class="seelivedemo" href="http://jquery4u.com/tutorials/jquery-quick-pagination/">Tutorial</a>
<a class="seelivedemo" href="https://github.com/sdeering/jquery-quick-pagination">Download</a>
</p>

<!-- plugin html -->


<h2>First example</h2>
<p>Default options 10 list items per page and page navigation at bottom.</p>
           <code>
        	<pre>
    $("ul.pagination1").quickPagination();
            </pre>
        </code>


<ul class="pagination1">
	<li>1 - Item 1 of 25</li>
    <li>2 - Item 2 of 25</li>
    <li>3 - Item 3 of 25</li>
    <li>4 - Item 4 of 25</li>
    <li>5 - Item 5 of 25</li>
    <li>6 - Item 6 of 25</li>

    <li>7 - Item 7 of 25</li>
    <li>8 - Item 8 of 25</li>
    <li>9 - Item 9 of 25</li>
	<li>10 - Item 10 of 25</li>
    <li>11 - Item 11 of 25</li>
    <li>12 - Item 12 of 25</li>

    <li>13 - Item 13 of 25</li>
    <li>14 - Item 14 of 25</li>
    <li>15 - Item 15 of 25</li>
    <li>16 - Item 16 of 25</li>
    <li>17 - Item 17 of 25</li>
    <li>18 - Item 18 of 25</li>

    <li>19 - Item 19 of 25</li>
    <li>20 - Item 20 of 25</li>
    <li>21 - Item 21 of 25</li>
    <li>22 - Item 22 of 25</li>
    <li>23 - Item 23 of 25</li>
    <li>24 - Item 24 of 25</li>
	<li>25 - Item 25 of 25</li>
</ul>

<div class="clearing"></div>

<h2>Second example</h2>
<p>Default options 10 list items per page and page navigation at top and bottom.</p>
            <code>
        	<pre>
   $("ul.pagination2").quickPagination({pagerLocation:"both"});
            </pre>
        </code>


 <ul class="pagination2">
	<li>1 - Item 1 of 25</li>
    <li>2 - Item 2 of 25</li>
    <li>3 - Item 3 of 25</li>
    <li>4 - Item 4 of 25</li>
    <li>5 - Item 5 of 25</li>
    <li>6 - Item 6 of 25</li>

    <li>7 - Item 7 of 25</li>
    <li>8 - Item 8 of 25</li>
    <li>9 - Item 9 of 25</li>
	<li>10 - Item 10 of 25</li>
    <li>11 - Item 11 of 25</li>
    <li>12 - Item 12 of 25</li>

    <li>13 - Item 13 of 25</li>
    <li>14 - Item 14 of 25</li>
    <li>15 - Item 15 of 25</li>
    <li>16 - Item 16 of 25</li>
    <li>17 - Item 17 of 25</li>
    <li>18 - Item 18 of 25</li>

    <li>19 - Item 19 of 25</li>
    <li>20 - Item 20 of 25</li>
    <li>21 - Item 21 of 25</li>
    <li>22 - Item 22 of 25</li>
    <li>23 - Item 23 of 25</li>
    <li>24 - Item 24 of 25</li>
	<li>25 - Item 25 of 25</li>
</ul>

<div class="clearing"></div>

<h2>Third example</h2>
<p>Specified 3 list items per page and page navigation at top and bottom.</p>
            <code>
        	<pre>
   $("ul.pagination3").quickPagination({pagerLocation:"both",pageSize:"3"});
            </pre>
        </code>


 <ul class="pagination3">
	<li>1 - Item 1 of 25</li>
    <li>2 - Item 2 of 25</li>
    <li>3 - Item 3 of 25</li>
    <li>4 - Item 4 of 25</li>
    <li>5 - Item 5 of 25</li>
    <li>6 - Item 6 of 25</li>

    <li>7 - Item 7 of 25</li>
    <li>8 - Item 8 of 25</li>
    <li>9 - Item 9 of 25</li>
	<li>10 - Item 10 of 25</li>
    <li>11 - Item 11 of 25</li>
    <li>12 - Item 12 of 25</li>

    <li>13 - Item 13 of 25</li>
    <li>14 - Item 14 of 25</li>
    <li>15 - Item 15 of 25</li>
    <li>16 - Item 16 of 25</li>
    <li>17 - Item 17 of 25</li>
    <li>18 - Item 18 of 25</li>

    <li>19 - Item 19 of 25</li>
    <li>20 - Item 20 of 25</li>
    <li>21 - Item 21 of 25</li>
    <li>22 - Item 22 of 25</li>
    <li>23 - Item 23 of 25</li>
    <li>24 - Item 24 of 25</li>
	<li>25 - Item 25 of 25</li>
</ul>

<br/>
<div class="clearing"></div>
<!-- end plugin html -->
<br/>
<br/>

	<p>
<a class="seelivedemo" href="http://jquery4u.com/tutorials/jquery-quick-pagination/">Tutorial</a>
<a class="seelivedemo" href="http://www.jquery4u.com/demos/jquery-quick-pagination/jquery-quick-pagination.zip">Download</a>
</p>
</div>

	<!-- footer (includes analytics) -->
	<?php include("../footer.php"); ?>

</div> <!-- end page wrap -->
</body>
</html>