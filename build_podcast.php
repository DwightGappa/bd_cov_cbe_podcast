<?php
	header("Content-Type: application/xml; charset=ISO-8859-1");
    define('C_PPCSV_HEADER_RAW',        0);
    define('C_PPCSV_HEADER_NICE',        1);
	
	$books_of_bible_mp3s_csv_file_location = 'books_of_bible_mp3s.csv';
	
   #PaperPear_CSVParser class taken from the comments on php fgetcsv() function docmentation page http://php.net/manual/en/function.fgetcsv.php
   #PaperPear_CSVParser  michael.martinek@gmail.com
   
    class PaperPear_CSVParser
    {
        private $m_saHeader = array();
        private $m_sFileName = '';
        private $m_fp = false;
        private $m_naHeaderMap = array();
        private $m_saValues = array();
       
        function __construct($sFileName)
        {
            //quick and dirty opening and processing.. you may wish to clean this up
            if ($this->m_fp = fopen($sFileName, 'r'))
            {
                $this->processHeader();
            }
        }
   
          function __call($sMethodName, $saArgs)
        {
            //check to see if this is a set() or get() request, and extract the name
            if (preg_match("/[sg]et(.*)/", $sMethodName, $saFound))
            {
                //convert the name portion of the [gs]et to uppercase for header checking
                $sName = strtoupper($saFound[1]);
               
                //see if the entry exists in our named header-> index mapping
                  if (array_key_exists($sName, $this->m_naHeaderMap))
                  {
                      //it does.. so consult the header map for which index this header controls
                      $nIndex = $this->m_naHeaderMap[$sName];
                      if ($sMethodName{0} == 'g')
                      {
                          //return the value stored in the index associated with this name
                             return $this->m_saValues[$nIndex];
                      }
                      else
                      {
                          //set the valuw
                          $this->m_saValues[$nIndex] = $saArgs[0];
                          return true;
                      }
                  }
            }
           
            //nothing we control so bail out with a false
              return false;
          }       
         
          //get a nicely formatted header name. This will take product_id and make
          //it PRODUCTID in the header map. So now you won't need to worry about whether you need
          //to do a getProductID, or getproductid, or getProductId.. all will work.
        public static function GetNiceHeaderName($sName)
        {
            return strtoupper(preg_replace('/[^A-Za-z0-9]/', '', $sName));
        }

        //process the header entry so we can map our named header fields to a numerical index, which
        //we'll use when we use fgetcsv().
        private function processHeader()
        {
            $sLine = fgets($this->m_fp);
                        //you'll want to make this configurable
            $saFields = split(",", $sLine);
           
            $nIndex = 0;
            foreach ($saFields as $sField)
            {
                //get the nice name to use for "get" and "set".
                $sField = trim($sField);
               
                $sNiceName = PaperPear_CSVParser::GetNiceHeaderName($sField);
               
                //track correlation of raw -> nice name so we don't have to do on-the-fly nice name checks
                $this->m_saHeader[$nIndex] = array(C_PPCSV_HEADER_RAW => $sField, C_PPCSV_HEADER_NICE => $sNiceName);
                $this->m_naHeaderMap[$sNiceName] = $nIndex;
                $nIndex++;
            }
        }
       
        //read the next CSV entry
        public function getNext()
        {
            //this is a basic read, you will likely want to change this to accomodate what
            //you are using for CSV parameters (tabs, encapsulation, etc).
            if (($saValues = fgetcsv($this->m_fp)) !== false)
            {
                $this->m_saValues = $saValues;
                return true;
            }
            return false;
        }
    } 
	
	
	
	#Podcast/RSS code snippets based on the code snippets found at http://www.webreference.com/authoring/languages/xml/rss/custom_feeds/index.html		
	
		
	
	$feed_details = '<?xml version="1.0" encoding="ISO-8859-1" ?>
				<rss version="2.0">
					<channel>
						<title>'. 'Covenant - Community Bible Experince Podcast' .'</title>
						<link>'. 'http://cbe.covchurch.org/' .'</link>
						<description>'. 'This Podcast is the .mp3 audio readings for the Covenant Church - Community Bible Experince. Fall 2016 (9/25/2016)' .'</description>
						<language>'. 'en-us' .'</language>
						<image>
							<title>'. 'Covenant - Community Bible Experince' .'</title>
							<url>'. 'Cov-CBE_logo.jpg' .'</url>
							<width>'. '1963' .'</width>
							<height>'. '776' .'</height>
						</image>';
	
	
	$books_of_bible_mp3s_csv = PaperPear_CSVParser($books_of_bible_mp3s_csv_file_location);
	while ($books_of_bible_mp3s_csv=>getNext())
	{
		
		
		$podcast_date_time = new DateTime($books_of_bible_mp3s_csv=>getdate);

		

		
		if ( new Datetime() >=  $podcast_date_time)
		{
			#gets long date format for for description
			$podcast_date_time_long_date = $podcast_date_time->format('m ([ .\t-])* dd ');
			
			#reads in episode deatils from .csv file $books_of_bible_mp3s_csv using the PaperPear_CSVParser object
			$week_number = $books_of_bible_mp3s_csv=>getweek_number;
			$day_number = $books_of_bible_mp3s_csv=>getday_number;
			$file_url = $books_of_bible_mp3s_csv=>getfile_url;
			$reading_section = $books_of_bible_mp3s_csv=>getreading_section;
			$pages = $books_of_bible_mp3s_csv=>getpages;
			
			
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
	
	echo $feed_details . $feed_items ;
	
	?>
	