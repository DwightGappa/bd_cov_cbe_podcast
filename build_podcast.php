<?php
header("Content-Type: application/xml; charset=UTF8");

function csv_to_array($filename='', $delimiter=',')
{
 /**
 * Convert a comma separated file into an associated array.
 * The first row should contain the array keys.
 * 
 * Example:
 * 
 * @param string $filename Path to the CSV file
 * @param string $delimiter The separator used in the file
 * @return array
 * @link http://gist.github.com/385876
 * @author Jay Williams <http://myd3.com/>
 * @copyright Copyright (c) 2010, Jay Williams
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
	if(!file_exists($filename) || !is_readable($filename))
		return FALSE;
	
	$header = NULL;
	$data = array();
	if (($handle = fopen($filename, 'r')) !== FALSE)
	{
		while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
		{
			if(!$header)
				$header = $row;
			else
				$data[] = array_combine($header, $row);
		}
		fclose($handle);
	}
	return $data;
}

#functions url_origin and full_url taken from http://stackoverflow.com/a/8891890/175071.
function url_origin( $s, $use_forwarded_host = false )
{
	#Taken from http://stackoverflow.com/a/8891890/175071
    $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
    $sp       = strtolower( $s['SERVER_PROTOCOL'] );
    $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
    $port     = $s['SERVER_PORT'];
    $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
    $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
    $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
    return $protocol . '://' . $host;
}

function full_url( $s, $use_forwarded_host = false )
{
	#Taken from http://stackoverflow.com/a/8891890/175071
    return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
}

$absolute_url = full_url( $_SERVER );
$url_parent_directory_of_php_file = dirname($absolute_url);


$cbe_books_of_bible_mp3s_csv_file_location = './cbe_books_of_bible_mp3s.csv';

if(file_exists($cbe_books_of_bible_mp3s_csv_file_location) || is_readable($cbe_books_of_bible_mp3s_csv_file_location)){
	$array_books_of_bible_mp3s_csv = csv_to_array($cbe_books_of_bible_mp3s_csv_file_location);
}
else
{
	exit("unable to open file ($cbe_books_of_bible_mp3s_csv_file_location)");
}




#prepare rss channel data in variables
#using explict encoding to utf8 for forced utf8 enconding of xml file
$str_utf8_channel_title = utf8_encode('Covenant - Community Bible Experince Podcast');
$str_utf8_channel_link =  utf8_encode('http://cbe.covchurch.org/') ;
$str_utf8_channel_description =  utf8_encode('This Podcast is the .mp3 audio readings for the Covenant Church - Community Bible Experince.  Fall 2016 (9/25/2016)');
$str_utf8_channel_language =  utf8_encode('en-us');
$str_utf8_channel_image_title =  utf8_encode('Covenant - Community Bible Experince');
$str_utf8_channel_image_url =  utf8_encode($url_parent_directory_of_php_file . '/Cov-CBE_logo.jpg');
$str_utf8_channel_image_width =  utf8_encode('1963');
$str_utf8_channel_image_height =  utf8_encode('776');
$str_utf8_channel_pubdate = utf8_encode(date(DATE_RSS));

#Create base XML documnet
$domXML = New domDocument('1.0','utf8');

#RSS tag and attributes
#Using Itunes podcast extensions for better Apple product capatibility
$RSSrootelt = $domXML->createElement("RSS");
$RSSattr1 = $domXML->createAttribute('version');
$RSSattr1Val = $domXML->createTextNode('2.0');
$RSSattr1->appendChild($RSSattr1Val);

#Using Itunes podcast extensions for better Apple product capatibility
$RSSattr2 = $domXML->createAttribute('xmlns:itunes');
$RSSattr2Val = $domXML->createTextNode('http://www.itunes.com/dtds/podcast-1.0.dtd');
$RSSattr2->appendChild($RSSattr2Val);

$RSSrootelt->appendChild($RSSattr1);
$RSSrootelt->appendChild($RSSattr2);

#Write Root node to XML DOM
$RSSrootNode = $domXML->appendChild($RSSrootelt);

#Channel tag
$Channelelt = $domXML->createElement('channel');



#Add channel tag as child of RSS tag
$ChannelNode = $RSSrootNode->appendChild($Channelelt);

#channel data

#title
$ChannelTitleELT = $domXML->createElement('title');
$ChannelTitleValue = $domXML->createTextNode($str_utf8_channel_title);
$ChannelTitleNode =  $ChannelNode->appendChild($ChannelTitleELT);
$ChannelTitleNode->appendChild($ChannelTitleValue);

#



foreach ($array_books_of_bible_mp3s_csv as $csv_row_array)
{
	
	#reads in episode details from $csv_row_array
	
	$week_number = $csv_row_array['week_number'];
	$day_number = $csv_row_array['day_number'];
	$file_url = $csv_row_array['file_url'];
	$reading_section = $csv_row_array['reading_section'];
	$pages = $csv_row_array['pages'];
	$podcast_date_time = new DateTime($csv_row_array['date']);

	

	
	if ( new Datetime() >=  $podcast_date_time)
	{
		#gets long date format for for description
		$podcast_date_time_long_date = $podcast_date_time->format('m ([ .\t-])* dd ');
		

		$episode_title = "Day $day_number";
		$episdode_descritption = 'The reading for today '. $podcast_date_time_long_date  . '( ' . $week_number.' - Day '.$day_number. ' )' .' is '. $pages. ' from '. $reading_section;
		
		
		
		
	
	}
	else 
	{
		
	}
}

			
 

 
$podcast =  $domXML->saveXML() ;
print $podcast ;

?>
	