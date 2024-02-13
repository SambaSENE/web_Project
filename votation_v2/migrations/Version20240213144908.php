<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240213144908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, slogan VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE session_candidat (id INT AUTO_INCREMENT NOT NULL, candidat_id_id INT DEFAULT NULL, session_id_id INT DEFAULT NULL, INDEX IDX_E119D419BFA9F225 (candidat_id_id), INDEX IDX_E119D419A4392681 (session_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE sessions_vote (id INT AUTO_INCREMENT NOT NULL, nb_tours VARCHAR(255) NOT NULL, nb_representants INT NOT NULL, status VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE session_candidat ADD CONSTRAINT FK_E119D419BFA9F225 FOREIGN KEY (candidat_id_id) REFERENCES candidat (id)');
        $this->addSql('ALTER TABLE session_candidat ADD CONSTRAINT FK_E119D419A4392681 FOREIGN KEY (session_id_id) REFERENCES sessions_vote (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session_candidat DROP FOREIGN KEY FK_E119D419BFA9F225');
        $this->addSql('ALTER TABLE session_candidat DROP FOREIGN KEY FK_E119D419A4392681');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE session_candidat');
        $this->addSql('DROP TABLE sessions_vote');
    }
}
