<!doctype html>
<html>
<!--
CS 80 : 1697-8 Vicencio, John - Project (CSS)
Project: Search Engine Web App
Technologies: HTML5, CSS3, PHP, SQL (MySQL)
-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<title>About SMCoogle Search Engine</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
	<header>
	<nav>
		<?php include("include/nav.php"); ?>
	</nav>
	</header>
	<section>
	<h1>About</h1>
	<p>John Vicencio created the SMCoogle (<em>es-em-coo-gle</em>) Search Engine web program in Professor James Geddes Jr's Computer Science 80 (<em>Internet Programming</em>)
	2014 class at Santa Monica College.</p>
	</section>
	<section>
	<h2>Concept</h2>
	<p>SMCoogle Search Engine web application (app) is a program that searches, records a URL address (and content of it) and 
	identifies search items in a database based on recorded contents from it. SMCoogle demonstrates  <strong>dynamic web programming</strong> (PHP with SQL on Linux Apache MySQL PHP or 
	LAMP framework) with <strong>responsive design</strong> (CSS3 with HTML5) as the User Interface (UI) based on the 
	<strong>Model View Controller</strong> or MVC programming model.</p>
	<ul>
		<li><strong>User Interface</strong> - SMCoogle Search Engine web app shows a search field on the home (the default) page.
		A user types and submits a keyword item to show results that are retrieved from the database. The "look-and-feel" of 
		the UI is assembled so that it looks inviting to search and or index a URL address. When the user uses a mobile device
		like a smartphone or a tablet, the UI adjusts and responds to the size of the device. For example, the buttons resize to 
		larger sizes, font adjusts the size proportionate to the screen size, and images to smaller size to fit the device screen size
		all using <strong>CSS3/CSS</strong>. On the structure of the website using <strong>HTML5</strong>, 
		the whole web app is designed with semantic elements like &lt;header&gt;, &lt;footer&gt;, &lt;nav&gt;, and &lt;section&gt;. 
		These HTML5 elements provide "meaning" to the structure of the web page rather than using the regular HTML4 (or simply HTML) 
		elements; but not replacing HTML4 as most HTML5 is based on HTML in the first place.</li>
		<li><strong>MVC programming model</strong> - the search engine web app concept is based on a programming model where
		the data is retrieved from the MySQL database (model). PHP and SQL are used to program and to query requests (controller)
		where the user sees this information (view).</li>
		<li><strong>Dynamic programming</strong> - rather than simply displaying information, the search engine web app displays it
		<em>dynamically</em> since this information that is displayed changes. For example, the search box displays the keyword
		that the user searches using PHP. Another example is validation of the Search, Submit and Contact Forms where PHP 
		validates empty input boxes so that users are prompted to enter a string. In some cases, HTML5's input element attribute
		are used to make sure that users have entered a valid type of input like an email adress or so that users
		are required to enter them. In one instance, the footer dynamically shows a copyright year where it changes yearly
		using JavaScript.</li>
		<li><strong>Responsive design</strong> - the "look-and-fell" of the web app is based on a concept where the content 
		adapts to the screen size such as a smartphone. For example, the image changes using CSS3's media query and viewport 
		depending on the available pixel sizes. The web app, however, concentrates on the <em>programming</em> aspect rather than
		the design of it including the color theory.</li>
	</ul>
	</section>
	<section>
	<h2>Architecture</h2>
	<p>SMCoogle's construction (its programming) follows this bueprint. It follows the <strong>MVC</strong> approach
	since the scripts used (controller) send/receive the request from the user keyword submission (view) from the database (model).
	Search engine web page itself is a <strong>dynamic</strong> website which changes based on the user keyword submission; it is 
	a program or a web app that runs on a browser but mostly the same technologies used on many (static) websites (HTML/HTML5, CSS/CSS3) in addition to
	some programming languages (JavaScript, PHP) as well as a database on the server.</p>
	<ul>
		<li>
		<strong>Server and application set-up</strong> - SMCoogle web app is hosted on a web server. The server uses 
		<strong>Apache</strong> on a <strong>Linux</strong> operating system. It hosts the <strong>MySQL</strong>
		database. The <em>server-side</em> programming language used is <strong>PHP</strong>. PHP and MySQL work
		really well together where PHP communicates to MySQL database. For creating databases, tables and all other
		database objects, an internet programmer, web programmer and or a web (website) developer can either create them directly or through a script. 
		All the codes and/or files are located on the server. In other words, SMCoogle web app is based on 
		the <strong>LAMP</strong> framework. Using any editors, a web developer can work on a project like this web app. 
		Then transfer all the codes and files over to the web server using an <strong>FTP</strong> application. 
		Some internet/web programmer use a local <em>developing environment</em> with local server using a software called WAMP/XAMP/MAMP. 
		Also, it's very important to enable <strong>allow_url_fopen &equals; On</strong> from the <em>php.ini</em> since many web hosting services
		disables this feature by default due to security risks. Since this web app <em>opens</em> the data needed 
		from the URL entered, it's imperative that this feature is enabled. 
		</li>
		<li>
		<img class="zoom floatright" src="image/screenshot-directory.png" alt="Directory screenshot">
		<strong>Folder and file structures</strong> - the <strong>root</strong> directory (smccs80) has seven documents with three folders 
		(css, image, and include) so that documents are organized depending on their intended purposes. Files are <em>*.php</em> 
		for the web pages, <em>*.css</em> for style, and images like <em>*.jpg</em>. A configuration file called <em>php.ini</em> 
		enables Linux-Apache server to use a particular PHP function. You can upload all these files to some host server on a root directory 
		which corresponds to a web page address like http://somehost.com.</li>
		<li>
		<img class="zoom floatright" src="image/screenshot-mainpagecode.png" alt="Main page screenshot">
		<strong>Document structure (HTML and HTML5)</strong> - uses HTML5 that starts with &lt;!doctype html&gt; on top of HTML(4) 
		elements &lt;html&gt;, &lt;head&gt;, &lt;title&gt;, and &lt;body&gt;. To make the document (web page) meaningful, HTML5's
		elements are used to make sure that it make sense where the top section, the body section, and the bottom of the document.

			<ol>
				<li><strong>&lt;header&gt;</strong> - contains the header name title where you see "SMCoogle Search Engine" as a label as well
				as the <strong>&lt;nav&gt;</strong> section where you see the menu "Home, About, Contact, and Submit."</li>
				<li><strong>&lt;section&gt;</strong> - contains any contents in between the &lt;body&gt; element to show the
				search box with a button and including the <strong>&lt;aside&gt;</strong> section which simply shows an image depending on what page 
				(or not if search results were to be displayed). </li>
				<li><strong>&lt;footer&gt;</strong> - the bottom section of the document shows the copyright including the Privacy page </li>
				<li><strong>HTML entities</strong> - HTML displays characters and other contents (like images) onto the <em>browser</em>. 
				Characters such as less than (&lt;) and greater than (&gt;) signs could be  
				interpreted by the browsers as a HTML element such as using &lt;p&gt;. To show the actual character itself as greater than sign
				on the code itself you would enter the HTML entities. To display '<em>&lt;</em>' on the browser, on the code, you would enter
				<em>&amp;lt&semi;</em>. This is useful to show parts of the codes with using 
				special characters or symbols like equal sign '&equals;' to '&amp;&equals;&semi;.' This is also useful to convert 
				special characters and averting hack inserts to scripts (see details below about PHP scripts).</li>
			</ol>
		</li>
		<li>
		<img class="zoom floatright" src="image/screenshot-style.png" alt="CSS Style screenshot">
		<strong>Style layout (CSS and CSS3)</strong> - the styles on colors, sizes, and the way blocks are positioned or display are
		controlled by CSS <strong>styles.css</strong>, linked inside the &lt;head&gt; element located in the css folder.
			<ol>
				<li><strong>Color display</strong> - SMCoogle Search Engine web app uses the dark header and nav with grey background
				of the body element. Different sections of the document are separated visually to show where the header, menu, content and
				footer are.</li>
				<li><strong>Ease of use</strong> - the whole document is positioned in the middle with some padding from the top and the bottom 
				using the <strong>container</strong> class.
				Input boxes are sized so that users can enter a search keyword easily with a big blue button.</li>
				<li><strong>Mobile screen friendly</strong> - using CSS3's <strong>&commat;media</strong> query where styles are sized so that 
				images, padding and font size are sized to be read on small devices up to 630px or from most modern smartphones to
				the tablet.</li>
				<li><strong>Other on CSS3</strong> - hovering over different screen shots that are floated to the right
				zooms out using <strong>transition</strong> to create an animation without Flash.</li>
			</ol>
		</li>
		<li>
		<img class="zoom floatright" src="image/screenshot-mainpagecode.png" alt="Main page code screenshot">
		<strong>Functionality, logic and control (PHP, SQL and an instance of JavaScript)</strong> - PHP is mainly the technology that is used
		to program SMCoogle web app that uses SQL to query the database and a bit of a JavaScript to display a dynamic date-year on the footer.
		The document structure is separated so that HTML5 structures it in different parts. Pages that are common 
		among different documents in the root directory are separated to make sure changes are made just one time rather than
		changing them separately on each page. This is demonstrated by using PHP that adds the <strong>nav.php</strong> on the top part of the HTML5 
		document and <strong>footer.php</strong> at the bottom of it. Pages or scripts are compartmentalize for easy <em>reuse</em>
		and general web app management.
			<ol>
				<li>
				<img class="zoom floatright" src="image/screenshot-searchform.png" alt="Search form screenshot">
				<strong>Search query on the search page (index.php)</strong> - the search section of the web app uses a
				<strong>GET</strong> method on an HTML form elment since the information provided by the user isn't confidential as well
				that it creates a useful URL <strong>host.com/index.php?keyword&equals;John&amp;submit&equals;Search</strong> in case users want to 
				save the query where the keyword typed is 'John' as an example. The PHP <strong>script</strong> is in the same page using 
				<strong>&dollar;_SERVER['PHP_SELF']</strong> (see form's <em>action</em> attribute from the screen shot). For security purposes, <strong>htmlspecialchars()</strong> PHP function
				is employed to avert savy hackers who can inject sneaky codes that will mess up the web app.
				The server-side programming language (PHP) or script checks if the form is empty. It'll remind users to type a keyword search item in case they submitted an empty
				input box. Using <strong>include("filelocation/here.php")</strong> function, the script from main page pulls other scripts 
				from the <em>include</em> folder.
				<ul>
					<li>Connection and verifying authentication from a host (Linux/Apache) with a MySQL database
					(<strong>include/dbconnect.php</strong>) using <strong>&dollar;dbconnect = new mysqli(&dollar;servername, &dollar;dbusername, &dollar;dbpassword, &dollar;dbname)</strong> 
					(authenticates a connection to database using servername for the MySQL host, dbusername and dbpassword for username and password, and dbname for 
					the database).</li>
					<li>Creating a table in the database on the first time 
					(<strong>include/dbcreatetable.php</strong>) by connecting to an <em>assigned create query</em> 
					(with an SQL expression <strong>CREATE TABLE &dollar;tablename</strong> where the tablename is the variable with the 
					creating query expression) provided that table variable isn't found (using a query 
					<strong>DESCRIBE TABLE &dollar;tablename</strong>). Ideally, this applies to creating a database 
					(<strong>CREATE DATABASE &dollar;databasename</strong>).</li>
					<li>
					<img class="zoom floatright" src="image/screenshot-searchquery.png" alt="Searcy query screenshot">
					Finally, once all the database connection and set-up are completed, the search script begins
					(<strong>include/dbsearchquery.php</strong>). On the search script, it makes sure that 
					the user entered a keyword if not there will be a display that the input box is empty. 
					If a keyword is entered a search query using a <em>select</em> statement and a wildcard '&percnt;' 
					is used to check the database if the row in <em>pagecontent</em> column matches anything that is 
					associated with the keyword (<strong>SELECT * FROM &dollar;tablename WHERE pagecontent LIKE '&percnt;&dollar;keyword&percnt;'"</strong>).
					For example, if the user typed 'John', the query searches for anything that looks like 'John' before and after
					the word in a sentence or a paragraph. Then a conditional statement if <strong>&dollar;queryresult-&gt;num_rows &gt; 0</strong> 
					or if a search produces at least one record, it <em>loops</em> through the record 
					or <strong>while(&dollar;row &equals; &dollar;queryresult-&gt;fetch_assoc())</strong>, counts using <strong>substr_count(&dollar;row[pagecontent], &dollar;keyword)</strong>
					then collect the numbers through accumulation in <strong>&dollar;querytotalcount &plus;&equals; &dollar;queryresultcount</strong>
					and displays them.
					</li>
				</ul>
				</li>
				<li>
				<img class="zoom floatright" src="image/screenshot-cleandata.png" alt="Clean data script screenshot">
				<strong>Data integrity (inserting or sending clean data to and through the server)</strong> - users can add 
				a URL on the 'Submit' page (<strong>addurl.php</strong>) where the script file <em>inserturl.php</em>. In it, the script checks
				if the input box is empty or not. If a keyword is entered, the script cleans it to make sure that there are no funny
				characters that could inject malicious code. A <strong>cleandata()</strong> custom-made PHP function 
				was made to do this (<strong>cleandata.php</strong> inside the <em>include</em> folder). Another use of this custom-made PHP function 
				is to make sure that the Contact page (contact.php in the root directory) have clean input data like name, email and message.
				Going back to the Submit page, the script uses a function called <strong>file_get_contents("some url")</strong>. The input field on 
				the Submit page assigns the typed keyword on a PHP <em>url</em> variable where it reads the external URL file into a string.
				That string is assigned to <em>pagedata</em> variable where any single quotes is replaced with space. The cleandata() function took
				care of cleaning the data where any special characters are converted to HTML entities (demonstrated using htmlspecialchars() function
				in custom-made cleandata() function). Although <em>validation</em> is another form of measure to handle data
				inputs on Contact page, for example, the focus of the web app is the concept of search engine even though it does show
				some HTML5 validation using required, pattern (regex) or text type (such as 'url' where HTML5 forces the user to enter only http://url.com type of 
				string) attributes. Ideally, validations should also not just only be done on both the client-side
				(even though HTML5 and JavaScript could be disabled) and server-side (in this case PHP or some other like ASP.NET). 
				Also, each folders in the directory has <em>index.php</em> so that users will not be able
				to look at what files are in these folders.</li>
			</ol>
		</li>
	</ul>
	</section>
	<footer>
		<?php include("include/footer.php"); ?>
	</footer>
	</div>
</body>
</html>