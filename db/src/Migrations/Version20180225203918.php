<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180225203918 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE plant (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) DEFAULT NULL, deciduous_evergreen VARCHAR(100) DEFAULT NULL, sun_shade_preference VARCHAR(100) DEFAULT NULL, shade_tolerance VARCHAR(100) DEFAULT NULL, performance_rating VARCHAR(100) DEFAULT NULL, fertility VARCHAR(100) DEFAULT NULL, cover VARCHAR(100) DEFAULT NULL, flowers VARCHAR(100) DEFAULT NULL, description VARCHAR(500) DEFAULT NULL, size VARCHAR(100) DEFAULT NULL, cultivation VARCHAR(100) DEFAULT NULL, uses VARCHAR(100) DEFAULT NULL, harvest_and_storage VARCHAR(100) DEFAULT NULL, cooking_processing VARCHAR(100) DEFAULT NULL, secondary_uses VARCHAR(100) DEFAULT NULL, propagation VARCHAR(100) DEFAULT NULL, maintenance VARCHAR(100) DEFAULT NULL, number_of_seeds_per_ounce VARCHAR(100) DEFAULT NULL, min_legal_germination_rate VARCHAR(100) DEFAULT NULL, ounces_volume_seed_per100sq_ft VARCHAR(100) DEFAULT NULL, short_long_extra_long_germination_time VARCHAR(100) DEFAULT NULL, plant_initially_in_flats_in_beds VARCHAR(100) DEFAULT NULL, number_of_plants_per_flat VARCHAR(100) DEFAULT NULL, number_of_first_flats_per100sq_ft VARCHAR(100) DEFAULT NULL, number_of_weeks_in_first_flat VARCHAR(100) DEFAULT NULL, depth_of_second_flat_and_spacing VARCHAR(100) DEFAULT NULL, number_of_plants_in_second_flat VARCHAR(100) DEFAULT NULL, number_of_second_flats_per100sq_ft VARCHAR(100) DEFAULT NULL, number_of_weeks_in_second_flat VARCHAR(100) DEFAULT NULL, in_bed_spacing VARCHAR(100) DEFAULT NULL, max_number_of_plants_per100sq_ft VARCHAR(100) DEFAULT NULL, possible_biointensive_yield_in_pounds_per100sq_ft_planting VARCHAR(100) DEFAULT NULL, average_usyield_in_pounds_per100sq_ft VARCHAR(100) DEFAULT NULL, max_pounds_seed_yield_per100sq_ft VARCHAR(100) DEFAULT NULL, number_of_years_to_bearing VARCHAR(100) DEFAULT NULL, number_of_years_to_max_bearing VARCHAR(100) DEFAULT NULL, number_of_weeks_in_harvesting_period VARCHAR(100) DEFAULT NULL, time_of_year_to_plant VARCHAR(100) DEFAULT NULL, pounds_consumed_per_year_by_average_person_in_us VARCHAR(100) DEFAULT NULL, protein_content_per_pound_in_grams VARCHAR(100) DEFAULT NULL, calorie_content_per_pound VARCHAR(100) DEFAULT NULL, calcium_content_per_pound_in_milligrams VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE plant');
    }
}
