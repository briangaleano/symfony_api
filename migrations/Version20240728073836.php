<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240728073836 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etl_detail (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, maiden_name VARCHAR(255) DEFAULT NULL, age INT DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, username VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, birth_date VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, blood_group VARCHAR(255) DEFAULT NULL, height DOUBLE PRECISION DEFAULT NULL, weight DOUBLE PRECISION DEFAULT NULL, eye_color VARCHAR(255) DEFAULT NULL, hair_color VARCHAR(255) DEFAULT NULL, hair_type VARCHAR(255) DEFAULT NULL, ip VARCHAR(255) NOT NULL, address_address VARCHAR(255) NOT NULL, address_city VARCHAR(255) NOT NULL, address_state VARCHAR(255) NOT NULL, address_state_code VARCHAR(255) NOT NULL, address_postal_code VARCHAR(255) NOT NULL, address_coordinates_lat DOUBLE PRECISION DEFAULT NULL, address_coordinates_lng DOUBLE PRECISION DEFAULT NULL, address_country VARCHAR(255) NOT NULL, mac_address VARCHAR(255) NOT NULL, university VARCHAR(255) NOT NULL, bank_card_expire VARCHAR(255) NOT NULL, bank_card_number VARCHAR(255) NOT NULL, bank_card_type VARCHAR(255) NOT NULL, bank_currency VARCHAR(255) NOT NULL, bank_iban VARCHAR(255) NOT NULL, company_department VARCHAR(255) NOT NULL, company_name VARCHAR(255) NOT NULL, company_title VARCHAR(255) NOT NULL, company_address_address VARCHAR(255) NOT NULL, company_address_city VARCHAR(255) NOT NULL, company_address_state VARCHAR(255) NOT NULL, company_address_state_code VARCHAR(255) NOT NULL, company_address_postal_code VARCHAR(255) NOT NULL, company_address_coordinates_lat VARCHAR(255) NOT NULL, company_address_coordinates_lng VARCHAR(255) NOT NULL, company_address_country VARCHAR(255) NOT NULL, ein VARCHAR(255) NOT NULL, ssn VARCHAR(255) NOT NULL, user_agent VARCHAR(255) NOT NULL, crypto_coin VARCHAR(255) NOT NULL, crypto_wallet VARCHAR(255) NOT NULL, crypto_network VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE summary (id INT AUTO_INCREMENT NOT NULL, date_insertion DATETIME NOT NULL, process_etl INT NULL, file_path VARCHAR(255) NOT NULL, file_path_etl VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE etl_detail');
        $this->addSql('DROP TABLE summary');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
