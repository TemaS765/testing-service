<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230930185021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exam_execution ADD question_id INT NOT NULL');
        $this->addSql('ALTER TABLE exam_execution ADD answer_ids VARCHAR(255) DEFAULT \'\' NOT NULL');
        $this->addSql('ALTER TABLE exam_execution ADD CONSTRAINT FK_BD33D2631E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_BD33D2631E27F6BF ON exam_execution (question_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exam_execution DROP CONSTRAINT FK_BD33D2631E27F6BF');
        $this->addSql('DROP INDEX IDX_BD33D2631E27F6BF');
        $this->addSql('ALTER TABLE exam_execution DROP question_id');
        $this->addSql('ALTER TABLE exam_execution DROP answer_ids');
    }
}
