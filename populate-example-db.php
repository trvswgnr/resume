<?php
include 'db.php';
/* ADD SKILLS TO DB */
/*
$skills = [
	"Javascript/ES6",
	"PHP",
	"MySQL",
	"Wordpress",
	"Sass/SCSS",
	"CSS3",
	"HTML5",
	"Bash/CLI",
	"Node.js",
	"Git",
	"Linux",
	"Apache",
	"Symfony",
	"OOP",
	"REST API",
	"Docker",
	"Magento",
	"React",
	"Bootstrap",
	"Shopify/Liquid",
	"PhpStorm",
	"AWS",
	"Photoshop",
	"Illustrator",
	"JIRA",
	"Asana",
	"Sketch"
];

// create a table for skills if it doesnt exist
$sql_skills_table = "CREATE TABLE IF NOT EXISTS skills (
skill VARCHAR(1000) NULL,
id INT AUTO_INCREMENT,
PRIMARY KEY (id)
)";
$conn->query($sql_skills_table) or die(var_dump($conn->errorInfo()));

// add skills to db
$sql_insert_skills = "INSERT INTO skills (skill) VALUES ";
foreach ($skills as $skill) {
	$sql_insert_skills .= "('" . $skill . "'),";
}
$sql_insert_skills = rtrim($sql_insert_skills,",");

$conn->query($sql_insert_skills) or die(var_dump($conn->errorInfo()));
*/

/* ADD EXPERIENCE TO DB */
/*
$jobs = [
	[
		"company"     => "Chargebacks911",
		"year"        => "2018",
		"location"    => "Clearwater, FL",
		"position"    => "Front End Developer",
		"description" => "Worked on a team where I designed and developed a single page web app for on-boarding new clients. Quickly created tailored, responsive landing pages for targeted campaigns with Hubl templating language. Created a streamlined, module-based workflow using current best practices and latest web technologies such as Sass/SCSS, React, Webpack, and Babel. Optimized primary company website for speed and usability. Created Wordpress plugins and components."
	],
	[
		"company"     => "Sparxoo",
		"year"        => "2017",
		"location"    => "Tampa, FL",
		"position"    => "Web & Mobile Developer",
		"description" => "Constructed workflow and standards for quick production and seamless handoff. Worked directly with designers and accounts to create best-in-class websites for premier clients from a variety of industries."
	],
	[
		"company"     => "Fourth Coast Media",
		"year"        => "2016",
		"location"    => "Pensacola, FL",
		"position"    => "Tech Lead",
		"description" => "Worked directly with clients and team members to create custom websites tailored to specific situations. Implemented a variety of frameworks and libraries for rapid prototyping and quick development. Set up and maintained multiple ecommerce and database-driven sites on Shopify, Bigcommerce, and WordPress. Optimized sites for search engine visibility and managed SEM accounts."
	],
	[
		"company"     => "Cyber Sytes",
		"year"        => "2015",
		"location"    => "Panama City, FL",
		"position"    => "Developer & Project Manager",
		"description" => "Organized and web projects from start to finish, working with sales staff and clients directly. Set up Content Management Systems and trained clients to use newly developed features."
	]
];
// create a table for experience if it doesnt exist
$sql_experience_table = "CREATE TABLE IF NOT EXISTS experience (
company VARCHAR(1000) NULL,
year VARCHAR(1000) NULL,
location VARCHAR(1000) NULL,
position VARCHAR(1000) NULL,
description VARCHAR(5000) NULL,
id INT AUTO_INCREMENT,
PRIMARY KEY (id)
)";
$conn->query($sql_experience_table) or die(var_dump($conn->errorInfo()));

// add jobs to db
$sql_insert_jobs = "INSERT INTO experience (company, year, location, position, description) VALUES ";
foreach ($jobs as $job) {
	$sql_insert_jobs .= "('" . $job["company"] . "', '" . $job["year"] . "', '" . $job["location"] . "','" . $job["position"] . "','" . $job["description"] . "'),";
}
$sql_insert_jobs = rtrim($sql_insert_jobs,",");

$conn->query($sql_insert_jobs) or die(var_dump($conn->errorInfo())); */
?>
