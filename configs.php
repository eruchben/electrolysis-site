<?
// require_once 'classes/DB.php';
const BASE_PATH = '/electrolysis-site/';

//color configs
$main_color = "#6ccfe6";
$secondary_color = "#078faf";

$phone_number = "058-502-0510";
$email = "electrolysisbysimcha@gmail.com";
$google_maps_link = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3394.0737900643535!2d34.99710011547883!3d31.713879244733697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1502c37764eaf98f%3A0xfa87353be661db87!2sNachal+Dolev%2C+Beit+Shemesh!5e0!3m2!1sen!2sil!4v1565190219964!5m2!1sen!2sil";

$header_links = [
    'home' => ['display_name' => 'Home', 'link'=> 'index.php'],
    'about' => ['display_name' => 'About Us', 'link'=> 'about_us.php'],
    'faq' => ['display_name' => 'Electrolysis FAQ', 'link'=> 'faq.php'],
    'case_studies' => ['display_name' => 'Gallery & Case Studies', 'link'=> 'case_studies.php'],
    'testimonials' => ['display_name' => 'Testimonials', 'link'=> 'testimonials.php'],
    'contact' => ['display_name' => 'Contact Us', 'link'=> 'contact_us.php'],
];


$testimonials = [
    'Shiri G, Har Nof' => '
        <p>
            Thank you for an extremely obliging service. Simcha listened to my concerns and put me at ease.  She also explained the pros and cons of each service so that I felt I had exactly the method tailored for me.
        </p>',
    
    'G G, RBS' => '
        <p>
            I\'ve given up my tweezers (that I used to have to use every single day) as a result of Simcha. I started going to Simcha about one year ago, with hairs all over my chin. The damage to my chin as a result of tweezing and waxing has healed—I no longer have ingrown hairs, and the amount of hair has been reduced dramatically. Simcha is very professional, yet warm and provides a relaxing environment.
        </p>
        <p>
            I strongly recommend Simcha for Electrolysis to anyone who is dealing with unwanted hair growth.
        </p>',
    
    'B K, RBS' => '
        <p>
            It\'s the best thing I have ever done for myself as I am hair-free on my chin now. The treatments were comfortable. If you have an embarrassing hair problem, electrolysis is the way to go!
        </p>',
    
    'R L, RBS G' => '
        <p>
            When it comes to electrolysis, Simcha is the only place to go. Having originally looked in to several electrolysis options, Simcha was the only person who I felt had the training and experience I could trust. I have now been going to Simcha for several years and I can not recommend her highly enough.
        </p>
        <p>
            Simcha is very professional yet so personable, so as well as receiving first class electrolysis, every session allows me time to relax and enjoy Simchas company as well!
        </p>
        <p>
            Every session with Simcha is a pleasure - she works quickly but so comfortably and I can see instant results after every session. Simcha is so knowledgeable and offers expert advice on which method to use. The clinic is so warm and inviting and is of the highest hygienic standards. During every treatment session, Simcha is constantly making sure I feel comfortable.
        </p>
        <p>
            All in all, if you are looking to receive the highest standard of electrolysis in a friendly, professional and relaxing environment, Simcha is your only option.
        </p>',
    
    'S H, Beit Shemesh' => '
        <p>
            I have been doing electrolysis for a while now for excess facial hair, and the results have been outstanding. It has changed my appearance dramatically and given me a deep renewal of self confidence. I cannot recommend Simcha enough.
        </p>',
    
    'S R, RBS' => '
        <p>
            Having dark features and jet black hair comes with a whole host of other \'hairy\' problems but I seemed to just get by with regular waxing.. very regular waxing.  However, not sure what happened while having children and getting older but waxing appointments were getting much much closer together and in between appointments had me plucking daily.  In short I was literally conscious of my upper lip all day every day and especially on shabbos for some reason I felt it was more noticeable and often stayed home when I saw what I looked like. I can honestly tell you that it started to make me depressed and low. I felt like I had no idea what to do and found myself talking about it all the time because it was always on my mind..  and then I mentioned it to Simcha and she told me about the work she does and explained about hair growth and how her method worked so I decided to give it a go -it couldn\'t get worse.
        </p>
        <p>
            I am now basically at the end of my treatment and I can tell you with a full happy and excited heart that it has changed my life.
            I don\'t need to look in the mirror. My tweezers got lost somewhere ages ago and I feel amazing. 
            There is only one regret I have - and that is that I didn\'t do this years ago.
        </p>',
        
    'Shira R' => '
        <p style="text-align:right">
            לפני שהגעתי לשמחה בדקתי אפשרויות של הסרת שיער בפנים, והם לא הבטוחו הברת שיער מהירה ובטוחה. אז הגעתי לשמחה במצב של שיער מרובה וכהה בכל הפנים. והיפתעתי לטובה, כבר מהטיפולים הראשונים ראיתי שיפור עצום, הכל נעשה במהירות ובעדינות. הפנים נהפכו לחלקות ונעימות למראה, וכל הסובבים היפתעו מאוד. אני ממלצה בחום, בגלל האוירה הנעימה, היעילות, המהירות והמקצועיות
        </p>'
];

$testimonials = shuffle_assoc($testimonials);


?>
