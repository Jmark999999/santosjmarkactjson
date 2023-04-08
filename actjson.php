<?php
    header('Access-Control-Allow-Origin: *');
  
    $animals = [
        [   
            "img" => "horse.jpg",
            "type" => "Horse",
            "name" => "Arabian horse",
            "scientific_name" => "Equus caballus",
            "class" => "Mammals",
            "parts" => ["206 Bones","Four Legs","25-30 yrs Lifes","Herbivores",]
        ],
        [   
            "img" => "horse.jpg",
            "type" => "Horse",
            "name" => "Arabian horse",
            "scientific_name" => "Equus caballus",
            "class" => "Mammals",
            "parts" => ["206 Bones","Four Legs","25-30 yrs Lifes","Herbivores",]
        ],
        [   
            "img" => "horse.jpg",
            "type" => "Horse",
            "name" => "Arabian horse",
            "scientific_name" => "Equus caballus",
            "class" => "Mammals",
            "parts" => ["206 Bones","Four Legs","25-30 yrs Lifes","Herbivores",]
        ],
        [   
            "img" => "horse.jpg",
            "type" => "Horse",
            "name" => "Arabian horse",
            "scientific_name" => "Equus caballus",
            "class" => "Mammals",
            "parts" => ["206 Bones","Four Legs","25-30 yrs Lifes","Herbivores",]
        ],
        [   
            "img" => "horse.jpg",
            "type" => "Horse",
            "name" => "Arabian horse",
            "scientific_name" => "Equus caballus",
            "class" => "Mammals",
            "parts" => ["206 Bones","Four Legs","25-30 yrs Lifes","Herbivores",]
        ],
        [   
            "img" => "horse.jpg",
            "type" => "Horse",
            "name" => "Arabian horse",
            "scientific_name" => "Equus caballus",
            "class" => "Mammals",
            "parts" => ["206 Bones","Four Legs","25-30 yrs Lifes","Herbivores",]
        ],
        [   
            "img" => "horse.jpg",
            "type" => "Horse",
            "name" => "Arabian horse",
            "scientific_name" => "Equus caballus",
            "class" => "Mammals",
            "parts" => ["206 Bones","Four Legs","25-30 yrs Lifes","Herbivores",]
        ],
        [   
            "img" => "horse.jpg",
            "type" => "Horse",
            "name" => "Arabian horse",
            "scientific_name" => "Equus caballus",
            "class" => "Mammals",
            "parts" => ["206 Bones","Four Legs","25-30 yrs Lifes","Herbivores",]
        ],
       
  

    ];

    $data = json_encode($animals);
    echo $data;
    
?>