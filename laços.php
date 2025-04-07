<?php
//com for
for ($i= 0; $i <= 5; $i++) {
  echo "estou no n: $i\n";
};

//foreach
$tecnologias = ["JavaScript", "React", "Node.js", "PHP"];
foreach ($tecnologias as $tecnologia) {
  echo "Tecnologia que eu conheço: $tecnologia <br>\n";
}


while($i <= 4 and $i >= 0){
  echo "4 ainda é maior ou igual a $i\n";
  $i-- ;
}

do {
  if ($i < 5) {
    echo "i não é grande o suficiente";
    break;
  }
  echo "i está ok";

} while (0);