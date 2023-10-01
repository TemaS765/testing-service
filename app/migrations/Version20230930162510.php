<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230930162510 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add questions and answers';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'1 + 1 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'3\',false,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'2\',true,2)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'0\',false,3)');

        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'2 + 2 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'4\',true,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'3 + 1\',true,2)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'10\',false,3)');

        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'3 + 3 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'1 + 5\',true,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'1\',false,2)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'6\',true,3)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'2 + 4\',true,4)');

        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'4 + 4 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'8\',true,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'4\',false,2)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'0\',false,3)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'0 + 8\',true,4)');

        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'5 + 5 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'6\',false,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'18\',false,2)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'10\',true,3)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'9\',false,4)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'0\',false,5)');

        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'6 + 6 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'3\',false,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'9\',false,2)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'0\',false,3)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'12\',true,4)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'5 + 7\',true,5)');

        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'7 + 7 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'5\',false,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'14\',true,2)');

        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'8 + 8 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'16\',true,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'12\',false,2)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'9\',false,3)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'5\',false,4)');

        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'9 + 9 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'18\',true,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'9\',false,2)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'17 + 1\',true,3)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'2 + 16\',true,4)');

        $this->addSql('INSERT INTO question (id,text) VALUES (nextval(\'question_id_seq\'),\'10 + 10 =\')');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'0\',false,1)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'2\',false,2)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'8\',false,3)');
        $this->addSql('INSERT INTO answer (id,question_id,text,is_true,num) VALUES (nextval(\'answer_id_seq\'),currval(\'question_id_seq\'),\'20\',true,4)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('TRUNCATE answer');
        $this->addSql('TRUNCATE question CASCADE');

        $this->addSql('ALTER SEQUENCE answer_id_seq RESTART WITH 1');
        $this->addSql('ALTER SEQUENCE question_id_seq RESTART WITH 1');
    }
}
