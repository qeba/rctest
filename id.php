<?php

/* A uniqid, like: 4b3403665fea6 */
printf("uniqid(): %s\r\n", uniqid());

/* We can also prefix the uniqid, this the same as 
 * doing:
 *
 * $uniqid = $prefix . uniqid();
 * $uniqid = uniqid($prefix);
 */
printf("uniqid('php_'): %s\r\n", uniqid('php_'));

/* We can also activate the more_entropy parameter, which is 
 * required on some systems, like Cygwin. This makes uniqid()
 * produce a value like: 4b340550242239.64159797
 */
printf("uniqid('', true): %s\r\n", uniqid('', true));

echo '<\br>';
//creates a unique id with the 'about' prefix $a = uniqid(about); echo $a; echo "<br>";
//creates a longer unique id with the 'about' prefix $b = uniqid (about, true); Echo $b; echo "<br>";
$c = uniqid (rand (),true); echo $c; echo "<br>";
//this md5 encrypts the username from above, so its ready to be stored in your database $md5c = md5($c); echo $md5c; ?> 


?>