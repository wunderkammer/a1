<?php 

//about statement
$about = "I am an artist currently living in Northern Virginia." 
         ." I studied sculpture but work for a biotech firm in Maryland as a software developer." 
         ." Believe it or not there are a lot of parallels between sculpture and software and I am really" 
	 ." interested in bringing both disciplines together. I am mostly self taught in terms of coding" 
         ." and so am interested in taking this class to gain more formal training in software development and learn best practices.";
         
//array of quotes
$quotes = ["When it's over, I want to say: all my life I was a bride married to amazement. 
                </br>I was the bridegroom, taking the world into my arms.</br>-Mary Oliver",
		"Empty-handed I entered the world. Barefoot I leave it.
		</br>My coming, my going 
		</br>Two simple happenings
		</br>That got entangled. </br>-Kozan Ichikyo",
	 	"I found the poems in the fields,
		And only wrote them down.</br>-John Clare"];

//index of random member of quotes array
$quote_index = array_rand($quotes,1);
?>