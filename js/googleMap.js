function drawmap() { 

    select = document.getElementById("select");
    choice = select.selectedIndex  // Récupération de l'index du <option> choisi
    
    if(choice != 0){ // Si le choix est différent de 0 (=> aucun trajet) selectionné donc affichage map vide
                            // document.getElementById('googlemap').document.getElementById('map') pour utiliser iframe
    

        var positions = [
            [ // première case vide pour éviter l'index 0 qui correspond à aucune map sélectionnée
            ], 
            [
                ['pos0', 48.862725, 2.287592000000018],
                ['pos1', 48.86396756548766, 2.290919065126218],
                ['pos3', 48.864870975482596, 2.2941806312883273], // Trajet 1
                ['pos4', 48.865702850895744, 2.303180694580078],
                ['pos5', 48.867025918747984, 2.3062920570373535],
                ['pos6', 48.86874792472021, 2.309854030609131],
                ['pos7', 48.867646976914415, 2.314145565032959],
                ['pos8', 48.865981394448596, 2.3197245597839355]
            ],
            [
                ['pos0', 44.854278730486925, -0.598454475402832],
                ['pos1', 44.85330519229076, -0.5945920944213867],
                ['pos3', 44.85184485413844, -0.590815544128418], // Trajet 2     === > Le code d'affichage de la map sera modifié en version finale
                ['pos4', 44.850936180537666, -0.5881762504577637],//                        Avec des données qui proviennent de la BDD et non en dur
                ['pos5', 44.85014513609698, -0.5862021446228027],
                ['pos6', 44.84892812343491, -0.5831551551818848],
                ['pos7', 44.85008428607462, -0.5817389488220215] 
            ],
            [
                ['pos0', 44.833469826480986, -0.5617833137512207],
                ['pos1', 44.83681744752019, -0.5653882026672363],
                ['pos3', 44.83995186182966, -0.5685639381408691], // Trajet 3
                ['pos4', 44.84452029397131, -0.5707311630249023],
                ['pos5', 44.84859344044468, -0.5706667900085449]
            ]

        ];
// Recherche du centre pour afficher la map
        centre = positions[choice][0]; // On va se centrer sur le point de départ

// Initialisation d'une map
        map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: new google.maps.LatLng(centre[1], centre[2]),
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              scrollwheel:false
        });
 
    // Recuperation des coordonnées pour placer les points
        var path = [];
        for (var i = 0; i < positions[choice].length; i++) {
            var pos = positions[choice][i];
            var myLatLng = new google.maps.LatLng(pos[1], pos[2]);
         
            //construction et affichage des positions
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
         
            // On passe aux coordonnées suivantes
            path[i] = myLatLng;
        }
    }else{ // Si l'index vaut 0, on affiche une map vide centrée sur la france
        map = new google.maps.Map(document.getElementById('map'), {
              zoom: 5,
              center: new google.maps.LatLng(46.650693, 2.291382),
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              scrollwheel:false
            });
    }

// Une fois la boucle terminée, et l'Array rempli,
// on crée la Polyline qui représente le trajet
    var parcours = new google.maps.Polyline({
        path: path,
        strokeColor: "#FF0000",
        strokeOpacity: 1.0,
        strokeWeight: 2
    });

// On affiche le trajet sur la map
    parcours.setMap(map);

// Si l'utilisateur a choisi d'afficher les zones à risques
    if(document.getElementById('toggle1').checked == true){
        
        // Initialisation des coordonnées des zones à risque en dur, à terme elles seront en BDD
        var coordZoneRisque = 
        [
            [
                new google.maps.LatLng(44.84713298282045, -0.576932430267334),
                new google.maps.LatLng(44.848045773174995, -0.5798935890197754),
                new google.maps.LatLng(44.84993216073741, -0.5817818641662598), 
                new google.maps.LatLng(44.850510234881185, -0.579078197479248),
                new google.maps.LatLng(44.849475782315075, -0.5753445625305176)
            ],
            [
                new google.maps.LatLng(44.837456515774015, -0.5737996101379395),
                new google.maps.LatLng(44.83996910521333, -0.5741751194000244),
                new google.maps.LatLng(44.84089722402537, -0.570763349533081),
                new google.maps.LatLng(44.83837148863509, -0.5700767040252686)
            ],
            [
                new google.maps.LatLng(44.8555169255099, -0.6043875217437744),
                new google.maps.LatLng(44.85563861401078, -0.6013405323028564),
                new google.maps.LatLng(44.85419354645894, -0.5985939502716064),
                new google.maps.LatLng(44.84961472454225, -0.6015121936798096),
                new google.maps.LatLng(44.85016237689402, -0.6043446063995361),
                new google.maps.LatLng(44.85124245376998, -0.6054174900054932),
                new google.maps.LatLng(44.852940744892756, -0.6063682440435514),
                new google.maps.LatLng(44.85396752948225, -0.604780376306735)
            ],
            [
                new google.maps.LatLng(48.86038129016708, 2.285894035594538),
                new google.maps.LatLng(48.85891310894454, 2.288812279002741),
                new google.maps.LatLng(48.862117641220166, 2.292932152049616),
                new google.maps.LatLng(48.8636986564483, 2.2905718081165105),
                new google.maps.LatLng(48.8626117138441, 2.28758919169195)
            ],
            [
                new google.maps.LatLng(48.86378335228321, 2.3216639750171453),
                new google.maps.LatLng(48.8663382759214, 2.323595165507868),
                new google.maps.LatLng(48.862639946418156, 2.3352252244512783),
                new google.maps.LatLng(48.86046599161598, 2.3329936265508877)
            ]
        ];

        // boucle sur les coordonnées
        for(var i=0; i<coordZoneRisque.length; i++){
            zoneRisque = new google.maps.Polygon({
                paths: coordZoneRisque[i],//sommets du polygone
                strokeColor: "#FF0000",//couleur des bords du polygone
                strokeOpacity: 0.8,//opacité des bords du polygone
                strokeWeight: 2,//épaisseur des bords du polygone
                fillColor: "#FF0000",//couleur de remplissage du polygone
                fillOpacity: 0.35////opacité de remplissage du polygone
            });
            // On affiche le polygone sur la map
            zoneRisque.setMap(map);
        }
    }
}