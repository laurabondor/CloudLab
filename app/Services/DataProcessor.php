<?php

namespace App\Services;

class DataProcessor
{
    public function evaluate($data)
    {
        $results = [];
        
        $Sex = $data['sex'] == 'masculin' ? 'Male' : 'Female';  
        $Age = $data['age'];
        $items = 121;
        
        $ss = array_fill(0, $items, 0);
        for ($i = 1; $i <= 120; $i++) {
            $ss[$i] = $data["Q{$i}"] ?? 0; 
        }

        // Number each facet set from 1-6
        $NF = $EF = $OF = $AF = $CF = array_fill(0, $items, 0);
        $j = 0;
        for ($i = 1; $i <= 6; $i++) {
            $NF[$i] = $ss[$i + $j];
            $EF[$i] = $ss[$i + $j + 1];
            $OF[$i] = $ss[$i + $j + 2];
            $AF[$i] = $ss[$i + $j + 3];
            $CF[$i] = $ss[$i + $j + 4];
            $j += 4;
        }

        // Score domain scales
        $N = $ss[1] + $ss[6] + $ss[11] + $ss[16] + $ss[21] + $ss[26];
        $E = $ss[2] + $ss[7] + $ss[12] + $ss[17] + $ss[22] + $ss[27];
        $O = $ss[3] + $ss[8] + $ss[13] + $ss[18] + $ss[23] + $ss[28];
        $A = $ss[4] + $ss[9] + $ss[14] + $ss[19] + $ss[24] + $ss[29];
        $C = $ss[5] + $ss[10] + $ss[15] + $ss[20] + $ss[25] + $ss[30];

        // Standardize scores
        $norm = [];
        $Category = "";
        if ($Sex == "Male" && $Age < 21) {
            $norm = [
                0, 67.84, 80.70, 85.98, 81.98, 79.66, 15.83, 15.37, 12.37, 14.66, 14.49,
                11.72, 11.93, 10.58, 12.38, 11.67,  9.63,  3.76,  4.41,  4.25,  3.83,  3.25, 3.38,
                13.76, 12.23, 14.06, 11.54, 14.67, 14.41,  3.78,  4.17,  3.66,  3.15,  3.38, 3.68,
                16.68, 14.51, 14.52, 12.84, 15.47, 11.86,  2.96,  3.87,  3.31,  3.16,  3.50, 3.17,
                13.18, 14.85, 15.37, 12.73, 12.01, 13.96,  3.69,  3.44,  3.10,  4.05,  3.94, 3.35,
                15.31, 10.97, 15.22, 13.61, 12.35, 12.08,  2.55,  3.93,  2.92,  3.65,  3.24, 4.02
            ];
            $Category = "males less than 21 years of age";
        } elseif ($Sex == "Male" && $Age > 20 && $Age < 41) {
            $norm = [
                0, 66.97, 78.90, 86.51, 84.22, 85.50, 16.48, 15.21, 12.65, 13.10, 14.27,
                11.44, 11.75, 10.37, 12.11, 12.18,  9.13,  3.76, 4.30,   4.12,  3.81, 3.52, 3.48,
                13.31, 11.34, 14.58, 12.07, 13.34, 14.30,  3.80, 3.99,   3.58,  3.23, 3.43, 3.53,
                15.94, 14.94, 14.60, 13.14, 16.11, 11.66,  3.18, 3.63,   3.19,  3.39, 3.25, 3.72,
                12.81, 15.93, 15.37, 14.58, 12.60, 15.59,  3.66, 3.43,   3.33,  3.76, 3.71, 3.55,
                15.46, 12.66, 14.90, 13.44, 12.67, 12.82,  3.07, 4.07,   2.79,  3.86, 3.62, 3.60
            ];
            $Category = "males between 21 and 40 years of age";
        }  elseif ($Sex == "Male" && $Age > 40 && $Age < 61) {
            $norm = [
                    0, 64.11, 77.06, 83.04, 88.33, 91.27, 16.04,  14.31, 13.05, 11.76, 13.35,
                    10.79, 11.60,  9.78, 11.85, 11.24,  8.81,  3.56,  4.16,  3.94,  3.62,   3.55, 3.35,
                    13.22, 10.45, 14.95, 12.27, 11.82, 14.32,  3.71,  3.68,  3.44,  3.30,   3.23, 3.29,
                    14.65, 14.66, 14.76, 12.69, 15.40, 11.04,  3.35,  3.59,  3.02,  3.44,   3.43, 3.93,
                    13.42, 16.94, 15.65, 15.66, 11.96, 14.21,  3.49,  2.83,  2.88,  3.33,   3.34, 3.17,
                    16.19, 13.33, 16.56, 16.51, 14.05, 14.60,  2.25,  4.32,  2.50,  2.93,   3.13, 3.78
            ];
            $Category = "males between 41 and 60 years of age";
        } elseif ($Sex == "Male" && $Age > 60) {
            $norm = [
                0,  58.42, 79.73, 79.78, 90.20, 95.31, 15.48, 13.63, 12.21, 11.73, 11.99,
                9.81, 11.46,  8.18, 11.08,  9.91,  8.24,  3.54,  4.31,  3.59,  3.82,  3.36, 3.28,
                14.55, 11.19, 15.29, 12.81, 11.03, 15.02,  3.47,  3.58,  3.10,  3.25,  2.88, 3.16,
                14.06, 14.22, 14.34, 12.42, 14.61, 10.11,  3.13,  3.64,  2.90,  3.20,  3.89, 4.02,
                13.96, 17.74, 15.76, 16.18, 11.87, 14.00,  3.13,  2.39,  2.74,  3.41,  3.50, 3.11,
                16.32, 14.41, 17.54, 16.65, 14.98, 15.18,  2.31,  4.49,  2.30,  2.68,  2.76, 3.61
            ];
            $Category = "men over 60 years of age";
        } elseif ($Sex == "Female" && $Age < 21) {
            $norm = [
                    0, 73.41, 84.26, 89.01, 89.14, 81.27, 15.61, 14.98, 11.84,  13.21, 14.38,
                    13.31, 13.09, 11.05, 12.11, 12.48, 11.30,  3.62,  4.18,  4.20,  3.82,  3.30, 3.47,
                    14.47, 13.12, 14.03, 12.67, 14.69, 15.34,  3.60,  4.13,  3.68,  3.09,  3.48, 3.42,
                    16.86, 15.93, 16.02, 12.95, 15.06, 12.17,  2.89,  3.44,  2.95,  3.24,  3.51, 3.02,
                    13.46, 16.11, 16.66, 13.73, 13.23, 15.70,  3.72,  2.94,  2.69,  4.14,  3.79, 2.84,
                    15.30, 11.11, 15.62, 14.69, 12.73, 11.82,  2.54,  4.17,  2.76,  3.37,  3.19, 4.01
            ];
            $Category = "females less than 21 years of age";
        } elseif ($Sex == "Female" && $Age > 20 && $Age < 41) {
            $norm = [
                    0, 72.14, 80.78, 88.25, 91.91, 87.57, 16.16, 14.64, 12.15, 11.39, 13.87,
                    13.08, 12.72, 10.79, 12.20, 12.71, 10.69,  3.68,  4.13,  4.07,  3.79,  3.58, 3.64,
                    14.05, 11.92, 14.25, 12.77, 12.84, 14.96,  3.66,  4.05,  3.61,  3.24,  3.53, 3.31,
                    15.64, 15.97, 16.41, 12.84, 15.28, 12.06,  3.34,  3.30,  2.69,  3.44,  3.47, 3.46,
                    13.15, 17.34, 16.81, 15.57, 12.98, 15.52,  3.71,  2.61,  2.53,  3.50,  3.57, 2.87,
                    16.02, 12.67, 16.36, 16.11, 13.56, 12.91,  2.34,  4.51,  2.54,  3.05,  3.23, 4.18
            ];
            $Category = "females between 21 and 40 years of age";
        }  elseif ($Sex == "Female" && $Age > 40 && $Age < 61) {
            $norm = [
                0, 67.38, 78.62, 86.15, 95.73, 93.45, 16.10, 14.19, 12.62, 9.84, 12.94,
                12.05, 11.19, 10.07, 12.07, 11.98, 10.07,  3.72,  4.03,  3.97, 3.73, 3.69, 3.56,
                14.10, 10.84, 14.51, 13.03, 11.08, 15.00,  3.72,  3.86,  3.50, 3.46, 3.42, 3.26,
                14.43, 16.00, 16.37, 12.58, 14.87, 11.85,  3.49,  3.20,  2.58, 3.45, 3.65, 3.74,
                13.79, 18.16, 17.04, 17.02, 13.41, 15.82,  3.52,  2.21,  2.40, 2.88, 3.30, 2.71,
                16.50, 13.68, 17.29, 17.16, 14.35, 14.41,  2.16,  4.51,  2.27, 2.73, 3.13, 3.86
            ];
            $Category = "females between 41 and 60 years of age";
        } elseif ($Sex == "Female" && $Age > 60) {
            $norm = [
                    0, 63.48, 78.22, 81.56, 97.17, 96.44, 14.92, 12.73, 12.66, 9.52,  12.43,
                    11.39, 10.52,  9.10, 12.00, 10.21,  9.87,  3.61,  3.82,  3.68, 3.61,  3.58, 3.44,
                    14.85, 10.93, 14.19, 12.76, 10.08, 15.65,  3.43,  3.70,  3.64, 3.26,  3.20, 3.04,
                    13.15, 15.95, 15.73, 11.80, 14.21, 10.81,  3.71,  3.12,  2.74, 3.26,  3.47, 3.89,
                    14.19, 18.64, 17.13, 17.98, 13.58, 15.83,  3.39,  1.90,  2.18, 2.56,  3.38, 2.85,
                    16.50, 15.15, 18.34, 17.19, 14.70, 15.11,  2.24,  4.07,  1.81, 2.49,  3.15, 3.66
            ];
            $Category = "women over 60 years of age";
        }

        // Compute scores for the five main facets
        $SN = (10 * ($N - $norm[1]) / $norm[6]) + 50;
        $SE = (10 * ($E - $norm[2]) / $norm[7]) + 50;
        $SO = (10 * ($O - $norm[3]) / $norm[8]) + 50;
        $SA = (10 * ($A - $norm[4]) / $norm[9]) + 50;
        $SC = (10 * ($C - $norm[5]) / $norm[10]) + 50;

        // Initialize arrays for facet scores
        $SNF = array_fill(0, $items, 0);
        $SEF = array_fill(0, $items, 0);
        $SOF = array_fill(0, $items, 0);
        $SAF = array_fill(0, $items, 0);
        $SCF = array_fill(0, $items, 0);

        for ($i = 1; $i <= 6; $i++) {
            $SNF[$i] = 50 + (10 * ($NF[$i] - $norm[$i + 10]) / $norm[$i + 16]);
            $SEF[$i] = 50 + (10 * ($EF[$i] - $norm[$i + 22]) / $norm[$i + 28]);
            $SOF[$i] = 50 + (10 * ($OF[$i] - $norm[$i + 34]) / $norm[$i + 40]);
            $SAF[$i] = 50 + (10 * ($AF[$i] - $norm[$i + 46]) / $norm[$i + 52]);
            $SCF[$i] = 50 + (10 * ($CF[$i] - $norm[$i + 58]) / $norm[$i + 64]);
        }

        // Constants for cubic approximations
        $CONST1 = 210.335958661391;
        $CONST2 = 16.7379362643389;
        $CONST3 = 0.405936512733332;
        $CONST4 = 0.00270624341822222;

        $SNP = intval($CONST1 - ($CONST2 * $SN) + ($CONST3 * pow($SN, 2)) - ($CONST4 * pow($SN, 3)));
        $SEP = intval($CONST1 - ($CONST2 * $SE) + ($CONST3 * pow($SE, 2)) - ($CONST4 * pow($SE, 3)));
        $SOP = intval($CONST1 - ($CONST2 * $SO) + ($CONST3 * pow($SO, 2)) - ($CONST4 * pow($SO, 3)));
        $SAP = intval($CONST1 - ($CONST2 * $SA) + ($CONST3 * pow($SA, 2)) - ($CONST4 * pow($SA, 3)));
        $SCP = intval($CONST1 - ($CONST2 * $SC) + ($CONST3 * pow($SC, 2)) - ($CONST4 * pow($SC, 3)));

        // Adjust scores based on conditions
        if ($SN < 32) $SNP = 1;
        if ($SE < 32) $SEP = 1;
        if ($SO < 32) $SOP = 1;
        if ($SA < 32) $SAP = 1;
        if ($SC < 32) $SCP = 1;

        if ($SN > 73) $SNP = 99;
        if ($SE > 73) $SEP = 99;
        if ($SO > 73) $SOP = 99;
        if ($SA > 73) $SAP = 99;
        if ($SC > 73) $SCP = 99;

        // Create percentile scores and labels for facets
        $SNFP = array_fill(0, $items, 0);
        $SEFP = array_fill(0, $items, 0);
        $SOFP = array_fill(0, $items, 0);
        $SAFP = array_fill(0, $items, 0);
        $SCFP = array_fill(0, $items, 0);

        $flev = array_fill(0, $items, 0);

        for ($i = 1; $i <= 6; $i++) {
            $flev[$i] = $SNF[$i] < 45 ? "low" : ($SNF[$i] >= 45 && $SNF[$i] <= 55 ? "average" : "high");
            $SNFP[$i] = intval($CONST1 - ($CONST2 * $SNF[$i]) + ($CONST3 * pow($SNF[$i], 2)) - ($CONST4 * pow($SNF[$i], 3)));
            if ($SNF[$i] < 32) $SNFP[$i] = 1;
            if ($SNF[$i] > 73) $SNFP[$i] = 99;
        }

        for ($i = 1; $i <= 6; $i++) {
            $flev[$i + 6] = $SEF[$i] < 45 ? "low" : ($SEF[$i] >= 45 && $SEF[$i] <= 55 ? "average" : "high");
            $SEFP[$i] = intval($CONST1 - ($CONST2 * $SEF[$i]) + ($CONST3 * pow($SEF[$i], 2)) - ($CONST4 * pow($SEF[$i], 3)));
            if ($SEF[$i] < 32) $SEFP[$i] = 1;
            if ($SEF[$i] > 73) $SEFP[$i] = 99;
        }

        for ($i = 1; $i <= 6; $i++) {
            $flev[$i + 12] = $SOF[$i] < 45 ? "low" : ($SOF[$i] >= 45 && $SOF[$i] <= 55 ? "average" : "high");
            $SOFP[$i] = intval($CONST1 - ($CONST2 * $SOF[$i]) + ($CONST3 * pow($SOF[$i], 2)) - ($CONST4 * pow($SOF[$i], 3)));
            if ($SOF[$i] < 32) $SOFP[$i] = 1;
            if ($SOF[$i] > 73) $SOFP[$i] = 99;
        }

        for ($i = 1; $i <= 6; $i++) {
            $flev[$i + 18] = $SAF[$i] < 45 ? "low" : ($SAF[$i] >= 45 && $SAF[$i] <= 55 ? "average" : "high");
            $SAFP[$i] = intval($CONST1 - ($CONST2 * $SAF[$i]) + ($CONST3 * pow($SAF[$i], 2)) - ($CONST4 * pow($SAF[$i], 3)));
            if ($SAF[$i] < 32) $SAFP[$i] = 1;
            if ($SAF[$i] > 73) $SAFP[$i] = 99;
        }

        for ($i = 1; $i <= 6; $i++) {
            $flev[$i + 24] = $SCF[$i] < 45 ? "low" : ($SCF[$i] >= 45 && $SCF[$i] <= 55 ? "average" : "high");
            $SCFP[$i] = intval($CONST1 - ($CONST2 * $SCF[$i]) + ($CONST3 * pow($SCF[$i], 2)) - ($CONST4 * pow($SCF[$i], 3)));
            if ($SCF[$i] < 32) $SCFP[$i] = 1;
            if ($SCF[$i] > 73) $SCFP[$i] = 99;
        }

        $LO = 45;
        $HI = 55;

        $labels = ['EXTRAVERSION', 'Friendliness', 'Gregariousness', 'Assertiveness', 'ActivityLevel', 'ExcitementSeeking', 'Cheerfulness'];
        $m = [];
        $m[$labels[0]] = $SEP;
        for ($i = 1; $i < count($labels); $i++) {
            $m[$labels[$i]] = $SEFP[$i];
        }
        $results[] = $m;

        $labels = ['AGREEABLENESS', 'Trust', 'Morality', 'Altruism', 'Cooperation', 'Modesty', 'Sympathy'];
        $m = [];
        $m[$labels[0]] = $SAP;
        for ($i = 1; $i < count($labels); $i++) {
            $m[$labels[$i]] = $SAFP[$i];
        }
        $results[] = $m;

        $labels = ['CONSCIENTIOUSNESS', 'SelfEfficacy', 'Orderliness', 'Dutifulness', 'AchievementStriving', 'SelfDiscipline', 'Cautiousness'];
        $m = [];
        $m[$labels[0]] = $SCP;
        for ($i = 1; $i < count($labels); $i++) {
            $m[$labels[$i]] = $SCFP[$i];
        }
        $results[] = $m;

        $labels = ['NEUROTICISM', 'Anxiety', 'Anger', 'Depression', 'SelfConsciousness', 'Immoderation', 'Vulnerability'];
        $m = [];
        $m[$labels[0]] = $SNP;
        for ($i = 1; $i < count($labels); $i++) {
            $m[$labels[$i]] = $SNFP[$i];
        }
        $results[] = $m;

        $labels = ['OPENNESS', 'Imagination', 'ArtisticInterests', 'Emotionality', 'Adventurousness', 'Intellect', 'Liberalism'];
        $m = [];
        $m[$labels[0]] = $SOP;
        for ($i = 1; $i < count($labels); $i++) {
            $m[$labels[$i]] = $SOFP[$i];
        }
        $results[] = $m;
        
        return $results;
    }
}