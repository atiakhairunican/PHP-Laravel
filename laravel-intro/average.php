<?php

namespace Score;

class Average{
    public function average($mtk, $bInd, $bIng, $ipa) {
        $avg = ($mtk + $bInd + $bIng + $ipa) / 4;
        return [$avg, $mtk, $bInd, $bIng, $ipa];
    }
}

class Grade extends Average{
    private $grade;
    public function getGrade($mtk, $bInd, $bIng, $ipa){
        if ($this->average($mtk, $bInd, $bIng, $ipa)[0] > 90) {
            $grade = "A";
        }
        else if ($this->average($mtk, $bInd, $bIng, $ipa)[0] > 80) {
            $grade = "B";
        }
        else if ($this->average($mtk, $bInd, $bIng, $ipa)[0] > 70) {
            $grade = "C";
        }
        else if ($this->average($mtk, $bInd, $bIng, $ipa)[0] > 60) {
            $grade = "D";
        }
        else {
            $grade = "E";
        }
        return $grade;
    }
}