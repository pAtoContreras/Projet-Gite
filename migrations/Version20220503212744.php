<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503212744 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipements (id INT AUTO_INCREMENT NOT NULL, nom_equipement VARCHAR(50) NOT NULL, type_equipement VARCHAR(50) NOT NULL, cout INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournir_equipements (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournir_equipements_equipements (fournir_equipements_id INT NOT NULL, equipements_id INT NOT NULL, INDEX IDX_88C038EC65F29F6E (fournir_equipements_id), INDEX IDX_88C038EC852CCFF5 (equipements_id), PRIMARY KEY(fournir_equipements_id, equipements_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournir_equipements_gite (fournir_equipements_id INT NOT NULL, gite_id INT NOT NULL, INDEX IDX_449B72B465F29F6E (fournir_equipements_id), INDEX IDX_449B72B4652CAE9B (gite_id), PRIMARY KEY(fournir_equipements_id, gite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournir_services (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournir_services_services (fournir_services_id INT NOT NULL, services_id INT NOT NULL, INDEX IDX_7A94886B29C3B69D (fournir_services_id), INDEX IDX_7A94886BAEF5A6C1 (services_id), PRIMARY KEY(fournir_services_id, services_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournir_services_gite (fournir_services_id INT NOT NULL, gite_id INT NOT NULL, INDEX IDX_39B8149729C3B69D (fournir_services_id), INDEX IDX_39B81497652CAE9B (gite_id), PRIMARY KEY(fournir_services_id, gite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gite (id INT AUTO_INCREMENT NOT NULL, id_proprietaire_id INT NOT NULL, region VARCHAR(100) NOT NULL, departement VARCHAR(100) NOT NULL, ville VARCHAR(100) NOT NULL, code_postal VARCHAR(5) NOT NULL, surface INT NOT NULL, nb_chambres INT NOT NULL, nb_couchage INT NOT NULL, tarif_jour_bs INT NOT NULL, tarif_jour_hs INT NOT NULL, prix_animaux INT NOT NULL, adresse VARCHAR(180) NOT NULL, UNIQUE INDEX UNIQ_B638C92C9F9BCDC2 (id_proprietaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proprietaire (id INT AUTO_INCREMENT NOT NULL, nom_proprietaire VARCHAR(50) NOT NULL, tel_proprietaire VARCHAR(20) NOT NULL, mail_proprietaire VARCHAR(255) NOT NULL, horaires_disponibilites VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, nom_service VARCHAR(100) NOT NULL, cout_service INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fournir_equipements_equipements ADD CONSTRAINT FK_88C038EC65F29F6E FOREIGN KEY (fournir_equipements_id) REFERENCES fournir_equipements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fournir_equipements_equipements ADD CONSTRAINT FK_88C038EC852CCFF5 FOREIGN KEY (equipements_id) REFERENCES equipements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fournir_equipements_gite ADD CONSTRAINT FK_449B72B465F29F6E FOREIGN KEY (fournir_equipements_id) REFERENCES fournir_equipements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fournir_equipements_gite ADD CONSTRAINT FK_449B72B4652CAE9B FOREIGN KEY (gite_id) REFERENCES gite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fournir_services_services ADD CONSTRAINT FK_7A94886B29C3B69D FOREIGN KEY (fournir_services_id) REFERENCES fournir_services (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fournir_services_services ADD CONSTRAINT FK_7A94886BAEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fournir_services_gite ADD CONSTRAINT FK_39B8149729C3B69D FOREIGN KEY (fournir_services_id) REFERENCES fournir_services (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fournir_services_gite ADD CONSTRAINT FK_39B81497652CAE9B FOREIGN KEY (gite_id) REFERENCES gite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gite ADD CONSTRAINT FK_B638C92C9F9BCDC2 FOREIGN KEY (id_proprietaire_id) REFERENCES proprietaire (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournir_equipements_equipements DROP FOREIGN KEY FK_88C038EC852CCFF5');
        $this->addSql('ALTER TABLE fournir_equipements_equipements DROP FOREIGN KEY FK_88C038EC65F29F6E');
        $this->addSql('ALTER TABLE fournir_equipements_gite DROP FOREIGN KEY FK_449B72B465F29F6E');
        $this->addSql('ALTER TABLE fournir_services_services DROP FOREIGN KEY FK_7A94886B29C3B69D');
        $this->addSql('ALTER TABLE fournir_services_gite DROP FOREIGN KEY FK_39B8149729C3B69D');
        $this->addSql('ALTER TABLE fournir_equipements_gite DROP FOREIGN KEY FK_449B72B4652CAE9B');
        $this->addSql('ALTER TABLE fournir_services_gite DROP FOREIGN KEY FK_39B81497652CAE9B');
        $this->addSql('ALTER TABLE gite DROP FOREIGN KEY FK_B638C92C9F9BCDC2');
        $this->addSql('ALTER TABLE fournir_services_services DROP FOREIGN KEY FK_7A94886BAEF5A6C1');
        $this->addSql('DROP TABLE equipements');
        $this->addSql('DROP TABLE fournir_equipements');
        $this->addSql('DROP TABLE fournir_equipements_equipements');
        $this->addSql('DROP TABLE fournir_equipements_gite');
        $this->addSql('DROP TABLE fournir_services');
        $this->addSql('DROP TABLE fournir_services_services');
        $this->addSql('DROP TABLE fournir_services_gite');
        $this->addSql('DROP TABLE gite');
        $this->addSql('DROP TABLE proprietaire');
        $this->addSql('DROP TABLE services');
    }
}
