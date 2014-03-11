<?php
if (!defined('ABSPATH'))
    exit;
class cnDefaultValues {

	


	
	public static function getRegions($country="US"){
		$region_list=array();
		switch($country){
			case "US":
				$region_list = array('AL'=>"Alabama",  
					'AK'=>"Alaska",  
					'AZ'=>"Arizona",  
					'AR'=>"Arkansas",  
					'CA'=>"California",  
					'CO'=>"Colorado",  
					'CT'=>"Connecticut",  
					'DE'=>"Delaware",  
					'DC'=>"District Of Columbia",  
					'FL'=>"Florida",  
					'GA'=>"Georgia",  
					'HI'=>"Hawaii",  
					'ID'=>"Idaho",  
					'IL'=>"Illinois",  
					'IN'=>"Indiana",  
					'IA'=>"Iowa",  
					'KS'=>"Kansas",  
					'KY'=>"Kentucky",  
					'LA'=>"Louisiana",  
					'ME'=>"Maine",  
					'MD'=>"Maryland",  
					'MA'=>"Massachusetts",  
					'MI'=>"Michigan",  
					'MN'=>"Minnesota",  
					'MS'=>"Mississippi",  
					'MO'=>"Missouri",  
					'MT'=>"Montana",
					'NE'=>"Nebraska",
					'NV'=>"Nevada",
					'NH'=>"New Hampshire",
					'NJ'=>"New Jersey",
					'NM'=>"New Mexico",
					'NY'=>"New York",
					'NC'=>"North Carolina",
					'ND'=>"North Dakota",
					'OH'=>"Ohio",  
					'OK'=>"Oklahoma",  
					'OR'=>"Oregon",  
					'PA'=>"Pennsylvania",  
					'RI'=>"Rhode Island",  
					'SC'=>"South Carolina",  
					'SD'=>"South Dakota",
					'TN'=>"Tennessee",  
					'TX'=>"Texas",  
					'UT'=>"Utah",  
					'VT'=>"Vermont",  
					'VA'=>"Virginia",  
					'WA'=>"Washington",  
					'WV'=>"West Virginia",  
					'WI'=>"Wisconsin",  
					'WY'=>"Wyoming");
					break;
		}
		return $region_list;	
	}
	
	public static function getCountries(){
		$countries = array(
			"AF" => array( "name" => "Afghanistan", "d_code" => "+93" ),
			"AL" => array( "name" => "Albania", "d_code" => "+355" ),
			"DZ" => array( "name" => "Algeria", "d_code" => "+213" ),
			"AS" => array( "name" => "American Samoa", "d_code" => "+1" ),
			"AD" => array( "name" => "Andorra", "d_code" => "+376" ),
			"AO" => array( "name" => "Angola", "d_code" => "+244" ),
			"AI" => array( "name" => "Anguilla", "d_code" => "+1" ),
			"AG" => array( "name" => "Antigua", "d_code" => "+1" ),
			"AR" => array( "name" => "Argentina", "d_code" => "+54" ),
			"AM" => array( "name" => "Armenia", "d_code" => "+374" ),
			"AW" => array( "name" => "Aruba", "d_code" => "+297" ),
			"AU" => array( "name" => "Australia", "d_code" => "+61" ),
			"AT" => array( "name" => "Austria", "d_code" => "+43" ),
			"AZ" => array( "name" => "Azerbaijan", "d_code" => "+994" ),
			"BH" => array( "name" => "Bahrain", "d_code" => "+973" ),
			"BD" => array( "name" => "Bangladesh", "d_code" => "+880" ),
			"BB" => array( "name" => "Barbados", "d_code" => "+1" ),
			"BY" => array( "name" => "Belarus", "d_code" => "+375" ),
			"BE" => array( "name" => "Belgium", "d_code" => "+32" ),
			"BZ" => array( "name" => "Belize", "d_code" => "+501" ),
			"BJ" => array( "name" => "Benin", "d_code" => "+229" ),
			"BM" => array( "name" => "Bermuda", "d_code" => "+1" ),
			"BT" => array( "name" => "Bhutan", "d_code" => "+975" ),
			"BO" => array( "name" => "Bolivia", "d_code" => "+591" ),
			"BA" => array( "name" => "Bosnia and Herzegovina", "d_code" => "+387" ),
			"BW" => array( "name" => "Botswana", "d_code" => "+267" ),
			"BR" => array( "name" => "Brazil", "d_code" => "+55" ),
			"IO" => array( "name" => "British Indian Ocean Territory", "d_code" => "+246" ),
			"VG" => array( "name" => "British Virgin Islands", "d_code" => "+1" ),
			"BN" => array( "name" => "Brunei", "d_code" => "+673" ),
			"BG" => array( "name" => "Bulgaria", "d_code" => "+359" ),
			"BF" => array( "name" => "Burkina Faso", "d_code" => "+226" ),
			"MM" => array( "name" => "Burma Myanmar" ,"d_code"=>"+95" ),
			"BI" => array( "name" => "Burundi", "d_code" => "+257" ),
			"KH" => array( "name" => "Cambodia", "d_code" => "+855" ),
			"CM" => array( "name" => "Cameroon", "d_code" => "+237" ),
			"CA" => array( "name" => "Canada", "d_code" => "+1" ),
			"CV" => array( "name" => "Cape Verde", "d_code" => "+238" ),
			"KY" => array( "name" => "Cayman Islands", "d_code" => "+1" ),
			"CF" => array( "name" => "Central African Republic", "d_code" => "+236" ),
			"TD" => array( "name" => "Chad", "d_code" => "+235" ),
			"CL" => array( "name" => "Chile", "d_code" => "+56" ),
			"CN" => array( "name" => "China", "d_code" => "+86" ),
			"CO" => array( "name" => "Colombia", "d_code" => "+57" ),
			"KM" => array( "name" => "Comoros", "d_code" => "+269" ),
			"CK" => array( "name" => "Cook Islands", "d_code" => "+682" ),
			"CR" => array( "name" => "Costa Rica", "d_code" => "+506" ),
			"CI" => array( "name" => "Côte d'Ivoire" ,"d_code"=>"+225" ),
			"HR" => array( "name" => "Croatia", "d_code" => "+385" ),
			"CU" => array( "name" => "Cuba", "d_code" => "+53" ),
			"CY" => array( "name" => "Cyprus", "d_code" => "+357" ),
			"CZ" => array( "name" => "Czech Republic", "d_code" => "+420" ),
			"CD" => array( "name" => "Democratic Republic of Congo", "d_code" => "+243" ),
			"DK" => array( "name" => "Denmark", "d_code" => "+45" ),
			"DJ" => array( "name" => "Djibouti", "d_code" => "+253" ),
			"DM" => array( "name" => "Dominica", "d_code" => "+1" ),
			"DO" => array( "name" => "Dominican Republic", "d_code" => "+1" ),
			"EC" => array( "name" => "Ecuador", "d_code" => "+593" ),
			"EG" => array( "name" => "Egypt", "d_code" => "+20" ),
			"SV" => array( "name" => "El Salvador", "d_code" => "+503" ),
			"GQ" => array( "name" => "Equatorial Guinea", "d_code" => "+240" ),
			"ER" => array( "name" => "Eritrea", "d_code" => "+291" ),
			"EE" => array( "name" => "Estonia", "d_code" => "+372" ),
			"ET" => array( "name" => "Ethiopia", "d_code" => "+251" ),
			"FK" => array( "name" => "Falkland Islands", "d_code" => "+500" ),
			"FO" => array( "name" => "Faroe Islands", "d_code" => "+298" ),
			"FM" => array( "name" => "Federated States of Micronesia", "d_code" => "+691" ),
			"FJ" => array( "name" => "Fiji", "d_code" => "+679" ),
			"FI" => array( "name" => "Finland", "d_code" => "+358" ),
			"FR" => array( "name" => "France", "d_code" => "+33" ),
			"GF" => array( "name" => "French Guiana", "d_code" => "+594" ),
			"PF" => array( "name" => "French Polynesia", "d_code" => "+689" ),
			"GA" => array( "name" => "Gabon", "d_code" => "+241" ),
			"GE" => array( "name" => "Georgia", "d_code" => "+995" ),
			"DE" => array( "name" => "Germany", "d_code" => "+49" ),
			"GH" => array( "name" => "Ghana", "d_code" => "+233" ),
			"GI" => array( "name" => "Gibraltar", "d_code" => "+350" ),
			"GR" => array( "name" => "Greece", "d_code" => "+30" ),
			"GL" => array( "name" => "Greenland", "d_code" => "+299" ),
			"GD" => array( "name" => "Grenada", "d_code" => "+1" ),
			"GP" => array( "name" => "Guadeloupe", "d_code" => "+590" ),
			"GU" => array( "name" => "Guam", "d_code" => "+1" ),
			"GT" => array( "name" => "Guatemala", "d_code" => "+502" ),
			"GN" => array( "name" => "Guinea", "d_code" => "+224" ),
			"GW" => array( "name" => "Guinea-Bissau", "d_code" => "+245" ),
			"GY" => array( "name" => "Guyana", "d_code" => "+592" ),
			"HT" => array( "name" => "Haiti", "d_code" => "+509" ),
			"HN" => array( "name" => "Honduras", "d_code" => "+504" ),
			"HK" => array( "name" => "Hong Kong", "d_code" => "+852" ),
			"HU" => array( "name" => "Hungary", "d_code" => "+36" ),
			"IS" => array( "name" => "Iceland", "d_code" => "+354" ),
			"IN" => array( "name" => "India", "d_code" => "+91" ),
			"ID" => array( "name" => "Indonesia", "d_code" => "+62" ),
			"IR" => array( "name" => "Iran", "d_code" => "+98" ),
			"IQ" => array( "name" => "Iraq", "d_code" => "+964" ),
			"IE" => array( "name" => "Ireland", "d_code" => "+353" ),
			"IL" => array( "name" => "Israel", "d_code" => "+972" ),
			"IT" => array( "name" => "Italy", "d_code" => "+39" ),
			"JM" => array( "name" => "Jamaica", "d_code" => "+1" ),
			"JP" => array( "name" => "Japan", "d_code" => "+81" ),
			"JO" => array( "name" => "Jordan", "d_code" => "+962" ),
			"KZ" => array( "name" => "Kazakhstan", "d_code" => "+7" ),
			"KE" => array( "name" => "Kenya", "d_code" => "+254" ),
			"KI" => array( "name" => "Kiribati", "d_code" => "+686" ),
			"XK" => array( "name" => "Kosovo", "d_code" => "+381" ),
			"KW" => array( "name" => "Kuwait", "d_code" => "+965" ),
			"KG" => array( "name" => "Kyrgyzstan", "d_code" => "+996" ),
			"LA" => array( "name" => "Laos", "d_code" => "+856" ),
			"LV" => array( "name" => "Latvia", "d_code" => "+371" ),
			"LB" => array( "name" => "Lebanon", "d_code" => "+961" ),
			"LS" => array( "name" => "Lesotho", "d_code" => "+266" ),
			"LR" => array( "name" => "Liberia", "d_code" => "+231" ),
			"LY" => array( "name" => "Libya", "d_code" => "+218" ),
			"LI" => array( "name" => "Liechtenstein", "d_code" => "+423" ),
			"LT" => array( "name" => "Lithuania", "d_code" => "+370" ),
			"LU" => array( "name" => "Luxembourg", "d_code" => "+352" ),
			"MO" => array( "name" => "Macau", "d_code" => "+853" ),
			"MK" => array( "name" => "Macedonia", "d_code" => "+389" ),
			"MG" => array( "name" => "Madagascar", "d_code" => "+261" ),
			"MW" => array( "name" => "Malawi", "d_code" => "+265" ),
			"MY" => array( "name" => "Malaysia", "d_code" => "+60" ),
			"MV" => array( "name" => "Maldives", "d_code" => "+960" ),
			"ML" => array( "name" => "Mali", "d_code" => "+223" ),
			"MT" => array( "name" => "Malta", "d_code" => "+356" ),
			"MH" => array( "name" => "Marshall Islands", "d_code" => "+692" ),
			"MQ" => array( "name" => "Martinique", "d_code" => "+596" ),
			"MR" => array( "name" => "Mauritania", "d_code" => "+222" ),
			"MU" => array( "name" => "Mauritius", "d_code" => "+230" ),
			"YT" => array( "name" => "Mayotte", "d_code" => "+262" ),
			"MX" => array( "name" => "Mexico", "d_code" => "+52" ),
			"MD" => array( "name" => "Moldova", "d_code" => "+373" ),
			"MC" => array( "name" => "Monaco", "d_code" => "+377" ),
			"MN" => array( "name" => "Mongolia", "d_code" => "+976" ),
			"ME" => array( "name" => "Montenegro", "d_code" => "+382" ),
			"MS" => array( "name" => "Montserrat", "d_code" => "+1" ),
			"MA" => array( "name" => "Morocco", "d_code" => "+212" ),
			"MZ" => array( "name" => "Mozambique", "d_code" => "+258" ),
			"NA" => array( "name" => "Namibia", "d_code" => "+264" ),
			"NR" => array( "name" => "Nauru", "d_code" => "+674" ),
			"NP" => array( "name" => "Nepal", "d_code" => "+977" ),
			"NL" => array( "name" => "Netherlands", "d_code" => "+31" ),
			"AN" => array( "name" => "Netherlands Antilles", "d_code" => "+599" ),
			"NC" => array( "name" => "New Caledonia", "d_code" => "+687" ),
			"NZ" => array( "name" => "New Zealand", "d_code" => "+64" ),
			"NI" => array( "name" => "Nicaragua", "d_code" => "+505" ),
			"NE" => array( "name" => "Niger", "d_code" => "+227" ),
			"NG" => array( "name" => "Nigeria", "d_code" => "+234" ),
			"NU" => array( "name" => "Niue", "d_code" => "+683" ),
			"NF" => array( "name" => "Norfolk Island", "d_code" => "+672" ),
			"KP" => array( "name" => "North Korea", "d_code" => "+850" ),
			"MP" => array( "name" => "Northern Mariana Islands", "d_code" => "+1" ),
			"NO" => array( "name" => "Norway", "d_code" => "+47" ),
			"OM" => array( "name" => "Oman", "d_code" => "+968" ),
			"PK" => array( "name" => "Pakistan", "d_code" => "+92" ),
			"PW" => array( "name" => "Palau", "d_code" => "+680" ),
			"PS" => array( "name" => "Palestine", "d_code" => "+970" ),
			"PA" => array( "name" => "Panama", "d_code" => "+507" ),
			"PG" => array( "name" => "Papua New Guinea", "d_code" => "+675" ),
			"PY" => array( "name" => "Paraguay", "d_code" => "+595" ),
			"PE" => array( "name" => "Peru", "d_code" => "+51" ),
			"PH" => array( "name" => "Philippines", "d_code" => "+63" ),
			"PL" => array( "name" => "Poland", "d_code" => "+48" ),
			"PT" => array( "name" => "Portugal", "d_code" => "+351" ),
			"PR" => array( "name" => "Puerto Rico", "d_code" => "+1" ),
			"QA" => array( "name" => "Qatar", "d_code" => "+974" ),
			"CG" => array( "name" => "Republic of the Congo", "d_code" => "+242" ),
			"RE" => array( "name" => "Réunion" ,"d_code"=>"+262" ),
			"RO" => array( "name" => "Romania", "d_code" => "+40" ),
			"RU" => array( "name" => "Russia", "d_code" => "+7" ),
			"RW" => array( "name" => "Rwanda", "d_code" => "+250" ),
			"BL" => array( "name" => "Saint Barthélemy" ,"d_code"=>"+590" ),
			"SH" => array( "name" => "Saint Helena", "d_code" => "+290" ),
			"KN" => array( "name" => "Saint Kitts and Nevis", "d_code" => "+1" ),
			"MF" => array( "name" => "Saint Martin", "d_code" => "+590" ),
			"PM" => array( "name" => "Saint Pierre and Miquelon", "d_code" => "+508" ),
			"VC" => array( "name" => "Saint Vincent and the Grenadines", "d_code" => "+1" ),
			"WS" => array( "name" => "Samoa", "d_code" => "+685" ),
			"SM" => array( "name" => "San Marino", "d_code" => "+378" ),
			"ST" => array( "name" => "São Tomé and Príncipe" ,"d_code"=>"+239" ),
			"SA" => array( "name" => "Saudi Arabia", "d_code" => "+966" ),
			"SN" => array( "name" => "Senegal", "d_code" => "+221" ),
			"RS" => array( "name" => "Serbia", "d_code" => "+381" ),
			"SC" => array( "name" => "Seychelles", "d_code" => "+248" ),
			"SL" => array( "name" => "Sierra Leone", "d_code" => "+232" ),
			"SG" => array( "name" => "Singapore", "d_code" => "+65" ),
			"SK" => array( "name" => "Slovakia", "d_code" => "+421" ),
			"SI" => array( "name" => "Slovenia", "d_code" => "+386" ),
			"SB" => array( "name" => "Solomon Islands", "d_code" => "+677" ),
			"SO" => array( "name" => "Somalia", "d_code" => "+252" ),
			"ZA" => array( "name" => "South Africa", "d_code" => "+27" ),
			"KR" => array( "name" => "South Korea", "d_code" => "+82" ),
			"ES" => array( "name" => "Spain", "d_code" => "+34" ),
			"LK" => array( "name" => "Sri Lanka", "d_code" => "+94" ),
			"LC" => array( "name" => "St. Lucia", "d_code" => "+1" ),
			"SD" => array( "name" => "Sudan", "d_code" => "+249" ),
			"SR" => array( "name" => "Suriname", "d_code" => "+597" ),
			"SZ" => array( "name" => "Swaziland", "d_code" => "+268" ),
			"SE" => array( "name" => "Sweden", "d_code" => "+46" ),
			"CH" => array( "name" => "Switzerland", "d_code" => "+41" ),
			"SY" => array( "name" => "Syria", "d_code" => "+963" ),
			"TW" => array( "name" => "Taiwan", "d_code" => "+886" ),
			"TJ" => array( "name" => "Tajikistan", "d_code" => "+992" ),
			"TZ" => array( "name" => "Tanzania", "d_code" => "+255" ),
			"TH" => array( "name" => "Thailand", "d_code" => "+66" ),
			"BS" => array( "name" => "The Bahamas", "d_code" => "+1" ),
			"GM" => array( "name" => "The Gambia", "d_code" => "+220" ),
			"TL" => array( "name" => "Timor-Leste", "d_code" => "+670" ),
			"TG" => array( "name" => "Togo", "d_code" => "+228" ),
			"TK" => array( "name" => "Tokelau", "d_code" => "+690" ),
			"TO" => array( "name" => "Tonga", "d_code" => "+676" ),
			"TT" => array( "name" => "Trinidad and Tobago", "d_code" => "+1" ),
			"TN" => array( "name" => "Tunisia", "d_code" => "+216" ),
			"TR" => array( "name" => "Turkey", "d_code" => "+90" ),
			"TM" => array( "name" => "Turkmenistan", "d_code" => "+993" ),
			"TC" => array( "name" => "Turks and Caicos Islands", "d_code" => "+1" ),
			"TV" => array( "name" => "Tuvalu", "d_code" => "+688" ),
			"UG" => array( "name" => "Uganda", "d_code" => "+256" ),
			"UA" => array( "name" => "Ukraine", "d_code" => "+380" ),
			"AE" => array( "name" => "United Arab Emirates", "d_code" => "+971" ),
			"GB" => array( "name" => "United Kingdom", "d_code" => "+44" ),
			"US" => array( "name" => "United States", "d_code" => "+1" ),
			"UY" => array( "name" => "Uruguay", "d_code" => "+598" ),
			"VI" => array( "name" => "US Virgin Islands", "d_code" => "+1" ),
			"UZ" => array( "name" => "Uzbekistan", "d_code" => "+998" ),
			"VU" => array( "name" => "Vanuatu", "d_code" => "+678" ),
			"VA" => array( "name" => "Vatican City", "d_code" => "+39" ),
			"VE" => array( "name" => "Venezuela", "d_code" => "+58" ),
			"VN" => array( "name" => "Vietnam", "d_code" => "+84" ),
			"WF" => array( "name" => "Wallis and Futuna", "d_code" => "+681" ),
			"YE" => array( "name" => "Yemen", "d_code" => "+967" ),
			"ZM" => array( "name" => "Zambia", "d_code" => "+260" ),
			"ZW" => array( "name" => "Zimbabwe", "d_code" => "+263" )
		);
		return $countries;	
	}
	/*
	* @returns array|false
	*/
	public static function getCountryByCode($code="fail"){
		$countries = cnDefaultValues::getCountries();
		$country = isset($countries[strtoupper($code)])?$countries[strtoupper($code)]:false;
		return $country;
	}
	
	public static function getCountriesCodeToName(){
		$countries = cnDefaultValues::getCountries();
		$list=array();
		foreach($countries as $code=>$country){
			$list[$code] = $country['name'];
		}
		return $list;
	}
	
	public static function getCountryCodes(){
		$keys = array_keys(cnDefaultValues::getCountries());
		return $keys;
	}
	
	
	
}
?>