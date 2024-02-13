<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240213145324 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vote (id INT AUTO_INCREMENT NOT NULL, tour INT NOT NULL, session_id_id INT DEFAULT NULL, candidat_id_id INT DEFAULT NULL, INDEX IDX_5A108564A4392681 (session_id_id), INDEX IDX_5A108564BFA9F225 (candidat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT FK_5A108564A4392681 FOREIGN KEY (session_id_id) REFERENCES sessions_vote (id)');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT FK_5A108564BFA9F225 FOREIGN KEY (candidat_id_id) REFERENCES candidat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY FK_5A108564A4392681');
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY FK_5A108564BFA9F225');
        $this->addSql('DROP TABLE vote');
    }
}
