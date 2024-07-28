<?php

namespace App\Service;

use DateTime;
use App\Entity\Summary;
use App\Entity\EtlDetail;
use Doctrine\ORM\EntityManagerInterface;

class SaveInfoDB{

    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function saveInfoEtl(array $data, Summary $summary)
    {
        foreach ($data as $record) {
            
            $etylDetail = new EtlDetail();
            $etylDetail->setSummary($summary);
            $etylDetail->setIdRegister($record['id']);
            $etylDetail->setFirstName($record['firstName']);
            $etylDetail->setLastName($record['lastName']);
            $etylDetail->setMaidenName($record['maidenName']);
            $etylDetail->setAge($record['age']);
            $etylDetail->setGender($record['gender']);
            $etylDetail->setEmail($record['email']);
            $etylDetail->setPhone($record['phone']);
            $etylDetail->setUsername($record['username']);
            $etylDetail->setPassword($record['password']);
            $etylDetail->setBirthDate($record['birthDate']);
            $etylDetail->setImage($record['image']);
            $etylDetail->setBloodGroup($record['bloodGroup']);
            $etylDetail->setHeight($record['height']);
            $etylDetail->setWeight($record['weight']);
            $etylDetail->setEyeColor($record['eyeColor']);
            $etylDetail->setHairColor($record['hair_color']);
            $etylDetail->setHairType($record['hair_type']);
            $etylDetail->setIp($record['ip']);
            $etylDetail->setAddressAddress($record['address_address']);
            $etylDetail->setAddressCity($record['address_city']);
            $etylDetail->setAddressState($record['address_state']);
            $etylDetail->setAddressStateCode($record['address_stateCode']);
            $etylDetail->setAddressPostalCode($record['address_postalCode']);
            $etylDetail->setAddressCoordinatesLat($record['address_coordinates_lat']);
            $etylDetail->setAddressCoordinatesLng($record['address_coordinates_lng']);
            $etylDetail->setAddressCountry($record['address_country']);
            $etylDetail->setMacAddress($record['macAddress']);
            $etylDetail->setUniversity($record['university']);
            $etylDetail->setBankCardExpire($record['bank_cardExpire']);
            $etylDetail->setBankCardNumber($record['bank_cardNumber']);
            $etylDetail->setBankCardType($record['bank_cardType']);
            $etylDetail->setBankCurrency($record['bank_currency']);
            $etylDetail->setBankIban($record['bank_iban']);
            $etylDetail->setCompanyDepartment($record['company_department']);
            $etylDetail->setCompanyName($record['company_name']);
            $etylDetail->setCompanyTitle($record['company_title']);
            $etylDetail->setCompanyAddressAddress($record['company_address_address']);
            $etylDetail->setCompanyAddressCity($record['company_address_city']);
            $etylDetail->setCompanyAddressState($record['company_address_state']);
            $etylDetail->setCompanyAddressStateCode($record['company_address_stateCode']);
            $etylDetail->setCompanyAddressPostalCode($record['company_address_postalCode']);
            $etylDetail->setCompanyAddressCoordinatesLat($record['company_address_coordinates_lat']);
            $etylDetail->setCompanyAddressCoordinatesLng($record['company_address_coordinates_lng']);
            $etylDetail->setCompanyAddressCountry($record['company_address_country']);
            $etylDetail->setEin($record['ein']);
            $etylDetail->setSsn($record['ssn']);
            $etylDetail->setUserAgent($record['userAgent']);
            $etylDetail->setCryptoCoin($record['crypto_coin']);
            $etylDetail->setCryptoWallet($record['crypto_wallet']);
            $etylDetail->setCryptoNetwork($record['crypto_network']);
            $etylDetail->setRole($record['role']);

            $this->entityManager->persist($etylDetail);
            $this->entityManager->flush();
        }
        

        return $etylDetail;
    }

    public function saveInfoSummary(string $filepath, string $filepathetl)
    {
        $summary = new Summary();
        $summary->setDateInsertion(new DateTime());
        $summary->setFilePath($filepath);
        $summary->setFilePathEtl($filepathetl);

        $this->entityManager->persist($summary);
        $this->entityManager->flush();

        return $summary;
    }
}