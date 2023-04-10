<?php
    header('Access-Control-Allow-Origin: *');
  
    $animals = [
        [   
            "img" => "horse.jpg",
            "type" => "Horse",
            "name" => "Arabian horse",
            "scientific_name" => "Equus caballus",
            "class" => "Mammals",
            "description" => ["206 Bones","Four Legs","25-30 yrs Lifes","Herbivores",]
        ],
        [   
            "img" => "cat.jpg",
            "type" => "Cat",
            "name" => "American Bobtail Cat",
            "scientific_name" => "Felis silvestris catus",
            "class" => "Mammals",
            "description" => ["230 Bones","Four Legs","10-20 yrs Lifes","Carnivores",]
        ],
        [   
            "img" => "salamander.jpeg",
            "type" => "Salamander",
            "name" => "Spotted salamander",
            "scientific_name" => "Urodela",
            "class" => "Amphibians",
            "description" => ["60 Bones","Four Legs","25-30 yrs Lifes","Carnivores",]
        ],
        [   
            "img" => "dog.jpeg",
            "type" => "Dog",
            "name" => "German Shepherd",
            "scientific_name" => "Caris lupus familiaris",
            "class" => "Mammals",
            "description" => ["321 Bones","Four Legs","10-13 yrs Lifes","Omnivores",]
        ],
        [   
            "img" => "elephant.jpeg",
            "type" => "Elephant",
            "name" => "African forest elephant",
            "scientific_name" => "Loxodonta africana and Elephas maximus",
            "class" => "Mammals",
            "description" => ["351 Bones","Four Legs","60-70 yrs Lifes","Herbivores",]
        ],
        [   
            "img" => "tiger.jpg",
            "type" => "Tiger",
            "name" => "Caspian tiger",
            "scientific_name" => "Panthera tigris",
            "class" => "Mammals",
            "description" => ["432 Bones","Four Legs","10-20 yrs Lifes","Carnivores",]
        ],
  

    ];

    $data = json_encode($animals);
    echo $data;
    
?>