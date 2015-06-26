<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('corg.us');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('cbgravelle@hotmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'mysql1.000webhost.com',
                      /*username*/'a2828683_dev',
                      /*password*/'c0rgweb',
                      /*database name*/'a2828683_dev',
                      /*table name*/'usertest');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('RypJbjMPaMo3Ib1');

?>