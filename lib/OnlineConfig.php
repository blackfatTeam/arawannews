<?php

namespace app\lib;

use \Yii;
use app\Auth;
use app\lib\Workflow;

class OnlineConfig {
	
	/* const ONLINE_ISSUES = 'issues';
	const ONLINE_HOTTOPIC = 'hottopic';
	const ONLINE_OTHER = 'other';
	const ONLINE_CSR = 'csr';
	const ONLINE_HOWTO = 'howto';
	const ONLINE_ADVERTISEMENT = 'advertisement';
	const ONLINE_HOME = 'home'; */
	
	/* if ($lst->categoryId == 'home'){
		$key = 'home';
	}elseif ($lst->categoryId == 'hottopic'){
		$key = 'hottopic';
	}elseif ($lst->categoryId == 'pol'){
		$key = 'pol';
	}elseif ($lst->categoryId == 'economy'){
		$key = 'economy';
	}elseif ($lst->categoryId == 'crime'){
		$key = 'crime';
	}elseif ($lst->categoryId == 'oversea'){
		$key = 'oversea';
	}elseif ($lst->categoryId == 'royal'){
		$key = 'royal';
	}elseif ($lst->categoryId == 'sport'){
		$key = 'sport';
	}elseif ($lst->categoryId == 'region'){
		$key = 'region';
	}elseif ($lst->categoryId == 'food'){
		$key = 'food';
	}elseif ($lst->categoryId == 'shopping'){
		$key = 'shopping';
	}elseif ($lst->categoryId == 'horoscope'){
		$key = 'horoscope';
	}elseif ($lst->categoryId == 'travel'){
		$key = 'travel';
	} */
	
	const ONLINE_HIGHLIGHT = 1;
	const ONLINE_HOTTOPIC = 2;
	const ONLINE_ROYAL = 3;
	const ONLINE_POL = 4;
	const ONLINE_ECONOMY = 5;
	const ONLINE_ENT = 6;
	const ONLINE_SPORT = 7;
	const ONLINE_CRIME = 8;
	const ONLINE_OVERSEA = 9;
	const ONLINE_REGION = 10;
	const ONLINE_SOCIAL = 12;
	const ONLINE_IT = 13;
	const ONLINE_HEALTH = 14;
	const ONLINE_HORO = 17;
	const ONLINE_FOOD = 18;
	const ONLINE_TRAVEL = 19;
	const ONLINE_SHOPPING = 20;
	const ONLINE_TECH = 22;

	
	/* public static $arrSection = [
			self::ONLINE_HOME => [
					'section' => 'home',
					'title' => 'ข่าวหน้าหลัก',
					'limit' => 3,
					'type' => [
							'content',
							'gallery'
					]
						
			],
	]; */
	
	/* public static $arrSection = [
			self::ONLINE_HOME => [
					'section' => 'home',
					'title' => 'ข่าวหน้าหลัก',
					'limit' => 3,
					'type' => [
							'content',
							'gallery'
					]
			
			],
			self::ONLINE_ISSUES => [
					'section' => 'issues',
					'title' => 'จุดประเด็น',
					'limit' => 15,
					'type' => [
						'content',
						'gallery'
					]

			],
			self::ONLINE_HOTTOPIC => [
				'section' => 'hotTopic',
				'title' => 'เกาะกระแส',
				'limit' => 15,
				'type' => [
						'content',
						'gallery'
				]
			],
			self::ONLINE_OTHER => [
				'section' => 'other',
				'title' => 'ปกิณกะ',
				'limit' => 15,
				'type' => [
						'content',
						'gallery'
				]
			],
			self::ONLINE_CSR => [
				'section' => 'csr',
				'title' => 'Corporate Social Responsibility',
				'limit' => 15,
				'type' => [
						'content',
						'gallery'
				]
				
				],
			self::ONLINE_HOWTO => [
				'section' => 'howTo',
				'title' => 'Howto',
				'limit' => 15,
				'type' => [
						'content',
						'gallery'
				]
			],
				
	]; */


}