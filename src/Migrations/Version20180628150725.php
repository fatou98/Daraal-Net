<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180628150725 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bergeries (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, INDEX IDX_64F53252A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE betes (id INT AUTO_INCREMENT NOT NULL, bergerie_id INT NOT NULL, images_id INT NOT NULL, race_id INT NOT NULL, nom VARCHAR(255) NOT NULL, date_naissance VARCHAR(255) NOT NULL, taille VARCHAR(255) NOT NULL, poids VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, etat TINYINT(1) NOT NULL, INDEX IDX_AB56ABE9CE34D277 (bergerie_id), INDEX IDX_AB56ABE9D44F05E5 (images_id), INDEX IDX_AB56ABE96E59D40D (race_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commandes (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, bete_id INT NOT NULL, date DATETIME NOT NULL, etat TINYINT(1) NOT NULL, INDEX IDX_35D4282CA76ED395 (user_id), INDEX IDX_35D4282C40D64147 (bete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, libelles VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE races (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bergeries ADD CONSTRAINT FK_64F53252A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE betes ADD CONSTRAINT FK_AB56ABE9CE34D277 FOREIGN KEY (bergerie_id) REFERENCES bergeries (id)');
        $this->addSql('ALTER TABLE betes ADD CONSTRAINT FK_AB56ABE9D44F05E5 FOREIGN KEY (images_id) REFERENCES images (id)');
        $this->addSql('ALTER TABLE betes ADD CONSTRAINT FK_AB56ABE96E59D40D FOREIGN KEY (race_id) REFERENCES races (id)');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282C40D64147 FOREIGN KEY (bete_id) REFERENCES betes (id)');
        $this->addSql('ALTER TABLE user CHANGE numpiece numpiece INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE betes DROP FOREIGN KEY FK_AB56ABE9CE34D277');
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282C40D64147');
        $this->addSql('ALTER TABLE betes DROP FOREIGN KEY FK_AB56ABE9D44F05E5');
        $this->addSql('ALTER TABLE betes DROP FOREIGN KEY FK_AB56ABE96E59D40D');
        $this->addSql('DROP TABLE bergeries');
        $this->addSql('DROP TABLE betes');
        $this->addSql('DROP TABLE commandes');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE races');
        $this->addSql('ALTER TABLE user CHANGE numpiece numpiece TINYINT(1) NOT NULL');
    }
}
