<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210724193432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE health_data (health_data_uuid BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', patient_uuid BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', call_time_starts DATETIME DEFAULT NULL, call_time_ends DATETIME DEFAULT NULL, date_time_collected DATETIME NOT NULL, weight DOUBLE PRECISION DEFAULT NULL, height DOUBLE PRECISION DEFAULT NULL, blood_pressure_high INT DEFAULT NULL, blood_pressure_low INT DEFAULT NULL, glucose_level INT DEFAULT NULL, PRIMARY KEY(health_data_uuid)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE health_data');
    }
}
