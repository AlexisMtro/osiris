<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230114105401 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO boot (name) VALUES ('Windswept Boots')");
        $this->addSql("INSERT INTO glove (name) VALUES ('Windswept Bracers')");
        $this->addSql("INSERT INTO chest (name) VALUES ('Windswept Breastplate')");
        $this->addSql("INSERT INTO helm (name) VALUES ('Windswept War Helm')");
        $this->addSql("ALTER TABLE march ADD updated_at DateTime");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
