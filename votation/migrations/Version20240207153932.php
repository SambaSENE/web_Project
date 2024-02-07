<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207153932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sessions_candidats ADD id INT AUTO_INCREMENT NOT NULL, CHANGE session_id session_id INT DEFAULT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE sessions_candidats ADD CONSTRAINT FK_1DEA8C438D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidats (id)');
        $this->addSql('ALTER TABLE sessions_candidats ADD CONSTRAINT FK_1DEA8C43613FECDF FOREIGN KEY (session_id) REFERENCES sessions_vote (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sessions_candidats MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE sessions_candidats DROP FOREIGN KEY FK_1DEA8C438D0EB82');
        $this->addSql('ALTER TABLE sessions_candidats DROP FOREIGN KEY FK_1DEA8C43613FECDF');
        $this->addSql('DROP INDEX `PRIMARY` ON sessions_candidats');
        $this->addSql('ALTER TABLE sessions_candidats DROP id, CHANGE session_id session_id INT NOT NULL');
        $this->addSql('ALTER TABLE sessions_candidats ADD PRIMARY KEY (candidat_id, session_id)');
    }
}
