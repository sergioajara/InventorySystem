<?php

date_default_timezone_set('America/New_York');

// using ldap bind
$ldaprdn  = 'wbtest@live.kutztown.edu';     // ldap rdn or dn
$ldappass = '4.nobletruths';  // associated password

// connect to ldap server
$ldapconn = ldap_connect("ldaps://ldap.kutztown.edu")
    or die("Could not connect to LDAP server.");

ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3); 
ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0); 

if ($ldapconn) {

    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // verify binding
    if ($ldapbind) {
        echo "LDAP bind successful...</br>";
    } else {
        echo "LDAP bind failed...";
    }

}

echo "Searching for (samaccountname=sjara163) ... <br />";
// Search surname entry
$sr=ldap_search($ldapconn, "dc=students,dc=kutztown, dc=edu", "samaccountname=sjara163") or die("Could not search");  
echo "Search result is " . $sr . "<br />";

echo "Number of entries returned is " . ldap_count_entries($ldapconn, $sr) . "<br />";

echo "Getting entries ...<p>";
$info = ldap_get_entries($ldapconn, $sr);
echo "Data for " . $info["count"] . " items returned:<p>";

for ($i=0; $i<$info["count"]; $i++) {
    echo "dn is: " . $info[$i]["dn"] . "<br />";
    echo "first cn entry is: " . $info[$i]["cn"][0] . "<br />";
    echo "first email entry is: " . $info[$i]["mail"][0] . "<br /><hr />";
}

echo "Closing connection";
ldap_close($ldapconn);


?>
