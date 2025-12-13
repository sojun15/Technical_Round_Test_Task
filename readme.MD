# Planning Documentation
## Project Purpose
<h3> Build a URL Shorter where can perform those types of operation:</h3>
<li>Shorten url</li>
<li>Login url</li>
<li>View their url</li>
<li>Edit or Update their url</li>

<h3> For completing this task, I use different types of programming language</h3>
<li>Frontend: Laravel and Tailwind CSS </li>
<li>Backend: Laravel </li>
<li>Database: MySQL

<h3>In database schema, i will create two table that name 'url_shorter' and 'user_info'. Here i need different types of column such as:</h3>
<h4>url_shorter table:</h4>
<li>id (integer,20) </li> <!-- Primary key -->
<li>user_id(integer,20)</li> <!-- Foreign key -->
<li>Orginal_url (string,50) </li>
<li>Shorter_url (string,30) </li>
<li>created_at (timeStamp)</li>

<h4>user_info</h4>
<li>user_id(integer,20)</li>  <!-- Primary key -->
<li>password(string,255)</li>
<li>email(string,255)</li>

<h3> Here i need to create different types of routes such as:</h3>
<li>login route </li>
<li>register route</li>
<li>view route</li>