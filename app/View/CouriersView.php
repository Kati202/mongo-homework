<?php
namespace App\View;

class CouriersView
{
    public static function Show()
    {
        ViewsView::OpenSection('Új futár adatai megadása');

        echo '<form method="post" action="index.php" id="courierForm">';
        
        echo self::CreateInput('Neve', 'name');
        echo self::CreateInput('Azonosító', 'id');
        echo self::CreateInput('Telefonszáma', 'phone');
        echo self::CreateInput('Jármű (Amit általában használ)', 'car');
        echo self::CreateInput('Rendszáma', 'plate_num');
         
        
        echo '<button class="btn btn-primary" name="newContact"><i class="fa-solid fa-plus"></i> Futár adat hozzáadása</button>';
    
        echo '</form>';
        
        ViewsView::CloseSection();
    }

    private static function CreateInput($text, $name)
    {
        $html = '<div class="mb-3">
            <label for="' . $name . '" class="form-label">' . $text . '</label>
            <input type="text" name="' . $name . '" id="' . $name . '" class="form-control">
        </div>';

        return $html;
    }
}
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('courierForm');
    const inputs = form.querySelectorAll('input[type="text"]');
    inputs.forEach((input, index) => {
        input.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                const nextInput = inputs[index + 1];
                if (nextInput) {
                    nextInput.focus();
                } else {
                    
                    form.querySelector('button[name="newContact"]').focus();
                }
            }
        });
    });
});
</script>