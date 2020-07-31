<?php
set_time_limit(0);
// SETTINGS  :-
$clientdate = '2020-07-31T19:32:20.677Z';
$cookiedata = '_ga=GA1.2.1240056005.1596058674; _uetvid=deeb3df4ca25727a55ef784d6c5bee58; _fbp=fb.1.1596058675476.797617281; __tawkuuid=e::verzeo.in::FNOYAp8QqY7gnZvhz7YbC3qJSpMb7b50rySDn2B9EUzeA96vZy9Qq2GpGK51ME2D::2; visitor_id=554896906; _thinkific_session=RFgvbWFDRzF4WldNMTlMcWtoM0NtRlB4c2ZORlNCYVRUeExCN3pUd0lud0p3Z0FLNDQ0K1Q4aklXVWV6N3hKbDRJQkpDTTdYeWRoMzBYY01CZDdaU2gyWlFGZk1pRU56RnVrME5IWklCUldKenZuQ1ZQRUJ3elM0Wk5aNGs0ZThFTURDVTd5TFA3Zk1lbFlMSkE2eE5RTDRhb2VmSERZRkZzY25UMGdTbjU3S1JrMUZHMGkyYnZHbzJyeEVGejVjMkRuekVES1l6RTJ6TVZ0QjlFRTdMZ0JvUGg4cWtCQmMrMWFZRVFOK21wSlpjMjFjSXQ5Qk5QQlJwN3JKSjNHL2lFUWtHVWRKSkJobUVxMFBhV1l2QXR2QUdkeTVrWXcrL1BUL0dBYmlYNkFJN21IVlpONzQ4MHFuZjBlTHVoTWwyNjNHejNGYkRsZ25SQnpsT0pQL3I3RzBYbjhFWEU3T1cyV0tkSnY0NlJoUFBjRy8yTFpMWVBDanFJVWdLaXcyUTMyOWRvMVhtd2NtbDNkYXlqc1dWc3p6eWk1UHpWR2c4THBiUCtBeTBKYlk2b2xwUWhNeVNWMTdpbnpjVjZRbjhWeGFhcDRBRmE0c3pJTXYrTTBtZlpGcmdON2hZejdsNStXeVhsdjJUcGs9LS1wNW85QUh4b3NaQ21nVkpUbGZSZGt3PT0%3D--89a38890940ef669d8481fd3900651dfd65c64a3';


/*

######################
##
##
##
##
##
##
##
######################
					##
					##
					##
					##
					##
					##
					##
					##
######################

*/

error_reporting(0); //Disabled for keeping console clean. Set to 1 if you got an error or problem while downloading :)
echo "THINKIFIC DOWNLOADER".PHP_EOL."v2.0 ~ 1st August 2020".PHP_EOL."Author : SumeetWeb ~ https://github.com/sumeetweb".PHP_EOL;

/*

THINKIFIC DOWNLOADER
v2.0 ~ 1st August 2020
Author : SumeetWeb ~ https://github.com/sumeetweb

This script only downloads enrolled courses from thinkific based website.
Script to be used for personal use only. Author is not responsible for anything you do by using the script.

Currently Downloads : 
		1. Notes 
		2. Videos

Tested Websites : All Thinkific Based WebSites

Planned : 
		1. Quiz Downloads
		2. Chapterwise Downloading of Course

Known BUGS : 1. Video folder is not creating in Windows OS, in place a blank file is being generated.
Solution : USE LINUX BASED OS TO RESOLVE THIS.
		  
USAGE :- 
!!! RUN THIS SCRIPT ONLY INSIDE A BLANK FOLDER FOR PROPER MANAGEMENT OF FILES !!!
!!! Use php cli to run this script !!! - 

php run.php <LINK-HERE>		
  
LINK FORMAT :  https://<THINKIFIC-WEBSITE-URL>/api/course_player/v2/courses/<COURSE-NAME/SLUG>

EXAMPLE URLS LIST of a Website ---

https://courses.packtpub.com/api/course_player/v2/courses/python

https://courses.packtpub.com/api/course_player/v2/courses/go

https://courses.packtpub.com/api/course_player/v2/courses/php

https://courses.packtpub.com/api/course_player/v2/courses/java

https://courses.packtpub.com/api/course_player/v2/courses/javascript

https://courses.packtpub.com/api/course_player/v2/courses/sql

https://courses.packtpub.com/api/course_player/v2/courses/data-science

https://courses.packtpub.com/api/course_player/v2/courses/c-plus-plus

https://courses.packtpub.com/api/course_player/v2/courses/clojure

https://courses.packtpub.com/api/course_player/v2/courses/supervised-learning

https://courses.packtpub.com/api/course_player/v2/courses/deep-learning-with-keras

https://courses.packtpub.com/api/course_player/v2/courses/data-visualization

https://courses.packtpub.com/api/course_player/v2/courses/the-applied-sql-data-analytics-workshop

https://courses.packtpub.com/api/course_player/v2/courses/html-css

https://courses.packtpub.com/api/course_player/v2/courses/ruby

COOKIE IS MUST FOR AUTHORISATION, ELSE YOU WILL GET AUTHORISATION ERROR / INTERNAL SERVER ERROR
:)

*/

// MAIN FUNCTIONS --START 

function query($url)
{
	global $clientdate, $cookiedata;

    $referer = '';
    $headers[] = 'Accept-Encoding: gzip, deflate, br';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Site: cross-site';
    $headers[] = 'x-requested-with: XMLHttpRequest';
	
	//MODIFY YOUR DATE AND COOKIES BELOW
	$headers[] = 'x-thinkific-client-date: '.$clientdate;
    $headers[] = 'cookie: '.$cookiedata;

	//DONT EDIT BELOW THIS LINE -- ~~~!!! DONOT MODIFY BELOW !!!~~~
	
	$useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.70 Safari/537.36';
    $process = curl_init($url);
    curl_setopt($process, CURLOPT_POST, 0);
    curl_setopt($process, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($process, CURLOPT_HEADER, 0);
    curl_setopt($process, CURLOPT_USERAGENT, $useragent);
    curl_setopt($process, CURLOPT_ENCODING, 'gzip,deflate,br');
    curl_setopt($process, CURLOPT_REFERER, $referer);
    curl_setopt($process, CURLOPT_TIMEOUT, 60);
    curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);

    $return = curl_exec($process);
    curl_close($process);

    return $return;
}

function fdownload($url,$destloc)
{
	global $clientdate, $cookiedata;
	
	$referer = '';
    $headers[] = 'Accept-Encoding: gzip, deflate, br';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'x-requested-with: XMLHttpRequest';
	
	$headers[] = 'x-thinkific-client-date: '.$clientdate;
    $headers[] = 'cookie: '.$cookiedata;
	
	$useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.70 Safari/537.36';
    $process = curl_init($url);
    curl_setopt($process, CURLOPT_POST, 0);
    curl_setopt($process, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($process, CURLOPT_HEADER, 1);
    curl_setopt($process, CURLOPT_USERAGENT, $useragent);
    curl_setopt($process, CURLOPT_ENCODING, 'gzip,deflate,br');
    curl_setopt($process, CURLOPT_REFERER, $referer);
    curl_setopt($process, CURLOPT_TIMEOUT, 60);
    curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($process, CURLOPT_FOLLOWLOCATION, 0);

    $return = curl_exec($process);
    curl_close($process);
	
	
	$headers = [];
	$output = rtrim($return);
	$data = explode("\n",$return);
	$headers['status'] = $data[0];
	array_shift($data);

	foreach($data as $part){
		$middle = explode(":",$part,2);

		if ( !isset($middle[1]) ) { $middle[1] = null; }

		$headers[trim($middle[0])] = trim($middle[1]);
	}	
	
	$durl = $headers["location"];
	$path = parse_url($durl);
	$p = explode("/", $path["path"]);
	$fname = end($p);
	
	$downloadedFileContents = file_get_contents($durl);
//	echo 'Before \n' . memory_get_usage()/1024 . 'kb \n';
	$save = file_put_contents($fname, $downloadedFileContents);	
	$fileloc = $destloc."/".$fname; //Destination Folder
	rename($fname, $fileloc);	

}

function replace_unicode_escape_sequence($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}

function unicode_decode($str) {
    return preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $str);
}

// MAIN FUNCTIONS --END ~~~!!! DONOT MODIFY ABOVE THIS LINE !!!~~~

$url = query($argv[1]);
$p = parse_url($argv[1]);
echo "Fetching Course Contents... Please Wait...".PHP_EOL;

$data = json_decode($url,true);

if(isset($data["error"]))
{
	echo $data["error"].PHP_EOL;
}
else
{
	echo "Starting Download...".PHP_EOL;
}
$i = 0;
foreach($data as $dat)
{
    foreach($dat as $d)
    {
    	if($d["contentable_type"] == "HtmlItem" && $d["display_name"] == "Text") //For Downloading Notes which are in HTML Unicode Format
		{
			$dc = $i.'. '.$d["name"];
			mkdir($dc, 0755);
			echo "Downloading ".$d["name"].PHP_EOL;
			$result = query("https://".$p['host']."/api/course_player/v2/html_items/".$d['contentable']);
			$temp = json_decode($result,true);
			$temp2 = unicode_decode($temp["html_item"]["html_text"]); //Store Unicode Decoded HTML Code to temp2
			//Code to store html code into a file called $d["name"] .html
			$fname = $d["name"].".html";
			$myfile = fopen($fname, "w");
			fwrite($myfile, $temp2);
			fclose($myfile);
			$fileloc = $d["name"]."/".$fname;
			rename($fname, $fileloc);
			$i++;
		}

		else if($d["contentable_type"] == "Lesson" && $d["display_name"] == "Video") // To download videos
		{
			$dc = $i.'. '.$d["name"];
			mkdir($dc, 0755);
			$result = query("https://".$p['host']."/api/course_player/v2/lessons/".$d['contentable']);
			$temp = json_decode($result,true);
			if($temp["lesson"]["downloadable"] == true)
			{
				$temp2 = $temp["videos"][0]["url"]; //Store Video URL to temp
				$parts = parse_url($temp2);
				$fileName = basename($parts["path"]);
				echo "Downloading Video : ".$fileName.PHP_EOL;
			
				// Download the video inside a folder $d["name"]
				$downloadedFileContents = file_get_contents($temp2);
				$save = file_put_contents($fileName, $downloadedFileContents);
				$fileloc = $d["name"]."/".$fileName;
				rename($fileName, $fileloc);
				$i++;
			}
			else
			{
				$vname = $d['name'];
				echo "Downloading Video : ".$vname.PHP_EOL;
				$destf = $i.'. '.$d["name"];
				$sendurl = "https://".$p['host']."/api/course_player/v2/lessons/".$d['contentable']."/download";
				fdownload($sendurl,$destf);
				$i++;
			}
		}
	}
}

?>