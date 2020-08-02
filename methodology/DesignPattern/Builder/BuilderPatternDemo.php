<?php

namespace DesignPattern\Builder;

class BuilderPatternDemo
{
    public static function run()
    {
        $mealBuild = new MealBuilder();
        $vegMeal = $mealBuild->prepareVegMeal();
        $vegMeal->showItems();
        echo "Total Cost: " . $vegMeal->getCost();

        $vegMeal = $mealBuild->prepareNonVegMeal();
        $vegMeal->showItems();
        echo "Total Cost: " . $vegMeal->getCost();
    }
}
