<?php
$biodata = [
    "name" => "Atia Khairuni Can",
    "age" => 24,
    "hobbies" => ["Travelling", "Cullinary", "Watching"],
    "isMarried" => false,
    "schoolList" => [
        "name" => [
            "Andalas University",
            "SMAN 7 Padang",
        ],
        "yearIn" => [
            2015,
            2012
        ],
        "yearOut" => [
            2019,
            2015
        ],
        "major" => [
            "Mathematics",
            "IPA"
        ]
    ],
    "skills" => [
        "skillName" => [
            "Fullstack Developer",
            "Devops Engineer",
            "Python"
        ],
        "level" => [
            "Intermediet",
            "Intermediet",
            "Beginner"
        ]
    ],
    "interestInCoding" => true
];

var_dump($biodata);
echo "<br/><br/>";



function averageNGrade($mtk, $bInd, $bIng, $ipa) {
    if (is_numeric($mtk) && is_numeric($bInd) && is_numeric($bIng) && is_numeric($ipa) &&
        $mtk != null && $bInd != null && $bIng != null && $ipa != null &&
        $mtk >= 0 && $bInd >= 0 && $bIng >= 0 && $ipa >= 0 &&
        $mtk <= 100 && $bInd <= 100 && $bIng <= 100 && $ipa <= 100
    ) {
        $average = ($mtk + $bInd + $bIng + $ipa) / 4;
        if ($average >= 90) {
            $grade = "A";
        }
        else if ($average >= 80) {
            $grade = "B";
        }
        else if ($average >= 70) {
            $grade = "C";
        }
        else if ($average >= 60) {
            $grade = "D";
        }
        else {
            $grade = "E";
        }
        return "Rata-rata = $average <br/> Grade = $grade";
    }
    else {
        return "Check your input.";
    }
}

echo averageNGrade(["80"], 79, 79, 79);
echo "<br/><br/>";



function printSegitiga($n) {
    $row = "";
    for ($i=1; $i<=$n; $i++) {
        for ($j=1; $j<=$n+1-$i; $j++) {
            $row .= $j." ";
        }
        $row .= "<br/>";
    }
    return $row;
}

echo printSegitiga(5);
echo "<br/>";



$data = [
    "id" => 1,
    "name" => "Atia Khairuni Can",
    "username" => "atiakhairunican",
    "email" => "atiakhairunican@gmail.com",
    "address" => [
        "street" => "Mandala",
        "suite" => "Perumdam 4",
        "city" => "Padang",
        "zipcode" => 25176
    ],
    "phone" => "082286678796",
    "website" => "www.teras-rindang.tech"
];

["street" => $street, "city" => $city] = $data["address"];
echo $street."<br/>".$city;