<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240206152232 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidats (id INT AUTO_INCREMENT NOT NULL, slogan VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE membres (id INT AUTO_INCREMENT NOT NULL, nom_membre VARCHAR(50) DEFAULT NULL, prenom_membre VARCHAR(50) DEFAULT NULL, candidats_id INT DEFAULT NULL, INDEX IDX_594AE39CE4CF8FC2 (candidats_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39CE4CF8FC2 FOREIGN KEY (candidats_id) REFERENCES candidats (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membres DROP FOREIGN KEY FK_594AE39CE4CF8FC2');
        $this->addSql('DROP TABLE candidats');
        $this->addSql('DROP TABLE membres');
    }
}
