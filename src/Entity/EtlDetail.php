<?php

namespace App\Entity;

use App\Repository\EtlDetailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtlDetailRepository::class)]
class EtlDetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $id_register = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $maidenName = null;

    #[ORM\Column(nullable: true)]
    private ?int $age = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gender = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $username = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $birthDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bloodGroup = null;

    #[ORM\Column(nullable: true)]
    private ?float $height = null;

    #[ORM\Column(nullable: true)]
    private ?float $weight = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $eyeColor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hair_color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hair_type = null;

    #[ORM\Column(length: 255)]
    private ?string $ip = null;

    #[ORM\Column(length: 255)]
    private ?string $address_address = null;

    #[ORM\Column(length: 255)]
    private ?string $address_city = null;

    #[ORM\Column(length: 255)]
    private ?string $address_state = null;

    #[ORM\Column(length: 255)]
    private ?string $address_stateCode = null;

    #[ORM\Column(length: 255)]
    private ?string $address_postalCode = null;

    #[ORM\Column(nullable: true)]
    private ?float $address_coordinates_lat = null;

    #[ORM\Column(nullable: true)]
    private ?float $address_coordinates_lng = null;

    #[ORM\Column(length: 255)]
    private ?string $address_country = null;

    #[ORM\Column(length: 255)]
    private ?string $macAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $university = null;

    #[ORM\Column(length: 255)]
    private ?string $bank_cardExpire = null;

    #[ORM\Column(length: 255)]
    private ?string $bank_cardNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $bank_cardType = null;

    #[ORM\Column(length: 255)]
    private ?string $bank_currency = null;

    #[ORM\Column(length: 255)]
    private ?string $bank_iban = null;

    #[ORM\Column(length: 255)]
    private ?string $company_department = null;

    #[ORM\Column(length: 255)]
    private ?string $company_name = null;

    #[ORM\Column(length: 255)]
    private ?string $company_title = null;

    #[ORM\Column(length: 255)]
    private ?string $company_address_address = null;

    #[ORM\Column(length: 255)]
    private ?string $company_address_city = null;

    #[ORM\Column(length: 255)]
    private ?string $company_address_state = null;

    #[ORM\Column(length: 255)]
    private ?string $company_address_stateCode = null;

    #[ORM\Column(length: 255)]
    private ?string $company_address_postalCode = null;

    #[ORM\Column(length: 255)]
    private ?string $company_address_coordinates_lat = null;

    #[ORM\Column(length: 255)]
    private ?string $company_address_coordinates_lng = null;

    #[ORM\Column(length: 255)]
    private ?string $company_address_country = null;

    #[ORM\Column(length: 255)]
    private ?string $ein = null;

    #[ORM\Column(length: 255)]
    private ?string $ssn = null;

    #[ORM\Column(length: 255)]
    private ?string $userAgent = null;

    #[ORM\Column(length: 255)]
    private ?string $crypto_coin = null;

    #[ORM\Column(length: 255)]
    private ?string $crypto_wallet = null;

    #[ORM\Column(length: 255)]
    private ?string $crypto_network = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $summary;

    public function getSummary(): ?Summary
    {
        return $this->summary;
    }

    public function setSummary(?Summary $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setIdRegister(int $id_register): static
    {
        $this->id_register = $id_register;

        return $this;
    }

    public function getIdRegister(): ?int
    {
        return $this->id_register;
    }

    public function setId(?Summary $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getMaidenName(): ?string
    {
        return $this->maidenName;
    }

    public function setMaidenName(?string $maidenName): static
    {
        $this->maidenName = $maidenName;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(?string $birthDate): static
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getBloodGroup(): ?string
    {
        return $this->bloodGroup;
    }

    public function setBloodGroup(?string $bloodGroup): static
    {
        $this->bloodGroup = $bloodGroup;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    public function getEyeColor(): ?string
    {
        return $this->eyeColor;
    }

    public function setEyeColor(?string $eyeColor): static
    {
        $this->eyeColor = $eyeColor;

        return $this;
    }

    public function getHairColor(): ?string
    {
        return $this->hair_color;
    }

    public function setHairColor(?string $hair_color): static
    {
        $this->hair_color = $hair_color;

        return $this;
    }

    public function getHairType(): ?string
    {
        return $this->hair_type;
    }

    public function setHairType(?string $hair_type): static
    {
        $this->hair_type = $hair_type;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): static
    {
        $this->ip = $ip;

        return $this;
    }

    public function getAddressAddress(): ?string
    {
        return $this->address_address;
    }

    public function setAddressAddress(string $address_address): static
    {
        $this->address_address = $address_address;

        return $this;
    }

    public function getAddressCity(): ?string
    {
        return $this->address_city;
    }

    public function setAddressCity(string $address_city): static
    {
        $this->address_city = $address_city;

        return $this;
    }

    public function getSsn(): ?string
    {
        return $this->ssn;
    }

    public function setSsn(?string $ssn): static
    {
        $this->ssn = $ssn;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): static
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getCryptoCoin(): ?string
    {
        return $this->crypto_coin;
    }

    public function setCryptoCoin(?string $crypto_coin): static
    {
        $this->crypto_coin = $crypto_coin;

        return $this;
    }

    public function getCryptoWallet(): ?string
    {
        return $this->crypto_wallet;
    }

    public function setCryptoWallet(?string $crypto_wallet): static
    {
        $this->crypto_wallet = $crypto_wallet;

        return $this;
    }

    public function getCryptoNetwork(): ?string
    {
        return $this->crypto_network;
    }

    public function setCryptoNetwork(?string $crypto_network): static
    {
        $this->crypto_network = $crypto_network;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): static
    {
        $this->role = $role;

        return $this;
    }

    // ... existing properties and methods ...

    public function getAddressState(): ?string
    {
        return $this->address_state;
    }

    public function setAddressState(string $address_state): static
    {
        $this->address_state = $address_state;

        return $this;
    }

    public function getAddressStateCode(): ?string
    {
        return $this->address_stateCode;
    }

    public function setAddressStateCode(string $address_stateCode): static
    {
        $this->address_stateCode = $address_stateCode;

        return $this;
    }

    public function getAddressPostalCode(): ?string
    {
        return $this->address_postalCode;
    }

    public function setAddressPostalCode(string $address_postalCode): static
    {
        $this->address_postalCode = $address_postalCode;

        return $this;
    }

    public function getAddressCoordinatesLat(): ?float
    {
        return $this->address_coordinates_lat;
    }

    public function setAddressCoordinatesLat(?float $address_coordinates_lat): static
    {
        $this->address_coordinates_lat = $address_coordinates_lat;

        return $this;
    }

    public function getAddressCoordinatesLng(): ?float
    {
        return $this->address_coordinates_lng;
    }

    public function setAddressCoordinatesLng(?float $address_coordinates_lng): static
    {
        $this->address_coordinates_lng = $address_coordinates_lng;

        return $this;
    }

    public function getAddressCountry(): ?string
    {
        return $this->address_country;
    }

    public function setAddressCountry(string $address_country): static
    {
        $this->address_country = $address_country;

        return $this;
    }

    public function getMacAddress(): ?string
    {
        return $this->macAddress;
    }

    public function setMacAddress(string $macAddress): static
    {
        $this->macAddress = $macAddress;

        return $this;
    }

    public function getUniversity(): ?string
    {
        return $this->university;
    }

    public function setUniversity(string $university): static
    {
        $this->university = $university;

        return $this;
    }

    public function getBankCardExpire(): ?string
    {
        return $this->bank_cardExpire;
    }

    public function setBankCardExpire(string $bank_cardExpire): static
    {
        $this->bank_cardExpire = $bank_cardExpire;

        return $this;
    }

    public function getBankCardNumber(): ?string
    {
        return $this->bank_cardNumber;
    }

    public function setBankCardNumber(string $bank_cardNumber): static
    {
        $this->bank_cardNumber = $bank_cardNumber;

        return $this;
    }

    public function getBankCardType(): ?string
    {
        return $this->bank_cardType;
    }

    public function setBankCardType(string $bank_cardType): static
    {
        $this->bank_cardType = $bank_cardType;

        return $this;
    }

    public function getBankCurrency(): ?string
    {
        return $this->bank_currency;
    }

    public function setBankCurrency(string $bank_currency): static
    {
        $this->bank_currency = $bank_currency;

        return $this;
    }

    public function getBankIban(): ?string
    {
        return $this->bank_iban;
    }

    public function setBankIban(string $bank_iban): static
    {
        $this->bank_iban = $bank_iban;

        return $this;
    }

    public function getCompanyDepartment(): ?string
    {
        return $this->company_department;
    }

    public function setCompanyDepartment(string $company_department): static
    {
        $this->company_department = $company_department;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }

    public function setCompanyName(string $company_name): static
    {
        $this->company_name = $company_name;

        return $this;
    }

    public function getCompanyTitle(): ?string
    {
        return $this->company_title;
    }

    public function setCompanyTitle(string $company_title): static
    {
        $this->company_title = $company_title;

        return $this;
    }
    public function setCompanyAddressAddress(string $company_address_address): static
    {
        $this->company_address_address = $company_address_address;

        return $this;
    }

    public function getCompanyAddressAddress(): ?string
    {
        return $this->company_address_address;
    }


    public function getCompanyAddressCity(): ?string
    {
        return $this->company_address_city;
    }

    public function setCompanyAddressCity(string $company_address_city): static
    {
        $this->company_address_city = $company_address_city;

        return $this;
    }

    public function getCompanyAddressState(): ?string
    {
        return $this->company_address_state;
    }

    public function setCompanyAddressState(string $company_address_state): static
    {
        $this->company_address_state = $company_address_state;

        return $this;
    }

    public function getCompanyAddressStateCode(): ?string
    {
        return $this->company_address_stateCode;
    }

    public function setCompanyAddressStateCode(string $company_address_stateCode): static
    {
        $this->company_address_stateCode = $company_address_stateCode;

        return $this;
    }

    public function getCompanyAddressPostalCode(): ?string
    {
        return $this->company_address_postalCode;
    }

    public function setCompanyAddressPostalCode(string $company_address_postalCode): static
    {
        $this->company_address_postalCode = $company_address_postalCode;

        return $this;
    }

    public function getCompanyAddressCoordinatesLat(): ?string
    {
        return $this->company_address_coordinates_lat;
    }

    public function setCompanyAddressCoordinatesLat(string $company_address_coordinates_lat): static
    {
        $this->company_address_coordinates_lat = $company_address_coordinates_lat;

        return $this;
    }

    public function getCompanyAddressCoordinatesLng(): ?string
    {
        return $this->company_address_coordinates_lng;
    }

    public function setCompanyAddressCoordinatesLng(string $company_address_coordinates_lng): static
    {
        $this->company_address_coordinates_lng = $company_address_coordinates_lng;

        return $this;
    }

    public function getCompanyAddressCountry(): ?string
    {
        return $this->company_address_country;
    }

    public function setCompanyAddressCountry(string $company_address_country): static
    {
        $this->company_address_country = $company_address_country;

        return $this;
    }
    public function getEin(): ?string
    {
        return $this->ein;
    }

    public function setEin(string $ein): static
    {
        $this->ein = $ein;

        return $this;
    }
}
