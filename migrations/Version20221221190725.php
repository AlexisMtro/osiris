<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221221190725 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO commander (name) VALUES ('Julius Caesar')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Constantine')");
        $this->addSql("INSERT INTO commander (name) VALUES ('YSG')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Cao Cao')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Richard')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Minamoto')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Charles Martel')");
        $this->addSql("INSERT INTO commander (name) VALUES ('El Cid')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Wu Zetian')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Alexander')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Aethelflaed')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Guan')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Ramsesses')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Harald')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Zenobia')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Trajan')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Xy')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Pakal')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Nevsky')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Flavius')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Scipio')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Boudica Prime')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Joan Prime')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Barca')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Mehmed')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Mulan')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Tomyris')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Leonidas')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Honda')");
        $this->addSql("INSERT INTO commander (name) VALUES ('YSS')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Saladin')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Edward')");
        $this->addSql("INSERT INTO commander (name) VALUES ('William')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Sargon')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Attila')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Takeda')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Khan')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Artemisia')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Chandra')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Cyrius')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Nebu')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Jadwiga')");
        $this->addSql("INSERT INTO commander (name) VALUES ('CJG')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Gilgamesh')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Amanitore')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Bertrand')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Henry')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Jan Zizka')");
        $this->addSql("INSERT INTO commander (name) VALUES ('Tariq')");

        $this->addSql("INSERT INTO accessory (name) VALUES ('Scolas Coin')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Ring of Doom')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Greatest Glory')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Horn of Fury')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Vengeance')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Pendant of Eternal Night')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('War Drums')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Dagger')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Mora\'s Web')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Seth\'s Call')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Delane\'s Amulet')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Silent Trial')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Call of the Loyal')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Wind Scars')");
        $this->addSql("INSERT INTO accessory (name) VALUES ('Ancient Strategems')");

        $this->addSql("INSERT INTO boot (name) VALUES ('Shio\'s Return')");
        $this->addSql("INSERT INTO boot (name) VALUES ('Commander\'s Boots')");
        $this->addSql("INSERT INTO boot (name) VALUES ('Mountain Crushers')");
        $this->addSql("INSERT INTO boot (name) VALUES ('Sturdy Boots of the Eternal Empire')");
        $this->addSql("INSERT INTO boot (name) VALUES ('Boots of the Hellish Wasteland')");
        $this->addSql("INSERT INTO boot (name) VALUES ('Dragon\'s Breath Boots')");
        $this->addSql("INSERT INTO boot (name) VALUES ('Cloud Racers')");
        $this->addSql("INSERT INTO boot (name) VALUES ('Frost Treads')");
        $this->addSql("INSERT INTO boot (name) VALUES ('Flame Treads')");

        $this->addSql("INSERT INTO leg (name) VALUES ('Ash of the Dawn')");
        $this->addSql("INSERT INTO leg (name) VALUES ('Cape of the War God')");
        $this->addSql("INSERT INTO leg (name) VALUES ('Greaves of the Eternal Empire')");
        $this->addSql("INSERT INTO leg (name) VALUES ('Dragon\'s Breath Tassets')");
        $this->addSql("INSERT INTO leg (name) VALUES ('Eternal Night')");
        $this->addSql("INSERT INTO leg (name) VALUES ('Tassets of the Hellish Wasteland')");
        $this->addSql("INSERT INTO leg (name) VALUES ('Fanatic\'s Tassets')");
        $this->addSql("INSERT INTO leg (name) VALUES ('Karuak\'s Humility')");
        $this->addSql("INSERT INTO leg (name) VALUES ('Gladiator')");
        $this->addSql("INSERT INTO leg (name) VALUES ('Revival Greaves')");

        $this->addSql("INSERT INTO glove (name) VALUES ('Vambraces of the Eternal Empire')");
        $this->addSql("INSERT INTO glove (name) VALUES ('Dragon\'s Breath Vambraces')");
        $this->addSql("INSERT INTO glove (name) VALUES ('Armband of the Hellish Wasteland')");
        $this->addSql("INSERT INTO glove (name) VALUES ('Ian\'s Choice')");
        $this->addSql("INSERT INTO glove (name) VALUES ('Sacred Grips')");
        $this->addSql("INSERT INTO glove (name) VALUES ('Navar\'s Control')");
        $this->addSql("INSERT INTO glove (name) VALUES ('Iset\'s Sufferance')");
        $this->addSql("INSERT INTO glove (name) VALUES ('Seth\'s Brutality')");
        $this->addSql("INSERT INTO glove (name) VALUES ('Revival Gauntlets')");

        $this->addSql("INSERT INTO chest (name) VALUES ('Shadow Legion\'s Retribution')");
        $this->addSql("INSERT INTO chest (name) VALUES ('Hope Cloak')");
        $this->addSql("INSERT INTO chest (name) VALUES ('The Milky Way')");
        $this->addSql("INSERT INTO chest (name) VALUES ('Plate of the Eternal Empire')");
        $this->addSql("INSERT INTO chest (name) VALUES ('Dragon\'s Breath Plate')");
        $this->addSql("INSERT INTO chest (name) VALUES ('Heavy Armor of the Hellish Wasteland')");
        $this->addSql("INSERT INTO chest (name) VALUES ('Quinn\'s Soul')");
        $this->addSql("INSERT INTO chest (name) VALUES ('Revival Plate')");
        $this->addSql("INSERT INTO chest (name) VALUES ('Dark Lord\'s Blessing')");

        $this->addSql("INSERT INTO helm (name) VALUES ('Dragon\'s Breath Helm')");
        $this->addSql("INSERT INTO helm (name) VALUES ('Gold Helm of the Eternal Empire')");
        $this->addSql("INSERT INTO helm (name) VALUES ('War Helm of the Hellish Wasteland')");
        $this->addSql("INSERT INTO helm (name) VALUES ('Pride of the Khan')");
        $this->addSql("INSERT INTO helm (name) VALUES ('Helm of the Conqueror')");
        $this->addSql("INSERT INTO helm (name) VALUES ('Ancestral Mask of Night')");
        $this->addSql("INSERT INTO helm (name) VALUES ('Revival Helm')");
        $this->addSql("INSERT INTO helm (name) VALUES ('Abyssal Visage')");
        $this->addSql("INSERT INTO helm (name) VALUES ('Witch\'s Lineage')");

        $this->addSql("INSERT INTO weapon (name) VALUES ('Shield of the Eternal Empire')");
        $this->addSql("INSERT INTO weapon (name) VALUES ('Dragon\'s Breath Bow')");
        $this->addSql("INSERT INTO weapon (name) VALUES ('Sacred Dominion')");
        $this->addSql("INSERT INTO weapon (name) VALUES ('Hammer of the Sun and Moon')");
        $this->addSql("INSERT INTO weapon (name) VALUES ('The Hydra\'s Blast')");
        $this->addSql("INSERT INTO weapon (name) VALUES ('Rifle of the Hellish Wasteland')");
        $this->addSql("INSERT INTO weapon (name) VALUES ('Trial of the Lost Kingdom')");
        $this->addSql("INSERT INTO weapon (name) VALUES ('Golden Age')");
        $this->addSql("INSERT INTO weapon (name) VALUES ('Sakura Fubuki')");
        $this->addSql("INSERT INTO weapon (name) VALUES ('Heart of the Saint')");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql("TRUNCATE TABLE commander");
        $this->addSql("TRUNCATE TABLE accessory");
        $this->addSql("TRUNCATE TABLE boot");
        $this->addSql("TRUNCATE TABLE leg");
        $this->addSql("TRUNCATE TABLE glove");
        $this->addSql("TRUNCATE TABLE chest");
        $this->addSql("TRUNCATE TABLE helm");
        $this->addSql("TRUNCATE TABLE weapon");

    }
}
