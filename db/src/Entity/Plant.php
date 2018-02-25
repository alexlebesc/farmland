<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlantRepository")
 */
class Plant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    private $name;

    private $deciduousEvergreen;

    private $sunShadePreference;

    private $shadeTolerance;

    private $performanceRating;

    private $fertility;

    private $cover;

    private $flowers;

    private $description;

    private $size;

    private $cultivation;

    private $uses;

    private $harvestAndStorage;

    private $cookingProcessing;

    private $secondaryUses;

    private $propagation;

    private $maintenance;

    private $numberOfSeedsPerOunce;

    private $minLegalGerminationRate;

    private $ouncesVolumeSeedPer100SqFt;

    private $shortLongExtraLongGerminationTime;

    private $plantInitiallyInFlatsInBeds;

    private $numberOfPlantsPerFlat;

    private $numberOfFirstFlatsPer100SqFt;

    private $numberOfWeeksInFirstFlat;

    private $depthOfSecondFlatAndSpacing;

    private $numberOfPlantsInSecondFlat;

    private $numberOfSecondFlatsPer100SqFt;

    private $numberOfWeeksInSecondFlat;

    private $inBedSpacing;

    private $maxNumberOfPlantsPer100SqFt;

    private $possibleBiointensiveYieldInPoundsPer100SqFtPlanting;

    private $averageUSYieldInPoundsPer100SqFt;

    private $maxPoundsSeedYieldPer100SqFt;

    private $numberOfYearsToBearing;

    private $numberOfYearsToMaxBearing;

    private $numberOfWeeksInHarvestingPeriod;

    private $timeOfYearToPlant;

    private $poundsConsumedPerYearByAveragePersonInUS;

    private $proteinContentPerPoundInGrams;

    private $calorieContentPerPound;

    private $calciumContentPerPoundInMilligrams;
}
