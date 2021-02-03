<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Afghanistan
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"BDS", "state_name" => "Badakhshan",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"BDG", "state_name" => "Badghis",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"BGL", "state_name" => "Baghlan",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"BAL", "state_name" => "Balkh",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"BAM", "state_name" => "Bamyan",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"DAY", "state_name" => "Daykundi",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"FRA", "state_name" => "Farah",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"FYB", "state_name" => "Faryab",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"GHA", "state_name" => "Ghazni",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"GHO", "state_name" => "Ghōr",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"HEL", "state_name" => "Helmand",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"HER", "state_name" => "Herat",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"JOW", "state_name" => "Jowzjan",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"KAB", "state_name" => "Kabul",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"KAN", "state_name" => "Kandahar",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"KAP", "state_name" => "Kapisa",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"KHO", "state_name" => "Khost",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"KNR", "state_name" => "Kunar",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"KDZ", "state_name" => "Kunduz",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"LAG", "state_name" => "Laghman",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"LOG", "state_name" => "Logar",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"NAN", "state_name" => "Nangarhar",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"NIM", "state_name" => "Nimruz",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"NUR", "state_name" => "Nuristan",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"PKA", "state_name" => "Paktika",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"PIA", "state_name" => "Paktia",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"PAN", "state_name" => "Panjshir",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"PAR", "state_name" => "Parwan",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"SAM", "state_name" => "Samangan",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"SAR", "state_name" => "Sar-e Pol",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"TAK", "state_name" => "Takhar",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"URU", "state_name" => "Urozgan",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"WAR", "state_name" => "Maidan Wardak",]);
        DB::table("states")->insert(["country_code" => "AF", "state_code" =>"ZAB", "state_name" => "Zabul",]);

        // Åland Islands (The Åland Islands, an autonomous region of Finland)
        DB::table("states")->insert(["country_code" => "AX", "state_code" =>"01", "state_name" => "Ahvenanmaan maakunta",]);

        // Albania
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"01", "state_name" => "Berat",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"02", "state_name" => "Dibër",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"03", "state_name" => "Durrës",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"04", "state_name" => "Elbasan",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"05", "state_name" => "Fier",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"06", "state_name" => "Gjirokastër",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"07", "state_name" => "Korçë",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"08", "state_name" => "Kukës",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"09", "state_name" => "Lezhë",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"10", "state_name" => "Shkodër",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"11", "state_name" => "Tiranë",]);
        DB::table("states")->insert(["country_code" => "AL", "state_code" =>"12", "state_name" => "Vlorë",]);

        // Algeria
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "01", "state_name" => "Adrar",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "44", "state_name" => "Aïn Defla",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "46", "state_name" => "Aïn Témouchent",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "16", "state_name" => "Alger",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "23", "state_name" => "Annaba",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "05", "state_name" => "Batna",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "08", "state_name" => "Béchar",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "06", "state_name" => "Béjaïa",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "07", "state_name" => "Biskra",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "09", "state_name" => "Blida",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "34", "state_name" => "Bordj Bou Arréridj",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "10", "state_name" => "Bouira",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "35", "state_name" => "Boumerdès",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "02", "state_name" => "Chlef",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "25", "state_name" => "Constantine",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "17", "state_name" => "Djelfa",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "32", "state_name" => "El Bayadh",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "39", "state_name" => "El Oued",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "36", "state_name" => "El Tarf",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "47", "state_name" => "Ghardaïa",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "24", "state_name" => "Guelma",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "33", "state_name" => "Illizi",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "18", "state_name" => "Jijel",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "40", "state_name" => "Khenchela",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "03", "state_name" => "Laghouat",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "28", "state_name" => "M'sila",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "29", "state_name" => "Mascara",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "26", "state_name" => "Médéa",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "43", "state_name" => "Mila",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "27", "state_name" => "Mostaganem",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "45", "state_name" => "Naama",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "31", "state_name" => "Oran",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "30", "state_name" => "Ouargla",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "04", "state_name" => "Oum el Bouaghi",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "48", "state_name" => "Relizane",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "20", "state_name" => "Saïda",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "19", "state_name" => "Sétif",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "22", "state_name" => "Sidi Bel Abbès",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "21", "state_name" => "Skikda",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "41", "state_name" => "Souk Ahras",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "11", "state_name" => "Tamanrasset",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "12", "state_name" => "Tébessa",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "14", "state_name" => "Tiaret",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "37", "state_name" => "Tindouf",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "42", "state_name" => "Tipaza",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "38", "state_name" => "Tissemsilt",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "15", "state_name" => "Tizi Ouzou",]);
        DB::table("states")->insert(["country_code" => "DZ", "state_code" => "13", "state_name" => "Tlemcen",]);

        // American Samoa (American Samoa, an outlying area of the United States)
        DB::table("states")->insert(["country_code" => "AS", "state_code" => "AS", "state_name" => "American Samoa",]);

        // Andorra
        DB::table("states")->insert(["country_code" => "AD", "state_code" =>"07", "state_name" => "Andorra la Vella",]);
        DB::table("states")->insert(["country_code" => "AD", "state_code" =>"02", "state_name" => "Canillo",]);
        DB::table("states")->insert(["country_code" => "AD", "state_code" =>"03", "state_name" => "Encamp",]);
        DB::table("states")->insert(["country_code" => "AD", "state_code" =>"08", "state_name" => "Escaldes-Engordany",]);
        DB::table("states")->insert(["country_code" => "AD", "state_code" =>"04", "state_name" => "La Massana",]);
        DB::table("states")->insert(["country_code" => "AD", "state_code" =>"05", "state_name" => "Ordino",]);
        DB::table("states")->insert(["country_code" => "AD", "state_code" =>"06", "state_name" => "Sant Julià de Lòria",]);

        // Angola
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "BGO", "state_name" => "Bengo",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "BGU", "state_name" => "Benguela",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "BIE", "state_name" => "Bié",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "CAB", "state_name" => "Cabinda",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "CNN", "state_name" => "Cunene",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "HUA", "state_name" => "Huambo",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "HUI", "state_name" => "Huíla",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "CCU", "state_name" => "Kuando Kubango",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "CNO", "state_name" => "Kwanza Norte",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "CUS", "state_name" => "Kwanza Sul",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "LUA", "state_name" => "Luanda",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "LNO", "state_name" => "Lunda Norte",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "LSU", "state_name" => "Lunda Sul",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "MAL", "state_name" => "Malange",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "MOX", "state_name" => "Moxico",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "NAM", "state_name" => "Namibe",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "UIG", "state_name" => "Uíge",]);
        DB::table("states")->insert(["country_code" => "AO", "state_code" => "ZAI", "state_name" => "Zaire",]);

        // Anguilla (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "AI", "state_code" => "AI", "state_name" => "Anguilla",]);

        // Antarctica (Currently no ISO 3166-2 codes are defined for Antarctica.)
        DB::table("states")->insert(["country_code" => "AQ", "state_code" => "AQ", "state_name" => "Antarctica",]);

        // Antigua and Barbuda
        DB::table("states")->insert(["country_code" => "AG", "state_code" => "03", "state_name" => "Saint George",]);
        DB::table("states")->insert(["country_code" => "AG", "state_code" => "04", "state_name" => "Saint John",]);
        DB::table("states")->insert(["country_code" => "AG", "state_code" => "05", "state_name" => "Saint Mary",]);
        DB::table("states")->insert(["country_code" => "AG", "state_code" => "06", "state_name" => "Saint Paul",]);
        DB::table("states")->insert(["country_code" => "AG", "state_code" => "07", "state_name" => "Saint Peter",]);
        DB::table("states")->insert(["country_code" => "AG", "state_code" => "08", "state_name" => "Saint Philip",]);
        DB::table("states")->insert(["country_code" => "AG", "state_code" => "10", "state_name" => "Barbuda",]);
        DB::table("states")->insert(["country_code" => "AG", "state_code" => "11", "state_name" => "Redonda",]);

        // Argentina
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "C", "state_name" => "Ciudad Autónoma de Buenos Aires",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "B", "state_name" => "Buenos Aires",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "K", "state_name" => "Catamarca",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "H", "state_name" => "Chaco",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "U", "state_name" => "Chubut",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "X", "state_name" => "Córdoba",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "W", "state_name" => "Corrientes",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "E", "state_name" => "Entre Ríos",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "P", "state_name" => "Formosa",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "Y", "state_name" => "Jujuy",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "L", "state_name" => "La Pampa",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "F", "state_name" => "La Rioja",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "M", "state_name" => "Mendoza",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "N", "state_name" => "Misiones",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "Q", "state_name" => "Neuquén",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "R", "state_name" => "Río Negro",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "A", "state_name" => "Salta",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "J", "state_name" => "San Juan",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "D", "state_name" => "San Luis",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "Z", "state_name" => "Santa Cruz",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "S", "state_name" => "Santa Fe",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "G", "state_name" => "Santiago del Estero",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "V", "state_name" => "Tierra del Fuego",]);
        DB::table("states")->insert(["country_code" => "AR", "state_code" => "T", "state_name" => "Tucumán",]);

        // Armenia
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "ER", "state_name" => "Erevan",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "AG", "state_name" => "Aragac̣otn",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "AR", "state_name" => "Ararat",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "AV", "state_name" => "Armavir",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "GR", "state_name" => "Geġark'unik'",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "KT", "state_name" => "Kotayk'",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "LO", "state_name" => "Loṙi",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "SH", "state_name" => "Širak",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "SU", "state_name" => "Syunik'",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "TV", "state_name" => "Tavuš",]);
        DB::table("states")->insert(["country_code" => "AM", "state_code" => "VD", "state_name" => "Vayoć Jor",]);

        // Aruba (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "AW", "state_code" => "AW", "state_name" => "Aruba",]);

        // Australia
        DB::table("states")->insert(["country_code" => "AU", "state_code" => "NSW", "state_name" => "New South Wales",]);
        DB::table("states")->insert(["country_code" => "AU", "state_code" => "QLD", "state_name" => "Queensland",]);
        DB::table("states")->insert(["country_code" => "AU", "state_code" => "SA", "state_name" => "South Australia",]);
        DB::table("states")->insert(["country_code" => "AU", "state_code" => "TAS", "state_name" => "Tasmania",]);
        DB::table("states")->insert(["country_code" => "AU", "state_code" => "VIC", "state_name" => "Victoria",]);
        DB::table("states")->insert(["country_code" => "AU", "state_code" => "WA", "state_name" => "Western Australia",]);
        DB::table("states")->insert(["country_code" => "AU", "state_code" => "ACT", "state_name" => " Australian Capital Territory",]);
        DB::table("states")->insert(["country_code" => "AU", "state_code" => "NT", "state_name" => "Northern Territory",]);

        // Austria
        DB::table("states")->insert(["country_code" => "AT", "state_code" =>"1", "state_name" => "Burgenland",]);
        DB::table("states")->insert(["country_code" => "AT", "state_code" =>"2", "state_name" => "Carinthia",]);
        DB::table("states")->insert(["country_code" => "AT", "state_code" =>"3", "state_name" => "Lower Austria",]);
        DB::table("states")->insert(["country_code" => "AT", "state_code" =>"4", "state_name" => "Upper Austria",]);
        DB::table("states")->insert(["country_code" => "AT", "state_code" =>"5", "state_name" => "Salzburg",]);
        DB::table("states")->insert(["country_code" => "AT", "state_code" =>"6", "state_name" => "Styria",]);
        DB::table("states")->insert(["country_code" => "AT", "state_code" =>"7", "state_name" => "Tyrol",]);
        DB::table("states")->insert(["country_code" => "AT", "state_code" =>"8", "state_name" => "Vorarlberg",]);
        DB::table("states")->insert(["country_code" => "AT", "state_code" =>"9", "state_name" => "Vienna",]);

        // Azerbaijan
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "BA", "state_name" => "Bakı",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "GA", "state_name" => "Gəncə",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "LA", "state_name" => "Lənkəran",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "MI", "state_name" => "Mingəçevir",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "NA", "state_name" => "Naftalan",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "NV", "state_name" => "Naxçıvan",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SA", "state_name" => "Şəki",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SR", "state_name" => "Şirvan",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SM", "state_name" => "Sumqayıt",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "XA", "state_name" => "Xankəndi",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "YE", "state_name" => "Yevlax",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "ABS", "state_name" => "Abşeron",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "AGC", "state_name" => "Ağcabədi",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "AGM", "state_name" => "Ağdam",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "AGS", "state_name" => "Ağdaş",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "AGA", "state_name" => "Ağstafa",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "AGU", "state_name" => "Ağsu",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "AST", "state_name" => "Astara",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "BAB", "state_name" => "Babək",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "BAL", "state_name" => "Balakən",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "BAR", "state_name" => "Bərdə",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "BEY", "state_name" => "Beyləqan",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "BIL", "state_name" => "Biləsuvar",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "CAB", "state_name" => "Cəbrayıl",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "CAL", "state_name" => "Cəlilabad",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "CUL", "state_name" => "Culfa",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "DAS", "state_name" => "Daşkəsən",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "FUZ", "state_name" => "Füzuli",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "GAD", "state_name" => "Gədəbəy",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "GOR", "state_name" => "Goranboy",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "GOY", "state_name" => "Göyçay",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "GYG", "state_name" => "Göygöl",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "HAC", "state_name" => "Hacıqabul",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "IMI", "state_name" => "İmişli",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "ISM", "state_name" => "İsmayıllı",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "KAL", "state_name" => "Kəlbəcər",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "KAN", "state_name" => "Kǝngǝrli",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "KUR", "state_name" => "Kürdəmir",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "LAC", "state_name" => "Laçın",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "LAN", "state_name" => "Lənkəran",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "LER", "state_name" => "Lerik",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "MAS", "state_name" => "Masallı",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "NEF", "state_name" => "Neftçala",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "OGU", "state_name" => "Oğuz",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "ORD", "state_name" => "Ordubad",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "QAB", "state_name" => "Qəbələ",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "QAX", "state_name" => "Qax",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "QAZ", "state_name" => "Qazax",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "QOB", "state_name" => "Qobustan",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "QBA", "state_name" => "Quba",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "QBI", "state_name" => "Qubadlı",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "QUS", "state_name" => "Qusar",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SAT", "state_name" => "Saatlı",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SAB", "state_name" => "Sabirabad",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SBN", "state_name" => "Şabran",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SAD", "state_name" => "Sədərək",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SAH", "state_name" => "Şahbuz",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SAK", "state_name" => "Şəki",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SAL", "state_name" => "Salyan",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SMI", "state_name" => "Şamaxı",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SKR", "state_name" => "Şəmkir",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SMX", "state_name" => "Samux",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SAR", "state_name" => "Şərur",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SIY", "state_name" => "Siyəzən",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "SUS", "state_name" => "Şuşa",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "TAR", "state_name" => "Tərtər",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "TOV", "state_name" => "Tovuz",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "UCA", "state_name" => "Ucar",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "XAC", "state_name" => "Xaçmaz",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "XIZ", "state_name" => "Xızı",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "XCI", "state_name" => "Xocalı",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "XVD", "state_name" => "Xocavənd",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "YAR", "state_name" => "Yardımlı",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "YEV", "state_name" => "Yevlax",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "ZAN", "state_name" => "Zəngilan",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "ZAQ", "state_name" => "Zaqatala",]);
        DB::table("states")->insert(["country_code" => "AZ", "state_code" => "ZAR", "state_name" => "Zərdab",]);

        // Bahamas
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "AK", "state_name" => "Acklins",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "BY", "state_name" => "Berry Islands",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "BI", "state_name" => "Bimini",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "BP", "state_name" => "Black Point",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "CI", "state_name" => "Cat Island",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "CO", "state_name" => "Central Abaco",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "CS", "state_name" => "Central Andros",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "CE", "state_name" => "Central Eleuthera",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "FP", "state_name" => "City of Freeport",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "CK", "state_name" => "Crooked Island and Long Cay",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "EG", "state_name" => "East Grand Bahama",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "EX", "state_name" => "Exuma",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "GC", "state_name" => "Grand Cay",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "HI", "state_name" => "Harbour Island",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "HT", "state_name" => "Hope Town",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "IN", "state_name" => "Inagua",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "LI", "state_name" => "Long Island",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "MC", "state_name" => "Mangrove Cay",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "MG", "state_name" => "Mayaguana",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "MI", "state_name" => "Moore's Island",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "NP", "state_name" => "New Providence",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "NO", "state_name" => "North Abaco",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "NS", "state_name" => "North Andros",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "NE", "state_name" => "North Eleuthera",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "RI", "state_name" => "Ragged Island",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "RC", "state_name" => "Rum Cay",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "SS", "state_name" => "San Salvador",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "SO", "state_name" => "South Abaco",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "SA", "state_name" => "South Andros",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "SE", "state_name" => "South Eleuthera",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "SW", "state_name" => "Spanish Wells",]);
        DB::table("states")->insert(["country_code" => "BS", "state_code" => "WG", "state_name" => "West Grand Bahama",]);

        // Bahrain
        DB::table("states")->insert(["country_code" => "BH", "state_code" => "13", "state_name" => "Al ‘Āşimah",]);
        DB::table("states")->insert(["country_code" => "BH", "state_code" => "14", "state_name" => "Al Janūbīyah",]);
        DB::table("states")->insert(["country_code" => "BH", "state_code" => "15", "state_name" => "Al Muḩarraq",]);
        DB::table("states")->insert(["country_code" => "BH", "state_code" => "17", "state_name" => "Ash Shamālīyah",]);

        // Bangladesh
        DB::table("states")->insert(["country_code" => "BD", "state_code" => "A", "state_name" => "Barisal",]);
        DB::table("states")->insert(["country_code" => "BD", "state_code" => "B", "state_name" => "Chittagong",]);
        DB::table("states")->insert(["country_code" => "BD", "state_code" => "C", "state_name" => "Dhaka",]);
        DB::table("states")->insert(["country_code" => "BD", "state_code" => "D", "state_name" => "Khulna",]);
        DB::table("states")->insert(["country_code" => "BD", "state_code" => "H", "state_name" => "Mymensingh",]);
        DB::table("states")->insert(["country_code" => "BD", "state_code" => "E", "state_name" => "Rajshahi",]);
        DB::table("states")->insert(["country_code" => "BD", "state_code" => "F", "state_name" => "Rangpur",]);
        DB::table("states")->insert(["country_code" => "BD", "state_code" => "G", "state_name" => "Sylhet",]);

         // Barbados
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "01", "state_name" => "Christ Church",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "02", "state_name" => "Saint Andrew",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "03", "state_name" => "Saint George",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "04", "state_name" => "Saint James",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "05", "state_name" => "Saint John",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "06", "state_name" => "Saint Joseph",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "07", "state_name" => "Saint Lucy",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "08", "state_name" => "Saint Michael",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "09", "state_name" => "Saint Peter",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "10", "state_name" => "Saint Philip",]);
         DB::table("states")->insert(["country_code" => "BB", "state_code" => "11", "state_name" => "Saint Thomas",]);

         // Belarus
         DB::table("states")->insert(["country_code" => "BY", "state_code" => "BR", "state_name" => "Brestskaya voblasts'",]);
         DB::table("states")->insert(["country_code" => "BY", "state_code" => "HO", "state_name" => "Homyel'skaya voblasts'",]);
         DB::table("states")->insert(["country_code" => "BY", "state_code" => "HR", "state_name" => "Hrodzenskaya voblasts'",]);
         DB::table("states")->insert(["country_code" => "BY", "state_code" => "MA", "state_name" => "Mahilyowskaya voblasts'",]);
         DB::table("states")->insert(["country_code" => "BY", "state_code" => "MI", "state_name" => "Minskaya voblasts'",]);
         DB::table("states")->insert(["country_code" => "BY", "state_code" => "VI", "state_name" => "Vitsyebskaya voblasts'",]);
         DB::table("states")->insert(["country_code" => "BY", "state_code" => "HM", "state_name" => "Horad Minsk",]);

         // Belgium
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"BRU", "state_name" => "Brussels Hoofdstedelijk Gewest",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"VAN", "state_name" => "Antwerpen",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"WBR", "state_name" => "Brabant wallon",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"WHT", "state_name" => "Hainaut",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"WLG", "state_name" => "Liège",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"VLI", "state_name" => "Limburg",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"WLX", "state_name" => "Luxembourg",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"WNA", "state_name" => "Namur",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"VOV", "state_name" => "Oost-Vlaanderen",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"VBR", "state_name" => "Vlaams-Brabant",]);
         DB::table("states")->insert(["country_code" => "BE", "state_code" =>"VWV", "state_name" => "West-Vlaanderen",]);

         // Belize
         DB::table("states")->insert(["country_code" => "BZ", "state_code" => "BZ", "state_name" => "Belize",]);
         DB::table("states")->insert(["country_code" => "BZ", "state_code" => "CY", "state_name" => "Cayo",]);
         DB::table("states")->insert(["country_code" => "BZ", "state_code" => "CZL", "state_name" => "Corozal",]);
         DB::table("states")->insert(["country_code" => "BZ", "state_code" => "OW", "state_name" => "Orange Walk",]);
         DB::table("states")->insert(["country_code" => "BZ", "state_code" => "SC", "state_name" => "Stann Creek",]);
         DB::table("states")->insert(["country_code" => "BZ", "state_code" => "TOL", "state_name" => "Toledo",]);

         // Benin
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "AL", "state_name" => "Alibori",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "AK", "state_name" => "Atacora",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "AQ", "state_name" => "Atlantique",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "BO", "state_name" => "Borgou",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "CO", "state_name" => "Collines",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "KO", "state_name" => "Couffo",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "DO", "state_name" => "Donga",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "LI", "state_name" => "Littoral",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "MO", "state_name" => "Mono",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "OU", "state_name" => "Ouémé",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "PL", "state_name" => "Plateau",]);
         DB::table("states")->insert(["country_code" => "BJ", "state_code" => "ZO", "state_name" => "Zou",]);

         // Bermuda (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "BM", "state_code" => "BM", "state_name" => "Bermuda",]);

         // Bhutan
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "33", "state_name" => "Bumthang",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "12", "state_name" => "Chhukha",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "22", "state_name" => "Dagana",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "GA", "state_name" => "Gasa",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "13", "state_name" => "Haa",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "44", "state_name" => "Lhuentse",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "42", "state_name" => "Monggar",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "11", "state_name" => "Paro",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "43", "state_name" => "Pemagatshel",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "23", "state_name" => "Punakha",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "45", "state_name" => "Samdrup Jongkhar",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "14", "state_name" => "Samtse",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "31", "state_name" => "Sarpang",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "15", "state_name" => "Thimphu",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "41", "state_name" => "Trashigang",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "TY", "state_name" => "Trashi Yangtse",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "32", "state_name" => "Trongsa",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "21", "state_name" => "Tsirang",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "24", "state_name" => "Wangdue Phodrang",]);
         DB::table("states")->insert(["country_code" => "BT", "state_code" => "34", "state_name" => "Zhemgang",]);

         // Bolivia, Plurinational State of
         DB::table("states")->insert(["country_code" => "BO", "state_code" => "C", "state_name" => "Cochabamba",]);
         DB::table("states")->insert(["country_code" => "BO", "state_code" => "H", "state_name" => "Chuquisaca",]);
         DB::table("states")->insert(["country_code" => "BO", "state_code" => "B", "state_name" => "El Beni",]);
         DB::table("states")->insert(["country_code" => "BO", "state_code" => "L", "state_name" => "La Paz",]);
         DB::table("states")->insert(["country_code" => "BO", "state_code" => "O", "state_name" => "Oruro",]);
         DB::table("states")->insert(["country_code" => "BO", "state_code" => "N", "state_name" => "Pando",]);
         DB::table("states")->insert(["country_code" => "BO", "state_code" => "P", "state_name" => "Potosí",]);
         DB::table("states")->insert(["country_code" => "BO", "state_code" => "S", "state_name" => "Santa Cruz",]);
         DB::table("states")->insert(["country_code" => "BO", "state_code" => "T", "state_name" => "Tarija",]);

         // Bonaire, Sint Eustatius and Saba
         DB::table("states")->insert(["country_code" => "BQ", "state_code" => "BO", "state_name" => "Bonaire",]);
         DB::table("states")->insert(["country_code" => "BQ", "state_code" => "SA", "state_name" => "Saba",]);
         DB::table("states")->insert(["country_code" => "BQ", "state_code" => "SE", "state_name" => "Sint Eustatius",]);

         // Bosnia and Herzegovina
         DB::table("states")->insert(["country_code" => "BA", "state_code" =>"BIH", "state_name" => "Federacija Bosna i Hercegovina",]);
         DB::table("states")->insert(["country_code" => "BA", "state_code" =>"SRP", "state_name" => "Republika Srpska",]);
         DB::table("states")->insert(["country_code" => "BA", "state_code" =>"BRC", "state_name" => "Brčko District",]);

         // Botswana
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "CE", "state_name" => "Central",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "CH", "state_name" => "Chobe",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "FR", "state_name" => "Francistown",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "GA", "state_name" => "Gaborone",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "GH", "state_name" => "Ghanzi",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "JW", "state_name" => "Jwaneng",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "KG", "state_name" => "Kgalagadi",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "KL", "state_name" => "Kgatleng",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "KW", "state_name" => "Kweneng",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "LO", "state_name" => "Lobatse",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "NE", "state_name" => "North East",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "NW", "state_name" => "North West",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "SP", "state_name" => "Selibe Phikwe",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "SE", "state_name" => "South East",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "SO", "state_name" => "Southern",]);
         DB::table("states")->insert(["country_code" => "BW", "state_code" => "ST", "state_name" => "Sowa Town",]);

         // Bouvet Island (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "BV", "state_code" => "BV", "state_name" => "Bouvet Island",]);

         // Brazil
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "AC", "state_name" => "Acre",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "AL", "state_name" => "Alagoas",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "AP", "state_name" => "Amapá",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "AM", "state_name" => "Amazonas",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "BA", "state_name" => "Bahia",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "CE", "state_name" => "Ceará",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "DF", "state_name" => "Distrito Federal",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "ES", "state_name" => "Espírito Santo",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "GO", "state_name" => "Goiás",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "MA", "state_name" => "Maranhão",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "MT", "state_name" => "Mato Grosso",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "MS", "state_name" => "Mato Grosso do Sul",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "MG", "state_name" => "Minas Gerais",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "PA", "state_name" => "Pará",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "PB", "state_name" => "Paraíba",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "PR", "state_name" => "Paraná",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "PE", "state_name" => "Pernambuco",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "PI", "state_name" => "Piauí",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "RJ", "state_name" => "Rio de Janeiro",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "RN", "state_name" => "Rio Grande do Norte",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "RS", "state_name" => "Rio Grande do Sul",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "RO", "state_name" => "Rondônia",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "RR", "state_name" => "Roraima",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "SC", "state_name" => "Santa Catarina",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "SP", "state_name" => "São Paulo",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "SE", "state_name" => "Sergipe",]);
         DB::table("states")->insert(["country_code" => "BR", "state_code" => "TO", "state_name" => "Tocantins",]);

         // British Indian Ocean Territory (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "IO", "state_code" => "IO", "state_name" => "British Indian Ocean Territory",]);

         // Brunei Darussalam
         DB::table("states")->insert(["country_code" => "BN", "state_code" => "BE", "state_name" => "Belait",]);
         DB::table("states")->insert(["country_code" => "BN", "state_code" => "BM", "state_name" => "Brunei-Muara",]);
         DB::table("states")->insert(["country_code" => "BN", "state_code" => "TE", "state_name" => "Temburong",]);
         DB::table("states")->insert(["country_code" => "BN", "state_code" => "TU", "state_name" => "Tutong",]);

         // Bulgaria
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"01", "state_name" => "Blagoevgrad",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"02", "state_name" => "Burgas",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"08", "state_name" => "Dobrich",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"07", "state_name" => "Gabrovo",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"26", "state_name" => "Haskovo",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"09", "state_name" => "Kardzhali",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"10", "state_name" => "Kyustendil",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"11", "state_name" => "Lovech",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"12", "state_name" => "Montana",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"13", "state_name" => "Pazardzhik",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"14", "state_name" => "Pernik",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"15", "state_name" => "Pleven",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"16", "state_name" => "Plovdiv",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"17", "state_name" => "Razgrad",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"18", "state_name" => "Ruse",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"27", "state_name" => "Shumen",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"19", "state_name" => "Silistra",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"20", "state_name" => "Sliven",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"21", "state_name" => "Smolyan",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"23", "state_name" => "Sofia",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"22", "state_name" => "Sofia (stolitsa)",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"24", "state_name" => "Stara Zagora",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"25", "state_name" => "Targovishte",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"03", "state_name" => "Varna",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"04", "state_name" => "Veliko Tarnovo",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"05", "state_name" => "Vidin",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"06", "state_name" => "Vratsa",]);
         DB::table("states")->insert(["country_code" => "BG", "state_code" =>"28", "state_name" => "Yambol",]);

         // Burkina Faso
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "BAL", "state_name" => "Balé",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "BAM", "state_name" => "Bam",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "BAN", "state_name" => "Banwa",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "BAZ", "state_name" => "Bazèga",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "BGR", "state_name" => "Bougouriba",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "BLG", "state_name" => "Boulgou",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "BLK", "state_name" => "Boulkiemdé",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "COM", "state_name" => "Comoé",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "GAN", "state_name" => "Ganzourgou",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "GNA", "state_name" => "Gnagna",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "GOU", "state_name" => "Gourma",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "HOU", "state_name" => "Houet",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "IOB", "state_name" => "Ioba",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "KAD", "state_name" => "Kadiogo",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "KEN", "state_name" => "Kénédougou",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "KMD", "state_name" => "Komondjari",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "KMP", "state_name" => "Kompienga",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "KOS", "state_name" => "Kossi",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "KOP", "state_name" => "Koulpélogo",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "KOT", "state_name" => "Kouritenga",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "KOW", "state_name" => "Kourwéogo",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "LER", "state_name" => "Léraba",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "LOR", "state_name" => "Loroum",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "MOU", "state_name" => "Mouhoun",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "NAO", "state_name" => "Nahouri",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "NAM", "state_name" => "Namentenga",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "NAY", "state_name" => "Nayala",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "NOU", "state_name" => "Noumbiel",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "OUB", "state_name" => "Oubritenga",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "OUD", "state_name" => "Oudalan",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "PAS", "state_name" => "Passoré",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "PON", "state_name" => "Poni",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "SNG", "state_name" => "Sanguié",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "SMT", "state_name" => "Sanmatenga",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "SEN", "state_name" => "Séno",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "SIS", "state_name" => "Sissili",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "SOM", "state_name" => "Soum",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "SOR", "state_name" => "Sourou",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "TAP", "state_name" => "Tapoa",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "TUI", "state_name" => "Tuy",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "YAG", "state_name" => "Yagha",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "YAT", "state_name" => "Yatenga",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "ZIR", "state_name" => "Ziro",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "ZON", "state_name" => "Zondoma",]);
         DB::table("states")->insert(["country_code" => "BF", "state_code" => "ZOU", "state_name" => "Zoundwéogo",]);

         // Burundi
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "BB", "state_name" => "Bubanza",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "BM", "state_name" => "Bujumbura Mairie",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "BL", "state_name" => "Bujumbura Rural",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "BR", "state_name" => "Bururi",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "CA", "state_name" => "Cankuzo",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "CI", "state_name" => "Cibitoke",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "GI", "state_name" => "Gitega",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "KR", "state_name" => "Karuzi",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "KY", "state_name" => "Kayanza",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "KI", "state_name" => "Kirundo",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "MA", "state_name" => "Makamba",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "MU", "state_name" => "Muramvya",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "MY", "state_name" => "Muyinga",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "MW", "state_name" => "Mwaro",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "NG", "state_name" => "Ngozi",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "RM", "state_name" => "Rumonge",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "RT", "state_name" => "Rutana",]);
         DB::table("states")->insert(["country_code" => "BI", "state_code" => "RY", "state_name" => "Ruyigi",]);

         // Cambodia
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "12", "state_name" => "Phnom Penh",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "2", "state_name" => "Baat Dambang",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "1", "state_name" => "Banteay Mean Chey",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "3", "state_name" => "Kampong Chaam",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "4", "state_name" => "Kampong Chhnang",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "5", "state_name" => "Kampong Spueu",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "6", "state_name" => "Kampong Thum",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "7", "state_name" => "Kampot",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "8", "state_name" => "Kandaal",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "9", "state_name" => "Kaoh Kong",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "10", "state_name" => "Kracheh",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "23", "state_name" => "Kaeb",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "24", "state_name" => "Pailin",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "18", "state_name" => "Preah Sihanouk",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "11", "state_name" => "Mondol Kiri",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "22", "state_name" => "Otdar Mean Chey",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "15", "state_name" => "Pousaat",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "13", "state_name" => "Preah Vihear",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "14", "state_name" => "Prey Veaeng",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "16", "state_name" => "Rotanak Kiri",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "17", "state_name" => "Siem Reab",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "19", "state_name" => "Stueng Traeng",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "20", "state_name" => "Svaay Rieng",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "21", "state_name" => "Taakaev",]);
         DB::table("states")->insert(["country_code" => "KH", "state_code" => "25", "state_name" => "Tbong Khmum",]);

         // Cameroon
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "AD", "state_name" => "Adamaoua",]);
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "CE", "state_name" => "Centre",]);
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "ES", "state_name" => "East",]);
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "EN", "state_name" => "Far North",]);
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "LT", "state_name" => "Littoral",]);
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "NO", "state_name" => "North",]);
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "NW", "state_name" => "North-West",]);
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "SU", "state_name" => "South",]);
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "SW", "state_name" => "South-West",]);
         DB::table("states")->insert(["country_code" => "CM", "state_code" => "OU", "state_name" => "West",]);

         // Canada
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"AB", "state_name" => "Alberta",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"BC", "state_name" => "British Columbia",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"MB", "state_name" => "Manitoba",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"NB", "state_name" => "New Brunswick",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"NL", "state_name" => "Newfoundland and Labrador",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"NS", "state_name" => "Nova Scotia",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"ON", "state_name" => "Ontario",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"PE", "state_name" => "Prince Edward Island",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"QC", "state_name" => "Quebec",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"SK", "state_name" => "Saskatchewan",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"NT", "state_name" => "Northwest Territories",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"NU", "state_name" => "Nunavut",]);
         DB::table("states")->insert(["country_code" => "CA", "state_code" =>"YT", "state_name" => "Yukon",]);

         // Cape Verde
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "BV", "state_name" => "Boa Vista",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "BR", "state_name" => "Brava",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "MA", "state_name" => "Maio",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "MO", "state_name" => "Mosteiros",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "PA", "state_name" => "Paul",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "PN", "state_name" => "Porto Novo",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "PR", "state_name" => "Praia",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "RB", "state_name" => "Ribeira Brava",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "RG", "state_name" => "Ribeira Grande",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "RS", "state_name" => "Ribeira Grande de Santiago",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "SL", "state_name" => "Sal",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "CA", "state_name" => "Santa Catarina",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "CF", "state_name" => "Santa Catarina do Fogo",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "CR", "state_name" => "Santa Cruz",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "SD", "state_name" => "São Domingos",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "SF", "state_name" => "São Filipe",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "SO", "state_name" => "São Lourenço dos Órgãos",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "SM", "state_name" => "São Miguel",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "SS", "state_name" => "São Salvador do Mundo",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "SV", "state_name" => "São Vicente",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "TA", "state_name" => "Tarrafal",]);
         DB::table("states")->insert(["country_code" => "CV", "state_code" => "TS", "state_name" => "Tarrafal de São Nicolau",]);

         // Cayman Islands (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "KY", "state_code" => "KY", "state_name" => "Cayman Islands",]);

         // Central African Republic
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "BGF", "state_name" => "Bangui",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "BB", "state_name" => "Bamingui-Bangoran",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "BK", "state_name" => "Basse-Kotto",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "HK", "state_name" => "Haute-Kotto",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "HM", "state_name" => "Haut-Mbomou",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "HS", "state_name" => "Haute-Sangha/Mambéré-Kadéï",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "KG", "state_name" => "Kémo-Gribingui",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "LB", "state_name" => "Lobaye",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "MB", "state_name" => "Mbomou",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "NM", "state_name" => "Nana-Mambéré",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "MP", "state_name" => "Ombella-Mpoko",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "UK", "state_name" => "Ouaka",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "AC", "state_name" => "Ouham",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "OP", "state_name" => "Ouham-Pendé",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "VK", "state_name" => "Vakaga",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "KB", "state_name" => "Gribingui",]);
         DB::table("states")->insert(["country_code" => "CF", "state_code" => "SE", "state_name" => "Sangha",]);

         // Chad
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "BA", "state_name" => "Al Baţḩah",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "LC", "state_name" => "Al Buḩayrah",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "BG", "state_name" => "Baḩr al Ghazāl",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "BO", "state_name" => "Būrkū",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "HL", "state_name" => "Ḩajjar Lamīs",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "EE", "state_name" => "Ennedi-Est",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "EO", "state_name" => "Ennedi-Ouest",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "KA", "state_name" => "Kānim",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "LO", "state_name" => "Lūqūn al Gharbī",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "LR", "state_name" => "Lūqūn ash Sharqī",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "ND", "state_name" => "Madīnat Injamīnā",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "MA", "state_name" => "Māndūl",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "MO", "state_name" => "Māyū Kībbī al Gharbī",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "ME", "state_name" => "Māyū Kībbī ash Sharqī",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "GR", "state_name" => "Qīrā",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "SA", "state_name" => "Salāmāt",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "MC", "state_name" => "Shārī al Awsaţ",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "CB", "state_name" => "Shārī Bāqirmī",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "SI", "state_name" => "Sīlā",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "TA", "state_name" => "Tānjilī",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "TI", "state_name" => "Tibastī",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "OD", "state_name" => "Waddāy",]);
         DB::table("states")->insert(["country_code" => "TD", "state_code" => "WF", "state_name" => "Wādī Fīrā",]);

         // Chile
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "AI", "state_name" => "Aisén del General Carlos Ibañez del Campo",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "AN", "state_name" => "Antofagasta",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "AP", "state_name" => "Arica y Parinacota",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "AR", "state_name" => "La Araucanía",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "AT", "state_name" => "Atacama",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "BI", "state_name" => "Biobío",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "CO", "state_name" => "Coquimbo",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "LI", "state_name" => "Libertador General Bernardo O'Higgins",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "LL", "state_name" => "Los Lagos",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "LR", "state_name" => "Los Ríos",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "MA", "state_name" => "Magallanes",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "ML", "state_name" => "Maule",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "NB", "state_name" => "Ñuble",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "RM", "state_name" => "Región Metropolitana de Santiago",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "TA", "state_name" => "Tarapacá",]);
         DB::table("states")->insert(["country_code" => "CL", "state_code" => "VS", "state_name" => "Valparaíso",]);

         // China
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "AH", "state_name" => "Anhui Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "BJ", "state_name" => "Beijing Shi",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "CQ", "state_name" => "Chongqing Shi",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "FJ", "state_name" => "Fujian Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "GD", "state_name" => "Guangdong Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "GS", "state_name" => "Gansu Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "GX", "state_name" => "Guangxi Zhuangzu Zizhiqu",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "GZ", "state_name" => "Guizhou Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "HA", "state_name" => "Henan Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "HB", "state_name" => "Hubei Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "HE", "state_name" => "Hebei Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "HI", "state_name" => "Hainan Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "HK", "state_name" => "Hong Kong SAR",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "HL", "state_name" => "Heilongjiang Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "HN", "state_name" => "Hunan Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "JL", "state_name" => "Jilin Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "JS", "state_name" => "Jiangsu Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "JX", "state_name" => "Jiangxi Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "LN", "state_name" => "Liaoning Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "MO", "state_name" => "Macao SAR",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "NM", "state_name" => "Nei Mongol Zizhiqu",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "NX", "state_name" => "Ningxia Huizi Zizhiqu",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "QH", "state_name" => "Qinghai Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "SC", "state_name" => "Sichuan Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "SD", "state_name" => "Shandong Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "SH", "state_name" => "Shanghai Shi",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "SN", "state_name" => "Shaanxi Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "SX", "state_name" => "Shanxi Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "TJ", "state_name" => "Tianjin Shi",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "TW", "state_name" => "Taiwan Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "XJ", "state_name" => "Xinjiang Uygur Zizhiqu",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "XZ", "state_name" => "Xizang Zizhiqu",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "YN", "state_name" => "Yunnan Sheng",]);
         DB::table("states")->insert(["country_code" => "CN", "state_code" => "ZJ", "state_name" => "Zhejiang Sheng",]);

         // Christmas Island (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "CX", "state_code" => "CX", "state_name" => "Christmas Island",]);

         // Cocos (Keeling) Islands (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "CC", "state_code" => "CC", "state_name" => "Cocos (Keeling) Islands",]);

         // Colombia
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "DC", "state_name" => "Distrito Capital de Bogotá",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "AMA", "state_name" => "Amazonas",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "ANT", "state_name" => "Antioquia",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "ARA", "state_name" => "Arauca",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "ATL", "state_name" => "Atlántico",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "BOL", "state_name" => "Bolívar",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "BOY", "state_name" => "Boyacá",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "CAL", "state_name" => "Caldas",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "CAQ", "state_name" => "Caquetá",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "CAS", "state_name" => "Casanare",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "CAU", "state_name" => "Cauca",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "CES", "state_name" => "Cesar",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "COR", "state_name" => "Córdoba",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "CUN", "state_name" => "Cundinamarca",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "CHO", "state_name" => "Chocó",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "GUA", "state_name" => "Guainía",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "GUV", "state_name" => "Guaviare",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "HUI", "state_name" => "Huila",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "LAG", "state_name" => "La Guajira",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "MAG", "state_name" => "Magdalena",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "MET", "state_name" => "Meta",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "NAR", "state_name" => "Nariño",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "NSA", "state_name" => "Norte de Santander",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "PUT", "state_name" => "Putumayo",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "QUI", "state_name" => "Quindío",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "RIS", "state_name" => "Risaralda",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "SAP", "state_name" => "San Andrés, Providencia y Santa Catalina",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "SAN", "state_name" => "Santander",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "SUC", "state_name" => "Sucre",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "TOL", "state_name" => "Tolima",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "VAC", "state_name" => "Valle del Cauca",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "VAU", "state_name" => "Vaupés",]);
         DB::table("states")->insert(["country_code" => "CO", "state_code" => "VID", "state_name" => "Vichada",]);

         // Comoros
         DB::table("states")->insert(["country_code" => "KM", "state_code" => "G", "state_name" => "Grande Comore",]);
         DB::table("states")->insert(["country_code" => "KM", "state_code" => "A", "state_name" => "Anjouan",]);
         DB::table("states")->insert(["country_code" => "KM", "state_code" => "M", "state_name" => "Mohéli",]);

         // Congo
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "BZV", "state_name" => "Brazzaville",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "11", "state_name" => "Bouenza",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "8", "state_name" => "Cuvette",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "15", "state_name" => "Cuvette-Ouest",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "5", "state_name" => "Kouilou",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "2", "state_name" => "Lékoumou",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "7", "state_name" => "Likouala",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "9", "state_name" => "Niari",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "14", "state_name" => "Plateaux",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "16", "state_name" => "Pointe-Noire",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "12", "state_name" => "Pool",]);
         DB::table("states")->insert(["country_code" => "CG", "state_code" => "13", "state_name" => "Sangha",]);

         // Congo, the Democratic Republic of the
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "KN", "state_name" => "Kinshasa",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "BC", "state_name" => "Kongo Central",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "EQ", "state_name" => "Equator",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "KE", "state_name" => "Kasai-Oriental",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "MA", "state_name" => "Maniema",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "NK", "state_name" => "North Kivu",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "SK", "state_name" => "South Kivu",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "BU", "state_name" => "Bas-Uele",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "HK", "state_name" => "Haut-Katanga",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "HL", "state_name" => "Haut-Lomami",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "HU", "state_name" => "Haut-Uele",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "IT", "state_name" => "Ituri",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "KC", "state_name" => "Kasai Central",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "KG", "state_name" => "Kwango",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "KL", "state_name" => "Kwilu",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "KS", "state_name" => "Kasai",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "LO", "state_name" => "Lomami",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "LU", "state_name" => "Lualaba",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "MN", "state_name" => "Mai-Ndombe",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "MO", "state_name" => "Mongala",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "NU", "state_name" => "North Ubangi",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "SA", "state_name" => "Sankuru",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "SU", "state_name" => "South Ubangi",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "TA", "state_name" => "Tanganyika",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "TO", "state_name" => "Tshopo",]);
         DB::table("states")->insert(["country_code" => "CD", "state_code" => "TU", "state_name" => "Tshuapa",]);

         // Cook Islands (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "CK", "state_code" => "CK", "state_name" => "Cook Islands",]);

         // Costa Rica
         DB::table("states")->insert(["country_code" => "CR", "state_code" => "A", "state_name" => "Alajuela",]);
         DB::table("states")->insert(["country_code" => "CR", "state_code" => "C", "state_name" => "Cartago",]);
         DB::table("states")->insert(["country_code" => "CR", "state_code" => "G", "state_name" => "Guanacaste",]);
         DB::table("states")->insert(["country_code" => "CR", "state_code" => "H", "state_name" => "Heredia",]);
         DB::table("states")->insert(["country_code" => "CR", "state_code" => "L", "state_name" => "Limón",]);
         DB::table("states")->insert(["country_code" => "CR", "state_code" => "P", "state_name" => "Puntarenas",]);
         DB::table("states")->insert(["country_code" => "CR", "state_code" => "SJ", "state_name" => "San José",]);

         // Côte d'Ivoire
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "AB", "state_name" => "Abidjan",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "BS", "state_name" => "Bas-Sassandra",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "CM", "state_name" => "Comoé",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "DN", "state_name" => "Denguélé",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "GD", "state_name" => "Gôh-Djiboua",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "LC", "state_name" => "Lacs",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "LG", "state_name" => "Lagunes",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "MG", "state_name" => "Montagnes",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "SM", "state_name" => "Sassandra-Marahoué",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "SV", "state_name" => "Savanes",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "VB", "state_name" => "Vallée du Bandama",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "WR", "state_name" => "Woroba",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "YM", "state_name" => "Yamoussoukro",]);
         DB::table("states")->insert(["country_code" => "CI", "state_code" => "ZZ", "state_name" => "Zanzan",]);

         // Croatia
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "21", "state_name" => "Grad Zagreb",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "07", "state_name" => "Bjelovarsko-bilogorska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "12", "state_name" => "Brodsko-posavska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "19", "state_name" => "Dubrovačko-neretvanska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "18", "state_name" => "Istarska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "04", "state_name" => "Karlovačka županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "06", "state_name" => "Koprivničko-križevačka županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "02", "state_name" => "Krapinsko-zagorska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "09", "state_name" => "Ličko-senjska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "20", "state_name" => "Međimurska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "14", "state_name" => "Osječko-baranjska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "11", "state_name" => "Požeško-slavonska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "08", "state_name" => "Primorsko-goranska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "03", "state_name" => "Sisačko-moslavačka županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "17", "state_name" => "Splitsko-dalmatinska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "15", "state_name" => "Šibensko-kninska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "05", "state_name" => "Varaždinska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "10", "state_name" => "Virovitičko-podravska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "16", "state_name" => "Vukovarsko-srijemska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "13", "state_name" => "Zadarska županija",]);
         DB::table("states")->insert(["country_code" => "HR", "state_code" => "01", "state_name" => "Zagrebačka županija",]);

         // Cuba
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "15", "state_name" => "Artemisa",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "09", "state_name" => "Camagüey",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "08", "state_name" => "Ciego de Ávila",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "06", "state_name" => "Cienfuegos",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "12", "state_name" => "Granma",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "14", "state_name" => "Guantánamo",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "11", "state_name" => "Holguín",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "03", "state_name" => "La Habana",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "10", "state_name" => "Las Tunas",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "04", "state_name" => "Matanzas",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "16", "state_name" => "Mayabeque",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "01", "state_name" => "Pinar del Río",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "07", "state_name" => "Sancti Spíritus",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "13", "state_name" => "Santiago de Cuba",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "05", "state_name" => "Villa Clara",]);
         DB::table("states")->insert(["country_code" => "CU", "state_code" => "99", "state_name" => "Isla de la Juventud",]);

         // Curaçao (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "CW", "state_code" => "CW", "state_name" => "Curaçao",]);

         // Cyprus
         DB::table("states")->insert(["country_code" => "CY", "state_code" =>"04", "state_name" => "Famagusta",]);
         DB::table("states")->insert(["country_code" => "CY", "state_code" =>"06", "state_name" => "Kyrenia",]);
         DB::table("states")->insert(["country_code" => "CY", "state_code" =>"03", "state_name" => "Larnaca",]);
         DB::table("states")->insert(["country_code" => "CY", "state_code" =>"01", "state_name" => "Nicosia",]);
         DB::table("states")->insert(["country_code" => "CY", "state_code" =>"02", "state_name" => "Limassol",]);
         DB::table("states")->insert(["country_code" => "CY", "state_code" =>"05", "state_name" => "Paphos",]);

         // Czech Republic
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"31", "state_name" => "Jihočeský kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"64", "state_name" => "Jihomoravský kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"41", "state_name" => "Karlovarský kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"52", "state_name" => "Královéhradecký kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"51", "state_name" => "Liberecký kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"80", "state_name" => "Moravskoslezský kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"71", "state_name" => "Olomoucký kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"53", "state_name" => "Pardubický kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"32", "state_name" => "Plzeňský kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"10", "state_name" => "Praha, Hlavní město",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"20", "state_name" => "Středočeský kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"42", "state_name" => "Ústecký kraj",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"63", "state_name" => "Kraj Vysočina",]);
         DB::table("states")->insert(["country_code" => "CZ", "state_code" =>"72", "state_name" => "Zlínský kraj",]);

         // Denmark
         DB::table("states")->insert(["country_code" => "DK", "state_code" =>"84", "state_name" => "Hovedstaden",]);
         DB::table("states")->insert(["country_code" => "DK", "state_code" =>"82", "state_name" => "Midtjylland",]);
         DB::table("states")->insert(["country_code" => "DK", "state_code" =>"81", "state_name" => "Nordjylland",]);
         DB::table("states")->insert(["country_code" => "DK", "state_code" =>"85", "state_name" => "Sjælland",]);
         DB::table("states")->insert(["country_code" => "DK", "state_code" =>"83", "state_name" => "Syddanmark",]);

         // Djibouti
         DB::table("states")->insert(["country_code" => "DJ", "state_code" =>"AS", "state_name" => "Ali Sabieh",]);
         DB::table("states")->insert(["country_code" => "DJ", "state_code" =>"AR", "state_name" => "Arta",]);
         DB::table("states")->insert(["country_code" => "DJ", "state_code" =>"DI", "state_name" => "Dikhil",]);
         DB::table("states")->insert(["country_code" => "DJ", "state_code" =>"OB", "state_name" => "Obock",]);
         DB::table("states")->insert(["country_code" => "DJ", "state_code" =>"TA", "state_name" => "Tadjourah",]);
         DB::table("states")->insert(["country_code" => "DJ", "state_code" =>"DJ", "state_name" => "Djibouti",]);

         // Dominica
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "02", "state_name" => "Saint Andrew",]);
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "03", "state_name" => "Saint David",]);
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "04", "state_name" => "Saint George",]);
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "05", "state_name" => "Saint John",]);
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "06", "state_name" => "Saint Joseph",]);
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "07", "state_name" => "Saint Luke",]);
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "08", "state_name" => "Saint Mark",]);
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "09", "state_name" => "Saint Patrick",]);
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "10", "state_name" => "Saint Paul",]);
         DB::table("states")->insert(["country_code" => "DM", "state_code" => "11", "state_name" => "Saint Peter",]);

         // Dominican Republic
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "01", "state_name" => "Distrito Nacional",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "02", "state_name" => "Azua",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "03", "state_name" => "Baoruco",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "04", "state_name" => "Barahona",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "05", "state_name" => "Dajabón",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "06", "state_name" => "Duarte",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "08", "state_name" => "El Seibo",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "09", "state_name" => "Espaillat",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "30", "state_name" => "Hato Mayor",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "10", "state_name" => "Independencia",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "11", "state_name" => "La Altagracia",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "07", "state_name" => "Elías Piña",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "12", "state_name" => "La Romana",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "13", "state_name" => "La Vega",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "14", "state_name" => "María Trinidad Sánchez",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "28", "state_name" => "Monseñor Nouel",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "15", "state_name" => "Monte Cristi",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "29", "state_name" => "Monte Plata",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "16", "state_name" => "Pedernales",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "17", "state_name" => "Peravia",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "18", "state_name" => "Puerto Plata",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "19", "state_name" => "Hermanas Mirabal",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "20", "state_name" => "Samaná",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "21", "state_name" => "San Cristóbal",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "31", "state_name" => "San José de Ocoa",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "22", "state_name" => "San Juan",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "23", "state_name" => "San Pedro de Macorís",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "24", "state_name" => "Sánchez Ramírez",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "25", "state_name" => "Santiago",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "26", "state_name" => "Santiago Rodríguez",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "32", "state_name" => "Santo Domingo",]);
         DB::table("states")->insert(["country_code" => "DO", "state_code" => "27", "state_name" => "Valverde",]);

         // Ecuador
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "A", "state_name" => "Azuay",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "B", "state_name" => "Bolívar",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "F", "state_name" => "Cañar",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "C", "state_name" => "Carchi",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "H", "state_name" => "Chimborazo",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "X", "state_name" => "Cotopaxi",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "O", "state_name" => "El Oro",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "E", "state_name" => "Esmeraldas",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "W", "state_name" => "Galápagos",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "G", "state_name" => "Guayas",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "I", "state_name" => "Imbabura",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "L", "state_name" => "Loja",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "R", "state_name" => "Los Ríos",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "M", "state_name" => "Manabí",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "S", "state_name" => "Morona Santiago",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "N", "state_name" => "Napo",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "D", "state_name" => "Orellana",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "Y", "state_name" => "Pastaza",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "P", "state_name" => "Pichincha",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "SE", "state_name" => "Santa Elena",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "SD", "state_name" => "Santo Domingo de los Tsáchilas",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "U", "state_name" => "Sucumbíos",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "T", "state_name" => "Tungurahua",]);
         DB::table("states")->insert(["country_code" => "EC", "state_code" => "Z", "state_name" => "Zamora Chinchipe",]);

         // Egypt
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "DK", "state_name" => "Dakahlia",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "BA", "state_name" => "Red Sea",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "BH", "state_name" => "Beheira",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "FYM", "state_name" => "Faiyum",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "GH", "state_name" => "Gharbia",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "ALX", "state_name" => "Alexandria",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "IS", "state_name" => "Ismailia",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "GZ", "state_name" => "Giza",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "MNF", "state_name" => "Monufia",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "MN", "state_name" => "Minya",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "C", "state_name" => "Cairo",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "KB", "state_name" => "Qalyubia",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "LX", "state_name" => "Luxor",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "WAD", "state_name" => "New Valley",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "SUZ", "state_name" => "Suez",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "SHR", "state_name" => "Al Sharqia",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "ASN", "state_name" => "Aswan",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "AST", "state_name" => "Asyut",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "BNS", "state_name" => "Beni Suef",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "PTS", "state_name" => "Port Said",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "DT", "state_name" => "Damietta",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "JS", "state_name" => "South Sinai",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "KFS", "state_name" => "Kafr el-Sheikh",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "MT", "state_name" => "Matrouh",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "KN", "state_name" => "Qena",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "SIN", "state_name" => "North Sinai",]);
         DB::table("states")->insert(["country_code" => "EG", "state_code" => "SHG", "state_name" => "Sohag",]);

         // El Salvador
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "AH", "state_name" => "Ahuachapán",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "CA", "state_name" => "Cabañas",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "CH", "state_name" => "Chalatenango",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "CU", "state_name" => "Cuscatlán",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "LI", "state_name" => "La Libertad",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "PA", "state_name" => "La Paz",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "UN", "state_name" => "La Unión",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "MO", "state_name" => "Morazán",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "SM", "state_name" => "San Miguel",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "SS", "state_name" => "San Salvador",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "SV", "state_name" => "San Vicente",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "SA", "state_name" => "Santa Ana",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "SO", "state_name" => "Sonsonate",]);
         DB::table("states")->insert(["country_code" => "SV", "state_code" => "US", "state_name" => "Usulután",]);

         // Equatorial Guinea
         DB::table("states")->insert(["country_code" => "GQ", "state_code" => "AN", "state_name" => "Annobón",]);
         DB::table("states")->insert(["country_code" => "GQ", "state_code" => "BN", "state_name" => "Bioko Norte",]);
         DB::table("states")->insert(["country_code" => "GQ", "state_code" => "BS", "state_name" => "Bioko Sur",]);
         DB::table("states")->insert(["country_code" => "GQ", "state_code" => "CS", "state_name" => "Centro Sur",]);
         DB::table("states")->insert(["country_code" => "GQ", "state_code" => "KN", "state_name" => "Kié-Ntem",]);
         DB::table("states")->insert(["country_code" => "GQ", "state_code" => "LI", "state_name" => "Litoral",]);
         DB::table("states")->insert(["country_code" => "GQ", "state_code" => "WN", "state_name" => "Wele-Nzas",]);

         // Eritrea
         DB::table("states")->insert(["country_code" => "ER", "state_code" => "MA", "state_name" => "Maekel",]);
         DB::table("states")->insert(["country_code" => "ER", "state_code" => "DU", "state_name" => "Debub",]);
         DB::table("states")->insert(["country_code" => "ER", "state_code" => "AN", "state_name" => "Anseba",]);
         DB::table("states")->insert(["country_code" => "ER", "state_code" => "DK", "state_name" => "Southern Red Sea",]);
         DB::table("states")->insert(["country_code" => "ER", "state_code" => "GB", "state_name" => "Gash-Barka",]);
         DB::table("states")->insert(["country_code" => "ER", "state_code" => "SK", "state_name" => "Northern Red Sea",]);

         // Estonia
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"37", "state_name" => "Harjumaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"39", "state_name" => "Hiiumaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"44", "state_name" => "Ida-Virumaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"49", "state_name" => "Jõgevamaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"51", "state_name" => "Järvamaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"57", "state_name" => "Läänemaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"59", "state_name" => "Lääne-Virumaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"65", "state_name" => "Põlvamaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"67", "state_name" => "Pärnumaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"70", "state_name" => "Raplamaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"74", "state_name" => "Saaremaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"78", "state_name" => "Tartumaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"82", "state_name" => "Valgamaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"84", "state_name" => "Viljandimaa",]);
         DB::table("states")->insert(["country_code" => "EE", "state_code" =>"86", "state_name" => "Võrumaa",]);
         // Ethiopia
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "AA", "state_name" => "Addis Ababa",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "DD", "state_name" => "Dire Dawa",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "AF", "state_name" => "Afar",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "AM", "state_name" => "Amara",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "BE", "state_name" => "Benshangul-Gumaz",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "GA", "state_name" => "Gambela Peoples",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "HA", "state_name" => "Harari People",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "OR", "state_name" => "Oromia",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "SO", "state_name" => "Somali",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "TI", "state_name" => "Tigrai",]);
         DB::table("states")->insert(["country_code" => "ET", "state_code" => "SN", "state_name" => "Southern Nations, Nationalities and Peoples",]);

         // Falkland Islands (Malvinas) (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "FK", "state_code" => "FK", "state_name" => "Falkland Islands (Malvinas)",]);

         // Faroe Islands (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "FO", "state_code" => "FO", "state_name" => "Faroe Islands",]);

         // Fiji
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "01", "state_name" => "Ba",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "02", "state_name" => "Bua",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "03", "state_name" => "Cakaudrove",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "04", "state_name" => "Kadavu",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "05", "state_name" => "Lau",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "06", "state_name" => "Lomaiviti",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "07", "state_name" => "Macuata",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "08", "state_name" => "Nadroga and Navosa",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "09", "state_name" => "Naitasiri",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "10", "state_name" => "Namosi",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "11", "state_name" => "Ra",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "12", "state_name" => "Rewa",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "13", "state_name" => "Serua",]);
         DB::table("states")->insert(["country_code" => "FJ", "state_code" => "14", "state_name" => "Tailevu",]);

         // Finland
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"01", "state_name" => "Ahvenanmaan maakunta",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"02", "state_name" => "Etelä-Karjala",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"03", "state_name" => "Etelä-Pohjanmaa",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"04", "state_name" => "Etelä-Savo",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"05", "state_name" => "Kainuu",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"06", "state_name" => "Kanta-Häme",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"07", "state_name" => "Keski-Pohjanmaa",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"08", "state_name" => "Keski-Suomi",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"09", "state_name" => "Kymenlaakso",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"10", "state_name" => "Lappi",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"11", "state_name" => "Pirkanmaa",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"12", "state_name" => "Pohjanmaa",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"13", "state_name" => "Pohjois-Karjala",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"14", "state_name" => "Pohjois-Pohjanmaa",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"15", "state_name" => "Pohjois-Savo",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"16", "state_name" => "Päijät-Häme",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"17", "state_name" => "Satakunta",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"18", "state_name" => "Uusimaa",]);
         DB::table("states")->insert(["country_code" => "FI", "state_code" =>"19", "state_name" => "Varsinais-Suomi",]);

         // France
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"ARA", "state_name" => "Auvergne-Rhône-Alpes",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"BFC", "state_name" => "Bourgogne-Franche-Comté",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"BRE", "state_name" => "Bretagne",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"CVL", "state_name" => "Centre-Val de Loire",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"COR", "state_name" => "Corse",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"GES", "state_name" => "Grand-Est",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"GUA", "state_name" => "Guadeloupe",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"HDF", "state_name" => "Hauts-de-France",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"IDF", "state_name" => "Île-de-France",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"MAY", "state_name" => "Mayotte",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"NOR", "state_name" => "Normandie",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"NAQ", "state_name" => "Nouvelle-Aquitaine",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"OCC", "state_name" => "Occitanie",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"PDL", "state_name" => "Pays-de-la-Loire",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"PAC", "state_name" => "Provence-Alpes-Côte-d’Azur",]);
         DB::table("states")->insert(["country_code" => "FR", "state_code" =>"LRE", "state_name" => "La Réunion",]);

         // French Guiana (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "GF", "state_code" => "GF", "state_name" => "French Guiana",]);

         // French Polynesia (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "PF", "state_code" => "PF", "state_name" => "French Polynesia",]);

         // French Southern Territories (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "TF", "state_code" => "TF", "state_name" => "French Southern Territories",]);

         // Gabon
         DB::table("states")->insert(["country_code" => "GA", "state_code" => "1", "state_name" => "Estuaire",]);
         DB::table("states")->insert(["country_code" => "GA", "state_code" => "2", "state_name" => "Haut-Ogooué",]);
         DB::table("states")->insert(["country_code" => "GA", "state_code" => "3", "state_name" => "Moyen-Ogooué",]);
         DB::table("states")->insert(["country_code" => "GA", "state_code" => "4", "state_name" => "Ngounié",]);
         DB::table("states")->insert(["country_code" => "GA", "state_code" => "5", "state_name" => "Nyanga",]);
         DB::table("states")->insert(["country_code" => "GA", "state_code" => "6", "state_name" => "Ogooué-Ivindo",]);
         DB::table("states")->insert(["country_code" => "GA", "state_code" => "7", "state_name" => "Ogooué-Lolo",]);
         DB::table("states")->insert(["country_code" => "GA", "state_code" => "8", "state_name" => "Ogooué-Maritime",]);
         DB::table("states")->insert(["country_code" => "GA", "state_code" => "9", "state_name" => "Woleu-Ntem",]);

         // Gambia
         DB::table("states")->insert(["country_code" => "GM", "state_code" => "B", "state_name" => "Banjul",]);
         DB::table("states")->insert(["country_code" => "GM", "state_code" => "M", "state_name" => "Central River",]);
         DB::table("states")->insert(["country_code" => "GM", "state_code" => "L", "state_name" => "Lower River",]);
         DB::table("states")->insert(["country_code" => "GM", "state_code" => "N", "state_name" => "North Bank",]);
         DB::table("states")->insert(["country_code" => "GM", "state_code" => "U", "state_name" => "Upper River",]);
         DB::table("states")->insert(["country_code" => "GM", "state_code" => "W", "state_name" => "Western",]);

         // Georgia
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"AB", "state_name" => "Abkhazia",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"AJ", "state_name" => "Ajaria",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"TB", "state_name" => "Tbilisi",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"GU", "state_name" => "Guria",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"IM", "state_name" => "Imereti",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"KA", "state_name" => "K'akheti",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"KK", "state_name" => "Kvemo Kartli",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"MM", "state_name" => "Mtskheta-Mtianeti",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"RL", "state_name" => "Rach'a-Lechkhumi-Kvemo Svaneti",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"SZ", "state_name" => "Samegrelo-Zemo Svaneti",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"SJ", "state_name" => "Samtskhe-Javakheti",]);
         DB::table("states")->insert(["country_code" => "GE", "state_code" =>"SK", "state_name" => "Shida Kartli",]);

         // Germany
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"BW", "state_name" => "Baden-Württemberg",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"BY", "state_name" => "Bayern",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"BE", "state_name" => "Berlin",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"BB", "state_name" => "Brandenburg",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"HB", "state_name" => "Bremen",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"HH", "state_name" => "Hamburg",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"HE", "state_name" => "Hessen",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"MV", "state_name" => "Mecklenburg-Vorpommern",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"NI", "state_name" => "Niedersachsen",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"NW", "state_name" => "Nordrhein-Westfalen",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"RP", "state_name" => "Rheinland-Pfalz",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"SL", "state_name" => "Saarland",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"SN", "state_name" => "Sachsen",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"ST", "state_name" => "Sachsen-Anhalt",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"SH", "state_name" => "Schleswig-Holstein",]);
         DB::table("states")->insert(["country_code" => "DE", "state_code" =>"TH", "state_name" => "Thüringen",]);

         // Ghana
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "AF", "state_name" => "Ahafo",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "AH", "state_name" => "Ashanti",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "BO", "state_name" => "Bono",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "BE", "state_name" => "Bono East",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "CP", "state_name" => "Central",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "EP", "state_name" => "Eastern",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "AA", "state_name" => "Greater Accra",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "NE", "state_name" => "North East",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "NP", "state_name" => "Northern",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "OT", "state_name" => "Oti",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "SV", "state_name" => "Savannah",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "UE", "state_name" => "Upper East",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "UW", "state_name" => "Upper West",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "TV", "state_name" => "Volta",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "WP", "state_name" => "Western",]);
         DB::table("states")->insert(["country_code" => "GH", "state_code" => "WN", "state_name" => "Western North",]);

         // Gibraltar (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "GI", "state_code" => "GI", "state_name" => "Gibraltar",]);

         // Greece
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"A", "state_name" => "Anatolikí Makedonía kai Thráki",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"I", "state_name" => "Attikí",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"G", "state_name" => "Dytikí Elláda",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"C", "state_name" => "Dytikí Makedonía",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"F", "state_name" => "Ionía Nísia",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"D", "state_name" => "Ípeiros",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"B", "state_name" => "Kentrikí Makedonía",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"M", "state_name" => "Kríti",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"L", "state_name" => "Nótio Aigaío",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"J", "state_name" => "Pelopónnisos",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"H", "state_name" => "Stereá Elláda",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"E", "state_name" => "Thessalía",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"K", "state_name" => "Vóreio Aigaío",]);
         DB::table("states")->insert(["country_code" => "GR", "state_code" =>"69", "state_name" => "Ágion Óros",]);

         // Greenland
         DB::table("states")->insert(["country_code" => "GL", "state_code" =>"AV", "state_name" => "Avannaata Kommunia",]);
         DB::table("states")->insert(["country_code" => "GL", "state_code" =>"KU", "state_name" => "Kommune Kujalleq",]);
         DB::table("states")->insert(["country_code" => "GL", "state_code" =>"QT", "state_name" => "Kommune Qeqertalik",]);
         DB::table("states")->insert(["country_code" => "GL", "state_code" =>"SM", "state_name" => "Kommuneqarfik Sermersooq",]);
         DB::table("states")->insert(["country_code" => "GL", "state_code" =>"QE", "state_name" => "Qeqqata Kommunia",]);

         // Grenada
         DB::table("states")->insert(["country_code" => "GD", "state_code" =>"01", "state_name" => "Saint Andrew",]);
         DB::table("states")->insert(["country_code" => "GD", "state_code" =>"02", "state_name" => "Saint David",]);
         DB::table("states")->insert(["country_code" => "GD", "state_code" =>"03", "state_name" => "Saint George",]);
         DB::table("states")->insert(["country_code" => "GD", "state_code" =>"04", "state_name" => "Saint John",]);
         DB::table("states")->insert(["country_code" => "GD", "state_code" =>"05", "state_name" => "Saint Mark",]);
         DB::table("states")->insert(["country_code" => "GD", "state_code" =>"06", "state_name" => "Saint Patrick",]);
         DB::table("states")->insert(["country_code" => "GD", "state_code" =>"10", "state_name" => "Southern Grenadine Islands",]);

         // Guadeloupe (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "GP", "state_code" => "GP", "state_name" => "Guadeloupe",]);

         // Guam (Guam IS an outlying area of the United States)
         DB::table("states")->insert(["country_code" => "GU", "state_code" => "GU", "state_name" => "Guam",]);

         // Guatemala
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "AV", "state_name" => "Alta Verapaz",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "BV", "state_name" => "Baja Verapaz",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "CM", "state_name" => "Chimaltenango",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "CQ", "state_name" => "Chiquimula",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "PR", "state_name" => "El Progreso",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "ES", "state_name" => "Escuintla",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "GU", "state_name" => "Guatemala",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "HU", "state_name" => "Huehuetenango",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "IZ", "state_name" => "Izabal",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "JA", "state_name" => "Jalapa",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "JU", "state_name" => "Jutiapa",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "PE", "state_name" => "Petén",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "QZ", "state_name" => "Quetzaltenango",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "QC", "state_name" => "Quiché",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "RE", "state_name" => "Retalhuleu",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "SA", "state_name" => "Sacatepéquez",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "SM", "state_name" => "San Marcos",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "SR", "state_name" => "Santa Rosa",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "SO", "state_name" => "Sololá",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "SU", "state_name" => "Suchitepéquez",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "TO", "state_name" => "Totonicapán",]);
         DB::table("states")->insert(["country_code" => "GT", "state_code" => "ZA", "state_name" => "Zacapa",]);

         // Guernsey (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "GG", "state_code" => "GG", "state_name" => "Guernsey",]);

         // Guinea
         DB::table("states")->insert(["country_code" => "GN", "state_code" => "B", "state_name" => "Boké",]);
         DB::table("states")->insert(["country_code" => "GN", "state_code" => "F", "state_name" => "Faranah",]);
         DB::table("states")->insert(["country_code" => "GN", "state_code" => "K", "state_name" => "Kankan",]);
         DB::table("states")->insert(["country_code" => "GN", "state_code" => "D", "state_name" => "Kindia",]);
         DB::table("states")->insert(["country_code" => "GN", "state_code" => "L", "state_name" => "Labé",]);
         DB::table("states")->insert(["country_code" => "GN", "state_code" => "M", "state_name" => "Mamou",]);
         DB::table("states")->insert(["country_code" => "GN", "state_code" => "N", "state_name" => "Nzérékoré",]);
         DB::table("states")->insert(["country_code" => "GN", "state_code" => "C", "state_name" => "Conakry",]);

         // Guinea-Bissau
         DB::table("states")->insert(["country_code" => "GW", "state_code" => "BS", "state_name" => "Bissau",]);
         DB::table("states")->insert(["country_code" => "GW", "state_code" => "BA", "state_name" => "Bafatá",]);
         DB::table("states")->insert(["country_code" => "GW", "state_code" => "BM", "state_name" => "Biombo",]);
         DB::table("states")->insert(["country_code" => "GW", "state_code" => "BL", "state_name" => "Bolama",]);
         DB::table("states")->insert(["country_code" => "GW", "state_code" => "CA", "state_name" => "Cacheu",]);
         DB::table("states")->insert(["country_code" => "GW", "state_code" => "GA", "state_name" => "Gabú",]);
         DB::table("states")->insert(["country_code" => "GW", "state_code" => "OI", "state_name" => "Oio",]);
         DB::table("states")->insert(["country_code" => "GW", "state_code" => "QU", "state_name" => "Quinara",]);
         DB::table("states")->insert(["country_code" => "GW", "state_code" => "TO", "state_name" => "Tombali",]);

         // Guyana
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "BA", "state_name" => "Barima-Waini",]);
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "CU", "state_name" => "Cuyuni-Mazaruni",]);
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "DE", "state_name" => "Demerara-Mahaica",]);
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "EB", "state_name" => "East Berbice-Corentyne",]);
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "ES", "state_name" => "Essequibo Islands-West Demerara",]);
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "MA", "state_name" => "Mahaica-Berbice",]);
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "PM", "state_name" => "Pomeroon-Supenaam",]);
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "PT", "state_name" => "Potaro-Siparuni",]);
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "UD", "state_name" => "Upper Demerara-Berbice",]);
         DB::table("states")->insert(["country_code" => "GY", "state_code" => "UT", "state_name" => "Upper Takutu-Upper Essequibo",]);

         // Haiti
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "AR", "state_name" => "Artibonite",]);
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "CE", "state_name" => "Centre",]);
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "GA", "state_name" => "Grande’Anse",]);
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "NI", "state_name" => "Nippes",]);
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "ND", "state_name" => "Nord",]);
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "NE", "state_name" => "Nord-Est",]);
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "NO", "state_name" => "Nord-Ouest",]);
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "OU", "state_name" => "Ouest",]);
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "SD", "state_name" => "Sud",]);
         DB::table("states")->insert(["country_code" => "HT", "state_code" => "SE", "state_name" => "Sud-Est",]);

         // Heard Island and McDonald Islands (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "HM", "state_code" => "HM", "state_name" => "Heard Island and McDonald Islands",]);

         // Holy See (Vatican City State)
         DB::table("states")->insert(["country_code" => "VA", "state_code" => "VA", "state_name" => "Holy See (Vatican City State)",]);

         // Honduras
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "AT", "state_name" => "Atlántida",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "CH", "state_name" => "Choluteca",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "CL", "state_name" => "Colón",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "CM", "state_name" => "Comayagua",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "CP", "state_name" => "Copán",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "CR", "state_name" => "Cortés",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "EP", "state_name" => "El Paraíso",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "FM", "state_name" => "Francisco Morazán",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "GD", "state_name" => "Gracias a Dios",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "IN", "state_name" => "Intibucá",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "IB", "state_name" => "Islas de la Bahía",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "LP", "state_name" => "La Paz",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "LE", "state_name" => "Lempira",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "OC", "state_name" => "Ocotepeque",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "OL", "state_name" => "Olancho",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "SB", "state_name" => "Santa Bárbara",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "VA", "state_name" => "Valle",]);
         DB::table("states")->insert(["country_code" => "HN", "state_code" => "YO", "state_name" => "Yoro",]);

         // Hong Kong (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "HK", "state_code" => "HK", "state_name" => "Hong Kong",]);

         // Hungary
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"BU", "state_name" => "Budapest",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"BK", "state_name" => "Bács-Kiskun",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"BA", "state_name" => "Baranya",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"BE", "state_name" => "Békés",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"BZ", "state_name" => "Borsod-Abaúj-Zemplén",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"CS", "state_name" => "Csongrád",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"FE", "state_name" => "Fejér",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"GS", "state_name" => "Győr-Moson-Sopron",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"HB", "state_name" => "Hajdú-Bihar",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"HE", "state_name" => "Heves",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"JN", "state_name" => "Jász-Nagykun-Szolnok",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"KE", "state_name" => "Komárom-Esztergom",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"NO", "state_name" => "Nógrád",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"PE", "state_name" => "Pest",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"SO", "state_name" => "Somogy",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"SZ", "state_name" => "Szabolcs-Szatmár-Bereg",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"TO", "state_name" => "Tolna",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"VA", "state_name" => "Vas",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"VE", "state_name" => "Veszprém",]);
         DB::table("states")->insert(["country_code" => "HU", "state_code" =>"ZA", "state_name" => "Zala",]);

         // Iceland
         DB::table("states")->insert(["country_code" => "IS", "state_code" =>"1", "state_name" => "Höfuðborgarsvæði",]);
         DB::table("states")->insert(["country_code" => "IS", "state_code" =>"2", "state_name" => "Suðurnes",]);
         DB::table("states")->insert(["country_code" => "IS", "state_code" =>"3", "state_name" => "Vesturland",]);
         DB::table("states")->insert(["country_code" => "IS", "state_code" =>"4", "state_name" => "Vestfirðir",]);
         DB::table("states")->insert(["country_code" => "IS", "state_code" =>"5", "state_name" => "Norðurland vestra",]);
         DB::table("states")->insert(["country_code" => "IS", "state_code" =>"6", "state_name" => "Norðurland eystra",]);
         DB::table("states")->insert(["country_code" => "IS", "state_code" =>"7", "state_name" => "Austurland",]);
         DB::table("states")->insert(["country_code" => "IS", "state_code" =>"8", "state_name" => "Suðurland",]);

         // India
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "AP", "state_name" => "Andhra Pradesh",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "AR", "state_name" => "Arunachal Pradesh",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "AS", "state_name" => "Assam",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "BR", "state_name" => "Bihar",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "CT", "state_name" => "Chhattisgarh",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "GA", "state_name" => "Goa",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "GJ", "state_name" => "Gujarat",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "HR", "state_name" => "Haryana",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "HP", "state_name" => "Himachal Pradesh",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "JH", "state_name" => "Jharkhand",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "KA", "state_name" => "Karnataka",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "KL", "state_name" => "Kerala",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "MP", "state_name" => "Madhya Pradesh",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "MH", "state_name" => "Maharashtra",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "MN", "state_name" => "Manipur",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "ML", "state_name" => "Meghalaya",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "MZ", "state_name" => "Mizoram",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "NL", "state_name" => "Nagaland",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "OR", "state_name" => "Odisha",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "PB", "state_name" => "Punjab",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "RJ", "state_name" => "Rajasthan",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "SK", "state_name" => "Sikkim",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "TN", "state_name" => "Tamil Nadu",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "TG", "state_name" => "Telangana",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "TR", "state_name" => "Tripura",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "UT", "state_name" => "Uttarakhand",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "UP", "state_name" => "Uttar Pradesh",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "WB", "state_name" => "West Bengal",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "AN", "state_name" => "Andaman and Nicobar Islands",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "CH", "state_name" => "Chandigarh",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "DN", "state_name" => "Dadra and Nagar Haveli",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "DD", "state_name" => "Daman and Diu",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "DL", "state_name" => "Delhi",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "JK", "state_name" => "Jammu and Kashmir",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "LA", "state_name" => "Ladakh",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "LD", "state_name" => "Lakshadweep",]);
         DB::table("states")->insert(["country_code" => "IN", "state_code" => "PY", "state_name" => "Puducherry",]);

         // Indonesia
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "AC", "state_name" => "Aceh",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "BA", "state_name" => "Bali",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "BB", "state_name" => "Bangka Belitung Islands",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "BT", "state_name" => "Banten",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "BE", "state_name" => "Bengkulu",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "GO", "state_name" => "Gorontalo",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "JA", "state_name" => "Jambi",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "JB", "state_name" => "West Java",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "JT", "state_name" => "Central Java",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "JI", "state_name" => "East Java",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "KB", "state_name" => "West Kalimantan",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "KS", "state_name" => "South Kalimantan",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "KT", "state_name" => "Central Kalimantan",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "KI", "state_name" => "East Kalimantan",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "KU", "state_name" => "North Kalimantan",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "KR", "state_name" => "Riau Islands",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "LA", "state_name" => "Lampung",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "MA", "state_name" => "Maluku",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "MU", "state_name" => "North Maluku",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "NB", "state_name" => "West Nusa Tenggara",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "NT", "state_name" => "East Nusa Tenggara",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "PA", "state_name" => "Papua",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "PB", "state_name" => "West Papua",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "RI", "state_name" => "Riau",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "SR", "state_name" => "West Sulawesi",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "SN", "state_name" => "South Sulawesi",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "ST", "state_name" => "Central Sulawesi",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "SG", "state_name" => "Southeast Sulawesi",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "SA", "state_name" => "North Sulawesi",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "SB", "state_name" => "West Sumatra",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "SS", "state_name" => "South Sumatra",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "SU", "state_name" => "North Sumatra",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "JK", "state_name" => "Jakarta",]);
         DB::table("states")->insert(["country_code" => "ID", "state_code" => "YO", "state_name" => "Yogyakarta",]);

         // Iran, Islamic Republic of
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "32", "state_name" => "Alborz",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "03", "state_name" => "Ardabīl",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "02", "state_name" => "Āz̄ārbāyjān-e Ghārbī",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "01", "state_name" => "Āz̄ārbāyjān-e Shārqī",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "06", "state_name" => "Būshehr",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "08", "state_name" => "Chahār Maḩāl va Bakhtīārī",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "04", "state_name" => "Eşfahān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "14", "state_name" => "Fārs",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "19", "state_name" => "Gīlān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "27", "state_name" => "Golestān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "24", "state_name" => "Hamadān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "23", "state_name" => "Hormozgān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "05", "state_name" => "Īlām",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "15", "state_name" => "Kermān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "17", "state_name" => "Kermānshāh",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "29", "state_name" => "Khorāsān-e Jonūbī",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "30", "state_name" => "Khorāsān-e Raẕavī",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "31", "state_name" => "Khorāsān-e Shomālī",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "10", "state_name" => "Khūzestān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "18", "state_name" => "Kohgīlūyeh va Bowyer Aḩmad",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "16", "state_name" => "Kordestān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "20", "state_name" => "Lorestān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "22", "state_name" => "Markazī",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "21", "state_name" => "Māzandarān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "28", "state_name" => "Qazvīn",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "26", "state_name" => "Qom",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "12", "state_name" => "Semnān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "13", "state_name" => "Sīstān va Balūchestān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "07", "state_name" => "Tehrān",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "25", "state_name" => "Yazd",]);
         DB::table("states")->insert(["country_code" => "IR", "state_code" => "11", "state_name" => "Zanjān",]);

         // Iraq
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "AN", "state_name" => "Al Anbār",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "BA", "state_name" => "Al Başrah",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "MU", "state_name" => "Al Muthanná",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "QA", "state_name" => "Al Qādisīyah",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "NA", "state_name" => "An Najaf",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "AR", "state_name" => "Arbīl",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "SU", "state_name" => "As Sulaymānīyah",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "BB", "state_name" => "Bābil",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "BG", "state_name" => "Baghdād",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "DA", "state_name" => "Dahūk",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "DQ", "state_name" => "Dhī Qār",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "DI", "state_name" => "Diyālá",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "KA", "state_name" => "Karbalā’",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "KI", "state_name" => "Kirkūk",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "MA", "state_name" => "Maysān",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "NI", "state_name" => "Nīnawá",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "SD", "state_name" => "Şalāḩ ad Dīn",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "WA", "state_name" => "Wāsiţ",]);
         DB::table("states")->insert(["country_code" => "IQ", "state_code" => "HA", "state_name" => "Halabja",]);

         // Ireland
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"CW", "state_name" => "Carlow",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"CN", "state_name" => "Cavan",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"CE", "state_name" => "Clare",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"CO", "state_name" => "Cork",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"DL", "state_name" => "Donegal",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"D", "state_name" => "Dublin",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"G", "state_name" => "Galway",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"KY", "state_name" => "Kerry",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"KE", "state_name" => "Kildare",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"KK", "state_name" => "Kilkenny",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"LS", "state_name" => "Laois",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"LM", "state_name" => "Leitrim",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"LK", "state_name" => "Limerick",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"LD", "state_name" => "Longford",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"LH", "state_name" => "Louth",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"MO", "state_name" => "Mayo",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"MH", "state_name" => "Meath",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"MN", "state_name" => "Monaghan",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"OY", "state_name" => "Offaly",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"RN", "state_name" => "Roscommon",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"SO", "state_name" => "Sligo",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"TA", "state_name" => "Tipperary",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"WD", "state_name" => "Waterford",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"WH", "state_name" => "Westmeath",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"WX", "state_name" => "Wexford",]);
         DB::table("states")->insert(["country_code" => "IE", "state_code" =>"WW", "state_name" => "Wicklow",]);

         // Isle of Man (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "IM", "state_code" => "IM", "state_name" => "Isle of Man",]);

         // Israel
         DB::table("states")->insert(["country_code" => "IL", "state_code" =>"D", "state_name" => "HaDarom",]);
         DB::table("states")->insert(["country_code" => "IL", "state_code" =>"M", "state_name" => "HaMerkaz",]);
         DB::table("states")->insert(["country_code" => "IL", "state_code" =>"Z", "state_name" => "HaTsafon",]);
         DB::table("states")->insert(["country_code" => "IL", "state_code" =>"HA", "state_name" => "H̱efa",]);
         DB::table("states")->insert(["country_code" => "IL", "state_code" =>"TA", "state_name" => "Tel Aviv",]);
         DB::table("states")->insert(["country_code" => "IL", "state_code" =>"JM", "state_name" => "Yerushalayim",]);

         // Italy
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"AG", "state_name" => "Agrigento",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"AL", "state_name" => "Alessandria",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"AN", "state_name" => "Ancona",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"AR", "state_name" => "Arezzo",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"AP", "state_name" => "Ascoli Piceno",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"AT", "state_name" => "Asti",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"AV", "state_name" => "Avellino",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"BT", "state_name" => "Barletta-Andria-Trani",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"BL", "state_name" => "Belluno",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"BN", "state_name" => "Benevento",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"BG", "state_name" => "Bergamo",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"BI", "state_name" => "Biella",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"BZ", "state_name" => "Bolzano",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"BS", "state_name" => "Brescia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"BR", "state_name" => "Brindisi",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"CL", "state_name" => "Caltanissetta",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"CB", "state_name" => "Campobasso",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"CE", "state_name" => "Caserta",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"CZ", "state_name" => "Catanzaro",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"CH", "state_name" => "Chieti",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"CO", "state_name" => "Como",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"CS", "state_name" => "Cosenza",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"CR", "state_name" => "Cremona",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"KR", "state_name" => "Crotone",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"CN", "state_name" => "Cuneo",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"EN", "state_name" => "Enna",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"FM", "state_name" => "Fermo",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"FE", "state_name" => "Ferrara",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"FG", "state_name" => "Foggia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"FC", "state_name" => "Forlì-Cesena",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"FR", "state_name" => "Frosinone",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"GR", "state_name" => "Grosseto",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"IM", "state_name" => "Imperia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"IS", "state_name" => "Isernia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"SP", "state_name" => "La Spezia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"AQ", "state_name" => "L'Aquila",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"LT", "state_name" => "Latina",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"LE", "state_name" => "Lecce",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"LC", "state_name" => "Lecco",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"LI", "state_name" => "Livorno",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"LO", "state_name" => "Lodi",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"LU", "state_name" => "Lucca",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"MC", "state_name" => "Macerata",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"MN", "state_name" => "Mantova",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"MS", "state_name" => "Massa-Carrara",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"MT", "state_name" => "Matera",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"MO", "state_name" => "Modena",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"MB", "state_name" => "Monza e Brianza",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"NO", "state_name" => "Novara",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"NU", "state_name" => "Nuoro",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"OR", "state_name" => "Oristano",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PD", "state_name" => "Padova",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PR", "state_name" => "Parma",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PV", "state_name" => "Pavia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PG", "state_name" => "Perugia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PU", "state_name" => "Pesaro e Urbino",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PE", "state_name" => "Pescara",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PC", "state_name" => "Piacenza",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PI", "state_name" => "Pisa",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PT", "state_name" => "Pistoia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PZ", "state_name" => "Potenza",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"PO", "state_name" => "Prato",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"RG", "state_name" => "Ragusa",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"RA", "state_name" => "Ravenna",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"RE", "state_name" => "Reggio Emilia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"RI", "state_name" => "Rieti",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"RN", "state_name" => "Rimini",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"RO", "state_name" => "Rovigo",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"SA", "state_name" => "Salerno",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"SS", "state_name" => "Sassari",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"SV", "state_name" => "Savona",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"SI", "state_name" => "Siena",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"SR", "state_name" => "Siracusa",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"SO", "state_name" => "Sondrio",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"SD", "state_name" => "Sud Sardegna",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"TA", "state_name" => "Taranto",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"TE", "state_name" => "Teramo",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"TR", "state_name" => "Terni",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"TP", "state_name" => "Trapani",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"TN", "state_name" => "Trento",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"TV", "state_name" => "Treviso",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"VA", "state_name" => "Varese",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"VB", "state_name" => "Verbano-Cusio-Ossola",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"VC", "state_name" => "Vercelli",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"VR", "state_name" => "Verona",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"VV", "state_name" => "Vibo Valentia",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"VI", "state_name" => "Vicenza",]);
         DB::table("states")->insert(["country_code" => "IT", "state_code" =>"VT", "state_name" => "Viterbo",]);

         // Jamaica
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"13", "state_name" => "Clarendon",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"09", "state_name" => "Hanover",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"01", "state_name" => "Kingston",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"12", "state_name" => "Manchester",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"04", "state_name" => "Portland",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"02", "state_name" => "Saint Andrew",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"06", "state_name" => "Saint Ann",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"14", "state_name" => "Saint Catherine",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"11", "state_name" => "Saint Elizabeth",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"08", "state_name" => "Saint James",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"05", "state_name" => "Saint Mary",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"03", "state_name" => "Saint Thomas",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"07", "state_name" => "Trelawny",]);
         DB::table("states")->insert(["country_code" => "JM", "state_code" =>"10", "state_name" => "Westmoreland",]);

         // Japan
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "23", "state_name" => "Aiti",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "05", "state_name" => "Akita",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "02", "state_name" => "Aomori",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "38", "state_name" => "Ehime",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "21", "state_name" => "Gihu",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "10", "state_name" => "Gunma",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "34", "state_name" => "Hirosima",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "01", "state_name" => "Hokkaidô",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "18", "state_name" => "Hukui",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "40", "state_name" => "Hukuoka",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "07", "state_name" => "Hukusima",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "28", "state_name" => "Hyôgo",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "08", "state_name" => "Ibaraki",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "17", "state_name" => "Isikawa",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "03", "state_name" => "Iwate",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "37", "state_name" => "Kagawa",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "46", "state_name" => "Kagosima",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "14", "state_name" => "Kanagawa",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "39", "state_name" => "Kôti",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "43", "state_name" => "Kumamoto",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "26", "state_name" => "Kyôto",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "24", "state_name" => "Mie",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "04", "state_name" => "Miyagi",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "45", "state_name" => "Miyazaki",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "20", "state_name" => "Nagano",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "42", "state_name" => "Nagasaki",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "29", "state_name" => "Nara",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "15", "state_name" => "Niigata",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "44", "state_name" => "Ôita",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "33", "state_name" => "Okayama",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "47", "state_name" => "Okinawa",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "27", "state_name" => "Ôsaka",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "41", "state_name" => "Saga",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "11", "state_name" => "Saitama",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "25", "state_name" => "Siga",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "32", "state_name" => "Simane",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "22", "state_name" => "Sizuoka",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "12", "state_name" => "Tiba",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "09", "state_name" => "Totigi",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "36", "state_name" => "Tokusima",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "13", "state_name" => "Tôkyô",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "31", "state_name" => "Tottori",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "16", "state_name" => "Toyama",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "30", "state_name" => "Wakayama",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "06", "state_name" => "Yamagata",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "35", "state_name" => "Yamaguti",]);
         DB::table("states")->insert(["country_code" => "JP", "state_code" => "19", "state_name" => "Yamanasi",]);

         // Jersey (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "JE", "state_code" => "JE", "state_name" => "Jersey",]);

         // Jordan
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "AJ", "state_name" => "‘Ajlūn",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "AQ", "state_name" => "Al ‘Aqabah",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "AM", "state_name" => "Al ‘A̅şimah",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "BA", "state_name" => "Al Balqā’",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "KA", "state_name" => "Al Karak",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "MA", "state_name" => "Al Mafraq",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "AT", "state_name" => "Aţ Ţafīlah",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "AZ", "state_name" => "Az Zarqā’",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "IR", "state_name" => "Irbid",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "JA", "state_name" => "Jarash",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "MN", "state_name" => "Ma‘ān",]);
         DB::table("states")->insert(["country_code" => "JO", "state_code" => "MD", "state_name" => "Mādabā",]);

         // Kazakhstan
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "ALA", "state_name" => "Almaty",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "ALM", "state_name" => "Almaty oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "AKM", "state_name" => "Aqmola oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "AKT", "state_name" => "Aqtöbe oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "AST", "state_name" => "Astana",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "ATY", "state_name" => "Atyraū oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "ZAP", "state_name" => "Batys Qazaqstan oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "BAY", "state_name" => "Bayqongyr",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "MAN", "state_name" => "Mangghystaū oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "PAV", "state_name" => "Pavlodar oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "KAR", "state_name" => "Qaraghandy oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "KUS", "state_name" => "Qostanay oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "KZY", "state_name" => "Qyzylorda oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "VOS", "state_name" => "Shyghys Qazaqstan oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "SHY", "state_name" => "Shymkent",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "SEV", "state_name" => "Soltüstik Qazaqstan oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "YUZ", "state_name" => "Türkistan oblysy",]);
         DB::table("states")->insert(["country_code" => "KZ", "state_code" => "ZHA", "state_name" => "Zhambyl oblysy",]);

         // Kenya
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "01", "state_name" => "Baringo",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "02", "state_name" => "Bomet",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "03", "state_name" => "Bungoma",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "04", "state_name" => "Busia",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "05", "state_name" => "Elgeyo/Marakwet",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "06", "state_name" => "Embu",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "07", "state_name" => "Garissa",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "08", "state_name" => "Homa Bay",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "09", "state_name" => "Isiolo",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "10", "state_name" => "Kajiado",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "11", "state_name" => "Kakamega",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "12", "state_name" => "Kericho",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "13", "state_name" => "Kiambu",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "14", "state_name" => "Kilifi",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "15", "state_name" => "Kirinyaga",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "16", "state_name" => "Kisii",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "17", "state_name" => "Kisumu",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "18", "state_name" => "Kitui",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "19", "state_name" => "Kwale",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "20", "state_name" => "Laikipia",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "21", "state_name" => "Lamu",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "22", "state_name" => "Machakos",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "23", "state_name" => "Makueni",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "24", "state_name" => "Mandera",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "25", "state_name" => "Marsabit",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "26", "state_name" => "Meru",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "27", "state_name" => "Migori",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "28", "state_name" => "Mombasa",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "29", "state_name" => "Murang'a",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "30", "state_name" => "Nairobi City",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "31", "state_name" => "Nakuru",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "32", "state_name" => "Nandi",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "33", "state_name" => "Narok",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "34", "state_name" => "Nyamira",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "35", "state_name" => "Nyandarua",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "36", "state_name" => "Nyeri",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "37", "state_name" => "Samburu",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "38", "state_name" => "Siaya",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "39", "state_name" => "Taita/Taveta",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "40", "state_name" => "Tana River",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "41", "state_name" => "Tharaka-Nithi",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "42", "state_name" => "Trans Nzoia",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "43", "state_name" => "Turkana",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "44", "state_name" => "Uasin Gishu",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "45", "state_name" => "Vihiga",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "46", "state_name" => "Wajir",]);
         DB::table("states")->insert(["country_code" => "KE", "state_code" => "47", "state_name" => "West Pokot",]);

         // Kiribati
         DB::table("states")->insert(["country_code" => "KI", "state_code" => "G", "state_name" => "Gilbert Islands",]);
         DB::table("states")->insert(["country_code" => "KI", "state_code" => "L", "state_name" => "Line Islands",]);
         DB::table("states")->insert(["country_code" => "KI", "state_code" => "P", "state_name" => "Phoenix Islands",]);

         // Korea, Democratic People's Republic of
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "01", "state_name" => "Pyongyang",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "13", "state_name" => "Rason",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "14", "state_name" => "Nampo",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "02", "state_name" => "South Pyongan",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "03", "state_name" => "North Pyongan",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "04", "state_name" => "Chagang",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "05", "state_name" => "South Hwanghae",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "06", "state_name" => "North Hwanghae",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "07", "state_name" => "Kangwon",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "08", "state_name" => "South Hamgyong",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "09", "state_name" => "North Hamgyong",]);
         DB::table("states")->insert(["country_code" => "KP", "state_code" => "10", "state_name" => "Ryanggang",]);

         // Korea, Republic of
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "11", "state_name" => "Seoul",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "26", "state_name" => "Busan",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "27", "state_name" => "Daegu",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "30", "state_name" => "Daejeon",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "29", "state_name" => "Gwangju",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "28", "state_name" => "Incheon",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "31", "state_name" => "Ulsan",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "43", "state_name" => "North Chungcheong",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "44", "state_name" => "South Chungcheong",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "42", "state_name" => "Gangwon",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "41", "state_name" => "Gyeonggi",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "47", "state_name" => "North Gyeongsang",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "48", "state_name" => "South Gyeongsang",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "45", "state_name" => "North Jeolla",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "46", "state_name" => "South Jeolla",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "49", "state_name" => "Jeju",]);
         DB::table("states")->insert(["country_code" => "KR", "state_code" => "50", "state_name" => "Sejong",]);

         // Kuwait
         DB::table("states")->insert(["country_code" => "KW", "state_code" => "AH", "state_name" => "Al Aḩmadī",]);
         DB::table("states")->insert(["country_code" => "KW", "state_code" => "FA", "state_name" => "Al Farwānīyah",]);
         DB::table("states")->insert(["country_code" => "KW", "state_code" => "JA", "state_name" => "Al Jahrā’",]);
         DB::table("states")->insert(["country_code" => "KW", "state_code" => "KU", "state_name" => "Al ‘Āşimah",]);
         DB::table("states")->insert(["country_code" => "KW", "state_code" => "HA", "state_name" => "Ḩawallī",]);
         DB::table("states")->insert(["country_code" => "KW", "state_code" => "MU", "state_name" => "Mubārak al Kabīr",]);

         // Kyrgyzstan
         DB::table("states")->insert(["country_code" => "KG", "state_code" => "GB", "state_name" => "Bishkek",]);
         DB::table("states")->insert(["country_code" => "KG", "state_code" => "GO", "state_name" => "Osh",]);
         DB::table("states")->insert(["country_code" => "KG", "state_code" => "B", "state_name" => "Batken",]);
         DB::table("states")->insert(["country_code" => "KG", "state_code" => "C", "state_name" => "Chüy",]);
         DB::table("states")->insert(["country_code" => "KG", "state_code" => "J", "state_name" => "Jalal-Abad",]);
         DB::table("states")->insert(["country_code" => "KG", "state_code" => "N", "state_name" => "Naryn",]);
         DB::table("states")->insert(["country_code" => "KG", "state_code" => "O", "state_name" => "Osh",]);
         DB::table("states")->insert(["country_code" => "KG", "state_code" => "T", "state_name" => "Talas",]);
         DB::table("states")->insert(["country_code" => "KG", "state_code" => "Y", "state_name" => "Ysyk-Köl",]);

         // Lao People's Democratic Republic
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "VT", "state_name" => "Viangchan",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "AT", "state_name" => "Attapu",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "BK", "state_name" => "Bokèo",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "BL", "state_name" => "Bolikhamxai",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "CH", "state_name" => "Champasak",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "HO", "state_name" => "Houaphan",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "KH", "state_name" => "Khammouan",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "LM", "state_name" => "Louang Namtha",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "LP", "state_name" => "Louangphabang",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "OU", "state_name" => "Oudômxai",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "PH", "state_name" => "Phôngsali",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "SL", "state_name" => "Salavan",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "SV", "state_name" => "Savannakhét",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "VI", "state_name" => "Viangchan",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "XA", "state_name" => "Xaignabouli",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "XE", "state_name" => "Xékong",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "XI", "state_name" => "Xiangkhouang",]);
         DB::table("states")->insert(["country_code" => "LA", "state_code" => "XS", "state_name" => "Xaisômboun",]);

         // Latvia
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"001", "state_name" => "Aglonas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"002", "state_name" => "Aizkraukles novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"003", "state_name" => "Aizputes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"004", "state_name" => "Aknīstes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"005", "state_name" => "Alojas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"006", "state_name" => "Alsungas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"007", "state_name" => "Alūksnes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"008", "state_name" => "Amatas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"009", "state_name" => "Apes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"010", "state_name" => "Auces novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"011", "state_name" => "Ādažu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"012", "state_name" => "Babītes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"013", "state_name" => "Baldones novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"014", "state_name" => "Baltinavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"015", "state_name" => "Balvu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"016", "state_name" => "Bauskas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"017", "state_name" => "Beverīnas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"018", "state_name" => "Brocēnu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"019", "state_name" => "Burtnieku novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"020", "state_name" => "Carnikavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"021", "state_name" => "Cesvaines novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"022", "state_name" => "Cēsu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"023", "state_name" => "Ciblas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"024", "state_name" => "Dagdas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"025", "state_name" => "Daugavpils novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"026", "state_name" => "Dobeles novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"027", "state_name" => "Dundagas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"028", "state_name" => "Durbes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"029", "state_name" => "Engures novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"030", "state_name" => "Ērgļu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"031", "state_name" => "Garkalnes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"032", "state_name" => "Grobiņas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"033", "state_name" => "Gulbenes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"034", "state_name" => "Iecavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"035", "state_name" => "Ikšķiles novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"036", "state_name" => "Ilūkstes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"037", "state_name" => "Inčukalna novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"038", "state_name" => "Jaunjelgavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"039", "state_name" => "Jaunpiebalgas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"040", "state_name" => "Jaunpils novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"041", "state_name" => "Jelgavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"042", "state_name" => "Jēkabpils novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"043", "state_name" => "Kandavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"044", "state_name" => "Kārsavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"045", "state_name" => "Kocēnu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"046", "state_name" => "Kokneses novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"047", "state_name" => "Krāslavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"048", "state_name" => "Krimuldas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"049", "state_name" => "Krustpils novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"050", "state_name" => "Kuldīgas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"051", "state_name" => "Ķeguma novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"052", "state_name" => "Ķekavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"053", "state_name" => "Lielvārdes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"054", "state_name" => "Limbažu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"055", "state_name" => "Līgatnes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"056", "state_name" => "Līvānu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"057", "state_name" => "Lubānas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"058", "state_name" => "Ludzas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"059", "state_name" => "Madonas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"060", "state_name" => "Mazsalacas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"061", "state_name" => "Mālpils novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"062", "state_name" => "Mārupes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"063", "state_name" => "Mērsraga novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"064", "state_name" => "Naukšēnu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"065", "state_name" => "Neretas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"066", "state_name" => "Nīcas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"067", "state_name" => "Ogres novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"068", "state_name" => "Olaines novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"069", "state_name" => "Ozolnieku novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"070", "state_name" => "Pārgaujas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"071", "state_name" => "Pāvilostas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"072", "state_name" => "Pļaviņu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"073", "state_name" => "Preiļu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"074", "state_name" => "Priekules novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"075", "state_name" => "Priekuļu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"076", "state_name" => "Raunas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"077", "state_name" => "Rēzeknes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"078", "state_name" => "Riebiņu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"079", "state_name" => "Rojas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"080", "state_name" => "Ropažu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"081", "state_name" => "Rucavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"082", "state_name" => "Rugāju novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"083", "state_name" => "Rundāles novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"084", "state_name" => "Rūjienas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"085", "state_name" => "Salas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"086", "state_name" => "Salacgrīvas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"087", "state_name" => "Salaspils novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"088", "state_name" => "Saldus novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"089", "state_name" => "Saulkrastu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"090", "state_name" => "Sējas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"091", "state_name" => "Siguldas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"092", "state_name" => "Skrīveru novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"093", "state_name" => "Skrundas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"094", "state_name" => "Smiltenes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"095", "state_name" => "Stopiņu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"096", "state_name" => "Strenču novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"097", "state_name" => "Talsu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"098", "state_name" => "Tērvetes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"099", "state_name" => "Tukuma novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"100", "state_name" => "Vaiņodes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"101", "state_name" => "Valkas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"102", "state_name" => "Varakļānu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"103", "state_name" => "Vārkavas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"104", "state_name" => "Vecpiebalgas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"105", "state_name" => "Vecumnieku novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"106", "state_name" => "Ventspils novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"107", "state_name" => "Viesītes novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"108", "state_name" => "Viļakas novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"109", "state_name" => "Viļānu novads",]);
         DB::table("states")->insert(["country_code" => "LV", "state_code" =>"110", "state_name" => "Zilupes novads",]);

         // Lebanon
         DB::table("states")->insert(["country_code" => "LB", "state_code" => "AK", "state_name" => "Aakkâr",]);
         DB::table("states")->insert(["country_code" => "LB", "state_code" => "BH", "state_name" => "Baalbek-Hermel",]);
         DB::table("states")->insert(["country_code" => "LB", "state_code" => "BI", "state_name" => "Béqaa",]);
         DB::table("states")->insert(["country_code" => "LB", "state_code" => "BA", "state_name" => "Beyrouth",]);
         DB::table("states")->insert(["country_code" => "LB", "state_code" => "AS", "state_name" => "Liban-Nord",]);
         DB::table("states")->insert(["country_code" => "LB", "state_code" => "JA", "state_name" => "Liban-Sud",]);
         DB::table("states")->insert(["country_code" => "LB", "state_code" => "JL", "state_name" => "Mont-Liban",]);
         DB::table("states")->insert(["country_code" => "LB", "state_code" => "NA", "state_name" => "Nabatîyé",]);

         // Lesotho
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "D", "state_name" => "Berea",]);
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "B", "state_name" => "Butha-Buthe",]);
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "C", "state_name" => "Leribe",]);
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "E", "state_name" => "Mafeteng",]);
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "A", "state_name" => "Maseru",]);
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "F", "state_name" => "Mohale's Hoek",]);
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "J", "state_name" => "Mokhotlong",]);
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "H", "state_name" => "Qacha's Nek",]);
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "G", "state_name" => "Quthing",]);
         DB::table("states")->insert(["country_code" => "LS", "state_code" => "K", "state_name" => "Thaba-Tseka",]);

         // Liberia
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "BM", "state_name" => "Bomi",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "BG", "state_name" => "Bong",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "GP", "state_name" => "Gbarpolu",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "GB", "state_name" => "Grand Bassa",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "CM", "state_name" => "Grand Cape Mount",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "GG", "state_name" => "Grand Gedeh",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "GK", "state_name" => "Grand Kru",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "LO", "state_name" => "Lofa",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "MG", "state_name" => "Margibi",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "MY", "state_name" => "Maryland",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "MO", "state_name" => "Montserrado",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "NI", "state_name" => "Nimba",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "RI", "state_name" => "River Cess",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "RG", "state_name" => "River Gee",]);
         DB::table("states")->insert(["country_code" => "LR", "state_code" => "SI", "state_name" => "Sinoe",]);

         // Libya
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "BU", "state_name" => "Al Buţnān",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "JA", "state_name" => "Al Jabal al Akhḑar",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "JG", "state_name" => "Al Jabal al Gharbī",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "JI", "state_name" => "Al Jafārah",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "JU", "state_name" => "Al Jufrah",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "KF", "state_name" => "Al Kufrah",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "MJ", "state_name" => "Al Marj",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "MB", "state_name" => "Al Marqab",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "WA", "state_name" => "Al Wāḩāt",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "NQ", "state_name" => "An Nuqāţ al Khams",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "ZA", "state_name" => "Az Zāwiyah",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "BA", "state_name" => "Banghāzī",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "DR", "state_name" => "Darnah",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "GT", "state_name" => "Ghāt",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "MI", "state_name" => "Mişrātah",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "MQ", "state_name" => "Murzuq",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "NL", "state_name" => "Nālūt",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "SB", "state_name" => "Sabhā",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "SR", "state_name" => "Surt",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "TB", "state_name" => "Ţarābulus",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "WD", "state_name" => "Wādī al Ḩayāt",]);
         DB::table("states")->insert(["country_code" => "LY", "state_code" => "WS", "state_name" => "Wādī ash Shāţi’",]);

         // Liechtenstein
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"01", "state_name" => "Balzers",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"02", "state_name" => "Eschen",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"03", "state_name" => "Gamprin",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"04", "state_name" => "Mauren",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"05", "state_name" => "Planken",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"06", "state_name" => "Ruggell",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"07", "state_name" => "Schaan",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"08", "state_name" => "Schellenberg",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"09", "state_name" => "Triesen",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"10", "state_name" => "Triesenberg",]);
         DB::table("states")->insert(["country_code" => "LI", "state_code" =>"11", "state_name" => "Vaduz",]);

         // Lithuania
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"AL", "state_name" => "Alytaus apskritis",]);
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"KU", "state_name" => "Kauno apskritis",]);
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"KL", "state_name" => "Klaipėdos apskritis",]);
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"MR", "state_name" => "Marijampolės apskritis",]);
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"PN", "state_name" => "Panevėžio apskritis",]);
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"SA", "state_name" => "Šiaulių apskritis",]);
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"TA", "state_name" => "Tauragės apskritis",]);
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"TE", "state_name" => "Telšių apskritis",]);
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"UT", "state_name" => "Utenos apskritis",]);
         DB::table("states")->insert(["country_code" => "LT", "state_code" =>"VL", "state_name" => "Vilniaus apskritis",]);

         // Luxembourg
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"CA", "state_name" => "Capellen",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"CL", "state_name" => "Clervaux",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"DI", "state_name" => "Diekirch",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"EC", "state_name" => "Echternach",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"ES", "state_name" => "Esch-sur-Alzette",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"GR", "state_name" => "Grevenmacher",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"LU", "state_name" => "Luxembourg",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"ME", "state_name" => "Mersch",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"RD", "state_name" => "Redange",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"RM", "state_name" => "Remich",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"VD", "state_name" => "Vianden",]);
         DB::table("states")->insert(["country_code" => "LU", "state_code" =>"WI", "state_name" => "Wiltz",]);

         // Macao (Currently no ISO 3166-2 codes are defined for this country.)
         DB::table("states")->insert(["country_code" => "MO", "state_code" => "MO", "state_name" => "Macao",]);

         // Macedonia, the Former Yugoslav Republic of
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"801", "state_name" => "Aerodrom",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"802", "state_name" => "Aračinovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"201", "state_name" => "Berovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"501", "state_name" => "Bitola",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"401", "state_name" => "Bogdanci",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"601", "state_name" => "Bogovinje",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"402", "state_name" => "Bosilovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"602", "state_name" => "Brvenica",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"803", "state_name" => "Butel",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"814", "state_name" => "Centar",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"313", "state_name" => "Centar Župa",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"815", "state_name" => "Čair",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"109", "state_name" => "Čaška",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"210", "state_name" => "Češinovo-Obleševo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"816", "state_name" => "Čučer-Sandevo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"303", "state_name" => "Debar",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"304", "state_name" => "Debarca",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"203", "state_name" => "Delčevo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"502", "state_name" => "Demir Hisar",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"103", "state_name" => "Demir Kapija",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"406", "state_name" => "Dojran",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"503", "state_name" => "Dolneni",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"804", "state_name" => "Gazi Baba",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"405", "state_name" => "Gevgelija",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"805", "state_name" => "Gjorče Petrov",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"604", "state_name" => "Gostivar",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"102", "state_name" => "Gradsko",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"807", "state_name" => "Ilinden",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"606", "state_name" => "Jegunovce",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"205", "state_name" => "Karbinci",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"808", "state_name" => "Karpoš",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"104", "state_name" => "Kavadarci",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"307", "state_name" => "Kičevo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"809", "state_name" => "Kisela Voda",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"206", "state_name" => "Kočani",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"407", "state_name" => "Konče",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"701", "state_name" => "Kratovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"702", "state_name" => "Kriva Palanka",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"504", "state_name" => "Krivogaštani",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"505", "state_name" => "Kruševo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"703", "state_name" => "Kumanovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"704", "state_name" => "Lipkovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"105", "state_name" => "Lozovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"207", "state_name" => "Makedonska Kamenica",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"308", "state_name" => "Makedonski Brod",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"607", "state_name" => "Mavrovo i Rostuše",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"506", "state_name" => "Mogila",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"106", "state_name" => "Negotino",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"507", "state_name" => "Novaci",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"408", "state_name" => "Novo Selo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"310", "state_name" => "Ohrid",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"208", "state_name" => "Pehčevo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"810", "state_name" => "Petrovec",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"311", "state_name" => "Plasnica",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"508", "state_name" => "Prilep",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"209", "state_name" => "Probištip",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"409", "state_name" => "Radoviš",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"705", "state_name" => "Rankovce",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"509", "state_name" => "Resen",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"107", "state_name" => "Rosoman",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"811", "state_name" => "Saraj",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"812", "state_name" => "Sopište",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"706", "state_name" => "Staro Nagoričane",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"312", "state_name" => "Struga",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"410", "state_name" => "Strumica",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"813", "state_name" => "Studeničani",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"108", "state_name" => "Sveti Nikole",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"211", "state_name" => "Štip",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"817", "state_name" => "Šuto Orizari",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"608", "state_name" => "Tearce",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"609", "state_name" => "Tetovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"403", "state_name" => "Valandovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"404", "state_name" => "Vasilevo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"101", "state_name" => "Veles",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"301", "state_name" => "Vevčani",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"202", "state_name" => "Vinica",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"603", "state_name" => "Vrapčište",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"806", "state_name" => "Zelenikovo",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"204", "state_name" => "Zrnovci",]);
         DB::table("states")->insert(["country_code" => "MK", "state_code" =>"605", "state_name" => "Želino",]);

         // Madagascar
         DB::table("states")->insert(["country_code" => "MG", "state_code" => "T", "state_name" => "Antananarivo",]);
         DB::table("states")->insert(["country_code" => "MG", "state_code" => "D", "state_name" => "Antsiranana",]);
         DB::table("states")->insert(["country_code" => "MG", "state_code" => "F", "state_name" => "Fianarantsoa",]);
         DB::table("states")->insert(["country_code" => "MG", "state_code" => "M", "state_name" => "Mahajanga",]);
         DB::table("states")->insert(["country_code" => "MG", "state_code" => "A", "state_name" => "Toamasina",]);
         DB::table("states")->insert(["country_code" => "MG", "state_code" => "U", "state_name" => "Toliara",]);

         // Malawi
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "BA", "state_name" => "Balaka",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "BL", "state_name" => "Blantyre",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "CK", "state_name" => "Chikwawa",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "CR", "state_name" => "Chiradzulu",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "CT", "state_name" => "Chitipa",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "DE", "state_name" => "Dedza",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "DO", "state_name" => "Dowa",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "KR", "state_name" => "Karonga",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "KS", "state_name" => "Kasungu",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "LK", "state_name" => "Likoma",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "LI", "state_name" => "Lilongwe",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "MH", "state_name" => "Machinga",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "MG", "state_name" => "Mangochi",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "MC", "state_name" => "Mchinji",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "MU", "state_name" => "Mulanje",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "MW", "state_name" => "Mwanza",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "MZ", "state_name" => "Mzimba",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "NE", "state_name" => "Neno",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "NB", "state_name" => "Nkhata Bay",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "NK", "state_name" => "Nkhotakota",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "NS", "state_name" => "Nsanje",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "NU", "state_name" => "Ntcheu",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "NI", "state_name" => "Ntchisi",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "PH", "state_name" => "Phalombe",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "RU", "state_name" => "Rumphi",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "SA", "state_name" => "Salima",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "TH", "state_name" => "Thyolo",]);
         DB::table("states")->insert(["country_code" => "MW", "state_code" => "ZO", "state_name" => "Zomba",]);

         // Malaysia
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "14", "state_name" => "Wilayah Persekutuan Kuala Lumpur",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "15", "state_name" => "Wilayah Persekutuan Labuan",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "16", "state_name" => "Wilayah Persekutuan Putrajaya",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "01", "state_name" => "Johor",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "02", "state_name" => "Kedah",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "03", "state_name" => "Kelantan",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "04", "state_name" => "Melaka",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "05", "state_name" => "Negeri Sembilan",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "06", "state_name" => "Pahang",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "08", "state_name" => "Perak",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "09", "state_name" => "Perlis",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "07", "state_name" => "Pulau Pinang",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "12", "state_name" => "Sabah",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "13", "state_name" => "Sarawak",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "10", "state_name" => "Selangor",]);
         DB::table("states")->insert(["country_code" => "MY", "state_code" => "11", "state_name" => "Terengganu",]);

         // Maldives
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "01", "state_name" => "Addu City",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "MLE", "state_name" => "Male",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "02", "state_name" => "North Ari Atoll",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "00", "state_name" => "South Ari Atoll",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "20", "state_name" => "South Maalhosmadulu",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "17", "state_name" => "South Nilandhe Atoll",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "14", "state_name" => "North Nilandhe Atoll",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "27", "state_name" => "North Huvadhu Atoll",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "28", "state_name" => "South Huvadhu Atoll",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "29", "state_name" => "Fuvammulah",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "07", "state_name" => "North Thiladhunmathi",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "23", "state_name" => "South Thiladhunmathi",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "26", "state_name" => "Male Atoll",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "05", "state_name" => "Hahdhunmathi",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "03", "state_name" => "Faadhippolhu",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "12", "state_name" => "Mulaku Atoll",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "25", "state_name" => "South Miladhunmadulu",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "13", "state_name" => "North Maalhosmadulu",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "24", "state_name" => "North Miladhunmadulu",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "08", "state_name" => "Kolhumadulu",]);
         DB::table("states")->insert(["country_code" => "MV", "state_code" => "04", "state_name" => "Felidhu Atoll",]);

         // Mali
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "BKO", "state_name" => "Bamako",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "7", "state_name" => "Gao",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "1", "state_name" => "Kayes",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "8", "state_name" => "Kidal",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "2", "state_name" => "Koulikoro",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "9", "state_name" => "Ménaka",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "5", "state_name" => "Mopti",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "4", "state_name" => "Ségou",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "3", "state_name" => "Sikasso",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "10", "state_name" => "Taoudénit",]);
         DB::table("states")->insert(["country_code" => "ML", "state_code" => "6", "state_name" => "Tombouctou",]);

        // Malta
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"01", "state_name" => "Attard",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"02", "state_name" => "Balzan",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"03", "state_name" => "Birgu",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"04", "state_name" => "Birkirkara",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"05", "state_name" => "Birżebbuġa",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"06", "state_name" => "Bormla",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"07", "state_name" => "Dingli",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"08", "state_name" => "Fgura",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"09", "state_name" => "Floriana",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"10", "state_name" => "Fontana",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"11", "state_name" => "Gudja",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"12", "state_name" => "Gżira",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"13", "state_name" => "Għajnsielem",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"14", "state_name" => "Għarb",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"15", "state_name" => "Għargħur",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"16", "state_name" => "Għasri",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"17", "state_name" => "Għaxaq",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"18", "state_name" => "Ħamrun",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"19", "state_name" => "Iklin",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"20", "state_name" => "Isla",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"21", "state_name" => "Kalkara",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"22", "state_name" => "Kerċem",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"23", "state_name" => "Kirkop",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"24", "state_name" => "Lija",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"25", "state_name" => "Luqa",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"26", "state_name" => "Marsa",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"27", "state_name" => "Marsaskala",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"28", "state_name" => "Marsaxlokk",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"29", "state_name" => "Mdina",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"30", "state_name" => "Mellieħa",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"31", "state_name" => "Mġarr",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"32", "state_name" => "Mosta",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"33", "state_name" => "Mqabba",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"34", "state_name" => "Msida",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"35", "state_name" => "Mtarfa",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"36", "state_name" => "Munxar",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"37", "state_name" => "Nadur",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"38", "state_name" => "Naxxar",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"39", "state_name" => "Paola",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"40", "state_name" => "Pembroke",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"41", "state_name" => "Pietà",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"42", "state_name" => "Qala",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"43", "state_name" => "Qormi",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"44", "state_name" => "Qrendi",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"45", "state_name" => "Rabat Gozo",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"46", "state_name" => "Rabat Malta",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"47", "state_name" => "Safi",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"48", "state_name" => "Saint Julian's",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"49", "state_name" => "Saint John",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"50", "state_name" => "Saint Lawrence",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"51", "state_name" => "Saint Paul's Bay",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"52", "state_name" => "Sannat",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"53", "state_name" => "Saint Lucia's",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"54", "state_name" => "Santa Venera",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"55", "state_name" => "Siġġiewi",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"56", "state_name" => "Sliema",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"57", "state_name" => "Swieqi",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"58", "state_name" => "Ta' Xbiex",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"59", "state_name" => "Tarxien",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"60", "state_name" => "Valletta",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"61", "state_name" => "Xagħra",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"62", "state_name" => "Xewkija",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"63", "state_name" => "Xgħajra",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"64", "state_name" => "Żabbar",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"65", "state_name" => "Żebbuġ Gozo",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"66", "state_name" => "Żebbuġ Malta",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"67", "state_name" => "Żejtun",]);
        DB::table("states")->insert(["country_code" => "MT", "state_code" =>"68", "state_name" => "Żurrieq",]);

        // Marshall Islands
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "L", "state_name" => "Ralik chain",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "T", "state_name" => "Ratak chain",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "ALL", "state_name" => "Ailinglaplap",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "ALK", "state_name" => "Ailuk",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "ARN", "state_name" => "Arno",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "AUR", "state_name" => "Aur",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "KIL", "state_name" => "Bikini & Kili",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "EBO", "state_name" => "Ebon",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "ENI", "state_name" => "Enewetak & Ujelang",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "JAB", "state_name" => "Jabat",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "JAL", "state_name" => "Jaluit",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "KWA", "state_name" => "Kwajalein",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "LAE", "state_name" => "Lae",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "LIB", "state_name" => "Lib",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "LIK", "state_name" => "Likiep",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "MAJ", "state_name" => "Majuro",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "MAL", "state_name" => "Maloelap",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "MEJ", "state_name" => "Mejit",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "MIL", "state_name" => "Mili",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "NMK", "state_name" => "Namdrik",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "NMU", "state_name" => "Namu",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "RON", "state_name" => "Rongelap",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "UJA", "state_name" => "Ujae",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "UTI", "state_name" => "Utrik",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "WTH", "state_name" => "Wotho",]);
        DB::table("states")->insert(["country_code" => "MH", "state_code" => "WTJ", "state_name" => "Wotje",]);

        // Martinique (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "MQ", "state_code" => "MQ", "state_name" => "Martinique",]);

        // Mauritania
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "07", "state_name" => "Adrar",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "03", "state_name" => "Assaba",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "05", "state_name" => "Brakna",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "08", "state_name" => "Dakhlet Nouâdhibou",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "04", "state_name" => "Gorgol",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "10", "state_name" => "Guidimaka",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "01", "state_name" => "Hodh ech Chargui",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "02", "state_name" => "Hodh el Gharbi",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "12", "state_name" => "Inchiri",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "14", "state_name" => "Nuwākshūţ ash Shamālīyah",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "13", "state_name" => "Nuwākshūţ al Gharbīyah",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "15", "state_name" => "Nuwākshūţ al Janūbīyah",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "09", "state_name" => "Tagant",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "11", "state_name" => "Tiris Zemmour",]);
        DB::table("states")->insert(["country_code" => "MR", "state_code" => "06", "state_name" => "Trarza",]);

        // Mauritius
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "BR", "state_name" => "Beau Bassin-Rose Hill",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "CU", "state_name" => "Curepipe",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "PU", "state_name" => "Port Louis",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "QB", "state_name" => "Quatre Bornes",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "VP", "state_name" => "Vacoas-Phoenix",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "AG", "state_name" => "Agalega Islands",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "CC", "state_name" => "Cargados Carajos Shoals",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "RO", "state_name" => "Rodrigues Island",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "BL", "state_name" => "Black River",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "FL", "state_name" => "Flacq",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "GP", "state_name" => "Grand Port",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "MO", "state_name" => "Moka",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "PA", "state_name" => "Pamplemousses",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "PW", "state_name" => "Plaines Wilhems",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "PL", "state_name" => "Port Louis",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "RR", "state_name" => "Rivière du Rempart",]);
        DB::table("states")->insert(["country_code" => "MU", "state_code" => "SA", "state_name" => "Savanne",]);

        // Mayotte (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "YT", "state_code" => "YT", "state_name" => "Mayotte",]);

        // Mexico
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"CMX", "state_name" => "Ciudad de México",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"AGU", "state_name" => "Aguascalientes",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"BCN", "state_name" => "Baja California",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"BCS", "state_name" => "Baja California Sur",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"CAM", "state_name" => "Campeche",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"COA", "state_name" => "Coahuila de Zaragoza",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"COL", "state_name" => "Colima",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"CHP", "state_name" => "Chiapas",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"CHH", "state_name" => "Chihuahua",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"DUR", "state_name" => "Durango",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"GUA", "state_name" => "Guanajuato",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"GRO", "state_name" => "Guerrero",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"HID", "state_name" => "Hidalgo",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"JAL", "state_name" => "Jalisco",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"MEX", "state_name" => "México",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"MIC", "state_name" => "Michoacán de Ocampo",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"MOR", "state_name" => "Morelos",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"NAY", "state_name" => "Nayarit",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"NLE", "state_name" => "Nuevo León",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"OAX", "state_name" => "Oaxaca",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"PUE", "state_name" => "Puebla",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"QUE", "state_name" => "Querétaro",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"ROO", "state_name" => "Quintana Roo",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"SLP", "state_name" => "San Luis Potosí",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"SIN", "state_name" => "Sinaloa",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"SON", "state_name" => "Sonora",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"TAB", "state_name" => "Tabasco",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"TAM", "state_name" => "Tamaulipas",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"TLA", "state_name" => "Tlaxcala",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"VER", "state_name" => "Veracruz de Ignacio de la Llave",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"YUC", "state_name" => "Yucatán",]);
        DB::table("states")->insert(["country_code" => "MX", "state_code" =>"ZAC", "state_name" => "Zacatecas",]);

        // Micronesia, Federated States of
        DB::table("states")->insert(["country_code" => "FM", "state_code" =>"TRK", "state_name" => "Chuuk",]);
        DB::table("states")->insert(["country_code" => "FM", "state_code" =>"KSA", "state_name" => "Kosrae",]);
        DB::table("states")->insert(["country_code" => "FM", "state_code" =>"PNI", "state_name" => "Pohnpei",]);
        DB::table("states")->insert(["country_code" => "FM", "state_code" =>"YAP", "state_name" => "Yap",]);

        // Moldova, Republic of
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"GA", "state_name" => "Găgăuzia",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"BA", "state_name" => "Bălți",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"BD", "state_name" => "Bender",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"CU", "state_name" => "Chișinău",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"AN", "state_name" => "Anenii Noi",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"BS", "state_name" => "Basarabeasca",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"BR", "state_name" => "Briceni",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"CA", "state_name" => "Cahul",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"CT", "state_name" => "Cantemir",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"CL", "state_name" => "Călărași",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"CS", "state_name" => "Căușeni",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"CM", "state_name" => "Cimișlia",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"CR", "state_name" => "Criuleni",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"DO", "state_name" => "Dondușeni",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"DR", "state_name" => "Drochia",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"DU", "state_name" => "Dubăsari",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"ED", "state_name" => "Edineț",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"FA", "state_name" => "Fălești",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"FL", "state_name" => "Florești",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"GL", "state_name" => "Glodeni",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"HI", "state_name" => "Hîncești",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"IA", "state_name" => "Ialoveni",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"LE", "state_name" => "Leova",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"NI", "state_name" => "Nisporeni",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"OC", "state_name" => "Ocnița",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"OR", "state_name" => "Orhei",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"RE", "state_name" => "Rezina",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"RI", "state_name" => "Rîșcani",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"SI", "state_name" => "Sîngerei",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"SO", "state_name" => "Soroca",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"ST", "state_name" => "Strășeni",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"SD", "state_name" => "Șoldănești",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"SV", "state_name" => "Ștefan Vodă",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"TA", "state_name" => "Taraclia",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"TE", "state_name" => "Telenești",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"UN", "state_name" => "Ungheni",]);
        DB::table("states")->insert(["country_code" => "MD", "state_code" =>"SN", "state_name" => "Stînga Nistrului, unitatea teritorială din",]);

        // Monaco
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"FO", "state_name" => "Fontvieille",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"JE", "state_name" => "Jardin Exotique",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"CL", "state_name" => "La Colle",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"CO", "state_name" => "La Condamine",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"GA", "state_name" => "La Gare",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"SO", "state_name" => "La Source",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"LA", "state_name" => "Larvotto",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"MA", "state_name" => "Malbousquet",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"MO", "state_name" => "Monaco-Ville",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"MG", "state_name" => "Moneghetti",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"MC", "state_name" => "Monte-Carlo",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"MU", "state_name" => "Moulins",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"PH", "state_name" => "Port-Hercule",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"SR", "state_name" => "Saint-Roman",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"SD", "state_name" => "Sainte-Dévote",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"SP", "state_name" => "Spélugues",]);
        DB::table("states")->insert(["country_code" => "MC", "state_code" =>"VR", "state_name" => "Vallon de la Rousse",]);

        // Mongolia
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"1", "state_name" => "Ulaanbaatar",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"073", "state_name" => "Arhangay",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"069", "state_name" => "Bayanhongor",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"071", "state_name" => "Bayan-Ölgiy",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"067", "state_name" => "Bulgan",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"037", "state_name" => "Darhan uul",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"061", "state_name" => "Dornod",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"063", "state_name" => "Dornogovĭ",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"059", "state_name" => "Dundgovĭ",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"057", "state_name" => "Dzavhan",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"065", "state_name" => "Govĭ-Altay",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"064", "state_name" => "Govĭ-Sümber",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"039", "state_name" => "Hentiy",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"043", "state_name" => "Hovd",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"041", "state_name" => "Hövsgöl",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"053", "state_name" => "Ömnögovĭ",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"035", "state_name" => "Orhon",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"055", "state_name" => "Övörhangay",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"049", "state_name" => "Selenge",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"051", "state_name" => "Sühbaatar",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"047", "state_name" => "Töv",]);
        DB::table("states")->insert(["country_code" => "MN", "state_code" =>"046", "state_name" => "Uvs",]);

        // Montenegro
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"01", "state_name" => "Andrijevica",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"02", "state_name" => "Bar",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"03", "state_name" => "Berane",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"04", "state_name" => "Bijelo Polje",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"05", "state_name" => "Budva",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"06", "state_name" => "Cetinje",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"07", "state_name" => "Danilovgrad",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"08", "state_name" => "Herceg-Novi",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"09", "state_name" => "Kolašin",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"10", "state_name" => "Kotor",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"11", "state_name" => "Mojkovac",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"12", "state_name" => "Nikšić",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"13", "state_name" => "Plav",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"14", "state_name" => "Pljevlja",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"15", "state_name" => "Plužine",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"16", "state_name" => "Podgorica",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"17", "state_name" => "Rožaje",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"18", "state_name" => "Šavnik",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"19", "state_name" => "Tivat",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"20", "state_name" => "Ulcinj",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"21", "state_name" => "Žabljak",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"22", "state_name" => "Gusinje",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"23", "state_name" => "Petnjica",]);
        DB::table("states")->insert(["country_code" => "ME", "state_code" =>"24", "state_name" => "Tuzi",]);

        // Montserrat (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "MS", "state_code" => "MS", "state_name" => "Montserrat",]);

        // Morocco
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "AGD", "state_name" => "Agadir-Ida-Ou-Tanane",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "AOU", "state_name" => "Aousserd",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "ASZ", "state_name" => "Assa-Zag",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "AZI", "state_name" => "Azilal",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "BEM", "state_name" => "Béni Mellal",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "BES", "state_name" => "Benslimane",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "BER", "state_name" => "Berkane",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "BRR", "state_name" => "Berrechid",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "BOD", "state_name" => "Boujdour",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "BOM", "state_name" => "Boulemane",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "CAS", "state_name" => "Casablanca",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "CHE", "state_name" => "Chefchaouen",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "CHI", "state_name" => "Chichaoua",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "CHT", "state_name" => "Chtouka-Ait Baha",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "DRI", "state_name" => "Driouch",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "ERR", "state_name" => "Errachidia",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "ESM", "state_name" => "Es-Semara",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "ESI", "state_name" => "Essaouira",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "FAH", "state_name" => "Fahs-Anjra",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "FES", "state_name" => "Fès",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "FIG", "state_name" => "Figuig",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "FQH", "state_name" => "Fquih Ben Salah",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "GUE", "state_name" => "Guelmim",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "GUF", "state_name" => "Guercif",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "HAJ", "state_name" => "El Hajeb",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "HAO", "state_name" => "Al Haouz",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "HOC", "state_name" => "Al Hoceïma",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "IFR", "state_name" => "Ifrane",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "INE", "state_name" => "Inezgane-Ait Melloul",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "JDI", "state_name" => "El Jadida",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "JRA", "state_name" => "Jerada",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "KES", "state_name" => "El Kelâa des Sraghna",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "KEN", "state_name" => "Kénitra",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "KHE", "state_name" => "Khemisset",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "KHN", "state_name" => "Khenifra",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "KHO", "state_name" => "Khouribga",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "LAA", "state_name" => "Laâyoune",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "LAR", "state_name" => "Larache",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "MAR", "state_name" => "Marrakech",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "MDF", "state_name" => "M’diq-Fnideq",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "MED", "state_name" => "Médiouna",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "MEK", "state_name" => "Meknès",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "MID", "state_name" => "Midelt",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "MOH", "state_name" => "Mohammadia",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "MOU", "state_name" => "Moulay Yacoub",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "NAD", "state_name" => "Nador",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "NOU", "state_name" => "Nouaceur",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "OUA", "state_name" => "Ouarzazate",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "OUD", "state_name" => "Oued Ed-Dahab ",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "OUZ", "state_name" => "Ouezzane",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "OUJ", "state_name" => "Oujda-Angad",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "RAB", "state_name" => "Rabat",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "REH", "state_name" => "Rehamna",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "SAF", "state_name" => "Safi",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "SAL", "state_name" => "Salé",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "SEF", "state_name" => "Sefrou",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "SET", "state_name" => "Settat",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "SIB", "state_name" => "Sidi Bennour",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "SIF", "state_name" => "Sidi Ifni",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "SIK", "state_name" => "Sidi Kacem",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "SIL", "state_name" => "Sidi Slimane",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "SKH", "state_name" => "Skhirate-Témara",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TNT", "state_name" => "Tan-Tan",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TNG", "state_name" => "Tanger-Assilah",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TAO", "state_name" => "Taounate",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TAI", "state_name" => "Taourirt",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TAF", "state_name" => "Tarfaya",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TAR", "state_name" => "Taroudant",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TAT", "state_name" => "Tata",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TAZ", "state_name" => "Taza",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TET", "state_name" => "Tétouan",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TIN", "state_name" => "Tinghir",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "TIZ", "state_name" => "Tiznit",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "YUS", "state_name" => "Youssoufia",]);
        DB::table("states")->insert(["country_code" => "MA", "state_code" => "ZAG", "state_name" => "Zagora",]);

        // Mozambique
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "MPM", "state_name" => "Maputo",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "P", "state_name" => "Cabo Delgado",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "G", "state_name" => "Gaza",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "I", "state_name" => "Inhambane",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "B", "state_name" => "Manica",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "L", "state_name" => "Maputo",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "N", "state_name" => "Nampula",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "A", "state_name" => "Niassa",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "S", "state_name" => "Sofala",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "T", "state_name" => "Tete",]);
        DB::table("states")->insert(["country_code" => "MZ", "state_code" => "Q", "state_name" => "Zambézia",]);

        // Myanmar
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "07", "state_name" => "Ayeyarwady",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "02", "state_name" => "Bago",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "03", "state_name" => "Magway",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "04", "state_name" => "Mandalay",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "01", "state_name" => "Sagaing",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "05", "state_name" => "Tanintharyi",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "06", "state_name" => "Yangon",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "14", "state_name" => "Chin",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "11", "state_name" => "Kachin",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "12", "state_name" => "Kayah",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "13", "state_name" => "Kayin",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "15", "state_name" => "Mon",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "16", "state_name" => "Rakhine",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "17", "state_name" => "Shan",]);
        DB::table("states")->insert(["country_code" => "MM", "state_code" => "18", "state_name" => "Nay Pyi Taw",]);

        // Namibia
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "ER", "state_name" => "Erongo",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "HA", "state_name" => "Hardap",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "KA", "state_name" => "Karas",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "KE", "state_name" => "Kavango East",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "KW", "state_name" => "Kavango West",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "KH", "state_name" => "Khomas",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "KU", "state_name" => "Kunene",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "OW", "state_name" => "Ohangwena",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "OH", "state_name" => "Omaheke",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "OS", "state_name" => "Omusati",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "ON", "state_name" => "Oshana",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "OT", "state_name" => "Oshikoto",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "OD", "state_name" => "Otjozondjupa",]);
        DB::table("states")->insert(["country_code" => "NA", "state_code" => "CA", "state_name" => "Zambezi",]);

        // Nauru
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "01", "state_name" => "Aiwo",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "02", "state_name" => "Anabar",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "03", "state_name" => "Anetan",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "04", "state_name" => "Anibare",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "05", "state_name" => "Baitsi",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "06", "state_name" => "Boe",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "07", "state_name" => "Buada",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "08", "state_name" => "Denigomodu",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "09", "state_name" => "Ewa",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "10", "state_name" => "Ijuw",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "11", "state_name" => "Meneng",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "12", "state_name" => "Nibok",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "13", "state_name" => "Uaboe",]);
        DB::table("states")->insert(["country_code" => "NR", "state_code" => "14", "state_name" => "Yaren",]);

        // Nepal
        DB::table("states")->insert(["country_code" => "NP", "state_code" => "P1", "state_name" => "Pradesh 1",]);
        DB::table("states")->insert(["country_code" => "NP", "state_code" => "P2", "state_name" => "Pradesh 2",]);
        DB::table("states")->insert(["country_code" => "NP", "state_code" => "P3", "state_name" => "Bagmati Pradesh",]);
        DB::table("states")->insert(["country_code" => "NP", "state_code" => "P4", "state_name" => "Gandaki Pradesh",]);
        DB::table("states")->insert(["country_code" => "NP", "state_code" => "P5", "state_name" => "Pradesh 5",]);
        DB::table("states")->insert(["country_code" => "NP", "state_code" => "P6", "state_name" => "Karnali Pradesh",]);
        DB::table("states")->insert(["country_code" => "NP", "state_code" => "P7", "state_name" => "Sudurpashchim Pradesh",]);

        // Netherlands
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "DR", "state_name" => "Drenthe",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "FL", "state_name" => "Flevoland",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "FR", "state_name" => "Fryslân (fy)",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "GE", "state_name" => "Gelderland",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "GR", "state_name" => "Groningen",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "LI", "state_name" => "Limburg",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "NB", "state_name" => "Noord-Brabant",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "NH", "state_name" => "Noord-Holland",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "OV", "state_name" => "Overijssel",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "UT", "state_name" => "Utrecht",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "ZE", "state_name" => "Zeeland",]);
        DB::table("states")->insert(["country_code" => "NL", "state_code" => "ZH", "state_name" => "Zuid-Holland",]);

        // New Caledonia (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "NC", "state_code" => "NC", "state_name" => "New Caledonia",]);

        // New Zealand
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "AUK", "state_name" => "Auckland",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "BOP", "state_name" => "Bay of Plenty",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "CAN", "state_name" => "Canterbury",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "GIS", "state_name" => "Gisborne",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "HKB", "state_name" => "Hawke's Bay",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "MBH", "state_name" => "Marlborough",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "MWT", "state_name" => "Manawatu-Wanganui",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "NSN", "state_name" => "Nelson",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "NTL", "state_name" => "Northland",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "OTA", "state_name" => "Otago",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "STL", "state_name" => "Southland",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "TAS", "state_name" => "Tasman",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "TKI", "state_name" => "Taranaki",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "WKO", "state_name" => "Waikato",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "WGN", "state_name" => "Wellington",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "WTC", "state_name" => "West Coast",]);
        DB::table("states")->insert(["country_code" => "NZ", "state_code" => "CIT", "state_name" => "Chatham Islands Territory",]);

        // Nicaragua
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "BO", "state_name" => "Boaco",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "CA", "state_name" => "Carazo",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "CI", "state_name" => "Chinandega",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "CO", "state_name" => "Chontales",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "ES", "state_name" => "Estelí",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "GR", "state_name" => "Granada",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "JI", "state_name" => "Jinotega",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "LE", "state_name" => "León",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "MD", "state_name" => "Madriz",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "MN", "state_name" => "Managua",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "MS", "state_name" => "Masaya",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "MT", "state_name" => "Matagalpa",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "NS", "state_name" => "Nueva Segovia",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "SJ", "state_name" => "Río San Juan",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "RI", "state_name" => "Rivas",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "AN", "state_name" => "Costa Caribe Norte",]);
        DB::table("states")->insert(["country_code" => "NI", "state_code" => "AS", "state_name" => "Costa Caribe Sur",]);

        // Niger
        DB::table("states")->insert(["country_code" => "NE", "state_code" => "8", "state_name" => "Niamey",]);
        DB::table("states")->insert(["country_code" => "NE", "state_code" => "1", "state_name" => "Agadez",]);
        DB::table("states")->insert(["country_code" => "NE", "state_code" => "2", "state_name" => "Diffa",]);
        DB::table("states")->insert(["country_code" => "NE", "state_code" => "3", "state_name" => "Dosso",]);
        DB::table("states")->insert(["country_code" => "NE", "state_code" => "4", "state_name" => "Maradi",]);
        DB::table("states")->insert(["country_code" => "NE", "state_code" => "5", "state_name" => "Tahoua",]);
        DB::table("states")->insert(["country_code" => "NE", "state_code" => "6", "state_name" => "Tillabéri",]);
        DB::table("states")->insert(["country_code" => "NE", "state_code" => "7", "state_name" => "Zinder",]);

        // Nigeria
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "FC", "state_name" => "Abuja Federal Capital Territory",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "AB", "state_name" => "Abia",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "AD", "state_name" => "Adamawa",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "AK", "state_name" => "Akwa Ibom",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "AN", "state_name" => "Anambra",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "BA", "state_name" => "Bauchi",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "BY", "state_name" => "Bayelsa",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "BE", "state_name" => "Benue",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "BO", "state_name" => "Borno",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "CR", "state_name" => "Cross River",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "DE", "state_name" => "Delta",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "EB", "state_name" => "Ebonyi",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "ED", "state_name" => "Edo",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "EK", "state_name" => "Ekiti",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "EN", "state_name" => "Enugu",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "GO", "state_name" => "Gombe",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "IM", "state_name" => "Imo",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "JI", "state_name" => "Jigawa",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "KD", "state_name" => "Kaduna",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "KN", "state_name" => "Kano",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "KT", "state_name" => "Katsina",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "KE", "state_name" => "Kebbi",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "KO", "state_name" => "Kogi",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "KW", "state_name" => "Kwara",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "LA", "state_name" => "Lagos",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "NA", "state_name" => "Nasarawa",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "NI", "state_name" => "Niger",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "OG", "state_name" => "Ogun",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "ON", "state_name" => "Ondo",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "OS", "state_name" => "Osun",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "OY", "state_name" => "Oyo",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "PL", "state_name" => "Plateau",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "RI", "state_name" => "Rivers",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "SO", "state_name" => "Sokoto",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "TA", "state_name" => "Taraba",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "YO", "state_name" => "Yobe",]);
        DB::table("states")->insert(["country_code" => "NG", "state_code" => "ZA", "state_name" => "Zamfara",]);

        // Niue (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "NU", "state_code" => "NU", "state_name" => "Niue",]);

        // Norfolk Island (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "NF", "state_code" => "NF", "state_name" => "Norfolk Island",]);

        // Northern Mariana Islands (The Northern Mariana Islands, an outlying area of the United States)
        DB::table("states")->insert(["country_code" => "MP", "state_code" => "MP", "state_name" => "Northern Mariana Islands",]);

        // Norway
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "02", "state_name" => "Akershus",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "09", "state_name" => "Aust-Agder",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "06", "state_name" => "Buskerud",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "20", "state_name" => "Finnmark",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "04", "state_name" => "Hedmark",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "12", "state_name" => "Hordaland",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "15", "state_name" => "Møre og Romsdal",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "18", "state_name" => "Nordland",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "05", "state_name" => "Oppland",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "03", "state_name" => "Oslo",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "11", "state_name" => "Rogaland",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "14", "state_name" => "Sogn og Fjordane",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "08", "state_name" => "Telemark",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "19", "state_name" => "Troms",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "50", "state_name" => "Trøndelag",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "10", "state_name" => "Vest-Agder",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "07", "state_name" => "Vestfold",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "01", "state_name" => "Østfold",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "22", "state_name" => "Jan Mayen",]);
        DB::table("states")->insert(["country_code" => "NO", "state_code" => "21", "state_name" => "Svalbard",]);

        // Oman
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "DA", "state_name" => "Ad Dākhilīyah",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "BS", "state_name" => "Shamāl al Bāţinah",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "BJ", "state_name" => "Janūb al Bāţinah",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "WU", "state_name" => "Al Wusţá",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "SS", "state_name" => "Shamāl ash Sharqīyah",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "SJ", "state_name" => "Janūb ash Sharqīyah",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "ZA", "state_name" => "Az̧ Z̧āhirah",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "BU", "state_name" => "Al Buraymī",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "MA", "state_name" => "Masqaţ",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "MU", "state_name" => "Musandam",]);
        DB::table("states")->insert(["country_code" => "OM", "state_code" => "ZU", "state_name" => "Z̧ufār",]);

        // Pakistan
        DB::table("states")->insert(["country_code" => "PK", "state_code" => "IS", "state_name" => "Islamabad",]);
        DB::table("states")->insert(["country_code" => "PK", "state_code" => "BA", "state_name" => "Balochistan",]);
        DB::table("states")->insert(["country_code" => "PK", "state_code" => "KP", "state_name" => "Khyber Pakhtunkhwa",]);
        DB::table("states")->insert(["country_code" => "PK", "state_code" => "PB", "state_name" => "Punjab",]);
        DB::table("states")->insert(["country_code" => "PK", "state_code" => "SD", "state_name" => "Sindh",]);
        DB::table("states")->insert(["country_code" => "PK", "state_code" => "JK", "state_name" => "Azad Jammu and Kashmir",]);
        DB::table("states")->insert(["country_code" => "PK", "state_code" => "GB", "state_name" => "Gilgit-Baltistan",]);

        // Palau
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "002", "state_name" => "Aimeliik",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "004", "state_name" => "Airai",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "010", "state_name" => "Angaur",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "050", "state_name" => "Hatohobei",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "100", "state_name" => "Kayangel",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "150", "state_name" => "Koror",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "212", "state_name" => "Melekeok",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "214", "state_name" => "Ngaraard",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "218", "state_name" => "Ngarchelong",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "222", "state_name" => "Ngardmau",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "224", "state_name" => "Ngatpang",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "226", "state_name" => "Ngchesar",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "227", "state_name" => "Ngeremlengui",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "228", "state_name" => "Ngiwal",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "350", "state_name" => "Peleliu",]);
        DB::table("states")->insert(["country_code" => "PW", "state_code" => "370", "state_name" => "Sonsorol",]);

        // Palestine, State of
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "BTH", "state_name" => "Bethlehem",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "DEB", "state_name" => "Deir El Balah",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "GZA", "state_name" => "Gaza",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "HBN", "state_name" => "Hebron",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "JEN", "state_name" => "Jenin",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "JRH", "state_name" => "Jericho and Al Aghwar",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "JEM", "state_name" => "Jerusalem",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "KYS", "state_name" => "Khan Yunis",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "NBS", "state_name" => "Nablus",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "NGZ", "state_name" => "North Gaza",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "QQA", "state_name" => "Qalqilya",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "RFH", "state_name" => "Rafah",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "RBH", "state_name" => "Ramallah",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "SLT", "state_name" => "Salfit",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "TBS", "state_name" => "Tubas",]);
        DB::table("states")->insert(["country_code" => "PS", "state_code" => "TKM", "state_name" => "Tulkarm",]);

        // Panama
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "1", "state_name" => "Bocas del Toro",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "4", "state_name" => "Chiriquí",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "2", "state_name" => "Coclé",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "3", "state_name" => "Colón",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "5", "state_name" => "Darién",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "EM", "state_name" => "Emberá",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "KY", "state_name" => "Guna Yala",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "6", "state_name" => "Herrera",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "7", "state_name" => "Los Santos",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "NB", "state_name" => "Ngöbe-Buglé",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "8", "state_name" => "Panamá",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "10", "state_name" => "Panamá Oeste",]);
        DB::table("states")->insert(["country_code" => "PA", "state_code" => "9", "state_name" => "Veraguas",]);

        // Papua New Guinea
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "NCD", "state_name" => "National Capital District",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "CPM", "state_name" => "Central",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "CPK", "state_name" => "Chimbu",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "EHG", "state_name" => "Eastern Highlands",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "EBR", "state_name" => "East New Britain",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "ESW", "state_name" => "East Sepik",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "EPW", "state_name" => "Enga",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "GPK", "state_name" => "Gulf",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "HLA", "state_name" => "Hela",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "JWK", "state_name" => "Jiwaka",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "MPM", "state_name" => "Madang",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "MRL", "state_name" => "Manus",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "MBA", "state_name" => "Milne Bay",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "MPL", "state_name" => "Morobe",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "NIK", "state_name" => "New Ireland",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "NPP", "state_name" => "Northern",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "SAN", "state_name" => "West Sepik",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "SHM", "state_name" => "Southern Highlands",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "WPD", "state_name" => "Western",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "WHM", "state_name" => "Western Highlands",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "WBK", "state_name" => "West New Britain",]);
        DB::table("states")->insert(["country_code" => "PG", "state_code" => "NSB", "state_name" => "Bougainville",]);

        // Paraguay
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "ASU", "state_name" => "Asunción",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "16", "state_name" => "Alto Paraguay",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "10", "state_name" => "Alto Paraná",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "13", "state_name" => "Amambay",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "19", "state_name" => "Boquerón",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "5", "state_name" => "Caaguazú",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "6", "state_name" => "Caazapá",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "14", "state_name" => "Canindeyú",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "11", "state_name" => "Central",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "1", "state_name" => "Concepción",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "3", "state_name" => "Cordillera",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "4", "state_name" => "Guairá",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "7", "state_name" => "Itapúa",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "8", "state_name" => "Misiones",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "12", "state_name" => "Ñeembucú",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "9", "state_name" => "Paraguarí",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "15", "state_name" => "Presidente Hayes",]);
        DB::table("states")->insert(["country_code" => "PY", "state_code" => "2", "state_name" => "San Pedro",]);

        // Peru
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "LMA", "state_name" => "Municipalidad Metropolitana de Lima",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "AMA", "state_name" => "Amazonas",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "ANC", "state_name" => "Ancash",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "APU", "state_name" => "Apurímac",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "ARE", "state_name" => "Arequipa",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "AYA", "state_name" => "Ayacucho",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "CAJ", "state_name" => "Cajamarca",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "CUS", "state_name" => "Cusco",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "CAL", "state_name" => "El Callao",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "HUV", "state_name" => "Huancavelica",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "HUC", "state_name" => "Huánuco",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "ICA", "state_name" => "Ica",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "JUN", "state_name" => "Junín",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "LAL", "state_name" => "La Libertad",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "LAM", "state_name" => "Lambayeque",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "LIM", "state_name" => "Lima",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "LOR", "state_name" => "Loreto",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "MDD", "state_name" => "Madre de Dios",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "MOQ", "state_name" => "Moquegua",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "PAS", "state_name" => "Pasco",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "PIU", "state_name" => "Piura",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "PUN", "state_name" => "Puno",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "SAM", "state_name" => "San Martín",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "TAC", "state_name" => "Tacna",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "TUM", "state_name" => "Tumbes",]);
        DB::table("states")->insert(["country_code" => "PE", "state_code" => "UCA", "state_name" => "Ucayali",]);

        // Philippines
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ABR", "state_name" => "Abra",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "AGN", "state_name" => "Agusan del Norte",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "AGS", "state_name" => "Agusan del Sur",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "AKL", "state_name" => "Aklan",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ALB", "state_name" => "Albay",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ANT", "state_name" => "Antique",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "APA", "state_name" => "Apayao",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "AUR", "state_name" => "Aurora",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "BAS", "state_name" => "Basilan",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "BAN", "state_name" => "Bataan",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "BTN", "state_name" => "Batanes",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "BTG", "state_name" => "Batangas",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "BEN", "state_name" => "Benguet",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "BIL", "state_name" => "Biliran",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "BOH", "state_name" => "Bohol",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "BUK", "state_name" => "Bukidnon",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "BUL", "state_name" => "Bulacan",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "CAG", "state_name" => "Cagayan",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "CAN", "state_name" => "Camarines Norte",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "CAS", "state_name" => "Camarines Sur",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "CAM", "state_name" => "Camiguin",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "CAP", "state_name" => "Capiz",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "CAT", "state_name" => "Catanduanes",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "CAV", "state_name" => "Cavite",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "CEB", "state_name" => "Cebu",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "COM", "state_name" => "Compostela Valley",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "NCO", "state_name" => "Cotabato",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "DAV", "state_name" => "Davao del Norte",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "DAS", "state_name" => "Davao del Sur",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "DVO", "state_name" => "Davao Occidental",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "DAO", "state_name" => "Davao Oriental",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "DIN", "state_name" => "Dinagat Islands",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "EAS", "state_name" => "Eastern Samar",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "GUI", "state_name" => "Guimaras",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "IFU", "state_name" => "Ifugao",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ILN", "state_name" => "Ilocos Norte",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ILS", "state_name" => "Ilocos Sur",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ILI", "state_name" => "Iloilo",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ISA", "state_name" => "Isabela",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "KAL", "state_name" => "Kalinga",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "LUN", "state_name" => "La Union",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "LAG", "state_name" => "Laguna",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "LAN", "state_name" => "Lanao del Norte",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "LAS", "state_name" => "Lanao del Sur",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "LEY", "state_name" => "Leyte",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "MAG", "state_name" => "Maguindanao",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "MAD", "state_name" => "Marinduque",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "MAS", "state_name" => "Masbate",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "MDC", "state_name" => "Mindoro Occidental",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "MDR", "state_name" => "Mindoro Oriental",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "MSC", "state_name" => "Misamis Occidental",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "MSR", "state_name" => "Misamis Oriental",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "MOU", "state_name" => "Mountain Province",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "NEC", "state_name" => "Negros Occidental",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "NER", "state_name" => "Negros Oriental",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "NSA", "state_name" => "Northern Samar",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "NUE", "state_name" => "Nueva Ecija",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "NUV", "state_name" => "Nueva Vizcaya",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "PLW", "state_name" => "Palawan",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "PAM", "state_name" => "Pampanga",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "PAN", "state_name" => "Pangasinan",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "QUE", "state_name" => "Quezon",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "QUI", "state_name" => "Quirino",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "RIZ", "state_name" => "Rizal",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ROM", "state_name" => "Romblon",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "WSA", "state_name" => "Samar",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "SAR", "state_name" => "Sarangani",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "SIG", "state_name" => "Siquijor",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "SOR", "state_name" => "Sorsogon",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "SCO", "state_name" => "South Cotabato",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "SLE", "state_name" => "Southern Leyte",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "SUK", "state_name" => "Sultan Kudarat",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "SLU", "state_name" => "Sulu",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "SUN", "state_name" => "Surigao del Norte",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "SUR", "state_name" => "Surigao del Sur",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "TAR", "state_name" => "Tarlac",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "TAW", "state_name" => "Tawi-Tawi",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ZMB", "state_name" => "Zambales",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ZAN", "state_name" => "Zamboanga del Norte",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ZAS", "state_name" => "Zamboanga del Sur",]);
        DB::table("states")->insert(["country_code" => "PH", "state_code" => "ZSI", "state_name" => "Zamboanga Sibugay",]);

        // Pitcairn (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "PN", "state_code" => "PN", "state_name" => "Pitcairn",]);

        // Poland
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "02", "state_name" => "Dolnośląskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "04", "state_name" => "Kujawsko-pomorskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "06", "state_name" => "Lubelskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "08", "state_name" => "Lubuskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "10", "state_name" => "Łódzkie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "12", "state_name" => "Małopolskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "14", "state_name" => "Mazowieckie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "16", "state_name" => "Opolskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "18", "state_name" => "Podkarpackie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "20", "state_name" => "Podlaskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "22", "state_name" => "Pomorskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "24", "state_name" => "Śląskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "26", "state_name" => "Świętokrzyskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "28", "state_name" => "Warmińsko-mazurskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "30", "state_name" => "Wielkopolskie",]);
        DB::table("states")->insert(["country_code" => "PL", "state_code" => "32", "state_name" => "Zachodniopomorskie",]);

        // Portugal
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "01", "state_name" => "Aveiro",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "02", "state_name" => "Beja",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "03", "state_name" => "Braga",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "04", "state_name" => "Bragança",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "05", "state_name" => "Castelo Branco",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "06", "state_name" => "Coimbra",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "07", "state_name" => "Évora",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "08", "state_name" => "Faro",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "09", "state_name" => "Guarda",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "10", "state_name" => "Leiria",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "11", "state_name" => "Lisboa",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "12", "state_name" => "Portalegre",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "13", "state_name" => "Porto",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "14", "state_name" => "Santarém",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "15", "state_name" => "Setúbal",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "16", "state_name" => "Viana do Castelo",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "17", "state_name" => "Vila Real",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "18", "state_name" => "Viseu",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "20", "state_name" => "Região Autónoma dos Açores",]);
        DB::table("states")->insert(["country_code" => "PT", "state_code" => "30", "state_name" => "Região Autónoma da Madeira",]);

        // Puerto Rico (Puerto Rico, an outlying area of the United States)
        DB::table("states")->insert(["country_code" => "PR", "state_code" => "PR", "state_name" => "Puerto Rico",]);

        // Qatar
        DB::table("states")->insert(["country_code" => "QA", "state_code" => "DA", "state_name" => "Ad Dawḩah",]);
        DB::table("states")->insert(["country_code" => "QA", "state_code" => "KH", "state_name" => "Al Khawr wa adh Dhakhīrah",]);
        DB::table("states")->insert(["country_code" => "QA", "state_code" => "WA", "state_name" => "Al Wakrah",]);
        DB::table("states")->insert(["country_code" => "QA", "state_code" => "RA", "state_name" => "Ar Rayyān",]);
        DB::table("states")->insert(["country_code" => "QA", "state_code" => "MS", "state_name" => "Ash Shamāl",]);
        DB::table("states")->insert(["country_code" => "QA", "state_code" => "SH", "state_name" => "Ash Shīḩānīyah",]);
        DB::table("states")->insert(["country_code" => "QA", "state_code" => "ZA", "state_name" => "Az̧ Z̧a‘āyin",]);
        DB::table("states")->insert(["country_code" => "QA", "state_code" => "US", "state_name" => "Umm Şalāl",]);

        // Réunion (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "RE", "state_code" => "RE", "state_name" => "Réunion",]);

        // Romania
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "AB", "state_name" => "Alba",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "AR", "state_name" => "Arad",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "AG", "state_name" => "Argeș",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "BC", "state_name" => "Bacău",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "BH", "state_name" => "Bihor",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "BN", "state_name" => "Bistrița-Năsăud",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "BT", "state_name" => "Botoșani",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "BV", "state_name" => "Brașov",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "BR", "state_name" => "Brăila",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "BZ", "state_name" => "Buzău",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "CS", "state_name" => "Caraș-Severin",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "CL", "state_name" => "Călărași",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "CJ", "state_name" => "Cluj",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "CT", "state_name" => "Constanța",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "CV", "state_name" => "Covasna",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "DB", "state_name" => "Dâmbovița",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "DJ", "state_name" => "Dolj",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "GL", "state_name" => "Galați",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "GR", "state_name" => "Giurgiu",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "GJ", "state_name" => "Gorj",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "HR", "state_name" => "Harghita",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "HD", "state_name" => "Hunedoara",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "IL", "state_name" => "Ialomița",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "IS", "state_name" => "Iași",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "IF", "state_name" => "Ilfov",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "MM", "state_name" => "Maramureș",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "MH", "state_name" => "Mehedinți",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "MS", "state_name" => "Mureș",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "NT", "state_name" => "Neamț",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "OT", "state_name" => "Olt",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "PH", "state_name" => "Prahova",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "SM", "state_name" => "Satu Mare",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "SJ", "state_name" => "Sălaj",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "SB", "state_name" => "Sibiu",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "SV", "state_name" => "Suceava",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "TR", "state_name" => "Teleorman",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "TM", "state_name" => "Timiș",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "TL", "state_name" => "Tulcea",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "VS", "state_name" => "Vaslui",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "VL", "state_name" => "Vâlcea",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "VN", "state_name" => "Vrancea",]);
        DB::table("states")->insert(["country_code" => "RO", "state_code" => "B", "state_name" => "București",]);

        // Russian Federation
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "AD", "state_name" => "Adygeya, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "AL", "state_name" => "Altay, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "BA", "state_name" => "Bashkortostan, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "BU", "state_name" => "Buryatiya, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "CE", "state_name" => "Chechenskaya Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "CU", "state_name" => "Chuvashskaya Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "DA", "state_name" => "Dagestan, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "IN", "state_name" => "Ingushetiya, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KB", "state_name" => "Kabardino-Balkarskaya Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KL", "state_name" => "Kalmykiya, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KC", "state_name" => "Karachayevo-Cherkesskaya Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KR", "state_name" => "Kareliya, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KK", "state_name" => "Khakasiya, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KO", "state_name" => "Komi, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "ME", "state_name" => "Mariy El, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "MO", "state_name" => "Mordoviya, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "SA", "state_name" => "Saha, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "SE", "state_name" => "Severnaya Osetiya, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "TA", "state_name" => "Tatarstan, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "TY", "state_name" => "Tyva, Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "UD", "state_name" => "Udmurtskaya Respublika",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "ALT", "state_name" => "Altayskiy kray",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KAM", "state_name" => "Kamchatskiy kray",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KHA", "state_name" => "Khabarovskiy kray",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KDA", "state_name" => "Krasnodarskiy kray",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KYA", "state_name" => "Krasnoyarskiy kray",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "PER", "state_name" => "Permskiy kray",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "PRI", "state_name" => "Primorskiy kray",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "STA", "state_name" => "Stavropol'skiy kray",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "ZAB", "state_name" => "Zabaykal'skiy kray",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "AMU", "state_name" => "Amurskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "ARK", "state_name" => "Arkhangel'skaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "AST", "state_name" => "Astrakhanskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "BEL", "state_name" => "Belgorodskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "BRY", "state_name" => "Bryanskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "CHE", "state_name" => "Chelyabinskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "IRK", "state_name" => "Irkutskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "IVA", "state_name" => "Ivanovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KGD", "state_name" => "Kaliningradskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KLU", "state_name" => "Kaluzhskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KEM", "state_name" => "Kemerovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KIR", "state_name" => "Kirovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KOS", "state_name" => "Kostromskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KGN", "state_name" => "Kurganskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KRS", "state_name" => "Kurskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "LEN", "state_name" => "Leningradskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "LIP", "state_name" => "Lipetskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "MAG", "state_name" => "Magadanskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "MOS", "state_name" => "Moskovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "MUR", "state_name" => "Murmanskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "NIZ", "state_name" => "Nizhegorodskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "NGR", "state_name" => "Novgorodskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "NVS", "state_name" => "Novosibirskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "OMS", "state_name" => "Omskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "ORE", "state_name" => "Orenburgskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "ORL", "state_name" => "Orlovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "PNZ", "state_name" => "Penzenskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "PSK", "state_name" => "Pskovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "ROS", "state_name" => "Rostovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "RYA", "state_name" => "Ryazanskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "SAK", "state_name" => "Sakhalinskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "SAM", "state_name" => "Samarskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "SAR", "state_name" => "Saratovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "SMO", "state_name" => "Smolenskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "SVE", "state_name" => "Sverdlovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "TAM", "state_name" => "Tambovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "TOM", "state_name" => "Tomskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "TUL", "state_name" => "Tul'skaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "TVE", "state_name" => "Tverskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "TYU", "state_name" => "Tyumenskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "ULY", "state_name" => "Ul'yanovskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "VLA", "state_name" => "Vladimirskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "VGG", "state_name" => "Volgogradskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "VLG", "state_name" => "Vologodskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "VOR", "state_name" => "Voronezhskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "YAR", "state_name" => "Yaroslavskaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "MOW", "state_name" => "Moskva",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "SPE", "state_name" => "Sankt-Peterburg",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "YEV", "state_name" => "Yevreyskaya avtonomnaya oblast'",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "CHU", "state_name" => "Chukotskiy avtonomnyy okrug",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "KHM", "state_name" => "Khanty-Mansiyskiy avtonomnyy okrug",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "NEN", "state_name" => "Nenetskiy avtonomnyy okrug",]);
        DB::table("states")->insert(["country_code" => "RU", "state_code" => "YAN", "state_name" => "Yamalo-Nenetskiy avtonomnyy okrug",]);

        // Rwanda
        DB::table("states")->insert(["country_code" => "RW", "state_code" => "01", "state_name" => "City of Kigali",]);
        DB::table("states")->insert(["country_code" => "RW", "state_code" => "02", "state_name" => "Eastern",]);
        DB::table("states")->insert(["country_code" => "RW", "state_code" => "03", "state_name" => "Northern",]);
        DB::table("states")->insert(["country_code" => "RW", "state_code" => "04", "state_name" => "Western",]);
        DB::table("states")->insert(["country_code" => "RW", "state_code" => "05", "state_name" => "Southern",]);

        // Saint Barthélemy (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "BL", "state_code" => "BL", "state_name" => "Saint Barthélemy",]);

        // Saint Helena, Ascension and Tristan da Cunha
        DB::table("states")->insert(["country_code" => "SH", "state_code" => "AC", "state_name" => "Ascension",]);
        DB::table("states")->insert(["country_code" => "SH", "state_code" => "HL", "state_name" => "Saint Helena",]);
        DB::table("states")->insert(["country_code" => "SH", "state_code" => "TA", "state_name" => "Tristan da Cunha",]);

        // Saint Kitts and Nevis
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "01", "state_name" => "Christ Church Nichola Town",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "02", "state_name" => "Saint Anne Sandy Point",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "03", "state_name" => "Saint George Basseterre",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "04", "state_name" => "Saint George Gingerland",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "05", "state_name" => "Saint James Windward",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "06", "state_name" => "Saint John Capisterre",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "07", "state_name" => "Saint John Figtree",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "08", "state_name" => "Saint Mary Cayon",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "09", "state_name" => "Saint Paul Capisterre",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "10", "state_name" => "Saint Paul Charlestown",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "11", "state_name" => "Saint Peter Basseterre",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "12", "state_name" => "Saint Thomas Lowland",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "13", "state_name" => "Saint Thomas Middle Island",]);
        DB::table("states")->insert(["country_code" => "KN", "state_code" => "15", "state_name" => "Trinity Palmetto Point",]);

        // Saint Lucia
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "01", "state_name" => "Anse la Raye",]);
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "12", "state_name" => "Canaries",]);
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "02", "state_name" => "Castries",]);
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "03", "state_name" => "Choiseul",]);
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "05", "state_name" => "Dennery",]);
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "06", "state_name" => "Gros Islet",]);
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "07", "state_name" => "Laborie",]);
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "08", "state_name" => "Micoud",]);
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "10", "state_name" => "Soufrière",]);
        DB::table("states")->insert(["country_code" => "LC", "state_code" => "11", "state_name" => "Vieux Fort",]);

        // Saint Martin (French part) (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "MF", "state_code" => "MF", "state_name" => "Saint Martin (French part)",]);

        // Saint Pierre and Miquelon (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "PM", "state_code" => "PM", "state_name" => "Saint Pierre and Miquelon",]);

        // Saint Vincent and the Grenadines
        DB::table("states")->insert(["country_code" => "VC", "state_code" => "01", "state_name" => "Charlotte",]);
        DB::table("states")->insert(["country_code" => "VC", "state_code" => "06", "state_name" => "Grenadines",]);
        DB::table("states")->insert(["country_code" => "VC", "state_code" => "02", "state_name" => "Saint Andrew",]);
        DB::table("states")->insert(["country_code" => "VC", "state_code" => "03", "state_name" => "Saint David",]);
        DB::table("states")->insert(["country_code" => "VC", "state_code" => "04", "state_name" => "Saint George",]);
        DB::table("states")->insert(["country_code" => "VC", "state_code" => "05", "state_name" => "Saint Patrick",]);

        // Samoa
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "AA", "state_name" => "A'ana",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "AL", "state_name" => "Aiga-i-le-Tai",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "AT", "state_name" => "Atua",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "FA", "state_name" => "Fa'asaleleaga",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "GE", "state_name" => "Gaga'emauga",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "GI", "state_name" => "Gagaifomauga",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "PA", "state_name" => "Palauli",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "SA", "state_name" => "Satupa'itea",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "TU", "state_name" => "Tuamasaga",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "VF", "state_name" => "Va'a-o-Fonoti",]);
        DB::table("states")->insert(["country_code" => "WS", "state_code" => "VS", "state_name" => "Vaisigano",]);

        // San Marino
        DB::table("states")->insert(["country_code" => "SM", "state_code" => "01", "state_name" => "Acquaviva",]);
        DB::table("states")->insert(["country_code" => "SM", "state_code" => "06", "state_name" => "Borgo Maggiore",]);
        DB::table("states")->insert(["country_code" => "SM", "state_code" => "02", "state_name" => "Chiesanuova",]);
        DB::table("states")->insert(["country_code" => "SM", "state_code" => "03", "state_name" => "Domagnano",]);
        DB::table("states")->insert(["country_code" => "SM", "state_code" => "04", "state_name" => "Faetano",]);
        DB::table("states")->insert(["country_code" => "SM", "state_code" => "05", "state_name" => "Fiorentino",]);
        DB::table("states")->insert(["country_code" => "SM", "state_code" => "08", "state_name" => "Montegiardino",]);
        DB::table("states")->insert(["country_code" => "SM", "state_code" => "07", "state_name" => "San Marino",]);
        DB::table("states")->insert(["country_code" => "SM", "state_code" => "09", "state_name" => "Serravalle",]);

        // Sao Tome and Principe
        DB::table("states")->insert(["country_code" => "ST", "state_code" => "P", "state_name" => "Príncipe",]);
        DB::table("states")->insert(["country_code" => "ST", "state_code" => "S", "state_name" => "São Tomé",]);

        // Saudi Arabia
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "11", "state_name" => "Al Bāḩah",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "08", "state_name" => "Al Ḩudūd ash Shamālīyah",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "12", "state_name" => "Al Jawf",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "03", "state_name" => "Al Madīnah al Munawwarah",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "05", "state_name" => "Al Qaşīm",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "01", "state_name" => "Ar Riyāḑ",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "04", "state_name" => "Ash Sharqīyah",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "14", "state_name" => "'Asīr",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "06", "state_name" => "Ḩā'il",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "09", "state_name" => "Jāzān",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "02", "state_name" => "Makkah al Mukarramah",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "10", "state_name" => "Najrān",]);
        DB::table("states")->insert(["country_code" => "SA", "state_code" => "07", "state_name" => "Tabūk",]);

        // Senegal
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "DK", "state_name" => "Dakar",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "DB", "state_name" => "Diourbel",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "FK", "state_name" => "Fatick",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "KA", "state_name" => "Kaffrine",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "KL", "state_name" => "Kaolack",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "KE", "state_name" => "Kédougou",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "KD", "state_name" => "Kolda",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "LG", "state_name" => "Louga",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "MT", "state_name" => "Matam",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "SL", "state_name" => "Saint-Louis",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "SE", "state_name" => "Sédhiou",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "TC", "state_name" => "Tambacounda",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "TH", "state_name" => "Thiès",]);
        DB::table("states")->insert(["country_code" => "SN", "state_code" => "ZG", "state_name" => "Ziguinchor",]);

        // Serbia
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "00", "state_name" => "Beograd",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "14", "state_name" => "Borski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "11", "state_name" => "Braničevski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "23", "state_name" => "Jablanički okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "06", "state_name" => "Južnobački okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "04", "state_name" => "Južnobanatski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "09", "state_name" => "Kolubarski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "25", "state_name" => "Kosovski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "28", "state_name" => "Kosovsko-Mitrovački okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "29", "state_name" => "Kosovsko-Pomoravski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "08", "state_name" => "Mačvanski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "17", "state_name" => "Moravički okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "20", "state_name" => "Nišavski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "24", "state_name" => "Pčinjski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "26", "state_name" => "Pećki okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "22", "state_name" => "Pirotski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "10", "state_name" => "Podunavski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "13", "state_name" => "Pomoravski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "27", "state_name" => "Prizrenski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "19", "state_name" => "Rasinski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "18", "state_name" => "Raški okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "01", "state_name" => "Severnobački okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "03", "state_name" => "Severnobanatski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "02", "state_name" => "Srednjebanatski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "07", "state_name" => "Sremski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "12", "state_name" => "Šumadijski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "21", "state_name" => "Toplički okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "15", "state_name" => "Zaječarski okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "05", "state_name" => "Zapadnobački okrug",]);
        DB::table("states")->insert(["country_code" => "RS", "state_code" => "16", "state_name" => "Zlatiborski okrug",]);

        // Seychelles
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "01", "state_name" => "Anse aux Pins",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "02", "state_name" => "Anse Boileau",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "03", "state_name" => "Anse Etoile",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "05", "state_name" => "Anse Royale",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "04", "state_name" => "Au Cap",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "06", "state_name" => "Baie Lazare",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "07", "state_name" => "Baie Sainte Anne",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "08", "state_name" => "Beau Vallon",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "09", "state_name" => "Bel Air",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "10", "state_name" => "Bel Ombre",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "11", "state_name" => "Cascade",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "12", "state_name" => "Glacis",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "13", "state_name" => "Grand Anse Mahe",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "14", "state_name" => "Grand Anse Praslin",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "15", "state_name" => "La Digue",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "16", "state_name" => "English River",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "24", "state_name" => "Les Mamelles",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "17", "state_name" => "Mont Buxton",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "18", "state_name" => "Mont Fleuri",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "19", "state_name" => "Plaisance",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "20", "state_name" => "Pointe Larue",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "21", "state_name" => "Port Glaud",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "25", "state_name" => "Roche Caiman",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "22", "state_name" => "Saint Louis",]);
        DB::table("states")->insert(["country_code" => "SC", "state_code" => "23", "state_name" => "Takamaka",]);

        // Sierra Leone
        DB::table("states")->insert(["country_code" => "SL", "state_code" => "W", "state_name" => "Western Area",]);
        DB::table("states")->insert(["country_code" => "SL", "state_code" => "E", "state_name" => "Eastern",]);
        DB::table("states")->insert(["country_code" => "SL", "state_code" => "N", "state_name" => "Northern",]);
        DB::table("states")->insert(["country_code" => "SL", "state_code" => "NW", "state_name" => "North Western",]);
        DB::table("states")->insert(["country_code" => "SL", "state_code" => "S", "state_name" => "Southern",]);

        // Singapore
        DB::table("states")->insert(["country_code" => "SG", "state_code" => "01", "state_name" => "Central Singapore",]);
        DB::table("states")->insert(["country_code" => "SG", "state_code" => "02", "state_name" => "North East",]);
        DB::table("states")->insert(["country_code" => "SG", "state_code" => "03", "state_name" => "North West",]);
        DB::table("states")->insert(["country_code" => "SG", "state_code" => "04", "state_name" => "South East",]);
        DB::table("states")->insert(["country_code" => "SG", "state_code" => "05", "state_name" => "South West",]);

        // Sint Maarten (Dutch part) (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "SX", "state_code" => "SX", "state_name" => "Sint Maarten (Dutch part)",]);

        // Slovakia
        DB::table("states")->insert(["country_code" => "SK", "state_code" => "BC", "state_name" => "Banskobystrický kraj",]);
        DB::table("states")->insert(["country_code" => "SK", "state_code" => "BL", "state_name" => "Bratislavský kraj",]);
        DB::table("states")->insert(["country_code" => "SK", "state_code" => "KI", "state_name" => "Košický kraj",]);
        DB::table("states")->insert(["country_code" => "SK", "state_code" => "NI", "state_name" => "Nitriansky kraj",]);
        DB::table("states")->insert(["country_code" => "SK", "state_code" => "PV", "state_name" => "Prešovský kraj",]);
        DB::table("states")->insert(["country_code" => "SK", "state_code" => "TC", "state_name" => "Trenčiansky kraj",]);
        DB::table("states")->insert(["country_code" => "SK", "state_code" => "TA", "state_name" => "Trnavský kraj",]);
        DB::table("states")->insert(["country_code" => "SK", "state_code" => "ZI", "state_name" => "Žilinský kraj",]);

        // Slovenia
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "001", "state_name" => "Ajdovščina",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "213", "state_name" => "Ankaran",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "195", "state_name" => "Apače",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "002", "state_name" => "Beltinci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "148", "state_name" => "Benedikt",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "149", "state_name" => "Bistrica ob Sotli",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "003", "state_name" => "Bled",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "150", "state_name" => "Bloke",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "004", "state_name" => "Bohinj",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "005", "state_name" => "Borovnica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "006", "state_name" => "Bovec",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "151", "state_name" => "Braslovče",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "007", "state_name" => "Brda",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "008", "state_name" => "Brezovica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "009", "state_name" => "Brežice",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "152", "state_name" => "Cankova",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "011", "state_name" => "Celje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "012", "state_name" => "Cerklje na Gorenjskem",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "013", "state_name" => "Cerknica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "014", "state_name" => "Cerkno",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "153", "state_name" => "Cerkvenjak",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "196", "state_name" => "Cirkulane",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "015", "state_name" => "Črenšovci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "016", "state_name" => "Črna na Koroškem",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "017", "state_name" => "Črnomelj",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "018", "state_name" => "Destrnik",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "019", "state_name" => "Divača",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "154", "state_name" => "Dobje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "020", "state_name" => "Dobrepolje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "155", "state_name" => "Dobrna",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "021", "state_name" => "Dobrova-Polhov Gradec",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "156", "state_name" => "Dobrovnik",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "022", "state_name" => "Dol pri Ljubljani",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "157", "state_name" => "Dolenjske Toplice",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "023", "state_name" => "Domžale",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "024", "state_name" => "Dornava",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "025", "state_name" => "Dravograd",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "026", "state_name" => "Duplek",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "027", "state_name" => "Gorenja vas-Poljane",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "028", "state_name" => "Gorišnica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "207", "state_name" => "Gorje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "029", "state_name" => "Gornja Radgona",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "030", "state_name" => "Gornji Grad",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "031", "state_name" => "Gornji Petrovci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "158", "state_name" => "Grad",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "032", "state_name" => "Grosuplje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "159", "state_name" => "Hajdina",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "160", "state_name" => "Hoče-Slivnica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "161", "state_name" => "Hodoš",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "162", "state_name" => "Horjul",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "034", "state_name" => "Hrastnik",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "035", "state_name" => "Hrpelje-Kozina",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "036", "state_name" => "Idrija",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "037", "state_name" => "Ig",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "038", "state_name" => "Ilirska Bistrica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "039", "state_name" => "Ivančna Gorica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "040", "state_name" => "Izola",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "041", "state_name" => "Jesenice",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "163", "state_name" => "Jezersko",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "042", "state_name" => "Juršinci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "043", "state_name" => "Kamnik",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "044", "state_name" => "Kanal",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "045", "state_name" => "Kidričevo",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "046", "state_name" => "Kobarid",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "047", "state_name" => "Kobilje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "048", "state_name" => "Kočevje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "049", "state_name" => "Komen",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "164", "state_name" => "Komenda",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "050", "state_name" => "Koper",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "197", "state_name" => "Kosanjevica na Krki",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "165", "state_name" => "Kostel",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "051", "state_name" => "Kozje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "052", "state_name" => "Kranj",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "053", "state_name" => "Kranjska Gora",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "166", "state_name" => "Križevci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "054", "state_name" => "Krško",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "055", "state_name" => "Kungota",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "056", "state_name" => "Kuzma",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "057", "state_name" => "Laško",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "058", "state_name" => "Lenart",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "059", "state_name" => "Lendava",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "060", "state_name" => "Litija",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "061", "state_name" => "Ljubljana",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "062", "state_name" => "Ljubno",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "063", "state_name" => "Ljutomer",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "208", "state_name" => "Log-Dragomer",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "064", "state_name" => "Logatec",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "065", "state_name" => "Loška Dolina",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "066", "state_name" => "Loški Potok",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "167", "state_name" => "Lovrenc na Pohorju",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "067", "state_name" => "Luče",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "068", "state_name" => "Lukovica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "069", "state_name" => "Majšperk",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "198", "state_name" => "Makole",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "070", "state_name" => "Maribor",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "168", "state_name" => "Markovci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "071", "state_name" => "Medvode",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "072", "state_name" => "Mengeš",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "073", "state_name" => "Metlika",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "074", "state_name" => "Mežica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "169", "state_name" => "Miklavž na Dravskem Polju",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "075", "state_name" => "Miren-Kostanjevica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "212", "state_name" => "Mirna",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "170", "state_name" => "Mirna Peč",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "076", "state_name" => "Mislinja",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "199", "state_name" => "Mokronog-Trebelno",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "077", "state_name" => "Moravče",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "078", "state_name" => "Moravske Toplice",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "079", "state_name" => "Mozirje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "080", "state_name" => "Murska Sobota",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "081", "state_name" => "Muta",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "082", "state_name" => "Naklo",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "083", "state_name" => "Nazarje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "084", "state_name" => "Nova Gorica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "085", "state_name" => "Novo Mesto",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "086", "state_name" => "Odranci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "171", "state_name" => "Oplotnica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "087", "state_name" => "Ormož",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "088", "state_name" => "Osilnica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "089", "state_name" => "Pesnica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "090", "state_name" => "Piran",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "091", "state_name" => "Pivka",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "092", "state_name" => "Podčetrtek",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "172", "state_name" => "Podlehnik",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "093", "state_name" => "Podvelka",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "200", "state_name" => "Poljčane",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "173", "state_name" => "Polzela",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "094", "state_name" => "Postojna",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "174", "state_name" => "Prebold",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "095", "state_name" => "Preddvor",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "175", "state_name" => "Prevalje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "096", "state_name" => "Ptuj",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "097", "state_name" => "Puconci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "098", "state_name" => "Rače-Fram",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "099", "state_name" => "Radeče",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "100", "state_name" => "Radenci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "101", "state_name" => "Radlje ob Dravi",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "102", "state_name" => "Radovljica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "103", "state_name" => "Ravne na Koroškem",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "176", "state_name" => "Razkrižje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "209", "state_name" => "Rečica ob Savinji",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "201", "state_name" => "Renče-Vogrsko",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "104", "state_name" => "Ribnica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "177", "state_name" => "Ribnica na Pohorju",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "106", "state_name" => "Rogaška Slatina",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "105", "state_name" => "Rogašovci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "107", "state_name" => "Rogatec",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "108", "state_name" => "Ruše",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "178", "state_name" => "Selnica ob Dravi",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "109", "state_name" => "Semič",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "110", "state_name" => "Sevnica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "111", "state_name" => "Sežana",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "112", "state_name" => "Slovenj Gradec",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "113", "state_name" => "Slovenska Bistrica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "114", "state_name" => "Slovenske Konjice",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "179", "state_name" => "Sodražica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "180", "state_name" => "Solčava",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "202", "state_name" => "Središče ob Dravi",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "115", "state_name" => "Starše",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "203", "state_name" => "Straža",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "181", "state_name" => "Sveta Ana",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "204", "state_name" => "Sveta Trojica v Slovenskih Goricah",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "182", "state_name" => "Sveti Andraž v Slovenskih Goricah",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "116", "state_name" => "Sveti Jurij",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "210", "state_name" => "Sveti Jurij v Slovenskih Goricah",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "205", "state_name" => "Sveti Tomaž",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "033", "state_name" => "Šalovci",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "183", "state_name" => "Šempeter-Vrtojba",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "117", "state_name" => "Šenčur",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "118", "state_name" => "Šentilj",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "119", "state_name" => "Šentjernej",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "120", "state_name" => "Šentjur",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "211", "state_name" => "Šentrupert",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "121", "state_name" => "Škocjan",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "122", "state_name" => "Škofja Loka",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "123", "state_name" => "Škofljica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "124", "state_name" => "Šmarje pri Jelšah",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "206", "state_name" => "Šmarješke Toplice",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "125", "state_name" => "Šmartno ob Paki",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "194", "state_name" => "Šmartno pri Litiji",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "126", "state_name" => "Šoštanj",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "127", "state_name" => "Štore",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "184", "state_name" => "Tabor",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "010", "state_name" => "Tišina",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "128", "state_name" => "Tolmin",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "129", "state_name" => "Trbovlje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "130", "state_name" => "Trebnje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "185", "state_name" => "Trnovska Vas",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "186", "state_name" => "Trzin",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "131", "state_name" => "Tržič",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "132", "state_name" => "Turnišče",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "133", "state_name" => "Velenje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "187", "state_name" => "Velika Polana",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "134", "state_name" => "Velike Lašče",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "188", "state_name" => "Veržej",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "135", "state_name" => "Videm",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "136", "state_name" => "Vipava",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "137", "state_name" => "Vitanje",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "138", "state_name" => "Vodice",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "139", "state_name" => "Vojnik",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "189", "state_name" => "Vransko",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "140", "state_name" => "Vrhnika",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "141", "state_name" => "Vuzenica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "142", "state_name" => "Zagorje ob Savi",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "143", "state_name" => "Zavrč",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "144", "state_name" => "Zreče",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "190", "state_name" => "Žalec",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "146", "state_name" => "Železniki",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "191", "state_name" => "Žetale",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "147", "state_name" => "Žiri",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "192", "state_name" => "Žirovnica",]);
        DB::table("states")->insert(["country_code" => "SI", "state_code" => "193", "state_name" => "Žužemberk",]);

        // Solomon Islands
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "CT", "state_name" => "Capital Territory",]);
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "CE", "state_name" => "Central",]);
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "CH", "state_name" => "Choiseul",]);
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "GU", "state_name" => "Guadalcanal",]);
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "IS", "state_name" => "Isabel",]);
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "MK", "state_name" => "Makira-Ulawa",]);
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "ML", "state_name" => "Malaita",]);
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "RB", "state_name" => "Rennell and Bellona",]);
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "TE", "state_name" => "Temotu",]);
        DB::table("states")->insert(["country_code" => "SB", "state_code" => "WE", "state_name" => "Western",]);

        // Somalia
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "AW", "state_name" => "Awdal",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "BK", "state_name" => "Bakool",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "BN", "state_name" => "Banaadir",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "BR", "state_name" => "Bari",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "BY", "state_name" => "Bay",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "GA", "state_name" => "Galguduud",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "GE", "state_name" => "Gedo",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "HI", "state_name" => "Hiiraan",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "JD", "state_name" => "Jubbada Dhexe",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "JH", "state_name" => "Jubbada Hoose",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "MU", "state_name" => "Mudug",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "NU", "state_name" => "Nugaal",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "SA", "state_name" => "Sanaag",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "SD", "state_name" => "Shabeellaha Dhexe",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "SH", "state_name" => "Shabeellaha Hoose",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "SO", "state_name" => "Sool",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "TO", "state_name" => "Togdheer",]);
        DB::table("states")->insert(["country_code" => "SO", "state_code" => "WO", "state_name" => "Woqooyi Galbeed",]);

        // South Africa
        DB::table("states")->insert(["country_code" => "ZA", "state_code" => "EC", "state_name" => "Eastern Cape",]);
        DB::table("states")->insert(["country_code" => "ZA", "state_code" => "FS", "state_name" => "Free State",]);
        DB::table("states")->insert(["country_code" => "ZA", "state_code" => "GP", "state_name" => "Gauteng",]);
        DB::table("states")->insert(["country_code" => "ZA", "state_code" => "KZN", "state_name" => "Kwazulu-Natal",]);
        DB::table("states")->insert(["country_code" => "ZA", "state_code" => "LP", "state_name" => "Limpopo",]);
        DB::table("states")->insert(["country_code" => "ZA", "state_code" => "MP", "state_name" => "Mpumalanga",]);
        DB::table("states")->insert(["country_code" => "ZA", "state_code" => "NC", "state_name" => "Northern Cape",]);
        DB::table("states")->insert(["country_code" => "ZA", "state_code" => "NW", "state_name" => "North-West",]);
        DB::table("states")->insert(["country_code" => "ZA", "state_code" => "WC", "state_name" => "Western Cape",]);

        // South Georgia and the South Sandwich Islands (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "GS", "state_code" => "GS", "state_name" => "South Georgia and the South Sandwich Islands",]);

        // South Sudan
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "EC", "state_name" => "Central Equatoria",]);
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "EE", "state_name" => "Eastern Equatoria",]);
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "JG", "state_name" => "Jonglei",]);
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "LK", "state_name" => "Lakes",]);
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "BN", "state_name" => "Northern Bahr el Ghazal",]);
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "UY", "state_name" => "Unity",]);
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "NU", "state_name" => "Upper Nile",]);
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "WR", "state_name" => "Warrap",]);
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "BW", "state_name" => "Western Bahr el Ghazal",]);
        DB::table("states")->insert(["country_code" => "SS", "state_code" => "EW", "state_name" => "Western Equatoria",]);

        // Spain
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "C", "state_name" => "A Coruña",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "VI", "state_name" => "Álava",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "AB", "state_name" => "Albacete",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "A", "state_name" => "Alicante",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "AL", "state_name" => "Almería",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "O", "state_name" => "Asturias",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "AV", "state_name" => "Ávila",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "BA", "state_name" => "Badajoz",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "PM", "state_name" => "Balears",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "B", "state_name" => "Barcelona",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "BI", "state_name" => "Bizkaia",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "BU", "state_name" => "Burgos",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "CC", "state_name" => "Cáceres",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "CA", "state_name" => "Cádiz",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "S", "state_name" => "Cantabria",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "CS", "state_name" => "Castellón",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "CR", "state_name" => "Ciudad Real",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "CO", "state_name" => "Córdoba",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "CU", "state_name" => "Cuenca",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "SS", "state_name" => "Gipuzkoa",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "GI", "state_name" => "Girona",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "GR", "state_name" => "Granada",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "GU", "state_name" => "Guadalajara",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "H", "state_name" => "Huelva",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "HU", "state_name" => "Huesca",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "J", "state_name" => "Jaén",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "LO", "state_name" => "La Rioja",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "GC", "state_name" => "Las Palmas",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "LE", "state_name" => "León",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "L", "state_name" => "Lleida",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "LU", "state_name" => "Lugo",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "M", "state_name" => "Madrid",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "MA", "state_name" => "Málaga",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "MU", "state_name" => "Murcia",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "NA", "state_name" => "Navarra",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "OR", "state_name" => "Ourense",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "P", "state_name" => "Palencia",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "PO", "state_name" => "Pontevedra",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "SA", "state_name" => "Salamanca",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "TF", "state_name" => "Santa Cruz de Tenerife",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "SG", "state_name" => "Segovia",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "SE", "state_name" => "Sevilla",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "SO", "state_name" => "Soria",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "T", "state_name" => "Tarragona",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "TE", "state_name" => "Teruel",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "TO", "state_name" => "Toledo",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "V", "state_name" => "Valencia",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "VA", "state_name" => "Valladolid",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "ZA", "state_name" => "Zamora",]);
        DB::table("states")->insert(["country_code" => "ES", "state_code" => "Z", "state_name" => "Zaragoza",]);

        // Sri Lanka
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "11", "state_name" => "Colombo",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "12", "state_name" => "Gampaha",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "13", "state_name" => "Kalutara",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "21", "state_name" => "Kandy",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "22", "state_name" => "Matale",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "23", "state_name" => "Nuwara Eliya",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "31", "state_name" => "Galle",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "32", "state_name" => "Matara",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "33", "state_name" => "Hambantota",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "41", "state_name" => "Jaffna",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "42", "state_name" => "Kilinochchi",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "43", "state_name" => "Mannar",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "44", "state_name" => "Vavuniya",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "45", "state_name" => "Mullaittivu",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "51", "state_name" => "Batticaloa",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "52", "state_name" => "Ampara",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "53", "state_name" => "Trincomalee",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "61", "state_name" => "Kurunegala",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "62", "state_name" => "Puttalam",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "71", "state_name" => "Anuradhapura",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "72", "state_name" => "Polonnaruwa",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "81", "state_name" => "Badulla",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "82", "state_name" => "Monaragala",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "91", "state_name" => "Ratnapura",]);
        DB::table("states")->insert(["country_code" => "LK", "state_code" => "92", "state_name" => "Kegalla",]);

        // Sudan
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "RS", "state_name" => "Al Baḩr al Aḩmar",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "GZ", "state_name" => "Al Jazīrah",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "KH", "state_name" => "Al Kharţūm",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "GD", "state_name" => "Al Qaḑārif",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "NR", "state_name" => "Nahr an Nīl",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "NW", "state_name" => "An Nīl al Abyaḑ",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "NB", "state_name" => "An Nīl al Azraq",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "NO", "state_name" => "Ash Shamālīyah",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "DW", "state_name" => "Gharb Dārfūr",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "GK", "state_name" => "Gharb Kurdufān",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "DS", "state_name" => "Janūb Dārfūr",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "KS", "state_name" => "Janūb Kurdufān",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "KA", "state_name" => "Kassalā",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "DN", "state_name" => "Shamāl Dārfūr",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "KN", "state_name" => "Shiamāl Kurdufān",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "DE", "state_name" => "Sharq Dārfūr",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "SI", "state_name" => "Sinnār",]);
        DB::table("states")->insert(["country_code" => "SD", "state_code" => "DC", "state_name" => "Wasaţ Dārfūr Zālinjay",]);

        // Suriname
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "BR", "state_name" => "Brokopondo",]);
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "CM", "state_name" => "Commewijne",]);
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "CR", "state_name" => "Coronie",]);
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "MA", "state_name" => "Marowijne",]);
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "NI", "state_name" => "Nickerie",]);
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "PR", "state_name" => "Para",]);
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "PM", "state_name" => "Paramaribo",]);
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "SA", "state_name" => "Saramacca",]);
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "SI", "state_name" => "Sipaliwini",]);
        DB::table("states")->insert(["country_code" => "SR", "state_code" => "WA", "state_name" => "Wanica",]);

        // Svalbard and Jan Mayen (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "SJ", "state_code" => "SJ", "state_name" => "Svalbard and Jan Mayen",]);

        // Swaziland / Eswatini
        DB::table("states")->insert(["country_code" => "SZ", "state_code" => "HH", "state_name" => "Hhohho",]);
        DB::table("states")->insert(["country_code" => "SZ", "state_code" => "LU", "state_name" => "Lubombo",]);
        DB::table("states")->insert(["country_code" => "SZ", "state_code" => "MA", "state_name" => "Manzini",]);
        DB::table("states")->insert(["country_code" => "SZ", "state_code" => "SH", "state_name" => "Shiselweni",]);

        // Sweden
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "K", "state_name" => "Blekinge län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "W", "state_name" => "Dalarnas län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "I", "state_name" => "Gotlands län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "X", "state_name" => "Gävleborgs län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "N", "state_name" => "Hallands län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "Z", "state_name" => "Jämtlands län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "F", "state_name" => "Jönköpings län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "H", "state_name" => "Kalmar län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "G", "state_name" => "Kronobergs län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "BD", "state_name" => "Norrbottens län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "M", "state_name" => "Skåne län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "AB", "state_name" => "Stockholms län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "D", "state_name" => "Södermanlands län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "C", "state_name" => "Uppsala län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "S", "state_name" => "Värmlands län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "AC", "state_name" => "Västerbottens län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "Y", "state_name" => "Västernorrlands län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "U", "state_name" => "Västmanlands län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "O", "state_name" => "Västra Götalands län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "T", "state_name" => "Örebro län",]);
        DB::table("states")->insert(["country_code" => "SE", "state_code" => "E", "state_name" => "Östergötlands län",]);

        // Switzerland
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "AG", "state_name" => "Aargau",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "AR", "state_name" => "Appenzell Ausserrhoden",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "AI", "state_name" => "Appenzell Innerrhoden",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "BL", "state_name" => "Basel-Landschaft ",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "BS", "state_name" => "Basel-Stadt",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "BE", "state_name" => "Berne",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "FR", "state_name" => "Freiburg",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "GE", "state_name" => "Genève",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "GL", "state_name" => "Glarus",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "GR", "state_name" => "Graubünden",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "JU", "state_name" => "Jura",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "LU", "state_name" => "Luzern",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "NE", "state_name" => "Neuchâtel",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "NW", "state_name" => "Nidwalden",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "OW", "state_name" => "Obwalden",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "SG", "state_name" => "Sankt Gallen",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "SH", "state_name" => "Schaffhausen",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "SZ", "state_name" => "Schwyz",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "SO", "state_name" => "Solothurn",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "TG", "state_name" => "Thurgau",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "TI", "state_name" => "Ticino",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "UR", "state_name" => "Uri",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "VS", "state_name" => "Valais",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "VD", "state_name" => "Vaud",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "ZG", "state_name" => "Zug",]);
        DB::table("states")->insert(["country_code" => "CH", "state_code" => "ZH", "state_name" => "Zürich",]);

        // Syrian Arab Republic
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "HA", "state_name" => "Al Ḩasakah",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "LA", "state_name" => "Al Lādhiqīyah",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "QU", "state_name" => "Al Qunayţirah",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "RA", "state_name" => "Ar Raqqah",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "SU", "state_name" => "As Suwaydā'",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "DR", "state_name" => "Dar'ā",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "DY", "state_name" => "Dayr az Zawr",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "DI", "state_name" => "Dimashq",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "HL", "state_name" => "Ḩalab",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "HM", "state_name" => "Ḩamāh",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "HI", "state_name" => "Ḩimş",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "ID", "state_name" => "Idlib",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "RD", "state_name" => "Rīf Dimashq",]);
        DB::table("states")->insert(["country_code" => "SY", "state_code" => "TA", "state_name" => "Ţarţūs",]);

        // Taiwan, Province of China
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "CHA", "state_name" => "Changhua",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "CYI", "state_name" => "Chiayi",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "CYQ", "state_name" => "Chiayi",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "HSZ", "state_name" => "Hsinchu",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "HSQ", "state_name" => "Hsinchu",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "HUA", "state_name" => "Hualien",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "KHH", "state_name" => "Kaohsiung",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "KEE", "state_name" => "Keelung",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "KIN", "state_name" => "Kinmen",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "LIE", "state_name" => "Lienchiang",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "MIA", "state_name" => "Miaoli",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "NAN", "state_name" => "Nantou",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "NWT", "state_name" => "New Taipei",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "PEN", "state_name" => "Penghu",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "PIF", "state_name" => "Pingtung",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "TXG", "state_name" => "Taichung",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "TNN", "state_name" => "Tainan",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "TPE", "state_name" => "Taipei",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "TTT", "state_name" => "Taitung",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "TAO", "state_name" => "Taoyuan",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "ILA", "state_name" => "Yilan",]);
        DB::table("states")->insert(["country_code" => "TW", "state_code" => "YUN", "state_name" => "Yunlin",]);

        // Tajikistan
        DB::table("states")->insert(["country_code" => "TJ", "state_code" => "DU", "state_name" => "Dushanbe",]);
        DB::table("states")->insert(["country_code" => "TJ", "state_code" => "GB", "state_name" => "Kŭhistoni Badakhshon",]);
        DB::table("states")->insert(["country_code" => "TJ", "state_code" => "KT", "state_name" => "Khatlon",]);
        DB::table("states")->insert(["country_code" => "TJ", "state_code" => "SU", "state_name" => "Sughd",]);
        DB::table("states")->insert(["country_code" => "TJ", "state_code" => "RA", "state_name" => "nohiyahoi tobei jumhurí",]);

        // Tanzania, United Republic of
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "01", "state_name" => "Arusha",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "02", "state_name" => "Dar es Salaam",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "03", "state_name" => "Dodoma",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "27", "state_name" => "Geita",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "04", "state_name" => "Iringa",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "05", "state_name" => "Kagera",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "06", "state_name" => "Kaskazini Pemba",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "07", "state_name" => "Kaskazini Unguja",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "28", "state_name" => "Katavi",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "08", "state_name" => "Kigoma",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "09", "state_name" => "Kilimanjaro",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "10", "state_name" => "Kusini Pemba",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "11", "state_name" => "Kusini Unguja",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "12", "state_name" => "Lindi",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "26", "state_name" => "Manyara",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "13", "state_name" => "Mara",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "14", "state_name" => "Mbeya",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "15", "state_name" => "Mjini Magharibi",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "16", "state_name" => "Morogoro",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "17", "state_name" => "Mtwara",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "18", "state_name" => "Mwanza",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "29", "state_name" => "Njombe",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "19", "state_name" => "Pwani",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "20", "state_name" => "Rukwa",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "21", "state_name" => "Ruvuma",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "22", "state_name" => "Shinyanga",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "30", "state_name" => "Simiyu",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "23", "state_name" => "Singida",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "31", "state_name" => "Songwe",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "24", "state_name" => "Tabora",]);
        DB::table("states")->insert(["country_code" => "TZ", "state_code" => "25", "state_name" => "Tanga",]);

        // Thailand
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "10", "state_name" => "Krung Thep Maha Nakhon",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "S", "state_name" => "Phatthaya",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "37", "state_name" => "Amnat Charoen",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "15", "state_name" => "Ang Thong",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "38", "state_name" => "Bueng Kan",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "31", "state_name" => "Buri Ram",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "24", "state_name" => "Chachoengsao",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "18", "state_name" => "Chai Nat",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "36", "state_name" => "Chaiyaphum",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "22", "state_name" => "Chanthaburi",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "50", "state_name" => "Chiang Mai",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "57", "state_name" => "Chiang Rai",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "20", "state_name" => "Chon Buri",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "86", "state_name" => "Chumphon",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "46", "state_name" => "Kalasin",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "62", "state_name" => "Kamphaeng Phet",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "71", "state_name" => "Kanchanaburi",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "40", "state_name" => "Khon Kaen",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "81", "state_name" => "Krabi",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "52", "state_name" => "Lampang",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "51", "state_name" => "Lamphun",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "42", "state_name" => "Loei",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "16", "state_name" => "Lop Buri",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "58", "state_name" => "Mae Hong Son",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "44", "state_name" => "Maha Sarakham",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "49", "state_name" => "Mukdahan",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "26", "state_name" => "Nakhon Nayok",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "73", "state_name" => "Nakhon Pathom",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "48", "state_name" => "Nakhon Phanom",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "30", "state_name" => "Nakhon Ratchasima",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "60", "state_name" => "Nakhon Sawan",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "80", "state_name" => "Nakhon Si Thammarat",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "55", "state_name" => "Nan",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "96", "state_name" => "Narathiwat",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "39", "state_name" => "Nong Bua Lam Phu",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "43", "state_name" => "Nong Khai",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "12", "state_name" => "Nonthaburi",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "13", "state_name" => "Pathum Thani",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "94", "state_name" => "Pattani",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "82", "state_name" => "Phangnga",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "93", "state_name" => "Phatthalung",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "56", "state_name" => "Phayao",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "67", "state_name" => "Phetchabun",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "76", "state_name" => "Phetchaburi",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "66", "state_name" => "Phichit",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "65", "state_name" => "Phitsanulok",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "54", "state_name" => "Phrae",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "14", "state_name" => "Phra Nakhon Si Ayutthaya",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "83", "state_name" => "Phuket",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "25", "state_name" => "Prachin Buri",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "77", "state_name" => "Prachuap Khiri Khan",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "85", "state_name" => "Ranong",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "70", "state_name" => "Ratchaburi",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "21", "state_name" => "Rayong",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "45", "state_name" => "Roi Et",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "27", "state_name" => "Sa Kaeo",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "47", "state_name" => "Sakon Nakhon",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "11", "state_name" => "Samut Prakan",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "74", "state_name" => "Samut Sakhon",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "75", "state_name" => "Samut Songkhram",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "19", "state_name" => "Saraburi",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "91", "state_name" => "Satun",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "17", "state_name" => "Sing Buri",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "33", "state_name" => "Si Sa Ket",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "90", "state_name" => "Songkhla",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "64", "state_name" => "Sukhothai",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "72", "state_name" => "Suphan Buri",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "84", "state_name" => "Surat Thani",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "32", "state_name" => "Surin",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "63", "state_name" => "Tak",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "92", "state_name" => "Trang",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "23", "state_name" => "Trat",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "34", "state_name" => "Ubon Ratchathani",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "41", "state_name" => "Udon Thani",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "61", "state_name" => "Uthai Thani",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "53", "state_name" => "Uttaradit",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "95", "state_name" => "Yala",]);
        DB::table("states")->insert(["country_code" => "TH", "state_code" => "35", "state_name" => "Yasothon",]);

        // Timor-Leste
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "AL", "state_name" => "Aileu",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "AN", "state_name" => "Ainaro",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "BA", "state_name" => "Baucau",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "BO", "state_name" => "Bobonaro",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "CO", "state_name" => "Cova Lima",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "DI", "state_name" => "Díli",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "ER", "state_name" => "Ermera",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "LA", "state_name" => "Lautém",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "LI", "state_name" => "Liquiça",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "MT", "state_name" => "Manatuto",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "MF", "state_name" => "Manufahi",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "OE", "state_name" => "Oé-Cusse Ambeno",]);
        DB::table("states")->insert(["country_code" => "TL", "state_code" => "VI", "state_name" => "Viqueque",]);

        // Togo
        DB::table("states")->insert(["country_code" => "TG", "state_code" => "C", "state_name" => "Centrale",]);
        DB::table("states")->insert(["country_code" => "TG", "state_code" => "K", "state_name" => "Kara",]);
        DB::table("states")->insert(["country_code" => "TG", "state_code" => "M", "state_name" => "Maritime",]);
        DB::table("states")->insert(["country_code" => "TG", "state_code" => "P", "state_name" => "Plateaux",]);
        DB::table("states")->insert(["country_code" => "TG", "state_code" => "S", "state_name" => "Savanes",]);

        // Tokelau (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "TK", "state_code" => "TK", "state_name" => "Tokelau",]);

        // Tonga
        DB::table("states")->insert(["country_code" => "TO", "state_code" => "01", "state_name" => "'Eua",]);
        DB::table("states")->insert(["country_code" => "TO", "state_code" => "02", "state_name" => "Ha'apai",]);
        DB::table("states")->insert(["country_code" => "TO", "state_code" => "03", "state_name" => "Niuas",]);
        DB::table("states")->insert(["country_code" => "TO", "state_code" => "04", "state_name" => "Tongatapu",]);
        DB::table("states")->insert(["country_code" => "TO", "state_code" => "05", "state_name" => "Vava'u",]);

        // Trinidad and Tobago
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "CTT", "state_name" => "Couva–Tabaquite–Talparo",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "DMN", "state_name" => "Diego Martin",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "MRC", "state_name" => "Mayaro-Rio Claro",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "PED", "state_name" => "Penal-Debe",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "PRT", "state_name" => "Princes Town",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "SJL", "state_name" => "San Juan-Laventille",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "SGE", "state_name" => "Sangre Grande",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "SIP", "state_name" => "Siparia",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "TUP", "state_name" => "Tunapuna-Piarco",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "ARI", "state_name" => "Arima",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "CHA", "state_name" => "Chaguanas",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "PTF", "state_name" => "Point Fortin",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "POS", "state_name" => "Port of Spain",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "SFO", "state_name" => "San Fernando",]);
        DB::table("states")->insert(["country_code" => "TT", "state_code" => "TOB", "state_name" => "Tobago",]);

        // Tunisia
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "31", "state_name" => "Béja",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "13", "state_name" => "Ben Arous",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "23", "state_name" => "Bizerte",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "81", "state_name" => "Gabès",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "71", "state_name" => "Gafsa",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "32", "state_name" => "Jendouba",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "41", "state_name" => "Kairouan",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "42", "state_name" => "Kasserine",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "73", "state_name" => "Kébili",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "12", "state_name" => "L'Ariana",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "14", "state_name" => "La Manouba",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "33", "state_name" => "Le Kef",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "53", "state_name" => "Mahdia",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "82", "state_name" => "Médenine",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "52", "state_name" => "Monastir",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "21", "state_name" => "Nabeul",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "61", "state_name" => "Sfax",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "43", "state_name" => "Sidi Bouzid",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "34", "state_name" => "Siliana",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "51", "state_name" => "Sousse",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "83", "state_name" => "Tataouine",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "72", "state_name" => "Tozeur",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "11", "state_name" => "Tunis",]);
        DB::table("states")->insert(["country_code" => "TN", "state_code" => "22", "state_name" => "Zaghouan",]);

        // Turkey
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "01", "state_name" => "Adana",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "02", "state_name" => "Adıyaman",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "03", "state_name" => "Afyonkarahisar",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "04", "state_name" => "Ağrı",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "68", "state_name" => "Aksaray",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "05", "state_name" => "Amasya",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "06", "state_name" => "Ankara",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "07", "state_name" => "Antalya",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "75", "state_name" => "Ardahan",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "08", "state_name" => "Artvin",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "09", "state_name" => "Aydın",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "10", "state_name" => "Balıkesir",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "74", "state_name" => "Bartın",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "72", "state_name" => "Batman",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "69", "state_name" => "Bayburt",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "11", "state_name" => "Bilecik",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "12", "state_name" => "Bingöl",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "13", "state_name" => "Bitlis",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "14", "state_name" => "Bolu",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "15", "state_name" => "Burdur",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "16", "state_name" => "Bursa",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "17", "state_name" => "Çanakkale",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "18", "state_name" => "Çankırı",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "19", "state_name" => "Çorum",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "20", "state_name" => "Denizli",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "21", "state_name" => "Diyarbakır",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "81", "state_name" => "Düzce",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "22", "state_name" => "Edirne",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "23", "state_name" => "Elazığ",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "24", "state_name" => "Erzincan",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "25", "state_name" => "Erzurum",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "26", "state_name" => "Eskişehir",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "27", "state_name" => "Gaziantep",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "28", "state_name" => "Giresun",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "29", "state_name" => "Gümüşhane",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "30", "state_name" => "Hakkâri",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "31", "state_name" => "Hatay",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "76", "state_name" => "Iğdır",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "32", "state_name" => "Isparta",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "34", "state_name" => "İstanbul",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "35", "state_name" => "İzmir",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "46", "state_name" => "Kahramanmaraş",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "78", "state_name" => "Karabük",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "70", "state_name" => "Karaman",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "36", "state_name" => "Kars",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "37", "state_name" => "Kastamonu",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "38", "state_name" => "Kayseri",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "71", "state_name" => "Kırıkkale",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "39", "state_name" => "Kırklareli",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "40", "state_name" => "Kırşehir",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "79", "state_name" => "Kilis",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "41", "state_name" => "Kocaeli",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "42", "state_name" => "Konya",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "43", "state_name" => "Kütahya",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "44", "state_name" => "Malatya",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "45", "state_name" => "Manisa",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "47", "state_name" => "Mardin",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "33", "state_name" => "Mersin",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "48", "state_name" => "Muğla",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "49", "state_name" => "Muş",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "50", "state_name" => "Nevşehir",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "51", "state_name" => "Niğde",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "52", "state_name" => "Ordu",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "80", "state_name" => "Osmaniye",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "53", "state_name" => "Rize",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "54", "state_name" => "Sakarya",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "55", "state_name" => "Samsun",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "56", "state_name" => "Siirt",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "57", "state_name" => "Sinop",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "58", "state_name" => "Sivas",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "63", "state_name" => "Şanlıurfa",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "73", "state_name" => "Şırnak",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "59", "state_name" => "Tekirdağ",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "60", "state_name" => "Tokat",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "61", "state_name" => "Trabzon",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "62", "state_name" => "Tunceli",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "64", "state_name" => "Uşak",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "65", "state_name" => "Van",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "77", "state_name" => "Yalova",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "66", "state_name" => "Yozgat",]);
        DB::table("states")->insert(["country_code" => "TR", "state_code" => "67", "state_name" => "Zonguldak",]);

        // Turkmenistan
        DB::table("states")->insert(["country_code" => "TM", "state_code" => "A", "state_name" => "Ahal",]);
        DB::table("states")->insert(["country_code" => "TM", "state_code" => "B", "state_name" => "Balkan",]);
        DB::table("states")->insert(["country_code" => "TM", "state_code" => "D", "state_name" => "Daşoguz",]);
        DB::table("states")->insert(["country_code" => "TM", "state_code" => "L", "state_name" => "Lebap",]);
        DB::table("states")->insert(["country_code" => "TM", "state_code" => "M", "state_name" => "Mary",]);
        DB::table("states")->insert(["country_code" => "TM", "state_code" => "S", "state_name" => "Aşgabat",]);

        // Turks and Caicos Islands (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "TC", "state_code" => "TC", "state_name" => "Turks and Caicos Islands",]);

        // Tuvalu
        DB::table("states")->insert(["country_code" => "TV", "state_code" => "FUN", "state_name" => "Funafuti",]);
        DB::table("states")->insert(["country_code" => "TV", "state_code" => "NMG", "state_name" => "Nanumaga",]);
        DB::table("states")->insert(["country_code" => "TV", "state_code" => "NMA", "state_name" => "Nanumea",]);
        DB::table("states")->insert(["country_code" => "TV", "state_code" => "NIT", "state_name" => "Niutao",]);
        DB::table("states")->insert(["country_code" => "TV", "state_code" => "NUI", "state_name" => "Nui",]);
        DB::table("states")->insert(["country_code" => "TV", "state_code" => "NKF", "state_name" => "Nukufetau",]);
        DB::table("states")->insert(["country_code" => "TV", "state_code" => "NKL", "state_name" => "Nukulaelae",]);
        DB::table("states")->insert(["country_code" => "TV", "state_code" => "VAI", "state_name" => "Vaitupu",]);

        // Uganda
        DB::table("states")->insert(["country_code" => "UG", "state_code" => "C", "state_name" => "Central",]);
        DB::table("states")->insert(["country_code" => "UG", "state_code" => "E", "state_name" => "Eastern",]);
        DB::table("states")->insert(["country_code" => "UG", "state_code" => "N", "state_name" => "Northern",]);
        DB::table("states")->insert(["country_code" => "UG", "state_code" => "W", "state_name" => "Western",]);

        // Ukraine
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "71", "state_name" => "Cherkaska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "74", "state_name" => "Chernihivska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "77", "state_name" => "Chernivetska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "12", "state_name" => "Dnipropetrovska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "14", "state_name" => "Donetska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "26", "state_name" => "Ivano-Frankivska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "63", "state_name" => "Kharkivska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "65", "state_name" => "Khersonska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "68", "state_name" => "Khmelnytska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "35", "state_name" => "Kirovohradska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "32", "state_name" => "Kyivska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "09", "state_name" => "Luhanska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "46", "state_name" => "Lvivska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "48", "state_name" => "Mykolaivska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "51", "state_name" => "Odeska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "53", "state_name" => "Poltavska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "56", "state_name" => "Rivnenska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "59", "state_name" => "Sumska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "61", "state_name" => "Ternopilska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "05", "state_name" => "Vinnytska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "07", "state_name" => "Volynska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "21", "state_name" => "Zakarpatska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "23", "state_name" => "Zaporizka oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "18", "state_name" => "Zhytomyrska oblast",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "43", "state_name" => "Avtonomna Respublika Krym",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "30", "state_name" => "Kyiv",]);
        DB::table("states")->insert(["country_code" => "UA", "state_code" => "40", "state_name" => "Sevastopol",]);

        // United Arab Emirates
        DB::table("states")->insert(["country_code" => "AE", "state_code" => "AZ", "state_name" => "Abū Z̧aby",]);
        DB::table("states")->insert(["country_code" => "AE", "state_code" => "AJ", "state_name" => "‘Ajmān",]);
        DB::table("states")->insert(["country_code" => "AE", "state_code" => "FU", "state_name" => "Al Fujayrah",]);
        DB::table("states")->insert(["country_code" => "AE", "state_code" => "SH", "state_name" => "Ash Shāriqah",]);
        DB::table("states")->insert(["country_code" => "AE", "state_code" => "DU", "state_name" => "Dubayy",]);
        DB::table("states")->insert(["country_code" => "AE", "state_code" => "RK", "state_name" => "Ra’s al Khaymah",]);
        DB::table("states")->insert(["country_code" => "AE", "state_code" => "UQ", "state_name" => "Umm al Qaywayn",]);

        // United Kingdom
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BKM", "state_name" => "Buckinghamshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CAM", "state_name" => "Cambridgeshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CMA", "state_name" => "Cumbria",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DBY", "state_name" => "Derbyshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DEV", "state_name" => "Devon",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DOR", "state_name" => "Dorset",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ESX", "state_name" => "East Sussex",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ESS", "state_name" => "Essex",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "GLS", "state_name" => "Gloucestershire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HAM", "state_name" => "Hampshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HRT", "state_name" => "Hertfordshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "KEN", "state_name" => "Kent",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LAN", "state_name" => "Lancashire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LEC", "state_name" => "Leicestershire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LIN", "state_name" => "Lincolnshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NFK", "state_name" => "Norfolk",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NYK", "state_name" => "North Yorkshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NTH", "state_name" => "Northamptonshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NTT", "state_name" => "Nottinghamshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "OXF", "state_name" => "Oxfordshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SOM", "state_name" => "Somerset",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "STS", "state_name" => "Staffordshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SFK", "state_name" => "Suffolk",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SRY", "state_name" => "Surrey",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WAR", "state_name" => "Warwickshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WSX", "state_name" => "West Sussex",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WOR", "state_name" => "Worcestershire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LND", "state_name" => "London, City of",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BDG", "state_name" => "Barking and Dagenham",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BNE", "state_name" => "Barnet",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BEX", "state_name" => "Bexley",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BEN", "state_name" => "Brent",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BRY", "state_name" => "Bromley",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CMD", "state_name" => "Camden",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CRY", "state_name" => "Croydon",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "EAL", "state_name" => "Ealing",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ENF", "state_name" => "Enfield",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "GRE", "state_name" => "Greenwich",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HCK", "state_name" => "Hackney",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HMF", "state_name" => "Hammersmith and Fulham",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HRY", "state_name" => "Haringey",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HRW", "state_name" => "Harrow",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HAV", "state_name" => "Havering",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HIL", "state_name" => "Hillingdon",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HNS", "state_name" => "Hounslow",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ISL", "state_name" => "Islington",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "KEC", "state_name" => "Kensington and Chelsea",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "KTT", "state_name" => "Kingston upon Thames",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LBH", "state_name" => "Lambeth",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LEW", "state_name" => "Lewisham",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MRT", "state_name" => "Merton",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NWM", "state_name" => "Newham",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "RDB", "state_name" => "Redbridge",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "RIC", "state_name" => "Richmond upon Thames",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SWK", "state_name" => "Southwark",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "STN", "state_name" => "Sutton",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "TWH", "state_name" => "Tower Hamlets",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WFT", "state_name" => "Waltham Forest",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WND", "state_name" => "Wandsworth",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WSM", "state_name" => "Westminster",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BNS", "state_name" => "Barnsley",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BIR", "state_name" => "Birmingham",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BOL", "state_name" => "Bolton",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BRD", "state_name" => "Bradford",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BUR", "state_name" => "Bury",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CLD", "state_name" => "Calderdale",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "COV", "state_name" => "Coventry",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DNC", "state_name" => "Doncaster",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DUD", "state_name" => "Dudley",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "GAT", "state_name" => "Gateshead",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "KIR", "state_name" => "Kirklees",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "KWL", "state_name" => "Knowsley",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LDS", "state_name" => "Leeds",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LIV", "state_name" => "Liverpool",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MAN", "state_name" => "Manchester",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NET", "state_name" => "Newcastle upon Tyne",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NTY", "state_name" => "North Tyneside",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "OLD", "state_name" => "Oldham",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "RCH", "state_name" => "Rochdale",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ROT", "state_name" => "Rotherham",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SHN", "state_name" => "St. Helens",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SLF", "state_name" => "Salford",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SAW", "state_name" => "Sandwell",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SFT", "state_name" => "Sefton",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SHF", "state_name" => "Sheffield",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SOL", "state_name" => "Solihull",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "STY", "state_name" => "South Tyneside",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SKP", "state_name" => "Stockport",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SND", "state_name" => "Sunderland",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "TAM", "state_name" => "Tameside",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "TRF", "state_name" => "Trafford",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WKF", "state_name" => "Wakefield",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WLL", "state_name" => "Walsall",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WGN", "state_name" => "Wigan",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WRL", "state_name" => "Wirral",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WLV", "state_name" => "Wolverhampton",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BAS", "state_name" => "Bath and North East Somerset",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BDF", "state_name" => "Bedford",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BBD", "state_name" => "Blackburn with Darwen",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BPL", "state_name" => "Blackpool",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BMH", "state_name" => "Bournemouth",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BRC", "state_name" => "Bracknell Forest",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BNH", "state_name" => "Brighton and Hove",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BST", "state_name" => "Bristol, City of",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CBF", "state_name" => "Central Bedfordshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CHE", "state_name" => "Cheshire East",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CHW", "state_name" => "Cheshire West and Chester",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CON", "state_name" => "Cornwall",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DAL", "state_name" => "Darlington",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DER", "state_name" => "Derby",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DUR", "state_name" => "Durham County",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ERY", "state_name" => "East Riding of Yorkshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HAL", "state_name" => "Halton",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HPL", "state_name" => "Hartlepool",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HEF", "state_name" => "Herefordshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "IOW", "state_name" => "Isle of Wight",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "IOS", "state_name" => "Isles of Scilly",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "KHL", "state_name" => "Kingston upon Hull",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LCE", "state_name" => "Leicester",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LUT", "state_name" => "Luton",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MDW", "state_name" => "Medway",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MDB", "state_name" => "Middlesbrough",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MIK", "state_name" => "Milton Keynes",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NEL", "state_name" => "North East Lincolnshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NLN", "state_name" => "North Lincolnshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NSM", "state_name" => "North Somerset",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NBL", "state_name" => "Northumberland",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NGM", "state_name" => "Nottingham",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "PTE", "state_name" => "Peterborough",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "PLY", "state_name" => "Plymouth",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "POL", "state_name" => "Poole",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "POR", "state_name" => "Portsmouth",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "RDG", "state_name" => "Reading",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "RCC", "state_name" => "Redcar and Cleveland",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "RUT", "state_name" => "Rutland",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SHR", "state_name" => "Shropshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SLG", "state_name" => "Slough",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SGC", "state_name" => "South Gloucestershire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "STH", "state_name" => "Southampton",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SOS", "state_name" => "Southend-on-Sea",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "STT", "state_name" => "Stockton-on-Tees",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "STE", "state_name" => "Stoke-on-Trent",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SWD", "state_name" => "Swindon",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "TFW", "state_name" => "Telford and Wrekin",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "THR", "state_name" => "Thurrock",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "TOB", "state_name" => "Torbay",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WRT", "state_name" => "Warrington",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WBK", "state_name" => "West Berkshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WIL", "state_name" => "Wiltshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WNM", "state_name" => "Windsor and Maidenhead",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WOK", "state_name" => "Wokingham",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "YOR", "state_name" => "York",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ANN", "state_name" => "Antrim and Newtownabbey",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "AND", "state_name" => "Ards and North Down",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ABC", "state_name" => "Armagh City, Banbridge and Craigavon",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BFS", "state_name" => "Belfast",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CCG", "state_name" => "Causeway Coast and Glens",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DRS", "state_name" => "Derry City and Strabane",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "FMO", "state_name" => "Fermanagh and Omagh",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "LBC", "state_name" => "Lisburn and Castlereagh",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MEA", "state_name" => "Mid and East Antrim",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MUL", "state_name" => "Mid Ulster",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NMD", "state_name" => "Newry, Mourne and Down",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ABE", "state_name" => "Aberdeen City",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ABD", "state_name" => "Aberdeenshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ANS", "state_name" => "Angus",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "AGB", "state_name" => "Argyll and Bute",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CLK", "state_name" => "Clackmannanshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DGY", "state_name" => "Dumfries and Galloway",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DND", "state_name" => "Dundee City",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "EAY", "state_name" => "East Ayrshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "EDU", "state_name" => "East Dunbartonshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ELN", "state_name" => "East Lothian",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ERW", "state_name" => "East Renfrewshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "EDH", "state_name" => "Edinburgh, City of",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ELS", "state_name" => "Eilean Siar",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "FAL", "state_name" => "Falkirk",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "FIF", "state_name" => "Fife",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "GLG", "state_name" => "Glasgow City",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "HLD", "state_name" => "Highland",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "IVC", "state_name" => "Inverclyde",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MLN", "state_name" => "Midlothian",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MRY", "state_name" => "Moray",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NAY", "state_name" => "North Ayrshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NLK", "state_name" => "North Lanarkshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ORK", "state_name" => "Orkney Islands",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "PKN", "state_name" => "Perth and Kinross",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "RFW", "state_name" => "Renfrewshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SCB", "state_name" => "Scottish Borders, The",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "ZET", "state_name" => "Shetland Islands",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SAY", "state_name" => "South Ayrshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SLK", "state_name" => "South Lanarkshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "STG", "state_name" => "Stirling",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WDU", "state_name" => "West Dunbartonshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WLN", "state_name" => "West Lothian",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BGW", "state_name" => "Blaenau Gwent",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "BGE", "state_name" => "Bridgend",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CAY", "state_name" => "Caerphilly",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CRF", "state_name" => "Cardiff",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CMN", "state_name" => "Carmarthenshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CGN", "state_name" => "Ceredigion",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "CWY", "state_name" => "Conwy",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "DEN", "state_name" => "Denbighshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "FLN", "state_name" => "Flintshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "GWN", "state_name" => "Gwynedd",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "AGY", "state_name" => "Isle of Anglesey",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MTY", "state_name" => "Merthyr Tydfil",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "MON", "state_name" => "Monmouthshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NTL", "state_name" => "Neath Port Talbot",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "NWP", "state_name" => "Newport",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "PEM", "state_name" => "Pembrokeshire",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "POW", "state_name" => "Powys",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "RCT", "state_name" => "Rhondda, Cynon, Taff",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "SWA", "state_name" => "Swansea",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "TOF", "state_name" => "Torfaen",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "VGL", "state_name" => "Vale of Glamorgan, The",]);
        DB::table("states")->insert(["country_code" => "GB", "state_code" => "WRX", "state_name" => "Wrexham",]);

        // United States
        DB::table("states")->insert(["country_code" => "US", "state_code" => "AL", "state_name" => "Alabama",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "AK", "state_name" => "Alaska",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "AZ", "state_name" => "Arizona",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "AR", "state_name" => "Arkansas",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "CA", "state_name" => "California",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "CO", "state_name" => "Colorado",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "CT", "state_name" => "Connecticut",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "DE", "state_name" => "Delaware",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "FL", "state_name" => "Florida",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "GA", "state_name" => "Georgia",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "HI", "state_name" => "Hawaii",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "ID", "state_name" => "Idaho",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "IL", "state_name" => "Illinois",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "IN", "state_name" => "Indiana",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "IA", "state_name" => "Iowa",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "KS", "state_name" => "Kansas",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "KY", "state_name" => "Kentucky",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "LA", "state_name" => "Louisiana",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "ME", "state_name" => "Maine",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "MD", "state_name" => "Maryland",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "MA", "state_name" => "Massachusetts",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "MI", "state_name" => "Michigan",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "MN", "state_name" => "Minnesota",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "MS", "state_name" => "Mississippi",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "MO", "state_name" => "Missouri",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "MT", "state_name" => "Montana",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "NE", "state_name" => "Nebraska",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "NV", "state_name" => "Nevada",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "NH", "state_name" => "New Hampshire",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "NJ", "state_name" => "New Jersey",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "NM", "state_name" => "New Mexico",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "NY", "state_name" => "New York",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "NC", "state_name" => "North Carolina",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "ND", "state_name" => "North Dakota",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "OH", "state_name" => "Ohio",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "OK", "state_name" => "Oklahoma",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "OR", "state_name" => "Oregon",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "PA", "state_name" => "Pennsylvania",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "RI", "state_name" => "Rhode Island",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "SC", "state_name" => "South Carolina",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "SD", "state_name" => "South Dakota",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "TN", "state_name" => "Tennessee",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "TX", "state_name" => "Texas",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "UT", "state_name" => "Utah",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "VT", "state_name" => "Vermont",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "VA", "state_name" => "Virginia",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "WA", "state_name" => "Washington",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "WV", "state_name" => "West Virginia",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "WI", "state_name" => "Wisconsin",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "WY", "state_name" => "Wyoming",]);
        DB::table("states")->insert(["country_code" => "US", "state_code" => "DC", "state_name" => "District of Columbia",]);

        // United States Minor Outlying Islands
        DB::table("states")->insert(["country_code" => "UM", "state_code" => "81", "state_name" => "Baker Island",]);
        DB::table("states")->insert(["country_code" => "UM", "state_code" => "84", "state_name" => "Howland Island",]);
        DB::table("states")->insert(["country_code" => "UM", "state_code" => "86", "state_name" => "Jarvis Island",]);
        DB::table("states")->insert(["country_code" => "UM", "state_code" => "67", "state_name" => "Johnston Atoll",]);
        DB::table("states")->insert(["country_code" => "UM", "state_code" => "89", "state_name" => "Kingman Reef",]);
        DB::table("states")->insert(["country_code" => "UM", "state_code" => "71", "state_name" => "Midway Islands",]);
        DB::table("states")->insert(["country_code" => "UM", "state_code" => "76", "state_name" => "Navassa Island",]);
        DB::table("states")->insert(["country_code" => "UM", "state_code" => "95", "state_name" => "Palmyra Atoll",]);
        DB::table("states")->insert(["country_code" => "UM", "state_code" => "79", "state_name" => "Wake Island",]);

        // Uruguay
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "AR", "state_name" => "Artigas",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "CA", "state_name" => "Canelones",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "CL", "state_name" => "Cerro Largo",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "CO", "state_name" => "Colonia",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "DU", "state_name" => "Durazno",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "FS", "state_name" => "Flores",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "FD", "state_name" => "Florida",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "LA", "state_name" => "Lavalleja",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "MA", "state_name" => "Maldonado",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "MO", "state_name" => "Montevideo",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "PA", "state_name" => "Paysandú",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "RN", "state_name" => "Río Negro",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "RV", "state_name" => "Rivera",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "RO", "state_name" => "Rocha",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "SA", "state_name" => "Salto",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "SJ", "state_name" => "San José",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "SO", "state_name" => "Soriano",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "TA", "state_name" => "Tacuarembó",]);
        DB::table("states")->insert(["country_code" => "UY", "state_code" => "TT", "state_name" => "Treinta y Tres",]);

        // Uzbekistan
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "TK", "state_name" => "Toshkent",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "AN", "state_name" => "Andijon",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "BU", "state_name" => "Buxoro",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "FA", "state_name" => "Farg‘ona",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "JI", "state_name" => "Jizzax",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "NG", "state_name" => "Namangan",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "NW", "state_name" => "Navoiy",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "QA", "state_name" => "Qashqadaryo",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "SA", "state_name" => "Samarqand",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "SI", "state_name" => "Sirdaryo",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "SU", "state_name" => "Surxondaryo",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "TO", "state_name" => "Toshkent",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "XO", "state_name" => "Xorazm",]);
        DB::table("states")->insert(["country_code" => "UZ", "state_code" => "QR", "state_name" => "Qoraqalpog‘iston Respublikasi",]);
        // Vanuatu
        DB::table("states")->insert(["country_code" => "VU", "state_code" => "MAP", "state_name" => "Malampa",]);
        DB::table("states")->insert(["country_code" => "VU", "state_code" => "PAM", "state_name" => "Pénama",]);
        DB::table("states")->insert(["country_code" => "VU", "state_code" => "SAM", "state_name" => "Sanma",]);
        DB::table("states")->insert(["country_code" => "VU", "state_code" => "SEE", "state_name" => "Shéfa",]);
        DB::table("states")->insert(["country_code" => "VU", "state_code" => "TAE", "state_name" => "Taféa",]);
        DB::table("states")->insert(["country_code" => "VU", "state_code" => "TOB", "state_name" => "Torba",]);

        // Venezuela, Bolivarian Republic of
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "W", "state_name" => "Dependencias Federales",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "A", "state_name" => "Distrito Capital",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "Z", "state_name" => "Amazonas",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "B", "state_name" => "Anzoátegui",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "C", "state_name" => "Apure",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "D", "state_name" => "Aragua",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "E", "state_name" => "Barinas",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "F", "state_name" => "Bolívar",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "G", "state_name" => "Carabobo",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "H", "state_name" => "Cojedes",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "Y", "state_name" => "Delta Amacuro",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "I", "state_name" => "Falcón",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "J", "state_name" => "Guárico",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "K", "state_name" => "Lara",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "L", "state_name" => "Mérida",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "M", "state_name" => "Miranda",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "N", "state_name" => "Monagas",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "O", "state_name" => "Nueva Esparta",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "P", "state_name" => "Portuguesa",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "R", "state_name" => "Sucre",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "S", "state_name" => "Táchira",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "T", "state_name" => "Trujillo",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "X", "state_name" => "Vargas",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "U", "state_name" => "Yaracuy",]);
        DB::table("states")->insert(["country_code" => "VE", "state_code" => "V", "state_name" => "Zulia",]);

        // Viet Nam
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "44", "state_name" => "An Giang",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "43", "state_name" => "Bà Rịa - Vũng Tàu",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "54", "state_name" => "Bắc Giang",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "53", "state_name" => "Bắc Kạn",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "55", "state_name" => "Bạc Liêu",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "56", "state_name" => "Bắc Ninh",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "50", "state_name" => "Bến Tre",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "31", "state_name" => "Bình Định",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "57", "state_name" => "Bình Dương",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "58", "state_name" => "Bình Phước",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "40", "state_name" => "Bình Thuận",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "59", "state_name" => "Cà Mau",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "04", "state_name" => "Cao Bằng",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "33", "state_name" => "Đắk Lắk",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "72", "state_name" => "Đắk Nông",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "71", "state_name" => "Điện Biên",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "39", "state_name" => "Đồng Nai",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "45", "state_name" => "Đồng Tháp",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "30", "state_name" => "Gia Lai",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "03", "state_name" => "Hà Giang",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "63", "state_name" => "Hà Nam",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "23", "state_name" => "Hà Tĩnh",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "61", "state_name" => "Hải Dương",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "73", "state_name" => "Hậu Giang",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "14", "state_name" => "Hòa Bình",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "66", "state_name" => "Hưng Yên",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "34", "state_name" => "Khánh Hòa",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "47", "state_name" => "Kiến Giang",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "28", "state_name" => "Kon Tum",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "01", "state_name" => "Lai Châu",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "35", "state_name" => "Lâm Đồng",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "09", "state_name" => "Lạng Sơn",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "02", "state_name" => "Lào Cai",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "41", "state_name" => "Long An",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "67", "state_name" => "Nam Định",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "22", "state_name" => "Nghệ An",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "18", "state_name" => "Ninh Bình",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "36", "state_name" => "Ninh Thuận",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "68", "state_name" => "Phú Thọ",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "32", "state_name" => "Phú Yên",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "24", "state_name" => "Quảng Bình",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "27", "state_name" => "Quảng Nam",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "29", "state_name" => "Quảng Ngãi",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "13", "state_name" => "Quảng Ninh",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "25", "state_name" => "Quảng Trị",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "52", "state_name" => "Sóc Trăng",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "05", "state_name" => "Sơn La",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "37", "state_name" => "Tây Ninh",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "20", "state_name" => "Thái Bình",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "69", "state_name" => "Thái Nguyên",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "21", "state_name" => "Thanh Hóa",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "26", "state_name" => "Thừa Thiên-Huế",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "46", "state_name" => "Tiền Giang",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "51", "state_name" => "Trà Vinh",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "07", "state_name" => "Tuyên Quang",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "49", "state_name" => "Vĩnh Long",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "70", "state_name" => "Vĩnh Phúc",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "06", "state_name" => "Yên Bái",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "CT", "state_name" => "Can Tho",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "DN", "state_name" => "Da Nang",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "HN", "state_name" => "Ha Noi",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "HP", "state_name" => "Hai Phong",]);
        DB::table("states")->insert(["country_code" => "VN", "state_code" => "SG", "state_name" => "Ho Chi Minh",]);

        // Virgin Islands, British (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "VG", "state_code" => "VG", "state_name" => "Virgin Islands, British",]);

        // Virgin Islands, U.S. (The United States Virgin Islands, an outlying area of the United States)
        DB::table("states")->insert(["country_code" => "VI", "state_code" => "VI", "state_name" => "U.S. Virgin Islands",]);

        // Wallis and Futuna
        DB::table("states")->insert(["country_code" => "WF", "state_code" => "AL", "state_name" => "Alo",]);
        DB::table("states")->insert(["country_code" => "WF", "state_code" => "SG", "state_name" => "Sigave",]);
        DB::table("states")->insert(["country_code" => "WF", "state_code" => "UV", "state_name" => "Uvea",]);

        // Western Sahara (Currently no ISO 3166-2 codes are defined for this country.)
        DB::table("states")->insert(["country_code" => "EH", "state_code" => "EH", "state_name" => "Western Sahara",]);

        // Yemen
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "SA", "state_name" => "Amānat al ‘Āşimah",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "AB", "state_name" => "Abyan",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "AD", "state_name" => "‘Adan",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "DA", "state_name" => "Aḑ Ḑāli‘",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "BA", "state_name" => "Al Bayḑā’",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "HU", "state_name" => "Al Ḩudaydah",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "JA", "state_name" => "Al Jawf",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "MR", "state_name" => "Al Mahrah",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "MW", "state_name" => "Al Maḩwīt",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "AM", "state_name" => "‘Amrān",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "SU", "state_name" => "Arkhabīl Suquţrá",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "DH", "state_name" => "Dhamār",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "HD", "state_name" => "Ḩaḑramawt",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "HJ", "state_name" => "Ḩajjah",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "IB", "state_name" => "Ibb",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "LA", "state_name" => "Laḩij",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "MA", "state_name" => "Ma’rib",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "RA", "state_name" => "Raymah",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "SD", "state_name" => "Şāʻdah",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "SN", "state_name" => "Şanʻā’",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "SH", "state_name" => "Shabwah",]);
        DB::table("states")->insert(["country_code" => "YE", "state_code" => "TA", "state_name" => "Tāʻizz",]);

        // Zambia
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "02", "state_name" => "Central",]);
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "08", "state_name" => "Copperbelt",]);
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "03", "state_name" => "Eastern",]);
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "04", "state_name" => "Luapula",]);
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "09", "state_name" => "Lusaka",]);
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "05", "state_name" => "Northern",]);
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "06", "state_name" => "North-Western",]);
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "07", "state_name" => "Southern",]);
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "01", "state_name" => "Western",]);
        DB::table("states")->insert(["country_code" => "ZM", "state_code" => "10", "state_name" => "Muchinga",]);

        // Zimbabwe
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"BU", "state_name" => "Bulawayo",]);
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"HA", "state_name" => "Harare",]);
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"MA", "state_name" => "Manicaland",]);
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"MC", "state_name" => "Mashonaland Central",]);
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"ME", "state_name" => "Mashonaland East",]);
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"MW", "state_name" => "Mashonaland West",]);
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"MV", "state_name" => "Masvingo",]);
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"MN", "state_name" => "Matabeleland North",]);
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"MS", "state_name" => "Matabeleland South",]);
        DB::table("states")->insert(["country_code" => "ZW", "state_code" =>"MI", "state_name" => "Midlands",]);
    }
}
