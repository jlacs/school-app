<?php

namespace Database\Migrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema as Schema;

class Version20220913061316 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema): void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE people (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, occupation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE students (id INT NOT NULL, tuition VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teachers (id INT NOT NULL, salary VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE students ADD CONSTRAINT FK_A4698DB2BF396750 FOREIGN KEY (id) REFERENCES people (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teachers ADD CONSTRAINT FK_ED071FF6BF396750 FOREIGN KEY (id) REFERENCES people (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema): void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE students DROP FOREIGN KEY FK_A4698DB2BF396750');
        $this->addSql('ALTER TABLE teachers DROP FOREIGN KEY FK_ED071FF6BF396750');
        $this->addSql('DROP TABLE people');
        $this->addSql('DROP TABLE students');
        $this->addSql('DROP TABLE teachers');
    }
}
