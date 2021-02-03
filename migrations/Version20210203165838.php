<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210203165838 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aver_si_anda (id INT AUTO_INCREMENT NOT NULL, campo1 VARCHAR(200) NOT NULL, campo2 INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('DROP TABLE pruebatp3');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pruebatp3 (nombre VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, apellido VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, dni INT NOT NULL, mail INT NOT NULL) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        //$this->addSql('DROP TABLE aver_si_anda');
    }
}
