<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210629091327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule ADD plaqueimmatriculation VARCHAR(255) NOT NULL, ADD nbkilometre INT NOT NULL, ADD dateachat VARCHAR(255) NOT NULL, ADD prixachat INT NOT NULL, ADD dureelocation INT NOT NULL, DROP plaque_immatriculation, DROP nb_kilometre, DROP date_achat, DROP prix_achat, DROP duree_location');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule ADD plaque_immatriculation VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD nb_kilometre INT NOT NULL, ADD date_achat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD prix_achat INT NOT NULL, ADD duree_location INT NOT NULL, DROP plaqueimmatriculation, DROP nbkilometre, DROP dateachat, DROP prixachat, DROP dureelocation');
    }
}
