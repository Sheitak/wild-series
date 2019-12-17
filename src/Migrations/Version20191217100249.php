<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191217100249 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C79AEC3C');
        $this->addSql('DROP INDEX IDX_9474526C79AEC3C ON comment');
        $this->addSql('ALTER TABLE comment ADD program_id INT DEFAULT NULL, DROP programs_id');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C3EB8070A FOREIGN KEY (program_id) REFERENCES program (id)');
        $this->addSql('CREATE INDEX IDX_9474526C3EB8070A ON comment (program_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C3EB8070A');
        $this->addSql('DROP INDEX IDX_9474526C3EB8070A ON comment');
        $this->addSql('ALTER TABLE comment ADD programs_id INT NOT NULL, DROP program_id');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C79AEC3C FOREIGN KEY (programs_id) REFERENCES program (id)');
        $this->addSql('CREATE INDEX IDX_9474526C79AEC3C ON comment (programs_id)');
    }
}
