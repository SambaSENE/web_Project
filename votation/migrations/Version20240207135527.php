<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207135527 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidats (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, slogan VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE sessions_candidats (candidat_id INT NOT NULL, session_id INT NOT NULL, INDEX IDX_1DEA8C438D0EB82 (candidat_id), INDEX IDX_1DEA8C43613FECDF (session_id), PRIMARY KEY(candidat_id, session_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE sessions_candidats ADD CONSTRAINT FK_1DEA8C438D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidats (id)');
        $this->addSql('ALTER TABLE sessions_candidats ADD CONSTRAINT FK_1DEA8C43613FECDF FOREIGN KEY (session_id) REFERENCES sessions_vote (id)');
        $this->addSql('ALTER TABLE sessions_candidat DROP FOREIGN KEY FK_1DEA8C43613FECDF');
        $this->addSql('ALTER TABLE sessions_candidat DROP FOREIGN KEY FK_1DEA8C438D0EB82');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE sessions_candidat');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY FK_518B7ACF8D0EB82');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT FK_518B7ACF8D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidats (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, prenom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, slogan VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE sessions_candidat (candidat_id INT NOT NULL, session_id INT NOT NULL, INDEX IDX_1DEA8C43613FECDF (session_id), INDEX IDX_1DEA8C438D0EB82 (candidat_id), PRIMARY KEY(candidat_id, session_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE sessions_candidat ADD CONSTRAINT FK_1DEA8C43613FECDF FOREIGN KEY (session_id) REFERENCES sessions_vote (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE sessions_candidat ADD CONSTRAINT FK_1DEA8C438D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE sessions_candidats DROP FOREIGN KEY FK_1DEA8C438D0EB82');
        $this->addSql('ALTER TABLE sessions_candidats DROP FOREIGN KEY FK_1DEA8C43613FECDF');
        $this->addSql('DROP TABLE candidats');
        $this->addSql('DROP TABLE sessions_candidats');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY FK_518B7ACF8D0EB82');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT FK_518B7ACF8D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
