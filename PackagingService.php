<?php

namespace Packaging;

interface LegacyPackagingServiceInterface
{

    function ValidateItemDimensions (array $items) : bool;

    /**
     * @return array of Packages
     */
    function PackageItems (Warehouse $warehouse, array $items) :array;

    /**
     * @return array of packages
     */
    function OptimizePackaging (array $packages) : array ;

}