<?PHP

date_default_timezone_set('Europe/Paris');

$departement = $_GET['departement'];
$zone        = $_GET['zone'];
$tomorrow    = $_GET['tomorrow'];

if ($tomorrow == '1') {
    $Date = date("Ymd", strtotime('tomorrow'));
    $massif = "+1";
} else {
    $Date = date("Ymd");
    $massif = "";
}

$jsonUrlPontEntente = "http://emz.pont-entente.org/maps/$departement/import_data/$Date.json";
#$jsonUrlPontEntente = "http://emz.pont-entente.org/maps/13/import_data/20200610.json";
$jsonPontEntente    = @file_get_contents($jsonUrlPontEntente);

if ($jsonPontEntente) {
    
    //$jsonPontEntente = '{"massifs":{"22":[2],"23":[2],"21":[2],"19":[2],"20":[2],"16":[2],"17":[2],"7":[2],"18":[2],"15":[2],"8":[2],"9":[2],"5":[2],"6":[2],"4":[3],"3":[3],"1":[3],"2":[3],"13":[2],"11":[2],"10":[2],"12":[2],"24":[2],"14":[2]}}';
    
    $jsonPontEntenteDecode = json_decode($jsonPontEntente, true);
    $opening               = $jsonPontEntenteDecode['massifs'][$zone][0];
    
    
    switch ($departement) {
        
        case '13':
            
            switch ($zone) {
                case '1':
                    $massif .= " Montagnette";
                    break;
                case '2':
                    $massif .= " Rougadou";
                    break;
                case '3':
                    $massif .= " Alpilles";
                    break;
                case '4':
                    $massif .= " Chambremont";
                    break;
                case '5':
                    $massif .= " Chaine des Cotes";
                    break;
                case '6':
                    $massif .= " Trevaresse";
                    break;
                case '7':
                    $massif .= " Concors - Sainte-Victoire - Cengle";
                    break;
                case '8':
                    $massif .= " Lunard - Pont de Rhaud";
                    break;
                case '9':
                    $massif .= " Lancon - La Fare";
                    break;
                case '10':
                    $massif .= " Quatre termes";
                    break;
                case '11':
                    $massif .= " Sulauze";
                    break;
                case '12':
                    $massif .= " Barjaquets - Baoubacoua";
                    break;
                case '13':
                    $massif .= " Arbois";
                    break;
                case '14':
                    $massif .= " Montaiguet";
                    break;
                case '15':
                    $massif .= " Castillon";
                    break;
                case '16':
                    $massif .= " Collines de Gardanne";
                    break;
                case '17':
                    $massif .= " Regagnas";
                    break;
                case '18':
                    $massif .= " Cote bleue";
                    break;
                case '19':
                    $massif .= " Etoile";
                    break;
                case '20':
                    $massif .= " Garlaban";
                    break;
                case '21':
                    $massif .= " Sainte-Baume";
                    break;
                case '22':
                    $massif .= " Calanques";
                    break;
                case '23':
                    $massif .= " Marcouline";
                    break;
                case '24':
                    $massif .= " Cap Canaille";
                    break;
                default:
                    $massif .= " Massif indisponible";
            }
            
            switch ($opening) {
                case 0:
                    // question
                    $icon = "i11366";
                    break;
                case 1:
                    // vert
                    $icon = "i11367";
                    break;
                case 2:
                    // jaune
                    $icon = "i1536";
                    break;
                case 3:
                    // rouge
                    $icon = "i259";
                    break;
                case 4:
                    // orange
                    $icon = "i10478";
                    break;
                default:
                    $icon = "i11366";
            }
            
            break;
        
        case '84':
            
            switch ($zone) {
                case '1':
                    $massif .= " Basse Durance";
                    break;
                case '2':
                    $massif .= " Monts de Vaucluse";
                    break;
                case '3':
                    $massif .= " Luberon";
                    break;
                case '4':
                    $massif .= " Enclave des Papes";
                    break;
                case '5':
                    $massif .= " Ventoux";
                    break;
                case '6':
                    $massif .= " Uchaux";
                    break;
                case '7':
                    $massif .= " Dentelles de Montmirail";
                    break;
                case '8':
                    $massif .= " Comtat Venaissin";
                    break;
                case '9':
                    $massif .= " Vallee du Rhone";
                    break;
                case '10':
                    $massif .= " Vallee d'Apt";
                    break;
                default:
                    $massif .= " Massif indisponible";
            }
            
            switch ($opening) {
                case 0:
                    // question
                    $icon = "i11366";
                    break;
                case 1:
                    // jaune
                    $icon = "i1536";
                    break;
                case 2:
                    // rouge
                    $icon = "i259";
                    break;
                default:
                    $icon = "i11366";
            }
            
            break;
        
        case '83':
            
            switch ($zone) {
                case '1':
                    $massif .= " Monts Toulonnais";
                    break;
                case '2':
                    $massif .= " Sainte-Baume";
                    break;
                case '3':
                    $massif .= " Haut-Var";
                    break;
                case '4':
                    $massif .= " Corniche des Maures";
                    break;
                case '5':
                    $massif .= " Corniche des Maures";
                    break;
                case '6':
                    $massif .= " Centre Var";
                    break;
                case '7':
                    $massif .= " Plateau de Canjuers";
                    break;
                case '8':
                    $massif .= " Esterel";
                    break;
                case '9':
                    $massif .= " Iles d'Hyeres";
                    break;
                default:
                    $massif .= " Massif indisponible";
            }
            
            switch ($opening) {
                case 0:
                    // question
                    $icon = "i11366";
                    break;
                case 1:
                    // jaune
                    $icon = "i1536";
                    break;
                case 2:
                    // rouge
                    $icon = "i259";
                    break;
                default:
                    $icon = "i11366";
            }
            
            break;
        
        
        default:
            $icon   = "i11366";
            $massif .= " Departement indisponible";
            
    }
    
} else {
    // Build frames array with error message
    $icon   = "i11366";
    $massif .= " Pas de donnees dispo";
}

$laMetricFrame = array(
    'frames' => array(
        0 => array(
            'text' => $massif,
            'icon' => $icon,
            'index' => 0
        )
    )
);
header('Content-Type: application/json');

echo json_encode($laMetricFrame);

?>