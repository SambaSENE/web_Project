<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207102207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sessions_candidats MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON sessions_candidats');
        $this->addSql('ALTER TABLE sessions_candidats DROP id, CHANGE session_id session_id INT NOT NULL');
        $this->addSql('ALTER TABLE sessions_candidats ADD PRIMARY KEY (candidat_id, session_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sessions_candidats ADD id INT AUTO_INCREMENT NOT NULL, CHANGE session_id session_id INT DEFAULT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}
