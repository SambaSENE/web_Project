<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240208084922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sessions_candidat ADD session_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sessions_candidat ADD CONSTRAINT FK_52F65745613FECDF FOREIGN KEY (session_id) REFERENCES sessions_vote (id)');
        $this->addSql('CREATE INDEX IDX_52F65745613FECDF ON sessions_candidat (session_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sessions_candidat DROP FOREIGN KEY FK_52F65745613FECDF');
        $this->addSql('DROP INDEX IDX_52F65745613FECDF ON sessions_candidat');
        $this->addSql('ALTER TABLE sessions_candidat DROP session_id');
    }
}
