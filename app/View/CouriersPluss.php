<?php
namespace App\View;

class CouriersPluss
{
    public static function ShowList($couriers, $search = null) 
    {
        ViewsView::OpenSection('Futár táblázat');
        
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
            $courierId = $courier['_id']->__toString();

            echo '<tr>
                <td>' . $name . '</td>
                <td>' . $id . '</td>
                <td>' . $phone . '</td>
                <td>' . $car . '</td>
                <td>' . $plate_num . '</td>
                <td>
                    <a href="?del=' . $courierId . '" title="Törlés" class="link-danger" onclick="return confirm(\'Biztosan törlöd ezt a futárt?\');"><i class="h5 fa-solid fa-trash"></i></a>
                </td>
               </tr>';
        }
        
        echo '</tbody></table>';
        
        ViewsView::CloseSection();
    }
}
?>