<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221221165032 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accessory (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE boot (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chest (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commander (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE glove (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE helm (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE leg (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE march (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_commander_1_id INT NOT NULL, id_commander_2_id INT DEFAULT NULL, helm_id INT DEFAULT NULL, chest_id INT DEFAULT NULL, weapon_id INT DEFAULT NULL, glove_id INT DEFAULT NULL, leg_id INT DEFAULT NULL, boot_id INT DEFAULT NULL, accessory_1_id INT DEFAULT NULL, accessory_2_id INT DEFAULT NULL, iconic_helm TINYINT(1) NOT NULL, crit_helm TINYINT(1) NOT NULL, iconic_chest TINYINT(1) NOT NULL, crit_chest TINYINT(1) NOT NULL, iconic_weapon TINYINT(1) NOT NULL, crit_weapon TINYINT(1) NOT NULL, iconic_glove TINYINT(1) NOT NULL, crit_glove TINYINT(1) NOT NULL, iconic_leg TINYINT(1) NOT NULL, crit_leg TINYINT(1) NOT NULL, iconic_boot TINYINT(1) NOT NULL, crit_boot TINYINT(1) NOT NULL, iconic_accessory_1 TINYINT(1) NOT NULL, crit_accessory_1 TINYINT(1) NOT NULL, iconic_accessory_2 TINYINT(1) NOT NULL, crit_accessory_2 TINYINT(1) NOT NULL, INDEX IDX_7ED6B9B779F37AE5 (id_user_id), INDEX IDX_7ED6B9B712CA58CC (id_commander_1_id), INDEX IDX_7ED6B9B77FF722 (id_commander_2_id), INDEX IDX_7ED6B9B77182EAA5 (helm_id), INDEX IDX_7ED6B9B7180955AC (chest_id), INDEX IDX_7ED6B9B795B82273 (weapon_id), INDEX IDX_7ED6B9B7E9D2E3A9 (glove_id), INDEX IDX_7ED6B9B7A0D74527 (leg_id), INDEX IDX_7ED6B9B71ED8F448 (boot_id), INDEX IDX_7ED6B9B7EC8A10E1 (accessory_1_id), INDEX IDX_7ED6B9B7FE3FBF0F (accessory_2_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, id_user VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D6496B3CA4B (id_user), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE weapon (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B779F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B712CA58CC FOREIGN KEY (id_commander_1_id) REFERENCES commander (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B77FF722 FOREIGN KEY (id_commander_2_id) REFERENCES commander (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B77182EAA5 FOREIGN KEY (helm_id) REFERENCES helm (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B7180955AC FOREIGN KEY (chest_id) REFERENCES chest (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B795B82273 FOREIGN KEY (weapon_id) REFERENCES weapon (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B7E9D2E3A9 FOREIGN KEY (glove_id) REFERENCES glove (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B7A0D74527 FOREIGN KEY (leg_id) REFERENCES leg (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B71ED8F448 FOREIGN KEY (boot_id) REFERENCES boot (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B7EC8A10E1 FOREIGN KEY (accessory_1_id) REFERENCES accessory (id)');
        $this->addSql('ALTER TABLE march ADD CONSTRAINT FK_7ED6B9B7FE3FBF0F FOREIGN KEY (accessory_2_id) REFERENCES accessory (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B779F37AE5');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B712CA58CC');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B77FF722');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B77182EAA5');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B7180955AC');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B795B82273');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B7E9D2E3A9');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B7A0D74527');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B71ED8F448');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B7EC8A10E1');
        $this->addSql('ALTER TABLE march DROP FOREIGN KEY FK_7ED6B9B7FE3FBF0F');
        $this->addSql('DROP TABLE accessory');
        $this->addSql('DROP TABLE boot');
        $this->addSql('DROP TABLE chest');
        $this->addSql('DROP TABLE commander');
        $this->addSql('DROP TABLE glove');
        $this->addSql('DROP TABLE helm');
        $this->addSql('DROP TABLE leg');
        $this->addSql('DROP TABLE march');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE weapon');
    }
}
