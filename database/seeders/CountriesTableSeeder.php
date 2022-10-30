<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
            'name' => 'Afghanistan',
            'phone_code' => '+93',
            'short_code' => 'AF'
            ],
            [
            'name' => 'Aland Islands',
            'phone_code' => '+358',
            'short_code' => 'AX'
            ],
            [
            'name' => 'Albania',
            'phone_code' => '+355',
            'short_code' => 'AL'
            ],
            [
            'name' => 'Algeria',
            'phone_code' => '+213',
            'short_code' => 'DZ'
            ],
            [
            'name' => 'AmericanSamoa',
            'phone_code' => '+1684',
            'short_code' => 'AS'
            ],
            [
            'name' => 'Andorra',
            'phone_code' => '+376',
            'short_code' => 'AD'
            ],
            [
            'name' => 'Angola',
            'phone_code' => '+244',
            'short_code' => 'AO'
            ],
            [
            'name' => 'Anguilla',
            'phone_code' => '+1264',
            'short_code' => 'AI'
            ],
            [
            'name' => 'Antarctica',
            'phone_code' => '+672',
            'short_code' => 'AQ'
            ],
            [
            'name' => 'Antigua and Barbuda',
            'phone_code' => '+1268',
            'short_code' => 'AG'
            ],
            [
            'name' => 'Argentina',
            'phone_code' => '+54',
            'short_code' => 'AR'
            ],
            [
            'name' => 'Armenia',
            'phone_code' => '+374',
            'short_code' => 'AM'
            ],
            [
            'name' => 'Aruba',
            'phone_code' => '+297',
            'short_code' => 'AW'
            ],
            [
            'name' => 'Australia',
            'phone_code' => '+61',
            'short_code' => 'AU'
            ],
            [
            'name' => 'Austria',
            'phone_code' => '+43',
            'short_code' => 'AT'
            ],
            [
            'name' => 'Azerbaijan',
            'phone_code' => '+994',
            'short_code' => 'AZ'
            ],
            [
            'name' => 'Bahamas',
            'phone_code' => '+1242',
            'short_code' => 'BS'
            ],
            [
            'name' => 'Bahrain',
            'phone_code' => '+973',
            'short_code' => 'BH'
            ],
            [
            'name' => 'Bangladesh',
            'phone_code' => '+880',
            'short_code' => 'BD'
            ],
            [
            'name' => 'Barbados',
            'phone_code' => '+1246',
            'short_code' => 'BB'
            ],
            [
            'name' => 'Belarus',
            'phone_code' => '+375',
            'short_code' => 'BY'
            ],
            [
            'name' => 'Belgium',
            'phone_code' => '+32',
            'short_code' => 'BE'
            ],
            [
            'name' => 'Belize',
            'phone_code' => '+501',
            'short_code' => 'BZ'
            ],
            [
            'name' => 'Benin',
            'phone_code' => '+229',
            'short_code' => 'BJ'
            ],
            [
            'name' => 'Bermuda',
            'phone_code' => '+1441',
            'short_code' => 'BM'
            ],
            [
            'name' => 'Bhutan',
            'phone_code' => '+975',
            'short_code' => 'BT'
            ],
            [
            'name' => 'Bolivia, Plurinational State of',
            'phone_code' => '+591',
            'short_code' => 'BO'
            ],
            [
            'name' => 'Bosnia and Herzegovina',
            'phone_code' => '+387',
            'short_code' => 'BA'
            ],
            [
            'name' => 'Botswana',
            'phone_code' => '+267',
            'short_code' => 'BW'
            ],
            [
            'name' => 'Brazil',
            'phone_code' => '+55',
            'short_code' => 'BR'
            ],
            [
            'name' => 'British Indian Ocean Territory',
            'phone_code' => '+246',
            'short_code' => 'IO'
            ],
            [
            'name' => 'Brunei Darussalam',
            'phone_code' => '+673',
            'short_code' => 'BN'
            ],
            [
            'name' => 'Bulgaria',
            'phone_code' => '+359',
            'short_code' => 'BG'
            ],
            [
            'name' => 'Burkina Faso',
            'phone_code' => '+226',
            'short_code' => 'BF'
            ],
            [
            'name' => 'Burundi',
            'phone_code' => '+257',
            'short_code' => 'BI'
            ],
            [
            'name' => 'Cambodia',
            'phone_code' => '+855',
            'short_code' => 'KH'
            ],
            [
            'name' => 'Cameroon',
            'phone_code' => '+237',
            'short_code' => 'CM'
            ],
            [
            'name' => 'Canada',
            'phone_code' => '+1',
            'short_code' => 'CA'
            ],
            [
            'name' => 'Cape Verde',
            'phone_code' => '+238',
            'short_code' => 'CV'
            ],
            [
            'name' => 'Cayman Islands',
            'phone_code' => '+ 345',
            'short_code' => 'KY'
            ],
            [
            'name' => 'Central African Republic',
            'phone_code' => '+236',
            'short_code' => 'CF'
            ],
            [
            'name' => 'Chad',
            'phone_code' => '+235',
            'short_code' => 'TD'
            ],
            [
            'name' => 'Chile',
            'phone_code' => '+56',
            'short_code' => 'CL'
            ],
            [
            'name' => 'China',
            'phone_code' => '+86',
            'short_code' => 'CN'
            ],
            [
            'name' => 'Christmas Island',
            'phone_code' => '+61',
            'short_code' => 'CX'
            ],
            [
            'name' => 'Cocos (Keeling) Islands',
            'phone_code' => '+61',
            'short_code' => 'CC'
            ],
            [
            'name' => 'Colombia',
            'phone_code' => '+57',
            'short_code' => 'CO'
            ],
            [
            'name' => 'Comoros',
            'phone_code' => '+269',
            'short_code' => 'KM'
            ],
            [
            'name' => 'Congo',
            'phone_code' => '+242',
            'short_code' => 'CG'
            ],
            [
            'name' => 'Congo, The Democratic Republic of the Congo',
            'phone_code' => '+243',
            'short_code' => 'CD'
            ],
            [
            'name' => 'Cook Islands',
            'phone_code' => '+682',
            'short_code' => 'CK'
            ],
            [
            'name' => 'Costa Rica',
            'phone_code' => '+506',
            'short_code' => 'CR'
            ],
            [
            'name' => 'Cote d`Ivoire',
            'phone_code' => '+225',
            'short_code' => 'CI'
            ],
            [
            'name' => 'Croatia',
            'phone_code' => '+385',
            'short_code' => 'HR'
            ],
            [
            'name' => 'Cuba',
            'phone_code' => '+53',
            'short_code' => 'CU'
            ],
            [
            'name' => 'Cyprus',
            'phone_code' => '+357',
            'short_code' => 'CY'
            ],
            [
            'name' => 'Czech Republic',
            'phone_code' => '+420',
            'short_code' => 'CZ'
            ],
            [
            'name' => 'Denmark',
            'phone_code' => '+45',
            'short_code' => 'DK'
            ],
            [
            'name' => 'Djibouti',
            'phone_code' => '+253',
            'short_code' => 'DJ'
            ],
            [
            'name' => 'Dominica',
            'phone_code' => '+1767',
            'short_code' => 'DM'
            ],
            [
            'name' => 'Dominican Republic',
            'phone_code' => '+1849',
            'short_code' => 'DO'
            ],
            [
            'name' => 'Ecuador',
            'phone_code' => '+593',
            'short_code' => 'EC'
            ],
            [
            'name' => 'Egypt',
            'phone_code' => '+20',
            'short_code' => 'EG'
            ],
            [
            'name' => 'El Salvador',
            'phone_code' => '+503',
            'short_code' => 'SV'
            ],
            [
            'name' => 'Equatorial Guinea',
            'phone_code' => '+240',
            'short_code' => 'GQ'
            ],
            [
            'name' => 'Eritrea',
            'phone_code' => '+291',
            'short_code' => 'ER'
            ],
            [
            'name' => 'Estonia',
            'phone_code' => '+372',
            'short_code' => 'EE'
            ],
            [
            'name' => 'Ethiopia',
            'phone_code' => '+251',
            'short_code' => 'ET'
            ],
            [
            'name' => 'Falkland Islands (Malvinas)',
            'phone_code' => '+500',
            'short_code' => 'FK'
            ],
            [
            'name' => 'Faroe Islands',
            'phone_code' => '+298',
            'short_code' => 'FO'
            ],
            [
            'name' => 'Fiji',
            'phone_code' => '+679',
            'short_code' => 'FJ'
            ],
            [
            'name' => 'Finland',
            'phone_code' => '+358',
            'short_code' => 'FI'
            ],
            [
            'name' => 'France',
            'phone_code' => '+33',
            'short_code' => 'FR'
            ],
            [
            'name' => 'French Guiana',
            'phone_code' => '+594',
            'short_code' => 'GF'
            ],
            [
            'name' => 'French Polynesia',
            'phone_code' => '+689',
            'short_code' => 'PF'
            ],
            [
            'name' => 'Gabon',
            'phone_code' => '+241',
            'short_code' => 'GA'
            ],
            [
            'name' => 'Gambia',
            'phone_code' => '+220',
            'short_code' => 'GM'
            ],
            [
            'name' => 'Georgia',
            'phone_code' => '+995',
            'short_code' => 'GE'
            ],
            [
            'name' => 'Germany',
            'phone_code' => '+49',
            'short_code' => 'DE'
            ],
            [
            'name' => 'Ghana',
            'phone_code' => '+233',
            'short_code' => 'GH'
            ],
            [
            'name' => 'Gibraltar',
            'phone_code' => '+350',
            'short_code' => 'GI'
            ],
            [
            'name' => 'Greece',
            'phone_code' => '+30',
            'short_code' => 'GR'
            ],
            [
            'name' => 'Greenland',
            'phone_code' => '+299',
            'short_code' => 'GL'
            ],
            [
            'name' => 'Grenada',
            'phone_code' => '+1473',
            'short_code' => 'GD'
            ],
            [
            'name' => 'Guadeloupe',
            'phone_code' => '+590',
            'short_code' => 'GP'
            ],
            [
            'name' => 'Guam',
            'phone_code' => '+1671',
            'short_code' => 'GU'
            ],
            [
            'name' => 'Guatemala',
            'phone_code' => '+502',
            'short_code' => 'GT'
            ],
            [
            'name' => 'Guernsey',
            'phone_code' => '+44',
            'short_code' => 'GG'
            ],
            [
            'name' => 'Guinea',
            'phone_code' => '+224',
            'short_code' => 'GN'
            ],
            [
            'name' => 'Guinea-Bissau',
            'phone_code' => '+245',
            'short_code' => 'GW'
            ],
            [
            'name' => 'Guyana',
            'phone_code' => '+595',
            'short_code' => 'GY'
            ],
            [
            'name' => 'Haiti',
            'phone_code' => '+509',
            'short_code' => 'HT'
            ],
            [
            'name' => 'Holy See (Vatican City State)',
            'phone_code' => '+379',
            'short_code' => 'VA'
            ],
            [
            'name' => 'Honduras',
            'phone_code' => '+504',
            'short_code' => 'HN'
            ],
            [
            'name' => 'Hong Kong',
            'phone_code' => '+852',
            'short_code' => 'HK'
            ],
            [
            'name' => 'Hungary',
            'phone_code' => '+36',
            'short_code' => 'HU'
            ],
            [
            'name' => 'Iceland',
            'phone_code' => '+354',
            'short_code' => 'IS'
            ],
            [
            'name' => 'India',
            'phone_code' => '+91',
            'short_code' => 'IN'
            ],
            [
            'name' => 'Indonesia',
            'phone_code' => '+62',
            'short_code' => 'ID'
            ],
            [
            'name' => 'Iran, Islamic Republic of Persian Gulf',
            'phone_code' => '+98',
            'short_code' => 'IR'
            ],
            [
            'name' => 'Iraq',
            'phone_code' => '+964',
            'short_code' => 'IQ'
            ],
            [
            'name' => 'Ireland',
            'phone_code' => '+353',
            'short_code' => 'IE'
            ],
            [
            'name' => 'Isle of Man',
            'phone_code' => '+44',
            'short_code' => 'IM'
            ],
            [
            'name' => 'Israel',
            'phone_code' => '+972',
            'short_code' => 'IL'
            ],
            [
            'name' => 'Italy',
            'phone_code' => '+39',
            'short_code' => 'IT'
            ],
            [
            'name' => 'Jamaica',
            'phone_code' => '+1876',
            'short_code' => 'JM'
            ],
            [
            'name' => 'Japan',
            'phone_code' => '+81',
            'short_code' => 'JP'
            ],
            [
            'name' => 'Jersey',
            'phone_code' => '+44',
            'short_code' => 'JE'
            ],
            [
            'name' => 'Jordan',
            'phone_code' => '+962',
            'short_code' => 'JO'
            ],
            [
            'name' => 'Kazakhstan',
            'phone_code' => '+77',
            'short_code' => 'KZ'
            ],
            [
            'name' => 'Kenya',
            'phone_code' => '+254',
            'short_code' => 'KE'
            ],
            [
            'name' => 'Kiribati',
            'phone_code' => '+686',
            'short_code' => 'KI'
            ],
            [
            'name' => 'Korea, Democratic People`s Republic of Korea',
            'phone_code' => '+850',
            'short_code' => 'KP'
            ],
            [
            'name' => 'Korea, Republic of South Korea',
            'phone_code' => '+82',
            'short_code' => 'KR'
            ],
            [
            'name' => 'Kuwait',
            'phone_code' => '+965',
            'short_code' => 'KW'
            ],
            [
            'name' => 'Kyrgyzstan',
            'phone_code' => '+996',
            'short_code' => 'KG'
            ],
            [
            'name' => 'Laos',
            'phone_code' => '+856',
            'short_code' => 'LA'
            ],
            [
            'name' => 'Latvia',
            'phone_code' => '+371',
            'short_code' => 'LV'
            ],
            [
            'name' => 'Lebanon',
            'phone_code' => '+961',
            'short_code' => 'LB'
            ],
            [
            'name' => 'Lesotho',
            'phone_code' => '+266',
            'short_code' => 'LS'
            ],
            [
            'name' => 'Liberia',
            'phone_code' => '+231',
            'short_code' => 'LR'
            ],
            [
            'name' => 'Libyan Arab Jamahiriya',
            'phone_code' => '+218',
            'short_code' => 'LY'
            ],
            [
            'name' => 'Liechtenstein',
            'phone_code' => '+423',
            'short_code' => 'LI'
            ],
            [
            'name' => 'Lithuania',
            'phone_code' => '+370',
            'short_code' => 'LT'
            ],
            [
            'name' => 'Luxembourg',
            'phone_code' => '+352',
            'short_code' => 'LU'
            ],
            [
            'name' => 'Macao',
            'phone_code' => '+853',
            'short_code' => 'MO'
            ],
            [
            'name' => 'Macedonia',
            'phone_code' => '+389',
            'short_code' => 'MK'
            ],
            [
            'name' => 'Madagascar',
            'phone_code' => '+261',
            'short_code' => 'MG'
            ],
            [
            'name' => 'Malawi',
            'phone_code' => '+265',
            'short_code' => 'MW'
            ],
            [
            'name' => 'Malaysia',
            'phone_code' => '+60',
            'short_code' => 'MY'
            ],
            [
            'name' => 'Maldives',
            'phone_code' => '+960',
            'short_code' => 'MV'
            ],
            [
            'name' => 'Mali',
            'phone_code' => '+223',
            'short_code' => 'ML'
            ],
            [
            'name' => 'Malta',
            'phone_code' => '+356',
            'short_code' => 'MT'
            ],
            [
            'name' => 'Marshall Islands',
            'phone_code' => '+692',
            'short_code' => 'MH'
            ],
            [
            'name' => 'Martinique',
            'phone_code' => '+596',
            'short_code' => 'MQ'
            ],
            [
            'name' => 'Mauritania',
            'phone_code' => '+222',
            'short_code' => 'MR'
            ],
            [
            'name' => 'Mauritius',
            'phone_code' => '+230',
            'short_code' => 'MU'
            ],
            [
            'name' => 'Mayotte',
            'phone_code' => '+262',
            'short_code' => 'YT'
            ],
            [
            'name' => 'Mexico',
            'phone_code' => '+52',
            'short_code' => 'MX'
            ],
            [
            'name' => 'Micronesia, Federated States of Micronesia',
            'phone_code' => '+691',
            'short_code' => 'FM'
            ],
            [
            'name' => 'Moldova',
            'phone_code' => '+373',
            'short_code' => 'MD'
            ],
            [
            'name' => 'Monaco',
            'phone_code' => '+377',
            'short_code' => 'MC'
            ],
            [
            'name' => 'Mongolia',
            'phone_code' => '+976',
            'short_code' => 'MN'
            ],
            [
            'name' => 'Montenegro',
            'phone_code' => '+382',
            'short_code' => 'ME'
            ],
            [
            'name' => 'Montserrat',
            'phone_code' => '+1664',
            'short_code' => 'MS'
            ],
            [
            'name' => 'Morocco',
            'phone_code' => '+212',
            'short_code' => 'MA'
            ],
            [
            'name' => 'Mozambique',
            'phone_code' => '+258',
            'short_code' => 'MZ'
            ],
            [
            'name' => 'Myanmar',
            'phone_code' => '+95',
            'short_code' => 'MM'
            ],
            [
            'name' => 'Namibia',
            'phone_code' => '+264',
            'short_code' => 'NA'
            ],
            [
            'name' => 'Nauru',
            'phone_code' => '+674',
            'short_code' => 'NR'
            ],
            [
            'name' => 'Nepal',
            'phone_code' => '+977',
            'short_code' => 'NP'
            ],
            [
            'name' => 'Netherlands',
            'phone_code' => '+31',
            'short_code' => 'NL'
            ],
            [
            'name' => 'Netherlands Antilles',
            'phone_code' => '+599',
            'short_code' => 'AN'
            ],
            [
            'name' => 'New Caledonia',
            'phone_code' => '+687',
            'short_code' => 'NC'
            ],
            [
            'name' => 'New Zealand',
            'phone_code' => '+64',
            'short_code' => 'NZ'
            ],
            [
            'name' => 'Nicaragua',
            'phone_code' => '+505',
            'short_code' => 'NI'
            ],
            [
            'name' => 'Niger',
            'phone_code' => '+227',
            'short_code' => 'NE'
            ],
            [
            'name' => 'Nigeria',
            'phone_code' => '+234',
            'short_code' => 'NG'
            ],
            [
            'name' => 'Niue',
            'phone_code' => '+683',
            'short_code' => 'NU'
            ],
            [
            'name' => 'Norfolk Island',
            'phone_code' => '+672',
            'short_code' => 'NF'
            ],
            [
            'name' => 'Northern Mariana Islands',
            'phone_code' => '+1670',
            'short_code' => 'MP'
            ],
            [
            'name' => 'Norway',
            'phone_code' => '+47',
            'short_code' => 'NO'
            ],
            [
            'name' => 'Oman',
            'phone_code' => '+968',
            'short_code' => 'OM'
            ],
            [
            'name' => 'Pakistan',
            'phone_code' => '+92',
            'short_code' => 'PK'
            ],
            [
            'name' => 'Palau',
            'phone_code' => '+680',
            'short_code' => 'PW'
            ],
            [
            'name' => 'Palestinian Territory, Occupied',
            'phone_code' => '+970',
            'short_code' => 'PS'
            ],
            [
            'name' => 'Panama',
            'phone_code' => '+507',
            'short_code' => 'PA'
            ],
            [
            'name' => 'Papua New Guinea',
            'phone_code' => '+675',
            'short_code' => 'PG'
            ],
            [
            'name' => 'Paraguay',
            'phone_code' => '+595',
            'short_code' => 'PY'
            ],
            [
            'name' => 'Peru',
            'phone_code' => '+51',
            'short_code' => 'PE'
            ],
            [
            'name' => 'Philippines',
            'phone_code' => '+63',
            'short_code' => 'PH'
            ],
            [
            'name' => 'Pitcairn',
            'phone_code' => '+872',
            'short_code' => 'PN'
            ],
            [
            'name' => 'Poland',
            'phone_code' => '+48',
            'short_code' => 'PL'
            ],
            [
            'name' => 'Portugal',
            'phone_code' => '+351',
            'short_code' => 'PT'
            ],
            [
            'name' => 'Puerto Rico',
            'phone_code' => '+1939',
            'short_code' => 'PR'
            ],
            [
            'name' => 'Qatar',
            'phone_code' => '+974',
            'short_code' => 'QA'
            ],
            [
            'name' => 'Romania',
            'phone_code' => '+40',
            'short_code' => 'RO'
            ],
            [
            'name' => 'Russia',
            'phone_code' => '+7',
            'short_code' => 'RU'
            ],
            [
            'name' => 'Rwanda',
            'phone_code' => '+250',
            'short_code' => 'RW'
            ],
            [
            'name' => 'Reunion',
            'phone_code' => '+262',
            'short_code' => 'RE'
            ],
            [
            'name' => 'Saint Barthelemy',
            'phone_code' => '+590',
            'short_code' => 'BL'
            ],
            [
            'name' => 'Saint Helena, Ascension and Tristan Da Cunha',
            'phone_code' => '+290',
            'short_code' => 'SH'
            ],
            [
            'name' => 'Saint Kitts and Nevis',
            'phone_code' => '+1869',
            'short_code' => 'KN'
            ],
            [
            'name' => 'Saint Lucia',
            'phone_code' => '+1758',
            'short_code' => 'LC'
            ],
            [
            'name' => 'Saint Martin',
            'phone_code' => '+590',
            'short_code' => 'MF'
            ],
            [
            'name' => 'Saint Pierre and Miquelon',
            'phone_code' => '+508',
            'short_code' => 'PM'
            ],
            [
            'name' => 'Saint Vincent and the Grenadines',
            'phone_code' => '+1784',
            'short_code' => 'VC'
            ],
            [
            'name' => 'Samoa',
            'phone_code' => '+685',
            'short_code' => 'WS'
            ],
            [
            'name' => 'San Marino',
            'phone_code' => '+378',
            'short_code' => 'SM'
            ],
            [
            'name' => 'Sao Tome and Principe',
            'phone_code' => '+239',
            'short_code' => 'ST'
            ],
            [
            'name' => 'Saudi Arabia',
            'phone_code' => '+966',
            'short_code' => 'SA'
            ],
            [
            'name' => 'Senegal',
            'phone_code' => '+221',
            'short_code' => 'SN'
            ],
            [
            'name' => 'Serbia',
            'phone_code' => '+381',
            'short_code' => 'RS'
            ],
            [
            'name' => 'Seychelles',
            'phone_code' => '+248',
            'short_code' => 'SC'
            ],
            [
            'name' => 'Sierra Leone',
            'phone_code' => '+232',
            'short_code' => 'SL'
            ],
            [
            'name' => 'Singapore',
            'phone_code' => '+65',
            'short_code' => 'SG'
            ],
            [
            'name' => 'Slovakia',
            'phone_code' => '+421',
            'short_code' => 'SK'
            ],
            [
            'name' => 'Slovenia',
            'phone_code' => '+386',
            'short_code' => 'SI'
            ],
            [
            'name' => 'Solomon Islands',
            'phone_code' => '+677',
            'short_code' => 'SB'
            ],
            [
            'name' => 'Somalia',
            'phone_code' => '+252',
            'short_code' => 'SO'
            ],
            [
            'name' => 'South Africa',
            'phone_code' => '+27',
            'short_code' => 'ZA'
            ],
            [
            'name' => 'South Sudan',
            'phone_code' => '+211',
            'short_code' => 'SS'
            ],
            [
            'name' => 'South Georgia and the South Sandwich Islands',
            'phone_code' => '+500',
            'short_code' => 'GS'
            ],
            [
            'name' => 'Spain',
            'phone_code' => '+34',
            'short_code' => 'ES'
            ],
            [
            'name' => 'Sri Lanka',
            'phone_code' => '+94',
            'short_code' => 'LK'
            ],
            [
            'name' => 'Sudan',
            'phone_code' => '+249',
            'short_code' => 'SD'
            ],
            [
            'name' => 'Suriname',
            'phone_code' => '+597',
            'short_code' => 'SR'
            ],
            [
            'name' => 'Svalbard and Jan Mayen',
            'phone_code' => '+47',
            'short_code' => 'SJ'
            ],
            [
            'name' => 'Swaziland',
            'phone_code' => '+268',
            'short_code' => 'SZ'
            ],
            [
            'name' => 'Sweden',
            'phone_code' => '+46',
            'short_code' => 'SE'
            ],
            [
            'name' => 'Switzerland',
            'phone_code' => '+41',
            'short_code' => 'CH'
            ],
            [
            'name' => 'Syrian Arab Republic',
            'phone_code' => '+963',
            'short_code' => 'SY'
            ],
            [
            'name' => 'Taiwan',
            'phone_code' => '+886',
            'short_code' => 'TW'
            ],
            [
            'name' => 'Tajikistan',
            'phone_code' => '+992',
            'short_code' => 'TJ'
            ],
            [
            'name' => 'Tanzania, United Republic of Tanzania',
            'phone_code' => '+255',
            'short_code' => 'TZ'
            ],
            [
            'name' => 'Thailand',
            'phone_code' => '+66',
            'short_code' => 'TH'
            ],
            [
            'name' => 'Timor-Leste',
            'phone_code' => '+670',
            'short_code' => 'TL'
            ],
            [
            'name' => 'Togo',
            'phone_code' => '+228',
            'short_code' => 'TG'
            ],
            [
            'name' => 'Tokelau',
            'phone_code' => '+690',
            'short_code' => 'TK'
            ],
            [
            'name' => 'Tonga',
            'phone_code' => '+676',
            'short_code' => 'TO'
            ],
            [
            'name' => 'Trinidad and Tobago',
            'phone_code' => '+1868',
            'short_code' => 'TT'
            ],
            [
            'name' => 'Tunisia',
            'phone_code' => '+216',
            'short_code' => 'TN'
            ],
            [
            'name' => 'Turkey',
            'phone_code' => '+90',
            'short_code' => 'TR'
            ],
            [
            'name' => 'Turkmenistan',
            'phone_code' => '+993',
            'short_code' => 'TM'
            ],
            [
            'name' => 'Turks and Caicos Islands',
            'phone_code' => '+1649',
            'short_code' => 'TC'
            ],
            [
            'name' => 'Tuvalu',
            'phone_code' => '+688',
            'short_code' => 'TV'
            ],
            [
            'name' => 'Uganda',
            'phone_code' => '+256',
            'short_code' => 'UG'
            ],
            [
            'name' => 'Ukraine',
            'phone_code' => '+38',
            'short_code' => 'UA'
            ],
            [
            'name' => 'United Arab Emirates',
            'phone_code' => '+971',
            'short_code' => 'AE'
            ],
            [
            'name' => 'United Kingdom',
            'phone_code' => '+44',
            'short_code' => 'GB'
            ],
            [
            'name' => 'United States',
            'phone_code' => '+1',
            'short_code' => 'US'
            ],
            [
            'name' => 'Uruguay',
            'phone_code' => '+598',
            'short_code' => 'UY'
            ],
            [
            'name' => 'Uzbekistan',
            'phone_code' => '+998',
            'short_code' => 'UZ'
            ],
            [
            'name' => 'Vanuatu',
            'phone_code' => '+678',
            'short_code' => 'VU'
            ],
            [
            'name' => 'Venezuela, Bolivarian Republic of Venezuela',
            'phone_code' => '+58',
            'short_code' => 'VE'
            ],
            [
            'name' => 'Vietnam',
            'phone_code' => '+84',
            'short_code' => 'VN'
            ],
            [
            'name' => 'Virgin Islands, British',
            'phone_code' => '+1284',
            'short_code' => 'VG'
            ],
            [
            'name' => 'Virgin Islands, U.S.',
            'phone_code' => '+1340',
            'short_code' => 'VI'
            ],
            [
            'name' => 'Wallis and Futuna',
            'phone_code' => '+681',
            'short_code' => 'WF'
            ],
            [
            'name' => 'Yemen',
            'phone_code' => '+967',
            'short_code' => 'YE'
            ],
            [
            'name' => 'Zambia',
            'phone_code' => '+260',
            'short_code' => 'ZM'
            ],
            [
            'name' => 'Zimbabwe',
            'phone_code' => '+263',
            'short_code' => 'ZW'
            ],
        ];

        Country::insert($countries);
    }
}