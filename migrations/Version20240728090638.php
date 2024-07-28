<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240728090638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etl_detail CHANGE first_name first_name VARCHAR(255) DEFAULT NULL, CHANGE last_name last_name VARCHAR(255) DEFAULT NULL, CHANGE maiden_name maiden_name VARCHAR(255) DEFAULT NULL, CHANGE gender gender VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL, CHANGE username username VARCHAR(255) DEFAULT NULL, CHANGE password password VARCHAR(255) DEFAULT NULL, CHANGE birth_date birth_date VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE blood_group blood_group VARCHAR(255) DEFAULT NULL, CHANGE height height DOUBLE PRECISION DEFAULT NULL, CHANGE weight weight DOUBLE PRECISION DEFAULT NULL, CHANGE eye_color eye_color VARCHAR(255) DEFAULT NULL, CHANGE hair_color hair_color VARCHAR(255) DEFAULT NULL, CHANGE hair_type hair_type VARCHAR(255) DEFAULT NULL, CHANGE address_coordinates_lat address_coordinates_lat DOUBLE PRECISION DEFAULT NULL, CHANGE address_coordinates_lng address_coordinates_lng DOUBLE PRECISION DEFAULT NULL, CHANGE id_register id_register VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etl_detail CHANGE id_register id_register VARCHAR(255) DEFAULT \'NULL\', CHANGE first_name first_name VARCHAR(255) DEFAULT \'NULL\', CHANGE last_name last_name VARCHAR(255) DEFAULT \'NULL\', CHANGE maiden_name maiden_name VARCHAR(255) DEFAULT \'NULL\', CHANGE gender gender VARCHAR(255) DEFAULT \'NULL\', CHANGE email email VARCHAR(255) DEFAULT \'NULL\', CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\', CHANGE username username VARCHAR(255) DEFAULT \'NULL\', CHANGE password password VARCHAR(255) DEFAULT \'NULL\', CHANGE birth_date birth_date VARCHAR(255) DEFAULT \'NULL\', CHANGE image image VARCHAR(255) DEFAULT \'NULL\', CHANGE blood_group blood_group VARCHAR(255) DEFAULT \'NULL\', CHANGE height height DOUBLE PRECISION DEFAULT \'NULL\', CHANGE weight weight DOUBLE PRECISION DEFAULT \'NULL\', CHANGE eye_color eye_color VARCHAR(255) DEFAULT \'NULL\', CHANGE hair_color hair_color VARCHAR(255) DEFAULT \'NULL\', CHANGE hair_type hair_type VARCHAR(255) DEFAULT \'NULL\', CHANGE address_coordinates_lat address_coordinates_lat DOUBLE PRECISION DEFAULT \'NULL\', CHANGE address_coordinates_lng address_coordinates_lng DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
    }
}
