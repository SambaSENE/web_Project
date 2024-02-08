<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240208084352 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sessions_candidat (id INT AUTO_INCREMENT NOT NULL, candidat_id INT DEFAULT NULL, INDEX IDX_52F657458D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE sessions_candidat ADD CONSTRAINT FK_52F657458D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidats (id)');
        $this->addSql('ALTER TABLE sessions_candidats DROP FOREIGN KEY FK_1DEA8C43613FECDF');
        $this->addSql('ALTER TABLE sessions_candidats DROP FOREIGN KEY FK_1DEA8C438D0EB82');
        $this->addSql('DROP TABLE sessions_candidats');
        $this->addSql('ALTER TABLE sessions_vote ADD sessions_candidat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sessions_vote ADD CONSTRAINT FK_AC2688E4B13416F3 FOREIGN KEY (sessions_candidat_id) REFERENCES sessions_candidat (id)');
        $this->addSql('CREATE INDEX IDX_AC2688E4B13416F3 ON sessions_vote (sessions_candidat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sessions_candidats (candidat_id INT NOT NULL, session_id INT NOT NULL, INDEX IDX_1DEA8C43613FECDF (session_id), INDEX IDX_1DEA8C438D0EB82 (candidat_id), PRIMARY KEY(candidat_id, session_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE sessions_candidats ADD CONSTRAINT FK_1DEA8C43613FECDF FOREIGN KEY (session_id) REFERENCES sessions_vote (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE sessions_candidats ADD CONSTRAINT FK_1DEA8C438D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidats (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE sessions_candidat DROP FOREIGN KEY FK_52F657458D0EB82');
        $this->addSql('DROP TABLE sessions_candidat');
        $this->addSql('ALTER TABLE sessions_vote DROP FOREIGN KEY FK_AC2688E4B13416F3');
        $this->addSql('DROP INDEX IDX_AC2688E4B13416F3 ON sessions_vote');
        $this->addSql('ALTER TABLE sessions_vote DROP sessions_candidat_id');
    }
}
