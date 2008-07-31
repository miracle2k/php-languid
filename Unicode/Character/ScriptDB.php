<?php
	// CentralNic Unicode Library Script Database
	//
	// Uses data munged from
	//
	//    http://cvs.gnome.org/viewcvs/gucharmap/gucharmap/unicode-scripts.h?rev=HEAD
	//
	// $Id: ScriptDB.php,v 1.2 2005/11/03 13:44:56 gavin Exp $

	/**
	* @package php-Unicode
	*/

	$GLOBALS[Unicode_Character_ScriptDB_Names] = array(
		0 => 'Arabic',
		1 => 'Armenian',
		2 => 'Bengali',
		3 => 'Bopomofo',
		4 => 'Braille',
		5 => 'Buhid',
		6 => 'Canadian Aboriginal',
		7 => 'Cherokee',
		8 => 'Common',
		9 => 'Cypriot',
		10 => 'Cyrillic',
		11 => 'Deseret',
		12 => 'Devanagari',
		13 => 'Ethiopic',
		14 => 'Georgian',
		15 => 'Gothic',
		16 => 'Greek',
		17 => 'Gujarati',
		18 => 'Gurmukhi',
		19 => 'Han',
		20 => 'Hangul',
		21 => 'Hanunoo',
		22 => 'Hebrew',
		23 => 'Hiragana',
		24 => 'Inherited',
		25 => 'Kannada',
		26 => 'Katakana',
		27 => 'Khmer',
		28 => 'Lao',
		29 => 'Latin',
		30 => 'Limbu',
		31 => 'Linear B',
		32 => 'Malayalam',
		33 => 'Mongolian',
		34 => 'Myanmar',
		35 => 'Ogham',
		36 => 'Old Italic',
		37 => 'Oriya',
		38 => 'Osmanya',
		39 => 'Runic',
		40 => 'Shavian',
		41 => 'Sinhala',
		42 => 'Syriac',
		43 => 'Tagalog',
		44 => 'Tagbanwa',
		45 => 'Tai Le',
		46 => 'Tamil',
		47 => 'Telugu',
		48 => 'Thaana',
		49 => 'Thai',
		50 => 'Tibetan',
		51 => 'Ugaritic',
		52 => 'Yi',
	);

	$GLOBALS[Unicode_Character_ScriptDB_Map] = array(
		array(start => 65,	end => 90,	 script => 29),
		array(start => 97,	end => 122,	 script => 29),
		array(start => 170,	end => 170,	 script => 29),
		array(start => 181,	end => 181,	 script => 16),
		array(start => 186,	end => 186,	 script => 29),
		array(start => 192,	end => 214,	 script => 29),
		array(start => 216,	end => 246,	 script => 29),
		array(start => 248,	end => 442,	 script => 29),
		array(start => 443,	end => 443,	 script => 29),
		array(start => 444,	end => 447,	 script => 29),
		array(start => 448,	end => 451,	 script => 29),
		array(start => 452,	end => 566,	 script => 29),
		array(start => 592,	end => 687,	 script => 29),
		array(start => 688,	end => 696,	 script => 29),
		array(start => 736,	end => 740,	 script => 29),
		array(start => 768,	end => 847,	 script => 24),
		array(start => 864,	end => 879,	 script => 24),
		array(start => 890,	end => 890,	 script => 16),
		array(start => 902,	end => 902,	 script => 16),
		array(start => 904,	end => 906,	 script => 16),
		array(start => 908,	end => 908,	 script => 16),
		array(start => 910,	end => 929,	 script => 16),
		array(start => 931,	end => 974,	 script => 16),
		array(start => 976,	end => 1013,	 script => 16),
		array(start => 1015,	end => 1019,	 script => 16),
		array(start => 1024,	end => 1153,	 script => 10),
		array(start => 1155,	end => 1158,	 script => 10),
		array(start => 1160,	end => 1161,	 script => 24),
		array(start => 1162,	end => 1230,	 script => 10),
		array(start => 1232,	end => 1269,	 script => 10),
		array(start => 1272,	end => 1273,	 script => 10),
		array(start => 1280,	end => 1295,	 script => 10),
		array(start => 1329,	end => 1366,	 script => 1),
		array(start => 1369,	end => 1369,	 script => 1),
		array(start => 1377,	end => 1415,	 script => 1),
		array(start => 1425,	end => 1441,	 script => 24),
		array(start => 1443,	end => 1465,	 script => 24),
		array(start => 1467,	end => 1469,	 script => 24),
		array(start => 1471,	end => 1471,	 script => 24),
		array(start => 1473,	end => 1474,	 script => 24),
		array(start => 1476,	end => 1476,	 script => 24),
		array(start => 1488,	end => 1514,	 script => 22),
		array(start => 1520,	end => 1522,	 script => 22),
		array(start => 1569,	end => 1594,	 script => 0),
		array(start => 1601,	end => 1610,	 script => 0),
		array(start => 1611,	end => 1621,	 script => 24),
		array(start => 1646,	end => 1647,	 script => 0),
		array(start => 1648,	end => 1648,	 script => 24),
		array(start => 1649,	end => 1747,	 script => 0),
		array(start => 1749,	end => 1749,	 script => 0),
		array(start => 1750,	end => 1756,	 script => 24),
		array(start => 1757,	end => 1757,	 script => 24),
		array(start => 1758,	end => 1758,	 script => 24),
		array(start => 1759,	end => 1764,	 script => 24),
		array(start => 1765,	end => 1766,	 script => 0),
		array(start => 1767,	end => 1768,	 script => 24),
		array(start => 1770,	end => 1773,	 script => 24),
		array(start => 1774,	end => 1775,	 script => 0),
		array(start => 1786,	end => 1788,	 script => 0),
		array(start => 1791,	end => 1791,	 script => 0),
		array(start => 1808,	end => 1808,	 script => 42),
		array(start => 1809,	end => 1809,	 script => 42),
		array(start => 1810,	end => 1839,	 script => 42),
		array(start => 1840,	end => 1866,	 script => 42),
		array(start => 1869,	end => 1871,	 script => 42),
		array(start => 1920,	end => 1957,	 script => 48),
		array(start => 1958,	end => 1968,	 script => 48),
		array(start => 1969,	end => 1969,	 script => 48),
		array(start => 2305,	end => 2306,	 script => 12),
		array(start => 2307,	end => 2307,	 script => 12),
		array(start => 2308,	end => 2361,	 script => 12),
		array(start => 2364,	end => 2364,	 script => 12),
		array(start => 2365,	end => 2365,	 script => 12),
		array(start => 2366,	end => 2368,	 script => 12),
		array(start => 2369,	end => 2376,	 script => 12),
		array(start => 2377,	end => 2380,	 script => 12),
		array(start => 2381,	end => 2381,	 script => 12),
		array(start => 2384,	end => 2384,	 script => 12),
		array(start => 2385,	end => 2388,	 script => 12),
		array(start => 2392,	end => 2401,	 script => 12),
		array(start => 2402,	end => 2403,	 script => 12),
		array(start => 2406,	end => 2415,	 script => 12),
		array(start => 2433,	end => 2433,	 script => 2),
		array(start => 2434,	end => 2435,	 script => 2),
		array(start => 2437,	end => 2444,	 script => 2),
		array(start => 2447,	end => 2448,	 script => 2),
		array(start => 2451,	end => 2472,	 script => 2),
		array(start => 2474,	end => 2480,	 script => 2),
		array(start => 2482,	end => 2482,	 script => 2),
		array(start => 2486,	end => 2489,	 script => 2),
		array(start => 2492,	end => 2492,	 script => 2),
		array(start => 2493,	end => 2493,	 script => 2),
		array(start => 2494,	end => 2496,	 script => 2),
		array(start => 2497,	end => 2500,	 script => 2),
		array(start => 2503,	end => 2504,	 script => 2),
		array(start => 2507,	end => 2508,	 script => 2),
		array(start => 2509,	end => 2509,	 script => 2),
		array(start => 2519,	end => 2519,	 script => 2),
		array(start => 2524,	end => 2525,	 script => 2),
		array(start => 2527,	end => 2529,	 script => 2),
		array(start => 2530,	end => 2531,	 script => 2),
		array(start => 2534,	end => 2543,	 script => 2),
		array(start => 2544,	end => 2545,	 script => 2),
		array(start => 2562,	end => 2562,	 script => 18),
		array(start => 2563,	end => 2563,	 script => 18),
		array(start => 2565,	end => 2570,	 script => 18),
		array(start => 2575,	end => 2576,	 script => 18),
		array(start => 2579,	end => 2600,	 script => 18),
		array(start => 2602,	end => 2608,	 script => 18),
		array(start => 2610,	end => 2611,	 script => 18),
		array(start => 2613,	end => 2614,	 script => 18),
		array(start => 2616,	end => 2617,	 script => 18),
		array(start => 2620,	end => 2620,	 script => 18),
		array(start => 2622,	end => 2624,	 script => 18),
		array(start => 2625,	end => 2626,	 script => 18),
		array(start => 2631,	end => 2632,	 script => 18),
		array(start => 2635,	end => 2637,	 script => 18),
		array(start => 2649,	end => 2652,	 script => 18),
		array(start => 2654,	end => 2654,	 script => 18),
		array(start => 2662,	end => 2671,	 script => 18),
		array(start => 2672,	end => 2673,	 script => 18),
		array(start => 2674,	end => 2676,	 script => 18),
		array(start => 2689,	end => 2690,	 script => 17),
		array(start => 2691,	end => 2691,	 script => 17),
		array(start => 2693,	end => 2701,	 script => 17),
		array(start => 2703,	end => 2705,	 script => 17),
		array(start => 2707,	end => 2728,	 script => 17),
		array(start => 2730,	end => 2736,	 script => 17),
		array(start => 2738,	end => 2739,	 script => 17),
		array(start => 2741,	end => 2745,	 script => 17),
		array(start => 2748,	end => 2748,	 script => 17),
		array(start => 2749,	end => 2749,	 script => 17),
		array(start => 2750,	end => 2752,	 script => 17),
		array(start => 2753,	end => 2757,	 script => 17),
		array(start => 2759,	end => 2760,	 script => 17),
		array(start => 2761,	end => 2761,	 script => 17),
		array(start => 2763,	end => 2764,	 script => 17),
		array(start => 2765,	end => 2765,	 script => 17),
		array(start => 2768,	end => 2768,	 script => 17),
		array(start => 2784,	end => 2785,	 script => 17),
		array(start => 2786,	end => 2787,	 script => 17),
		array(start => 2790,	end => 2799,	 script => 17),
		array(start => 2817,	end => 2817,	 script => 37),
		array(start => 2818,	end => 2819,	 script => 37),
		array(start => 2821,	end => 2828,	 script => 37),
		array(start => 2831,	end => 2832,	 script => 37),
		array(start => 2835,	end => 2856,	 script => 37),
		array(start => 2858,	end => 2864,	 script => 37),
		array(start => 2866,	end => 2867,	 script => 37),
		array(start => 2869,	end => 2873,	 script => 37),
		array(start => 2876,	end => 2876,	 script => 37),
		array(start => 2877,	end => 2877,	 script => 37),
		array(start => 2878,	end => 2878,	 script => 37),
		array(start => 2879,	end => 2879,	 script => 37),
		array(start => 2880,	end => 2880,	 script => 37),
		array(start => 2881,	end => 2883,	 script => 37),
		array(start => 2887,	end => 2888,	 script => 37),
		array(start => 2891,	end => 2892,	 script => 37),
		array(start => 2893,	end => 2893,	 script => 37),
		array(start => 2902,	end => 2902,	 script => 37),
		array(start => 2903,	end => 2903,	 script => 37),
		array(start => 2908,	end => 2909,	 script => 37),
		array(start => 2911,	end => 2913,	 script => 37),
		array(start => 2918,	end => 2927,	 script => 37),
		array(start => 2929,	end => 2929,	 script => 37),
		array(start => 2946,	end => 2946,	 script => 46),
		array(start => 2947,	end => 2947,	 script => 46),
		array(start => 2949,	end => 2954,	 script => 46),
		array(start => 2958,	end => 2960,	 script => 46),
		array(start => 2962,	end => 2965,	 script => 46),
		array(start => 2969,	end => 2970,	 script => 46),
		array(start => 2972,	end => 2972,	 script => 46),
		array(start => 2974,	end => 2975,	 script => 46),
		array(start => 2979,	end => 2980,	 script => 46),
		array(start => 2984,	end => 2986,	 script => 46),
		array(start => 2990,	end => 2997,	 script => 46),
		array(start => 2999,	end => 3001,	 script => 46),
		array(start => 3006,	end => 3007,	 script => 46),
		array(start => 3008,	end => 3008,	 script => 46),
		array(start => 3009,	end => 3010,	 script => 46),
		array(start => 3014,	end => 3016,	 script => 46),
		array(start => 3018,	end => 3020,	 script => 46),
		array(start => 3021,	end => 3021,	 script => 46),
		array(start => 3031,	end => 3031,	 script => 46),
		array(start => 3047,	end => 3055,	 script => 46),
		array(start => 3056,	end => 3058,	 script => 46),
		array(start => 3073,	end => 3075,	 script => 47),
		array(start => 3077,	end => 3084,	 script => 47),
		array(start => 3086,	end => 3088,	 script => 47),
		array(start => 3090,	end => 3112,	 script => 47),
		array(start => 3114,	end => 3123,	 script => 47),
		array(start => 3125,	end => 3129,	 script => 47),
		array(start => 3134,	end => 3136,	 script => 47),
		array(start => 3137,	end => 3140,	 script => 47),
		array(start => 3142,	end => 3144,	 script => 47),
		array(start => 3146,	end => 3149,	 script => 47),
		array(start => 3157,	end => 3158,	 script => 47),
		array(start => 3168,	end => 3169,	 script => 47),
		array(start => 3174,	end => 3183,	 script => 47),
		array(start => 3202,	end => 3203,	 script => 25),
		array(start => 3205,	end => 3212,	 script => 25),
		array(start => 3214,	end => 3216,	 script => 25),
		array(start => 3218,	end => 3240,	 script => 25),
		array(start => 3242,	end => 3251,	 script => 25),
		array(start => 3253,	end => 3257,	 script => 25),
		array(start => 3261,	end => 3261,	 script => 25),
		array(start => 3262,	end => 3262,	 script => 25),
		array(start => 3263,	end => 3263,	 script => 25),
		array(start => 3264,	end => 3268,	 script => 25),
		array(start => 3270,	end => 3270,	 script => 25),
		array(start => 3271,	end => 3272,	 script => 25),
		array(start => 3274,	end => 3275,	 script => 25),
		array(start => 3276,	end => 3277,	 script => 25),
		array(start => 3285,	end => 3286,	 script => 25),
		array(start => 3294,	end => 3294,	 script => 25),
		array(start => 3296,	end => 3297,	 script => 25),
		array(start => 3302,	end => 3311,	 script => 25),
		array(start => 3330,	end => 3331,	 script => 32),
		array(start => 3333,	end => 3340,	 script => 32),
		array(start => 3342,	end => 3344,	 script => 32),
		array(start => 3346,	end => 3368,	 script => 32),
		array(start => 3370,	end => 3385,	 script => 32),
		array(start => 3390,	end => 3392,	 script => 32),
		array(start => 3393,	end => 3395,	 script => 32),
		array(start => 3398,	end => 3400,	 script => 32),
		array(start => 3402,	end => 3404,	 script => 32),
		array(start => 3405,	end => 3405,	 script => 32),
		array(start => 3415,	end => 3415,	 script => 32),
		array(start => 3424,	end => 3425,	 script => 32),
		array(start => 3430,	end => 3439,	 script => 32),
		array(start => 3458,	end => 3459,	 script => 41),
		array(start => 3461,	end => 3478,	 script => 41),
		array(start => 3482,	end => 3505,	 script => 41),
		array(start => 3507,	end => 3515,	 script => 41),
		array(start => 3517,	end => 3517,	 script => 41),
		array(start => 3520,	end => 3526,	 script => 41),
		array(start => 3530,	end => 3530,	 script => 41),
		array(start => 3535,	end => 3537,	 script => 41),
		array(start => 3538,	end => 3540,	 script => 41),
		array(start => 3542,	end => 3542,	 script => 41),
		array(start => 3544,	end => 3551,	 script => 41),
		array(start => 3570,	end => 3571,	 script => 41),
		array(start => 3585,	end => 3632,	 script => 49),
		array(start => 3633,	end => 3633,	 script => 49),
		array(start => 3634,	end => 3635,	 script => 49),
		array(start => 3636,	end => 3642,	 script => 49),
		array(start => 3648,	end => 3653,	 script => 49),
		array(start => 3654,	end => 3654,	 script => 49),
		array(start => 3655,	end => 3662,	 script => 49),
		array(start => 3664,	end => 3673,	 script => 49),
		array(start => 3713,	end => 3714,	 script => 28),
		array(start => 3716,	end => 3716,	 script => 28),
		array(start => 3719,	end => 3720,	 script => 28),
		array(start => 3722,	end => 3722,	 script => 28),
		array(start => 3725,	end => 3725,	 script => 28),
		array(start => 3732,	end => 3735,	 script => 28),
		array(start => 3737,	end => 3743,	 script => 28),
		array(start => 3745,	end => 3747,	 script => 28),
		array(start => 3749,	end => 3749,	 script => 28),
		array(start => 3751,	end => 3751,	 script => 28),
		array(start => 3754,	end => 3755,	 script => 28),
		array(start => 3757,	end => 3760,	 script => 28),
		array(start => 3761,	end => 3761,	 script => 28),
		array(start => 3762,	end => 3763,	 script => 28),
		array(start => 3764,	end => 3769,	 script => 28),
		array(start => 3771,	end => 3772,	 script => 28),
		array(start => 3773,	end => 3773,	 script => 28),
		array(start => 3776,	end => 3780,	 script => 28),
		array(start => 3782,	end => 3782,	 script => 28),
		array(start => 3784,	end => 3789,	 script => 28),
		array(start => 3792,	end => 3801,	 script => 28),
		array(start => 3804,	end => 3805,	 script => 28),
		array(start => 3840,	end => 3840,	 script => 50),
		array(start => 3864,	end => 3865,	 script => 50),
		array(start => 3872,	end => 3881,	 script => 50),
		array(start => 3882,	end => 3891,	 script => 50),
		array(start => 3893,	end => 3893,	 script => 50),
		array(start => 3895,	end => 3895,	 script => 50),
		array(start => 3897,	end => 3897,	 script => 50),
		array(start => 3904,	end => 3911,	 script => 50),
		array(start => 3913,	end => 3946,	 script => 50),
		array(start => 3953,	end => 3966,	 script => 50),
		array(start => 3967,	end => 3967,	 script => 50),
		array(start => 3968,	end => 3972,	 script => 50),
		array(start => 3974,	end => 3975,	 script => 50),
		array(start => 3976,	end => 3979,	 script => 50),
		array(start => 3984,	end => 3991,	 script => 50),
		array(start => 3993,	end => 4028,	 script => 50),
		array(start => 4038,	end => 4038,	 script => 50),
		array(start => 4096,	end => 4129,	 script => 34),
		array(start => 4131,	end => 4135,	 script => 34),
		array(start => 4137,	end => 4138,	 script => 34),
		array(start => 4140,	end => 4140,	 script => 34),
		array(start => 4141,	end => 4144,	 script => 34),
		array(start => 4145,	end => 4145,	 script => 34),
		array(start => 4146,	end => 4146,	 script => 34),
		array(start => 4150,	end => 4151,	 script => 34),
		array(start => 4152,	end => 4152,	 script => 34),
		array(start => 4153,	end => 4153,	 script => 34),
		array(start => 4160,	end => 4169,	 script => 34),
		array(start => 4176,	end => 4181,	 script => 34),
		array(start => 4182,	end => 4183,	 script => 34),
		array(start => 4184,	end => 4185,	 script => 34),
		array(start => 4256,	end => 4293,	 script => 14),
		array(start => 4304,	end => 4344,	 script => 14),
		array(start => 4352,	end => 4441,	 script => 20),
		array(start => 4447,	end => 4514,	 script => 20),
		array(start => 4520,	end => 4601,	 script => 20),
		array(start => 4608,	end => 4614,	 script => 13),
		array(start => 4616,	end => 4678,	 script => 13),
		array(start => 4680,	end => 4680,	 script => 13),
		array(start => 4682,	end => 4685,	 script => 13),
		array(start => 4688,	end => 4694,	 script => 13),
		array(start => 4696,	end => 4696,	 script => 13),
		array(start => 4698,	end => 4701,	 script => 13),
		array(start => 4704,	end => 4742,	 script => 13),
		array(start => 4744,	end => 4744,	 script => 13),
		array(start => 4746,	end => 4749,	 script => 13),
		array(start => 4752,	end => 4782,	 script => 13),
		array(start => 4784,	end => 4784,	 script => 13),
		array(start => 4786,	end => 4789,	 script => 13),
		array(start => 4792,	end => 4798,	 script => 13),
		array(start => 4800,	end => 4800,	 script => 13),
		array(start => 4802,	end => 4805,	 script => 13),
		array(start => 4808,	end => 4814,	 script => 13),
		array(start => 4816,	end => 4822,	 script => 13),
		array(start => 4824,	end => 4846,	 script => 13),
		array(start => 4848,	end => 4878,	 script => 13),
		array(start => 4880,	end => 4880,	 script => 13),
		array(start => 4882,	end => 4885,	 script => 13),
		array(start => 4888,	end => 4894,	 script => 13),
		array(start => 4896,	end => 4934,	 script => 13),
		array(start => 4936,	end => 4954,	 script => 13),
		array(start => 4969,	end => 4977,	 script => 13),
		array(start => 4978,	end => 4988,	 script => 13),
		array(start => 5024,	end => 5108,	 script => 7),
		array(start => 5121,	end => 5740,	 script => 6),
		array(start => 5743,	end => 5750,	 script => 6),
		array(start => 5761,	end => 5786,	 script => 35),
		array(start => 5792,	end => 5866,	 script => 39),
		array(start => 5870,	end => 5872,	 script => 39),
		array(start => 5888,	end => 5900,	 script => 43),
		array(start => 5902,	end => 5905,	 script => 43),
		array(start => 5906,	end => 5908,	 script => 43),
		array(start => 5920,	end => 5937,	 script => 21),
		array(start => 5938,	end => 5940,	 script => 21),
		array(start => 5952,	end => 5969,	 script => 5),
		array(start => 5970,	end => 5971,	 script => 5),
		array(start => 5984,	end => 5996,	 script => 44),
		array(start => 5998,	end => 6000,	 script => 44),
		array(start => 6002,	end => 6003,	 script => 44),
		array(start => 6016,	end => 6067,	 script => 27),
		array(start => 6068,	end => 6069,	 script => 27),
		array(start => 6070,	end => 6070,	 script => 27),
		array(start => 6071,	end => 6077,	 script => 27),
		array(start => 6078,	end => 6085,	 script => 27),
		array(start => 6086,	end => 6086,	 script => 27),
		array(start => 6087,	end => 6088,	 script => 27),
		array(start => 6089,	end => 6099,	 script => 27),
		array(start => 6112,	end => 6121,	 script => 27),
		array(start => 6155,	end => 6157,	 script => 24),
		array(start => 6160,	end => 6169,	 script => 33),
		array(start => 6176,	end => 6210,	 script => 33),
		array(start => 6211,	end => 6211,	 script => 33),
		array(start => 6212,	end => 6263,	 script => 33),
		array(start => 6272,	end => 6312,	 script => 33),
		array(start => 6313,	end => 6313,	 script => 33),
		array(start => 6400,	end => 6428,	 script => 30),
		array(start => 6432,	end => 6434,	 script => 30),
		array(start => 6435,	end => 6438,	 script => 30),
		array(start => 6439,	end => 6440,	 script => 30),
		array(start => 6441,	end => 6443,	 script => 30),
		array(start => 6448,	end => 6449,	 script => 30),
		array(start => 6450,	end => 6450,	 script => 30),
		array(start => 6451,	end => 6456,	 script => 30),
		array(start => 6457,	end => 6459,	 script => 30),
		array(start => 6470,	end => 6479,	 script => 30),
		array(start => 6480,	end => 6509,	 script => 45),
		array(start => 6512,	end => 6516,	 script => 45),
		array(start => 7424,	end => 7461,	 script => 29),
		array(start => 7462,	end => 7466,	 script => 16),
		array(start => 7467,	end => 7467,	 script => 10),
		array(start => 7468,	end => 7516,	 script => 29),
		array(start => 7517,	end => 7521,	 script => 16),
		array(start => 7522,	end => 7525,	 script => 29),
		array(start => 7526,	end => 7530,	 script => 16),
		array(start => 7531,	end => 7531,	 script => 29),
		array(start => 7680,	end => 7835,	 script => 29),
		array(start => 7840,	end => 7929,	 script => 29),
		array(start => 7936,	end => 7957,	 script => 16),
		array(start => 7960,	end => 7965,	 script => 16),
		array(start => 7968,	end => 8005,	 script => 16),
		array(start => 8008,	end => 8013,	 script => 16),
		array(start => 8016,	end => 8023,	 script => 16),
		array(start => 8025,	end => 8025,	 script => 16),
		array(start => 8027,	end => 8027,	 script => 16),
		array(start => 8029,	end => 8029,	 script => 16),
		array(start => 8031,	end => 8061,	 script => 16),
		array(start => 8064,	end => 8116,	 script => 16),
		array(start => 8118,	end => 8124,	 script => 16),
		array(start => 8126,	end => 8126,	 script => 16),
		array(start => 8130,	end => 8132,	 script => 16),
		array(start => 8134,	end => 8140,	 script => 16),
		array(start => 8144,	end => 8147,	 script => 16),
		array(start => 8150,	end => 8155,	 script => 16),
		array(start => 8160,	end => 8172,	 script => 16),
		array(start => 8178,	end => 8180,	 script => 16),
		array(start => 8182,	end => 8188,	 script => 16),
		array(start => 8305,	end => 8305,	 script => 29),
		array(start => 8319,	end => 8319,	 script => 29),
		array(start => 8400,	end => 8412,	 script => 24),
		array(start => 8413,	end => 8416,	 script => 24),
		array(start => 8417,	end => 8417,	 script => 24),
		array(start => 8418,	end => 8420,	 script => 24),
		array(start => 8421,	end => 8426,	 script => 24),
		array(start => 8486,	end => 8486,	 script => 16),
		array(start => 8490,	end => 8491,	 script => 29),
		array(start => 10240,	end => 10495,	 script => 4),
		array(start => 11904,	end => 11929,	 script => 19),
		array(start => 11931,	end => 12019,	 script => 19),
		array(start => 12032,	end => 12245,	 script => 19),
		array(start => 12293,	end => 12293,	 script => 19),
		array(start => 12295,	end => 12295,	 script => 19),
		array(start => 12321,	end => 12329,	 script => 19),
		array(start => 12330,	end => 12335,	 script => 24),
		array(start => 12344,	end => 12346,	 script => 19),
		array(start => 12347,	end => 12347,	 script => 19),
		array(start => 12353,	end => 12438,	 script => 23),
		array(start => 12441,	end => 12442,	 script => 24),
		array(start => 12445,	end => 12446,	 script => 23),
		array(start => 12447,	end => 12447,	 script => 23),
		array(start => 12449,	end => 12538,	 script => 26),
		array(start => 12541,	end => 12542,	 script => 26),
		array(start => 12543,	end => 12543,	 script => 26),
		array(start => 12549,	end => 12588,	 script => 3),
		array(start => 12593,	end => 12686,	 script => 20),
		array(start => 12704,	end => 12727,	 script => 3),
		array(start => 12784,	end => 12799,	 script => 26),
		array(start => 13312,	end => 19893,	 script => 19),
		array(start => 19968,	end => 40869,	 script => 19),
		array(start => 40960,	end => 42124,	 script => 52),
		array(start => 42128,	end => 42182,	 script => 52),
		array(start => 44032,	end => 55203,	 script => 20),
		array(start => 63744,	end => 64045,	 script => 19),
		array(start => 64048,	end => 64106,	 script => 19),
		array(start => 64256,	end => 64262,	 script => 29),
		array(start => 64275,	end => 64279,	 script => 1),
		array(start => 64285,	end => 64285,	 script => 22),
		array(start => 64286,	end => 64286,	 script => 24),
		array(start => 64287,	end => 64296,	 script => 22),
		array(start => 64298,	end => 64310,	 script => 22),
		array(start => 64312,	end => 64316,	 script => 22),
		array(start => 64318,	end => 64318,	 script => 22),
		array(start => 64320,	end => 64321,	 script => 22),
		array(start => 64323,	end => 64324,	 script => 22),
		array(start => 64326,	end => 64335,	 script => 22),
		array(start => 64336,	end => 64433,	 script => 0),
		array(start => 64467,	end => 64829,	 script => 0),
		array(start => 64848,	end => 64911,	 script => 0),
		array(start => 64914,	end => 64967,	 script => 0),
		array(start => 65008,	end => 65019,	 script => 0),
		array(start => 65024,	end => 65039,	 script => 24),
		array(start => 65056,	end => 65059,	 script => 24),
		array(start => 65136,	end => 65140,	 script => 0),
		array(start => 65142,	end => 65276,	 script => 0),
		array(start => 65313,	end => 65338,	 script => 29),
		array(start => 65345,	end => 65370,	 script => 29),
		array(start => 65382,	end => 65391,	 script => 26),
		array(start => 65393,	end => 65437,	 script => 26),
		array(start => 65440,	end => 65470,	 script => 20),
		array(start => 65474,	end => 65479,	 script => 20),
		array(start => 65482,	end => 65487,	 script => 20),
		array(start => 65490,	end => 65495,	 script => 20),
		array(start => 65498,	end => 65500,	 script => 20),
		array(start => 65536,	end => 65547,	 script => 31),
		array(start => 65549,	end => 65574,	 script => 31),
		array(start => 65576,	end => 65594,	 script => 31),
		array(start => 65596,	end => 65597,	 script => 31),
		array(start => 65599,	end => 65613,	 script => 31),
		array(start => 65616,	end => 65629,	 script => 31),
		array(start => 65664,	end => 65786,	 script => 31),
		array(start => 66304,	end => 66334,	 script => 36),
		array(start => 66352,	end => 66377,	 script => 15),
		array(start => 66378,	end => 66378,	 script => 15),
		array(start => 66432,	end => 66461,	 script => 51),
		array(start => 66560,	end => 66639,	 script => 11),
		array(start => 66640,	end => 66687,	 script => 40),
		array(start => 66688,	end => 66717,	 script => 38),
		array(start => 66720,	end => 66729,	 script => 38),
		array(start => 67584,	end => 67589,	 script => 9),
		array(start => 67592,	end => 67592,	 script => 9),
		array(start => 67594,	end => 67637,	 script => 9),
		array(start => 67639,	end => 67640,	 script => 9),
		array(start => 67644,	end => 67644,	 script => 9),
		array(start => 67647,	end => 67647,	 script => 9),
		array(start => 119143,	end => 119145,	 script => 24),
		array(start => 119163,	end => 119170,	 script => 24),
		array(start => 119173,	end => 119179,	 script => 24),
		array(start => 119210,	end => 119213,	 script => 24),
		array(start => 131072,	end => 173782,	 script => 19),
		array(start => 194560,	end => 195101,	 script => 19),
	);

?>
