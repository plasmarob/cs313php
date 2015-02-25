<html>
<head>
<link href="css/private.css" rel="stylesheet">
</head>
<body>

<?php

 // First we execute our common code to connection to the database and start the session
    require("common.php");
    
    // At the top of the page we check to see whether the user is logged in or not
    if(empty($_SESSION['user']))
    {
        // If they are not, we redirect them to the login page.
        header("Location: login.php");
        
        // Remember that this die statement is absolutely critical.  Without it,
        // people can view your members-only content without logging in.
        die("Redirecting to login.php");
    }
    
    // Everything below this point in the file is secured by the login system
    
    // We can display the user's username to them by reading it from the session array.  Remember that because
    // a username is user submitted content we must use htmlentities on it before displaying it to the user.
?>


<fieldset class="quiz">
<div id="lesson">
<p></p>
<h1>Lesson 2 : How JSON Works</h1>
<p> Here's an example of what JSON looks like: </p>
<p> {"employees":[<br/>
    {"firstName":"John", "lastName":"Doe"},<br/>
    {"firstName":"Anna", "lastName":"Smith"},<br/>
    {"firstName":"Peter", "lastName":"Jones"}<br/>
   ]}
</p>

<p> The technical explanation goes like this:</p>
<p>
JSON uses {} to store objects, and [] to store arrays.<br/>
values, the info we store, are named by other info that are like rules, called keys. <br/>
Together, these are called key-value pairs, and look like this: "key":"value".<br/>
An object can have a list of things separated by commas.<br/>
In the case of our example, we store people as {"firstName":____, "lastName":____} objects.
</p>
<p> An easier explanation goes like this:</p>
<p> An array is a list of items. A list of the first 3 numbers would be the array [1,2,3] .</p>
<p> An object is a thing. In our example, we're using a {} to represent a person, 
which has a firstName and a lastName inside it.</p>
<p> Our example is one big JSON object. The whole thing is one big {} with stuff inside.<br/>
Inside it, we hold a key, "employees", with a value that is an array of people. 
(Notice that with an array, we can have a key point to a whole bunch of stuff!)
</p>
<p>Inside the [ and ], we have three {} sets, separated by commas (notice them on the end).</p>
<p> Now let's look at another example. Let's do a farm this time.</p>

<p> {"barn":<br/>
    [<br/>
    {"type":"horse", "color":"Brown", "name":"Clover"},<br/>
    {"type":"horse", "color":"White", "name":"Snow"},<br/>
    {"type":"horse", "color":"Black", "name":"Stormy"},<br/>
    ],<br/>
    "field":<br/>
    [<br/>
    {"type":"sheep", "color":"White"},<br/>
    {"type":"goat", "color":"Gray", "horns":"short"},<br/>
    {"type":"cow", "color":"Black", "name":"Bessey"},<br/>
    ],<br/>
   }<br/>
</p>

<p>
Hopefully that makes sense now. In our JSON objet we have a barn and a field.<br/>
In each of them, we have some {} animal objects.<br/> 
Notice how they can have different attributes, and not all are needed!<br/>
JSON is flexible, and the program using it will decide what you need to have.
</p>


<a href="quiz2.php">take quiz!</a>
<a href="private.php">Go back</a>
</div>
</fieldset>

</body>
</html>