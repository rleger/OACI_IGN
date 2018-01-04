<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;

class TilesController extends Controller
{
    /**
     * Get the tiles
     *
     * @param int $resolution
     */
    public function index($resolution = 50)
    {
        // Get the list of files
        $tiles = collect(File::files("images/$resolution"))->map(function($item){
            return $item->getFilename();
        })
            // Map the list of files to an array
            ->map(function ($val, $key) use ($resolution) {
                $parts = preg_split( '/(_|\.)/', $val);
                $col = $parts[1];
                $row = $parts[2];

                return [
                    'col' => $col,
                    'row' => $row,
                    'value' => $val,
                    'url' => "$resolution/$val"
                ];
            })
            // Sort it and group it
            ->sortBy('col')
            ->groupBy('row')
            ->sortBy('col')
            ->sort()
            // Get it out
            ->toArray();

        // Debug
        // dd($tiles);

        return view('welcome', compact('tiles'));
    }
}
