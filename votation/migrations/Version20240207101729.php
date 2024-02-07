<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207101729 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidats (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, slogan VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE sessions_vote (id INT AUTO_INCREMENT NOT NULL, nb_tours INT NOT NULL, nb_representants INT NOT NULL, status VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE votes (id INT AUTO_INCREMENT NOT NULL, tours INT NOT NULL, session_id INT DEFAULT NULL, candidat_id INT DEFAULT NULL, INDEX IDX_518B7ACF613FECDF (session_id), INDEX IDX_518B7ACF8D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT FK_518B7ACF613FECDF FOREIGN KEY (session_id) REFERENCES sessions_vote (id)');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT FK_518B7ACF8D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidats (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY FK_518B7ACF613FECDF');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY FK_518B7ACF8D0EB82');
        $this->addSql('DROP TABLE candidats');
        $this->addSql('DROP TABLE sessions_vote');
        $this->addSql('DROP TABLE votes');
    }
}