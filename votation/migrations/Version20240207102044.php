<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207102044 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sessions_candidats (id INT AUTO_INCREMENT NOT NULL, candidat_id INT NOT NULL, session_id INT DEFAULT NULL, INDEX IDX_1DEA8C438D0EB82 (candidat_id), INDEX IDX_1DEA8C43613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE sessions_candidats ADD CONSTRAINT FK_1DEA8C438D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidats (id)');
        $this->addSql('ALTER TABLE sessions_candidats ADD CONSTRAINT FK_1DEA8C43613FECDF FOREIGN KEY (session_id) REFERENCES sessions_vote (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sessions_candidats DROP FOREIGN KEY FK_1DEA8C438D0EB82');
        $this->addSql('ALTER TABLE sessions_candidats DROP FOREIGN KEY FK_1DEA8C43613FECDF');
        $this->addSql('DROP TABLE sessions_candidats');
    }
}
