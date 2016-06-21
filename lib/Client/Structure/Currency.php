<?php
/**
 * Currency.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;

/**
 * Class Currency
 */
class Currency
{

    /**
     * United Arab Emirates Dirham
     */
    const AED = 'AED';
    /**
     * Afghanistan Afghani
     */
    const AFN = 'AFN';
    /**
     * Albania Lek
     */
    const ALL = 'ALL';
    /**
     * Armenia Dram
     */
    const AMD = 'AMD';
    /**
     * Netherlands Antilles Guilder
     */
    const ANG = 'ANG';
    /**
     * Angola Kwanza
     */
    const AOA = 'AOA';
    /**
     * Argentina Peso
     */
    const ARS = 'ARS';
    /**
     * Australia Dollar
     */
    const AUD = 'AUD';
    /**
     * Aruba Guilder
     */
    const AWG = 'AWG';
    /**
     * Azerbaijan New Manat
     */
    const AZN = 'AZN';
    /**
     * Bosnia and Herzegovina Convertible Marka
     */
    const BAM = 'BAM';
    /**
     * Barbados Dollar
     */
    const BBD = 'BBD';
    /**
     * Bangladesh Taka
     */
    const BDT = 'BDT';
    /**
     * Bulgaria Lev
     */
    const BGN = 'BGN';
    /**
     * Bahrain Dinar
     */
    const BHD = 'BHD';
    /**
     * Burundi Franc
     */
    const BIF = 'BIF';
    /**
     * Bermuda Dollar
     */
    const BMD = 'BMD';
    /**
     * Brunei Darussalam Dollar
     */
    const BND = 'BND';
    /**
     * Bolivia Boliviano
     */
    const BOB = 'BOB';
    /**
     * Brazil Real
     */
    const BRL = 'BRL';
    /**
     * Bahamas Dollar
     */
    const BSD = 'BSD';
    /**
     * Bhutan Ngultrum
     */
    const BTN = 'BTN';
    /**
     * Botswana Pula
     */
    const BWP = 'BWP';
    /**
     * Belarus Ruble
     */
    const BYR = 'BYR';
    /**
     * Belize Dollar
     */
    const BZD = 'BZD';
    /**
     * Canada Dollar
     */
    const CAD = 'CAD';
    /**
     * Congo/Kinshasa Franc
     */
    const CDF = 'CDF';
    /**
     * Switzerland Franc
     */
    const CHF = 'CHF';
    /**
     * Chile Peso
     */
    const CLP = 'CLP';
    /**
     * China Yuan Renminbi
     */
    const CNY = 'CNY';
    /**
     * Colombia Peso
     */
    const COP = 'COP';
    /**
     * Costa Rica Colon
     */
    const CRC = 'CRC';
    /**
     * Cuba Convertible Peso
     */
    const CUC = 'CUC';
    /**
     * Cuba Peso
     */
    const CUP = 'CUP';
    /**
     * Cape Verde Escudo
     */
    const CVE = 'CVE';
    /**
     * Czech Republic Koruna
     */
    const CZK = 'CZK';
    /**
     * Djibouti Franc
     */
    const DJF = 'DJF';
    /**
     * Denmark Krone
     */
    const DKK = 'DKK';
    /**
     * Dominican Republic Peso
     */
    const DOP = 'DOP';
    /**
     * Algeria Dinar
     */
    const DZD = 'DZD';
    /**
     * Egypt Pound
     */
    const EGP = 'EGP';
    /**
     * Eritrea Nakfa
     */
    const ERN = 'ERN';
    /**
     * Ethiopia Birr
     */
    const ETB = 'ETB';
    /**
     * Euro Member Countries
     */
    const EUR = 'EUR';
    /**
     * Fiji Dollar
     */
    const FJD = 'FJD';
    /**
     * Falkland Islands (Malvinas) Pound
     */
    const FKP = 'FKP';
    /**
     * United Kingdom Pound
     */
    const GBP = 'GBP';
    /**
     * Georgia Lari
     */
    const GEL = 'GEL';
    /**
     * Guernsey Pound
     */
    const GGP = 'GGP';
    /**
     * Ghana Cedi
     */
    const GHS = 'GHS';
    /**
     * Gibraltar Pound
     */
    const GIP = 'GIP';
    /**
     * Gambia Dalasi
     */
    const GMD = 'GMD';
    /**
     * Guinea Franc
     */
    const GNF = 'GNF';
    /**
     * Guatemala Quetzal
     */
    const GTQ = 'GTQ';
    /**
     * Guyana Dollar
     */
    const GYD = 'GYD';
    /**
     * Hong Kong Dollar
     */
    const HKD = 'HKD';
    /**
     * Honduras Lempira
     */
    const HNL = 'HNL';
    /**
     * Croatia Kuna
     */
    const HRK = 'HRK';
    /**
     * Haiti Gourde
     */
    const HTG = 'HTG';
    /**
     * Hungary Forint
     */
    const HUF = 'HUF';
    /**
     * Indonesia Rupiah
     */
    const IDR = 'IDR';
    /**
     * Israel Shekel
     */
    const ILS = 'ILS';
    /**
     * Isle of Man Pound
     */
    const IMP = 'IMP';
    /**
     * India Rupee
     */
    const INR = 'INR';
    /**
     * Iraq Dinar
     */
    const IQD = 'IQD';
    /**
     * Iran Rial
     */
    const IRR = 'IRR';
    /**
     * Iceland Krona
     */
    const ISK = 'ISK';
    /**
     * Jersey Pound
     */
    const JEP = 'JEP';
    /**
     * Jamaica Dollar
     */
    const JMD = 'JMD';
    /**
     * Jordan Dinar
     */
    const JOD = 'JOD';
    /**
     * Japan Yen
     */
    const JPY = 'JPY';
    /**
     * Kenya Shilling
     */
    const KES = 'KES';
    /**
     * Kyrgyzstan Som
     */
    const KGS = 'KGS';
    /**
     * Cambodia Riel
     */
    const KHR = 'KHR';
    /**
     * Comoros Franc
     */
    const KMF = 'KMF';
    /**
     * Korea (North) Won
     */
    const KPW = 'KPW';
    /**
     * Korea (South) Won
     */
    const KRW = 'KRW';
    /**
     * Kuwait Dinar
     */
    const KWD = 'KWD';
    /**
     * Cayman Islands Dollar
     */
    const KYD = 'KYD';
    /**
     * Kazakhstan Tenge
     */
    const KZT = 'KZT';
    /**
     * Laos Kip
     */
    const LAK = 'LAK';
    /**
     * Lebanon Pound
     */
    const LBP = 'LBP';
    /**
     * Sri Lanka Rupee
     */
    const LKR = 'LKR';
    /**
     * Liberia Dollar
     */
    const LRD = 'LRD';
    /**
     * Lesotho Loti
     */
    const LSL = 'LSL';
    /**
     * Lithuania Litas
     */
    const LTL = 'LTL';
    /**
     * Libya Dinar
     */
    const LYD = 'LYD';
    /**
     * Morocco Dirham
     */
    const MAD = 'MAD';
    /**
     * Moldova Leu
     */
    const MDL = 'MDL';
    /**
     * Madagascar Ariary
     */
    const MGA = 'MGA';
    /**
     * Macedonia Denar
     */
    const MKD = 'MKD';
    /**
     * Myanmar (Burma) Kyat
     */
    const MMK = 'MMK';
    /**
     * Mongolia Tughrik
     */
    const MNT = 'MNT';
    /**
     * Macau Pataca
     */
    const MOP = 'MOP';
    /**
     * Mauritania Ouguiya
     */
    const MRO = 'MRO';
    /**
     * Mauritius Rupee
     */
    const MUR = 'MUR';
    /**
     * Maldives (Maldive Islands) Rufiyaa
     */
    const MVR = 'MVR';
    /**
     * Malawi Kwacha
     */
    const MWK = 'MWK';
    /**
     * Mexico Peso
     */
    const MXN = 'MXN';
    /**
     * Malaysia Ringgit
     */
    const MYR = 'MYR';
    /**
     * Mozambique Metical
     */
    const MZN = 'MZN';
    /**
     * Namibia Dollar
     */
    const NAD = 'NAD';
    /**
     * Nigeria Naira
     */
    const NGN = 'NGN';
    /**
     * Nicaragua Cordoba
     */
    const NIO = 'NIO';
    /**
     * Norway Krone
     */
    const NOK = 'NOK';
    /**
     * Nepal Rupee
     */
    const NPR = 'NPR';
    /**
     * New Zealand Dollar
     */
    const NZD = 'NZD';
    /**
     * Oman Rial
     */
    const OMR = 'OMR';
    /**
     * Panama Balboa
     */
    const PAB = 'PAB';
    /**
     * Peru Nuevo Sol
     */
    const PEN = 'PEN';
    /**
     * Papua New Guinea Kina
     */
    const PGK = 'PGK';
    /**
     * Philippines Peso
     */
    const PHP = 'PHP';
    /**
     * Pakistan Rupee
     */
    const PKR = 'PKR';
    /**
     * Poland Zloty
     */
    const PLN = 'PLN';
    /**
     * Paraguay Guarani
     */
    const PYG = 'PYG';
    /**
     * Qatar Riyal
     */
    const QAR = 'QAR';
    /**
     * Romania New Leu
     */
    const RON = 'RON';
    /**
     * Serbia Dinar
     */
    const RSD = 'RSD';
    /**
     * Russia Ruble
     */
    const RUB = 'RUB';
    /**
     * Rwanda Franc
     */
    const RWF = 'RWF';
    /**
     * Saudi Arabia Riyal
     */
    const SAR = 'SAR';
    /**
     * Solomon Islands Dollar
     */
    const SBD = 'SBD';
    /**
     * Seychelles Rupee
     */
    const SCR = 'SCR';
    /**
     * Sudan Pound
     */
    const SDG = 'SDG';
    /**
     * Sweden Krona
     */
    const SEK = 'SEK';
    /**
     * Singapore Dollar
     */
    const SGD = 'SGD';
    /**
     * Saint Helena Pound
     */
    const SHP = 'SHP';
    /**
     * Sierra Leone Leone
     */
    const SLL = 'SLL';
    /**
     * Somalia Shilling
     */
    const SOS = 'SOS';
    /**
     * *    Seborga Luigino
     */
    const SPL = 'SPL';
    /**
     * Suriname Dollar
     */
    const SRD = 'SRD';
    /**
     * São Tomé and Príncipe Dobra
     */
    const STD = 'STD';
    /**
     * El Salvador Colon
     */
    const SVC = 'SVC';
    /**
     * Syria Pound
     */
    const SYP = 'SYP';
    /**
     * Swaziland Lilangeni
     */
    const SZL = 'SZL';
    /**
     * Thailand Baht
     */
    const THB = 'THB';
    /**
     * Tajikistan Somoni
     */
    const TJS = 'TJS';
    /**
     * Turkmenistan Manat
     */
    const TMT = 'TMT';
    /**
     * Tunisia Dinar
     */
    const TND = 'TND';
    /**
     * Tonga Pa'anga
     */
    const TOP = 'TOP';
    /**
     * Turkey Lira
     */
    const CUR_TRY = 'TRY';
    /**
     * Trinidad and Tobago Dollar
     */
    const TTD = 'TTD';
    /**
     * Tuvalu Dollar
     */
    const TVD = 'TVD';
    /**
     * Taiwan New Dollar
     */
    const TWD = 'TWD';
    /**
     * Tanzania Shilling
     */
    const TZS = 'TZS';
    /**
     * Ukraine Hryvnia
     */
    const UAH = 'UAH';
    /**
     * Uganda Shilling
     */
    const UGX = 'UGX';
    /**
     * United States Dollar
     */
    const USD = 'USD';
    /**
     * Uruguay Peso
     */
    const UYU = 'UYU';
    /**
     * Uzbekistan Som
     */
    const UZS = 'UZS';
    /**
     * Venezuela Bolivar
     */
    const VEF = 'VEF';
    /**
     * Viet Nam Dong
     */
    const VND = 'VND';
    /**
     * Vanuatu Vatu
     */
    const VUV = 'VUV';
    /**
     * Samoa Tala
     */
    const WST = 'WST';
    /**
     * Communauté Financière Africaine (BEAC) CFA Franc BEAC
     */
    const XAF = 'XAF';
    /**
     * East Caribbean Dollar
     */
    const XCD = 'XCD';
    /**
     * International Monetary Fund (IMF) Special Drawing Rights
     */
    const XDR = 'XDR';
    /**
     * Communauté Financière Africaine (BCEAO) Franc
     */
    const XOF = 'XOF';
    /**
     * Comptoirs Français du Pacifique (CFP) Franc
     */
    const XPF = 'XPF';
    /**
     * Yemen Rial
     */
    const YER = 'YER';
    /**
     * South Africa Rand
     */
    const ZAR = 'ZAR';
    /**
     * Zambia Kwacha
     */
    const ZMW = 'ZMW';
    /**
     * Zimbabwe Dollar
     */
    const ZWD = 'ZWD';
}
