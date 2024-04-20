
<?php
    // Stabilisci la connessione al database
    $conn = new mysqli('localhost', 'root', '', 'statistiche');

    // Controlla se la connessione è riuscita
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
        
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $scuderia = $_POST['scuderia'];
        $pilota1 = $_POST['pilota1'];
        $pilota2 = $_POST['pilota2'];

        $utente = "AdviceLOL";

        // Controlla se l'utente esiste già
        $checkSql = "SELECT * FROM squadra WHERE utente = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("s", $utente);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult->num_rows > 0) {
            // La squadra esiste già, invia una risposta appropriata
            echo json_encode(["error" => "La squadra è già stata fatta."]);
        } else {
            // La squadra non esiste, inserisci i dati
            $sql = "INSERT INTO squadra (utente,scuderia, pilota1, pilota2) VALUES (? ,?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $utente, $scuderia, $pilota1, $pilota2);

            if($stmt->execute()) {
                echo json_encode(["success" => "Squadra salvata con successo."]);
            } else {
                echo json_encode(["error" => "Errore: " . $stmt->error]);
            }
        }
        } else {
            echo json_encode(["error" => "No POST data received."]);
        }

    
?>
<script>
    
</script>