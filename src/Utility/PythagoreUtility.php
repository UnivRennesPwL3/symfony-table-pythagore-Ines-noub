<?php
// src/Utility/PythagoreUtility.php
namespace App\Utility;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table width="50%" style="border-collapse: collapse">';
        $html .= "<tr>";
        for ($i = 0; $i <= 10; $i++) {
            $html .= "<th>$i</th>";
        }
        $html .= "</tr>";

        for ($i = 1; $i <= 10; $i++) {
            $html .= $i % 2 !== 0 ? "<tr class='impair'><th>$i</th>" : "<tr><th>$i</th>";
            for ($j = 1; $j <= 10; $j++) {
                if ($i === $j) {
                    $html .= "<td>X</td>";
                } else {
                    $html .= "<td>" . ($i * $j) . "</td>";
                }
            }
            $html .= "</tr>";
        }

        $html .= "</table>";
        return $html;
    }
}
