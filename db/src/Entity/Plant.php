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

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $deciduousEvergreen;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $sunShadePreference;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $shadeTolerance;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $performanceRating;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $fertility;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cover;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $flowers;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cultivation;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $uses;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $harvestAndStorage;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cookingProcessing;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $secondaryUses;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $propagation;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $maintenance;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfSeedsPerOunce;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $minLegalGerminationRate;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ouncesVolumeSeedPer100SqFt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $shortLongExtraLongGerminationTime;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $plantInitiallyInFlatsInBeds;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfPlantsPerFlat;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfFirstFlatsPer100SqFt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfWeeksInFirstFlat;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $depthOfSecondFlatAndSpacing;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfPlantsInSecondFlat;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfSecondFlatsPer100SqFt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfWeeksInSecondFlat;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $inBedSpacing;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $maxNumberOfPlantsPer100SqFt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $possibleBiointensiveYieldInPoundsPer100SqFtPlanting;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $averageUSYieldInPoundsPer100SqFt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $maxPoundsSeedYieldPer100SqFt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfYearsToBearing;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfYearsToMaxBearing;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $numberOfWeeksInHarvestingPeriod;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $timeOfYearToPlant;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $poundsConsumedPerYearByAveragePersonInUS;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $proteinContentPerPoundInGrams;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $calorieContentPerPound;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $calciumContentPerPoundInMilligrams;
}
