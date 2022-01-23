<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
        /******************************* Start of A *******************************/
            [
                "name" => "Afghanistan",
                "code" => "AF",
                "phone_code" => "+93"
            ],
            [
                "name" => "Afrique du Sud",
                "code" => "ZA",
                "phone_code" => "+27"
            ],
            [
                "name" => "Åland",
                "code" => "AX",
                "phone_code" => "+358"
            ],
            [
                "name" => "Albanie",
                "code" => "AL",
                "phone_code" => "+355"
            ],
            [
                "name" => "Algérie",
                "code" => "DZ",
                "phone_code" => "+213"
            ],
            [
                "name" => "Allemagne",
                "code" => "DE",
                "phone_code" => "+49"
            ],
            [
                "name" => "Andorre",
                "code" => "AD",
                "phone_code" => "+376"
            ],
            [
                "name" => "Angola",
                "code" => "AO",
                "phone_code" => "+244"
            ],
            [
                "name" => "Anguilla",
                "code" => "AI",
                "phone_code" => "+1"
            ],
            [
                "name" => "Antigua et Barbuda",
                "code" => "AG",
                "phone_code" => "+1"
            ],
            [
                "name" => "Antilles néerlandaises",
                "code" => "AN",
                "phone_code" => "+599"
            ],
            [
                "name" => "Arabie saoudite",
                "code" => "SA",
                "phone_code" => "+966"
            ],
            [
                "name" => "Argentine",
                "code" => "AR",
                "phone_code" => "+54"
            ],
            [
                "name" => "Arménie",
                "code" => "AM",
                "phone_code" => "+374"
            ],
            [
                "name" => "Aruba",
                "code" => "AW",
                "phone_code" => "+297"
            ],
            [
                "name" => "Australie",
                "code" => "AU",
                "phone_code" => "+61"
            ],
            [
                "name" => "Autriche",
                "code" => "AI",
                "phone_code" => "+43"
            ],
            [
                "name" => "Azerbaïdjan",
                "code" => "AZ",
                "phone_code" => "+994"
            ],
        /******************************* End of A *******************************/

        /******************************* Start of B *******************************/
            [
                "name" => "Bahamas",
                "code" => "BS",
                "phone_code" => "+1"
            ],
            [
                "name" => "Bahreïn",
                "code" => "BH",
                "phone_code" => "+973"
            ],
            [
                "name" => "Bailliage de Guernesey",
                "code" => "GG",
                "phone_code" => "+44"
            ],
            [
                "name" => "Bangladesh",
                "code" => "BD",
                "phone_code" => "+880"
            ],
            [
                "name" => "Barbade",
                "code" => "BB",
                "phone_code" => "+1"
            ],
            [
                "name" => "Bélarus",
                "code" => "BY",
                "phone_code" => "+375"
            ],
            [
                "name" => "Belgique",
                "code" => "BE",
                "phone_code" => "+32"
            ],
            [
                "name" => "Belize",
                "code" => "BZ",
                "phone_code" => "+501"
            ],
            [
                "name" => "Bénin",
                "code" => "BJ",
                "phone_code" => "+229"
            ],
            [
                "name" => "Bermudes",
                "code" => "BM",
                "phone_code" => "+1"
            ],
            [
                "name" => "Bhoutan",
                "code" => "BT",
                "phone_code" => "+975"
            ],
            [
                "name" => "Bolivie",
                "code" => "BO",
                "phone_code" => "+591"
            ],
            [
                "name" => "Bosnie-Herzégovine",
                "code" => "BA",
                "phone_code" => "+387"
            ],
            [
                "name" => "Botswana",
                "code" => "BW",
                "phone_code" => "+267"
            ],
            [
                "name" => "Brésil",
                "code" => "BR",
                "phone_code" => "+55"
            ],
            [
                "name" => "Brunéi Darussalam",
                "code" => "BN",
                "phone_code" => "+673"
            ],
            [
                "name" => "Bulgarie",
                "code" => "BG",
                "phone_code" => "+359"
            ],
            [
                "name" => "Burkina Faso",
                "code" => "BF",
                "phone_code" => "+226"
            ],
            [
                "name" => "Burundi",
                "code" => "BI",
                "phone_code" => "+257"
            ],
        /******************************* End of B *******************************/

        /******************************* Start of C *******************************/
            [
                "name" => "Cambodge",
                "code" => "KH",
                "phone_code" => "+855"
            ],
            [
                "name" => "Cameroun",
                "code" => "CM",
                "phone_code" => "+237"
            ],
            [
                "name" => "Canada",
                "code" => "CA",
                "phone_code" => "+1"
            ],
            [
                "name" => "Cap-Vert",
                "code" => "CV",
                "phone_code" => "+238"
            ],
            [
                "name" => "Chili",
                "code" => "CL",
                "phone_code" => "+56"
            ],
            [
                "name" => "Chine",
                "code" => "CN",
                "phone_code" => "+86"
            ],
            [
                "name" => "Chypre",
                "code" => "CY",
                "phone_code" => "+357"
            ],
            [
                "name" => "Colombie",
                "code" => "CO",
                "phone_code" => "+57"
            ],
            [
                "name" => "Comores",
                "code" => "KM",
                "phone_code" => "+269"
            ],
            [
                "name" => "Corée du Nord",
                "code" => "KP",
                "phone_code" => "+850"
            ],
            [
                "name" => "Corée du Sud",
                "code" => "KR",
                "phone_code" => "+82"
            ],
            [
                "name" => "Costa Rica",
                "code" => "CR",
                "phone_code" => "+506"
            ],
            [
                "name" => "Côte d'Ivoire",
                "code" => "CI",
                "phone_code" => "+225"
            ],
            [
                "name" => "Croatie",
                "code" => "HR",
                "phone_code" => "+385"
            ],
            [
                "name" => "Cuba",
                "code" => "CU",
                "phone_code" => "+53"
            ],
        /******************************* End of C *******************************/

        /******************************* Start of D *******************************/
            [
                "name" => "Danemark",
                "code" => "DK",
                "phone_code" => "+45"
            ],
            [
                "name" => "Djibouti",
                "code" => "DJ",
                "phone_code" => "+253"
            ],
            [
                "name" => "Dominique",
                "code" => "DM",
                "phone_code" => "+1"
            ],
        /******************************* End of D *******************************/

        /******************************* Start of E *******************************/
            [
                "name" => "Égypte",
                "code" => "EG",
                "phone_code" => "+20"
            ],
            [
                "name" => "El Salvador",
                "code" => "SV",
                "phone_code" => "+503"
            ],
            [
                "name" => "Émirats arabes unis",
                "code" => "AE",
                "phone_code" => "+971"
            ],
            [
                "name" => "Équateur",
                "code" => "EC",
                "phone_code" => "+593"
            ],
            [
                "name" => "Érythrée",
                "code" => "ER",
                "phone_code" => "+291"
            ],
            [
                "name" => "Espagne",
                "code" => "ES",
                "phone_code" => "+34"
            ],
            [
                "name" => "Estonie",
                "code" => "EE",
                "phone_code" => "+372"
            ],
            [
                "name" => "États fédérés de Micronésie",
                "code" => "FM",
                "phone_code" => "+691"
            ],
            [
                "name" => "État de la cité du Vatican",
                "code" => "VA",
                "phone_code" => "+39"
            ],
            [
                "name" => "États-Unis",
                "code" => "US",
                "phone_code" => "+1"
            ],
            [
                "name" => "Éthiopie",
                "code" => "ET",
                "phone_code" => "+251"
            ],
        /******************************* End of E *******************************/

        /******************************* Start of F *******************************/
            [
                "name" => "Fidji",
                "code" => "FJ",
                "phone_code" => "+679"
            ],
            [
                "name" => "Finlande",
                "code" => "FI",
                "phone_code" => "+358"
            ],
            [
                "name" => "France",
                "code" => "FR",
                "phone_code" => "+33"
            ],
        /******************************* End of F *******************************/

        /******************************* Start of G *******************************/
            [
                "name" => "Gabon",
                "code" => "GA",
                "phone_code" => "+241"
            ],
            [
                "name" => "Gambie",
                "code" => "GM",
                "phone_code" => "+220"
            ],
            [
                "name" => "Géorgie",
                "code" => "GE",
                "phone_code" => "+995"
            ],
            [
                "name" => "Géorgie du Sud et les îles Sandwich du Sud",
                "code" => "GS",
                "phone_code" => "+500"
            ],
            [
                "name" => "Ghana",
                "code" => "GH",
                "phone_code" => "+233"
            ],
            [
                "name" => "Gibraltar",
                "code" => "GI",
                "phone_code" => "+350"
            ],
            [
                "name" => "Grèce",
                "code" => "GR",
                "phone_code" => "+30"
            ],
            [
                "name" => "Grenade",
                "code" => "GD",
                "phone_code" => "+1"
            ],
            [
                "name" => "Groenland",
                "code" => "GL",
                "phone_code" => "+299"
            ],
            [
                "name" => "Guadeloupe",
                "code" => "GP",
                "phone_code" => "+590"
            ],
            [
                "name" => "Guam",
                "code" => "GU",
                "phone_code" => "+1"
            ],
            [
                "name" => "Guatemala",
                "code" => "GT",
                "phone_code" => "+502"
            ],
            [
                "name" => "Guinée",
                "code" => "GN",
                "phone_code" => "+224"
            ],
            [
                "name" => "Guinée-Bissau",
                "code" => "GW",
                "phone_code" => "+245"
            ],
            [
                "name" => "Guinée équatoriale",
                "code" => "GQ",
                "phone_code" => "+240"
            ],
            [
                "name" => "Guyana",
                "code" => "GY",
                "phone_code" => "+592"
            ],
            [
                "name" => "Guyane française",
                "code" => "GF",
                "phone_code" => "+594"
            ],
        /******************************* End of G *******************************/

        /******************************* Start of H *******************************/
            [
                "name" => "Haïti",
                "code" => "HT",
                "phone_code" => "+509"
            ],
            [
                "name" => "Honduras",
                "code" => "HN",
                "phone_code" => "+504"
            ],
            [
                "name" => "Hong Kong",
                "code" => "HK",
                "phone_code" => "+852"
            ],
            [
                "name" => "Hongrie",
                "code" => "HU",
                "phone_code" => "+36"
            ],
        /******************************* End of H *******************************/

        /******************************* Start of I *******************************/
            [
                "name" => "Île de Man",
                "code" => "IM",
                "phone_code" => "+44"
            ],
            [
                "name" => "Île Norfolk",
                "code" => "NF",
                "phone_code" => "+6723"
            ],
            [
                "name" => "Îles Caïmans",
                "code" => "KY",
                "phone_code" => "+1"
            ],
            [
                "name" => "Îles Cocos - Keeling",
                "code" => "CC",
                "phone_code" => "+61"
            ],
            [
                "name" => "Îles Cook",
                "code" => "CK",
                "phone_code" => "+682"
            ],
            [
                "name" => "Îles Féroé",
                "code" => "FO",
                "phone_code" => "+298"
            ],
            [
                "name" => "Îles Malouines",
                "code" => "FK",
                "phone_code" => "+500"
            ],
            [
                "name" => "Îles Mariannes du Nord",
                "code" => "MP",
                "phone_code" => "+1"
            ],
            [
                "name" => "Îles Marshall",
                "code" => "MH",
                "phone_code" => "+692"
            ],
            [
                "name" => "Îles Pitcairn",
                "code" => "PN",
                "phone_code" => "+870"
            ],
            [
                "name" => "Îles Salomon",
                "code" => "SB",
                "phone_code" => "+677"
            ],
            [
                "name" => "Îles Turks et Caïques",
                "code" => "TC",
                "phone_code" => "+1"
            ],
            [
                "name" => "Îles Vierges britanniques",
                "code" => "VG",
                "phone_code" => "+1"
            ],
            [
                "name" => "Îles Vierges des États-Unis",
                "code" => "VI",
                "phone_code" => "+1"
            ],
            [
                "name" => "Inde",
                "code" => "IN",
                "phone_code" => "+91"
            ],
            [
                "name" => "Indonésie",
                "code" => "ID",
                "phone_code" => "+62"
            ],
            [
                "name" => "Irak",
                "code" => "IQ",
                "phone_code" => "+964"
            ],
            [
                "name" => "Iran",
                "code" => "IR",
                "phone_code" => "+98"
            ],
            [
                "name" => "Irlande",
                "code" => "IE",
                "phone_code" => "+353"
            ],
            [
                "name" => "Islande",
                "code" => "IS",
                "phone_code" => "+354"
            ],
            [
                "name" => "Israël",
                "code" => "IL",
                "phone_code" => "+972"
            ],
            [
                "name" => "Italie",
                "code" => "IT",
                "phone_code" => "+39"
            ],
        /******************************* End of I *******************************/

        /******************************* Start of J *******************************/
            [
                "name" => "Jamaïque",
                "code" => "JM",
                "phone_code" => "+1"
            ],
            [
                "name" => "Japon",
                "code" => "JP",
                "phone_code" => "+81"
            ],
            [
                "name" => "Jersey",
                "code" => "JE",
                "phone_code" => "+44"
            ],
            [
                "name" => "Jordanie",
                "code" => "JO",
                "phone_code" => "+962"
            ],
        /******************************* End of J *******************************/

        /******************************* Start of K *******************************/
            [
                "name" => "Kazakhstan",
                "code" => "KZ",
                "phone_code" => "+7"
            ],
            [
                "name" => "Kenya",
                "code" => "KE",
                "phone_code" => "+254"
            ],
            [
                "name" => "Kirghizistan",
                "code" => "KG",
                "phone_code" => "+996"
            ],
            [
                "name" => "Kiribati",
                "code" => "KI",
                "phone_code" => "+686"
            ],
            [
                "name" => "Koweït",
                "code" => "KW",
                "phone_code" => "+965"
            ],
        /******************************* End of K *******************************/

        /******************************* Start of L *******************************/
            [
                "name" => "Laos",
                "code" => "LA",
                "phone_code" => "+856"
            ],
            [
                "name" => "Lesotho",
                "code" => "LS",
                "phone_code" => "+266"
            ],
            [
                "name" => "Lettonie",
                "code" => "LV",
                "phone_code" => "+371"
            ],
            [
                "name" => "Liban",
                "code" => "LB",
                "phone_code" => "+961"
            ],
            [
                "name" => "Libéria",
                "code" => "LR",
                "phone_code" => "+231"
            ],
            [
                "name" => "Libye",
                "code" => "LY",
                "phone_code" => "+218"
            ],
            [
                "name" => "Liechtenstein",
                "code" => "LI",
                "phone_code" => "+423"
            ],
            [
                "name" => "Lituanie",
                "code" => "LT",
                "phone_code" => "+370"
            ],
            [
                "name" => "Luxembourg",
                "code" => "LU",
                "phone_code" => "+352"
            ],
        /******************************* End of L *******************************/

        /******************************* Start of M *******************************/
            [
                "name" => "Macao",
                "code" => "MO",
                "phone_code" => "+853"
            ],
            [
                "name" => "Macédoine",
                "code" => "MK",
                "phone_code" => "+389"
            ],
            [
                "name" => "Madagascar",
                "code" => "MG",
                "phone_code" => "+261"
            ],
            [
                "name" => "Malaisie",
                "code" => "MY",
                "phone_code" => "+60"
            ],
            [
                "name" => "Malawi",
                "code" => "MW",
                "phone_code" => "+265"
            ],
            [
                "name" => "Maldives",
                "code" => "MV",
                "phone_code" => "+960"
            ],
            [
                "name" => "Mali",
                "code" => "ML",
                "phone_code" => "+223"
            ],
            [
                "name" => "Malte",
                "code" => "MT",
                "phone_code" => "+356"
            ],
            [
                "name" => "Maroc",
                "code" => "MA",
                "phone_code" => "+212"
            ],
            [
                "name" => "Martinique",
                "code" => "MQ",
                "phone_code" => "+596"
            ],
            [
                "name" => "Maurice",
                "code" => "MU",
                "phone_code" => "+230"
            ],
            [
                "name" => "Mauritanie",
                "code" => "MR",
                "phone_code" => "+222"
            ],
            [
                "name" => "Mayotte",
                "code" => "YT",
                "phone_code" => "+262"
            ],
            [
                "name" => "Mexique",
                "code" => "MX",
                "phone_code" => "+52"
            ],
            [
                "name" => "Moldavie",
                "code" => "MD",
                "phone_code" => "+373"
            ],
            [
                "name" => "Monaco",
                "code" => "MC",
                "phone_code" => "+377"
            ],
            [
                "name" => "Mongolie",
                "code" => "MN",
                "phone_code" => "+976"
            ],
            [
                "name" => "Monténégro",
                "code" => "ME",
                "phone_code" => "+382"
            ],
            [
                "name" => "Montserrat",
                "code" => "MS",
                "phone_code" => "+1"
            ],
            [
                "name" => "Mozambique",
                "code" => "MZ",
                "phone_code" => "+258"
            ],
            [
                "name" => "Myanmar",
                "code" => "MM",
                "phone_code" => "+95"
            ],
        /******************************* End of M *******************************/

        /******************************* Start of N *******************************/
            [
                "name" => "Namibie",
                "code" => "NA",
                "phone_code" => "+264"
            ],
            [
                "name" => "Nauru",
                "code" => "NR",
                "phone_code" => "+674"
            ],
            [
                "name" => "Népal",
                "code" => "NP",
                "phone_code" => "+977"
            ],
            [
                "name" => "Nicaragua",
                "code" => "NI",
                "phone_code" => "+505"
            ],
            [
                "name" => "Niger",
                "code" => "NE",
                "phone_code" => "+227"
            ],
            [
                "name" => "Nigéria",
                "code" => "NG",
                "phone_code" => "+234"
            ],
            [
                "name" => "Niue",
                "code" => "NU",
                "phone_code" => "+683"
            ],
            [
                "name" => "Norvège",
                "code" => "NO",
                "phone_code" => "+47"
            ],
            [
                "name" => "Nouvelle-Calédonie",
                "code" => "NC",
                "phone_code" => "+687"
            ],
            [
                "name" => "Nouvelle-Zélande",
                "code" => "NZ",
                "phone_code" => "+64"
            ],
        /******************************* End of M *******************************/

        /******************************* Start of O *******************************/
            [
                "name" => "Oman",
                "code" => "OM",
                "phone_code" => "+968"
            ],
            [
                "name" => "Ouganda",
                "code" => "UG",
                "phone_code" => "+256"
            ],
            [
                "name" => "Ouzbékistan",
                "code" => "UZ",
                "phone_code" => "+998"
            ],
        /******************************* End of O *******************************/

        /******************************* Start of P *******************************/
            [
                "name" => "Pakistan",
                "code" => "PK",
                "phone_code" => "+92"
            ],
            [
                "name" => "Palaos",
                "code" => "PW",
                "phone_code" => "+680"
            ],
            [
                "name" => "Palestine",
                "code" => "PS",
                "phone_code" => "+970"
            ],
            [
                "name" => "Panama",
                "code" => "PA",
                "phone_code" => "+507"
            ],
            [
                "name" => "Papouasie-Nouvelle-Guinée",
                "code" => "PG",
                "phone_code" => "+675"
            ],
            [
                "name" => "Paraguay",
                "code" => "PY",
                "phone_code" => "+595"
            ],
            [
                "name" => "Pays-Bas",
                "code" => "NL",
                "phone_code" => "+31"
            ],
            [
                "name" => "Pérou",
                "code" => "PE",
                "phone_code" => "+51"
            ],
            [
                "name" => "Philippines",
                "code" => "PH",
                "phone_code" => "+63"
            ],
            [
                "name" => "Pologne",
                "code" => "PL",
                "phone_code" => "+48"
            ],
            [
                "name" => "Polynésie française",
                "code" => "PF",
                "phone_code" => "+689"
            ],
            [
                "name" => "Porto Rico",
                "code" => "PR",
                "phone_code" => "+1"
            ],
            [
                "name" => "Portugal",
                "code" => "PT",
                "phone_code" => "+351"
            ],
        /******************************* End of P *******************************/

        /******************************* Start of Q *******************************/
            [
                "name" => "Qatar",
                "code" => "QA",
                "phone_code" => "+974"
            ],
        /******************************* End of Q *******************************/

        /******************************* Start of R *******************************/
            [
                "name" => "République centrafricaine",
                "code" => "CF",
                "phone_code" => "+236"
            ],
            [
                "name" => "République démocratique du Congo",
                "code" => "CD",
                "phone_code" => "+243"
            ],
            [
                "name" => "République dominicaine",
                "code" => "DO",
                "phone_code" => "+1"
            ],
            [
                "name" => "République du Congo",
                "code" => "CG",
                "phone_code" => "+242"
            ],
            [
                "name" => "République Tchèque",
                "code" => "CZ",
                "phone_code" => "+420"
            ],
            [
                "name" => "Réunion",
                "code" => "RE",
                "phone_code" => "+262"
            ],
            [
                "name" => "Roumanie",
                "code" => "RO",
                "phone_code" => "+40"
            ],
            [
                "name" => "Royaume-Uni",
                "code" => "GB",
                "phone_code" => "+44"
            ],
            [
                "name" => "Russie",
                "code" => "RU",
                "phone_code" => "+7"
            ],
            [
                "name" => "Rwanda",
                "code" => "RW",
                "phone_code" => "+250"
            ],
        /******************************* End of R *******************************/

        /******************************* Start of S *******************************/
            [
                "name" => "Sahara occidental",
                "code" => "EH",
                "phone_code" => "+212"
            ],
            [
                "name" => "Saint Barthélemy",
                "code" => "BL",
                "phone_code" => "+590"
            ],
            [
                "name" => "Sainte-Hélène",
                "code" => "SH",
                "phone_code" => "+290"
            ],
            [
                "name" => "Sainte-Lucie",
                "code" => "LC",
                "phone_code" => "+1"
            ],
            [
                "name" => "Saint-Kitts-et-Nevis",
                "code" => "KN",
                "phone_code" => "+1"
            ],
            [
                "name" => "Saint-Marin",
                "code" => "SM",
                "phone_code" => "+378"
            ],
            [
                "name" => "Saint-Martin",
                "code" => "MF",
                "phone_code" => "+590"
            ],
            [
                "name" => "Saint-Pierre et Miquelon",
                "code" => "PM",
                "phone_code" => "+508"
            ],
            [
                "name" => "Saint-Vincent et les Grenadines",
                "code" => "VC",
                "phone_code" => "+1"
            ],
            [
                "name" => "Samoa",
                "code" => "WS",
                "phone_code" => "+685"
            ],
            [
                "name" => "Samoa américaines",
                "code" => "AS",
                "phone_code" => "+1"
            ],
            [
                "name" => "Sao Tomé et Principe",
                "code" => "ST",
                "phone_code" => "+239"
            ],
            [
                "name" => "Sénégal",
                "code" => "SN",
                "phone_code" => "+221"
            ],
            [
                "name" => "Serbie",
                "code" => "RS",
                "phone_code" => "+381"
            ],
            [
                "name" => "Serbie-et-Monténégro",
                "code" => "CS",
                "phone_code" => "+381"
            ],
            [
                "name" => "Seychelles",
                "code" => "SC",
                "phone_code" => "+248"
            ],
            [
                "name" => "Sierra Leone",
                "code" => "SL",
                "phone_code" => "+232"
            ],
            [
                "name" => "Singapour",
                "code" => "SG",
                "phone_code" => "+65"
            ],
            [
                "name" => "Slovaquie",
                "code" => "SK",
                "phone_code" => "+421"
            ],
            [
                "name" => "Slovénie",
                "code" => "SI",
                "phone_code" => "+386"
            ],
            [
                "name" => "Somalie",
                "code" => "SO",
                "phone_code" => "+252"
            ],
            [
                "name" => "Soudan",
                "code" => "SD",
                "phone_code" => "+249"
            ],
            [
                "name" => "Soudan du Sud",
                "code" => "SS",
                "phone_code" => "+211"
            ],
            [
                "name" => "Sri Lanka",
                "code" => "LK",
                "phone_code" => "+94"
            ],
            [
                "name" => "Suède",
                "code" => "SE",
                "phone_code" => "+46"
            ],
            [
                "name" => "Suisse",
                "code" => "CH",
                "phone_code" => "+41"
            ],
            [
                "name" => "Suriname",
                "code" => "SR",
                "phone_code" => "+597"
            ],
            [
                "name" => "Swaziland",
                "code" => "SZ",
                "phone_code" => "+268"
            ],
            [
                "name" => "Syrie",
                "code" => "SY",
                "phone_code" => "+963"
            ],
        /******************************* End of S *******************************/

        /******************************* Start of T *******************************/
            [
                "name" => "Tadjikistan",
                "code" => "TJ",
                "phone_code" => "+992"
            ],
            [
                "name" => "Taïwan",
                "code" => "TW",
                "phone_code" => "+886"
            ],
            [
                "name" => "Tanzanie",
                "code" => "TZ",
                "phone_code" => "+255"
            ],
            [
                "name" => "Tchad",
                "code" => "TD",
                "phone_code" => "+235"
            ],
            [
                "name" => "Territoire britannique de l'océan Indien",
                "code" => "IO",
                "phone_code" => "+246"
            ],
            [
                "name" => "Thaïlande",
                "code" => "TH",
                "phone_code" => "+66"
            ],
            [
                "name" => "Timor oriental",
                "code" => "TL",
                "phone_code" => "+670"
            ],
            [
                "name" => "Togo",
                "code" => "TG",
                "phone_code" => "+228"
            ],
            [
                "name" => "Tokelau",
                "code" => "TK",
                "phone_code" => "+690"
            ],
            [
                "name" => "Tonga",
                "code" => "TO",
                "phone_code" => "+676"
            ],
            [
                "name" => "Trinité et Tobago",
                "code" => "TT",
                "phone_code" => "+1"
            ],
            [
                "name" => "Tunisie",
                "code" => "TN",
                "phone_code" => "+216"
            ],
            [
                "name" => "Turkménistan",
                "code" => "TM",
                "phone_code" => "+993"
            ],
            [
                "name" => "Turquie",
                "code" => "TR",
                "phone_code" => "+90"
            ],
            [
                "name" => "Tuvalu",
                "code" => "TV",
                "phone_code" => "+688"
            ],
        /******************************* End of T *******************************/

        /******************************* Start of U *******************************/
            [
                "name" => "Ukraine",
                "code" => "UA",
                "phone_code" => "+380"
            ],
            [
                "name" => "Uruguay",
                "code" => "UY",
                "phone_code" => "+598"
            ],
        /******************************* End of U *******************************/

        /******************************* Start of V *******************************/
            [
                "name" => "Vanuatu",
                "code" => "VU",
                "phone_code" => "+678"
            ],
            [
                "name" => "Venezuela",
                "code" => "VE",
                "phone_code" => "+58"
            ],
            [
                "name" => "Vietnam",
                "code" => "VN",
                "phone_code" => "+84"
            ],
        /******************************* End of V *******************************/

        /******************************* Start of W *******************************/
            [
                "name" => "Wallis et Futuna",
                "code" => "WF",
                "phone_code" => "+681"
            ],
        /******************************* End of W *******************************/

        /******************************* Start of Y *******************************/
            [
                "name" => "Yémen",
                "code" => "YE",
                "phone_code" => "+967"
            ],
        /******************************* End of Y *******************************/

        /******************************* Start of Z *******************************/
            [
                "name" => "Zambie",
                "code" => "ZM",
                "phone_code" => "+260"
            ],
            [
                "name" => "Zimbabwe",
                "code" => "ZW",
                "phone_code" => "+263"
            ]
        /******************************* End of Z *******************************/
        ]);
    }
}
