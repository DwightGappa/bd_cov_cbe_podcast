<?php
   	
   
	
	$books_of_bible_mp3s_csv_file_location = './books_of_bible_mp3s.csv';
	

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
	
	
	

	
 	$feed_details = '<?xml version="1.0" encoding="ISO-8859-1" ?> 
				<rss version="2.0">
					<channel>
						<title>' . 'Covenant - Community Bible Experince Podcast' .'</title>
						<link>'. 'http://cbe.covchurch.org/' .'</link>
						<description>'. 'This Podcast is the .mp3 audio readings for the Covenant Church - Community Bible Experince. Fall 2016 (9/25/2016)' .'</description>
						<language>'. 'en-us' .'</language>
						<image>
							<title>'. 'Covenant - Community Bible Experince' .'</title>
							<url>'. 'Cov-CBE_logo.jpg' .'</url>
							<width>'. '1963' .'</width>
							<height>'. '776' .'</height>
						</image>';
	
	
	$array_books_of_bible_mp3s_csv = csv_to_array($books_of_bible_mp3s_csv_file_location);
	
	foreach ($array_books_of_bible_mp3s_csv as $key => $value)
	{
		
		#reads in episode deatils from .csv file $array_books_of_bible_mp3s_csv using the PaperPear_CSVParser object
		
		$week_number = $array_books_of_bible_mp3s_csv['week_number'];
		$day_number = $array_books_of_bible_mp3s_csv['day_number'];
		$file_url = $array_books_of_bible_mp3s_csv['file_url'];
		$reading_section = $array_books_of_bible_mp3s_csv['reading_section'];
		$pages = $array_books_of_bible_mp3s_csv['pages'];
		$podcast_date_time = new DateTime($array_books_of_bible_mp3s_csv['date']);

		

		
		if ( new Datetime() >=  $podcast_date_time)
		{
			#gets long date format for for description
			$podcast_date_time_long_date = $podcast_date_time->format('m ([ .\t-])* dd ');
			

			$title = "Week $week_number, Day $day_number";
			$descritption = "The reading for today $podcast_date_time_long_date (Week $week_number - Day $day_number) is $pages from $reading_section";
			
			
			$feed_items .= '<item>
					<title>'. $title .'</title>
					<link>'. $file_url .'</link>
					<description><![CDATA['. $description .']]></description>
				</item>';
		}
		else 
		{
			$feed_items = '</channel>
				</rss>';
		}
	}
	header("Content-Type: application/xml; charset=ISO-8859-1");
	echo $feed_details . $feed_items ;
	
	?>
	