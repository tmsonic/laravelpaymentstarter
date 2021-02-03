<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("countries")->insert(["code" => "AF", "name" => addslashes("Afghanistan"), ]);
        DB::table("countries")->insert(["code" => "AL", "name" => addslashes("Albania"), ]);
        DB::table("countries")->insert(["code" => "DZ", "name" => addslashes("Algeria"), ]);
        DB::table("countries")->insert(["code" => "AS", "name" => addslashes("American Samoa"), ]);
        DB::table("countries")->insert(["code" => "AD", "name" => addslashes("Andorra"), ]);
        DB::table("countries")->insert(["code" => "AO", "name" => addslashes("Angola"), ]);
        DB::table("countries")->insert(["code" => "AI", "name" => addslashes("Anguilla"), ]);
        DB::table("countries")->insert(["code" => "AQ", "name" => addslashes("Antarctica"), ]);
        DB::table("countries")->insert(["code" => "AG", "name" => addslashes("Antigua and Barbuda"), ]);
        DB::table("countries")->insert(["code" => "AR", "name" => addslashes("Argentina"), ]);
        DB::table("countries")->insert(["code" => "AM", "name" => addslashes("Armenia"), ]);
        DB::table("countries")->insert(["code" => "AW", "name" => addslashes("Aruba"), ]);
        DB::table("countries")->insert(["code" => "AU", "name" => addslashes("Australia"), ]);

        DB::table("countries")->insert(["code" => "AT", "name" => addslashes("Austria"), ]);
        DB::table("countries")->insert(["code" => "AZ", "name" => addslashes("Azerbaijan"), ]);
        DB::table("countries")->insert(["code" => "BS", "name" => addslashes("Bahamas (the)"), ]);
        DB::table("countries")->insert(["code" => "BH", "name" => addslashes("Bahrain"), ]);
        DB::table("countries")->insert(["code" => "BD", "name" => addslashes("Bangladesh"), ]);
        DB::table("countries")->insert(["code" => "BB", "name" => addslashes("Barbados"), ]);
        DB::table("countries")->insert(["code" => "BY", "name" => addslashes("Belarus"), ]);

        DB::table("countries")->insert(["code" => "BE", "name" => addslashes("Belgium"), ]);
        DB::table("countries")->insert(["code" => "BZ", "name" => addslashes("Belize"), ]);
        DB::table("countries")->insert(["code" => "BJ", "name" => addslashes("Benin"), ]);
        DB::table("countries")->insert(["code" => "BM", "name" => addslashes("Bermuda"), ]);
        DB::table("countries")->insert(["code" => "BT", "name" => addslashes("Bhutan"), ]);
        DB::table("countries")->insert(["code" => "BO", "name" => addslashes("Bolivia (Plurinational State of)"), ]);
        DB::table("countries")->insert(["code" => "BQ", "name" => addslashes("Bonaire, Sint Eustatius and Saba"), ]);

        DB::table("countries")->insert(["code" => "BA", "name" => addslashes("Bosnia and Herzegovina"), ]);
        DB::table("countries")->insert(["code" => "BW", "name" => addslashes("Botswana"), ]);
        DB::table("countries")->insert(["code" => "BV", "name" => addslashes("Bouvet Island"), ]);
        DB::table("countries")->insert(["code" => "BR", "name" => addslashes("Brazil"), ]);
        DB::table("countries")->insert(["code" => "IO", "name" => addslashes("British Indian Ocean Territory (the)"), ]);
        DB::table("countries")->insert(["code" => "BN", "name" => addslashes("Brunei Darussalam"), ]);
        DB::table("countries")->insert(["code" => "BG", "name" => addslashes("Bulgaria"), ]);

        DB::table("countries")->insert(["code" => "BF", "name" => addslashes("Burkina Faso"), ]);
        DB::table("countries")->insert(["code" => "BI", "name" => addslashes("Burundi"), ]);
        DB::table("countries")->insert(["code" => "CV", "name" => addslashes("Cabo Verde"), ]);
        DB::table("countries")->insert(["code" => "KH", "name" => addslashes("Cambodia"), ]);
        DB::table("countries")->insert(["code" => "CM", "name" => addslashes("Cameroon"), ]);
        DB::table("countries")->insert(["code" => "CA", "name" => addslashes("Canada"), ]);
        DB::table("countries")->insert(["code" => "KY", "name" => addslashes("Cayman Islands (the)"), ]);

        DB::table("countries")->insert(["code" => "CF", "name" => addslashes("Central African Republic (the)"), ]);
        DB::table("countries")->insert(["code" => "TD", "name" => addslashes("Chad"), ]);
        DB::table("countries")->insert(["code" => "CL", "name" => addslashes("Chile"), ]);
        DB::table("countries")->insert(["code" => "CN", "name" => addslashes("China"), ]);
        DB::table("countries")->insert(["code" => "CX", "name" => addslashes("Christmas Island"), ]);
        DB::table("countries")->insert(["code" => "CC", "name" => addslashes("Cocos (Keeling) Islands (the)"), ]);
        DB::table("countries")->insert(["code" => "CO", "name" => addslashes("Colombia"), ]);

        DB::table("countries")->insert(["code" => "KM", "name" => addslashes("Comoros (the)"), ]);
        DB::table("countries")->insert(["code" => "CD", "name" => addslashes("Congo (the Democratic Republic of the)"), ]);
        DB::table("countries")->insert(["code" => "CG", "name" => addslashes("Congo (the)"), ]);
        DB::table("countries")->insert(["code" => "CK", "name" => addslashes("Cook Islands (the)"), ]);
        DB::table("countries")->insert(["code" => "CR", "name" => addslashes("Costa Rica"), ]);
        DB::table("countries")->insert(["code" => "HR", "name" => addslashes("Croatia"), ]);
        DB::table("countries")->insert(["code" => "CU", "name" => addslashes("Cuba"), ]);

        DB::table("countries")->insert(["code" => "CW", "name" => addslashes("Curaçao"), ]);
        DB::table("countries")->insert(["code" => "CY", "name" => addslashes("Cyprus"), ]);
        DB::table("countries")->insert(["code" => "CZ", "name" => addslashes("Czechia"), ]);
        DB::table("countries")->insert(["code" => "CI", "name" => addslashes("Côte d'Ivoire"), ]);
        DB::table("countries")->insert(["code" => "DK", "name" => addslashes("Denmark"), ]);
        DB::table("countries")->insert(["code" => "DJ", "name" => addslashes("Djibouti"), ]);
        DB::table("countries")->insert(["code" => "DM", "name" => addslashes("Dominica"), ]);

        DB::table("countries")->insert(["code" => "DO", "name" => addslashes("Dominican Republic (the)"), ]);
        DB::table("countries")->insert(["code" => "EC", "name" => addslashes("Ecuador"), ]);
        DB::table("countries")->insert(["code" => "EG", "name" => addslashes("Egypt"), ]);
        DB::table("countries")->insert(["code" => "SV", "name" => addslashes("El Salvador"), ]);
        DB::table("countries")->insert(["code" => "GQ", "name" => addslashes("Equatorial Guinea"), ]);
        DB::table("countries")->insert(["code" => "ER", "name" => addslashes("Eritrea"), ]);
        DB::table("countries")->insert(["code" => "EE", "name" => addslashes("Estonia"), ]);

        DB::table("countries")->insert(["code" => "SZ", "name" => addslashes("Eswatini"), ]);
        DB::table("countries")->insert(["code" => "ET", "name" => addslashes("Ethiopia"), ]);
        DB::table("countries")->insert(["code" => "FK", "name" => addslashes("Falkland Islands (the) [Malvinas]"), ]);
        DB::table("countries")->insert(["code" => "FO", "name" => addslashes("Faroe Islands (the)"), ]);
        DB::table("countries")->insert(["code" => "FJ", "name" => addslashes("Fiji"), ]);
        DB::table("countries")->insert(["code" => "FI", "name" => addslashes("Finland"), ]);
        DB::table("countries")->insert(["code" => "FR", "name" => addslashes("France"), ]);

        DB::table("countries")->insert(["code" => "GF", "name" => addslashes("French Guiana"), ]);
        DB::table("countries")->insert(["code" => "PF", "name" => addslashes("French Polynesia"), ]);
        DB::table("countries")->insert(["code" => "TF", "name" => addslashes("French Southern Territories (the)"), ]);
        DB::table("countries")->insert(["code" => "GA", "name" => addslashes("Gabon"), ]);
        DB::table("countries")->insert(["code" => "GM", "name" => addslashes("Gambia (the)"), ]);
        DB::table("countries")->insert(["code" => "GE", "name" => addslashes("Georgia"), ]);
        DB::table("countries")->insert(["code" => "DE", "name" => addslashes("Germany"), ]);

        DB::table("countries")->insert(["code" => "GH", "name" => addslashes("Ghana"), ]);
        DB::table("countries")->insert(["code" => "GI", "name" => addslashes("Gibraltar"), ]);
        DB::table("countries")->insert(["code" => "GR", "name" => addslashes("Greece"), ]);
        DB::table("countries")->insert(["code" => "GL", "name" => addslashes("Greenland"), ]);
        DB::table("countries")->insert(["code" => "GD", "name" => addslashes("Grenada"), ]);
        DB::table("countries")->insert(["code" => "GP", "name" => addslashes("Guadeloupe"), ]);
        DB::table("countries")->insert(["code" => "GU", "name" => addslashes("Guam"), ]);

        DB::table("countries")->insert(["code" => "GT", "name" => addslashes("Guatemala"), ]);
        DB::table("countries")->insert(["code" => "GG", "name" => addslashes("Guernsey"), ]);
        DB::table("countries")->insert(["code" => "GN", "name" => addslashes("Guinea"), ]);
        DB::table("countries")->insert(["code" => "GW", "name" => addslashes("Guinea-Bissau"), ]);
        DB::table("countries")->insert(["code" => "GY", "name" => addslashes("Guyana"), ]);
        DB::table("countries")->insert(["code" => "HT", "name" => addslashes("Haiti"), ]);
        DB::table("countries")->insert(["code" => "HM", "name" => addslashes("Heard Island and McDonald Islands"), ]);

        DB::table("countries")->insert(["code" => "VA", "name" => addslashes("Holy See (the)"), ]);
        DB::table("countries")->insert(["code" => "HN", "name" => addslashes("Honduras"), ]);
        DB::table("countries")->insert(["code" => "HK", "name" => addslashes("Hong Kong"), ]);
        DB::table("countries")->insert(["code" => "HU", "name" => addslashes("Hungary"), ]);
        DB::table("countries")->insert(["code" => "IS", "name" => addslashes("Iceland"), ]);
        DB::table("countries")->insert(["code" => "IN", "name" => addslashes("India"), ]);
        DB::table("countries")->insert(["code" => "ID", "name" => addslashes("Indonesia"), ]);

        DB::table("countries")->insert(["code" => "IR", "name" => addslashes("Iran (Islamic Republic of)"), ]);
        DB::table("countries")->insert(["code" => "IQ", "name" => addslashes("Iraq"), ]);
        DB::table("countries")->insert(["code" => "IE", "name" => addslashes("Ireland"), ]);
        DB::table("countries")->insert(["code" => "IM", "name" => addslashes("Isle of Man"), ]);
        DB::table("countries")->insert(["code" => "IL", "name" => addslashes("Israel"), ]);
        DB::table("countries")->insert(["code" => "IT", "name" => addslashes("Italy"), ]);
        DB::table("countries")->insert(["code" => "JM", "name" => addslashes("Jamaica"), ]);

        DB::table("countries")->insert(["code" => "JP", "name" => addslashes("Japan"), ]);
        DB::table("countries")->insert(["code" => "JE", "name" => addslashes("Jersey"), ]);
        DB::table("countries")->insert(["code" => "JO", "name" => addslashes("Jordan"), ]);
        DB::table("countries")->insert(["code" => "KZ", "name" => addslashes("Kazakhstan"), ]);
        DB::table("countries")->insert(["code" => "KE", "name" => addslashes("Kenya"), ]);
        DB::table("countries")->insert(["code" => "KI", "name" => addslashes("Kiribati"), ]);
        DB::table("countries")->insert(["code" => "KP", "name" => addslashes("Korea (the Democratic People's Republic of)"), ]);

        DB::table("countries")->insert(["code" => "KR", "name" => addslashes("Korea (the Republic of)"), ]);
        DB::table("countries")->insert(["code" => "KW", "name" => addslashes("Kuwait"), ]);
        DB::table("countries")->insert(["code" => "KG", "name" => addslashes("Kyrgyzstan"), ]);
        DB::table("countries")->insert(["code" => "LA", "name" => addslashes("Lao People's Democratic Republic (the)"), ]);
        DB::table("countries")->insert(["code" => "LV", "name" => addslashes("Latvia"), ]);
        DB::table("countries")->insert(["code" => "LB", "name" => addslashes("Lebanon"), ]);
        DB::table("countries")->insert(["code" => "LS", "name" => addslashes("Lesotho"), ]);

        DB::table("countries")->insert(["code" => "LR", "name" => addslashes("Liberia"), ]);
        DB::table("countries")->insert(["code" => "LY", "name" => addslashes("Libya"), ]);
        DB::table("countries")->insert(["code" => "LI", "name" => addslashes("Liechtenstein"), ]);
        DB::table("countries")->insert(["code" => "LT", "name" => addslashes("Lithuania"), ]);
        DB::table("countries")->insert(["code" => "LU", "name" => addslashes("Luxembourg"), ]);
        DB::table("countries")->insert(["code" => "MO", "name" => addslashes("Macao"), ]);
        DB::table("countries")->insert(["code" => "MG", "name" => addslashes("Madagascar"), ]);

        DB::table("countries")->insert(["code" => "MW", "name" => addslashes("Malawi"), ]);
        DB::table("countries")->insert(["code" => "MY", "name" => addslashes("Malaysia"), ]);
        DB::table("countries")->insert(["code" => "MV", "name" => addslashes("Maldives"), ]);
        DB::table("countries")->insert(["code" => "ML", "name" => addslashes("Mali"), ]);
        DB::table("countries")->insert(["code" => "MT", "name" => addslashes("Malta"), ]);
        DB::table("countries")->insert(["code" => "MH", "name" => addslashes("Marshall Islands (the)"), ]);
        DB::table("countries")->insert(["code" => "MQ", "name" => addslashes("Martinique"), ]);

        DB::table("countries")->insert(["code" => "MR", "name" => addslashes("Mauritania"), ]);
        DB::table("countries")->insert(["code" => "MU", "name" => addslashes("Mauritius"), ]);
        DB::table("countries")->insert(["code" => "YT", "name" => addslashes("Mayotte"), ]);
        DB::table("countries")->insert(["code" => "MX", "name" => addslashes("Mexico"), ]);
        DB::table("countries")->insert(["code" => "FM", "name" => addslashes("Micronesia (Federated States of)"), ]);
        DB::table("countries")->insert(["code" => "MD", "name" => addslashes("Moldova (the Republic of)"), ]);
        DB::table("countries")->insert(["code" => "MC", "name" => addslashes("Monaco"), ]);

        DB::table("countries")->insert(["code" => "MN", "name" => addslashes("Mongolia"), ]);
        DB::table("countries")->insert(["code" => "ME", "name" => addslashes("Montenegro"), ]);
        DB::table("countries")->insert(["code" => "MS", "name" => addslashes("Montserrat"), ]);
        DB::table("countries")->insert(["code" => "MA", "name" => addslashes("Morocco"), ]);
        DB::table("countries")->insert(["code" => "MZ", "name" => addslashes("Mozambique"), ]);
        DB::table("countries")->insert(["code" => "MM", "name" => addslashes("Myanmar"), ]);
        DB::table("countries")->insert(["code" => "NA", "name" => addslashes("Namibia"), ]);

        DB::table("countries")->insert(["code" => "NR", "name" => addslashes("Nauru"), ]);
        DB::table("countries")->insert(["code" => "NP", "name" => addslashes("Nepal"), ]);
        DB::table("countries")->insert(["code" => "NL", "name" => addslashes("Netherlands (the)"), ]);
        DB::table("countries")->insert(["code" => "NC", "name" => addslashes("New Caledonia"), ]);
        DB::table("countries")->insert(["code" => "NZ", "name" => addslashes("New Zealand"), ]);
        DB::table("countries")->insert(["code" => "NI", "name" => addslashes("Nicaragua"), ]);
        DB::table("countries")->insert(["code" => "NE", "name" => addslashes("Niger (the)"), ]);

        DB::table("countries")->insert(["code" => "NG", "name" => addslashes("Nigeria"), ]);
        DB::table("countries")->insert(["code" => "NU", "name" => addslashes("Niue"), ]);
        DB::table("countries")->insert(["code" => "NF", "name" => addslashes("Norfolk Island"), ]);
        DB::table("countries")->insert(["code" => "MP", "name" => addslashes("Northern Mariana Islands (the)"), ]);
        DB::table("countries")->insert(["code" => "NO", "name" => addslashes("Norway"), ]);
        DB::table("countries")->insert(["code" => "OM", "name" => addslashes("Oman"), ]);
        DB::table("countries")->insert(["code" => "PK", "name" => addslashes("Pakistan"), ]);

        DB::table("countries")->insert(["code" => "PW", "name" => addslashes("Palau"), ]);
        DB::table("countries")->insert(["code" => "PS", "name" => addslashes("Palestine, State of"), ]);
        DB::table("countries")->insert(["code" => "PA", "name" => addslashes("Panama"), ]);
        DB::table("countries")->insert(["code" => "PG", "name" => addslashes("Papua New Guinea"), ]);
        DB::table("countries")->insert(["code" => "PY", "name" => addslashes("Paraguay"), ]);
        DB::table("countries")->insert(["code" => "PE", "name" => addslashes("Peru"), ]);
        DB::table("countries")->insert(["code" => "PH", "name" => addslashes("Philippines (the)"), ]);

        DB::table("countries")->insert(["code" => "PN", "name" => addslashes("Pitcairn"), ]);
        DB::table("countries")->insert(["code" => "PL", "name" => addslashes("Poland"), ]);
        DB::table("countries")->insert(["code" => "PT", "name" => addslashes("Portugal"), ]);
        DB::table("countries")->insert(["code" => "PR", "name" => addslashes("Puerto Rico"), ]);
        DB::table("countries")->insert(["code" => "QA", "name" => addslashes("Qatar"), ]);
        DB::table("countries")->insert(["code" => "MK", "name" => addslashes("Republic of North Macedonia"), ]);
        DB::table("countries")->insert(["code" => "RO", "name" => addslashes("Romania"), ]);

        DB::table("countries")->insert(["code" => "RU", "name" => addslashes("Russian Federation (the)"), ]);
        DB::table("countries")->insert(["code" => "RW", "name" => addslashes("Rwanda"), ]);
        DB::table("countries")->insert(["code" => "RE", "name" => addslashes("Réunion"), ]);
        DB::table("countries")->insert(["code" => "BL", "name" => addslashes("Saint Barthélemy"), ]);
        DB::table("countries")->insert(["code" => "SH", "name" => addslashes("Saint Helena, Ascension and Tristan da Cunha"), ]);
        DB::table("countries")->insert(["code" => "KN", "name" => addslashes("Saint Kitts and Nevis"), ]);
        DB::table("countries")->insert(["code" => "LC", "name" => addslashes("Saint Lucia"), ]);

        DB::table("countries")->insert(["code" => "MF", "name" => addslashes("Saint Martin (French part)"), ]);
        DB::table("countries")->insert(["code" => "PM", "name" => addslashes("Saint Pierre and Miquelon"), ]);
        DB::table("countries")->insert(["code" => "VC", "name" => addslashes("Saint Vincent and the Grenadines"), ]);
        DB::table("countries")->insert(["code" => "WS", "name" => addslashes("Samoa"), ]);
        DB::table("countries")->insert(["code" => "SM", "name" => addslashes("San Marino"), ]);
        DB::table("countries")->insert(["code" => "ST", "name" => addslashes("Sao Tome and Principe"), ]);
        DB::table("countries")->insert(["code" => "SA", "name" => addslashes("Saudi Arabia"), ]);

        DB::table("countries")->insert(["code" => "SN", "name" => addslashes("Senegal"), ]);
        DB::table("countries")->insert(["code" => "RS", "name" => addslashes("Serbia"), ]);
        DB::table("countries")->insert(["code" => "SC", "name" => addslashes("Seychelles"), ]);
        DB::table("countries")->insert(["code" => "SL", "name" => addslashes("Sierra Leone"), ]);
        DB::table("countries")->insert(["code" => "SG", "name" => addslashes("Singapore"), ]);
        DB::table("countries")->insert(["code" => "SX", "name" => addslashes("Sint Maarten (Dutch part)"), ]);
        DB::table("countries")->insert(["code" => "SK", "name" => addslashes("Slovakia"), ]);

        DB::table("countries")->insert(["code" => "SI", "name" => addslashes("Slovenia"), ]);
        DB::table("countries")->insert(["code" => "SB", "name" => addslashes("Solomon Islands"), ]);
        DB::table("countries")->insert(["code" => "SO", "name" => addslashes("Somalia"), ]);
        DB::table("countries")->insert(["code" => "ZA", "name" => addslashes("South Africa"), ]);
        DB::table("countries")->insert(["code" => "GS", "name" => addslashes("South Georgia and the South Sandwich Islands"), ]);
        DB::table("countries")->insert(["code" => "SS", "name" => addslashes("South Sudan"), ]);
        DB::table("countries")->insert(["code" => "ES", "name" => addslashes("Spain"), ]);

        DB::table("countries")->insert(["code" => "LK", "name" => addslashes("Sri Lanka"), ]);
        DB::table("countries")->insert(["code" => "SD", "name" => addslashes("Sudan (the)"), ]);
        DB::table("countries")->insert(["code" => "SR", "name" => addslashes("Suriname"), ]);
        DB::table("countries")->insert(["code" => "SJ", "name" => addslashes("Svalbard and Jan Mayen"), ]);
        DB::table("countries")->insert(["code" => "SE", "name" => addslashes("Sweden"), ]);
        DB::table("countries")->insert(["code" => "CH", "name" => addslashes("Switzerland"), ]);
        DB::table("countries")->insert(["code" => "SY", "name" => addslashes("Syrian Arab Republic"), ]);

        DB::table("countries")->insert(["code" => "TW", "name" => addslashes("Taiwan (Province of China)"), ]);
        DB::table("countries")->insert(["code" => "TJ", "name" => addslashes("Tajikistan"), ]);
        DB::table("countries")->insert(["code" => "TZ", "name" => addslashes("Tanzania, United Republic of"), ]);
        DB::table("countries")->insert(["code" => "TH", "name" => addslashes("Thailand"), ]);
        DB::table("countries")->insert(["code" => "TL", "name" => addslashes("Timor-Leste"), ]);
        DB::table("countries")->insert(["code" => "TG", "name" => addslashes("Togo"), ]);
        DB::table("countries")->insert(["code" => "TK", "name" => addslashes("Tokelau"), ]);

        DB::table("countries")->insert(["code" => "TO", "name" => addslashes("Tonga"), ]);
        DB::table("countries")->insert(["code" => "TT", "name" => addslashes("Trinidad and Tobago"), ]);
        DB::table("countries")->insert(["code" => "TN", "name" => addslashes("Tunisia"), ]);
        DB::table("countries")->insert(["code" => "TR", "name" => addslashes("Turkey"), ]);
        DB::table("countries")->insert(["code" => "TM", "name" => addslashes("Turkmenistan"), ]);
        DB::table("countries")->insert(["code" => "TC", "name" => addslashes("Turks and Caicos Islands (the)"), ]);
        DB::table("countries")->insert(["code" => "TV", "name" => addslashes("Tuvalu"), ]);

        DB::table("countries")->insert(["code" => "UG", "name" => addslashes("Uganda"), ]);
        DB::table("countries")->insert(["code" => "UA", "name" => addslashes("Ukraine"), ]);
        DB::table("countries")->insert(["code" => "AE", "name" => addslashes("United Arab Emirates (the)"), ]);
        DB::table("countries")->insert(["code" => "GB", "name" => addslashes("United Kingdom of Great Britain and Northern Ireland (the)"), ]);
        DB::table("countries")->insert(["code" => "UM", "name" => addslashes("United States Minor Outlying Islands (the)"), ]);
        DB::table("countries")->insert(["code" => "US", "name" => addslashes("United States of America (the)"), ]);
        DB::table("countries")->insert(["code" => "UY", "name" => addslashes("Uruguay"), ]);

        DB::table("countries")->insert(["code" => "UZ", "name" => addslashes("Uzbekistan"), ]);
        DB::table("countries")->insert(["code" => "VU", "name" => addslashes("Vanuatu"), ]);
        DB::table("countries")->insert(["code" => "VE", "name" => addslashes("Venezuela (Bolivarian Republic of)"), ]);
        DB::table("countries")->insert(["code" => "VN", "name" => addslashes("Viet Nam"), ]);
        DB::table("countries")->insert(["code" => "VG", "name" => addslashes("Virgin Islands (British)"), ]);
        DB::table("countries")->insert(["code" => "VI", "name" => addslashes("Virgin Islands (U.S.)"), ]);
        DB::table("countries")->insert(["code" => "WF", "name" => addslashes("Wallis and Futuna"), ]);

        DB::table("countries")->insert(["code" => "EH", "name" => addslashes("Western Sahara"), ]);
        DB::table("countries")->insert(["code" => "YE", "name" => addslashes("Yemen"), ]);
        DB::table("countries")->insert(["code" => "ZM", "name" => addslashes("Zambia"), ]);
        DB::table("countries")->insert(["code" => "ZW", "name" => addslashes("Zimbabwe"), ]);
        DB::table("countries")->insert(["code" => "AX", "name" => addslashes("Åland Islands"), ]);
    }
}
