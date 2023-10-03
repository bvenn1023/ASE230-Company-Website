
        <?php
      
        $contacts = [
            ['name' => 'Brady Venneman', 'email' => 'vennemanb1@nku.edu', 'phone' => '123-456-7890'],
            ['name' => 'Hunter Perry', 'email' => 'perryh2@nku.edu', 'phone' => '859-567-8910'],
            ['name' => 'Will Cuthbert', 'email' => 'cuthbertw1@nku.edu', 'phone' => '859-219-4789'],
           
        ];

  
        foreach ($contacts as $contact) {
            echo "<tr>";
            echo "<td>{$contact['name']}</td>";
            echo "<td>{$contact['email']}</td>";
            echo "<td>{$contact['phone']}</td>";
            echo "</tr>";
        }
        ?>

