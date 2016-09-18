<?php


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


#Set local timezone to Central Time becasue PHP script was intended orignally to used by Central time people
$local_time_zone = New DateTimeZone ('America/Chicago');
date_default_timezone_set ($local_time_zone->getName());

#prepare rss channel data in variables
#using explict encoding to utf8 for forced utf8 enconding of xml file
$str_utf8_channel_title = utf8_encode('Covenant - Community Bible Experince Podcast');
$str_utf8_channel_link =  utf8_encode('http://cbe.covchurch.org/') ;
$str_utf8_channel_description =  utf8_encode('This Podcast is the .mp3 audio readings for the Covenant Church - Community Bible Experince.  Fall 2016 (9/25/2016)');
$str_utf8_channel_language =  utf8_encode('en-us');
$str_utf8_channel_image_title =  utf8_encode('Covenant - Community Bible Experince Logo');
$str_utf8_channel_image_filename = utf8_encode('Cov-CBE_logo_resized.png');
$str_utf8_channel_image_url =  utf8_encode($url_parent_directory_of_php_file . '/' . $str_utf8_channel_image_filename );
$str_utf8_channel_image_width =  utf8_encode('144');
$str_utf8_channel_image_height =  utf8_encode('98');


$str_utf8_channel_pubdate = utf8_encode(date(DATE_RSS));

#Create base XML documnet
$domXML = New domDocument('1.0','utf8');

#RSS tag and attributes

#Version 2.0 of rsss spec
$RSSrootelt = $domXML->createElement("rss");
$RSSattr1 = $domXML->createAttribute('version');
$RSSattr1Val = $domXML->createTextNode('2.0');
$RSSattr1->appendChild($RSSattr1Val);

#Using Itunes podcast extensions for better Apple product capatibility
$RSSattr2 = $domXML->createAttribute('xmlns:itunes');
$RSSattr2Val = $domXML->createTextNode('http://www.itunes.com/dtds/podcast-1.0.dtd');
$RSSattr2->appendChild($RSSattr2Val);

#
$RSSattr3 = $domXML->createAttribute('xmlns:atom');
$RSSattr3Val = $domXML->createTextNode('http://www.w3.org/2005/Atom');
$RSSattr3->appendChild($RSSattr3Val);

$RSSrootelt->appendChild($RSSattr1);
$RSSrootelt->appendChild($RSSattr2);
$RSSrootelt->appendChild($RSSattr3);


#Write Root node to XML DOM
$RSSrootNode = $domXML->appendChild($RSSrootelt);

#Channel tag
$Channelelt = $domXML->createElement('channel');



#Add channel tag as child of RSS tag
$ChannelNode = $RSSrootNode->appendChild($Channelelt);

#channel data

#Channel title
$ChannelTitleELT = $domXML->createElement('title');
$ChannelTitleValue = $domXML->createTextNode($str_utf8_channel_title);
$ChannelTitleNode =  $ChannelNode->appendChild($ChannelTitleELT);
$ChannelTitleNode->appendChild($ChannelTitleValue);

#Channel Link
$ChannelLinkELT = $domXML->createElement('link');
$ChannelLinkValue = $domXML->createTextNode($str_utf8_channel_link);
$ChannelLinkNode = $ChannelNode->appendChild($ChannelLinkELT);
$ChannelLinkNode->appendChild($ChannelLinkValue);

#Channel description
$ChanneldescriptionELT = $domXML->createElement('description');
$ChanneldescriptionValue = $domXML->createTextNode($str_utf8_channel_description);
$ChanneldescriptionNode = $ChannelNode->appendChild($ChanneldescriptionELT);
$ChanneldescriptionNode->appendChild($ChanneldescriptionValue);

#Channel language
$ChannellanguageELT = $domXML->createElement('language');
$ChannellanguageValue = $domXML->createTextNode($str_utf8_channel_language);
$ChannellanguageNode = $ChannelNode->appendChild($ChannellanguageELT);
$ChannellanguageNode->appendChild($ChannellanguageValue);

#Channel image
$ChannelimageELT = $domXML->createElement('image');
$ChannelimageNode = $ChannelNode->appendChild($ChannelimageELT);

#Channel image attributes

#Channel image_title
$Channelimage_titleELT = $domXML->createElement('title');
$Channelimage_titleValue = $domXML->createTextNode($str_utf8_channel_image_title);
$Channelimage_titleNode = $ChannelimageNode->appendChild($Channelimage_titleELT);
$Channelimage_titleNode->appendChild($Channelimage_titleValue);

#Channel image_url
$Channelimage_urlELT = $domXML->createElement('url');
$Channelimage_urlValue = $domXML->createTextNode($str_utf8_channel_image_url);
$Channelimage_urlNode = $ChannelimageNode->appendChild($Channelimage_urlELT);
$Channelimage_urlNode->appendChild($Channelimage_urlValue);

#Channel image_width
$Channelimage_widthELT = $domXML->createElement('width');
$Channelimage_widthValue = $domXML->createTextNode($str_utf8_channel_image_width);
$Channelimage_widthNode = $ChannelimageNode->appendChild($Channelimage_widthELT);
$Channelimage_widthNode->appendChild($Channelimage_widthValue);

#Channel image_height
$Channelimage_heightELT = $domXML->createElement('height');
$Channelimage_heightValue = $domXML->createTextNode($str_utf8_channel_image_height);
$Channelimage_heightNode = $ChannelimageNode->appendChild($Channelimage_heightELT);
$Channelimage_heightNode->appendChild($Channelimage_heightValue);

#Channel pubdate
$ChannelpubdateELT = $domXML->createElement('pubdate');
$ChannelpubdateValue = $domXML->createTextNode($str_utf8_channel_pubdate);
$ChannelpubdateNode = $ChannelNode->appendChild($ChannelpubdateELT);
$ChannelpubdateNode->appendChild($ChannelpubdateValue);





foreach ($array_books_of_bible_mp3s_csv as $csv_row_array)
{
	
	#reads in episode details from $csv_row_array
	
	$str_utf8_episode_week_number = utf8_encode($csv_row_array['week_number']);
	$str_utf8_episode_day_number = utf8_encode($csv_row_array['day_number']);
	$str_utf8_episode_file_url = utf8_encode($csv_row_array['file_url']);
	$str_utf8_episode_reading_section = utf8_encode($csv_row_array['reading_section']);
	$str_utf8_episode_pages = utf8_encode($csv_row_array['reading_pages']);
	$episode_podcast_datetime = new DateTime($csv_row_array['date'],$local_time_zone);
	
	#gets long date format for for description
	$str_utf8_episode_description_date = $episode_podcast_datetime->format('m ([ .\t-])* dd ');
	$str_utf8_episode_title = "Day $day_number Pages ";
	$str_utf8_episode_descritption = utf8_encode('The reading for today '. $str_utf8_episode_description_date  . '( ' . ' - Day '.$day_number. ' )' .' is '. $pages. ' from '. $reading_section);
	

	
	if (new Datetime($local_time_zone->getName()) >=  $episode_podcast_datetime)
	{
		
		
		
		
		
	
	}
	else 
	{
		
	}
}

			
 

 
$podcast =  $domXML->saveXML() ;

print $podcast ;

?>
	