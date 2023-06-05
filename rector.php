<?php

use Rector\CodingStyle\Rector\FuncCall\ConsistentPregDelimiterRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/tests',
    ]);

    // here we can define, what sets of rules will be applied,
    // tip: use "SetList" class to autocomplete sets.
    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
        SetList::EARLY_RETURN,
        SetList::NAMING,
        SetList::PHP_80,
        SetList::PHP_81,
    ]);

    $rectorConfig->ruleWithConfiguration(ConsistentPregDelimiterRector::class, [
        ConsistentPregDelimiterRector::DELIMITER => '/',
    ]);

    $rectorConfig->skip([
        Rector\Naming\Rector\ClassMethod\RenameParamToMatchTypeRector::class,
        Rector\CodingStyle\Rector\Switch_\BinarySwitchToIfElseRector::class,
        Rector\CodingStyle\Rector\PostInc\PostIncDecToPreIncDecRector::class,
        Rector\CodingStyle\Rector\ClassConst\VarConstantCommentRector::class,
        Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class,
        Rector\CodingStyle\Rector\ClassMethod\UnSpreadOperatorRector::class,
        Rector\CodingStyle\Rector\Closure\StaticClosureRector::class,
        Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector::class,
        Rector\Php81\Rector\ClassConst\FinalizePublicClassConstantRector::class,
    ]);
};
