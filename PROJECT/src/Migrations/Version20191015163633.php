<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191015163633 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE store DROP FOREIGN KEY FK_FF57587721671777');
        $this->addSql('ALTER TABLE store DROP FOREIGN KEY FK_FF5758775B974FE2');
        $this->addSql('ALTER TABLE store DROP FOREIGN KEY FK_FF575877812B93DE');
        $this->addSql('ALTER TABLE store DROP FOREIGN KEY FK_FF575877A81EA377');
        $this->addSql('ALTER TABLE store DROP FOREIGN KEY FK_FF575877B86AC6FA');
        $this->addSql('ALTER TABLE store DROP FOREIGN KEY FK_FF575877BBA2EEBE');
        $this->addSql('ALTER TABLE store DROP FOREIGN KEY FK_FF575877D68DEE5D');
        $this->addSql('DROP INDEX UNIQ_FF575877A81EA377 ON store');
        $this->addSql('DROP INDEX UNIQ_FF57587721671777 ON store');
        $this->addSql('DROP INDEX UNIQ_FF575877BBA2EEBE ON store');
        $this->addSql('DROP INDEX UNIQ_FF575877812B93DE ON store');
        $this->addSql('DROP INDEX UNIQ_FF575877B86AC6FA ON store');
        $this->addSql('DROP INDEX UNIQ_FF5758775B974FE2 ON store');
        $this->addSql('DROP INDEX UNIQ_FF575877D68DEE5D ON store');
        $this->addSql('ALTER TABLE store ADD monday VARCHAR(255) DEFAULT NULL, ADD tuesday VARCHAR(255) DEFAULT NULL, ADD wednesday VARCHAR(255) DEFAULT NULL, ADD thursday VARCHAR(255) DEFAULT NULL, ADD friday VARCHAR(255) DEFAULT NULL, ADD saturday VARCHAR(255) DEFAULT NULL, ADD sunday VARCHAR(255) DEFAULT NULL, DROP monday_id, DROP tuesday_id, DROP wednesday_id, DROP thursday_id, DROP friday_id, DROP saturday_id, DROP sunday_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE store ADD monday_id INT DEFAULT NULL, ADD tuesday_id INT DEFAULT NULL, ADD wednesday_id INT DEFAULT NULL, ADD thursday_id INT DEFAULT NULL, ADD friday_id INT DEFAULT NULL, ADD saturday_id INT DEFAULT NULL, ADD sunday_id INT DEFAULT NULL, DROP monday, DROP tuesday, DROP wednesday, DROP thursday, DROP friday, DROP saturday, DROP sunday');
        $this->addSql('ALTER TABLE store ADD CONSTRAINT FK_FF57587721671777 FOREIGN KEY (monday_id) REFERENCES schedule (id)');
        $this->addSql('ALTER TABLE store ADD CONSTRAINT FK_FF5758775B974FE2 FOREIGN KEY (tuesday_id) REFERENCES schedule (id)');
        $this->addSql('ALTER TABLE store ADD CONSTRAINT FK_FF575877812B93DE FOREIGN KEY (friday_id) REFERENCES schedule (id)');
        $this->addSql('ALTER TABLE store ADD CONSTRAINT FK_FF575877A81EA377 FOREIGN KEY (sunday_id) REFERENCES schedule (id)');
        $this->addSql('ALTER TABLE store ADD CONSTRAINT FK_FF575877B86AC6FA FOREIGN KEY (saturday_id) REFERENCES schedule (id)');
        $this->addSql('ALTER TABLE store ADD CONSTRAINT FK_FF575877BBA2EEBE FOREIGN KEY (wednesday_id) REFERENCES schedule (id)');
        $this->addSql('ALTER TABLE store ADD CONSTRAINT FK_FF575877D68DEE5D FOREIGN KEY (thursday_id) REFERENCES schedule (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FF575877A81EA377 ON store (sunday_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FF57587721671777 ON store (monday_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FF575877BBA2EEBE ON store (wednesday_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FF575877812B93DE ON store (friday_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FF575877B86AC6FA ON store (saturday_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FF5758775B974FE2 ON store (tuesday_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FF575877D68DEE5D ON store (thursday_id)');
    }
}
