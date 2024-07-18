<?php
namespace App\View;

class CouriersSearchResult
{
    public static function SearchResult($couriers) 
    {
        ViewsView::OpenSection('Keresési eredmények');
        
        echo '<table class="table table-bordered table-hover">';
        echo '<thead><tr>
                <th>Neve</th><th>Azonosító</th><th>Telefonszáma</th><th>Jármű</th><th>Rendszám</th>
            </tr></thead><tbody>';
        
        foreach ($couriers as $courier) {
            $name = $courier['name'] ?? '<i>Névtelen</i>';
            $id = $courier['id'] ?? '-';
            $phone = $courier['phone'] ?? '-';
            $car = $courier['car'] ?? '-';
            $plate_num = $courier['plate_num'] ?? '-';
            

            echo '<tr>
                <td>' . htmlspecialchars($name) . '</td>
                <td>' . htmlspecialchars($id) . '</td>
                <td>' . htmlspecialchars($phone) . '</td>
                <td>' . htmlspecialchars($car) . '</td>
                <td>' . htmlspecialchars($plate_num) . '</td>
                
            </tr>';
        }
        
        echo '</tbody></table>';
        
        ViewsView::CloseSection();
    }
}
?>