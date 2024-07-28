<?php

namespace App\Service;

use App\Models\AgeCount;

class EtlData{
    public function transforData(array $responseArray)  {

        $register = $responseArray['total'];
        $males = 0;
        $female = 0;
        $windows = 0;
        $apple = 0;
        $linux = 0;
        $other = 0;

        $ageAcount = new AgeCount();
        $infoCity = array();
        
        
        foreach ($responseArray['users'] as $key => $value) {
            
            if($value['gender'] == 'male'){
                $males++;

                if ($value['age'] >= 0 && $value['age'] <= 10) {
                    $ageAcount->setMale010($ageAcount->getMale010());
                }else if ($value['age'] >= 11 && $value['age'] <= 20) {
                    $ageAcount->setMale1120($ageAcount->getMale1120());
                }else if ($value['age'] >= 21 && $value['age'] <= 30) {
                    $ageAcount->setMale2130($ageAcount->getMale2130());
                }else if ($value['age'] >= 31 && $value['age'] <= 40) {
                    $ageAcount->setMale3140($ageAcount->getMale3140());
                }else if ($value['age'] >= 41 && $value['age'] <= 50) {
                    $ageAcount->setMale4150($ageAcount->getMale4150());
                }else if ($value['age'] >= 51 && $value['age'] <= 60) {
                    $ageAcount->setMale5160($ageAcount->getMale5160());
                }else if ($value['age'] >= 61 && $value['age'] <= 70) {
                    $ageAcount->setMale6170($ageAcount->getMale6170());
                }else if ($value['age'] >= 71 && $value['age'] <= 80) {
                    $ageAcount->setMale7180($ageAcount->getMale7180());
                }else if ($value['age'] >= 81 && $value['age'] <= 90) {
                    $ageAcount->setMale8190($ageAcount->getMale8190());
                }else{
                    $ageAcount->setMale91($ageAcount->getMale91());
                }

            }else if($value['gender'] == 'female'){
                $female++;
                if ($value['age'] >= 0 && $value['age'] <= 10) {
                    $ageAcount->setFemale010($ageAcount->getFemale010());
                }else if ($value['age'] >= 11 && $value['age'] <= 20) {
                    $ageAcount->setFemale1120($ageAcount->getFemale1120());
                }else if ($value['age'] >= 21 && $value['age'] <= 30) {
                    $ageAcount->setFemale2130($ageAcount->getFemale2130());
                }else if ($value['age'] >= 31 && $value['age'] <= 40) {
                    $ageAcount->setFemale3140($ageAcount->getFemale3140());
                }else if ($value['age'] >= 41 && $value['age'] <= 50) {
                    $ageAcount->setFemale4150($ageAcount->getFemale4150());
                }else if ($value['age'] >= 51 && $value['age'] <= 60) {
                    $ageAcount->setFemale5160($ageAcount->getFemale5160());
                }else if ($value['age'] >= 61 && $value['age'] <= 70) {
                    $ageAcount->setFemale6170($ageAcount->getFemale6170());
                }else if ($value['age'] >= 71 && $value['age'] <= 80) {
                    $ageAcount->setFemale7180($ageAcount->getFemale7180());
                }else if ($value['age'] >= 81 && $value['age'] <= 90) {
                    $ageAcount->setFemale8190($ageAcount->getFemale8190());
                }else{
                    $ageAcount->setFemale91($ageAcount->getFemale91());
                }
            }else{
                if ($value['age'] >= 0 && $value['age'] <= 10) {
                    $ageAcount->setOther010($ageAcount->getOther010());
                }else if ($value['age'] >= 11 && $value['age'] <= 20) {
                    $ageAcount->setOther1120($ageAcount->getOther1120());
                }else if ($value['age'] >= 21 && $value['age'] <= 30) {
                    $ageAcount->setOther2130($ageAcount->getOther2130());
                }else if ($value['age'] >= 31 && $value['age'] <= 40) {
                    $ageAcount->setOther3140($ageAcount->getOther3140());
                }else if ($value['age'] >= 41 && $value['age'] <= 50) {
                    $ageAcount->setOther4150($ageAcount->getOther4150());
                }else if ($value['age'] >= 51 && $value['age'] <= 60) {
                    $ageAcount->setOther5160($ageAcount->getOther5160());
                }else if ($value['age'] >= 61 && $value['age'] <= 70) {
                    $ageAcount->setOther6170($ageAcount->getOther6170());
                }else if ($value['age'] >= 71 && $value['age'] <= 80) {
                    $ageAcount->setOther7180($ageAcount->getOther7180());
                }else if ($value['age'] >= 81 && $value['age'] <= 90) {
                    $ageAcount->setOther8190($ageAcount->getOther8190());
                }else{
                    $ageAcount->setOther91($ageAcount->getOther91());
                }

                $other++;
            }

            if( strstr($value['userAgent'], 'Windows') !== false){
                $windows++;
            }else if(strstr($value['userAgent'], 'Mac') !== false){
                $apple++;
            }else{
                $linux++;
            }

            $city = $value['address']['city'];

            if (!in_array($city, $infoCity)){
                array_push($infoCity, 
                ['name' => $value['address']['city'], 
                'female' => $value['gender'] == 'female' ? 1 :0, 
                'male' => $value['gender'] == 'male' ? 1 :0, 
                'other'=> $value['gender'] == 'other' ? 1 :0]
            );
            }else{
                $index = array_search($city, array_column($infoCity, 'name'));
                if($value['gender'] == 'male'){
                    $infoCity[$index]['male']++;
                }else if($value['gender'] == 'female'){
                    $infoCity[$index]['female']++;
                }else{
                    $infoCity[$index]['other']++;
                }
            }
        }

        $extractInfo = [];

        for ($i=0; $i < sizeof($infoCity); $i++) { 
            array_push($extractInfo, [
                $infoCity[$i]['name'],
                $infoCity[$i]['female'],
                $infoCity[$i]['male'],
                $infoCity[$i]['other']
            ]);
        }



        $allData = [
            [
                'registre',
                $register
            ],
            [
                'gender',
                'total'
            ],
            [
                'male',
                $males
            ],
            [
                'female',
                $female
            ],
            [
                'other',
                $other
            ],
            [],[],
            [
                'age',
                'male',
                'female',
                'other'
            ],
            [
                '0-10',
                $ageAcount->getMale010(),
                $ageAcount->getFemale010(),
                $ageAcount->getOther010(),
            ],
            [
                '11-20',
                $ageAcount->getMale1120(),
                $ageAcount->getFemale1120(),
                $ageAcount->getOther1120(),
            ],
            [
                '21-30',
                $ageAcount->getMale2130(),
                $ageAcount->getFemale2130(),
                $ageAcount->getOther2130(),
            ],
            [
                '31-40',
                $ageAcount->getMale3140(),
                $ageAcount->getFemale3140(),
                $ageAcount->getOther3140(),
            ],
            [
                '41-50',
                $ageAcount->getMale4150(),
                $ageAcount->getFemale4150(),
                $ageAcount->getOther4150(),
            ],
            [
                '51-60',
                $ageAcount->getMale5160(),
                $ageAcount->getFemale5160(),
                $ageAcount->getOther5160(),
            ],
            [
                '61-70',
                $ageAcount->getMale6170(),
                $ageAcount->getFemale6170(),
                $ageAcount->getOther6170(),
            ],
            [
                '71-80',
                $ageAcount->getMale7180(),
                $ageAcount->getFemale7180(),
                $ageAcount->getOther7180(),
            ],
            [
                '81-90',
                $ageAcount->getMale8190(),
                $ageAcount->getFemale8190(),
                $ageAcount->getOther8190(),
            ],
            [
                '91*',
                $ageAcount->getMale91(),
                $ageAcount->getFemale91(),
                $ageAcount->getOther91(),
            ],[],
            [
                'City',
                'male',
                'female',
                'other'
            ],
            ...$extractInfo,
            [],
            [
                'SO',
                'total'
            ],
            [
                'Windows',
                $windows
            ],[
                'Apple',
                $apple
            ],[
                'Linux',
                $linux
            ]
        ];

        return $allData;
    }
}