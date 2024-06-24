<?php
for($i=0;$i<9;$i++){
    $seats=serialize([$i*2,$i*2+1]);
    $sql="INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seat`) VALUES (NULL, '20240624000{$i}', '院線片0{$i}', '2024-06-24', '14:00~16:00', '1', '$seats');";
    echo $sql . "<br>";
}
// INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seat`) VALUES (NULL, '202406240001', '院線片01', '2024-06-24', '14:00~16:00', '1', '');